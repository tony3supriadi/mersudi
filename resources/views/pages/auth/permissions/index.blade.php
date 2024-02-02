@extends('layouts.app')

@section('title', 'Permissions')

@section('content')
<h4 class="mb-4">Permissions</h4>
<p class="mb-4">Daftar module permissions yang tersedia di aplikasi.</p>

<div class="card">
    <div class="card-datatable table-responsive">
        <table class="datatables-permissions table border-top">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th>Nama</th>
                    <th>Roles</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('vendor-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
@endpush

@push('vendor-scripts')
<script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
@endpush

@push('styles')
@endpush

@push('scripts')
<script src="{{ asset('assets/js/pages/auth/permission.read.js') }}"></script>
@endpush