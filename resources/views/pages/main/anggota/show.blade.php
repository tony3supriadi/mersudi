@extends('layouts.app')

@section('title', 'Anggota - Data Detail')

@section('content')
<h4 class="content-header-title">
    <a href="{{ route('daftar-anggota.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
        <span class="ti ti-arrow-left"></span>
    </a>
    <span class="text-muted fw-light">Anggota /</span> Data Detail
</h4>

<div class="row">
    <div class="col-xxl-6 col-md-8 col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">NIA</td>
                                <td width="10px">:</td>
                                <td><strong>{{ $anggota->nia }}</strong></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama Lengkap</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->nama_lengkap ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama Panggilan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->nama_panggilan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Jenis Kelamin</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->jenis_kelamin ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Tempat, Tanggal Lahir</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tempat_lahir ?? '-' }}, {{ Carbon\Carbon::parse($anggota->tanggal_lahir)->isoFormat('DD MMM YYYY') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">E-Mail</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->email ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">No HP/WA</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->phone ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Alamat</td>
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
                                <td class="fw-bold text-end text-uppercase">Pekerjaan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->pekerjaan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Kewarganegaraan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->kewarganegaraan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">PENGDA</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->daerah ? str_replace("PENGDA ", "", $anggota->daerah->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">CABANG</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->cabang ? str_replace("CABANG ", "", $anggota->cabang->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">KOLAT</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->kolat ? str_replace("KOLAT ", "", $anggota->kolat->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Tingkatan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tingkatan ? $anggota->tingkatan->nama : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Tanggal Masuk</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tanggal_bergabung ? Carbon\Carbon::parse($anggota->tanggal_bergabung)->isoFormat('DD MMM YYYY') : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Status</td>
                                <td width="10px">:</td>
                                <td>{!! $anggota->status ? $anggota->getStatusName(true) : '-' !!}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Keterangan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->keterangan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Created At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($anggota->created_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Updated At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($anggota->updated_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-end">
                <a href="{{ route('daftar-anggota.edit', $anggota->id) }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
                    <span class="ti ti-pencil"></span>
                </a>
                <a href="javascript:void(0)" class="btn btn-outline-danger d-flex align-items-end btn-delete">
                    <span class="ti ti-trash me-1"></span>
                    <span>Hapus</span>
                </a>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('daftar-anggota.destroy') }}" id="delete-submit" method="POST" class="d-inline">
    @csrf
    @method('delete')
    <input type="hidden" name="ids" value="{{ $anggota->id }}" />
</form>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    $(function() {
        new AjaxFormSubmitter({
            form: '#delete-submit',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = "{{ route('daftar-anggota.index') }}";
                }
            }
        });

         $('html,body').on('click', '.btn-delete', function() {
            confirmAlert({
                title: 'Apakah kamu yakin?',
                text: 'Data dengan ID: {{ $anggota->id }} akan dihapus!',
                cancelText: 'Batal',
                confirmText: 'Ya, hapus!',
                then: (result) => {
                    if (result.isConfirmed) {
                        $('#delete-submit').submit();
                    }
                }
            });
        });
    });
</script>
@endpush
