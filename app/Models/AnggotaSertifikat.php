<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaSertifikat extends Model
{
    use HasFactory;

    protected $table = "anggota_sertifikat";
    protected $fillable = [
        'model',
        'judul_kegiatan',
        'nomor_sertifikat',
        'tanggal_pelaksanaan',
        'background',
        'signature',
        'template'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->template = 'temaplete.sertifikat_202402';
        });
    }

    public function daerah()
    {
        return $this->hasOne('App\Models\MDaerah', 'id', 'model_id');
    }

    public function cabang()
    {
        return $this->hasOne('App\Models\MCabang', 'id', 'model_id');
    }

    public function peserta()
    {
        return $this->hasMany(AnggotaSertifikatPerserta::class, 'sertifikat_id');
    }
}
