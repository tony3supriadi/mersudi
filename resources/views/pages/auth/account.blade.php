@extends('layouts.app')

@section('title', 'Akun')

@section('content')
<div class="card mb-4">
    <form accept="{{ route('auth.account.update') }}" method="POST" id="form-submit" enctype="multipart/form-data">
        @csrf

        <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
                @if(Auth::user()->photo)
                    <img src="{{ asset('storage/avatars/' . Auth::user()->photo) }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                @else
                    <img src="{{ asset('assets/img/avatars/14.png') }}" alt="user-avatar" class="d-block w-px-100 h-px-100 rounded" id="uploadedAvatar" />
                @endif

                <div class="button-wrapper">
                    <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                        <span class="d-none d-sm-block">Upload new photo</span>
                        <i class="ti ti-upload d-block d-sm-none"></i>
                        <input type="file" name="avatar" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                    </label>

                    <button type="button" class="btn btn-label-secondary account-image-reset mb-3">
                        <i class="ti ti-refresh-dot d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Reset</span>
                    </button>

                    <div class="text-muted">Allowed JPG, GIF or PNG. Max size of 800K</div>
                </div>
            </div>
        </div>

        <hr class="my-0" />

        <div class="card-body">

            <div class="row">
                <div class="form-group mb-3 col-md-6" data-field="name">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}" id="name" class="form-control" autofocus />
                </div>

                <div class="form-group mb-3 col-md-6" data-field="email">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="john@example.com" class="form-control" />
                </div>

                <div class="form-group mb-3 col-md-6" data-field="password">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>

                <div class="form-group mb-3 col-md-6" data-field="password_confirmation">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                </div>
            </div>

            <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Simpan Perubahan</button>
            </div>

        </div>
    </form>
</div>
@endsection

@push('vendor-styles')
@endpush

@push('vendor-scripts')
@endpush

@push('styles')
@endpush

@push('scripts')
<script type="text/javascript">

    new AjaxFormSubmitter({
        form: '#form-submit',
        scrollToError: false,
        success: function(response) {
            if (response.success) {
                window.location.reload();
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function (e) {
        (function () {
            let accountUserImage = document.getElementById('uploadedAvatar');
            const fileInput = document.querySelector('.account-file-input'),
            resetFileInput = document.querySelector('.account-image-reset');

            if (accountUserImage) {
                const resetImage = accountUserImage.src;
                fileInput.onchange = () => {
                    if (fileInput.files[0]) {
                        accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);
                    }
                };
                resetFileInput.onclick = () => {
                    fileInput.value = '';
                    accountUserImage.src = resetImage;
                };
            }
        })();
    });
</script>
@endpush
