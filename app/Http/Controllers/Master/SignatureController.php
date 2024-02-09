<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\MSignature;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class SignatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->ajax()) {
            $query = MSignature::query();
            return DataTables::eloquent($query)->toJson();
        }
        return view('pages.master.signature.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.master.signature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'signature' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $filename = Str::random(32) . '.' . $request->file('signature')->getClientOriginalExtension();
        $request->file('signature')->storeAs('public/signature', $filename);
        $data['signature'] = $filename;

        $signature = MSignature::create($data);
        return response()->json([
            'status' => 'success',
            'message' => 'Signature created successfully',
            'data' => $signature
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $signature = MSignature::findOrFail($id);
        return view('pages.master.signature.show', compact('signature'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $signature = MSignature::findOrFail($id);
        return view('pages.master.signature.edit', compact('signature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'signature' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $signature = MSignature::findOrFail($id);

        if ($request->signature) {
            $filename = Str::random(32) . '.' . $request->file('signature')->getClientOriginalExtension();
            $request->file('signature')->storeAs('public/signature', $filename);
            $signature->signature = $filename;
        }

        $signature->nama = $request->nama;
        $signature->jabatan = $request->jabatan;
        $signature->keterangan = $request->keterangan;
        $signature->aktif = $request->aktif ?? 0;
        $signature->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Signature updated successfully',
            'data' => $signature
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = explode(',', $request->ids);
        MSignature::whereIn('id', $ids)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Signature deleted successfully'
        ]);
    }
}
