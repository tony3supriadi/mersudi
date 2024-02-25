<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaSertifikatPerserta extends Model
{
    use HasFactory;

    protected $table = "anggota_sertifikat_peserta";
    protected $fillable = [
        'nomor_urut',
        'sertifikat_id',
        'anggota_id',
        'nama_lengkap',
        'jenis_kelamin',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'kelurahan',
        'alamat',
        'kodepos',
        'tempat_lahir',
        'tanggal_lahir',
        'phone',
        'email',
        'pekerjaan',
        'kewarganegaraan',
        'pengda',
        'pengcab',
        'kolat',
        'tingkatan',
        'status_pelatih'
    ];

    public function sertifikat()
    {
        return $this->belongsTo(AnggotaSertifikat::class, 'sertifikat_id');
    }
}
