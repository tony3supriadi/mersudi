@extends('layouts.blank')

@section('title', 'Login')

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
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

                        <h4 class="mb-1 pt-2">Selamat datang di Mersudi! 👋</h4>
                        <p class="mb-4">Silahkan masukan email dan password untuk masuk ke akun Anda.</p>

                        <form action="{{ route('login') }}" method="POST" id="auth-submit" class="mb-3">
                            @csrf

                            <div class="form-group mb-3" data-field="email">
                                <label for="email" class="form-label">E-Mail</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan alamat email" value="{{ old('email') }}" autofocus autocomplete="off" />
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
