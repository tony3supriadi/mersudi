<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MDaerah;
use App\Models\User;
use App\Models\Wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class DaerahController extends Controller
{
    /**
     * Construct.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:master-daerah|master-daerah-create|master-daerah-update|master-daerah-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:master-daerah-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:master-daerah-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:master-daerah-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = MDaerah::with(['user'])->where('status', '1');
            return DataTables::eloquent($query)->toJson();
        }
        return view('pages.master.daerah.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.master.daerah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|min:2|max:2|unique:m_daerah,kode',
            'nama' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], [], [
            'kode' => 'kode daerah',
            'nama' => 'nama daerah',
        ]);

        $daerah = MDaerah::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'alamat_sekretariat' => $request->alamat_sekretariat,
            'latlng' => $request->latlng,
            'keterangan' => $request->keterangan,
            'status' => "1",
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Daerah created successfully',
            'data' => $daerah
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $daerah = MDaerah::with('user')->where('id', $id)
            ->firstOrFail();
        return view('pages.master.daerah.show', compact('daerah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $daerah = MDaerah::findOrFail($id);
        return view('pages.master.daerah.edit', compact('daerah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required|string|min:2|max:2|unique:m_daerah,kode,' . $id,
            'nama' => 'required|max:255',
        ], [], [
            'kode' => 'Kode daerah',
            'nama' => 'Nama daerah',
        ]);

        $daerah = MDaerah::findOrFail($id);
        $daerah->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'wilayah' => $request->wilayah,
            'alamat_sekretariat' => $request->alamat_sekretariat,
            'latlng' => $request->latlng
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Daerah updated successfully',
            'data' => $daerah
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = explode(',', $request->ids);
        MDaerah::whereIn('id', $ids)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Daerah deleted successfully'
        ], 200);
    }
}
