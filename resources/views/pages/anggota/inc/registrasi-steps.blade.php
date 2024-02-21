@php
$userId = Auth::user()->id;
$anggota = \App\Models\Anggota::where('user_id', $userId);
@endphp

<div class="bs-stepper shadow-none border-0 p-0 linear mb-4">
    <div class="bs-stepper-header border-bottom-0 p-0">
        <div class="step @if(request()->routeIs('anggota.registrasi')) active @endif">
            <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-user ti-sm"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Personal</span>
                    <span class="bs-stepper-subtitle">Informasi personal</span>
                </span>
            </button>
        </div>

        <div class="line">
            <i class="ti ti-chevron-right"></i>
        </div>

        <div class="step @if(request()->routeIs('anggota.registrasi.step02')) active @endif">
            <button type="button" class="step-trigger" @if(!$anggota->exists()) disabled="disabled" @endif>
                <span class="bs-stepper-circle"><i class="ti ti-users ti-sm"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Anggota</span>
                    <span class="bs-stepper-subtitle">Informasi keanggotaan</span>
                </span>
            </button>
        </div>

        <div class="line">
            <i class="ti ti-chevron-right"></i>
        </div>

        <div class="step @if(request()->routeIs('anggota.registrasi.step03')) active @endif">
            <button type="button" class="step-trigger" @if($anggota->first() && $anggota->first()->status == 3) disabled="disabled" @endif>
                <span class="bs-stepper-circle"><i class="ti ti-credit-card ti-sm"></i></span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title">KTA</span>
                    <span class="bs-stepper-subtitle">Registrasi KTA</span>
                </span>
            </button>
        </div>
    </div>
</div>
