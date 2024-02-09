<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MCabang;
use App\Models\MDaerah;
use App\Models\User;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class CabangController extends Controller
{
    /**
     * Construct.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:master-cabang|master-cabang-create|master-cabang-update|master-cabang-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:master-cabang-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:master-cabang-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:master-cabang-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            $query = MCabang::with('daerah')->where('status', "1")
                ->orderBy('daerah_id')
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
                })
                ->toJson();
        }
        return view('pages.master.cabang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $daerah = MDaerah::all();
        return view('pages.master.cabang.create', compact('daerah'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|min:3|max:4|unique:m_cabang,kode',
            'nama' => 'required|max:255',
            'daerah_id' => 'required',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], [], [
            'kode' => 'kode cabang',
            'nama' => 'nama cabang',
            'daerah_id' => 'daerah (PENGDA)',
        ]);

        $cabang = MCabang::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'wilayah' => $request->wilayah,
            'alamat_sekretariat' => $request->alamat_sekretariat,
            'latlng' => $request->latlng,
            'daerah_id' => $request->daerah_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Cabang created successfully',
            'data' => $cabang
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cabang = MCabang::with(['daerah'])->findOrFail($id);
        return view('pages.master.cabang.show', compact('cabang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $daerah = MDaerah::all();
        $cabang = MCabang::findOrFail($id);
        return view('pages.master.cabang.edit', compact('daerah', 'cabang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required|string|min:3|max:4|unique:m_cabang,kode,' . $id,
            'nama' => 'required|max:255',
            'daerah_id' => 'required',
        ], [], [
            'kode' => 'Kode cabang',
            'nama' => 'Nama cabang',
            'daerah_id' => 'daerah (PENGDA)',
        ]);

        $cabang = MCabang::findOrFail($id);
        $cabang->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'wilayah' => $request->wilayah,
            'alamat_sekretariat' => $request->alamat_sekretariat,
            'latlng' => $request->latlng,
            'daerah_id' => $request->daerah_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Cabang updated successfully',
            'data' => $cabang
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = explode(',', $request->ids);
        MCabang::whereIn('id', $ids)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Cabang deleted successfully'
        ], 200);
    }
}
