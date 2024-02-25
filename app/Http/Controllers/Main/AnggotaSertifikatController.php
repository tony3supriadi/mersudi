<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\AnggotaSertifikat;
use App\Models\MCabang;
use App\Models\MDaerah;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AnggotaSertifikatController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = AnggotaSertifikat::with('daerah', 'cabang')
                ->orderBy('created_at', 'DESC');
            return DataTables::eloquent($query)->toJson();
        }
        return view('pages.main.anggota-sertifikat.index');
    }

    public function create()
    {
        return view('pages.main.anggota-sertifikat.create');
    }

    public function store(Request $request)
    {
    

    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
