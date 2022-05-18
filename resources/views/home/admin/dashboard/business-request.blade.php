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
            <li class="breadcrumb-item"><a href="#">Dashboard </a></li>
            <li class="breadcrumb-item active" aria-current="page">All Business Requests</li>
         </ol>
      </nav>
      <h2 class="h4">All Business Requests</h2>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Business Type</th>
                                <th>Location</th>
                                <th>Business Category</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($requests AS $request)
                                <tr>
                                    <td>{{$request->id}}</td>
                                    <td>{{$request->business_title}}</td>
                                    <td>{{$request->owner_email}}</td>
                                    <td>{{$request->owner_phone}}</td>
                                    <td>{{$request->business_type}}</td>
                                    <td>{{$request->business_location}}</td>
                                    <td>{{$request->business_sub_category}}</td>
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