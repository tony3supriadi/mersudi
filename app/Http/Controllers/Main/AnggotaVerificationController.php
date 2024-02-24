<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Anggota;
use App\Models\AnggotaHasKta;
use App\Models\MCabang;
use App\Models\MDaerah;
use App\Models\MKolat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class AnggotaVerificationController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = AnggotaHasKta::with('anggota', 'kta')
                ->orderBy('created_at', 'DESC');

            if (Auth::user()->hasRole('Pengda')) {
                $daerah = MDaerah::where('user_id', Auth::user()->id)->first();
                $query->whereHas('anggota', function ($q) use ($daerah) {
                    $q->where('daerah_id', $daerah->id);
                });
            }

            if (Auth::user()->hasRole('Pengcab')) {
                $cabang = MCabang::where('user_id', Auth::user()->id)->first();
                $query->whereHas('anggota', function ($q) use ($cabang) {
                    $q->where('cabang_id', $cabang->id);
                });
            }

            return DataTables::eloquent($query)
                ->filter(function ($query) use ($request) {
                    if ($request->has('status') && $request->status != '') {
                        if ($request->status == 'expired') {
                            $query->where('status', AnggotaHasKta::STATUS_ACTIVE)
                                ->whereDate('tanggal_kadaluarsa', '<', now());
                        } else {
                            $query->where('status', $request->status);
                        }
                    } else {
                        $query->where('status', AnggotaHasKta::STATUS_VERIFY);
                    }
                })
                ->toJson();
        }
        return view('pages.main.anggota.verifikasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hasKTA = AnggotaHasKta::with('anggota', 'kta')
            ->where('status', AnggotaHasKta::STATUS_VERIFY)
            ->where('id', $id)
            ->firstOrFail();

        $anggota = Anggota::with('tingkatan', 'cabang', 'daerah', 'kolat', 'provinsi', 'kabupaten', 'kecamatan', 'desa')
            ->where('id', $hasKTA->anggota_id)
            ->firstOrFail();

        return view('pages.main.anggota.verifikasi.show', compact('anggota', 'hasKTA'));
    }

    public function varification_submit(Request $request)
    {
        $request->validate([
            'status' => 'required',
            'note' => Rule::requiredIf($request->status == AnggotaHasKta::STATUS_DENIED),
        ], [
            'status.required' => 'Anda harus menanggapi validasi anggota',
            'note.required' => 'Anda belum memebrikan alasan keterangan tidak valid.',
        ]);

        $hasKTA = AnggotaHasKta::find($request->id);
        $hasKTA->update([
            'tanggal_berlaku' => now(),
            'tanggal_kadaluarsa' => now()->addYear(2),
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Anggota berhasil diverifikasi',
        ]);
    }
}
