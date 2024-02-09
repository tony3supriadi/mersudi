@extends('layouts.app')

@section('title', 'Paket KTA - Ubah Data')

@section('content')
    <h4 class="content-header-title">
        <a href="{{ route('master.kta.index') }}" class="btn btn-outline-secondary btn-icon rounded-circle me-2">
            <span class="ti ti-arrow-left"></span>
        </a>
        <span class="text-muted fw-light">Paket KTA /</span> Ubah Data
    </h4>

    <div class="row">
        <div class="col-xxl-6 col-md-8 col-12">
            <div class="card">
                <form action="{{ route('master.kta.update', $kta->id) }}" id="form-submit" method="post">
                    @csrf
                    @method('PUT')

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-xxl-2 col-lg-3 mb-2" data-field="kode">
                                <label for="kode" class="form-label">KODE</label>
                                <input type="text" name="kode" id="kode" value="{{ $kta->kode }}" class="form-control" />
                            </div>

                            <div class="form-group col-xxl-10 col-lg-9 mb-2" data-field="nama">
                                <label for="nama" class="form-label">Nama Paket (KTA)</label>
                                <input type="text" name="nama" id="nama" value="{{ $kta->nama }}" class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mb-2" data-field="harga">
                                <label for="harga" class="form-label">Harga</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp.</span>
                                    <input type="text" name="harga" id="harga" value="{{ $kta->harga }}" class="form-control numeral-mask" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mb-2" data-field="background">
                                <label for="background" class="form-label">Background</label>
                                <input type="file" name="background" id="background" class="form-control" accept="image/*" />
                                @if($kta->background)
                                    <img src="{{ asset('/storage/background/' . $kta->background) }}" width="324px" height="204px" alt="background" class="object-fit-cover bg-light mt-2" />
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mb-2" data-field="tingkatan">
                                <label for="tingkatan" class="form-label">Pilih Tingkatan</label>
                                <div class="row">
                                    @foreach ($tingkatan as $item)
                                        <div class="col-3">
                                            <div class="form-check">
                                                <input class="form-check-input"
                                                    type="checkbox"
                                                    name="tingkatan[]"
                                                    id="tingkatan_{{ $item->id }}"
                                                    value="{{ $item->id }}"
                                                    @if(in_array($item->id, $kta->tingkatan->pluck('id')->toArray())) checked @endif
                                                />

                                                <label class="form-check-label" for="tingkatan_{{ $item->id }}">{{ $item->nama }}</label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <small class="form-text text-muted">
                                    <span>*</span> pilih tingkatan untuk mengelompokkan paket KTA
                                </small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mb-2" data-field="keterangan">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control">{{ $kta->keterangan }}</textarea>
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

                        <a href="{{ route('master.kta.index') }}" class="btn btn-light mx-1">
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
<script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
@endpush

@push('scripts')
    <script type="text/javascript">
        let redirect = $('button[type="submit"]').data('redirect');

        $('.submit-option').on('click', function() {
            redirect = $(this).data('redirect');
            $('#form-submit').submit();
        });

        new Cleave($('.numeral-mask'), {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand',
            numeralDecimalMark: ',',
            numeralDecimalScale: 0,
            delimiter: '.',
        });

        new AjaxFormSubmitter({
            form: '#form-submit',
            scrollToError: false,
            success: function(response) {
                console.log(response);
                if (response.status == "success") {
                    switch (redirect) {
                        case 'new':
                            window.location.href = `{{ route('master.kta.index') }}/create`;
                            break;
                        case 'edit':
                            window.location.reload();
                            break;
                        default:
                            window.location.href = `{{ route('master.kta.index') }}`;
                            break;
                    }
                }
            },
        });
    </script>
@endpush
