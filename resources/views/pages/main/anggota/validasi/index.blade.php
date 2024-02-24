@extends('layouts.app')

@section('title', 'Validasi Anggota')

@section('content')
<h4 class="mb-3">Validasi Anggota</h4>

@include('pages.main.anggota._filters')

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
                url: "{{ route('anggota.validasi.index') }}",
                data: function(data) {
                    let params = new URLSearchParams(window.location.search);
                    data.pengda = params.get('pengda');
                    data.pengcab = params.get('pengcab');
                    data.kolat = params.get('kolat');
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
                data: "nia",
                title: "NIA",
                orderable: false,
                visible: false
            }, {
                data: "nama_lengkap",
                title: "Nama Lengkap",
                orderable: false,
            }, {
                data: "nama_panggilan",
                title: "Panggilan",
                orderable: false,
                searchable: false,
                visible: false
            }, {
                data: "jenis_kelamin",
                title: "Gender",
                orderable: false,
                searchable: false,
                visible: false
            }, {
                defaultContent: "-",
                title: "Tempat, Tanggal Lahir",
                orderable: false,
                searchable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    return `${row.tempat_lahir}, ${moment(row.tanggal_lahir).format('DD MMM YYYY')}`
                }
            }, {
                data: "email",
                title: "E-Mail",
                orderable: false,
                searchable: false,
                visible: false
            }, {
                data: "phone",
                title: "No. HP/WA",
                orderable: false,
                searchable: false,
                visible: false
            }, {
                data: "alamat",
                title: "Alamat",
                orderable: false,
                searchable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    return `${row.alamat}, ${row.provinsi.nama}`;
                }
            }, {
                data: "pekerjaan",
                title: "Pekerjaan",
                orderable: false,
                searchable: false,
                visible: false
            }, {
                data: "kewarganegaraan",
                title: "Kewarganegaraan",
                orderable: false,
                searchable: false,
                visible: false
            }, {
                data: "tingkatan.nama",
                title: "Tingkatan",
                orderable: false,
            }, {
                defaultContent: "-",
                title: "Cabang/Pengda",
                orderable: false,
                render: (data, type, row, meta) => {
                    var cabang = row.cabang ? row.cabang.nama.replace('CABANG ', '') : "-";
                    var daerah = row.daerah ? row.daerah.nama.replace('PENGDA ', '') : "-";
                    return `${cabang} / ${daerah}`
                }
            }, {
                defaultContent: "-",
                title: "Pengda",
                orderable: false,
                searchable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    return row.daerah ? row.daerah.nama.replace('PENGDA ', '') : "-";
                }
            }, {
                defaultContent: "-",
                title: "Cabang",
                orderable: false,
                searchable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    return row.cabang ? row.cabang.nama.replace('CABANG ', '') : "-";
                }
            }, {
                defaultContent: "-",
                title: "Kolat",
                orderable: false,
                searchable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    return row.kolat ? row.kolat.nama.replace('KOLAT ', '') : "-";
                }
            }, {
                data: "status",
                title: "Status",
                orderable: false,
                searchable: false,
                visible: false,
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
                data: "status",
                title: "Status",
                orderable: false,
                searchable: false,
                visible: false,
                render: (data, type, row, meta) => {
                    if (data == 0) {
                        return `Verify`;
                    } else if (data == 1) {
                        return `Aktif`;
                    } else if (data == 2) {
                        return `Denied`;
                    } else if (data == 3) {
                        return `Belum Lengkap`;
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
                        <a href="{{ route('anggota.validasi.index') }}/${row.id}" data-id="${row.id}" class="btn btn-outline-primary btn-sm text-primary btn-validate">
                            <span class="ti ti-user-check"></span> Validasi
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

        $('select[name="pengda"]').change(function(){
            var code = $(this).val()
            let params = new URLSearchParams(window.location.search);
            params.set('pengda', code);
            window.history.pushState({pageTitle: "Validasi Anggota"}, "", "{{ route('anggota.validasi.index') }}" + '?' + params.toString());

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
            window.history.pushState({pageTitle: "Validasi Anggota"}, "", "{{ route('anggota.validasi.index') }}" + '?' + params.toString());

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
            window.history.pushState({pageTitle: "Validasi Anggota"}, "", "{{ route('anggota.validasi.index') }}" + '?' + params.toString());

            table.draw();
            $('.btn-reset-filter').removeClass('d-none');
        });

        $('.btn-filter-status').on('click', function() {
            let params = new URLSearchParams(window.location.search);
            params.set('status', $(this).data('status'));
            window.history.pushState({pageTitle: "Validasi Anggota"}, "", "{{ route('anggota.validasi.index') }}" + '?' + params.toString());

            table.draw();
        });

        $('.btn-reset-status').on('click', function() {
            let params = new URLSearchParams(window.location.search);
            params.delete('status');
            window.history.pushState({pageTitle: "Validasi Anggota"}, "", "{{ route('anggota.validasi.index') }}" + '?' + params.toString());

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
            window.history.pushState({pageTitle: "Validasi Anggota"}, "", "{{ route('anggota.validasi.index') }}" + '?' + params.toString());

            table.draw();
        });

        setTimeout(() => {
            $('.dataTables_filter .form-control').removeClass('form-control-sm');
            $('.dataTables_length .form-select').removeClass('form-select-sm');
        }, 300);

        $('.card-title').html('');
    });
</script>
@endpush

