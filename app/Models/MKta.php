<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MKta extends Model
{
    use HasFactory;

    protected $table = "m_kta";
    protected $guarded = ['id'];
    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'background',
        'keterangan'
    ];

    public function tingkatan()
    {
        return $this->belongsToMany(MTingkatan::class, 'm_kta_has_tingkatan', 'kta_id', 'tingkatan_id');
    }

    public function scopeWhereTingkatan($query, $id)
    {
        return $query->with(['tingkatan'])
            ->whereHas('tingkatan', function($q) use ($id) {
                $q->where('tingkatan_id', $id);
            });
    }
}
