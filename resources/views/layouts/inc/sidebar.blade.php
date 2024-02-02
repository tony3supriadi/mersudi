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

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Lainnya">Lainnya</span>
        </li>

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
                <li class="menu-item @if(request()->routeIs('users.*')) active @endif">
                    <a href="{{ route('users.index') }}" class="menu-link">
                        <div data-i18n="Users">Users</div>
                    </a>
                </li>
                <li class="menu-item @if(request()->routeIs('roles.*')) active @endif">
                    <a href="{{ route('roles.index') }}" class="menu-link">
                        <div data-i18n="Roles">Roles</div>
                    </a>
                </li>
                <li class="menu-item @if(request()->routeIs('permissions.*')) active @endif">
                    <a href="{{ route('permissions.index') }}" class="menu-link">
                        <div data-i18n="Permissions">Permissions</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item @if(request()->routeIs('settings')) active @endif">
            <a href="{{ route('settings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Pengaturan">Pengaturan</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
