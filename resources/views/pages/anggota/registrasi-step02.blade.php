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
                        <p class="mb-4">Kelengkapan data keanggotaan sangat diperlukan untuk database kami.</p>

                        @include('pages.anggota.inc.registrasi-steps')

                        <form action="{{ route('anggota.registrasi.step02.submit') }}" method="POST" id="form-submit-2">
                            @csrf
                            <input type="hidden" name="id" value="{{ $anggota->id }}" />

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
                                        @foreach (\App\Models\MTingkatan::whereAge($anggota->usia)->get() as $tingkatan)
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
            form: '#form-submit-2',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = response.redirect;
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

        var select2noSrc = $('.select2-nosearch');
        if (select2noSrc.length) {
            select2noSrc.each(function () {
                var $this = $(this);
                $this.wrap('<div class="position-relative"></div>').select2({
                    dropdownParent: $this.parent()
                });
            });
        }

        $('.flatpicker').flatpickr({
            altInput: true,
            altFormat: "d M Y",
            dateFormat: "Y-m-d",
            maxDate: "{{ now()->format('Y-m-d') }}",
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
    });
</script>
@endpush


