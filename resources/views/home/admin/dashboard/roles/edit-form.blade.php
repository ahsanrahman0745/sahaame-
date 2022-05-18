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
            <li class="breadcrumb-item"><a href="#">{{$page_category}} </a></li>
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
                <form action="{{url('dashboard/manage/roles')}}/{{$role_data[0]->id}}/update" method='POST'>
                    @csrf
                    @if(session()->has('success'))
                        <div class="text-success text-center">{{ session()->get('success') }}</div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class='form-control' name='title' value="{{$role_data[0]->title}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class='form-control' name='slug' value="{{$role_data[0]->slug}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="role-permissions">
                                <div class="role-permissions-outer">
                                    <div class="role-permissions-inner mt-2">
                                        <h5>Role Permissions</h5>
                                        <div class="all-role-permissions">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='manage_role' <?php echo ($role_data[0]->manage_role != '') ? 'checked' : '' ; ?>> Manage Roles</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='manage_user' <?php echo ($role_data[0]->manage_user != '') ? 'checked' : '' ; ?>> Manage Users</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='track_activity' <?php echo ($role_data[0]->track_activity != '') ? 'checked' : '' ; ?>> Track Activity</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='manage_listing' <?php echo ($role_data[0]->manage_listing != '') ? 'checked' : '' ; ?>> Manage Listings</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='manage_ranking'<?php echo ($role_data[0]->manage_ranking != '') ? 'checked' : '' ; ?>> Manage Ranking</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='manage_mini_site' <?php echo ($role_data[0]->manage_mini_site != '') ? 'checked' : '' ; ?>> Manage Mini Site</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='manage_email_templates' <?php echo ($role_data[0]->manage_email_templates != '') ? 'checked' : '' ; ?>> Manage Email Templates</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='manage_contact_details' <?php echo ($role_data[0]->manage_contact_details != '') ? 'checked' : '' ; ?>> Manage Contact Data</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                    <h5>Manage Listing</h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='view_all_listings' <?php echo ($role_data[0]->view_all_listings != '') ? 'checked' : '' ; ?>> View All Listing</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='add_listing' <?php echo ($role_data[0]->add_listing != '') ? 'checked' : '' ; ?>> Add Listing</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='edit_listing' <?php echo ($role_data[0]->edit_listing != '') ? 'checked' : '' ; ?>> Edit Listing</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='delete_listing' <?php echo ($role_data[0]->delete_listing != '') ? 'checked' : '' ; ?>> Delete Listing</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                                <div class="col-md-12">
                                                <h5>Manage Email Templates</h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='view_all_templates' <?php echo ($role_data[0]->view_all_templates != '') ? 'checked' : '' ; ?>> View All Templates</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='add_templates' <?php echo ($role_data[0]->add_templates != '') ? 'checked' : '' ; ?>> Add Template</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='edit_templates' <?php echo ($role_data[0]->edit_templates != '') ? 'checked' : '' ; ?>> Edit Template</label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class='d-block'><input type="checkbox" value='1' name='delete_templates' <?php echo ($role_data[0]->delete_templates != '') ? 'checked' : '' ; ?>> Delete Template</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label style='opacity:0'>Title</label>
                                <button class='btn btn-success form-control' >Update Role</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- All Business End-->
@include('home/admin/mini-site/include.footer')