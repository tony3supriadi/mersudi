@extends('layouts.app')

@section('title', 'Tingkatan - Ubah Data')

@section('content')
    <h4 class="content-header-title">
        <a href="{{ route('master.tingkatan.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
            <span class="ti ti-arrow-left"></span>
        </a>
        <span class="text-muted fw-light">Tingkatan /</span> Ubah Data
    </h4>

    <div class="row">
        <div class="col-xxl-6 col-md-8 col-12">
            <div class="card">
                <form action="{{ route('master.tingkatan.update', $tingkatan->id) }}" id="form-submit" method="post">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-xxl-2 col-lg-3 mb-2" data-field="kode">
                                <label for="kode" class="form-label">KODE</label>
                                <input type="text" name="kode" id="kode" value="{{ $tingkatan->kode }}" class="form-control" />
                            </div>

                            <div class="form-group col-xxl-10 col-lg-9 mb-2" data-field="nama">
                                <label for="nama" class="form-label">Nama Tingkatan <span class="text-danger">*</span></label>
                                <input type="text" name="nama" id="nama" value="{{ $tingkatan->nama }}" class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mb-2" data-field="keterangan">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ $tingkatan->keterangan }}</textarea>
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

                        <a href="{{ route('master.tingkatan.index') }}" class="btn btn-light mx-1">
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
                            window.location.href = `{{ route('master.tingkatan.create') }}`;
                            break;
                        case 'edit':
                            window.location.reload();
                            break;
                        default:
                            window.location.href = `{{ route('master.tingkatan.index') }}`;
                            break;
                    }
                }
            },
        });
    </script>
@endpush
