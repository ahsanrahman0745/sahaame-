@include('home/admin/mini-site/include/head')
<body>
   <!-- <livewire-tables:row.user_table>
      </livewire-tables:row.user_table> -->
      @include('home/admin/mini-site/include/dashboard-nav')
   <main class="content">
   @include('home/admin/mini-site/include/mini-site-nav')
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
            <li class="breadcrumb-item"><a href="#">All Mini Sites </a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$form_name}}</li>
         </ol>
      </nav>
      <h2 class="h4">{{$form_name}}</h2>
   </div>
</div>
</div>
<!-- All Business Start-->
<div class="row">
    <div class="col-12 pb-5">
        <div class="card shadow border-0 mb-5">
            <div class="p-4">
                <div class="mini-site-form-outer">
                    <div class="mini-site-form-inner">
                        <form action="{{url('/admin/mini-site')}}/{{$business_id}}/basic-info/add" method='POST' enctype="multipart/form-data">
                            @csrf
                            <div class="mini-site-form-main">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Title</label>
                                            <input type="text" class='form-control' autocomplete='off' name='site_title' required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Logo</label>
                                            <input type="file" class='form-control upload_file' data-type='basic-info' autocomplete='off' name='site_logo_image' accept=".jpg,.jpeg,.bmp,.png,.gif,.svg" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Banner</label>
                                            <input type="file" class='form-control' autocomplete='off' name='site_banner' accept=".jpg,.jpeg,.bmp,.png,.gif,.svg" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Company Text</label>
                                            <input type="text" class='form-control' autocomplete='off' name='company_text' required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Opening Text</label>
                                            <input type="text" class='form-control' autocomplete='off' name='opening_text' required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Years in Business (2YRS)</label>
                                            <input type="number" min='1'  class='form-control' autocomplete='off' name='years_inbusiness' value='1' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-section-title mt-4">
                                    <h5>Contact Details</h5>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Phone</label>
                                            <input type="text" class='form-control' autocomplete='off' name='phone' required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Email</label>
                                            <input type="email" class='form-control' autocomplete='off' name='email' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-section-title mt-4">
                                    <h5>Contact Text</h5>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Company Text</label>
                                            <input type="text" class='form-control' autocomplete='off' name='contact_text' required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Button Text</label>
                                            <input type="text" class='form-control' autocomplete='off' name='contact_button' required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-section-title mt-4">
                                    <h5>Social Links</h5>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Facebook</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text h-100" id="basic-addon1"><i class="fab fa-facebook-f"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Link" aria-label="Link" name='facebook' aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Instagram</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text h-100" id="basic-addon1"><i class="fab fa-instagram"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Link" aria-label="Link" name='instagram' aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group has-validation">
                                            <label>Twitter</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text h-100" id="basic-addon1"><i class="fab fa-twitter"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Link" aria-label="Link" name='twitter' aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <button type='submit' class='btn btn-success'>Save</button>
                                        <button type='reset' class='btn btn-warning'>Clear</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- All Business End-->
@include('home/admin/mini-site/include.footer')