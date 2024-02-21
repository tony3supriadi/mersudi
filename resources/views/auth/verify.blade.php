@extends('layouts.blank')

@section('title', 'Verifikasi Email')

@section('content')
    <div class="authentication-wrapper authentication-basic px-4">
        <div class="authentication-inner py-4">
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

                    <h3 class="mb-1 pt-2">Verifikasi email ✉️</h3>
                    <p class="text-start mb-4">Link verifikasi sudah dikirim ke email: <a href="#">{{ Auth::user()->email }}</a> <br />Silahkan cek email untuk mengaktifkan akun!</p>

                    <hr />

                    <p class="text-center d-flex align-items-center">
                        Belum dapat email?
                        <a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('resend-submit').submit();" class="btn btn-sm btn-primary ms-2"> Kirim ulang </a>
                    </p>

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Link verifikasi berhasil dikirim ulang.
                        </div>
                    @endif

                    <form id="resend-submit" class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                    </form>
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

