<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\AnggotaSertifikat;
use App\Models\MCabang;
use App\Models\MDaerah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
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
        $request->validate([
            'pengda' => Rule::requiredIf(function () use ($request) {
                return $request->level == 1;
            }),
            'cabang' => Rule::requiredIf(function () use ($request) {
                return $request->level == 2;
            }),
            'judul_kegiatan' => 'required',
            'nomor_sertifikat' => 'required',
            'tanggal_pelaksanaan' => 'required',
            'background' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'signature' => 'required',
        ], [
            'pengda.required' => 'Pengda harus dipilih',
            'cabang.required' => 'Cabang harus dipilih',
            'background.image' => 'File harus berupa gambar',
            'background.max' => 'File terlalu besar',
            'background.mimes' => 'File harus berupa jpeg,png,jpg,gif,svg',
            'signature.required' => 'Tanda tangan harus diisi',
        ]);

        $data = $request->all();

        if ($request->hasFile('background')) {
            $fileName = Str::random(40) . '.' . $request->file('background')->getClientOriginalExtension();
            $request->file('background')->storeAs('public/sertifikat', $fileName);
            $data['background'] = $fileName;
        }

        if ($request->level == 1) {
            $pengda = MDaerah::findOrFail($request->pengda);
            $data = $pengda->anggota_sertifikat()->create([
                'judul_kegiatan' => $data['judul_kegiatan'],
                'nomor_sertifikat' => $data['nomor_sertifikat'],
                'tanggal_pelaksanaan ' => $data['tanggal_pelaksanaan'],
                'background' => $data['background'],
                'signature' => $data['signature']
            ]);
        } else {
            $cabang = MCabang::findOrFail($request->cabang);
            $data = $cabang->anggota_sertifikat()->create([
                'judul_kegiatan' => $data['judul_kegiatan'],
                'nomor_sertifikat' => $data['nomor_sertifikat'],
                'tanggal_pelaksanaan ' => $data['tanggal_pelaksanaan'],
                'background' => $data['background'],
                'signature' => $data['signature']
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ], 200);
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
