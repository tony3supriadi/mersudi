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

    public function scopeActive($query)
    {
        return $query->where('aktif', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('aktif', 0);
    }

    public function scopeKetum($query)
    {
        return $query->active()->where('jabatan', 'Katua Umum');
    }

    public function scopeAw($query)
    {
        return $query->where('aktif', 1)->active()->where('jabatan', 'Ahli Waris');
    }
}
