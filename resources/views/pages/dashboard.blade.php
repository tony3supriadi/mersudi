@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h4 class="mb-4">Beranda</h4>

@if(auth()->user()->hasRole('Anggota'))

@endif

@endsection

@push('vendor-styles')
@endpush

@push('vendor-scripts')
@endpush

@push('styles')
@endpush

@push('scripts')
@endpush
