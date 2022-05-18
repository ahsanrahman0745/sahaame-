<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{$page}} - Admin | Sahaa.me</title>
      @include('home/site-layout.style')
   </head>
   <body>
      <body id="body-user-dashboard" class="body-ua dashboard-page device-other browser-other">
         <div class="dashboard-panel-page">
            <div class="dashboard-panel-page-outer">
               <div class="dashboard-panel-page-inner">
                  <div class="dashboard-panel-page-main">
                     <div class="dashboard-panel-page-all-sides">
                        <div class="dashboard-panel-page-side menu-side">
                           <div class="site-logo">
                              <div class="site-logo-outer">
                                 <div class="site-logo-img">
                                 <img src="{{asset('business/assets/images/logo/logo.png')}}" alt="">
                                 </div>
                              </div>
                           </div>
                           <div class="dahsboard-navigation">
                              <div class="dahsboard-navigation-inner">
                                 <div class="dahsboard-navigation-outer">
                                    <div class="dahsboard-navigation-main">
                                       <ul class="dahsboard-navigation-ul">
                                          <li class="dahsboard-navigation-li">
                                             <span class="dashboard-navigation-devider">Main</span>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <a href="{{url('admin/dashboard')}}" class="dahsboard-navigation-link "><span class="ti-settings"></span> <span class="dashboard-navigation-text">Dashboard</span></a>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <a href="#" class="dahsboard-navigation-link show-content " data-class='.company-over-view' data-title='Company Overview'><span class="ti-plus"></span> <span class="dashboard-navigation-text">Company Overview</span></a>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                          <a href="#" class="dahsboard-navigation-link show-content " data-class='.main-service' data-title='Main Service'><span class="ti-plus"></span> <span class="dashboard-navigation-text">Main Services</span></a>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                          <a href="#" class="dahsboard-navigation-link show-content " data-class='.existing-projects' data-title='Existing Project'><span class="ti-plus"></span> <span class="dashboard-navigation-text">Existing Projects</span></a>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <a href="#" class="dahsboard-navigation-link show-content " data-class='.promotion' data-title='Promotions'><span class="ti-plus"></span> <span class="dashboard-navigation-text">Promotions</span></a>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <button>Publish</button>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="dashboard-panel-page-side page-side">
                           <div class="dashboard-panel-page-header">
                              <div class="dashboard-panel-page-header-inner">
                                 <div class="dashboard-panel-page-header-outer">
                                    <div class="dashboard-panel-page-header-main">
                                       <div class="dashboard-panel-page-header-title">
                                          Shop
                                       </div>
                                       <div class="dashboard-panel-page-header-navigation">
                                          <div class="dashboard-panel-page-header-navigation-outer">
                                             <div class="dashboard-panel-page-header-navigation-main">
                                                <div class="my-account-div">
                                                   <div class="my-account-main">
                                                      <div class="my-account-image">
                                                         <img src="http://localhost/10.100.1/OSClass/BuyStock/Code/oc-content/themes/veronika/images/svg-icon/user-active.svg" alt="">
                                                      </div>
                                                      <div class="my-account-text">
                                                         My Account
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="add-listing-button">
                                                   <div class="add-listing-button-outer">
                                                      <div class="add-listing-button-main">
                                                         <a href="#">
                                                            <div class="add-listing-button-link">
                                                               <span class="add-listing-button-link-text"><i class="fa fa-plus-circle"></i> Add listing</span>
                                                            </div>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="menu-button">
                                                   <i class="fa fa-bars"></i>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="dashboard-panel-page-content-outer">
                              <div class="dashboard-panel-page-content-inner">
                                 <div class="dashboard-panel-page-content-main">
                                    <div class="dashboard-panel-page-content-header">
                                       <div class="dashboard-panel-page-content-header-main">
                                          <div class="dashboard-panel-page-content-header-title">
                                             Add Mini Site Information
                                          </div>
                                          <div class="dashboard-panel-page-content-header-beadcrem">
                                             Home / Dashboard
                                          </div>
                                       </div>
                                    </div>
                                    <div class="dashboard-panel-page-main-content">
                                       <div class="dashboard-panel-main-content-header">
                                          <div class="dashboard-panel-main-content-header-outer">
                                             <div class="dashboard-panel-main-content-header-main">
                                                <div class="dashboard-panel-main-content-all-steps">
                                                   <div class="dashboard-panel-main-content-single-step">
                                                      <div class="dashboard-panel-main-content-step-header">
                                                         <div class="dashboard-panel-main-content-step-header-outer">
                                                            <div class="dashboard-panel-main-content-step-header-inner">
                                                               <div class="dashboard-panel-main-content-step-header-text">
                                                                  <!-- <span class="text-icon-main"><span class="ti-file"></span></span> -->
                                                                  <span class="step-text-main">Company Overview</span>
                                                               </div>
                                                               <div class="dashboard-panel-main-content-step-header-count">
                                                                  <!-- <span class='step-count'>Step 1/2</span> -->
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="dashboard-panel-main-content-page-box">
                                                      <div class="dashboard-panel-main-content-page-box-outer">
                                                         <div class="dashboard-panel-main-content-page-box-inner">
                                                            <div class="dashboard-panel-main-content-page-box-main">
                                                                <form action="{{url('admin/add/business')}}" method='POST'>
                                                                    {{ csrf_field() }}
                                                                    <div class="show-form-field company-over-view">
                                                                        <div class="add-form-fields-grid">
                                                                            <input type="text" placeholder="Business Type" name='first_name'>
                                                                            <input type="text" placeholder="Country / Region" name='last_name'>
                                                                            <input type="text" placeholder="Main Services" name='email'>
                                                                        </div>
                                                                        <div class="add-form-fields-grid">
                                                                            <input type="text" placeholder="Total Employees" name='first_name'>
                                                                            <input type="text" placeholder="Revenue" name='last_name'>
                                                                            <input type="text" placeholder="Year Established" name='email'>
                                                                        </div>
                                                                        <div class="add-form-fields-grid">
                                                                            <input type="text" placeholder="Leadership" name='first_name'>
                                                                            <input type="text" placeholder="Main Markets" name='last_name'>
                                                                            <input type="text" placeholder="Mobile" name='email'>
                                                                        </div>
                                                                        <div class="add-form-fields-grid">
                                                                            <input type="text" placeholder="License" name='first_name'>
                                                                            <input type="text" placeholder="Whatsapp" name='email'>
                                                                            <input type="text" placeholder="Email" name='email'>
                                                                        </div>
                                                                        <div class="add-form-field">
                                                                            <textarea name="" id="" rows="5" placeholder="Basic Information" name='business_categories'></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="show-form-field existing-projects">
                                                                        <div class="add-form-field">
                                                                            <input type="text" placeholder="Project Title" name='email'>
                                                                        </div>
                                                                        <div class="add-form-field">
                                                                            <input type="text" placeholder="Project Type" name='email'>
                                                                        </div>
                                                                        <label>Project Image</label>
                                                                        <div class="add-form-field">
                                                                            <div class="form-group">
                                                                                <input type="file" class='form-control'>
                                                                            </div>
                                                                        </div>
                                                                        <div class="add-form-field">
                                                                            <textarea name="" id="" rows="5" placeholder="Project Description" name='business_categories'></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="show-form-field main-service">
                                                                        <div class="add-form-field">
                                                                            <input type="text" placeholder="Service Title" name='email'>
                                                                        </div>
                                                                        <label>Service Icon</label>
                                                                        <div class="add-form-field">
                                                                            <div class="form-group">
                                                                                <input type="file" class='form-control'>
                                                                            </div>
                                                                        </div>
                                                                        <div class="add-form-field">
                                                                            <textarea name="" id="" rows="5" placeholder="Service Description" name='business_categories'></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="show-form-field promotion">
                                                                        <div class="add-form-field">
                                                                            <input type="text" placeholder="Promotion Title" name='email'>
                                                                        </div>
                                                                        <div class="add-form-field">
                                                                            <input type="text" placeholder="Promotion Type" name='email'>
                                                                        </div>
                                                                        <label>Expiry Date</label>
                                                                        <div class="add-form-field">
                                                                            <input type="date" name='email'>
                                                                        </div>
                                                                        <label>Promotion Image</label>
                                                                        <div class="add-form-field">
                                                                            <div class="form-group">
                                                                                <input type="file" class='form-control'>
                                                                            </div>
                                                                        </div>
                                                                        <div class="add-form-field">
                                                                            <textarea name="" id="" rows="5" placeholder="Promotion Description" name='business_categories'></textarea>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @include('home/site-layout.script')
   </body>
</html>
