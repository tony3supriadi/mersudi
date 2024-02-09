@extends('layouts.app')

@section('title', 'Daftar Signature')

@section('content')
<h4 class="mb-3">Daftar Signature</h4>

<div class="row g-4">
    <div class="col-12">
        <div class="card min-h-27vh">
            <div class="card-datatable table-responsive">
                <table class="table datatable border-top"></table>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('master.signature.destroy') }}" method="POST" id="delete-submit" class="d-none">
    @csrf
    @method('delete')
    <input type="hidden" name="ids" value="" />
</form>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    let ids = [];
    $(function() {
        $('.datatable').DataTable({
            ajax: {
                url: "{{ route('master.signature.index') }}",
                dataSrc: function(response) {
                    return response.data;
                }
            },
            width: '100%',
            serverSide: true,
            processing: true,
            order: [],
            displayLength: 10,
            lengthMenu: [5, 10, 25, 50, 100],
            dom: `<"card-header p-2"<"dt-action-buttons w-100"B>><"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 py-2 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>`,
            columns: [{
                data: "id",
                target: 0,
                width: "10px",
                orderable: false,
                responsivePriority: 3,
                className: "pe-0",
                checkboxes: {
                    selectAllRender: `
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkboxSelectAll" />
                            <label class="form-check-label" for="checkboxSelectAll"></label>
                        </div>`
                },
                render: (data, type, row, meta) => {
                    return (
                        `<div class="form-check">
                            <input class="form-check-input dt-checkboxes" type="checkbox" value="${data}" name="entry_id[]" id="checkbox-${data}" />
                            <label class="form-check-label" for="checkbox-${data}"></label>
                        </div>`);
                }
            }, {
                data: "id",
                title: "ID",
                searchable: false,
                visible: false,
                orderable: false
            }, {
                data: "nama",
                title: "Nama",
                orderable: false,
            }, {
                data: "jabatan",
                title: "Jabatan",
                orderable: false,
                searchable: false
            }, {
                data: "aktif",
                title: "Aktif",
                orderable: false,
                searchable: false,
                width: 80,
                render: (data, type, row, meta) => {
                    if (data) {
                        return `<span class="ti ti-check text-success"></span>`;
                    }
                    return '';
                }
            }, {
                data: "aktif",
                title: "Aktif",
                orderable: false,
                searchable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    return (data ? 'Ya' : '');
                }
            }, {
                data: "created_at",
                title: "Terdaftar pada",
                searchable: false,
                orderable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    return moment(data).format('DD MMM YYYY HH:mm');
                }
            }, {
                data: "updated_at",
                title: "Diperbarui pada",
                searchable: false,
                orderable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    return moment(data).format('DD MMM YYYY HH:mm');
                }
            }, {
                defaultContent: "",
                orderable: false,
                width: 30,
                className: "text-end",
                render: (data, type, row, meta) => {
                    return (`
                        @canany(['master-signature-update', 'master-signature-delete'])
                            <div class="d-inline-flex">
                                <a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <span class="ti ti-dots-vertical"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('master.signature.index') }}/${row.id}" class="dropdown-item">
                                        <span class="ti ti-eye"></span> Detail
                                    </a>

                                    @can('master-signature-update')
                                        <a href="{{ route('master.signature.index') }}/${row.id}/edit" class="dropdown-item">
                                            <span class="ti ti-edit"></span> Ubah
                                        </a>
                                    @endcan

                                    @can('master-signature-delete')
                                        <a href="javascript:;" data-id="${row.id}" class="dropdown-item text-danger btn-delete">
                                            <span class="ti ti-trash"></span> Hapus
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        @endcanany
                    `);
                }
            }],
            buttons: [
                @can('master-signature-create')
                {
                    // Desktop
                    text: '<span class="ti ti-plus"></span> Tambah Baru',
                    className: 'btn btn-primary d-none d-md-inline-block me-1',
                    action: (e, dt, button, config) => {
                        window.location = "{{ route('master.signature.create') }}"
                    }
                },
                {
                    // Mobile
                    text: '<span class="ti ti-plus"></span>',
                    className: 'btn btn-primary btn-icon d-md-none me-1',
                    action: (e, dt, button, config) => {
                        window.location = "{{ route('master.signature.create') }}"
                    }
                },
                @endcan

                @can('master-signature-delete')
                {
                    // Desktop
                    text: '<span class="ti ti-trash"></span> Hapus Masal',
                    className: 'btn-bulk-action btn btn-danger d-none d-md-inline-block btn-divider-at-after ms-1 me-1',
                    attr: {
                        'disabled': ''
                    }
                },
                {
                    // Mobile
                    text: '<span class="ti ti-trash"></span>',
                    className: 'btn-bulk-action btn btn-danger btn-icon d-md-none ms-1 me-1',
                    attr: {
                        'disabled': ''
                    }
                },
                @endcan

                {
                    extend: 'collection',
                    className: 'btn btn-outline-secondary me-md-1 dropdown-toggle d-flex align-items-center ms-1',
                    text: '<span class="ti ti-download"></span> Export',
                    buttons: [{
                        extend: 'csv',
                        text: '<span class="ti ti-file-text me-1"></span>Export to CSV',
                        className: 'dropdown-item',
                        exportOptions: {
                            columns: [1, 2, 3, 5, 6, 7]
                        }
                    }]
                }
            ],
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

        $('.card-title').html('');

        $('#checkboxSelectAll').on('click', function() {
            if ($(this).is(':checked')) {
                $('.dt-checkboxes').each((index, elemt) => {
                    ids.push($(elemt).val());
                });
            } else {
                ids.splice(0, ids.length);
            }

            if (ids.length) {
                $('.btn-bulk-action').removeAttr('disabled');
            } else {
                $('.btn-bulk-action').attr('disabled', '');
            }
        });

        $('html,body').on('click', '.btn-delete', function() {
            const id = $(this).data('id');
            confirmAlert({
                title: 'Apakah kamu yakin?',
                text: 'Data dengan ID: ' + id + ' akan dihapus!',
                cancelText: 'Batal',
                confirmText: 'Ya, hapus!',
                then: (result) => {
                    if (result.isConfirmed) {
                        $('#delete-submit input[name="ids"]').val(id);
                        $('#delete-submit').submit();
                    }
                }
            });
        });

        $('html,body').on('click', '.btn-bulk-action', function() {
            confirmAlert({
                title: 'Apakah kamu yakin?',
                text: 'Semua data yang terpilih akan dihapus!',
                cancelText: 'Batal',
                confirmText: 'Ya, hapus!',
                then: (result) => {
                    if (result.isConfirmed) {
                        let ids = [];
                        let checkIds = $('.dt-checkboxes');

                        checkIds.each((index, item) => {
                            if ($(item).is(':checked')) {
                                ids.push($(item).val());
                            }
                        });

                        $('#delete-submit input[name="ids"]').val(ids);
                        $('#delete-submit').submit();
                    }
                }
            });
        });
    });
</script>
@endpush
