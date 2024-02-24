@extends('layouts.blank')

@section('title', 'Anggota - KTA')

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

                        <h4 class="mb-1 pt-2">Kartu Anggota (KTA)</h4>
                        <p class="mb-4">Semua anggota wajib mempunyai kartu anggota (KTA), sebagai bukti identitas.</p>

                        @include('pages.anggota.inc.registrasi-steps')

                        @if($oldb != null && !request()->get('renew'))
                            <h4 class="fs-6 mb-0">DATA KTA</h4>
                            <p>Beikut data KTA yang kami temukan di aplikasi mersudi v1.</p>
                            <div class="form-group mb-3">
                                <label class="form-label">NIA</label>
                                <input type="text" class="form-control" value="{{ $oldb->agt_no_kta }}" disabled />
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Nama Anggota</label>
                                <input type="text" class="form-control" value="{{ $oldb->agt_nama }}" disabled />
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Masa Berlaku</label>
                                <input type="text" class="form-control" value="{{ Carbon\Carbon::parse($oldb->beli_kta_valid)->isoFormat('DD MMM YYYY') }}" disabled />
                                @if(Carbon\Carbon::parse($oldb->beli_kta_valid)->diffInDays(Carbon\Carbon::now()) <= 0)
                                    <small class="text-danger">*KTA sudah tidak berlaku</small></small>
                                @endif
                            </div>

                            @if(Carbon\Carbon::parse($oldb->beli_kta_valid)->diffInDays(Carbon\Carbon::now()) <= 0)
                                <a href="?renew=1" class="btn btn-primary">PERBARUI SEKARANG!</a>
                            @endif

                            <hr />

                            <div class="p-3 border rounded text-muted fst-italic">
                                NOTE: <br />
                                Pada aplikasi mersudi v2 ini, untuk NIA akan dipersingkat sehingga NIA Anda menjadi:
                                <strong>{{ $anggota->nia }}</strong>
                            </div>

                            <hr />

                            @if(Carbon\Carbon::parse($oldb->beli_kta_valid)->diffInDays(Carbon\Carbon::now()) >= 0)
                                <form action="{{ route('anggota.registrasi.step03.submit') }}" method="POST" id="form-submit-3">
                                    @csrf
                                    @php $kta = \App\Models\MKta::whereTingkatan($anggota->tingkatan->id)->first(); @endphp
                                    <input type="hidden" name="anggota_id" value="{{ $anggota->id }}" />
                                    <input type="hidden" name="kta_id" value="{{ $kta->id }}" />
                                    <input type="hidden" name="signature_id" value="{{ \App\Models\MSignature::ketum()->first()->id }}" />
                                    <input type="hidden" name="harga" value="{{ $oldb->beli_total }}" />
                                    <input type="hidden" name="harga_total" value="{{ $oldb->beli_total }}" />
                                    <input type="hidden" name="tanggal_berlaku" value="{{ Carbon\Carbon::parse($oldb->beli_tgl)->format('Y-m-d') }}" />
                                    <input type="hidden" name="tanggal_kadaluarsa" value="{{ Carbon\Carbon::parse($oldb->beli_kta_valid)->format('Y-m-d') }}" />
                                    <input type="hidden" name="status" value="{{ \App\Models\AnggotaHasKta::STATUS_ACTIVE }}" />
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            <span>SUBMIT</span>
                                        </button>
                                    </div>
                                </form>
                            @endif
                        @else
                            <form action="{{ route('anggota.registrasi.step03.submit') }}" method="POST" id="form-submit-3" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="anggota_id" value="{{ $anggota->id }}" />
                                <input type="hidden" name="signature_id" value="{{ \App\Models\MSignature::ketum()->first()->id }}" />
                                <input type="hidden" name="status" value="{{ \App\Models\AnggotaHasKta::STATUS_VERIFY }}" />
                                <input type="hidden" name="harga" />
                                <input type="hidden" name="harga_total" />

                                <h4 class="fs-6 mb-0">PAKET KTA</h4>
                                <p>Berikut daftar paket KTA sesuai tingkatan yang bisa Anda pilih.</p>

                                <div class="row">
                                    @foreach (\App\Models\MKta::whereTingkatan($anggota->tingkatan->id)->get() as $kta)
                                        <div class="col-md-4">
                                            <label for="kta_id_{{ $kta->id }}" class="card card-body p-2 options-box">
                                                <input type="radio" name="kta_id" data-price="{{ $kta->harga }}" id="kta_id_{{ $kta->id }}" value="{{ $kta->id }}" />
                                                <h4 class="fs-6 mb-0 line-clamp-1">{{ $kta->nama }}</h4>
                                                <p class="mb-0">Rp{{ number_format($kta->harga, 0, ',', '.') }}</p>
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                <div id="payment_guide" class="row" style="display: none">
                                    <div class="col-md-12">
                                        <hr />

                                        <h4 class="fs-6 mb-0">Cara Pembayaran:</h4>

                                        <ol>
                                            <li>Pembayaran dilakukan dengan transfer ke rekening: <br /><strong>BRI 211401000433307 (a.n PPS Betako Merpati Putih)</strong></li>
                                            <li>Nominal yang harus Anda bayarkan sebesar <strong id="price-elmt"></strong></li>
                                            <li>Setelah melakukan pembayaran, <strong>simpan bukti pembayaran dan upload</strong> ke halaman ini.</li>
                                        </ol>

                                        <hr />

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-3">
                                                <label for="" class="form-label">Bukti Pembayaran:</label>
                                                <input type="file" name="bukti_pembayaran" class="form-control" accept="image/*" />
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-primary" disabled>
                                                    <span>SUBMIT</span>
                                                </button>
                                            </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
@endpush

@push('vendor-scripts')
@endpush

@push('styles')
<style type="text/css">
    .options-box {
        margin-bottom: 12px;
    }
    .options-box input {
        display: none;
    }

    .options-box:has(input:checked) {
        border: 2px solid #297bbf;
        color: #297bbf;
    }

    .options-box:has(input:checked) h4 {
        color: #297bbf;
    }
</style>
@endpush

@push('scripts')
<script type="text/javascript">
    $(function() {
        new AjaxFormSubmitter({
            form: '#form-submit-3',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = response.redirect;
                }
            },
        });

        $('input[name="kta_id"]').on('click', function() {
            var price = $(this).data('price');
            $('input[name="harga"]').val(price);
            $('input[name="harga_total"]').val(price);
            $('#price-elmt').html(`Rp${number_format(price, 0, ',', '.')},-`);
            $('#payment_guide').slideDown();
        });

        $('input[name="bukti_pembayaran"]').on('change', function() {
            $('button[type="submit"]').prop('disabled', false);
        });
    });
</script>
@endpush


