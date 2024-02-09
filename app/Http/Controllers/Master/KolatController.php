<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MCabang;
use App\Models\MDaerah;
use App\Models\MKolat;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class KolatController extends Controller
{
    /**
     * Construct.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:master-kolat|master-kolat-create|master-kolat-update|master-kolat-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:master-kolat-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:master-kolat-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:master-kolat-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = MKolat::with(['daerah', 'cabang'])
                ->where('status', "1")
                ->orderBy('daerah_id')
                ->orderBy('cabang_id')
                ->orderBy('kode');
            return DataTables::eloquent($query)
                ->filter(function ($query) use ($request) {
                    if ($request->has('pengda') && $request->pengda != '') {
                        $query_daerah = MDaerah::where('kode', $request->pengda);
                        if ($query_daerah->count()) {
                            $daerah = $query_daerah->first();
                            $query->where('daerah_id', $daerah->id);
                        }
                    }

                    if ($request->has('cabang') && $request->cabang != '') {
                        $query_cabang = MCabang::where('kode', $request->cabang);
                        if ($query_cabang->count()) {
                            $cabang = $query_cabang->first();
                            $query->where('cabang_id', $cabang->id);
                        }
                    }
                })
                ->toJson();
        }
        return view('pages.master.kolat.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $daerah = MDaerah::all();
        return view('pages.master.kolat.create', compact('daerah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|min:4|max:6|unique:m_kolat,kode',
            'nama' => 'required|max:255',
            'daerah_id' => 'required',
            'cabang_id' => 'required',
        ], [], [
            'kode' => 'kode kolat',
            'nama' => 'nama kolat',
            'daerah_id' => 'daerah',
            'cabang_id' => 'cabang',
        ]);

        $kolat = MKolat::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'wilayah' => $request->wilayah,
            'alamat_sekretariat' => $request->alamat_sekretariat,
            'latlng' => $request->latlng,
            'daerah_id' => $request->daerah_id,
            'cabang_id' => $request->cabang_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Kolat created successfully',
            'data' => $kolat
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kolat = MKolat::with('daerah', 'cabang')->findOrFail($id);
        return view('pages.master.kolat.show', compact('kolat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kolat = MKolat::findOrFail($id);
        $daerah = MDaerah::all();
        $cabang = MCabang::where('daerah_id', $kolat->daerah_id)->get();
        return view('pages.master.kolat.edit', compact('kolat', 'daerah', 'cabang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required|string|min:4|max:6|unique:m_kolat,kode,' . $id,
            'nama' => 'required|max:255',
            'daerah_id' => 'required',
            'cabang_id' => 'required',
        ], [], [
            'kode' => 'Kode kolat',
            'nama' => 'Nama kolat',
            'daerah_id' => 'daerah',
            'cabang_id' => 'cabang',
        ]);

        $kolat = MKolat::findOrFail($id);
        $kolat->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'wilayah' => $request->wilayah,
            'alamat_sekretariat' => $request->alamat_sekretariat,
            'latlng' => $request->latlng,
            'daerah_id' => $request->daerah_id,
            'cabang_id' => $request->cabang_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Kolat updated successfully',
            'data' => $kolat
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = explode(',', $request->ids);
        MKolat::whereIn('id', $ids)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Kolat deleted successfully'
        ], 200);
    }
}
