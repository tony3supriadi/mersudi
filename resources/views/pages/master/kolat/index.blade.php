@extends('layouts.app')

@section('title', 'Daftar Kolat')

@section('content')
<h4 class="mb-3">Daftar Kolat</h4>

<div class="row g-4 mb-2 text-secondary">
    <div class="col-md-12 d-flex align-items-center">
        <div class="d-inline-flex align-items-center me-2">
            <span class="ti ti-filter me-1"></span>
            <span>Filter:</span>
        </div>

        <div class="d-inline-block w-px-200">
            <select name="pengda" data-placeholder="DAFTAR PENGDA" class="form-select select2">
                <option value=""></option>
                @foreach (App\Models\MDaerah::all() as $pengda)
                    <option value="{{ $pengda->kode }}">{{ str_replace("PENGDA ", "", $pengda->nama) }}</option>
                @endforeach
            </select>
        </div>

        <div class="d-inline-block w-px-200 ms-2">
            <select name="cabang" data-placeholder="DAFTAR CABANG" class="form-select select2">
                <option value=""></option>
            </select>
        </div>

        <a href="javascript:;" class="text-secondary ms-3 d-none btn-reset-filter">
            <span>Reset filter</span>
        </a>
    </div>
</div>

<div class="row g-4">
    <div class="col-12">
        <!-- Role Table -->
        <div class="card min-h-27vh">
            <div class="card-datatable table-responsive">
                <table class="table datatable border-top"></table>
            </div>
        </div>
        <!--/ Role Table -->
    </div>
</div>

<form action="{{ route('master.kolat.destroy') }}" method="POST" id="delete-submit" class="d-none">
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
                url: "{{ route('master.kolat.index') }}",
                data: function(data) {
                    data.pengda = $('select[name="pengda"]').val();
                    data.cabang = $('select[name="cabang"]').val();
                },
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
                data: "kode",
                title: "Kode",
                orderable: false,
                searchable: false,
                width: 50,
            }, {
                data: "nama",
                title: "Nama",
                orderable: false,
                width: 240,
            },
            {
                data: "daerah.nama",
                title: "Pengda",
                orderable: false,
                width: 150,
                render: (data, type, row, meta) => {
                    return row.daerah.nama.replace('PENGDA ', '');
                }
            },
            {
                data: "cabang.nama",
                title: "Cabang",
                orderable: false,
                width: 150,
                render: (data, type, row, meta) => {
                    return row.cabang.nama.replace('CABANG ', '');
                }
            }, {
                data: "alamat_sekretariat",
                title: "Alamat Sekretariat",
                orderable: false,
                searchable: false
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
                    if (row.id > 1) {
                        return (`
                            @canany(['master-kolat-update', 'master-kolat-delete'])
                                <div class="d-inline-flex">
                                    <a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <span class="ti ti-dots-vertical"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="{{ route('master.kolat.index') }}/${row.id}" class="dropdown-item">
                                            <span class="ti ti-eye"></span> Detail
                                        </a>

                                        @can('master-kolat-update')
                                            <a href="{{ route('master.kolat.index') }}/${row.id}/edit" class="dropdown-item">
                                                <span class="ti ti-edit"></span> Ubah
                                            </a>
                                        @endcan

                                        @can('master-kolat-delete')
                                            <a href="javascript:;" data-id="${row.id}" class="dropdown-item text-danger btn-delete">
                                                <span class="ti ti-trash"></span> Hapus
                                            </a>
                                        @endcan
                                    </div>
                                </div>
                            @endcanany
                        `);
                    }
                    return "";
                }
            }],
            buttons: [
                @can('master-kolat-create')
                {
                    // Desktop
                    text: '<span class="ti ti-plus"></span> Tambah Baru',
                    className: 'btn btn-primary d-none d-md-inline-block me-1',
                    action: (e, dt, button, config) => {
                        window.location = "{{ route('master.kolat.create') }}"
                    }
                },
                {
                    // Mobile
                    text: '<span class="ti ti-plus"></span>',
                    className: 'btn btn-primary btn-icon d-md-none me-1',
                    action: (e, dt, button, config) => {
                        window.location = "{{ route('master.kolat.create') }}"
                    }
                },
                @endcan

                @can('master-kolat-delete')
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
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    }, {
                        extend: 'excel',
                        text: '<span class="ti ti-file-spreadsheet"></span> Export to Excel',
                        className: 'dropdown-item',
                        exportOptions: {
                            columns: [1, 2, 3, 4, 5, 6, 7, 8]
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

        var select2 = $('.select2');
        if (select2.length) {
            select2.each(function () {
                var $this = $(this);
                $this.wrap('<div class="position-relative"></div>').select2({
                    dropdownParent: $this.parent()
                });
            });
        }

        $('select[name="pengda"]').change(function(){
            table.draw();
            $('.btn-reset-filter').removeClass('d-none');

            $('select[name="cabang"]').html('');
            $('select[name="cabang"]').val('').trigger('change');
            $.ajax({
                url: "{{ route('ajax.cabang') }}",
                data: {
                    'pengda': $(this).val()
                },
                success: function(data) {
                    var html = '<option value=""></option>';
                    data.map((item) => {
                        html += `<option value="${item.kode}">${(item.nama).replace('CABANG ', '')}</option>`;
                    });
                    $('select[name="cabang"]').html(html);
                }
            });
        });

        $('select[name="cabang"]').change(function(){
            table.draw();
            $('.btn-reset-filter').removeClass('d-none');
        });

        $('.btn-reset-filter').on('click', function() {
            $('select[name="pengda"]').val('').trigger('change');
            $('select[name="cabang"]').val('').trigger('change');
            $('.btn-reset-filter').addClass('d-none');
            table.draw();
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
