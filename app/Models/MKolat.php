<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MKolat extends Model
{
    use HasFactory;

    protected $table = "m_kolat";
    protected $guarded = ['id'];
    protected $fillable = [
        'kode',
        'nama',
        'alamat_sekretariat',
        'latlng',
        'status',
        'keterangan',
        'daerah_id',
        'cabang_id'
    ];

    protected $casts = [
        'kode' => 'string',
        'latlng' => 'json'
    ];

    public static function boot(): void
    {
        parent::boot();

        static::updating(function ($model) {
            DB::table('m_kolat_log')->insert([
                'user_id' => auth()->user()->id,
                'data_id' => $model->id,
                'konten' => json_encode($model->getDirty()),
                'aksi' => 'update',
                'keterangan' => 'Update Data'
            ]);
        });

        static::deleting(function ($model) {
            DB::table('m_kolat_log')
            ->where('data_id', $model->id)
                ->delete();
        });
    }

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'wilayah', 'kode');
    }

    public function daerah()
    {
        return $this->belongsTo(MDaerah::class, 'daerah_id', 'id');
    }

    public function cabang()
    {
        return $this->belongsTo(MCabang::class, 'cabang_id', 'id');
    }
}
