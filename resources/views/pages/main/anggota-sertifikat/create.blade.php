@extends('layouts.app')

@section('title', 'Sertifikat - Tambah Baru')

@section('content')
    <h4 class="content-header-title">
        <a href="{{ route('anggota.sertifikat.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
            <span class="ti ti-arrow-left"></span>
        </a>
        <span class="text-muted fw-light">Sertifikat /</span> Tambah Baru
    </h4>

    <div class="row">
        <div class="col-md-8 col-12">
            <div class="card">
                <form id="form-submit" action="{{ route('anggota.sertifikat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        
                    </div>

                    <div class="card-footer border-top pt-3">
                        <div class="btn-group">
                            <button type="submit" data-redirect="back" class="btn btn-primary">
                                <span>Simpan dan kembali</span>
                            </button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;" data-redirect="back" id="save_back" class="dropdown-item submit-option d-none">
                                    <span>Simpan dan kembali</span>
                                </a>

                                <a href="javascript:;" data-redirect="edit" id="save_edit" class="dropdown-item submit-option">
                                    <span>Simpan dan ubah data ini</span>
                                </a>

                                <a href="javascript:;" data-redirect="new" id="save_new" class="dropdown-item submit-option">
                                    <span>Simpan dan tambah baru</span>
                                </a>
                            </div>
                        </div>

                        <a href="{{ route('anggota.sertifikat.index') }}" class="btn btn-light mx-1">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
@endpush

@push('scripts')
    <script type="text/javascript">
        let redirect = $('button[type="submit"]').data('redirect');

        $(function() {
            var select2 = $('.select2');
            if (select2.length) {
                select2.each(function () {
                    var $this = $(this);
                    $this.wrap('<div class="position-relative"></div>').select2({
                        dropdownParent: $this.parent()
                    });
                });
            }

            $('.submit-option').on('click', function() {
                redirect = $(this).data('redirect');
                $('#form-submit').submit();
            });
        });

        new AjaxFormSubmitter({
            form: '#form-submit',
            scrollToError: false,
            success: function(response) {
                console.log(response);
                if (response.status == "success") {
                    switch (redirect) {
                        case 'new':
                            window.location.reload();
                            break;
                        case 'edit':
                            window.location.href = `{{ route('anggota.sertifikat.index') }}/${response.data.id}/edit`;
                            break;
                        default:
                            window.location.href = `{{ route('anggota.sertifikat.index') }}`;
                            break;
                    }
                }
            },
        });

        $('.flatpicker').flatpickr({
            altInput: true,
            altFormat: "d M Y",
            dateFormat: "Y-m-d",
        });

        $('#provinsi_id').on('change', function() {
            $('.cities-label').append('<span class="fa fa-spin fa-spinner loading ms-2"></span>');

            var code = $(this).val();
            $.ajax({
                url: "{{ route('ajax.cities') }}",
                type: "GET",
                data: {
                    kode: code
                },
                success: function(data) {
                    var html = "<option></option>";
                    data.forEach(item => {
                        html += `<option value="${item.kode}">${item.nama}</option>`;
                    });
                    $('#kabupaten_id').prop('disabled', false).html(html);
                    $('.loading').remove();
                }
            })
        });

        $('#kabupaten_id').on('change', function() {
            $('.distirts-label').append('<span class="fa fa-spin fa-spinner loading ms-2"></span>');

            var code = $(this).val();
            $.ajax({
                url: "{{ route('ajax.districts') }}",
                type: "GET",
                data: {
                    kode: code
                },
                success: function(data) {
                    var html = "<option></option>";
                    data.forEach(item => {
                        html += `<option value="${item.kode}">${item.nama}</option>`;
                    });
                    $('#kecamatan_id').prop('disabled', false).html(html);
                    $('.loading').remove();
                }
            })
        });

        $('#kecamatan_id').on('change', function() {
            $('.villages-label').append('<span class="fa fa-spin fa-spinner loading ms-2"></span>');

            var code = $(this).val();
            $.ajax({
                url: "{{ route('ajax.villages') }}",
                type: "GET",
                data: {
                    kode: code
                },
                success: function(data) {
                    var html = "<option></option>";
                    data.forEach(item => {
                        html += `<option value="${item.kode}">${item.nama}</option>`;
                    });
                    $('#desa_id').prop('disabled', false).html(html);
                    $('.loading').remove();
                }
            });
        });

        $('#daerah_id').on('change', function() {
            $('.cabang-label').append('<span class="fa fa-spin fa-spinner loading ms-2"></span>');
            var kode = $('#daerah_id option:selected').data('kode');
            $.ajax({
                url: "{{ route('ajax.cabang') }}",
                type: "GET",
                data: {
                    pengda: kode
                },
                success: function(data) {
                    var html = "<option></option>";
                    data.forEach(item => {
                        html += `<option value="${item.id}" data-kode="${item.kode}">${item.nama.replace('CABANG ', '')}</option>`;
                    });
                    $('#cabang_id').prop('disabled', false).html(html);
                    $('.loading').remove();
                }
            })
        });

        $('#cabang_id').on('change', function() {
            $('.kolat-label').append('<span class="fa fa-spin fa-spinner loading ms-2"></span>');
            var kode = $('#cabang_id option:selected').data('kode');
            $.ajax({
                url: "{{ route('ajax.kolat') }}",
                type: "GET",
                data: {
                    cabang: kode
                },
                success: function(data) {
                    var html = "<option></option>";
                    data.forEach(item => {
                        html += `<option value="${item.id}" data-kode="${item.kode}">${item.nama.replace('KOLAT ', '')}</option>`;
                    });
                    $('#kolat_id').prop('disabled', false).html(html);
                    $('.loading').remove();
                }
            })
        });
    </script>
@endpush
