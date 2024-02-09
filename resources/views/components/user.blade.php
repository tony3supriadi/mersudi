<li class="nav-item navbar-dropdown dropdown-user dropdown">
    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
            @if(Auth::user()->photo)
                <img src="{{ asset('storage/avatars/' . Auth::user()->photo) }}" alt class="h-px-38 w-px-38 rounded-circle object-fit-cover" />
            @else
                <span class="avatar-initial rounded-circle bg-primary">
                    {{ initial_name(Auth::user()->name) }}
                </span>
            @endif
        </div>
    </a>

    <ul class="dropdown-menu dropdown-menu-end">
        <li>
            <a class="dropdown-item" href="pages-account-settings-account.html">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                            @if(Auth::user()->photo)
                                <img src="{{ asset('storage/avatars/' . Auth::user()->photo) }}" alt class="h-px-38 w-px-38 rounded-circle object-fit-cover" />
                            @else
                                <span class="avatar-initial rounded-circle bg-primary">
                                    {{ initial_name(Auth::user()->name) }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="flex-grow-1">
                        <span class="fw-medium d-block">{{ Auth::user()->name }}</span>
                        <small class="text-muted">{{ Auth::user()->getRoleNames()->first() }}</small>
                    </div>
                </div>
            </a>
        </li>

        <li><div class="dropdown-divider"></div></li>

        <li>
            <a class="dropdown-item" href="{{ route('auth.account') }}">
                <i class="ti ti-user-check me-2 ti-sm"></i>
                <span class="align-middle">Akun</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('auth.account.settings') }}">
                <i class="ti ti-settings me-2 ti-sm"></i>
                <span class="align-middle">Pengaturan</span>
            </a>
        </li>

        <li><div class="dropdown-divider"></div></li>

        <li>
            <a class="dropdown-item" href="#">
                <i class="ti ti-help me-2 ti-sm"></i>
                <span class="align-middle">FAQ</span>
            </a>
        </li>

        <li>
            <a class="dropdown-item" href="#">
                <i class="ti ti-book me-2 ti-sm"></i>
                <span class="align-middle">Panduan</span>
            </a>
        </li>

        <li><div class="dropdown-divider"></div></li>

        <li>
            <a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="ti ti-logout me-2 ti-sm"></i>
                <span class="align-middle">Logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </li>
    </ul>
</li>
