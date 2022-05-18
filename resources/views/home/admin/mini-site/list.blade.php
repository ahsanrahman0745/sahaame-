@include('home/admin/mini-site/include/head')
<body>
   <!-- <livewire-tables:row.user_table>
      </livewire-tables:row.user_table> -->
      @include('home/admin/mini-site/include/dashboard-nav')
   <main class="content">
   @include('home/admin/mini-site/include/dashboard-top-nav')
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
   <div class="d-block mb-4 mb-md-0">
      <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
         <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
               <a href="#">
                  <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                     </path>
                  </svg>
               </a>
            </li>
            <li class="breadcrumb-item"><a href="#">All Business </a></li>
            <li class="breadcrumb-item active" aria-current="page">All Mini Sites</li>
         </ol>
      </nav>
      <h2 class="h4">All Mini Sites</h2>
   </div>
</div>
</div>
<!-- All Business Start-->
<div class="row">
    <div class="col-12">
        <div class="card shadow border-0">
            <div class="p-4">
                <div class="table-responsive">
                    <table class="table" id='business-table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Business ID</th>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($mini_sites AS $mini_site) { ?>
                            <tr>
                                <td><?php echo $mini_site->id; ?></td>
                                <td><?php echo $mini_site->business_id; ?></td>
                                <td><img src="{{asset('business/mini-site-resources/basic-info')}}/{{$mini_site->site_logo}}" alt="" height="50px"></td>
                                <td><?php echo htmlspecialchars_decode($mini_site->site_title); ?></td>
                                <td><?php echo htmlspecialchars_decode($mini_site->email); ?></td>
                                <td><?php echo htmlspecialchars_decode($mini_site->phone); ?></td>
                                <td>
                                    <a href="{{url('admin/mini-site/')}}/<?php echo $mini_site->business_id; ?>/dashboard" class='btn-sm btn-primary'>View Panel</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- All Business End-->
@include('home/admin/mini-site/include.footer')