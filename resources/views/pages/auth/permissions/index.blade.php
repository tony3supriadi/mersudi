@extends('layouts.app')

@section('title', 'Permissions')

@section('content')
<h4 class="mb-4">Daftar Permission</h4>
<p class="mb-4">Daftar permission atau module atau fitur yang tersedia di aplikasi Mersudi.</p>

<div class="card min-h-27vh">
    <div class="card-datatable table-responsive">
        <table class="table datatable border-top"></table>
    </div>
</div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    let ids = [];

    $(function() {
        $('.datatable').DataTable({
            ajax: "{{ route('permissions.index') }}",
            width: '100%',
            serverSide: true,
            processing: true,
            order: [],
            responsive: {
                detail: true,
            },
            displayLength: 10,
            lengthMenu: [5, 10, 25, 50, 100],
            dom: `<"row mx-1"<"col-sm-12 col-md-3" l><"col-sm-12 col-md-9"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1"<f>>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>`,
            columns: [{
                data: "id",
                title: "ID",
                searchable: false,
                visible: false,
                orderable: false
            }, {
                data: "label",
                title: "Nama",
                orderable: false,
                width: 300
            }, {
                data: "roles",
                title: "Roles",
                orderable: false,
                render: (data, type, row, meta) => {
                    if (data.length) {
                        return data.map((item) => {
                            if (item.name == "Admin") {
                                return '<a href="{{ route("users.index", ["role" => "Admin"]) }}"><span class="badge bg-label-primary m-1">Administrator</span></a>';
                            } else
                            if (item.name == "Anggota") {
                                return '<a href="{{ route("users.index", ["role" => "Admin"]) }}"><span class="badge bg-label-success m-1">Administrator</span></a>';
                            }
                        });
                    }
                    return '-';
                }
            }, {
                data: "created_at",
                title: "Terdaftar pada",
                searchable: false,
                orderable: false,
                width: 200,
                render: (data, type, row, meta) => {
                    return moment(data).format('DD MMM YYYY HH:mm');
                }
            }],
            rowCallback: (row, data, index) => {
                $('td:first-child .form-check', row).on('click', function() {
                    if ($('td:first-child .form-check input').is(':checked')) {
                        ids.push($('td:first-child .form-check input').val());
                    } else {
                        ids.splice(ids.indexOf($('td:first-child .form-check input').val()), 1);
                    }

                    if (ids.length) {
                        $('.btn-bulk-action').removeAttr('disabled');
                    } else {
                        $('.btn-bulk-action').attr('disabled', '');
                    }
                })
            },
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

        setTimeout(() => {
            $('.dataTables_filter .form-control').removeClass('form-control-sm');
            $('.dataTables_length .form-select').removeClass('form-select-sm');
        }, 300);
    });
</script>
@endpush
