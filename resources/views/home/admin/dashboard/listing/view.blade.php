<style>
.view-listing-image {
    width: 150px;
    display: block;
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
        Businesses List |
        @if($permissions->add_listing !='')
            <a href="{{url('manage/listing/add-form')}}" class='btn-sm btn-success'>Add New Listing</a>
        @endif
      </h2>
      <div>
         <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#">
               <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
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
            <!-- <form wire:submit.prevent="save" action="#" method="POST"> -->
            <form id="msform" method="POST">
               <!-- progressbar -->
               <ul id="progressbar">
                  <li class="goto-step active" id="business-detail" data-class='.step-1'><strong>Business Detailsss</strong></li>
                  <li class='goto-step' id="contact-detail" data-class='.step-2'><strong>Business Contact Details </strong></li>
                  <li class='goto-step' id="business-address" data-class='.step-3'><strong>Business Address</strong></li>
                  <li class='goto-step' id="opening-hours" data-class='.step-4'><strong>Opening Hours</strong></li>
                  <li class='goto-step' id="services" data-class='.step-5'><strong>Services</strong></li>
                  <li class='goto-step' id="seo" data-class='.step-6'><strong>SEO</strong></li>
                  <li class='goto-step' id="owner-detail" data-class='.step-7'><strong>Owner Details (Optional)</strong></li>
                  <!-- <li class='goto-step' id="confirm" data-class='.step-8'><strong>Finish</strong></li> -->
               </ul>
               <!-- <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                     aria-valuemin="0" aria-valuemax="100"></div>
               </div> -->
               <br> <!-- fieldsets -->
               <fieldset class='form-steps step-1'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Business Details:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 1 - 7</h2>
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
                           <p><b>{{$business_detail->name}}</b><hr></p>
                           <label class="fieldlabels">Business Type:</label>
                           <p><b>{{$business_detail->short_desc}}</b><hr></p>
                            <label class="fieldlabels">Category :</label>
                            <p><b>{{get_Category_name($business_detail->pcategories)}}</b><hr></p>
                           <label class="fieldlabels">Sub-Category :</label>
                           <p><b>{{get_Category_name($business_detail->categories)}}</b><hr></p>
                           <label class="fieldlabels">Webdite :</label>
                           <p><b>{{$business_detail->website}}</b><hr></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Business Logo :</label>
                           <img src="{{asset('business/listings/logo')}}/{{$business_detail->logo}}" alt="{{$business_detail->name}}" class='view-listing-image'>
                           <label class="fieldlabels">Promotion Banner :</label>
                           <img src="{{asset('business/listings/promotion')}}/{{$business_detail->snipshot}}"  alt="{{$business_detail->name}}" class='view-listing-image'>
                        </div>
                     </div>
                  </div>
                  <!-- <input type="button" name="next" class="next action-button" value="Next" /> -->
               </fieldset>
               <!-- 1 -->
               <fieldset class='form-steps step-2'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Business Contact Details:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 2 - 7</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Call US: *</label>
                           <p><b>{{$business_detail->phone}}</b><hr></p>
                           <label class="fieldlabels">Whatsapp US:</label>
                           <p><b>{{$business_detail->whatsapp}}</b><hr></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Messenger us:</label>
                           <p><b>{{$business_detail->phone}}</b><hr></p>
                           <label class="fieldlabels">Email Us:</label>
                           <p><b>{{$business_detail->email}}</b><hr></p>
                        </div>
                     </div>
                  </div>
                  <!-- <input type="button" name="next" class="next action-button" value="Next" />
                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <fieldset class='form-steps step-3'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Business Address:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 3 - 7</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Office #: *</label>
                           <p><b>{{$business_detail->office}}</b><hr></p>
                           <label class="fieldlabels">Building name:</label>
                           <p><b>{{$business_detail->buildingname}}</b><hr></p>
                              <label class="fieldlabels">City :</label>
                              <p><b>{{$business_detail->state_text}}</b><hr></p>
                           <label class="fieldlabels">Country :</label>
                           <p><b>{{$business_detail->country}}</b><hr></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Floor #</label>
                           <p><b>{{$business_detail->floor}}</b><hr></p>
                           <label class="fieldlabels">Street name:</label>
                           <p><b>{{$business_detail->streetname}}</b><hr></p>
                              <label class="fieldlabels">Area :</label>
                              <p><b>{{$business_detail->city_text}}</b><hr></p>
                        </div>
                     </div>
                  </div>
                  <!-- <input type="button" name="next" class="next action-button" value="Next" />
                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 3 -->
               <fieldset class='form-steps step-4'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Opening Hours:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 4 - 7</h2>
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
                                    <!-- <div class="col-xs-4 col-sm-4 col-md-1 col-lg-1 hide">
                                       <p class="day-closed">Closed</p>
                                       <p class="day-opened" style="display:block">Opened</p>
                                    </div> -->
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <p><b>{{$business_detail->mon_open_time}}</b><hr></p>
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <p><b>{{$business_detail->mon_close_time}}</b><hr></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Tuesday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Tuesday</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <p><b>{{$business_detail->tue_open_time}}</b><hr></p>
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <p><b>{{$business_detail->tue_close_time}}</b><hr></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Wednesday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Wednesday</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <p><b>{{$business_detail->wed_open_time}}</b><hr></p>
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <p><b>{{$business_detail->wed_close_time}}</b><hr></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Thursday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Thursday</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <p><b>{{$business_detail->thu_open_time}}</b><hr></p>
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <p><b>{{$business_detail->thu_close_time}}</b><hr></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Friday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Friday</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <p><b>{{$business_detail->fri_open_time}}</b><hr></p>
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <p><b>{{$business_detail->fri_close_time}}</b><hr></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Saturday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Saturday</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <p><b>{{$business_detail->sat_open_time}}</b><hr></p>
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <p><b>{{$business_detail->sat_close_time}}</b><hr></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row day-week" data-day="Sunday">
                                    <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                       <p>Sunday</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ft-row">
                                       <div class="row inner-ft-row">
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-from"
                                             style="display:block">
                                             <p><b>{{$business_detail->sun_open_time}}</b><hr></p>
                                          </div>
                                          <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 day-opened"
                                             style="display:block">
                                             <p class="center"><span>-</span></p>
                                          </div>
                                          <div class="col-xs-5 col-sm-5 col-md-4 col-lg-4 day-opened wrap-sel-to"
                                             style="display:block">
                                             <p><b>{{$business_detail->sun_close_time}}</b><hr></p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--/ end modal openhours /-->
                        </div>
                     </div>
                  </div>
                  <!-- <input type="button" name="next" class="next action-button" value="Next" />
                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 4 -->
               <fieldset class='form-steps step-5'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Services:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 5 - 7</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Services Title 1: *</label>
                           <p><b>{{$business_detail->stitle_1}}</b><hr></p>
                           <label class="fieldlabels">Services Title 2:</label>
                           <p><b>{{$business_detail->stitle_2}}</b><hr></p>
                           <label class="fieldlabels">Services Title 3:</label>
                           <p><b>{{$business_detail->stitle_3}}</b><hr></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <label class="fieldlabels">Services Title 4:</label>
                           <p><b>{{$business_detail->stitle_4}}</b><hr></p>
                           <label class="fieldlabels">Services Title 5:</label>
                           <p><b>{{$business_detail->stitle_5}}</b><hr></p>
                           <label class="fieldlabels">Services Title 6:</label>
                           <p><b>{{$business_detail->stitle_6}}</b><hr></p>
                        </div>
                     </div>
                  </div>
                  <!-- <input type="button" name="next" class="next action-button" value="Next" />
                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 6 -->
               <fieldset class='form-steps step-6'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">SEO:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 6 - 7</h2>
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
                                                    {{$business_detail->mtitle}}
                                                 </div>
                                                 <div class="seo-preview-link">
                                                   <a href="{{$business_detail->seo_link}}" target="_blank" id='seo-link-a'>{{$business_detail->seo_link}}</a>
                                                 </div>
                                                 <div class="seo-preview-description">
                                                    {{$business_detail->meta_desc}}
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
                                 <p><b>{{$business_detail->mtitle}}</b><hr></p>
                             </div>
                        </div>
                        <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                             <div class="form-group">
                                 <label>Title Format</label>
                                 <input type="text" class='form-control'>
                             </div>
                        </div> -->
                        <!-- <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
                        </div> -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group">
                              <label class="fieldlabels">Meta Description (<small class='meta-description-error'>Max 250</small>)</label>
                              <p><b>{{$business_detail->meta_desc}}</b><hr></p>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="form-group">
                           <label class="fieldlabels">Meta Keywords :</label>
                           <p><b>{{$business_detail->meta_keywords}}</b><hr></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <input type="button" name="next" class="next action-button" value="Next" />
                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> -->
               </fieldset>
               <!-- 7 -->
               <fieldset class='form-steps step-7'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Owner Details (Optional)</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 7 - 7</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="fieldlabels">Owner Type </label>
                           <p><b>{{$business_detail->owner_type}}</b><hr></p>
                           <label class="fieldlabels"><span class='owner_type'></span> Name </label>
                           <p><b>{{$business_detail->owner_name}}</b><hr></p>
                           <label class="fieldlabels"><span class='owner_type'></span> Mobile Number </label>
                           <p><b>{{$business_detail->owner_phone}}</b><hr></p>
                           <label class="fieldlabels"><span class='owner_type'></span> Email ID </label>
                           <p><b>{{$business_detail->owner_email}}</b><hr></p>
                           <label class="fieldlabels"><span class='owner_type'></span> Date of Birth (DOB) </label>
                           <p><b>{{$business_detail->owner_dob}}</b><hr></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label>Security Question:</label>
                                <p><b>{{$business_detail->security_question}}</b><hr></p>
                            </div>
                            <div class="form-group">
                                <label>Answer:</label>
                                <p><b>{{$business_detail->security_answer}}</b><hr></p>

                            </div>
                        </div>
                     </div>
                  </div>
                  <!-- <input type="button" name="next" class="next action-button" value="Next" /> -->
                  <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
               </fieldset>
               <!-- 8 -->
               <!-- <fieldset class='form-steps step-8'>
                  <div class="form-card">
                     <div class="row">
                        <div class="col-7">
                           <h2 class="fs-title">Finish:</h2>
                        </div>
                        <div class="col-5">
                           <h2 class="steps">Step 8 - 7</h2>
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
                           <input type="submit" value="Save">
                        </div>
                     </div>
                  </div>
               </fieldset> -->
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
        $(document).ready(function(){
            $('.meta-title-input').keyup(function(){
                $('.meta-title-input').removeClass('error-border');
                $('.meta-title-error').removeClass('error-color');
                var meta_title = $(this).val();
                if (meta_title.length < 50) {
                    $('.seo-preview-title').html(meta_title);
                    var meta_link = meta_title.toLowerCase();
                    meta_link = meta_link.replaceAll(' ', '-')
                    $('.seo-preview-link').html("https://sahaa.me/"+meta_link);
                } else {
                    $('.meta-title-input').addClass('error-border');
                    $('.meta-title-error').addClass('error-color');
                }
            });
            $('.meta-description-input').keyup(function(){
                var meta_description = $(this).val();
                $('.meta-description-input').removeClass('error-border');
                    $('.meta-description-error').removeClass('error-color');
                if (meta_title.length < 250) {
                    $('.seo-preview-description').html(meta_description);
                } else {
                    $('.meta-description-input').addClass('error-border');
                    $('.meta-description-error').addClass('error-color');
                }
            });
        });
    </script>
    <!-- SEO Preview Script End -->
   <!-- Custom Step Script -->
   <script>
        //  Move To a Step
        $(document).ready(function() {
            $('.goto-step').click(function() {
                var opt_index = $(this).index();
                var step_class = $(this).attr('data-class');
                $('.form-steps').hide();
                $(step_class).fadeIn();
                $(step_class).css('opacity','1 !important');
                $(step_class).css('position','unset');
                console.log(opt_index);
                add_active_class(opt_index);
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
            })
        })
   </script>
</div>
@include('home/admin/mini-site/include.footer')
