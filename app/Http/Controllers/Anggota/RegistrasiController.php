<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegistrasiController extends Controller
{
    public function index()
    {
        if (Auth::user()->datatype == 1) {
            $person = DB::table('oldb_anggota')
                ->where('agt_email', Auth::user()->email)
                ->first();
            return view('pages.anggota.pemutakhiran', compact('person'));
        }
        return view('pages.anggota.pemutakhiran');
    }

    public function oldb()
    {
        return view('pages.anggota.pemutakhiran-oldb');
    }

    public function oldb_submit(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'datatype' => $request->datatype
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Data Berhasil',
            'redirect' => route('anggota.pemutakhiran')
        ]);
    }
}
