<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\MCabang;
use App\Models\MDaerah;
use App\Models\MKolat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class AnggotaDeniedController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Anggota::with('tingkatan', 'cabang', 'daerah', 'kolat', 'provinsi')
                ->where('status', Anggota::STATUS_DENIED)
                ->orderBy('nama_lengkap', 'ASC');

            if (Auth::user()->hasRole('Pengda')) {
                $daerah = MDaerah::where('user_id', Auth::user()->id)->first();
                $query->where('daerah_id', $daerah->id);
            }

            if (Auth::user()->hasRole('Pengcab')) {
                $cabang = MCabang::where('user_id', Auth::user()->id)->first();
                $query->where('cabang_id', $cabang->id);
            }

            return DataTables::eloquent($query)
                ->filter(function ($query) use ($request) {
                    if ($request->has('pengda') && $request->pengda != '') {
                        $query_daerah = MDaerah::where('kode', $request->pengda);
                        if ($query_daerah->count()) {
                            $daerah = $query_daerah->first();
                            $query->where('daerah_id', $daerah->id);
                        }
                    }

                    if ($request->has('pengcab') && $request->pengcab != '') {
                        $query_cabang = MCabang::where('kode', $request->pengcab);
                        if ($query_cabang->count()) {
                            $cabang = $query_cabang->first();
                            $query->where('cabang_id', $cabang->id);
                        }
                    }

                    if ($request->has('kolat') && $request->kolat != '') {
                        $query_kolat = MKolat::where('kode', $request->kolat);
                        if ($query_kolat->count()) {
                            $kolat = $query_kolat->first();
                            $query->where('kolat_id', $kolat->id);
                        }
                    }
                })->toJson();
        }
        return view('pages.main.anggota.ditolak.index');
    }

    public function show(string $id)
    {
        $anggota = Anggota::with('tingkatan', 'cabang', 'daerah', 'kolat', 'provinsi', 'kabupaten', 'kecamatan', 'desa')
            ->where('status', Anggota::STATUS_DENIED)
            ->where('id', $id)
            ->firstOrFail();
        return view('pages.main.anggota.ditolak.show', compact('anggota'));
    }
}
