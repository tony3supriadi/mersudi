<?php

namespace App\Imports;

use App\Models\Anggota;
use App\Models\MCabang;
use App\Models\MDaerah;
use App\Models\MKolat;
use App\Models\MTingkatan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnggotaImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $pengda = MDaerah::where('kode', $row['kode_pengda'])->first();
        $pengcab = MCabang::where('kode', $row['kode_pengcab'])->first();
        $kolat = MKolat::where('kode', $row['kode_kolat'])->first();
        $tingkatan = MTingkatan::where('kode', $row['tingkatan'])->first();

        $nomor_urut_registrasi = get_reg_number();
        $nomor_urut_anggota = get_member_number();
        $nia = $row['kode_pengcab'] . '.' . $nomor_urut_anggota;

        $rowArray = [
            'nomor_urut_registrasi' => $nomor_urut_registrasi,
            'nomor_urut_anggota' => $nomor_urut_anggota,
            'nia' => $nia,
            'nik' => $row['nik'],
            'nama_lengkap' => $row['nama'],
            'nama_panggilan' => $row['panggilan'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'phone' => $row['phone'],
            'email' => $row['email'],
            'provinsi_id' => $row['provinsi'],
            'kabupaten_id' => $row['kabupaten'],
            'kecamatan_id' => $row['kecamatan'],
            'desa_id' => $row['desa'],
            'alamat' => $row['alamat'],
            'daerah_id' => $pengda ? $pengda->id : null,
            'cabang_id' => $pengcab ? $pengcab->id : null,
            'kolat_id' => $kolat ? $kolat->id : null,
            'tingkatan_id' => $tingkatan ? $tingkatan->id : null,
            'tanggal_bergabung' => $row['tanggal_masuk'],
            'status' => Anggota::STATUS_ACTIVE,
        ];

        $checkRowData = Anggota::where('nik', $row['nik'])->count();
        if ($checkRowData) {
            $data = Anggota::where('nik', $row['nik'])->first();
            $data->fill($rowArray);
            $data->save();
        } else {
            $data = Anggota::create($rowArray);
        }

        return $data;
    }
}
