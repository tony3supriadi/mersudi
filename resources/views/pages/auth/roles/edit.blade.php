@extends('layouts.app')

@section('title', 'Roles - Tambah Baru')

@section('content')
    <h4 class="content-header-title">
        <a href="{{ route('roles.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
            <span class="ti ti-arrow-left"></span>
        </a>
        <span class="text-muted fw-light">Roles /</span> Ubah Data
    </h4>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('roles.update', $role->id) }}" id="form-submit" method="post">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="form-group mb-2" data-field="name">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" value="{{ $role->name }}" class="form-control" />
                        </div>

                        <div class="form-group mb-2" data-field="permissions">
                            <label for="permissions" class="form-label">Permissions</label>
                            <table class="table table-responsive table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Daftar Permission</th>
                                        <th width="150px" class="text-center">Create</th>
                                        <th width="150px" class="text-center">Edit</th>
                                        <th width="150px" class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4">
                                            <div class="form-check">
                                                <input type="checkbox" id="checkboxSelectAll" class="form-check-input" @if($permission_count === count($rolePermissions)) checked @endif />
                                                <label class="form-check-label" for="checkboxSelectAll">Admin Role</label>
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" id="permissions-{{ $permission->id }}" name="permissions[]" value="{{ $permission->name }}" @if(in_array($permission->id, $rolePermissions)) checked @endif class="form-check-input form-check-roles-item" />
                                                    <label class="form-check-label" for="permissions-{{ $permission->id }}">{{ $permission->label }}</label>
                                                </div>
                                            </td>
                                            @if(count($permission->actions))
                                                @foreach ($permission->actions as $action)
                                                    <td class="text-center">
                                                        <div class="form-check d-flex justify-content-center">
                                                            <input type="checkbox" name="permissions[]" value="{{ $action->name }}" @if(in_array($action->id, $rolePermissions)) checked @endif class="form-check-input form-check-roles-item" />
                                                        </div>
                                                    </td>
                                                @endforeach
                                            @else
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

                        <a href="{{ route('roles.index') }}" class="btn btn-light mx-1">
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
                            window.location.href = `{{ route('roles.create') }}`;
                            break;
                        case 'edit':
                            window.location.reload();
                            break;
                        default:
                            window.location.href = `{{ route('roles.index') }}`;
                            break;
                    }
                }
            },
        });

        $('#checkboxSelectAll').on('click', function() {
            if ($(this).is(':checked')) {
                $('.form-check-roles-item').prop('checked', true);
            } else {
                $('.form-check-roles-item').prop('checked', false);
            }
        });

        $('.form-check-roles-item').on('click', function() {
            var countElmt = $('.form-check-roles-item').length;
            var countChecked = $('.form-check-roles-item:checked').length;
            console.log(countElmt, countChecked)
            if (countChecked < countElmt) {
                $('#checkboxSelectAll').prop('checked', false);
            } else {
                $('#checkboxSelectAll').prop('checked', true);
            }
        });
    </script>
@endpush
