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

                    <li class="menu-item @if(request()->routeIs('master.cabang.*')) active @endif">
                        <a href="{{ route('master.cabang.index') }}" class="menu-link">
                            <div data-i18n="Cabang">Cabang</div>
                        </a>
                    </li>

                    <li class="menu-item @if(request()->routeIs('master.kolat.*')) active @endif">
                        <a href="{{ route('master.kolat.index') }}" class="menu-link">
                            <div data-i18n="Kolat">Kolat</div>
                        </a>
                    </li>

                    <li class="menu-item @if(request()->routeIs('master.tingkatan.*')) active @endif">
                        <a href="{{ route('master.tingkatan.index') }}" class="menu-link">
                            <div data-i18n="Tingkatan">Tingkatan</div>
                        </a>
                    </li>

                    <li class="menu-item @if(request()->routeIs('master.kta.*')) active @endif">
                        <a href="{{ route('master.kta.index') }}" class="menu-link">
                            <div data-i18n="KTA">KTA</div>
                        </a>
                    </li>

                    <li class="menu-item @if(request()->routeIs('master.signature.*')) active @endif">
                        <a href="{{ route('master.signature.index') }}" class="menu-link">
                            <div data-i18n="Signature">Signature</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Main Menu">Main Menu</span>
        </li>

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
