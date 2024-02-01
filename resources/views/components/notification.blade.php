<li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
    <a href="javascript:void(0);" class="nav-link dropdown-toggle hide-arrow" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
        <i class="ti ti-bell ti-md"></i>
        <span class="badge bg-danger rounded-pill badge-notifications">5</span>
    </a>
                
    <ul class="dropdown-menu dropdown-menu-end py-0">
        <li class="dropdown-menu-header border-bottom">
            <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body mb-0 me-auto">Notification</h5>
                <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read">
                    <i class="ti ti-mail-opened fs-4"></i>
                </a>
            </div>
        </li>
                    
        <li class="dropdown-notifications-list scrollable-container">
            <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                                <img src="{{ asset('assets/img/avatars/1.png') }}" alt class="h-auto rounded-circle" />
                            </div>
                        </div>

                        <div class="flex-grow-1">
                            <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                            <p class="mb-0">Won the monthly best seller gold badge</p>
                            <small class="text-muted">1h ago</small>
                        </div>

                        <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read">
                                <span class="badge badge-dot"></span>
                            </a>
                            <a href="javascript:void(0)" class="dropdown-notifications-archive">
                                <span class="ti ti-x"></span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                                <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                            </div>
                        </div>
                                    
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Charles Franklin</h6>
                            <p class="mb-0">Accepted your connection</p>
                            <small class="text-muted">12hr ago</small>
                        </div>

                        <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read">
                                <span class="badge badge-dot"></span>
                            </a>
                                        
                            <a href="javascript:void(0)" class="dropdown-notifications-archive">
                                <span class="ti ti-x"></span>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <div class="avatar">
                                <img src="{{ asset('assets/img/avatars/2.png') }}" alt class="h-auto rounded-circle" />
                            </div>
                        </div>

                        <div class="flex-grow-1">
                            <h6 class="mb-1">New Message ✉️</h6>
                            <p class="mb-0">You have new message from Natalie</p>
                            <small class="text-muted">1h ago</small>
                        </div>

                        <div class="flex-shrink-0 dropdown-notifications-actions">
                            <a href="javascript:void(0)" class="dropdown-notifications-read">
                                <span class="badge badge-dot"></span>
                            </a>
                                        
                            <a href="javascript:void(0)" class="dropdown-notifications-archive">
                                <span class="ti ti-x"></span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>

        <li class="dropdown-menu-footer border-top">
            <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                Daftar semua notifikasi
            </a>
        </li>
    </ul>
</li>