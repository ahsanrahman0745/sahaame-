<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-2 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
                        alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, Jane</h2>
                    <a href="/login" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon me-3">
                        <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">
                        Sahaa
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-laravel" aria-expanded="true">
                    <span>
                        <span class="sidebar-icon"><i class="fab fa-laravel me-2"></i></span>
                        <span class="sidebar-text">Overview </span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse show" role="list" id="submenu-laravel" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'activelisting' ? 'active' : '' }}">
                            <a href="/activelisting" class="nav-link">
                                <span class="sidebar-text">Active Listing </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'pendinglisting' ? 'active' : '' }}">
                            <a href="/pendinglisting" class="nav-link">
                                <span class="sidebar-text">Pending Listing </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <span
                    class="nav-link {{ Request::segment(1) !== 'bootstrap-tables' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-app">
                    <span>
                        <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                    clip-rule="evenodd"></path>
                            </svg></span>
                        <span class="sidebar-text">Recent Activity</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'device' ? 'show' : '' }}" role="list"
                    id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'device' ? 'active' : '' }}">
                            <a class="nav-link" href="/device">
                                <span class="sidebar-text">Device </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'browser' ? 'active' : '' }}">
                            <a class="nav-link" href="/browser">
                                <span class="sidebar-text">Browser </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'activeusers' ? 'active' : '' }}">
                            <a class="nav-link" href="/activeusers">
                                <span class="sidebar-text">Active users </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'activeclient' ? 'active' : '' }}">
                            <a class="nav-link" href="/activeclient">
                                <span class="sidebar-text">Active client </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-laravel" aria-expanded="true">
                    <span>
                        <span class="sidebar-icon"><i class="fab fa-laravel me-2"></i></span>
                        <span class="sidebar-text">Manage Listing </span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse show" role="list" id="submenu-laravel" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'managelisting' ? 'active' : '' }}">
                            <a href="/managelisting" class="nav-link">

                                <span class="sidebar-text">Listing </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'reportlisting' ? 'active' : '' }}">
                            <a href="/reportlisting" class="nav-link">

                                <span class="sidebar-text">Report Listing </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'managemedia' ? 'active' : '' }}">
                            <a href="/managemedia" class="nav-link">

                                <span class="sidebar-text">Manage media </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'review' ? 'active' : '' }}">
                            <a href="/review" class="nav-link">

                                <span class="sidebar-text">Review</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'customfields' ? 'active' : '' }}">
                            <a href="/customfields" class="nav-link">

                                <span class="sidebar-text">Custom fields </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'settings' ? 'active' : '' }}">
                            <a href="/settings" class="nav-link">

                                <span class="sidebar-text">Settings </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'emailtemplate' ? 'active' : '' }}">
                            <a href="/emailtemplate" class="nav-link">

                                <span class="sidebar-text">Email Template</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

           <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-laravel" aria-expanded="true">
                    <span>
                        <span class="sidebar-icon"><i class="fab fa-laravel me-2"></i></span>
                        <span class="sidebar-text">Ranking </span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse show" role="list" id="submenu-laravel" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'rankbykeyword' ? 'active' : '' }}">
                            <a href="/rankbykeyword" class="nav-link">
                                <span class="sidebar-text">Rank by Keyword </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'rankbycountry' ? 'active' : '' }}">
                            <a href="/rankbycountry" class="nav-link">
                                <span class="sidebar-text">Rank by Country </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'rankbycity' ? 'active' : '' }}">
                            <a href="/rankbycity" class="nav-link">
                                <span class="sidebar-text">Rank by City</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>





            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>



        </ul>
    </div>
</nav>