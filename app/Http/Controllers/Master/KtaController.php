<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MKta;
use App\Models\MTingkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class KtaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = MKta::with('tingkatan');
            return DataTables::eloquent($query)->toJson();
        }
        return view('pages.master.kta.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tingkatan = MTingkatan::all();
        return view('pages.master.kta.create', compact('tingkatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'tingkatan' => 'required|array',
            'tingkatan.*' => 'required|exists:m_tingkatan,id'
        ]);

        $data = $request->all();

        if ($request->background) {
            $request->validate([
                'background' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $filename = Str::random(32) . '.' . $request->file('background')->getClientOriginalExtension();
            $request->file('background')->storeAs('background', $filename, 'public');
            $data['background'] = $filename;
        }

        $kta = MKta::create([
            'kode' => $data['kode'],
            'nama' => $data['nama'],
            'harga' => str_replace('.', '', $data['harga']),
            'background' => $data['background'] ?? null,
            'keterangan' => $data['keterangan']
        ]);

        $kta->tingkatan()->attach($data['tingkatan']);

        return response()->json([
            'status' => 'success',
            'message' => 'KTA created successfully',
            'data' => $kta
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kta = MKta::with(['tingkatan'])->where('id', $id)->first();
        return view('pages.master.kta.show', compact('kta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kta = MKta::findOrFail($id);
        $tingkatan = MTingkatan::all();
        return view('pages.master.kta.edit', compact('kta', 'tingkatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'tingkatan' => 'required|array',
            'tingkatan.*' => 'required|exists:m_tingkatan,id'
        ]);

        $data = $request->all();

        if ($request->background) {
            $request->validate([
                'background' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $filename = Str::random(32) . '.' . $request->file('background')->getClientOriginalExtension();
            $request->file('background')->storeAs('background', $filename, 'public');
            $data['background'] = $filename;
        }

        $kta = MKta::findOrFail($id);
        $kta->update([
            'kode' => $data['kode'],
            'nama' => $data['nama'],
            'harga' => str_replace('.', '', $data['harga']),
            'background' => $data['background'] ?? $kta->background,
            'keterangan' => $data['keterangan']
        ]);

        $kta->tingkatan()->sync($data['tingkatan']);

        return response()->json([
            'status' => 'success',
            'message' => 'KTA created successfully',
            'data' => $kta
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = explode(',', $request->ids);
        MKta::whereIn('id', $ids)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'KTA created successfully',
        ]);
    }
}
