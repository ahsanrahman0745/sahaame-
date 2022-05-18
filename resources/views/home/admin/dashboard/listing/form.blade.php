
<style>
.preview-image-inner img {
    width: 180px;
    display : none;
}
</style>
@include('home/admin/mini-site/include/head')
<body>
   <!-- <livewire-tables:row.user_table>
      </livewire-tables:row.user_table> -->
      @include('home/admin/mini-site/include/dashboard-nav')
   <main class="content">
   @include('home/admin/mini-site/include/dashboard-top-nav')
<div>
   <link rel="stylesheet" href="{{ asset('assets/css/steps_style.css') }}">
   <!-- <link href="{{ asset('assets/css/steps_style.css') }}" rel="stylesheet" type="text/css"> -->
   <link rel="stylesheet" href="{{ asset('assets/css/custom-dashboard.css') }}">
   <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
      <h2 class="h4">
        Add Listing |
        @if($permissions->add_listing !='')
            <a href="{{url('manage/listing/add-form')}}" class='btn-sm btn-success'>Add New Listing</a>
        @endif
      </h2>
      <div>
         <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 3a2 2 0 100 4h12a2 #logo-image-field2 0 100-4H4z"></path>
                  <path fill-rule="evenodd"
                     d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                     clip-rule="evenodd"></path>
               </svg>
               Products
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                     d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                  </path>
               </svg>
               Customers
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                     d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                     clip-rule="evenodd"></path>
               </svg>
               Orders
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                     d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
                     clip-rule="evenodd"></path>
               </svg>
               Console
            </a>
            <div role="separator" class="dropdown-divider my-1"></div>
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-800 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                  <path fill-rule="evenodd"
                     d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                     clip-rule="evenodd"></path>
               </svg>
               All Reports
            </a>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-12 col-xl-12">
         <div class="card card-body border-0 shadow mb-4">
             @if ($message = Session::get('success'))
                 <div class="alert alert-success alert-block">
                     <strong>{{ $message }}</strong>
                 </div>
             @endif
             @if (count($errors) > 0)
                 <div class="alert alert-danger">
                     <strong>Whoops!</strong> Dimension of logo image is 350x350.
                     <ul>
                         @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                         @endforeach
                     </ul>
                 </div>
             @endif
            <h2 class="h5 mb-4">General information</h2>
            <!-- <form wire:submit.prevent="save" action="#" method="POST"> -->
            <form id="msform" method="POST" action="{{url('manage/listing/add')}}" enctype="multipart/form-data">
               @csrf
               <!-- progressbar -->
               <ul id="progressbar">
                  <li class="goto-step active" id="business-detail" data-class='.step-1' data-index='0'><strong>Business Detailsss</strong></li>
                  <li class='after-validation' id="contact-detail" data-class='.step-2' data-index='1'><strong>Business Contact Details </strong></li>
                  <li class='after-validation' id="business-address" data-class='.step-3' data-index='2'><strong>Business Address</strong></li>
                  <li class='after-validation' id="opening-hours" data-class='.step-4' data-index='3'><strong>Opening Hours</strong></li>
                  <li class='after-validation' id="services" data-class='.step-5' data-index='4'><strong>Services</strong></li>
                  <li class='after-validation' id="seo" data-class='.step-6' data-index='5'><strong>SEO</strong></li>
                  <li class='after-validation' id="owner-detail" data-class='.step-7' data-index='6'><strong>Owner Details (Optional)</strong></li>
                  <li class='after-validation' id="confirm" data-class='.step-8' data-index='7'><strong>Finish</strong></li>
               </ul>
               <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                     aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               @if(session()->has('success'))
                    <div class="text-success text-center" id='success-message'>{{ session()->get('success') }}</div>
                @endif
               <br> <!-- fieldsets -->
               <fieldset class='form-steps step-1'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Business Details:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 1 - 8</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           {{--
                           <div class="level">
                              <div class="level-item has-text-centered">
                                 <div class="box" id="results">
                                    <button id="get-fox" class="button is-large is-success is-rounded is-outlined">Grab yoast Data</button>
                                 </div>
                              </div>
                           </div>
                           --}}
                           <label class="fieldlabels">Business Title: *</label>
                           <div id='title-error' class='text-danger' style='display:none'>Title already takken please try different.</div>
                           <input type="text" value="{{isset($data->name) ? $data->name  : '' }}"
                              value="{{isset($data->name) ? $data->name  : '' }}" class="form-control"
                              name="name" id='business-title'>
                           <label class="fieldlabels">Business Type:</label>
                           <input type="text" value="{{isset($data->short_desc) ? $data->short_desc  : '' }}"
                              class="form-control" name="short_desc">
                           <label class="fieldlabels">Category :</label>
                           <select class="form-control"  name="pcategories"  id='categories_dropdown'>
                              <option value="" hidden>Select Category</option>
                              {{genrate_category_dropdown("parent")}}
                           </select>
                           <input type="text" name='parent_category_text' class='d-none' id='parent_category_text'>
                           <label class="fieldlabels mt-3">Sub-Category :</label>
                           <select class="form-control"  name="categories" id='sub-categories'>
                              <option value="" hidden>Select Sub Category</option>
                              {{genrate_category_dropdown("sub")}}
                           </select>
                           <input type="text" name='sub_category_text'  class='d-none' id='sub_category_text'>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Business Logo :</label>
                           <div class="preview-image">
                              <div class="preview-image-outer">
                                 <div class="preview-image-inner">
                                    <img src="" alt="" id='logo-preview'>
                                 </div>
                              </div>
                           </div>
                           <input type="file" name="logo" accept="image/*" id='logo-image-field'>
                           <label class="fieldlabels">Promotion Banner :</label>
                           <div class="preview-image">
                              <div class="preview-image-outer">
                                 <div class="preview-image-inner">
                                    <img src="" alt="" id='prommotion-preview'>
                                 </div>
                              </div>
                           </div>
                           <input type="file" name="snipshot" accept="image/*" id='prommotion-image-field'>
                           <label class="fieldlabels">WebSite:</label>
                           <input type="url" value="{{isset($data->whatsapp) ? $data->whatsapp  : '' }}" class="form-control" name="website">
                           <label class="fieldlabels">Email:</label>
                           <input type="text" class="form-control" name="email" id='email-first-field'>
                        </div>
                     </div>
                  </div>
                  <button type='button' class="goto-step first-step"  data-index='1' data-class='.step-2'>Next</button>
               </fieldset>
               <!-- 1 -->
               <fieldset class='form-steps step-2'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Business Contact Details:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 2 - 8</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Call US: *</label>
                           <input type="tel" value="{{isset($data->phone) ? $data->phone  : '' }}"
                              class="form-control" name="phone">
                           <label class="fieldlabels">Whatsapp US:</label>
                           <input type="tel" value="{{isset($data->whatsapp) ? $data->whatsapp  : '' }}"
                              class="form-control" name="whatsapp">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Messenger us:</label>
                           <input type="text" value="{{isset($data->phone_text) ? $data->phone_text  : '' }}"
                              class="form-control" name="phone_text">
                           <label class="fieldlabels">Email Us:</label>
                           <input type="text" value="{{isset($data->email) ? $data->email  : '' }}"
                              class="form-control" name="email" id='email-second-field'>
                        </div>
                     </div>
                  </div>
                  <button type='button' class="goto-step"  data-index='2' data-class='.step-3'>Next</button>
                  <button type='button' class="goto-step prev"  data-index='0' data-class='.step-1'>Previous</button>
                  <!-- <input type="button" name="next" class="goto-step" data-class='.step-2' value="Next" /> -->
                  <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <fieldset class='form-steps step-3'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Business Address:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 3 - 8</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Office #: *</label>
                           <input type="text" value="{{isset($data->office) ? $data->office  : '' }}"
                              class="form-control" name="office">
                           <label class="fieldlabels">Building name:</label>
                           <input type="text"
                              value="{{isset($data->buildingname) ? $data->buildingname  : '' }}"
                              class="form-control" name="buildingname">
                              <label class="fieldlabels">City :</label>
                              <select class="form-control" name="state" id="states_selection">

                                 {{genrate_state_dropdown()}}
                              </select>
                              <input type="text" name='state_text'  class='d-none' id='state_text'>
                              <label class="fieldlabels">Country :</label>
                              <input type="text" value="{{isset($data->country) ? $data->country  : 'UAE' }}" class="form-control" name="country">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Floor #</label>
                           <input type="text" value="{{isset($data->floor) ? $data->floor  : '' }}"
                              class="form-control" name="floor">
                           <label class="fieldlabels">Street name:</label>
                           <input type="text" value="{{isset($data->streetname) ? $data->streetname  : '' }}"
                              class="form-control" name="streetname">
                              <label class="fieldlabels">Area :</label>
                              <select class="form-control" name="city" id="area_selection">
                                 <option value="" hidden>Choose city first</option>
                              </select>
                              <input type="text" name='city_text'  class='d-none' id='city_text'>
                        </div>
                     </div>
                  </div>
                  <button type='button' class="goto-step"  data-index='3' data-class='.step-4'>Next</button>
                  <button type='button' class="goto-step prev"  data-index='1' data-class='.step-2'>Previous</button>
                  <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 3 -->
               <fieldset class='form-steps step-4'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Opening Hours:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 4 - 8</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           <!--/ start modal open huors/-->
                           <div id="edit-hours">
                              <div class="modal-content1">
                                 <div class="row day-week" data-day="Monday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Monday</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <!-- Switch -->
                                       <label class="switch">
                                       <input type="checkbox" name="open-day" class="open-day"
                                          value="Monday">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <p class="day-closed">Closed</p>
                                       <p class="day-opened" style="display:block">Opened</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <input   type="time" value="{{isset($data->mon_open_time) ? $data->mon_open_time  : '' }}" name="mon_open_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->mon_close_time) ? $data->mon_close_time  : '' }}" name="mon_close_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                             style="display:block">
                                             <div style="display:none"><span
                                                class="agg-orari cursor-p">ADD
                                                TIMES</span><span
                                                   class="material-icons cursor-p del-orari">clear</span>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Tuesday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Tuesday</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <!-- Switch -->
                                       <label class="switch">
                                       <input type="checkbox" name="open-day" class="open-day"
                                          value="Tuesday">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <p class="day-closed">Closed</p>
                                       <p class="day-opened" style="display:block">Opened</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->tue_open_time) ? $data->tue_open_time  : '' }}" name="tue_open_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->tue_close_time) ? $data->tue_close_time  : '' }}" name="tue_close_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                             style="display:block">
                                             <div style="display:none"><span
                                                class="agg-orari cursor-p">ADD
                                                TIMES</span><span
                                                   class="material-icons cursor-p del-orari">clear</span>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Wednesday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Wednesday</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <!-- Switch -->
                                       <label class="switch">
                                       <input type="checkbox" name="open-day" class="open-day"
                                          value="Wednesday">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <p class="day-closed">Closed</p>
                                       <p class="day-opened" style="display:block">Opened</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->wed_open_time) ? $data->wed_open_time  : '' }}" name="wed_open_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->wed_close_time) ? $data->wed_close_time  : '' }}" name="wed_close_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                             style="display:block">
                                             <div style="display:none"><span
                                                class="agg-orari cursor-p">ADD
                                                TIMES</span><span
                                                   class="material-icons cursor-p del-orari">clear</span>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Thursday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Thursday</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <!-- Switch -->
                                       <label class="switch">
                                       <input type="checkbox" name="open-day" class="open-day"
                                          value="Thursday">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <p class="day-closed">Closed</p>
                                       <p class="day-opened" style="display:block">Opened</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->thu_open_time) ? $data->thu_open_time  : '' }}" name="thu_open_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->thu_close_time) ? $data->thu_close_time  : '' }}" name="thu_close_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                             style="display:block">
                                             <div style="display:none"><span
                                                class="agg-orari cursor-p">ADD
                                                TIMES</span><span
                                                   class="material-icons cursor-p del-orari">clear</span>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Friday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Friday</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <!-- Switch -->
                                       <label class="switch">
                                       <input type="checkbox" name="open-day" class="open-day"
                                          value="Friday">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <p class="day-closed">Closed</p>
                                       <p class="day-opened" style="display:block">Opened
                                       </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->fri_open_time) ? $data->fri_open_time  : '' }}" name="fri_open_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->fri_close_time) ? $data->fri_close_time  : '' }}" name="fri_close_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                             style="display:block">
                                             <div style="display:none"><span
                                                class="agg-orari cursor-p">ADD
                                                TIMES</span><span
                                                   class="material-icons cursor-p del-orari">clear</span>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Saturday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Saturday</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <!-- Switch -->
                                       <label class="switch">
                                       <input type="checkbox" name="open-day" class="open-day"
                                          value="Saturday">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <p class="day-closed">Closed</p>
                                       <p class="day-opened" style="display:block">
                                          Opened
                                       </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->sat_open_time) ? $data->sat_open_time  : '' }}" name="sat_open_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->sat_close_time) ? $data->sat_close_time  : '' }}" name="sat_close_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                             style="display:block">
                                             <div style="display:none"><span
                                                class="agg-orari cursor-p">ADD
                                                TIMES</span><span
                                                   class="material-icons cursor-p del-orari">clear</span>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Sunday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Sunday</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <!-- Switch -->
                                       <label class="switch">
                                       <input type="checkbox" name="open-day" class="open-day"
                                          value="Sunday">
                                       <span class="slider round"></span>
                                       </label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <p class="day-closed">Closed</p>
                                       <p class="day-opened" style="display:block">
                                          Opened
                                       </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->sun_open_time) ? $data->sun_open_time  : '' }}" name="sun_open_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <input  type="time" value="{{isset($data->sun_close_time) ? $data->sun_close_time  : '' }}" name="sun_close_time">
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-3 col-lg-3 day-opened"
                                             style="display: none">
                                             <div style="display:none"><span
                                                class="agg-orari cursor-p">ADD
                                                TIMES</span><span
                                                   class="material-icons cursor-p del-orari">clear</span>
                                             </div>
                                          </div>
                                          <div class="clearfix"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--/ end modal openhours /-->
                        </div>
                     </div>
                  </div>
                  <button type='button' class="goto-step"  data-index='4' data-class='.step-5'>Next</button>
                  <button type='button' class="goto-step prev"  data-index='2' data-class='.step-3'>Previous</button>
                  <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 4 -->
               <fieldset class='form-steps step-5'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Services:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 5 - 8</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Services Title 1: *</label>
                           <input type="text" id="stitle_1"  value="{{isset($data->stitle_1) ? $data->stitle_1  : '' }}"
                              class="form-control" name="stitle_1">
                           <label class="fieldlabels">Services Title 2:</label>
                           <input type="text" id="stitle_2" value="{{isset($data->stitle_2) ? $data->stitle_2  : '' }}"
                              class="form-control" name="stitle_2">
                           <label class="fieldlabels">Services Title 3:</label>
                           <input type="text" id="stitle_3" value="{{isset($data->stitle_3) ? $data->stitle_3  : '' }}"
                              class="form-control" name="stitle_3">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Services Title 4:</label>
                           <input type="text" id="stitle_4" value="{{isset($data->stitle_4) ? $data->stitle_4  : '' }}"
                              class="form-control" name="stitle_4">
                           <label class="fieldlabels">Services Title 5:</label>
                           <input type="text" id="stitle_5" value="{{isset($data->stitle_5) ? $data->stitle_5  : '' }}"
                              class="form-control" name="stitle_5">
                           <label class="fieldlabels">Services Title 6:</label>
                           <input type="text" id="stitle_6" value="{{isset($data->stitle_6) ? $data->stitle_6  : '' }}"
                              class="form-control" name="stitle_6">
                        </div>
                     </div>
                  </div>
                  <button type='button' class="goto-step"  data-index='5' data-class='.step-6'>Next</button>
                  <button type='button' class="goto-step prev"  data-index='3' data-class='.step-4'>Previous</button>
                  <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 5 -->
               {{--
               <fieldset class='form-steps step- '>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Keyword’s Ranking:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 5 - 8</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Keyword’s *</label>
                           {{isset($data->keywords) ? $data->keywords  : '' }}
                           @php
                           $s=[];
                           if(isset($data->keywords)){
                           $s=explode(",",$data->keywords);
                           if(!count($s)>0){
                           $s[0]=$data->keywords;
                           }
                           }
                           @endphp
                           <select  multiple="multiple" name="keywords[]" class="dynamic-option-create-multiple" style="width: 100%;">
                              <option></option>
                              @foreach($keywords as $k)
                              <option value="{{$k->id}}" {{ (in_array($k->id,$s) ? "selected":"") }}>{{$k->name}}</option>
                              @endforeach
                           </select>
                           <select name="keywords" id="multiplekeyword">
                              <option value="a">apple</option>
                              <option value="b">banana</option>
                              <option value="c">cherry</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <input type="button" name="next" class="next action-button" value="Next" />
                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
               </fieldset>
               --}}
               <!-- 6 -->
               <fieldset class='form-steps step-6'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">SEO:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 6 - 8</h2>
                        </div>
                     </div>
                     <div class="row">
                         <div class="col-7">
                             <div class="seo-preview">
                                 <div class="seo-preview-outer">
                                     <div class="seo-preview-inner">
                                         <div class="seo-preview-main">
                                             <div class="preview-text">
                                                 Snippet Preview :
                                             </div>
                                             <div class="seo-preview-box">
                                                 <div class="seo-preview-title">
                                                    {{isset($data->mtitle) ? $data->mtitle  : '' }}
                                                 </div>
                                                 <div class="seo-preview-link">
                                                    <a href="#" target="_blank" id='seo-link-a'></a>
                                                 </div>
                                                 <div class="seo-preview-description">
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                             <div class="form-group">
                                 <label>Meta Title (<small class='meta-title-error'>Max 50</small>)</label>
                                 <input type="text" value="{{isset($data->mtitle) ? $data->mtitle  : '' }}" class="form-control meta-title-input" name="mtitle" id="meta-title" maxlength="51">
                                 <input type="hidden" name='meta_title_slug' id='meta_title_slug'>
                                 <input type="hidden" name='seo_link' id='seo_link-input'>
                             </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <div class="form-group">
                                 <label>Title Format</label>
                                 <input type="text" class='form-control'>
                             </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                               <label for="" class='d-block'>Select Title Format</label>
                              <select name="seo_item_meta_title_format[]" class="separaters_symbol valid">
                                 <option value="">
                                    none
                                 </option>
                                 <option value="|">|</option>
                                 <option value=",">,</option>
                                 <option value="–">–</option>
                                 <option value="—">—</option>
                                 <option value=".">.</option>
                                 <option value="•">•</option>
                                 <option value="✭">✭</option>
                                 <option value="«">«</option>
                                 <option value="»">»</option>
                                 <option value="&amp;lt;">&lt;</option>
                                 <option value="&amp;gt;">&gt;</option>
                              </select>
                              <select name="seo_item_meta_title_format[]" class="separaters_location valid">
                                 <option value="">
                                    none
                                 </option>
                                 <option value="country">
                                    country
                                 </option>
                                 <option value="region">
                                    region
                                 </option>
                                 <option value="city">
                                    city
                                 </option>
                              </select>
                              <select name="seo_item_meta_title_format[]" class="separaters_symbol">
                                 <option value="">
                                    none
                                 </option>
                                 <option value="|">|</option>
                                 <option value=",">,</option>
                                 <option value="–">–</option>
                                 <option value="—">—</option>
                                 <option value=".">.</option>
                                 <option value="•">•</option>
                                 <option value="✭">✭</option>
                                 <option value="«">«</option>
                                 <option value="»">»</option>
                                 <option value="&amp;lt;">&lt;</option>
                                 <option value="&amp;gt;">&gt;</option>
                              </select>
                              <select name="seo_item_meta_title_format[]" class="separaters_location">
                                 <option value="">
                                    none
                                 </option>
                                 <option value="country">
                                    country
                                 </option>
                                 <option value="region">
                                    region
                                 </option>
                                 <option value="city">
                                    city
                                 </option>
                              </select>
                              <select name="seo_item_meta_title_format[]" class="separaters_symbol">
                                 <option value="">
                                    none
                                 </option>
                                 <option value="|">|</option>
                                 <option value=",">,</option>
                                 <option value="–">–</option>
                                 <option value="—">—</option>
                                 <option value=".">.</option>
                                 <option value="•">•</option>
                                 <option value="✭">✭</option>
                                 <option value="«">«</option>
                                 <option value="»">»</option>
                                 <option value="&amp;lt;">&lt;</option>
                                 <option value="&amp;gt;">&gt;</option>
                              </select>
                              <select name="seo_item_meta_title_format[]" class="separaters_location">
                                 <option value="">
                                    none
                                 </option>
                                 <option value="country">
                                    country
                                 </option>
                                 <option value="region">
                                    region
                                 </option>
                                 <option value="city">
                                    city
                                 </option>
                              </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group">
                              <label class="fieldlabels">Meta Description (<small class='meta-description-error'>Max 250</small>)</label>
                              <textarea name="meta_desc" rows="4"
                                 cols="30" class='meta-description-input' maxlength="251">{{isset($data->meta_desc) ? $data->meta_desc  : '' }}</textarea>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group">
                           <label class="fieldlabels">Meta Keywords : (<small>One, Tow, Three</small>)</label>
                           <textarea name="meta_keywords" rows="4"
                              cols="30">{{isset($data->meta_keywords) ? $data->meta_keywords  : '' }}</textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <button type='button' class="goto-step"  data-index='6' data-class='.step-7'>Next</button>
                  <button type='button' class="goto-step prev"  data-index='4' data-class='.step-5'>Previous</button>
                  <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 7 -->
               <fieldset class='form-steps step-7'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Owner Details (Optional)</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 7 - 8</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <label class="fieldlabels">Who are you? </label>
                           <select name="owner_type" id="owner_type" class='form-control'>
                               <option value="" hidden>Select Type</option>
                               <option value="Owner">Owner</option>
                               <option value="Manager">Manager</option>
                           </select>
                           <label class="fieldlabels"><span class='owner_type'></span> Name </label>
                           <input type="text" value="{{isset($data->owner_name) ? $data->owner_name  : '' }}"
                              class="form-control" name="owner_name">
                           <label class="fieldlabels"><span class='owner_type'></span> Mobile Number </label>
                           <input type="text" value="{{isset($data->owner_phone) ? $data->owner_phone  : '' }}"
                              class="form-control" name="owner_phone">
                           <label class="fieldlabels"><span class='owner_type'></span> Email ID </label>
                           <input type="text" value="{{isset($data->owner_email) ? $data->owner_email  : '' }}"
                              class="form-control" name="owner_email">
                              <label class="fieldlabels"><span class='owner_type'></span> Date of Birth (DOB) </label>
                           <input type="date" class="form-control" name="owner_dob">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Security Question:</label>
                                <input type="text" name='security_question_text'  class='d-none' id='security_question_text'>
                                <select name="security_question_slug" id="security_question_slug" class='form-control'>
                                    <option value="" hidden></option>
                                    <option value="born_city">In what city were you born?</option>
                                    <option value="fav_pet">What is the name of your favorite pet?</option>
                                    <option value="maiden_name">What is your mother's maiden name?</option>
                                    <option value="high_school">What high school did you attend?</option>
                                    <option value="firts_school">What is the name of your first school?</option>
                                    <option value="first_car">What was the make of your first car?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Answer:</label>
                                <textarea name="security_answer" id="" class='form-control' cols="30" rows="11"></textarea>
                            </div>
                        </div>
                     </div>
                  </div>
                  <button type='button' class="goto-step"  data-index='7' data-class='.step-8'>Next</button>
                  <button type='button' class="goto-step prev"  data-index='5' data-class='.step-6'>Previous</button>
                  <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 8 -->
               <fieldset class='form-steps step-8'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Finish:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 8 - 8</h2>
                        </div>
                     </div>
                     <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2>
                     <br>
                     <div class="row justify-content-center">
                        <div class="col-3">
                        </div>
                     </div>
                     <br><br>
                     <div class="row justify-content-center">
                        <div class="col-7 text-center">
                           <h5 class="purple-text text-center">Clcik save to Signed Up</h5>
                           <input type="submit" value="Save" >
                        </div>
                     </div>
                  </div>
               </fieldset>
            </form>

         </div>
      </div>
   </div>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <script src="{{ asset('assets/js/steps_script.js') }}"></script>
   <script src="{{ asset('assets/js/myyoast.js') }}"></script>
   {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js'></script>
   <script src="{{ asset('assets/js/opentime.js') }}"></script> --}}
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script type="text/javascript">
      // CSRF Token

      (function($) {
          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


          $(document).ready(function() {





              $("#searchcity").autocomplete({
                  source: function(request, response) {
                      // Fetch data
                        console.log('tresd4');
                      $.ajax({
                          url: "{{route('Autocomplte.getAutocompltecity')}}",
                          type: 'post',
                          dataType: "json",
                          data: {
                              _token: CSRF_TOKEN,
                              search: request.term
                          },
                          success: function(data) {
                              response(data);
                          }
                      });
                  },
                  select: function(event, ui) {
                      $('#searchcity').val(ui.item.label);
                      $('#employeeid').val(ui.item.value);
                      return false;
                  }
              });

              $("#stitle_6,#stitle_5,#stitle_4,#stitle_3,#stitle_2,#stitle_1").autocomplete({
                  source: function(request, response) {
                      // Fetch data

                      $.ajax({
                          url: "{{route('Autocomplte.getAutocomplte_services')}}",
                          type: 'post',
                          dataType: "json",
                          data: {
                              _token: CSRF_TOKEN,
                              search: request.term
                          },
                          success: function(data) {
                              response(data);
                          }
                      });
                  },
                  select: function(event, ui) {
                      $(this).val(ui.item.label);
                      $('#employeeid').val(ui.item.value);
                      return false;
                  }
              });

          });

      }(jQuery));
   </script>
    <!-- SEO Preview Script Start -->
    <script>
       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function(){
            $('.meta-title-input').keyup(function(){
                  var meta_title = $(this).val();
                $('.meta-title-input').removeClass('error-border');
                $('.meta-title-error').removeClass('error-color');
                if (meta_title.length < 50) {
                  genrate_seo_link()
                } else {
                    $('.meta-title-input').addClass('error-border');
                    $('.meta-title-error').addClass('error-color');
                }
            });
            $('.meta-description-input').keyup(function(){
                var meta_description = $(this).val();
                $('.meta-description-input').removeClass('error-border');
                    $('.meta-description-error').removeClass('error-color');
                if (meta_description.length < 250) {
                    $('.seo-preview-description').html(meta_description);
                } else {
                    $('.meta-description-input').addClass('error-border');
                    $('.meta-description-error').addClass('error-color');
                }
            });

            // SEO Link Triggers
            $("#sub-categories").change(function() {genrate_seo_link()});
            $("#states_selection").change(function() {genrate_seo_link()});
            $("#stitle_1").change(function() {genrate_seo_link()});
            $("#stitle_2").change(function() {genrate_seo_link()});
            $("#stitle_3").change(function() {genrate_seo_link()});
            $("#stitle_4").change(function() {genrate_seo_link()});
            $("#stitle_5").change(function() {genrate_seo_link()});
            $("#stitle_6").change(function() {genrate_seo_link()});

            function genrate_seo_link() {
               var meta_title = $('#meta-title').val();
               var category = $('#sub-categories').val();
               var location = $('#states_selection option:selected').html()
               var serices = "";
               for (var i=1; i<=6; i++) {
                  var current_service = $("#stitle_"+i).val();
                  serices += (current_service != "") ? current_service+"," : '' ;
               }
               serices = serices.slice(0, -1);
               $('.seo-preview-title').html(meta_title+" | Sahaa.me");
               var meta_link = meta_title.toLowerCase();
               meta_link = meta_link.replaceAll(' ', '-')
               var seo_link = "https://sahaa.me/business/search?meta="+meta_link+"&category="+category+"&term=&location="+location+"&services="+serices;
               $('#seo-link-a').html(seo_link).attr('href',"https://sahaa.me/business/detail/"+meta_link);
               $('#meta_title_slug').val(meta_link);
               $('#seo_link-input').val(seo_link);
            }
        });
    </script>
    <!-- SEO Preview Script End -->
   <!-- Custom Step Script -->
   <script>
         var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        //  Move To a Step
        $(document).ready(function() {
            $(document).on('click','.goto-step',function() {
               var element = $(this);
               if (element.hasClass('first-step')) {
                  var business_title = $('#business-title').val();
                  var business_category = $('#categories_dropdown').val();
                  var business_sub_category = $('#sub-categories').val();
                  var email = $('#email-first-field').val();
                  var counter = 0;
                  if (business_title == '') {
                     $('#business-title').addClass('error-border');
                  } else {
                     $('#business-title').removeClass('error-border');
                     counter++;
                  }
                  if (business_category == '') {
                     $('#categories_dropdown').addClass('error-border');
                  } else {
                     $('#categories_dropdown').removeClass('error-border');
                     counter++;
                  }
                  if (business_sub_category == '') {
                     $('#sub-categories').addClass('error-border');
                  } else {
                     $('#sub-categories').removeClass('error-border');
                     counter++;

                  }

                  var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                  if (email == '' || !email.match(email_regex)) {
                     $('#email-first-field').addClass('error-border');
                  } else {
                     $('#email-first-field').removeClass('error-border');
                     $('#email-second-field').val(email);
                     counter++;
                  }

                  if(counter == 4) {
                     var csrf = $('input[name="_token"]').val();
                     $.ajax({
                        url: "{{url('ajax/check_name')}}",
                        type: 'post',
                        dataType: "json",
                        data: {
                           _token: csrf,
                           name: business_title
                        },
                        success: function(data) {
                           if (parseInt(data) == 0) {
                              $('.after-validation').addClass('goto-step');
                              $('#business-title').removeClass('error-border');
                              $('#title-error').hide();
                              var opt_index = parseInt(element.attr('data-index'));
                              var step_class = element.attr('data-class');
                              $('.form-steps').hide();
                              $(step_class).show();
                              add_active_class(opt_index);
                           } else {
                              $('.after-validation').removeClass('goto-step');
                              $('#business-title').addClass('error-border');
                              $('#title-error').show();
                           }
                        }
                     });
                  }

                  console.table({counter})
               } else {
                  var opt_index = parseInt(element.attr('data-index'));
                  var step_class = element.attr('data-class');
                  $('.form-steps').hide();
                  $(step_class).show();
                  add_active_class(opt_index);
               }
            });

            function add_active_class(count) {
                count = count;
                $('.goto-step').removeClass('active');
                for (var i=0; i <= count; i++) {
                    $('.goto-step:eq('+i+')').addClass('active');
                }

                var single_width = 12.5;
                var total_width = (count+1)*(single_width);
                var width_text = total_width+"%";
                $('.progress-bar').css('width',width_text);
            }
        });

        // Change Owner Type
        $(document).ready(function() {
            $('#owner_type').change(function() {
                var owner_type = $(this).val();
                $('.owner_type').html(owner_type);
            });
        });

        $(document).ready(function(){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $('#categories_dropdown').change(function() {
               var category_id =  $('#categories_dropdown').val();
               var text_value = $('#categories_dropdown option:selected').html();
               $('#parent_category_text').val(text_value);
               $.ajax({
                  url: "{{url('ajax/get/sub-categories')}}/"+category_id,
                  type: 'get',
                  data: {
                     _token: CSRF_TOKEN
                  },
                  success: function(data) {
                     $('#sub-categories').html(data);
                     var text_value = $('#sub-categories option:eq(0)').html();
                  $('#sub_category_text').val(text_value);
                  }
               });
            });
            $('#states_selection').change(function() {
               var state_id =  $('#states_selection').val();
               var text_value = $('#states_selection option:selected').html();
               $('#state_text').val(text_value);
               $.ajax({
                  url: "{{url('ajax/get/areas')}}/"+state_id,
                  type: 'get',
                  data: {
                     _token: CSRF_TOKEN
                  },
                  success: function(data) {
                     $('#area_selection').html(data)
                     var text_value = $('#area_selection option:eq(0)').html();
                     $('#city_text').val(text_value);
                  }
               });
            });

            $('#sub-categories').change(function() {
               var text_value = $('#sub-categories option:selected').html();
               $('#sub_category_text').val(text_value);
            });

            $('#area_selection').change(function() {
               var text_value = $('#area_selection option:selected').html();
               $('#city_text').val(text_value);
            });

            $('#security_question_slug').change(function() {
               var text_value = $('#security_question_slug option:selected').html();
               $('#security_question_text').val(text_value);
            });
        });
   </script>
</div>
<script>
$(document).ready(function() {
   $('#logo-image-field').change(function () {
      var selected_file = $('#logo-image-field').get(0).files[0];
      if(selected_file){
         var render_image = new FileReader();
         render_image.onload = function(){
               $("#logo-preview").attr("src", render_image.result);
               $("#logo-preview").fadeIn();
         }
         render_image.readAsDataURL(selected_file);
      }
   });
   $('#prommotion-image-field').change(function () {
      var selected_file = $('#prommotion-image-field').get(0).files[0];
      if(selected_file){
         var render_image = new FileReader();
         render_image.onload = function(){
               $("#prommotion-preview").attr("src", render_image.result);
               $("#prommotion-preview").fadeIn();
         }
         render_image.readAsDataURL(selected_file);
      }
   });
});
</script>
@if(session()->has('success'))
<script>
   $(document).ready(function() {
      setTimeout(function(){
         $('#success-message').fadeOut();
      }, 5000);
   });
</script>
@endif
@include('home/admin/mini-site/include.footer')
