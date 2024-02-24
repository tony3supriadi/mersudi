<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class AnggotaHasKta extends Model
{
    use HasFactory, SoftDeletes;

    public const STATUS_VERIFY = "0";
    public const STATUS_ACTIVE = "1";
    public const STATUS_DENIED = "2";

    protected $table = "anggota_has_kta";
    protected $fillable = [
        'anggota_id',
        'kta_id',
        'signature_id',
        'user_id',
        'harga',
        'harga_cetak',
        'harga_kirim',
        'harga_total',
        'tanggal_berlaku',
        'tanggal_kadaluarsa',
        'invoice_number',
        'bukti_pembayaran',
        'status',
        'keterangan'
    ];

    public static function boot(): void
    {
        parent::boot();

        static::created(function ($model) {
            DB::table('anggota_has_kta_log')->insert([
                'anggota_has_kta_id' => $model->id,
                'status' => $model->status,
                'keterangan' => $model->keterangan,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        });

        static::updated(function ($model) {
            DB::table('anggota_has_kta_log')->insert([
                'anggota_has_kta_id' => $model->id,
                'status' => $model->status,
                'keterangan' => $model->keterangan,
                'verified_by' => auth()->user()->id,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        });
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'anggota_id');
    }

    public function kta()
    {
        return $this->belongsTo(MKta::class, 'kta_id');
    }

    public function signature()
    {
        return $this->belongsTo(MSignature::class, 'signature_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeVerify()
    {
        return $this->where('status', self::STATUS_VERIFY);
    }

    public function scopeActive()
    {
        return $this
            ->where('status', self::STATUS_ACTIVE)
            ->whereDate('tanggal_kadaluarsa', '>', now());
    }

    public function scopeDenied()
    {
        return $this->where('status', self::STATUS_DENIED);
    }

    public function scopeHasExpired()
    {
        return $this
            ->where('status', self::STATUS_ACTIVE)
            ->whereDate('tanggal_kadaluarsa', '<', now());
    }
}
