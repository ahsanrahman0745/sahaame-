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
                        <form action="{{url('/admin/mini-site')}}/{{$business_id}}/company-overview/add" method='POST' enctype="multipart/form-data">
                            @if(isset($site_overview->id))
                            <input type="hidden" value='{{$site_overview->id}}' name='overview_id'>
                            @endif
                            @csrf
                            <div class="mini-site-form-main">
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Business Type</label>
                                            <input type="text" class='form-control' placeholder='Enter Business Type' required  value="<?php echo (isset($site_overview->business_type)) ? $site_overview->business_type : '' ;?>" autofill='off' name='business_type' >
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Country/ Region</label>
                                            <input type="text" class='form-control' placeholder='Enter Country/ Region' required  value="<?php echo (isset($site_overview->country_region)) ? $site_overview->country_region : '' ;?>" autofill='off' name='country_region'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Main Service</label>
                                            <input type="text" class='form-control' placeholder='Enter Main Service' required  value="<?php echo (isset($site_overview->main_service)) ? $site_overview->main_service : '' ;?>" autofill='off' name='main_service'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Total Employees</label>
                                            <input type="text" class='form-control' placeholder='Enter Total Employees' required  value="<?php echo (isset($site_overview->employees)) ? $site_overview->employees : '' ;?>" autofill='off' name='employees'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Revenue</label>
                                            <input type="text" class='form-control' placeholder='Enter Revenue' required  value="<?php echo (isset($site_overview->revenue)) ? $site_overview->revenue : '' ;?>" autofill='off' name='revenue'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Year Established</label>
                                            <input type="text" class='form-control' placeholder='Enter Year Established' required  value="<?php echo (isset($site_overview->year_established)) ? $site_overview->year_established : '' ;?>" autofill='off' name='year_established'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Leadership</label>
                                            <input type="text" class='form-control' placeholder='Enter Leadership' required  value="<?php echo (isset($site_overview->leadership)) ? $site_overview->leadership : '' ;?>" autofill='off' name='leadership'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Main Markets</label>
                                            <input type="text" class='form-control' placeholder='Enter Main Markets' required  value="<?php echo (isset($site_overview->main_markets)) ? $site_overview->main_markets : '' ;?>" autofill='off' name='main_markets'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" class='form-control' placeholder='Enter Mobile' required  value="<?php echo (isset($site_overview->mobile)) ? $site_overview->mobile : '' ;?>" autofill='off' name='mobile'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>License</label>
                                            <input type="text" class='form-control' placeholder='Enter License' required  value="<?php echo (isset($site_overview->license)) ? $site_overview->license : '' ;?>" autofill='off' name='license'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Whatsapp</label>
                                            <input type="text" class='form-control' placeholder='Enter Whatsapp' required  value="<?php echo (isset($site_overview->whatsapp)) ? $site_overview->whatsapp : '' ;?>" autofill='off' name='whatsapp'>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class='form-control' placeholder='Enter Email' required  value="<?php echo (isset($site_overview->email)) ? $site_overview->email : '' ;?>" autofill='off' name='email'>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <textarea name="basic_information" id="" cols="30" rows="10" class='form-control' placeholder='Enter Basic Information' ><?php echo (isset($site_overview->basic_information)) ? $site_overview->basic_information : '' ;?></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-3">
                                    <div class="col-md-4 mb-2">
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