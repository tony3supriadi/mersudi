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

    public function scopeWhereAge($query, $age)
    {
        if ($age <= 8) {
            return $query->where('id', '<=', 1);
        } else if ($age <= 9) {
            return $query->where('id', '<=', 2);
        } else if ($age <= 10) {
            return $query->where('id', '<=', 3);
        } else if ($age <= 11) {
            return $query->where('id', '<=', 4);
        } else if ($age <= 12) {
            return $query->where('id', '<=', 5);
        } else if ($age <= 13) {
            return $query->where('id', '<=', 6);
        } else {
            return $query->where('id', '>=', 7);
        }
    }
}
