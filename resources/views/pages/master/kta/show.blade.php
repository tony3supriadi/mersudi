@extends('layouts.app')

@section('title', 'KTA - Data Detail')

@section('content')
<h4 class="content-header-title">
    <a href="{{ route('master.kta.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
        <span class="ti ti-arrow-left"></span>
    </a>
    <span class="text-muted fw-light">Paket KTA /</span> Data Detail
</h4>

<div class="row">
    <div class="col-xxl-6 col-lg-8 col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td colspan="3" class="text-center">
                                    @if($kta->background)
                                        <img src="{{ asset('/storage/background/' . $kta->background) }}" width="324" height="204px" alt="background" class="object-fit-cover bg-light" />
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td width="150px" class="fw-bold text-end text-uppercase">Kode</td>
                                <td width="10px">:</td>
                                <td>{{ $kta->kode }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama</td>
                                <td width="10px">:</td>
                                <td>{{ $kta->nama }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Harga</td>
                                <td width="10px">:</td>
                                <td>Rp {{ number_format($kta->harga, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Tingkatan</td>
                                <td width="10px">:</td>
                                <td>{{ json_encode($kta->tingkatan->pluck('nama')->toArray()) }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Keterangan</td>
                                <td width="10px">:</td>
                                <td>{{ $kta->keterangan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Created At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($kta->created_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Updated At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($kta->updated_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-end">
                <a href="{{ route('master.kta.edit', $kta->id) }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
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

<form action="{{ route('master.kta.destroy') }}" id="delete-submit" method="POST" class="d-inline">
    @csrf
    @method('delete')
    <input type="hidden" name="ids" value="{{ $kta->id }}" />
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
                    window.location.href = "{{ route('master.kta.index') }}";
                }
            }
        });

         $('html,body').on('click', '.btn-delete', function() {
            confirmAlert({
                title: 'Apakah kamu yakin?',
                text: 'Data dengan ID: {{ $kta->id }} akan dihapus!',
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
