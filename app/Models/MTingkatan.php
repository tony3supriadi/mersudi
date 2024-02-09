<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTingkatan extends Model
{
    use HasFactory;

    protected $table = "m_tingkatan";
    protected $guarded = ['id'];
    protected $fillable = [
        'kode',
        'nama',
        'keterangan'
    ];

    public function kta()
    {
        return $this->belongsToMany(MKta::class, 'm_kta_has_tingkatan', 'tingkatan_id', 'kta_id');
    }
}
