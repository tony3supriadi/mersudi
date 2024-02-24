@extends('layouts.app')

@section('title', 'Verifikasi Pembayaran KTA')

@section('content')
<h4 class="mb-3">Verifikasi Pembayaran KTA</h4>

<div class="row g-4 mb-2 text-secondary">
    <div class="col-md-12 d-flex align-items-center">
        <a href="javascript:;" data-status="{{ App\Models\AnggotaHasKta::STATUS_VERIFY }}" class="filter-status @if(request()->get('status') != App\Models\AnggotaHasKta::STATUS_VERIFY) text-muted @endif">
            BELUM VERIFIKASI ({{ App\Models\AnggotaHasKta::verify()->count() }})
        </a>

        <div class="mx-2 text-muted">|</div>

        <a href="javascript:;" data-status="{{ App\Models\AnggotaHasKta::STATUS_ACTIVE }}" class="filter-status @if(!request()->get('status') || request()->get('status') != App\Models\AnggotaHasKta::STATUS_ACTIVE) text-muted @endif">
            AKTIF ({{ App\Models\AnggotaHasKta::active()->count() }})
        </a>

        <div class="mx-2 text-muted">|</div>

        <a href="javascript:;" data-status="{{ App\Models\AnggotaHasKta::STATUS_DENIED }}" class="filter-status @if(!request()->get('status') || request()->get('status') != App\Models\AnggotaHasKta::STATUS_DENIED) text-muted @endif"">
            DITOLAK ({{ App\Models\AnggotaHasKta::denied()->count() }})
        </a>

        <div class="mx-2 text-muted">|</div>

        <a href="javascript:;" data-status="expired" class="filter-status @if(!request()->get('status') || request()->get('status') != 'expired') text-muted @endif">
            HARUS DIPERPANJANG ({{ App\Models\AnggotaHasKta::hasExpired()->count() }})
        </a>
    </div>
</div>

<div class="row g-4">
    <div class="col-12">
        <div class="card min-h-27vh">
            <div class="card-datatable table-responsive">
                <table class="table datatable border-top"></table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    let ids = [];
    $(function() {
        var table = $('.datatable').DataTable({
            ajax: {
                url: "{{ route('anggota.verifikasi.index') }}",
                data: function(data) {
                    let params = new URLSearchParams(window.location.search);
                    data.status = params.get('status');
                },
                dataSrc: function(response) {
                    return response.data;
                }
            },
            width: '100%',
            serverSide: true,
            processing: true,
            order: [],
            scrollX: true,
            displayLength: 10,
            lengthMenu: [5, 10, 25, 50, 100],
            dom: `<"card-header p-2"><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 py-2 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>`,
            columns: [{
                data: "id",
                title: "ID",
                searchable: false,
                visible: false,
                orderable: false
            }, {
                data: "anggota.nia",
                title: "NIA",
                orderable: false,
                width: 50,
                visible: false,
            }, {
                data: "anggota.nama_lengkap",
                title: "Nama Lengkap",
                orderable: false,
                width: 200,
                render: (data, type, row, meta) => {
                    return `<a href="{{ route('daftar-anggota.index') }}/${row.anggota.id}">${data}</a>`;
                }
            }, {
                data: "kta.nama",
                title: "Paket KTA",
                orderable: false,
                width: 150,
            }, {
                data: "harga_total",
                title: "Biaya",
                orderable: false,
                render: (data, type, row, meta) => {
                    return `Rp${data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")}`;
                }
            }, {
                data: "status",
                title: "Status",
                orderable: false,
                searchable: false,
                render: (data, type, row, meta) => {
                    if (data == 0) {
                        return `<span class="badge bg-label-warning">Validasi</span>`;
                    } else if (data == 1) {
                        return `<span class="badge bg-label-success">Aktif</span>`;
                    } else if (data == 2) {
                        return `<span class="badge bg-label-dark">Ditolak</span>`;
                    } else if (data == 3) {
                        return `<span class="badge bg-label-secondary">Belum Lengkap</span>`;
                    }
                }
            }, {
                data: "created_at",
                title: "Terdaftar pada",
                searchable: false,
                orderable: false,
                render: (data, type, row, meta) => {
                    return moment(data).format('DD MMM YYYY HH:mm');
                }
            }, {
                defaultContent: "",
                orderable: false,
                width: 10,
                className: "text-end",
                render: (data, type, row, meta) => {
                    if (row.status != "{{ App\Models\Anggota::STATUS_VERIFY }}") {
                        return "";
                    }

                    return (`
                        <a href="{{ route('anggota.verifikasi.index') }}/${row.id}" data-id="${row.id}" class="btn btn-outline-primary btn-sm text-primary btn-validate">
                            <span class="ti ti-credit-card"></span> Verifikasi
                        </a>
                    `);
                }
            }],
            language: {
                lengthMenu: "_MENU_",
                zeroRecords: "Data tidak ditemukan",
                infoEmpty: "Data masih kosong",
                search: "",
                searchPlaceholder: "Cari...",
                thousands: ".",
                loadingRecords: "Loading...",
                info: "_START_ - _END_ dari _TOTAL_ data",
                paginate: {
                    first: "Awal",
                    last: "Akhir",
                    next: "Selanjutnya",
                    previous: "Sebelumnya"
                }
            },
        });

        var select2 = $('.select2');
        if (select2.length) {
            select2.each(function () {
                var $this = $(this);
                $this.wrap('<div class="position-relative"></div>').select2({
                    dropdownParent: $this.parent()
                });
            });
        }

        setTimeout(() => {
            $('.dataTables_filter .form-control').removeClass('form-control-sm');
            $('.dataTables_length .form-select').removeClass('form-select-sm');
        }, 300);

        $('.card-title').html('');

        $('.filter-status').on('click', function() {
            let params = new URLSearchParams(window.location.search);
            params.set('status', $(this).data('status'));
            window.history.pushState(
                {pageTitle: "Daftar Anggota"}, "",
                "{{ route('anggota.verifikasi.index') }}" + '?' + params.toString()
            );

            table.draw();

            $('.filter-status').addClass('text-muted');
            $(this).removeClass('text-muted');
        });
    });
</script>
@endpush

