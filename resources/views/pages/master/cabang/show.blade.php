@extends('layouts.app')

@section('title', 'Cabang - Data Detail')

@section('content')
<h4 class="content-header-title">
    <a href="{{ route('master.cabang.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
        <span class="ti ti-arrow-left"></span>
    </a>
    <span class="text-muted fw-light">Cabang /</span> Data Detail
</h4>

<div class="row">
    <div class="col-xxl-6 col-md-8 col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    @include('components.show-map', ['latlng' => $cabang->latlng])
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Kode</td>
                                <td width="10px">:</td>
                                <td>{{ $cabang->kode }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama Cabang</td>
                                <td width="10px">:</td>
                                <td>{{ $cabang->nama }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Pengda</td>
                                <td width="10px">:</td>
                                <td>{{ str_replace("PENGDA ", "", $kolat->daerah->nama) }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Alamat Sekretariat</td>
                                <td width="10px">:</td>
                                <td>{{ $cabang->alamat_sekretariat ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Latlng</td>
                                <td width="10px">:</td>
                                @if($cabang->latlng)
                                    @php $latlng = $cabang->latlng @endphp
                                    <td>[<span>{{ substr($latlng['lat'], 0, 10) }}</span>, <span>{{ substr($latlng['lng'], 0, 10) }}</span>]</td>
                                @else
                                    <td>-</td>
                                @endif
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Keterangan</td>
                                <td width="10px">:</td>
                                <td>{{ $cabang->keterangan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Created At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($cabang->created_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Updated At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($cabang->updated_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-end">
                <a href="{{ route('master.cabang.edit', $cabang->id) }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
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

<form action="{{ route('master.cabang.destroy') }}" id="delete-submit" method="POST" class="d-inline">
    @csrf
    @method('delete')
    <input type="hidden" name="ids" value="{{ $cabang->id }}" />
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
                    window.location.href = "{{ route('master.cabang.index') }}";
                }
            }
        });

         $('html,body').on('click', '.btn-delete', function() {
            confirmAlert({
                title: 'Apakah kamu yakin?',
                text: 'Data dengan ID: {{ $cabang->id }} akan dihapus!',
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
