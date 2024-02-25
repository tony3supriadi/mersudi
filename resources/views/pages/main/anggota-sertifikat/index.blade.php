@extends('layouts.app')

@section('title', 'Sertifikat Anggota')

@section('content')
<h4 class="mb-3">Sertifikat Anggota</h4>
<div class="row g-4">
    <div class="col-12">
        <div class="card min-h-27vh">
            <div class="card-datatable table-responsive">
                <table class="table datatable border-top"></table>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('anggota.sertifikat.destroy') }}" method="POST" id="delete-submit" class="d-none">
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
                url: "{{ route('anggota.sertifikat.index') }}",
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
                data: "judul_kegiatan",
                title: "Judul Kegiatan",
                orderable: false,
            }, {
                defaultContent: "-",
                title: "Level",
                orderable: false,
                render: (data, type, row, meta) => {
                    if (row.daerah.length > 0) {
                        return '<span class="badge bg-success">DAERAH</span>';
                    } else {
                        return '<span class="badge bg-warning">CABANG</span>';
                    }
                }
            }, {
                defaultContent: "-",
                title: "PENGDA/CABANG",
                orderable: false,
                render: (data, type, row, meta) => {
                    if (row.daerah.length > 0) {
                        return `<span class="badge bg-success">${row.daerah.nama}</span>`;
                    } else {
                        return `<span class="badge bg-warning">${row.cabang.nama}</span>`;
                    }
                }
            }, {
                defaultContent: "",
                orderable: false,
                width: 30,
                className: "text-end",
                render: (data, type, row, meta) => {
                    return (`
                        @canany(['master-daerah-update', 'master-daerah-delete'])
                            <div class="d-inline-flex">
                                <a href="javascript:;" class="text-body dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <span class="ti ti-dots-vertical"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="{{ route('anggota.sertifikat.index') }}/${row.id}" class="dropdown-item">
                                        <span class="ti ti-eye"></span> Detail
                                    </a>

                                    @can('master-daerah-update')
                                        <a href="{{ route('anggota.sertifikat.index') }}/${row.id}/edit" class="dropdown-item">
                                            <span class="ti ti-edit"></span> Ubah
                                        </a>
                                    @endcan

                                    @can('master-daerah-delete')
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
                @can('master-daerah-create')
                {
                    // Desktop
                    text: '<span class="ti ti-plus"></span> Tambah Baru',
                    className: 'btn btn-primary d-none d-md-inline-block me-1',
                    action: (e, dt, button, config) => {
                        window.location = "{{ route('anggota.sertifikat.create') }}"
                    }
                },
                {
                    // Mobile
                    text: '<span class="ti ti-plus"></span>',
                    className: 'btn btn-primary btn-icon d-md-none me-1',
                    action: (e, dt, button, config) => {
                        window.location = "{{ route('anggota.sertifikat.create') }}"
                    }
                },
                @endcan

                @can('master-daerah-delete')
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
                    text: '<span class="ti ti-upload"></span> Export',
                    buttons: [{
                        extend: 'csv',
                        text: '<span class="ti ti-file-text me-1"></span>Export to CSV',
                        className: 'dropdown-item',
                        exportOptions: {
                            columns: [2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14, 15, 16, 18, 19, 20],
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
            var code = $(this).val()
            let params = new URLSearchParams(window.location.search);
            params.set('pengda', code);
            window.history.pushState({pageTitle: "Daftar Anggota"}, "", "{{ route('anggota.sertifikat.index') }}" + '?' + params.toString());

            table.draw();
            $('.btn-reset-filter').removeClass('d-none');

            $.ajax({
                url: "{{ route('ajax.cabang') }}",
                type: "GET",
                data: {
                    pengda: code
                },
                success: function(data) {
                    var html = "<option></option>";
                    data.forEach(item => {
                        html += `<option value="${item.kode}">${item.nama.replace('CABANG ', '')}</option>`;
                    });
                    $('select[name="pengcab"]').prop("disabled", false).html(html);
                }
            })
        });

        $('select[name="pengcab"]').change(function(){
            var code = $(this).val();
            let params = new URLSearchParams(window.location.search);
            params.set('pengcab', $(this).val());
            window.history.pushState({pageTitle: "Daftar Anggota"}, "", "{{ route('anggota.sertifikat.index') }}" + '?' + params.toString());

            table.draw();
            $('.btn-reset-filter').removeClass('d-none');

            $.ajax({
                url: "{{ route('ajax.kolat') }}",
                type: "GET",
                data: {
                    cabang: code
                },
                success: function(data) {
                    var html = "<option></option>";
                    data.forEach(item => {
                        html += `<option value="${item.kode}">${item.nama.replace('KOLAT ', '')}</option>`;
                    });
                    $('select[name="kolat"]')
                        .prop("disabled", false)
                        .html(html);
                }
            })
        });

        $('select[name="kolat"]').change(function(){
            let params = new URLSearchParams(window.location.search);
            params.set('kolat', $(this).val());
            window.history.pushState({pageTitle: "Daftar Anggota"}, "", "{{ route('anggota.sertifikat.index') }}" + '?' + params.toString());

            table.draw();
            $('.btn-reset-filter').removeClass('d-none');
        });

        $('.btn-filter-status').on('click', function() {
            let params = new URLSearchParams(window.location.search);
            params.set('status', $(this).data('status'));
            window.history.pushState({pageTitle: "Daftar Anggota"}, "", "{{ route('anggota.sertifikat.index') }}" + '?' + params.toString());

            table.draw();
        });

        $('.btn-reset-status').on('click', function() {
            let params = new URLSearchParams(window.location.search);
            params.delete('status');
            window.history.pushState({pageTitle: "Daftar Anggota"}, "", "{{ route('anggota.sertifikat.index') }}" + '?' + params.toString());

            table.draw();
        });

        $('.btn-reset-filter').on('click', function() {
            $('select[name="pengda"]').val('').trigger('change');
            $('select[name="pengcab"]').val('').trigger('change').prop("disabled", true);
            $('select[name="kolat"]').val('').trigger('change').prop("disabled", true);
            $('.btn-reset-filter').addClass('d-none');

            let params = new URLSearchParams(window.location.search);
            params.delete('pengda');
            params.delete('pengcab');
            params.delete('kolat');
            window.history.pushState({pageTitle: "Daftar Anggota"}, "", "{{ route('anggota.sertifikat.index') }}" + '?' + params.toString());

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

