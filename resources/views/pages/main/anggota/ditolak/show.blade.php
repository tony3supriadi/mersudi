@extends('layouts.app')

@section('title', 'Anggota - Data Detail')

@section('content')
<h4 class="content-header-title">
    <a href="{{ route('anggota.ditolak.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
        <span class="ti ti-arrow-left"></span>
    </a>
    <span class="text-muted fw-light">Anggota /</span> Data Detail
</h4>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body p-0">
                <h3 class="p-3 fs-6 mb-0 border-bottom fw-bold">DATA ANGGOTA</h3>
                <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">NIA</td>
                                <td width="10px">:</td>
                                <td><strong>{{ $anggota->nia }}</strong></td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Nama Lengkap</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->nama_lengkap ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Nama Panggilan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->nama_panggilan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Jenis Kelamin</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->jenis_kelamin ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Tempat, Tanggal Lahir</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tempat_lahir ?? '-' }}, {{ Carbon\Carbon::parse($anggota->tanggal_lahir)->isoFormat('DD MMM YYYY') }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">E-Mail</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->email ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">No HP/WA</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->phone ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Alamat</td>
                                <td width="10px">:</td>
                                <td>
                                    {{ $anggota->alamat ?? '-' }}
                                    {!! $anggota->provinsi ? '<br />Provinsi: ' . $anggota->provinsi->nama : '' !!}
                                    {!! $anggota->kabupaten ? '<br />Kabupaten/Kota: ' . $anggota->kabupaten->nama : '' !!}
                                    {!! $anggota->kecamatan ? '<br />Kecamatan: ' . $anggota->kecamatan->nama : '' !!}
                                    {!! $anggota->desa ? '<br />Desa/Kelurahan: ' . $anggota->desa->nama : '' !!}
                                </td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Pekerjaan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->pekerjaan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Kewarganegaraan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->kewarganegaraan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">PENGDA</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->daerah ? str_replace("PENGDA ", "", $anggota->daerah->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">CABANG</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->cabang ? str_replace("CABANG ", "", $anggota->cabang->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">KOLAT</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->kolat ? str_replace("KOLAT ", "", $anggota->kolat->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Tingkatan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tingkatan ? $anggota->tingkatan->nama : '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Tanggal Masuk</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tanggal_bergabung ? Carbon\Carbon::parse($anggota->tanggal_bergabung)->isoFormat('DD MMM YYYY') : '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Status</td>
                                <td width="10px">:</td>
                                <td>{!! $anggota->status ? $anggota->getStatusName(true) : '-' !!}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Keterangan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->keterangan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Created At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($anggota->created_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Updated At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($anggota->updated_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body p-0">
                <h3 class="p-3 fs-6 mb-0 border-bottom fw-bold">KETERANGAN</h3>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            @foreach (DB::table('anggota_log_verify')
                                ->where('anggota_id', $anggota->id)
                                ->orderBy('created_at', 'DESC')
                                ->get() as $logs)
                                <tr>
                                    <td width="200px">{{ Carbon\Carbon::parse($logs->created_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                                    <td>{{ $logs->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

