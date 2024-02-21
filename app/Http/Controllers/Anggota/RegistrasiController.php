<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\AnggotaHasKta;
use App\Models\AnggotaInvoice;
use App\Models\MCabang;
use App\Models\MDaerah;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegistrasiController extends Controller
{
    public function index()
    {
        $oldb = null;
        if (Auth::user()->datatype == 1) {
            $oldb = DB::connection('mysql_oldb')
                ->table('anggota')
                ->where('agt_email', Auth::user()->email)
                ->first();
        }
        return view('pages.anggota.registrasi', compact('oldb'));
    }

    public function submit_01(Request $request)
    {
        $request->validate([
            'nik' => 'required|min:16|max:16|unique:anggota,nik',
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'phone' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'kecamatan_id' => 'required',
            'desa_id' => 'required',
        ], [], [
            'phone' => 'No. HP/WA',
            'nik' => 'NIK',
            'provinsi_id' => 'Provinsi',
            'kabupaten_id' => 'Kabupaten',
            'kecamatan_id' => 'Kecamatan',
            'desa_id' => 'Desa',
        ]);

        $user = Auth::user();
        Anggota::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Data Berhasil',
            'redirect' => route('anggota.registrasi.step02')
        ]);
    }

    public function step02()
    {
        $oldb = null;
        $user = Auth::user();
        $anggota = Anggota::where('user_id', $user->id)->first();
        if ($user->datatype == 1) {
            $oldb = DB::connection('mysql_oldb')
                ->table('anggota')
                ->where('agt_email', Auth::user()->email)
                ->first();
        }
        return view('pages.anggota.registrasi-step02', compact('anggota', 'oldb'));
    }

    public function submit_02(Request $request)
    {
        $request->validate([
            'daerah_id' => 'required',
            'cabang_id' => 'required',
            'kolat_id' => 'required',
            'tingkatan_id' => 'required',
            'tanggal_bergabung' => 'required'
        ], [], [
            'daerah_id' => 'pengda',
            'cabang_id' => 'cabang',
            'kolat_id' => 'kolat',
            'tingkatan_id' => 'tingkatan',
            'tanggal_bergabung' => 'tanggal masuk',
        ]);

        $id = $request->id;
        $anggota = Anggota::find($id);
        $cabang = MCabang::find($request->cabang_id);
        $nia = $cabang->kode . '.' . $anggota->nomor_urut_anggota;

        $anggota->update([
            'nia' => $nia,
            'daerah_id' => $request->daerah_id,
            'cabang_id' => $request->cabang_id,
            'kolat_id' => $request->kolat_id,
            'tingkatan_id' => $request->tingkatan_id,
            'tanggal_bergabung' => $request->tanggal_bergabung,
            'status' => Anggota::STATUS_VERIFY
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Data Berhasil',
            'redirect' => route('anggota.registrasi.step03')
        ]);
    }

    public function step03()
    {
        $oldb = null;
        $user = Auth::user();
        $anggota = Anggota::where('user_id', $user->id)->first();
        if ($user->datatype == 1) {
            $oldb = DB::connection('mysql_oldb')
                ->table('anggota')
                ->where('agt_email', Auth::user()->email)
                ->whereNotNull('agt_no_kta')
                ->join('beli', 'beli.beli_user', '=', 'anggota.agt_user')
                ->first();
        }
        return view('pages.anggota.registrasi-step03', compact('anggota', 'oldb'));
    }

    public function submit_03(Request $request)
    {
        $request->validate([
            'kta_id' => 'required',
        ], [
            'kta_id.required' => 'Jenis paket KTA belum dipilih.',
        ]);

        $data = AnggotaHasKta::create($request->all());

        if($request->hasFile('bukti_pembayaran')) {
            $path = 'invoices/';
            $fileName = Str::random(40) . '.' . $request->file('bukti_pembayaran')->getClientOriginalExtension();
            $request->file('bukti_pembayaran')->storeAs($path, $fileName, 'public');
            $data->invoice()->create([
                'invoice_number' => set_anggota_invoice_number(),
                'anggota_id' => $data->anggota_id,
                'anggota_has_kta_id' => $data->id,
                'bukti_pembayaran' => $fileName,
                'ketgori' => 'kta',
                'total' => $data->total,
                'status' => AnggotaInvoice::STATUS_VERIFY
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Data Berhasil',
            'redirect' => route('dashboard')
        ]);
    }

    public function oldb()
    {
        return view('pages.anggota.registrasi-oldb');
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
            'redirect' => route('anggota.registrasi')
        ]);
    }
}
