<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MTingkatan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TingkatanController extends Controller
{
    /**
     * Construct.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:master-tingkatan|master-tingkatan-create|master-tingkatan-update|master-tingkatan-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:master-tingkatan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:master-tingkatan-update', ['only' => ['edit', 'update']]);
        $this->middleware('permission:master-tingkatan-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = MTingkatan::query();
            return DataTables::eloquent($query)->toJson();
        }
        return view('pages.master.tingkatan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.master.tingkatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|min:2|max:4|unique:m_tingkatan,kode',
            'nama' => 'required',
        ]);
        $tingkatan = MTingkatan::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Tingkatan created successfully',
            'data' => $tingkatan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tingkatan = MTingkatan::findOrFail($id);
        return view('pages.master.tingkatan.show', compact('tingkatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tingkatan = MTingkatan::findOrFail($id);
        return view('pages.master.tingkatan.edit', compact('tingkatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required|min:2|max:4|unique:m_tingkatan,kode,' . $id,
            'nama' => 'required',
        ]);

        $tingkatan = MTingkatan::findOrFail($id);
        $tingkatan->update($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Tingkatan created successfully',
            'data' => $tingkatan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = explode(',', $request->ids);
        MTingkatan::whereIn('id', $ids)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Tingkatan deleted successfully',
        ]);
    }
}
