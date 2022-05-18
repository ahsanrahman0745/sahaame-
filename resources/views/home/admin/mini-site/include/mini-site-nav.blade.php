<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
   <a class="navbar-brand me-lg-5" href="/index.html">
   <img class="navbar-brand-dark" src="/assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="/assets/img/brand/dark.svg" alt="Volt logo" />
   </a>
   <div class="d-flex align-items-center">
      <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
   </div>
</nav>
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
            <a href="{{url('admin/mini-site/')}}/{{$business_id}}/dashboard" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
               Mini Site Dashboard
            </span>
            </a>
         </li>
         <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
               Dashboard
            </span>
            </a>
         </li>
         <li class="nav-item">
            <a href="{{url('admin/mini-site')}}/{{$business_id}}/basic-info/form" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
               Basic Information
            </span>
            </a>
         </li>
         <li class="nav-item">
            <a href="{{url('admin/mini-site')}}/{{$business_id}}/company-overview/form" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
               Company Overview
            </span>
            </a>
         </li>
         <li class="nav-item">
            <span class="nav-link collapsed d-flex justify-content-between align-items-center"
               data-bs-toggle="collapse" data-bs-target="#submenu-services" aria-expanded="false">
               <span>
               <span class="sidebar-icon"><i class="fab fa-laravel me-2"></i></span>
               <span class="sidebar-text">Services </span>
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
            <div class="multi-level collapse" role="list" id="submenu-services" aria-expanded="false">
               <ul class="flex-column nav">
                  <li class="nav-item ">
                     <a href="{{url('admin/mini-site')}}/{{$business_id}}/services/form" class="nav-link">
                     <span class="sidebar-text">Add New </span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a href="{{url('admin/mini-site')}}/{{$business_id}}/services/list" class="nav-link">
                     <span class="sidebar-text">List All </span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <!-- <li class="nav-item">
            <a href="{{url('admin/mini-site')}}/{{$business_id}}/services/form" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
               Services            
            </span>
            </a>
         </li> -->
         <li class="nav-item">
            <span class="nav-link collapsed d-flex justify-content-between align-items-center"
               data-bs-toggle="collapse" data-bs-target="#submenu-projects" aria-expanded="false">
               <span>
               <span class="sidebar-icon"><i class="fab fa-laravel me-2"></i></span>
               <span class="sidebar-text">Projects </span>
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
            <div class="multi-level collapse" role="list" id="submenu-projects" aria-expanded="false">
               <ul class="flex-column nav">
                  <li class="nav-item ">
                     <a href="{{url('admin/mini-site')}}/{{$business_id}}/projects/form" class="nav-link">
                     <span class="sidebar-text">Add New </span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a href="{{url('admin/mini-site/')}}/{{$business_id}}/projects/list" class="nav-link">
                     <span class="sidebar-text">List All </span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <li class="nav-item">
            <span class="nav-link collapsed d-flex justify-content-between align-items-center"
               data-bs-toggle="collapse" data-bs-target="#submenu-promotions" aria-expanded="false">
               <span>
               <span class="sidebar-icon"><i class="fab fa-laravel me-2"></i></span>
               <span class="sidebar-text">Promotions </span>
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
            <div class="multi-level collapse" role="list" id="submenu-promotions" aria-expanded="false">
               <ul class="flex-column nav">
                  <li class="nav-item ">
                     <a href="{{url('admin/mini-site')}}/{{$business_id}}/promotions/form" class="nav-link">
                     <span class="sidebar-text">Add New </span>
                     </a>
                  </li>
                  <li class="nav-item ">
                     <a href="{{url('admin/mini-site')}}/{{$business_id}}/promotions/list" class="nav-link">
                     <span class="sidebar-text">List All </span>
                     </a>
                  </li>
               </ul>
            </div>
         </li>
         <!-- <li class="nav-item">
            <a href="{{url('admin/mini-site')}}/{{$business_id}}/projects/form" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
               Projects            
            </span>
            </a>
         </li> -->
         <!-- <li class="nav-item">
            <a href="{{url('admin/mini-site')}}/{{$business_id}}/promotions/form" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
            </span>
            <span class="mt-1 ms-1 sidebar-text">
               Promotions
            </span>
            </a>
         </li> -->
      </ul>
   </div>
</nav>
