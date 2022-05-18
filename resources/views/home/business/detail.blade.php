<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{htmlspecialchars_decode(ucwords($business->name))}} | Sahaa.me</title>
      <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
      <meta name="description" content="{{$business->meta_desc}}" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="{{$business->mtitle}} | Sahaa.me" />
      <meta property="og:description" content="{{$business->meta_desc}}" />
      <meta property="og:site_name" content="Sahaa.me: Sahaa.me The UAE Leading Online Business Directory" />
      <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-CT19N7GEB1');
      </script>
      @include('home.site-layout.style')
      <style>
         .hide-listing {
         display:none;
         }
         .hide-this {
         display:none;
         }
      </style>
   </head>
   <body>
      @include('home.site-layout.top-bar')
      <section class="section-main-page">
         <div class="main-page-inner">
            <div class="main-page-inner-main">
               <div class="main-page-header">
                  <div class="container">
                     @include('home.site-layout.header')
                  </div>
               </div>
               <div class="main-page-under-header">
                  <div class="container">
                     <div class="main-page-under-header-outer">
                        <div class="page-beardcrumb">
                           <div class="page-beardcrumb-inner">
                              <div class="page-beardcrumb-outer">
                                 <div class="page-beardcrumb-main">
                                    <span class="beadcrumb-active-link">Home</span>
                                    <span class="beard-crumb-devider"><span class="ti-angle-right"></span></span>
                                    <span class="beadcrumb-active-link">Business</span>
                                    <span class="beard-crumb-devider"><span class="ti-angle-right"></span></span>
                                    <span class="beadcrumb-active-link">Resturants near Dubai</span>
                                    <!-- <span class="beard-crumb-devider"><span class="ti-angle-right"></span></span>
                                       <span class="beadcrumb-active-text color-gray">Restaurants near Dubai</span> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="business-detail-top-div">
                  <div class="container">
                     <div class="business-detail-top-div-outer">
                        <div class="business-detail-top-div-inner">
                           <div class="business-detail-top-div-content">
                              <div class="business-detail-top-div-content-outer">
                                 <div class="business-detail-top-div-content-inner">
                                    <div class="business-detail-top-div-content-main">
                                       <div class="business-detail-top-div-content-logo">
                                          <?php $logo_file = public_path(). "/business/listings/logo/".$business->logo; ?>
                                          @if ($business->logo != "" && file_exists($logo_file))
                                             <img src="{{asset('business/assets/lib/lazy-loading/logo.gif')}}" alt="" class='lazy-loading' data-src="{{asset('business/listings/logo')}}/{{$business->logo}}">
                                          @else
                                             <img src="{{asset('business/assets/lib/lazy-loading/logo.gif')}}" alt="" class='lazy-loading' data-src="{{asset('business/assets/images/default/logo-default.png')}}">
                                          @endif
                                       </div>
                                       <div class="business-detail-top-div-content-info">
                                          <div class="business-detail-top-div-content-info-outer">
                                             <div class="business-detail-top-div-content-info-inner">
                                                <div class="business-detail-top-div-content-info-title">
                                                   {{htmlspecialchars_decode(ucwords($business->name))}}
                                                   @if($business->verified != 0)
                                                   <div class="verified-icon">
                                                      <div class="verified-icon-outer">
                                                            <div class="verified-icon-inner">
                                                               <div class="verified-icon-main">
                                                                  <img src="{{asset('business/assets/images/icons/verified.png')}}" alt="">
                                                               </div>
                                                            </div>
                                                      </div>
                                                   </div>
                                                   @endif
                                                </div>
                                                <div class="business-detail-top-div-content-info-category">
                                                   <span class='color-gray'><?php echo htmlspecialchars_decode($business->short_desc) ?></span>
                                                   <span class='color-gray'>|</span>
                                                   <span class='color-blue'><?php echo htmlspecialchars_decode($business->sub_category_text) ?></span>
                                                </div>
                                                <div class="business-detail-top-div-content-info-profile-detail">
                                                   <span class='color-gray'>Restaurant</span>
                                                   <span class='color-gray'>|</span>
                                                   <span class='profile-rating-text'><?php echo count_total('listing_reviews',"WHERE listing_id= {$business->id}") ?> Reviews </span>
                                                   <span class='color-orange profile-rating-stars'>
                                                      <?php $review_count = intval(avg_total('listing_reviews',"WHERE listing_id= {$business->id}")); ?>
                                                      <?php for($i=0; $i < $review_count; $i++) { ?>
                                                         <span class="ti-star"></span>
                                                      <?php } ?>
                                                   </span>
                                                   <span class='color-gray'>|</span>
                                                   <span class='color-gray'><span class="ti-heart"></span></span>
                                                   <span class='color-gray'>|</span>
                                                   <span class='color-gray'>Share <span class="ti-sharethis"></span></span>
                                                </div>
                                                <div class="business-profile-address color-blue">
                                                      <?php $address_str = ""; ?>
                                                      <?php if($business->floor !='') { $address_str .= $business->floor.", "; } ?>
                                                      <?php if($business->office !='') { $address_str .= $business->office.", "; } ?>
                                                      <?php if($business->buildingname !='') { $address_str .= $business->buildingname.", "; } ?>
                                                      <?php if($business->streetname !='') { $address_str .= $business->streetname.", "; } ?>
                                                      <?php if($business->city_text !='') { $address_str .= $business->city_text.", "; } ?>
                                                      <?php if($business->state_text !='') { $address_str .= $business->state_text.", "; } ?>
                                                      <?php if($business->country !='') { $address_str .= $business->country.", "; } ?>
                                                      <?php echo substr($address_str,0,-2) ?>
                                                </div>
                                                <div class="write-review-button-trigger">
                                                   <a href='#write-review'>Write a Review</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="business-contact-us-links">
                                 <div class="business-contact-us-links-outer">
                                    <div class="business-contact-us-links-inner">
                                       <div class="business-contact-us-links-main">
                                          <div class="business-contact-us-links-main-text">
                                             How to Contact us?
                                          </div>
                                          @if($business->whatsapp != '')
                                          <div class="business-contact-us-links-main-link">
                                             <a href="https://wa.me/{{$business->whatsapp}}">
                                                <div class="icon">
                                                   <img src="{{asset('business/assets/images/icons/whatsapp.png')}}" alt="">
                                                </div>
                                                <div class="text">Whatsapp us</div>
                                             </a>
                                          </div>
                                          @endif
                                          @if($business->phone != '')
                                          <div class="business-contact-us-links-main-link">
                                             <a href="tel:{{$business->phone}}">
                                                <div class="icon">
                                                   <img src="{{asset('business/assets/images/icons/phone.png')}}" alt="">
                                                </div>
                                                <div class="text">Call us</div>
                                             </a>
                                          </div>
                                          @endif
                                          @if($business->email != '')
                                          <div class="business-contact-us-links-main-link">
                                             <a href="mailto:{{$business->email}}">
                                                <div class="icon">
                                                   <img src="{{asset('business/assets/images/icons/gmail.png')}}" alt="">
                                                </div>
                                                <div class="text">Email us</div>
                                             </a>
                                          </div>
                                          @endif
                                          @if($business->phone_text != '')
                                          <div class="business-contact-us-links-main-link">
                                             <a href="http://m.me/{{$business->phone_text}}">
                                                <div class="icon">
                                                   <img src="{{asset('business/assets/images/icons/messenger.png')}}" alt="">
                                                </div>
                                                <div class="text">Send us Messenger</div>
                                             </a>
                                          </div>
                                          @endif
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="business-detail-top-div-promotion">
                              <div class="business-detail-top-div-promotion-outer">
                                 <div class="business-detail-top-div-promotion-inner">
                                    <?php $promotion_file = public_path(). "/business/listings/promotion/".$business->snipshot; ?>
                                    @if ($business->snipshot !="" && file_exists($promotion_file))
                                        <img src="{{asset('business/assets/lib/lazy-loading/promotion.gif')}}" alt="" class='lazy-loading' data-src="{{asset('business/listings/promotion')}}/{{$business->snipshot}}">
                                    @else
                                        <img src="{{asset('business/assets/lib/lazy-loading/promotion.gif')}}" alt="" class='lazy-loading' data-src="{{asset('business/assets/images/default/promotion-default.png')}}">
                                    @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="business-detail-section">
                  <div class="business-detail-section-outer">
                     <div class="business-detail-section-inner">
                        <div class="container">
                           <div class="business-detail-section-main">
                              <div class="business-detail-sidebar">
                                 <div class="business-detail-sidebar-outer">
                                    <div class="business-detail-sidebar-inner">
                                       <div class="business-detail-supplier-rank">
                                          <div class="business-detail-supplier-rank-outer">
                                             <div class="business-detail-supplier-rank-inner">
                                                <div class="business-detail-supplier-rank-text">
                                                   Supplier Rank
                                                </div>
                                                <div class="business-detail-supplier-rank-stars">
                                                   <div class="business-detail-supplier-rank-stars-inner">
                                                      @for($i=1; $i<=$business->ranking_stars; $i++)
                                                         @if($business->ranking_stars == 3 && $i==2)
                                                               <img src="{{asset('business/assets/images/icons/star.png')}}" style='transform:scale(1.5)' alt="">
                                                         @else
                                                               <img src="{{asset('business/assets/images/icons/star.png')}}" alt="">
                                                         @endif
                                                      @endfor
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="business-detail-view-map">
                                          <div class="business-detail-view-map-outer">
                                             <div class="business-detail-view-map-inner">
                                                <div class="all-searchs-main-filter-map">
                                                    <div class="all-searchs-main-filter-map-outer">
                                                        <div class="all-searchs-main-filter-map-inner">
                                                            <img src="{{asset('business/assets/images/home/image-000.jpg')}}" alt="">
                                                            <div class="all-searchs-main-filter-map-overlay">
                                                                <div class="all-searchs-main-filter-map-overly-inner">
                                                                    <div class="all-searchs-main-filter-map-overly-text">
                                                                        <span class="ti-location-pin"></span>
                                                                        <span class="overly-text">View Map</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="business-detail-hours">
                                          <div class="business-detail-hours-outer">
                                             <div class="business-detail-hours-inner">
                                                <div class="business-detail-hours-title">
                                                   Business Hours
                                                </div>
                                                <div class="business-detail-hours-text-outer">
                                                   <div class="business-detail-hours-text-inner">
                                                      @if($business->mon_open_time != "" && $business->mon_close_time != "")
                                                      <div class="business-detail-hours-text">
                                                         <span class="day">Monday</span>
                                                         <span class="time"><?php time_converter($business->mon_open_time); ?> - <?php time_converter($business->mon_close_time); ?></span>
                                                      </div>
                                                      @endif
                                                      @if($business->tue_open_time != "" && $business->tue_close_time != "")
                                                      <div class="business-detail-hours-text">
                                                         <span class="day">Tuesday</span>
                                                         <span class="time"><?php time_converter($business->tue_open_time); ?> - <?php time_converter($business->tue_close_time); ?></span>
                                                      </div>
                                                      @endif
                                                      @if($business->wed_open_time != "" && $business->wed_close_time != "")
                                                      <div class="business-detail-hours-text">
                                                         <span class="day">Wednesday</span>
                                                         <span class="time"><?php time_converter($business->wed_open_time); ?> - <?php time_converter($business->wed_close_time); ?></span>
                                                      </div>
                                                      @endif
                                                      @if($business->thu_open_time != "" && $business->thu_close_time != "")
                                                      <div class="business-detail-hours-text">
                                                         <span class="day">Thursday</span>
                                                         <span class="time"><?php time_converter($business->thu_open_time); ?> - <?php time_converter($business->thu_close_time); ?></span>
                                                      </div>
                                                      @endif
                                                      @if($business->fri_open_time != "" && $business->fri_close_time != "")
                                                      <div class="business-detail-hours-text">
                                                         <span class="day">Frieday</span>
                                                         <span class="time"><?php time_converter($business->fri_open_time); ?> - <?php time_converter($business->fri_close_time); ?></span>
                                                      </div>
                                                      @endif
                                                      @if($business->sat_open_time != "" && $business->sat_close_time != "")
                                                      <div class="business-detail-hours-text">
                                                         <span class="day">Saturday</span>
                                                         <span class="time"><?php time_converter($business->sat_open_time); ?> - <?php time_converter($business->sat_close_time); ?></span>
                                                      </div>
                                                      @endif
                                                      @if($business->sun_open_time != "" && $business->sun_close_time != "")
                                                      <div class="business-detail-hours-text">
                                                         <span class="day">Sunday</span>
                                                         <span class="time"><?php time_converter($business->sun_open_time); ?> - <?php time_converter($business->sun_close_time); ?></span>
                                                      </div>
                                                      @endif
                                                   </div>
                                                </div>
                                                <div class="business-detail-hours-local-time d-none">
                                                   <div class="business-detail-hours-local-time-text">
                                                      Local time 12:43pm
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="business-detail-content">
                                 <div class="business-detail-content-outer">
                                    <div class="business-detail-content-inner">
                                       <div class="business-detail-content-main">
                                          <div class="business-detail-content-box">
                                             <div class="business-detail-content-box-inner">
                                                <div class="business-detail-content-box-title">
                                                   Business overview
                                                </div>
                                                <div class="business-detail-content-box-content">
                                                    House building, extensions and renovation, covering all areas from brickwork to joinery.
                                                    We are a seasoned team of quality builders who have been helping homeowners in the Kensington & Chelsea/Wandsworth areas for some time. We have an experienced and disciplined team who have completed
                                                    many projects through out our areas of operation; indeed we can help you complete all types of home improvements and extensions/conversions. We pride ourselves on our impeccably high standards and always strive to
                                                    deliver on time within budget.
                                                </div>
                                             </div>
                                          </div>
                                          <div class="business-detail-content-box">
                                             <div class="business-detail-content-box-inner">
                                                <div class="business-detail-content-box-title">
                                                   Services
                                                </div>
                                                <div class="business-detail-content-box-content">
                                                   <div class="business-service-content">
                                                      <div class="business-service-content-outer">
                                                         <div class="business-service-content-inner">
                                                            <div class="all-category-div">
                                                                <div class="all-category-div-inner">
                                                                    <ul class="all-category-ul">
                                                                    @if($business->stitle_1 != '')
                                                                  <li class="all-category-li">
                                                                     <span class="color-gray"><?php  echo $business->stitle_1; ?></span>
                                                                  </li>
                                                                  @endif
                                                                  @if($business->stitle_2 != '')
                                                                  <li class="all-category-li">
                                                                     <span class="color-gray"><?php  echo $business->stitle_2; ?></span>
                                                                  </li>
                                                                  @endif
                                                                  @if($business->stitle_3 != '')
                                                                  <li class="all-category-li">
                                                                     <span class="color-gray"><?php  echo $business->stitle_3; ?></span>
                                                                  </li>
                                                                  @endif
                                                                  @if($business->stitle_4 != '')
                                                                  <li class="all-category-li">
                                                                     <span class="color-gray"><?php  echo $business->stitle_4; ?></span>
                                                                  </li>
                                                                  @endif
                                                                  @if($business->stitle_5 != '')
                                                                  <li class="all-category-li">
                                                                     <span class="color-gray"><?php  echo $business->stitle_5; ?></span>
                                                                  </li>
                                                                  @endif
                                                                  @if($business->stitle_6 != '')
                                                                  <li class="all-category-li">
                                                                     <span class="color-gray"><?php  echo $business->stitle_6; ?></span>
                                                                  </li>
                                                                  @endif
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="business-detail-content-box">
                                             <div class="business-detail-content-box-inner">
                                                <div class="business-detail-content-box-title">
                                                   Galleries
                                                </div>
                                                <div class="business-detail-content-box-content">
                                                   <div class="business-gallery-content">
                                                      <div class="business-gallery-content-outer">
                                                         <div class="business-gallery-content-inner">
                                                            <div class="business-gallery-slider">
                                                               <div class="business-gallery-slider-outer">
                                                                  <div class="business-gallery-slider-inner">
                                                                     <div class="business-gallery-slider-controller left">
                                                                        <div class="business-gallery-slider-controller-inner">
                                                                           <div class="business-gallery-slider-controller-arrow">
                                                                              <span class="icon"><span class="ti-angle-left"></span></span>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="business-gallery-slider-main">
                                                                        <div class="business-gallery-slider-main-outer">
                                                                           <div class="business-gallery-slider-inner">
                                                                              <div class="business-gallery-slider-slide">
                                                                                 <img src="{{asset('business/assets/images/business-detail/galery.jpg')}}" alt="">
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                     <div class="business-gallery-slider-controller right">
                                                                        <div class="business-gallery-slider-controller-inner">
                                                                           <div class="business-gallery-slider-controller-arrow">
                                                                              <span class="icon"><span class="ti-angle-right"></span></span>
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
                                          <div class="business-detail-content-box" id='write-review'>
                                             <div class="business-detail-content-box-inner">
                                                <div class="business-detail-content-box-title">
                                                   <div class="write-review-text">
                                                      Write a Review
                                                   </div>
                                                   <div class="write-review-rating">
                                                      <div class="write-review-rating-text">Rating</div>
                                                      <div class="write-review-rating-stars">
                                                         <span class="icon" data-rating='1'><span class="ti-star"></span></span>
                                                         <span class="icon" data-rating='2'><span class="ti-star"></span></span>
                                                         <span class="icon" data-rating='3'><span class="ti-star"></span></span>
                                                         <span class="icon" data-rating='4'><span class="ti-star"></span></span>
                                                         <span class="icon" data-rating='5'><span class="ti-star"></span></span>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="business-detail-content-box-content">
                                                   <div class="write-review-form">
                                                      <div class="write-review-form-outer">
                                                         <div class="write-review-form-inner">
                                                            <div class="write-review-form-main">
                                                               <form action="{{url('business/detail/save/review')}}" method='POST'>
                                                                  <input type="hidden" name='listing_id' value='{{$business->id}}'>
                                                                  <input type="hidden" name='rating' value='3' id="review-rating">
                                                                  @csrf
                                                                  @if(session()->has('success'))
                                                                     <div class="text-success text-center" id='success-message'>{{ session()->get('success') }}</div>
                                                                  @endif
                                                                  <div class="write-review-form-box">
                                                                     <div class="write-review-form-field">
                                                                        <input type="text" placeholder='Title of your Review' class='field' name='title' required>
                                                                     </div>
                                                                     <div class="write-review-form-field">
                                                                        <textarea name='review' id="" cols="30" rows="10" class='field' placeholder="Comment" required></textarea>
                                                                     </div>
                                                                     @if(auth()->user())
                                                                        @if(auth()->user()->portal_type == "dashboard")
                                                                        <div class="write-review-form-fields">
                                                                           <input type="text" placeholder='Your Name' class='field'  name='name' required>
                                                                           <input type="email" placeholder='Your Email' class='field'  name='email' required>
                                                                        </div>
                                                                        @endif
                                                                     @else
                                                                     <div class="write-review-form-fields">
                                                                        <input type="text" placeholder='Your Name' class='field'  name='name' required>
                                                                        <input type="email" placeholder='Your Email' class='field'  name='email' required>
                                                                     </div>
                                                                     @endif
                                                                     <!-- <div class="write-review-form-agree">
                                                                        <label class='d-block'>
                                                                        <input type="checkbox">
                                                                        <span class='text'>Save my name, email, and website in this browser for the next time I comment.</span>
                                                                        </label>
                                                                     </div> -->
                                                                     <div class="write-review-buttons">
                                                                        <div class="write-review-buttons-outer">
                                                                           <div class="write-review-buttons-inner">
                                                                              @if(!auth()->user())
                                                                                 <a href='#' class='btn link'>Login & Signup</a>
                                                                              @endif
                                                                              <button class='btn submit'>Submit</button>
                                                                           </div>
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
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @if(isset($reviews))
                           <div class="what-other-say">
                              <div class="what-other-say-outer">
                                 <div class="what-other-say-inner">
                                    <div class="what-other-say-main">
                                       <div class="what-other-say-title">
                                          <div class="what-other-say-title-outer">
                                             <div class="what-other-say-title-inner">
                                                What other say’s
                                             </div>
                                          </div>
                                       </div>
                                       <div class="what-other-says-all-review">
                                          <div class="what-other-says-all-review-outer">
                                             <div class="what-other-says-all-review-inner">
                                                <?php $review_counter = 1;?>
                                                @foreach($reviews AS $review)
                                                <div class="what-other-says-single-review reviwe-{{$review_counter}} single-review" <?php echo ($review_counter > 3) ? "style='display:none'" : "" ;?>>
                                                   <div class="what-other-says-single-review-outer">
                                                      <div class="what-other-says-single-review-inner">
                                                         <div class="what-other-says-single-review-content">
                                                            <div class="what-other-says-single-review-title">
                                                               @if($review->name == "")
                                                               {{get_field($review->user_id,'first_name','users','id')}} {{get_field($review->user_id,'last_name','users','id')}}
                                                               @else
                                                               {{$review->name}}
                                                               @endif
                                                            </div>
                                                            <div class="what-other-says-single-review-title-bottom">
                                                               Salford | Supermarkets
                                                            </div>
                                                            <div class="what-other-says-single-review-text">
                                                               {{$review->title}}
                                                            </div>
                                                            <div class="what-other-says-single-review-stars">
                                                               @for($i=0; $i<$review->rating; $i++)
                                                                  <span class="icon"><span class="ti-star"></span></span>
                                                               @endfor
                                                            </div>
                                                            <div class="what-other-says-single-review-text-bottom">
                                                               <div class="what-other-says-single-review-text-bottom-outer">
                                                                  <div class="what-other-says-single-review-text-bottom-inner">
                                                                     {{$review->review}}
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="what-other-says-single-review-date">
                                                            {{convert_date($review->created_at)}}
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="devider"></div>
                                                </div>
                                                <?php $review_counter++ ?>
                                                @endforeach
                                          <div class="what-other-says-single-review-button">
                                             <div class="what-other-says-single-review-button-outer">
                                                <button id='view-more-reviews' data-range="3">Load More</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      @include('home.site-layout.footer')
      @include('home.site-layout.script')
      <script>
         $(function() {
               $('.lazy-loading').lazy({
                  scrollDirection: 'vertical',
                  effect: 'fadeIn',
                  visibleOnly: true,
               });
         });
         $(document).ready(function() {
            $("#search-button") .click(function() {
               var term_val = $('#search-term').val();
               var location_val = $('#search-location').val();
               term_val = (term_val == '') ? '' : term_val;
               location_val = (location_val == '') ? '' : location_val;
               window.location.href = "{{url('business/search')}}?meta=&category=&term="+term_val+"&location="+location_val+"&services=";
            });

            $("#search-button-mob") .click(function() {
               var term_val = $('#search-term-mob').val();
               var location_val = $('#search-location-mob').val();
               term_val = (term_val == '') ? '' : term_val;
               location_val = (location_val == '') ? '' : location_val;
               window.location.href = "{{url('business/search')}}?meta=&category=&term="+term_val+"&location="+location_val+"&services=";
            });
        });
        $(document).ready(function() {
           $("#view-more-reviews").click(function() {
              $('.single-review').show();
              $("#view-more-reviews").hide();
           });

           $(".write-review-rating-stars .icon").click(function() {
               $(".write-review-rating-stars .icon").css("color","#000");
               var index = $(this).index();
               var rating = $(this).attr('data-rating');
               var total_rating = $(".write-review-rating-stars .icon").length;
               for(var i=0; i<=index; i++) {
                  $(".write-review-rating-stars .icon:eq("+i+")").css("color","#e87526");
               }
               $("#review-rating").val(rating);
           });
           $(".write-review-rating-stars .icon").mouseover(function() {
               $(".write-review-rating-stars .icon").css("color","#000");
               var index = $(this).index();
               var rating = $(this).attr('data-rating');
               var total_rating = $(".write-review-rating-stars .icon").length;
               for(var i=0; i<=index; i++) {
                  $(".write-review-rating-stars .icon:eq("+i+")").css("color","#e87526");
               }
               $("#review-rating").val(rating);
           });
        });
      </script>
   </body>
</html>
