@extends('layouts.blank')

@section('title', 'Verifikasi Email')

@section('content')
    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            <div class="d-none d-lg-flex col-lg-7 p-0">
                <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                    <img src="{{ asset('assets/img/illustrations/auth-verify-email-illustration-light.png') }}"
                        alt="auth-verify-email-cover"
                        class="img-fluid my-5 auth-illustration"
                        data-app-light-img="illustrations/auth-verify-email-illustration-light.png"
                        data-app-dark-img="illustrations/auth-verify-email-illustration-dark.png" />

                    <img src="{{ asset('assets/img/illustrations/bg-shape-image-light.png') }}"
                        alt="auth-verify-email-cover"
                        class="platform-bg"
                        data-app-light-img="illustrations/bg-shape-image-light.png"
                        data-app-dark-img="illustrations/bg-shape-image-dark.png" />
                </div>
            </div>

            <div class="d-flex col-12 col-lg-5 align-items-center p-4 p-sm-5">
                <div class="w-px-400 mx-auto">
                    <div class="app-brand mb-4">
                        <a href="" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                @include('components.logo')
                            </span>
                        </a>
                    </div>

                    <h3 class="mb-1">Verifikasi emailmu ✉️</h3>

                    <p class="text-start mb-4">Link aktifasi sudah dikirim ke email: <a href="#">{{ Auth::user()->email }}</a> <br />Silahkan cek email dan ikuti langkah selanjutnya!</p>

                    <hr />

                    <p class="text-center d-flex align-items-center">
                        Belum dapat email?
                        <a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('resend-submit').submit();" class="btn btn-sm btn-primary ms-2"> Kirim ulang </a>
                    </p>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Kirim ulang link verifikasi email berhasil dikirim.
                        </div>
                    @endif

                    <form id="resend-submit" class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                    </form>

                    {{-- <div class="mt-5">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />

<link rel="stylesheet" href="{{ asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css') }}" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js') }}"></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
@endpush

