<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSignature extends Model
{
    use HasFactory;

    protected $table = "m_signature";
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'jabatan',
        'signature',
        'aktif',
        'keterangan'
    ];
}
