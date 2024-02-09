@extends('layouts.app')

@section('title', 'Tingkatan - Data Detail')

@section('content')
<h4 class="content-header-title">
    <a href="{{ route('master.tingkatan.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
        <span class="ti ti-arrow-left"></span>
    </a>
    <span class="text-muted fw-light">Tingkatan /</span> Data Detail
</h4>

<div class="row">
    <div class="col-xxl-6 col-lg-8 col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td width="180px" class="fw-bold text-end text-uppercase">Kode</td>
                                <td width="10px">:</td>
                                <td>{{ $tingkatan->kode }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama</td>
                                <td width="10px">:</td>
                                <td>{{ $tingkatan->nama }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Keterangan</td>
                                <td width="10px">:</td>
                                <td>{{ $tingkatan->keterangan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Created At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($tingkatan->created_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Updated At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($tingkatan->updated_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-end">
                <a href="{{ route('master.tingkatan.edit', $tingkatan->id) }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
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

<form action="{{ route('master.tingkatan.destroy') }}" id="delete-submit" method="POST" class="d-inline">
    @csrf
    @method('delete')
    <input type="hidden" name="ids" value="{{ $tingkatan->id }}" />
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
                    window.location.href = "{{ route('master.tingkatan.index') }}";
                }
            }
        });

         $('html,body').on('click', '.btn-delete', function() {
            confirmAlert({
                title: 'Apakah kamu yakin?',
                text: 'Data dengan ID: {{ $tingkatan->id }} akan dihapus!',
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
