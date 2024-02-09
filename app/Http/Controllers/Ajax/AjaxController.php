<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\MCabang;
use App\Models\MDaerah;
use App\Models\MKolat;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getDaerah()
    {
        $daerah = MDaerah::select('id', 'kode', 'nama')->get();
        return response()->json($daerah);
    }

    public function getCabang()
    {
        $cabang = MCabang::select('id', 'kode', 'nama');
        if (request()->has('pengda') && request()->pengda != '1') {
            $daerah = MDaerah::where('kode', request()->pengda)->firstOrFail();
            $cabang = $cabang->where('daerah_id', $daerah->id);
        }
        $cabang = $cabang->get();
        return response()->json($cabang);
    }

    public function getKolat()
    {
        $kolat = MKolat::select('id', 'kode', 'nama');
        if (request()->has('cabang') && request()->cabang != '') {
            $cabang = MCabang::where('kode', request()->cabang)->firstOrFail();
            $kolat = $kolat->where('cabang_id', $cabang->id);
        }
        $kolat = $kolat->get();
        return response()->json($kolat);
    }
}
