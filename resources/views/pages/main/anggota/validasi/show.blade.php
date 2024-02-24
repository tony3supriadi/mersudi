@extends('layouts.app')

@section('title', 'Anggota - Data Detail')

@section('content')
<h4 class="content-header-title">
    <a href="{{ route('daftar-anggota.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
        <span class="ti ti-arrow-left"></span>
    </a>
    <span class="text-muted fw-light">Anggota /</span> Data Detail
</h4>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">NIA</td>
                                <td width="10px">:</td>
                                <td><strong>{{ $anggota->nia }}</strong></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama Lengkap</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->nama_lengkap ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama Panggilan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->nama_panggilan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Jenis Kelamin</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->jenis_kelamin ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Tempat, Tanggal Lahir</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tempat_lahir ?? '-' }}, {{ Carbon\Carbon::parse($anggota->tanggal_lahir)->isoFormat('DD MMM YYYY') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">E-Mail</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->email ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">No HP/WA</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->phone ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Alamat</td>
                                <td width="10px">:</td>
                                <td>
                                    {{ $anggota->alamat ?? '-' }}
                                    {!! $anggota->provinsi ? '<br />Provinsi: ' . $anggota->provinsi->nama : '' !!}
                                    {!! $anggota->kabupaten ? '<br />Kabupaten/Kota: ' . $anggota->kabupaten->nama : '' !!}
                                    {!! $anggota->kecamatan ? '<br />Kecamatan: ' . $anggota->kecamatan->nama : '' !!}
                                    {!! $anggota->desa ? '<br />Desa/Kelurahan: ' . $anggota->desa->nama : '' !!}
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Pekerjaan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->pekerjaan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Kewarganegaraan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->kewarganegaraan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">PENGDA</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->daerah ? str_replace("PENGDA ", "", $anggota->daerah->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">CABANG</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->cabang ? str_replace("CABANG ", "", $anggota->cabang->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">KOLAT</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->kolat ? str_replace("KOLAT ", "", $anggota->kolat->nama) : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Tingkatan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tingkatan ? $anggota->tingkatan->nama : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Tanggal Masuk</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tanggal_bergabung ? Carbon\Carbon::parse($anggota->tanggal_bergabung)->isoFormat('DD MMM YYYY') : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Status</td>
                                <td width="10px">:</td>
                                <td>{!! $anggota->status ? $anggota->getStatusName(true) : '-' !!}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Keterangan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->keterangan ?? '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Created At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($anggota->created_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Updated At</td>
                                <td width="10px">:</td>
                                <td>{{ Carbon\Carbon::parse($anggota->updated_at)->isoFormat('DD MMM YYYY HH:mm') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-validate" data-bs-toggle="modal" data-bs-target="#validate-modal" type="button">
                    <span class="ti ti-user-check me-2"></span>
                    <span>Validasi Data</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="validate-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Validasi Data Anggota</h3>
                    <p class="text-muted">Berikan tanggapan terkait anggota ini?</p>
                </div>

                <form action="{{ route('anggota.validasi.submit') }}" id="validate-submit" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="anggota_id" value="{{ $anggota->id }}" />

                    <div class="col-md mb-md-0 mb-3">
                        <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="status-valid">
                                <span class="custom-option-body">
                                    <span class="custom-option-title fw-bold">Data Valid</span>
                                    <small style="line-height:10px !important">Data anggota sesuai ketentuan.</small>
                                </span>
                                <input type="radio" name="status" id="status-valid" value="1" class="form-check-input" checked />
                            </label>
                        </div>
                    </div>
                    <div class="col-md mb-md-0 mb-3">
                        <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="status-unvalid">
                                <span class="custom-option-body">
                                    <span class="custom-option-title fw-bold">Data Tidak Valid</span>
                                    <small style="line-height:10px !important">Data anggota belum sesuai ketentuan.</small>
                                </span>
                                <input type="radio" name="status" id="status-unvalid" value="2" class="form-check-input" />
                            </label>
                        </div>
                    </div>

                    <div id="keterangan-valid" class="col-12">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                    </div>

                    <div id="keterangan-unvalid" class="col-12" style="display:none">
                        <label class="form-label mb-2">Berikan Alasan tidak valid:</label>
                        <div class="form-check mb-2">
                            <input type="radio" name="note" id="note-1" value="Data anggota tidak sesuai atau belum lengkap." class="form-check-input form-check-note" />
                            <label class="form-check-label" for="note-1">Data anggota tidak sesuai atau belum lengkap.</label>
                        </div>

                        <div class="form-check mb-2">
                            <input type="radio" name="note" id="note-2" value="Data anggota tidak disetujui cabang atau pengda." class="form-check-input form-check-note" />
                            <label class="form-check-label" for="note-2">Data anggota tidak disetujui cabang atau pengda.</label>
                        </div>

                        <div class="form-check mb-2">
                            <input type="radio" name="note" id="note-3" value="" class="form-check-input form-check-note" />
                            <label class="form-check-label" for="note-3">Lainnya:</label>
                        </div>

                        <textarea class="form-control" id="note-3-textarea" rows="3" disabled></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
@endpush

@push('scripts')
<script type="text/javascript">
    $(function() {
        new AjaxFormSubmitter({
            form: '#validate-submit',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = `{{ route('anggota.validasi.index') }}`;
                }
            }
        });

        $('input[name="status"]').on('change', function() {
            $('#keterangan').val('');
            $('#note-3-textarea').val('');
            $('input[name="note"]').prop('checked', false);
            $('#note-3-textarea').prop('disabled', true);

            if ($(this).val() == 2) {
                $('#keterangan-valid').slideUp();
                $('#keterangan-unvalid').slideDown();
            } else {
                $('#keterangan-valid').slideDown();
                $('#keterangan-unvalid').slideUp();
            }
        });

        $('input[name="note"]').on('change', function() {
            var value = $(this).val();
            if (value) {
                $('#keterangan').val(value);
                $('#note-3-textarea').prop('disabled', true);
            } else {
                $('#note-3-textarea').val('');
                $('#note-3-textarea').prop('disabled', false);
            }
        });

        $('#note-3-textarea').on('keyup', function() {
            var value = $(this).val();
            $('#note-3').val(value);
            $('#keterangan').val(value);
        });
    });
</script>
@endpush
