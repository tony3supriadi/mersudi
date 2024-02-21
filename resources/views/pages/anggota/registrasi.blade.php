@extends('layouts.blank')

@section('title', 'Anggota - Pemutakhrian Data')

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4" style="max-width: 700px !important">
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-4 mt-2">
                            <a href="" class="app-brand-link gap-2">
                                @include('components.logo')
                                <span class="app-brand-text demo text-body fw-bold ms-1">Mersudi App</span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        <h4 class="mb-1 pt-2">Pemutakhiran Data 👤</h4>
                        <p class="mb-4">Mohon untuk melengkapi data informasi personal Anda pada form pemutakhiran berikut!</p>

                        @include('pages.anggota.inc.registrasi-steps')

                        <form action="{{ route('anggota.registrasi.submit') }}" method="POST" id="form-submit-1">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            <input type="hidden" name="nomor_urut_registrasi" value="{{ get_reg_number() }}" />

                            <div class="row">
                                <div class="form-group col-md-6" data-field="nomor_urut_anggota">
                                    <label for="nomor_urut_anggota" class="form-label">Nomor Urut Registrasi</label>
                                    <input type="text" name="nomor_urut_anggota" id="nomor_urut_anggota"  value="{{ get_member_number() }}" class="form-control" readonly />
                                </div>

                                <div class="form-group col-md-6" data-field="nik">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label for="nik" class="form-label">NIK <span style="color:red">*</span></label>
                                        <small class="text-muted ms-1 fst-italic">Cek pada KTP/KK anda</small>
                                    </div>

                                    <input type="text" name="nik" id="nik" class="form-control" />
                                </div>
                            </div>

                            <hr />

                            <div class="row">
                                <div class="form-group col-md-6 mb-3" data-field="nama_lengkap">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap <span style="color:red">*</span></label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $oldb ? $oldb->agt_nama : Auth::user()->name }}" class="form-control" />
                                </div>

                                <div class="form-group col-md-6 mb-3" data-field="nama_panggilan">
                                    <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                                    <input type="text" name="nama_panggilan" id="nama_panggilan" value="{{ $oldb ? nickname($oldb->agt_nama) : nickname(Auth::user()->name) }}" class="form-control" />
                                </div>

                                <div class="form-group col-md-6" data-field="email">
                                    <label for="email" class="form-label">E-Mail</label>
                                    <input type="text" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control" readonly />
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
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin-l" value="Laki-laki" @if($oldb && $oldb->agt_jenkel == 1) checked @endif/>
                                            <label class="form-check-label" for="jenis_kelamin-l">
                                                Laki-laki
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin-p" value="Perempuan" @if($oldb && $oldb->agt_jenkel == 2) checked @endif />
                                            <label class="form-check-label" for="jenis_kelamin-p">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 mb-3" data-field="tempat_lahir">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir <span style="color:red">*</span></label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $oldb ? $oldb->agt_tempat_lahir : '' }}" class="form-control" />
                                </div>

                                <div class="form-group col-md-6 mb-3" data-field="tanggal_lahir">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span style="color:red">*</span></label>
                                    <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="{{ $oldb ? $oldb->agt_tgl_lahir : '' }}" value="{{ $oldb ? $oldb->agt_tgl_lahir : '' }}" class="form-control datepicker" />
                                </div>

                                <div class="form-group col-md-12 mb-3" data-field="alamat">
                                    <label for="alamat" class="form-label">Alamat <span style="color:red">*</span></label>
                                    <textarea name="alamat" id="alamat" class="form-control">{{ $oldb ? $oldb->agt_alamat : '' }}</textarea>
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
                                    <select name="kabupaten_id" id="kabupaten_id" data-placeholder="" class="form-select select2"></select>
                                </div>

                                <div class="form-group col-md-6" data-field="kecamatan_id">
                                    <label for="kecamatan_id" class="form-label distirts-label">Kecamatan <span style="color:red">*</span></label>
                                    <select name="kecamatan_id" id="kecamatan_id" data-placeholder="" class="form-select select2"></select>
                                </div>

                                <div class="form-group col-md-6" data-field="desa_id">
                                    <label for="desa_id" class="form-label villages-label">Desa/Kelurahan <span style="color:red">*</span></label>
                                    <select name="desa_id" id="desa_id" data-placeholder="" class="form-select select2"></select>
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

                            <hr class="my-4" />

                            <div class="d-flex justify-content-end align-items-center">
                                <button type="submit" class="btn btn-primary">
                                    <span>Selanjutnya</span>
                                    <span class="ti ti-arrow-right ms-1"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    $(function() {
        new AjaxFormSubmitter({
            form: '#form-submit-1',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = response.redirect;
                }
            },
        });

        $('.select2').select2();
        $('.select2-nosearch').select2({
            minimumResultsForSearch: Infinity
        });

        $('.datepicker').flatpickr({
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
                    $('#kabupaten_id').html(html);
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
                    $('#kecamatan_id').html(html);
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
                    $('#desa_id').html(html);
                    $('.loading').remove();
                }
            });
        });
    });
</script>
@endpush


