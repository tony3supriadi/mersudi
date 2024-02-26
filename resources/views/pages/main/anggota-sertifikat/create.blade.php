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
                        <div class="row">
                            <div class="form-group col-12 mb-3" data-field="level">
                                <label class="form-label">Level Kegiatan</label>
                                <div class="d-flex">
                                    <div class="form-check me-3">
                                        <input type="radio" name="level" id="level-1" value="1" class="form-check-input" checked />
                                        <label class="form-check-label" for="level-1">
                                            PENGDA
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input type="radio" name="level" id="level-2" value="2" class="form-check-input" />
                                        <label class="form-check-label" for="level-2">
                                            CABANG
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div id="pengda-select-option" class="form-group col-12 mb-3" data-field="pengda">
                                <label for="pengda" class="form-label">Pilih PENGDA <span style="color:red">*</span></label>
                                <select name="pengda" id="pengda" data-placeholder="" class="form-select select2">
                                    <option></option>
                                    @foreach (\App\Models\MDaerah::get() as $pengda)
                                        <option value="{{ $pengda->id }}">{{ $pengda->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div id="cabang-select-option" class="form-group col-12 mb-3 d-none" data-field="cabang">
                                <label for="cabang" class="form-label">Pilih CABANG <span style="color:red">*</span></label>
                                <select name="cabang" id="cabang" data-placeholder="" class="form-select select2">
                                    <option></option>
                                    @foreach (\App\Models\MCabang::get() as $cabang)
                                        <option value="{{ $cabang->id }}">{{ $cabang->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-12 mb-3" data-field="judul_kegiatan">
                                <label for="judul_kegiatan" class="form-label">Judul kegiatan <span style="color:red">*</span></label>
                                <input type="text" name="judul_kegiatan" id="judul_kegiatan" class="form-control" />
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="nomor_sertifikat">
                                <label for="nomor_sertifikat" class="form-label">Nomor Sertifikat <span style="color:red">*</span></label>
                                <input type="text" name="nomor_sertifikat" id="nomor_sertifikat" class="form-control" />
                            </div>

                            <div class="form-group col-md-6 mb-3" data-field="tanggal_pelaksanaan">
                                <label for="tanggal_pelaksanaan" class="form-label">Tanggal Pelaksanaan <span style="color:red">*</span></label>
                                <input type="text" name="tanggal_pelaksanaan" id="tanggal_pelaksanaan" class="form-control flatpicker" />
                            </div>

                            <div class="form-group col-md-12 mb-3" data-field="background">
                                <label for="background" class="form-label">Background <span style="color:red">*</span></label>
                                <input type="file" name="background" id="background" class="form-control" />
                            </div>

                            <div class="form-group col-md-12 mb-3" data-field="pengesahan">
                                <label for="pengesahan" class="form-label mb-2">Ditanda tangani oleh: <span style="color:red">*</span></label>
                                @foreach (App\Models\Msignature::where('aktif', '1')->get() as $signature)
                                    <div class="form-check mb-2">
                                        <input type="checkbox" name="signature" id="signature-{{ $signature->id }}" value="{{ $signature->id }}" class="form-check-input" />
                                        <label class="form-check-label" for="signature-{{ $signature->id }}">
                                            {{ $signature->jabatan }}: {{ $signature->nama }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card-footer border-top pt-3">
                        <button type="submit" class="btn btn-primary">
                            <span>Simpan</span>
                        </button>

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

            $('input[name="level"]').on('change', function() {
                let level = $(this).val();
                if (level == 1) {
                    $('#pengda-select-option').removeClass('d-none');
                    $('#cabang-select-option').addClass('d-none');
                } else {
                    $('#cabang-select-option').removeClass('d-none');
                    $('#pengda-select-option').addClass('d-none');
                }
            });
        });

        new AjaxFormSubmitter({
            form: '#form-submit',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = "{{ route('anggota.sertifikat.index') }}/" + response.data.id;
                }
            },
        });

        $('.flatpicker').flatpickr({
            altInput: true,
            altFormat: "d M Y",
            dateFormat: "Y-m-d",
        });
    </script>
@endpush
