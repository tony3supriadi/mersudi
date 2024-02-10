@extends('layouts.blank')

@section('title', 'Login')

@section('content')
    <div class="authentication-wrapper authentication-cover authentication-bg">
        <div class="authentication-inner row">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 p-0">
                <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
                    <img
                        src="{{ asset('assets/img/illustrations/auth-login-illustration-light.png') }}"
                        alt="auth-login-cover" class="img-fluid my-5 auth-illustration"
                        data-app-light-img="illustrations/auth-login-illustration-light.png"
                        data-app-dark-img="illustrations/auth-login-illustration-dark.png" />

                    <img
                        src="{{ asset('assets/img/illustrations/bg-shape-image-light.png') }}"
                        alt="auth-login-cover" class="platform-bg"
                        data-app-light-img="illustrations/bg-shape-image-light.png"
                        data-app-dark-img="illustrations/bg-shape-image-dark.png" />
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Login -->
            <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-4">
                        <a href="" class="app-brand-link gap-2">
                            @include('components.logo')
                        </a>
                    </div>

                    <!-- /Logo -->
                    <h3 class="mb-1">Selamat datang di Mersudi! 👋</h3>
                    <p class="mb-4">Silakan masuk ke akun Anda dan mulai menggunakan aplikasi.</p>

                    <form action="{{ route('login') }}" method="POST" id="auth-submit" class="mb-3">
                        @csrf

                        <div class="form-group mb-3" data-field="email">
                            <label for="email" class="form-label">E-Mail</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukan alamat email" value="{{ old('email') }}" autofocus autocomplete="off" />
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3 form-password-toggle" data-field="password">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href="{{ route('password.request') }}">
                                    <small>Lupa password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer toggle-password" data-password="off"><i class="ti ti-eye-off"></i></span>
                            </div>
                            @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                <label class="form-check-label" for="remember-me"> Selalu diingat </label>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>

                    <p class="text-center text-sm">
                        <span>Belum punya akun?</span>
                        <a href="{{ route('register') }}">
                            <span>Daftar sekarang!</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Login -->
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

@push('scripts')
    {{-- <script src="{{ asset('assets/js/pages-auth.js') }}"></script> --}}
    <script type="text/javascript">
        new AjaxFormSubmitter({
            form: '#auth-submit',
            scrollToError: false,
            success: function(response) {
                if (response.status == "success") {
                    window.location.href = response.redirect;
                }
            },
        });

        $('.form-password-toggle .toggle-password').on('click', function() {
            var $this = $(this);
            if ($this.data('password') == 'off') {
                $this.data('password', 'on');
                $this.siblings('input').attr('type', 'text');
                $this.children().addClass('ti-eye').removeClass('ti-eye-off');
            } else {
                $this.data('password', 'off');
                $this.siblings('input').attr('type', 'password');
                $this.children().addClass('ti-eye-off').removeClass('ti-eye');
            }
        });
    </script>
@endpush
