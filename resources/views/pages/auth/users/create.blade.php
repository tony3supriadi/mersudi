@extends('layouts.app')

@section('title', 'Users - Tambah Baru')

@section('content')
    <h4 class="content-header-title">
        <a href="{{ route('users.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
            <span class="ti ti-arrow-left"></span>
        </a>
        <span class="text-muted fw-light">Users /</span> Tambah Baru
    </h4>

    <div class="row">
        <div class="col-xxl-6 col-lg-8 col-12">
            <div class="card">
                <form action="{{ route('users.store') }}" id="form-submit" method="post">
                    @csrf

                    <div class="card-body">
                        <div class="form-group mb-2" data-field="name">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>

                        <div class="form-group mb-2" data-field="email">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" />
                        </div>

                        <div class="form-group mb-2" data-field="password">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>

                        <div class="form-group mb-2" data-field="password_confirmation">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                        </div>

                        <div class="form-group mb-2" data-field="roles">
                            <label for="roles" class="form-label">Roles</label>
                            <div class="row">
                                @foreach ($roles as $role)
                                    <div class="col-md-6 col-lg-4 py-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $role->name }}" name="roles[]" id="role-{{ $role->id }}" />
                                            <label class="form-check-label" for="role-{{ $role->id }}">
                                                {{ $role->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="card-footer border-top pt-3">
                        <div class="btn-group">
                            <button type="submit" data-redirect="back" class="btn btn-primary">
                                <span>Simpan dan kembali</span>
                            </button>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;" data-redirect="back" id="save_back" class="dropdown-item submit-option d-none">
                                    <span>Simpan dan kembali</span>
                                </a>

                                <a href="javascript:;" data-redirect="edit" id="save_edit" class="dropdown-item submit-option">
                                    <span>Simpan dan ubah data ini</span>
                                </a>

                                <a href="javascript:;" data-redirect="new" id="save_new" class="dropdown-item submit-option">
                                    <span>Simpan dan tambah baru</span>
                                </a>
                            </div>
                        </div>

                        <a href="{{ route('users.index') }}" class="btn btn-light mx-1">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('vendor-styles')
@endpush

@push('vendor-scripts')
@endpush

@push('scripts')
    <script type="text/javascript">
        let redirect = $('button[type="submit"]').data('redirect');

        $('.submit-option').on('click', function() {
            redirect = $(this).data('redirect');
            $('#form-submit').submit();
        });

        new AjaxFormSubmitter({
            form: '#form-submit',
            scrollToError: false,
            success: function(response) {
                console.log(response);
                if (response.status == "success") {
                    switch (redirect) {
                        case 'new':
                            window.location.reload();
                            break;
                        case 'edit':
                            window.location.href = `{{ route('users.index') }}/${response.data.id}/edit`;
                            break;
                        default:
                            window.location.href = `{{ route('users.index') }}`;
                            break;
                    }
                }
            },
        });
    </script>
@endpush
