<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaHasKta extends Model
{
    use HasFactory;

    public const STATUS_VERIFY = 0;
    public const STATUS_ACTIVE = 1;
    public const STATUS_DENIED = 2;

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
        'status',
        'keterangan'
    ];

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

    public function invoice()
    {
        return $this->hasOne(AnggotaInvoice::class, 'anggota_has_kta_id');
    }
}
