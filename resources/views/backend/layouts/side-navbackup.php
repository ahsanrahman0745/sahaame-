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
            <a href="{{url('dashboard')}}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
            Sahaa
            </span>
            </a>
         </li>
         @if(Auth::user()->role=='sadmin')
         <li class="nav-item">
            <span class="nav-link collapsed d-flex justify-content-between align-items-center"
               data-bs-toggle="collapse" data-bs-target="#submenu-users" aria-expanded="false">
               <span>
               <span class="sidebar-icon"><i class="fa fa-user me-2"></i></span>
               <span class="sidebar-text">Users </span>
               </span>
               <span class="link-arrow">
                  <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                  </svg>
               </span>
            </span>
            <div class="multi-level collapse" role="list" id="submenu-users" aria-expanded="false">
               <ul class="flex-column nav">
                  <li class="nav-item ">
                     <a href="{{url('dashboard/add/users-form')}}" class="nav-link">
                     <span class="sidebar-text">Add New</span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a href="{{url('dashboard/manage/users')}}" class="nav-link">
                     <span class="sidebar-text">All Users</span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a href="{{url('dashboard/manage/users/blocked')}}" class="nav-link">
                     <span class="sidebar-text">Blocked Users </span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="nav-item">
            <span class="nav-link collapsed d-flex justify-content-between align-items-center"
               data-bs-toggle="collapse" data-bs-target="#submenu-roles" aria-expanded="false">
               <span>
               <span class="sidebar-icon"><i class="fa fa-tasks me-2"></i></span>
               <span class="sidebar-text">User Roles </span>
               </span>
               <span class="link-arrow">
                  <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                  </svg>
               </span>
            </span>
            <div class="multi-level collapse" role="list" id="submenu-roles" aria-expanded="false">
               <ul class="flex-column nav">
                  <li class="nav-item ">
                     <a href="{{url('dashboard/add/role-form')}}" class="nav-link">
                     <span class="sidebar-text">Add New</span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a href="{{url('dashboard/manage/roles')}}" class="nav-link">
                     <span class="sidebar-text">All Roles</span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         @endif
         @if(Auth::user()->role=='sadmin' or Auth::user()->role=='adm')
         <li class="nav-item">
            <span class="nav-link collapsed d-flex justify-content-between align-items-center"
               data-bs-toggle="collapse" data-bs-target="#submenu-overview" aria-expanded="false">
               <span>
               <span class="sidebar-icon"><i class="fa fa-info me-2"></i></span>
               <span class="sidebar-text">Overview </span>
               </span>
               <span class="link-arrow">
                  <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                  </svg>
               </span>
            </span>
            <div class="multi-level collapse" role="list" id="submenu-overview" aria-expanded="false">
               <ul class="flex-column nav">
                  <li class="nav-item ">
                     <a href="/activelisting" class="nav-link">
                     <span class="sidebar-text">Active Listing </span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a href="/pendinglisting" class="nav-link">
                     <span class="sidebar-text">Pending Listing </span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="nav-item">
            <span
               class="nav-link collapsed d-flex justify-content-between align-items-center"
               data-bs-toggle="collapse" data-bs-target="#submenu-recent-activity">
               <span>
                  <span class="sidebar-icon">
                     <svg class="icon icon-xs me-2" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                           d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                           clip-rule="evenodd"></path>
                     </svg>
                  </span>
                  <span class="sidebar-text">Recent Activity</span>
               </span>
               <span class="link-arrow">
                  <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                  </svg>
               </span>
            </span>
            <div class="multi-level collapse" role="list" id="submenu-recent-activity" aria-expanded="false">
               <ul class="flex-column nav">
                  <li class="nav-item ">
                     <a class="nav-link" href="/device">
                     <span class="sidebar-text">Device </span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="/browser">
                     <span class="sidebar-text">Browser </span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="/activeusers">
                     <span class="sidebar-text">Active users </span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link" href="/activeclient">
                     <span class="sidebar-text">Active client </span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         @endif
         @if(Auth::user()->role=='sadmin' or Auth::user()->role=='adm' or Auth::user()->role=='edt')
         <li class="nav-item">
            <span class="nav-link collapsed d-flex justify-content-between align-items-center"
               data-bs-toggle="collapse" data-bs-target="#submenu-listings" aria-expanded="false">
               <span>
               <span class="sidebar-icon"><i class="fa fa-file me-2"></i></span>
               <span class="sidebar-text">Manage Listing </span>
               </span>
               <span class="link-arrow">
                  <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                  </svg>
               </span>
            </span>
            <div class="multi-level collapse" role="list" id="submenu-listings" aria-expanded="false">
               <ul class="flex-column nav">
                  <li class="nav-item {{ Request::segment(1) == 'managelisting' ? 'active' : '' }}">
                     <a href="/managelisting" class="nav-link">
                     <span class="sidebar-text">Listing </span>
                     </a>
                  </li>
                  @endif
                  @if(Auth::user()->role=='sadmin' or Auth::user()->role=='adm')
                  <li class="nav-item {{ Request::segment(1) == 'rankbykeyword' ? 'active' : '' }}">
                     <a href="/rankbykeyword" class="nav-link">
                     <span class="sidebar-text">Rank by Keyword </span>
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
                  <!-- <li class="nav-item {{ Request::segment(1) == 'emailtemplate' ? 'active' : '' }}">
                     <a href="/emailtemplate" class="nav-link">
                     <span class="sidebar-text">Email Template</span>
                     </a>
                  </li> -->
               </ul>
            </div>
         </li>
         <li class="nav-item">
            <span class="nav-link d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#mini-site" aria-expanded="false">
               <span>
                  <span class="sidebar-icon"><i class="fa fa-globe me-2"></i></span>
                  <span class="sidebar-text">Manage Mini-Sites </span>
               </span>
               <span class="link-arrow">
                  <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
               </span>
            </span>

               <div class="multi-level collapse" role="list" id="mini-site" aria-expanded="false">
                  <ul class="flex-column nav">
                     <li class="nav-item ">
                        <a href="/admin/manage-minisite/list" class="nav-link">
                        <span class="sidebar-text">Business </span>
                        </a>
                     </li>
                     <li class="nav-item ">
                        <a href="/admin/minisite/list" class="nav-link">
                        <span class="sidebar-text">Mini Sites </span>
                        </a>
                     </li>
                  </ul>
               </div>
         </li>
         <li class="nav-item">
            <span class="nav-link d-flex justify-content-between align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#email-template" aria-expanded="false">
               <span>
                  <span class="sidebar-icon"><i class="fa fa-envelope me-2"></i></span>
                  <span class="sidebar-text">Email Templates </span>
               </span>
               <span class="link-arrow">
                  <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                  </svg>
               </span>
            </span>

               <div class="multi-level collapse" role="list" id="email-template" aria-expanded="false">
                  <ul class="flex-column nav">
                     <li class="nav-item ">
                        <a href="{{url('/manage/email-template/add-form')}}" class="nav-link">
                        <span class="sidebar-text">Add New </span>
                        </a>
                     </li>
                     <li class="nav-item ">
                        <a href="{{url('/manage/email-template/list')}}" class="nav-link">
                        <span class="sidebar-text">All Templates </span>
                        </a>
                     </li>
                  </ul>
               </div>
         </li>
         @endif
         <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
         <li class="nav-item">
            <a href="/dashboard/schedule-calls/list" class="nav-link d-flex align-items-center">
                <span class="sidebar-icon"><i class="fa fa-phone me-2"></i></span>
                <span class="mt-1 ms-1 sidebar-text">
                    Schedule Calls
                </span>
            </a>
        </li>
      </ul>
   </div>
</nav>
