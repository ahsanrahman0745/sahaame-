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
                                             <span class="dashboard-navigation-devider">Listing</span>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <a href="#" class="dahsboard-navigation-link "><span class="ti-plus"></span> <span class="dashboard-navigation-text">Add Listing</span></a>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <a href="#" class="dahsboard-navigation-link "><span class="ti-bookmark-alt"></span> <span class="dashboard-navigation-text">My Listing</span></a>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <span class="dashboard-navigation-devider">Account</span>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <a href="" class="dahsboard-navigation-link "><span class="ti-user"></span> <span class="dashboard-navigation-text">My Profile</span></a>
                                          </li>
                                          <li class="dahsboard-navigation-li">
                                             <a href="#" class="dahsboard-navigation-link "><span class="ti-power-off"></span> <span class="dashboard-navigation-text">Logout</span></a>
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
                                             All Businesses Listing
                                          </div>
                                          <div class="dashboard-panel-page-content-header-beadcrem">
                                             Home / Dashboard / Businesses
                                          </div>
                                       </div>
                                    </div>
                                    <div class="dashboard-panel-page-main-content">
                                       <div class="dashboard-panel-main-content-header">
                                          <div class="dashboard-panel-main-content-header-outer">
                                             <div class="dashboard-panel-main-content-header-main">
                                                <div class="dashboard-panel-main-content-all-steps">
                                                   <div class="dashboard-panel-main-content-page-box">
                                                      <div class="dashboard-panel-main-content-page-box-outer">
                                                         <div class="dashboard-panel-main-content-page-box-inner">
                                                            <div class="dashboard-panel-main-content-page-box-main">
                                                                <div class="table-responsive mt-4">
                                                                    <table class='table'>
                                                                        <thead>
                                                                        <th>Name</th>
                                                                        <th>Type</th>
                                                                        <th>Address</th>
                                                                        <th>Action</th>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php foreach($businesses AS $business) { ?>
                                                                            <tr>
                                                                                <td><?php echo $business->business_name; ?></td>
                                                                                <td><?php echo $business->business_type; ?></td>
                                                                                <td><?php echo $business->business_address; ?></td>
                                                                                <td>
                                                                                    <a href="http://localhost/Sahaa/admin/add/minisite/<?php echo $business->business_id; ?>">Add Mini Website</a>
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
