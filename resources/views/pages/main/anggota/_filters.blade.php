@php $params = request()->all(); @endphp

{{-- <div class="row g-4 mb-2 text-secondary">
    <div class="col-md-12 d-flex align-items-center">
        <a href="javascript:;" class="btn-reset-status">Semua ({{ App\Models\Anggota::count() }})</a>

        @if($active = \App\Models\Anggota::where('status', \App\Models\Anggota::STATUS_ACTIVE)->count())
            @php $params['status'] = \App\Models\Anggota::STATUS_ACTIVE; @endphp
            <span class="mx-2 text-muted">|</span>
            <a href="javascript:;" data-status="{{ \App\Models\Anggota::STATUS_ACTIVE }}" class="btn-filter-status">Aktif ({{ $active }})</a>
        @endif

        @if($denied = \App\Models\Anggota::where('status', \App\Models\Anggota::STATUS_DENIED)->count())
            @php $params['status'] = \App\Models\Anggota::STATUS_DENIED; @endphp
            <span class="mx-2 text-muted">|</span>
            <a href="javascript:;" data-status="{{ \App\Models\Anggota::STATUS_DENIED }}" class="btn-filter-status">Ditolak ({{ $denied }})</a>
        @endif

        @if($verify = \App\Models\Anggota::where('status', \App\Models\Anggota::STATUS_VERIFY)->count())
            @php $params['status'] = \App\Models\Anggota::STATUS_VERIFY; @endphp
            <span class="mx-2 text-muted">|</span>
            <a href="javascript:;" data-status="{{ \App\Models\Anggota::STATUS_VERIFY }}" class="btn-filter-status">Verifikasi ({{ $verify }})</a>
        @endif
    </div>
</div> --}}

<div class="row g-4 mb-2 text-secondary">
    <div class="col-md-12 d-flex align-items-center">
        <div class="d-inline-flex align-items-center me-2">
            <span class="ti ti-filter me-1"></span>
            <span>Filter:</span>
        </div>

        @if(!Auth::user()->hasAnyRole(['Pengda', 'Pengcab', 'Anggota']))
            <div class="d-inline-block w-px-200 me-2">
                <select name="pengda" data-placeholder="DAFTAR PENGDA" class="form-select select2">
                    <option value=""></option>
                    @foreach (App\Models\MDaerah::all() as $pengda)
                        <option value="{{ $pengda->kode }}" @if(request()->get('pengda') == $pengda->kode) selected @endif>{{ str_replace("PENGDA ", "", $pengda->nama) }}</option>
                    @endforeach
                </select>
            </div>
        @endif

        @if(!Auth::user()->hasAnyRole(['Pengcab', 'Anggota']))
            <div class="d-inline-block w-px-200 me-2">
                <select name="pengcab" data-placeholder="DAFTAR PENGCAB" @if(!request()->get('pengda')) disabled @endif class="form-select select2">
                    <option value=""></option>
                    @if(request()->get('pengda'))
                        @php $daerah = App\Models\MDaerah::where('kode', request()->get('pengda'))->first(); @endphp
                        @foreach (App\Models\MCabang::where('daerah_id', $daerah->id)->get() as $cabang)
                            <option value="{{ $cabang->kode }}" @if(request()->get('pengcab') == $cabang->kode) selected @endif>{{ str_replace("CABANG ", "", $cabang->nama) }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        @endif

        @if(!Auth::user()->hasAnyRole(['Anggota']))
            <div class="d-inline-block w-px-200 me-2">
                <select name="kolat" data-placeholder="DAFTAR KOLAT" @if(!request()->get('kolat')) disabled @endif class="form-select select2">
                    <option value=""></option>
                    @if(request()->get('pengcab'))
                        @php $cabang = App\Models\MCabang::where('kode', request()->get('pengcab'))->first(); @endphp
                        @foreach (App\Models\MKolat::where('cabang_id', $cabang->id)->get() as $kolat)
                            <option value="{{ $kolat->kode }}" @if(request()->get('kolat') == $kolat->kode) selected @endif>{{ str_replace("KOLAT ", "", $kolat->nama) }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        @endif

        <a href="javascript:;" class="text-secondary ms-3 btn-reset-filter
            @if(!request()->get('pengda') ||
                !request()->get('pengcab') ||
                !request()->get('kolat'))
                d-none
            @endif">

            <span>Reset filter</span>
        </a>
    </div>
</div>
