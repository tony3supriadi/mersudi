@extends('layouts.app')

@section('title', 'Verifikasi KTA - Data Detail')

@section('content')
<h4 class="content-header-title">
    <a href="{{ route('anggota.verifikasi.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
        <span class="ti ti-arrow-left"></span>
    </a>
    <span class="text-muted fw-light">Verifikasi KTA /</span> Data Detail
</h4>

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-body p-0">
                <h3 class="p-3 fs-6 mb-0 border-bottom fw-bold">DATA ANGGOTA</h3>
                <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">NIA</td>
                                <td width="10px">:</td>
                                <td><strong>{{ $anggota->nia }}</strong></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Nama Lengkap</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->nama_lengkap ?? '-' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="show-less">
                        <table class="table table-flush-spacing">
                            <tbody>
                                <tr class="show-less">
                                    <td width="300px" class="fw-bold text-end text-uppercase">Nama Panggilan</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->nama_panggilan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">Jenis Kelamin</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->jenis_kelamin ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">Tempat, Tanggal Lahir</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->tempat_lahir ?? '-' }}, {{ Carbon\Carbon::parse($anggota->tanggal_lahir)->isoFormat('DD MMM YYYY') }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">E-Mail</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->email ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">No HP/WA</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->phone ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">Alamat</td>
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
                                    <td width="300px" class="fw-bold text-end text-uppercase">Pekerjaan</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->pekerjaan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">Kewarganegaraan</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->kewarganegaraan ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">PENGDA</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->daerah ? str_replace("PENGDA ", "", $anggota->daerah->nama) : '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">CABANG</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->cabang ? str_replace("CABANG ", "", $anggota->cabang->nama) : '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">KOLAT</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->kolat ? str_replace("KOLAT ", "", $anggota->kolat->nama) : '-' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">Tingkatan</td>
                                <td width="10px">:</td>
                                <td>{{ $anggota->tingkatan ? $anggota->tingkatan->nama : '-' }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="show-less">
                        <table class="table table-flush-spacing">
                            <tbody>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">Tanggal Masuk</td>
                                    <td width="10px">:</td>
                                    <td>{{ $anggota->tanggal_bergabung ? Carbon\Carbon::parse($anggota->tanggal_bergabung)->isoFormat('DD MMM YYYY') : '-' }}</td>
                                </tr>
                                <tr>
                                    <td width="300px" class="fw-bold text-end text-uppercase">Status</td>
                                    <td width="10px">:</td>
                                    <td>{!! $anggota->status ? $anggota->getStatusName(true) : '-' !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td width="300px"></td>
                                <td width="10px"></td>
                                <td class="fst-italic">
                                    <a href="javascript:void(0)" class="btn-show-more">
                                        Tampilkan Lebih Banyak <span class="ti ti-arrow-down"></span>
                                    </a>

                                    <a href="javascript:void(0)" class="btn-show-less" style="display: none">
                                        Tampilkan Lebih Sedikit <span class="ti ti-arrow-up"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <h3 class="p-3 fs-6 mb-0 border-bottom fw-bold">PEMBAYARAN KTA</h3>

                <div class="table-responsive">
                    <table class="table table-flush-spacing">
                        <tbody>
                            <tr>
                                <td width="300px" class="fw-bold text-end text-uppercase">INVOICE</td>
                                <td width="10px">:</td>
                                <td><strong>INV-{{ $hasKTA->invoice_number }}</strong></td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Paket KTA</td>
                                <td width="10px">:</td>
                                <td>{{ $hasKTA->kta ? $hasKTA->kta->nama : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Biaya</td>
                                <td width="10px">:</td>
                                <td>{{ $hasKTA->harga_total ? 'Rp' . number_format($hasKTA->harga_total, 0, ',', '.') : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Bukti Pembayaran</td>
                                <td width="10px">:</td>
                                <td>
                                    <a href="javascript:void(0)" class="image-gallery" data-image="{{ asset('storage/invoices/' . $hasKTA->bukti_pembayaran) }}">
                                        <img alt="..." src="{{ asset('storage/invoices/' . $hasKTA->bukti_pembayaran) }}" class="img-payment" />
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-end text-uppercase">Pembayaran pada</td>
                                <td width="10px">:</td>
                                <td>{{ $hasKTA->created_at ? $hasKTA->created_at->isoFormat('DD MMM YYYY HH:mm') : '-' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer pt-3 d-flex justify-content-end">
                <button class="btn btn-primary btn-verifikasi" data-bs-toggle="modal" data-bs-target="#verifikasi-modal" type="button">
                    <span class="ti ti-credit-card me-2"></span>
                    <span>Verifikasi Pembayaran</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="verifikasi-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-simple">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Verifikasi Pembayaran</h3>
                    <p class="text-muted">Berikan tanggapan terkait pembayaran ini?</p>
                </div>

                <form action="{{ route('anggota.verifikasi.submit') }}" id="verifikasi-submit" method="POST" class="row g-3">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $hasKTA->id }}" />

                    <div class="col-md mb-md-0 mb-3">
                        <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="status-valid">
                                <span class="custom-option-body">
                                    <span class="custom-option-title fw-bold">KTA Valid</span>
                                </span>
                                <input type="radio" name="status" id="status-valid" value="1" class="form-check-input" checked />
                            </label>
                        </div>
                    </div>
                    <div class="col-md mb-md-0 mb-3">
                        <div class="form-check custom-option custom-option-icon">
                            <label class="form-check-label custom-option-content" for="status-unvalid">
                                <span class="custom-option-body">
                                    <span class="custom-option-title fw-bold">KTA Tidak Valid</span>
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
                            <input type="radio" name="note" id="note-1" value="Bukti pembayaran tidak sesuai dan belum diterima." class="form-check-input form-check-note" />
                            <label class="form-check-label" for="note-1">Bukti pembayaran tidak sesuai dan belum diterima.</label>
                        </div>

                        <div class="form-check mb-2">
                            <input type="radio" name="note" id="note-2" value="Paket KTA yang dipilih tidak sesuai dengan tingkatan saat ini." class="form-check-input form-check-note" />
                            <label class="form-check-label" for="note-2">Paket KTA yang dipilih tidak sesuai dengan tingkatan saat ini.</label>
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

@push('styles')
<style type="text/css">
.show-less {
    display: none;
}

.img-payment {
    width: 50px;
    height: 50px;
    object-fit: cover;
    object-position: center;
    border-radius: 5px;
}

.image-gallery-preview-wrapper {
    position: fixed;
    width: 100vw;
    height: 100vh;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, .8);
    display: none;
}

.image-gallery-preview-close {
    position: absolute;
    top: 0px;
    right: 30px;
    color: #fff;
    font-size: 30px;
    font-weight: 300;
}

.image-gallery-preview {
    width: 300px;
    height: 70%;
    object-fit: contain;
}
</style>
@endpush

@push('scripts')
<div class="image-gallery-preview-wrapper">
    <a href="javascript:;" class="image-gallery-preview-close">&times;</a>
    <img src="{{ asset('storage/invoices/' . $hasKTA->bukti_pembayaran) }}" class="image-gallery-preview" />
</div>

<script type="text/javascript">
    $(function() {
        new AjaxFormSubmitter({
            form: '#verifikasi-submit',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = `{{ route('anggota.verifikasi.index') }}`;
                }
            }
        });

        $('.image-gallery').on('click', function() {
            $('.image-gallery-preview-wrapper').css('display', 'flex');
        });

        $('.image-gallery-preview-close').on('click', function() {
            $('.image-gallery-preview-wrapper').hide();
        });

        $('.btn-show-more').on('click', function() {
            $('.show-less').slideDown();
            $('.btn-show-more').hide();
            $('.btn-show-less').show();
        });

        $('.btn-show-less').on('click', function() {
            $('.show-less').slideUp();
            $('.btn-show-less').hide();
            $('.btn-show-more').show();
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
