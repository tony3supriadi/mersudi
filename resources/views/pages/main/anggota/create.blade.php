@extends('layouts.app')

@section('title', 'Anggota - Tambah Baru')

@section('content')
    <h4 class="content-header-title">
        <a href="{{ route('daftar-anggota.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
            <span class="ti ti-arrow-left"></span>
        </a>
        <span class="text-muted fw-light">Anggota /</span> Tambah Baru
    </h4>

    <div class="row">
        <div class="col-md-8 col-12">
            <div class="card">
                <form id="form-submit" action="{{ route('daftar-anggota.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="nomor_urut_registrasi" value="{{ get_reg_number() }}" />

                    <div class="card-body">
                        <h4 class="fs-6">INFORMASI PERSONAL</h4>
                        <div class="row">
                            <div class="form-group col-md-6" data-field="nomor_urut_anggota">
                                <label for="nomor_urut_anggota" class="form-label">Nomor Urut Registrasi</label>
                                <input type="text" name="nomor_urut_anggota" id="nomor_urut_anggota"  value="{{ get_member_number() }}" class="form-control" readonly />
                            </div>

                            <div class="form-group col-md-6" data-field="nik">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label for="nik" class="form-label">NIK <span style="color:red">*</span></label>
                                    <small class="text-muted ms-1 fst-italic">Cek pada KTP/KK</small>
                                </div>

                                <input type="text" name="nik" id="nik" class="form-control" />
                            </div>
                        </div>

                        <hr />

                        <div class="row">
                            <div class="form-group col-md-6 mb-3" data-field="nama_lengkap">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap <span style="color:red">*</span></label>
                                <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" />
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="nama_panggilan">
                                <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                                <input type="text" name="nama_panggilan" id="nama_panggilan" class="form-control" />
                            </div>

                            <div class="form-group col-md-6" data-field="email">
                                <label for="email" class="form-label">E-Mail</label>
                                <input type="text" name="email" id="email" class="form-control" />
                            </div>

                            <div class="form-group col-md-6" data-field="phone">
                                <label for="phone" class="form-label">No. HP/WA <span style="color:red">*</span></label>
                                <input type="text" name="phone" id="phone" class="form-control" />
                            </div>
                        </div>

                        <hr />

                        <div class="row">
                            <div class="form-group col-md-12 mb-2" data-field="jenis_kelamin">
                                <label for="phone" class="form-label mb-2">Jenis Kelamin <span style="color:red">*</span></label>

                                <div class="d-flex align-items-center">
                                    <div class="form-check me-3">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin-l" value="Laki-laki"/>
                                        <label class="form-check-label" for="jenis_kelamin-l">
                                            Laki-laki
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin-p" value="Perempuan"/>
                                        <label class="form-check-label" for="jenis_kelamin-p">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="tempat_lahir">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir <span style="color:red">*</span></label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" />
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="tanggal_lahir">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span style="color:red">*</span></label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control flatpicker" />
                            </div>

                            <div class="form-group col-md-12 mb-3" data-field="alamat">
                                <label for="alamat" class="form-label">Alamat <span style="color:red">*</span></label>
                                <textarea name="alamat" id="alamat" class="form-control"></textarea>
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="provinsi_id">
                                <label for="provinsi_id" class="form-label">Provinsi <span style="color:red">*</span></label>
                                <select name="provinsi_id" id="provinsi_id" data-placeholder="" class="form-select select2">
                                    <option value=""></option>
                                    @foreach (\App\Models\Wilayah::provinces() as $province)
                                        <option value="{{ $province->kode }}">{{ $province->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="kabupaten_id">
                                <label for="kabupaten_id" class="form-label cities-label">Kabupaten/Kota <span style="color:red">*</span></label>
                                <select name="kabupaten_id" id="kabupaten_id" data-placeholder="" class="form-select select2" disabled></select>
                            </div>

                            <div class="form-group col-md-6" data-field="kecamatan_id">
                                <label for="kecamatan_id" class="form-label distirts-label">Kecamatan <span style="color:red">*</span></label>
                                <select name="kecamatan_id" id="kecamatan_id" data-placeholder="" class="form-select select2" disabled></select>
                            </div>

                            <div class="form-group col-md-6" data-field="desa_id">
                                <label for="desa_id" class="form-label villages-label">Desa/Kelurahan <span style="color:red">*</span></label>
                                <select name="desa_id" id="desa_id" data-placeholder="" class="form-select select2" disabled></select>
                            </div>
                        </div>

                        <hr />

                        <div class="row">
                            <div class="form-group col-md-6" data-field="kewarganegaraan">
                                <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                <select name="kewarganegaraan" id="kewarganegaraan" data-placeholder="" class="form-select select2-nosearch">
                                    <option></option>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6" data-field="pekerjaan">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" />
                            </div>
                        </div>

                        <hr />

                        <h4 class="fs-6">INFORMASI KEANGGOTAAN</h4>

                        <div class="row">
                            <div class="form-group col-md-6 mb-3" data-field="daerah_id">
                                <label for="daerah_id" class="form-label">PENGDA <span style="color:red">*</span></label>
                                <select name="daerah_id" id="daerah_id" data-placeholder="" class="form-select select2">
                                    <option value=""></option>
                                    @foreach (\App\Models\MDaerah::all() as $daerah)
                                        <option value="{{ $daerah->id }}" data-kode="{{ $daerah->kode }}">{{ str_replace("PENGDA ", "", $daerah->nama) }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="cabang_id">
                                <label for="cabang_id" class="form-label cabang-label">PENGCAB <span style="color:red">*</span></label>
                                <select name="cabang_id" id="cabang_id" data-placeholder="" class="form-select select2" disabled>
                                    <option value=""></option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="kolat_id">
                                <label for="kolat_id" class="form-label kolat-label">KOLAT <span style="color:red">*</span></label>
                                <select name="kolat_id" id="kolat_id" data-placeholder="" class="form-select select2" disabled>
                                    <option value=""></option>
                                </select>
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="tingkatan_id">
                                <label for="tingkatan_id" class="form-label">Tingkatan <span style="color:red">*</span></label>
                                <select name="tingkatan_id" id="tingkatan_id" data-placeholder="" class="form-select select2">
                                    <option value=""></option>
                                    @foreach (\App\Models\MTingkatan::get() as $tingkatan)
                                        <option value="{{ $tingkatan->id }}">{{ $tingkatan->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6" data-field="tanggal_bergabung">
                                <label for="tanggal_bergabung" class="form-label">Tanggal Masuk <span style="color:red">*</span></label>
                                <input type="text" name="tanggal_bergabung" id="tanggal_bergabung" class="form-control flatpicker" />
                                <small class="text-muted">Catatan: Bagi yang lupa tanggal masuk, silahkan isi tahun masuk, tanggal dan bulan diisi: 1 Jan <br />(Cth: 1 Jan 2024).</small>
                            </div>
                        </div>
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

                        <a href="{{ route('daftar-anggota.index') }}" class="btn btn-light mx-1">
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
                            window.location.href = `{{ route('daftar-anggota.index') }}/${response.data.id}/edit`;
                            break;
                        default:
                            window.location.href = `{{ route('daftar-anggota.index') }}`;
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
