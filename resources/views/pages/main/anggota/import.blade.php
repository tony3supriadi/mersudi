@extends('layouts.app')

@section('title', 'Anggota - Import')

@section('content')
    <h4 class="content-header-title">
        <a href="{{ route('daftar-anggota.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
            <span class="ti ti-arrow-left"></span>
        </a>
        <span class="text-muted fw-light">Anggota /</span> Import
    </h4>

    <div class="row">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('daftar-anggota.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">File Excel</label>
                            <input type="file" name="files" class="form-control" required />
                        </div>

                        <button type="submit" class="btn btn-primary">Import</button>
                    </form>

                    <h4 class="fs-6 mb-0 mt-4">CATATAN</h4>

                    <ol>
                        <li>File Excel harus berformat .xlsx</li>
                        <li>Kode wilayah merupakan kode wilayah kabupaten/kota. <a href="https://kodewilayah.id" target="_blank">Cek disini</a>.</li>
                        <li>Pada kolom kode pengda, harus menyesuaikan data <a href="{{ route('master.daerah.index') }}">daftar pengda</a>.</li>
                        <li>Pada kolom kode pengcab, harus menyesuaikan data <a href="{{ route('master.cabang.index') }}">daftar pengcab</a>.</li>
                        <li>Pada kolom kode kolat, harus menyesuaikan data <a href="{{ route('master.kolat.index') }}">daftar kolat</a>.</li>
                        <li>Download template file <a href="{{ route('daftar-anggota.download-template') }}">disini</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
