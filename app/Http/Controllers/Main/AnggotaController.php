<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Imports\AnggotaImport;
use App\Models\Anggota;
use App\Models\MCabang;
use App\Models\MDaerah;
use App\Models\MKolat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Anggota::with('tingkatan', 'cabang', 'daerah', 'kolat', 'provinsi')
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

                    if ($request->has('status') && $request->status != '') {
                        $query->where('status', $request->status);
                    } else {
                        $query->where('status', Anggota::STATUS_ACTIVE);
                    }
                })
                ->toJson();
        }
        return view('pages.main.anggota.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.main.anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:16|max:16|unique:anggota,nik',
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:anggota,email',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'kecamatan_id' => 'required',
            'desa_id' => 'required',
            'daerah_id' => 'required',
            'cabang_id' => 'required',
            'kolat_id' => 'required',
            'tingkatan_id' => 'required',
            'tanggal_bergabung' => 'required'
        ], [], [
            'phone' => 'No. HP/WA',
            'nik' => 'NIK',
            'provinsi_id' => 'Provinsi',
            'kabupaten_id' => 'Kabupaten',
            'kecamatan_id' => 'Kecamatan',
            'desa_id' => 'Desa',
            'daerah_id' => 'pengda',
            'cabang_id' => 'cabang',
            'kolat_id' => 'kolat',
            'tingkatan_id' => 'tingkatan',
            'tanggal_bergabung' => 'tanggal masuk',
        ]);

        $data = $request->all();

        $cabang = MCabang::find($request->cabang_id);
        $data['nia'] = $cabang->kode .'.' . $request->nomor_urut_anggota;
        $data['status'] = Anggota::STATUS_ACTIVE;
        Anggota::create($data);

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
        $anggota = Anggota::with('tingkatan', 'cabang', 'daerah', 'kolat', 'provinsi', 'kabupaten', 'kecamatan', 'desa')
            ->where('status', Anggota::STATUS_ACTIVE)
            ->where('id', $id)
            ->firstOrFail();
        return view('pages.main.anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::where('status', Anggota::STATUS_ACTIVE)
            ->where('id', $id)
            ->firstOrFail();
        return view('pages.main.anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nik' => 'required|min:16|max:16|unique:anggota,nik,'.$id,
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:anggota,email,'. $id,
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'kecamatan_id' => 'required',
            'desa_id' => 'required',
            'daerah_id' => 'required',
            'cabang_id' => 'required',
            'kolat_id' => 'required',
            'tingkatan_id' => 'required',
            'tanggal_bergabung' => 'required'
        ], [], [
            'phone' => 'No. HP/WA',
            'nik' => 'NIK',
            'provinsi_id' => 'Provinsi',
            'kabupaten_id' => 'Kabupaten',
            'kecamatan_id' => 'Kecamatan',
            'desa_id' => 'Desa',
            'daerah_id' => 'pengda',
            'cabang_id' => 'cabang',
            'kolat_id' => 'kolat',
            'tingkatan_id' => 'tingkatan',
            'tanggal_bergabung' => 'tanggal masuk',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Anggota updated successfully',
            'data' => $anggota
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = explode(',', $request->ids);
        Anggota::whereIn('id', $ids)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Anggota deleted successfully'
        ], 200);
    }

    public function import()
    {
        return view('pages.main.anggota.import');
    }

    public function import_submit()
    {
        request()->validate([
            'files' => 'required|mimes:csv,xls,xlsx'
        ]);

        $files = request()->file('files');
        $file_name = time() . '-' . $files->getClientOriginalName();
        $files->move('files/imports/', $file_name);

        Excel::import(new AnggotaImport, public_path('/files/imports/' . $file_name));
        return redirect('/daftar-anggota')->with('success', true);
    }

    public function downloadTemplate()
    {
        return response()->download(public_path() . '/files/formats/format-import-daftar-anggota.xlsx');
    }
}
