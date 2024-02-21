<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $table = "wilayah";
    protected $fillable = ["kode", "nama"];
    protected $primaryKey = "kode";
    protected $casts = [
        'kode' => 'string',
        'nama' => 'string'
    ];

    public static function provinces($code = null)
    {
        $query = self::whereRaw('LENGTH(kode) = 2')
            ->orderBy('nama', 'ASC');

        if ($code != null) {
            $query = $query->where('kode', $code);
        }

        return $query->get();
    }

    public static function cities($code = null)
    {
        $query = self::whereRaw('LENGTH(kode) = 5')
            ->orderBy('nama', 'ASC');

        if ($code != null) {
            $query = $query->where('kode', 'LIKE', $code . '%');
        }

        return $query->get();
    }

    public static function districts($code = null)
    {
        $query = self::whereRaw('LENGTH(kode) = 8')
            ->orderBy('nama', 'ASC');

        if ($code != null) {
            $query = $query->where('kode', 'LIKE', $code . '%');
        }

        return $query->get();
    }

    public static function villages($code = null)
    {
        $query = self::whereRaw('LENGTH(kode) > 8')
            ->orderBy('nama', 'ASC');

        if ($code != null) {
            $query = $query->where('kode', 'LIKE', $code . '%');
        }

        return $query->get();
    }

    public static function getName($code)
    {
        $wilayah = self::find($code);
        $wilayah = $wilayah->nama;
        return $wilayah;
    }
}
