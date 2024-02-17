@extends('layouts.blank')

@section('title', 'Anggota - Pemutakhrian Data')

@section('content')
    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            <!-- Left Text -->
            <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 auth-cover-bg-color position-relative auth-multisteps-bg-height">
                <img
                    src="{{ asset('assets/img/illustrations/auth-register-multisteps-illustration.png') }}"
                    alt="auth-register-multisteps"
                    class="img-fluid"
                    width="280" />

                <img
                    src="{{ asset('assets/img/illustrations/bg-shape-image-light.png') }}"
                    alt="auth-register-multisteps"
                    class="platform-bg"
                    data-app-light-img="illustrations/bg-shape-image-light.png"
                    data-app-dark-img="illustrations/bg-shape-image-dark.png" />
            </div>
            <!-- /Left Text -->

            <!--  Multi Steps Registration -->
            <div class="d-flex col-lg-8 align-items-center justify-content-center p-sm-5 p-3">
                <div class="w-px-500">
                    <div class="card card-body">
                        <div class="app-brand mb-4">
                            <a href="" class="app-brand-link gap-2">
                                @include('components.logo')
                            </a>
                        </div>

                        <h3 class="mb-1">Oops!</h3>
                        <p class="mb-4">Kami menemukan email: {{ Auth::user()->email }} di mersudi v1. Apakah akan menggunakan data ini?</p>

                        <form accept="{{ route('anggota.pemutakhiran.oldb') }}" id="form-submit-1" method="POST">
                            @csrf
                            <input type="hidden" name="datatype" value="{{ App\Models\User::USER_OLD_DATATYPE }}" />
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <span>Ya, lanjutkan!</span>
                                </button>
                            </div>
                        </form>

                        <form accept="{{ route('anggota.pemutakhiran.oldb') }}" id="form-submit-0" method="POST">
                            @csrf
                            <input type="hidden" name="datatype" value="{{ App\Models\User::USER_NEW_DATATYPE }}" />
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-secondary btn-lg">
                                    <span>Tidak, gunakan data baru</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- / Multi Steps Registration -->
        </div>
    </div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
@endpush

@push('scripts')
    <script type="text/javascript">
        new AjaxFormSubmitter({
            form: '#form-submit-1',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = response.redirect;
                }
            },
        });

        new AjaxFormSubmitter({
            form: '#form-submit-0',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = response.redirect;
                }
            },
        });
    </script>
@endpush
