@extends('layouts.app')

@section('title', 'Kolat - Data Detail')

@section('content')
<h4 class="content-header-title">
    <a href="{{ route('master.kolat.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
        <span class="ti ti-arrow-left"></span>
    </a>
    <span class="text-muted fw-light">Kolat /</span> Data Detail
</h4>

<div class="row">
    <div class="col-xxl-6 col-md-8 col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    @include('components.show-map', ['latlng' => $kolat->latlng])
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Kode</td>
                                <td width="10px">:</td>
                                <td>{{ $kolat->kode }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama Kolat</td>
                                <td width="10px">:</td>
                                <td>{{ $kolat->nama }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Pengda</td>
                                <td width="10px">:</td>
                                <td>{{ str_replace("PENGDA ", "", $kolat->daerah->nama) }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Cabang</td>
                                <td width="10px">:</td>
                                <td>{{ str_replace("CABANG ", "", $kolat->cabang->nama) }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Alamat Sekretariat</td>
                                <td width="10px">:</td>
                                <td>{{ $kolat->alamat_sekretariat ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Latlng</td>
                                <td width="10px">:</td>
                                @if($kolat->latlng)
                                    @php $latlng = $kolat->latlng @endphp
                                    <td>[<span>{{ substr($latlng['lat'], 0, 10) }}</span>, <span>{{ substr($latlng['lng'], 0, 10) }}</span>]</td>
                                @else
                                    <td>-</td>
                                @endif
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Keterangan</td>
                                <td width="10px">:</td>
                                <td>{{ $kolat->keterangan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Created At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($kolat->created_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Updated At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($kolat->updated_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-end">
                <a href="{{ route('master.kolat.edit', $kolat->id) }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
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

<form action="{{ route('master.kolat.destroy') }}" id="delete-submit" method="POST" class="d-inline">
    @csrf
    @method('delete')
    <input type="hidden" name="ids" value="{{ $kolat->id }}" />
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
                    window.location.href = "{{ route('master.kolat.index') }}";
                }
            }
        });

         $('html,body').on('click', '.btn-delete', function() {
            confirmAlert({
                title: 'Apakah kamu yakin?',
                text: 'Data dengan ID: {{ $kolat->id }} akan dihapus!',
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
