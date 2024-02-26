<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            @include('components.logo')
            <span class="app-brand-text demo menu-text fw-bold">Mersudi</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item @if(request()->routeIs('dashboard')) active @endif">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Beranda">Beranda</div>
            </a>
        </li>

        @canany(['master-daerah', 'master-cabang', 'master-kolat', 'master-tingkatan', 'master-kta', 'master-signature'])
            <li class="menu-item @if(request()->routeIs('master.*')) open @endif">

                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-database"></i>
                    <div data-i18n="Data Master">Data Master</div>
                </a>

                <ul class="menu-sub">
                    @can('master-daerah')
                        <li class="menu-item @if(request()->routeIs('master.daerah.*')) active @endif">
                            <a href="{{ route('master.daerah.index') }}" class="menu-link">
                                <div data-i18n="Daerah">Daerah</div>
                            </a>
                        </li>
                    @endcan

                    @can('master-cabang')
                    <li class="menu-item @if(request()->routeIs('master.cabang.*')) active @endif">
                        <a href="{{ route('master.cabang.index') }}" class="menu-link">
                            <div data-i18n="Cabang">Cabang</div>
                        </a>
                    </li>
                    @endcan

                    @can('master-kolat')
                    <li class="menu-item @if(request()->routeIs('master.kolat.*')) active @endif">
                        <a href="{{ route('master.kolat.index') }}" class="menu-link">
                            <div data-i18n="Kolat">Kolat</div>
                        </a>
                    </li>
                    @endcan

                    @can('master-tingkatan')
                    <li class="menu-item @if(request()->routeIs('master.tingkatan.*')) active @endif">
                        <a href="{{ route('master.tingkatan.index') }}" class="menu-link">
                            <div data-i18n="Tingkatan">Tingkatan</div>
                        </a>
                    </li>
                    @endcan

                    @can('master-kta')
                    <li class="menu-item @if(request()->routeIs('master.kta.*')) active @endif">
                        <a href="{{ route('master.kta.index') }}" class="menu-link">
                            <div data-i18n="KTA">KTA</div>
                        </a>
                    </li>
                    @endcan

                    @can('master-signature')
                    <li class="menu-item @if(request()->routeIs('master.signature.*')) active @endif">
                        <a href="{{ route('master.signature.index') }}" class="menu-link">
                            <div data-i18n="Signature">Signature</div>
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
        @endcanany

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Main Menu">Main Menu</span>
        </li>

        <div class="menu-item @if(request()->routeIs('anggota.*') || request()->routeIs('daftar-anggota.*')) open @endif">

            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-user"></i>
                <div data-i18n="Anggota">Anggota</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(request()->routeIs('daftar-anggota.*')) active @endif">
                    <a href="{{ route('daftar-anggota.index') }}" class="menu-link">
                        <div data-i18n="Daftar Anggota">Daftar Anggota</div>
                    </a>
                </li>

                <li class="menu-item @if(request()->routeIs('anggota.validasi.*')) active @endif">
                    <a href="{{ route('anggota.validasi.index') }}" class="menu-link">
                        <div data-i18n="Validasi Anggota">Validasi Anggota</div>

                        @if($validasi_anggota = \App\Models\Anggota::where('status', \App\Models\Anggota::STATUS_VERIFY)->count())
                            <div class="badge bg-secondary rounded-pill ms-auto">{{ $validasi_anggota }}</div>
                        @endif
                    </a>
                </li>

                <li class="menu-item @if(request()->routeIs('anggota.verifikasi.*')) active @endif">
                    <a href="{{ route('anggota.verifikasi.index') }}" class="menu-link">
                        <div data-i18n="Verifikasi KTA">Verifikasi KTA</div>
                        @if($validasi_kta = \App\Models\AnggotaHasKta::where('status', \App\Models\AnggotaHasKta::STATUS_VERIFY)->count())
                            <div class="badge bg-secondary rounded-pill ms-auto">{{ $validasi_kta }}</div>
                        @endif
                    </a>
                </li>

                <li class="menu-item @if(request()->routeIs('anggota.ditolak.*')) active @endif">
                    <a href="{{ route('anggota.ditolak.index') }}" class="menu-link">
                        <div data-i18n="Anggota Ditolak">Anggota Ditolak</div>
                    </a>
                </li>

                <li class="menu-item @if(request()->routeIs('anggota.sertifikat.*')) active @endif">
                    <a href="{{ route('anggota.sertifikat.index') }}" class="menu-link">
                        <div data-i18n="Sertifikat Anggota">Sertifikat Anggota</div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="menu-item @if(request()->routeIs('event.*')) open @endif">

            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-calendar"></i>
                <div data-i18n="Event">Event</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(request()->routeIs('event.*')) active @endif">
                    <a href="#" class="menu-link">
                        <div data-i18n="Daftar Event">Daftar Event</div>
                    </a>
                </li>

                <li class="menu-item @if(request()->routeIs('event.*')) active @endif">
                    <a href="#" class="menu-link">
                        <div data-i18n="Kalender Event">Kelender Event</div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="menu-item @if(request()->routeIs('bendahara.*')) open @endif">

            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-credit-card"></i>
                <div data-i18n="Bendahara">Bendahara</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item @if(request()->routeIs('bendahara.*')) active @endif">
                    <a href="#" class="menu-link">
                        <div data-i18n="Verifikasim,">Verifikasi</div>
                    </a>
                </li>

                <li class="menu-item @if(request()->routeIs('bendahara.*')) active @endif">
                    <a href="#" class="menu-link">
                        <div data-i18n="Iuran Kas Pengda">Iuran Kas Pengda</div>
                    </a>
                </li>

                <li class="menu-item @if(request()->routeIs('bendahara.*')) active @endif">
                    <a href="#" class="menu-link">
                        <div data-i18n="Iuran Kas Cabang">Iuran Kas Cabang</div>
                    </a>
                </li>
            </ul>
        </div>

        @canany(['users', 'roles', 'permissions', 'settings'])
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Lainnya">Lainnya</span>
        </li>
        @endcanany

        @canany(['users', 'roles', 'permissions'])
            <li class="menu-item
                @if(request()->routeIs('users.*') ||
                    request()->routeIs('roles.*') ||
                    request()->routeIs('permissions.*'))
                    open
                @endif">

                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-users"></i>
                    <div data-i18n="Authentication">Authentication</div>
                </a>

                <ul class="menu-sub">
                    @can('users')
                        <li class="menu-item @if(request()->routeIs('users.*')) active @endif">
                            <a href="{{ route('users.index') }}" class="menu-link">
                                <div data-i18n="Users">Users</div>
                            </a>
                        </li>
                    @endcan

                    @can('roles')
                        <li class="menu-item @if(request()->routeIs('roles.*')) active @endif">
                            <a href="{{ route('roles.index') }}" class="menu-link">
                                <div data-i18n="Roles">Roles</div>
                            </a>
                        </li>
                    @endcan

                    @can('permissions')
                        <li class="menu-item @if(request()->routeIs('permissions.*')) active @endif">
                            <a href="{{ route('permissions.index') }}" class="menu-link">
                                <div data-i18n="Permissions">Permissions</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcanany

        @can('settings')
            <li class="menu-item @if(request()->routeIs('settings')) active @endif">
                <a href="{{ route('settings.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Pengaturan">Pengaturan</div>
                </a>
            </li>
        @endcan
    </ul>
</aside>
<!-- / Menu -->
