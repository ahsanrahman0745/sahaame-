@include('home/admin/mini-site/include/head')
<body>
   <!-- <livewire-tables:row.user_table>
      </livewire-tables:row.user_table> -->
      @include('home/admin/mini-site/include/mini-site-nav')
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
            <li class="breadcrumb-item"><a href="#">Manage Mini Site </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$page_name}}</li>
         </ol>
      </nav>
      <h2 class="h4">{{$page_name}}</h2>
   </div>
</div>
</div>
<!-- All Business Start-->
<div class="row">
    <div class="col-12">
        <div class="card shadow border-0">
            <div class="p-4">
                @if(session()->has('success'))
                    <div class="text-success text-center" id='success-message'>{{ session()->get('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table" id='data-table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Detail</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($projects AS $project) { ?>
                            <tr>
                                <td><?php echo $project->id; ?></td>
                                <td><img src="{{asset('business/mini-site-resources/projects')}}/{{$project->image}}" alt="" width="100px"></td>
                                <td><?php echo $project->title; ?></td>
                                <td><?php echo $project->detail; ?></td>
                                <td>
                                    <a href="{{url('admin/mini-site/')}}/<?php echo $project->business_id; ?>/projects/<?php echo $project->id?>/edit-form" class='btn-sm btn-primary'>Edit</a>
                                    <a href="{{url('admin/mini-site/')}}/<?php echo $project->business_id; ?>/projects/<?php echo $project->id?>/delete" class='btn-sm btn-danger'>Delete</a>
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