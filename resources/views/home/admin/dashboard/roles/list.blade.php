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
            <li class="breadcrumb-item"><a href="#">All Users </a></li>
            <li class="breadcrumb-item active" aria-current="page">Users List</li>
         </ol>
      </nav>
      <h2 class="h4">Roles List | <a href="{{url('dashboard/add/role-form')}}" class='btn-sm btn-success'>Add New Role</a></h2>
   </div>
</div>
</div>
<!-- All Business Start-->
<div class="row">
    <div class="col-12">
        <div class="card shadow border-0">
            <div class="p-4">
                @if(session()->has('success'))
                    <div class="text-success text-center">{{ session()->get('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table" id='roles-table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{$role->id}}</td>
                                <td>{{$role->title}}</td>
                                <td>{{$role->slug}}</td>
                                <td>
                                    <a href="{{url('dashboard/manage/roles')}}/{{$role->id}}/edit" class='btn-sm btn-primary border-0'>Edit</a>
                                    <a href="{{url('dashboard/manage/roles')}}/{{$role->id}}/delete" class='btn-sm btn-danger border-0'>Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- All Business End-->
@include('home/admin/mini-site/include.footer')
@include('home/admin/mini-site/include.dashboard-script')