<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{$page_name}} | Sahaa.me</title>
      <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
        <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CT19N7GEB1');
        </script>
      <link rel="stylesheet" href="{{asset('frontend/assets/icon/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}?v={{rand(0,1000)}}">
      <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}?v={{rand(0,1000)}}">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- CSS -->
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   </head>
   <body>
    @include('frontend/include.top-bar')
    <section class="section-main-page">
        <div class="main-page-inner">
            <div class="main-page-inner-main">
                <div class="main-page-header">
                    <div class="container">
                        <div class="main-page-header-inner">
                            <div class="site-logo-outer-search">
                                <div class="site-logo-outer">
                                    <div class="site-logo-inner">
                                        <div class="site-logo-main">
                                            <a href="{{url('/')}}"><img src="{{asset('business/assets/images/logo/logo.png')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobile-navigation">
                                    <div class="mobile-navigation-outer">
                                        <div class="mobile-navigation-inner">
                                            <div class="user-icon">
                                            @if(Auth::check())
                                                @if(auth()->user()->user_portal == "profile")
                                                    <a href="{{url('guest/profile')}}"><span class="ti-user"></span></a>
                                                @elseif(auth()->user()->user_portal == "dashboard")
                                                    <a href="{{url('dashboard')}}"><span class="ti-user"></span></a>
                                                @endif
                                            @else
                                                <a href="{{url('guest/login')}}"></a><span class="ti-user"></span>
                                            @endif
                                            </div>
                                            <div class="menu-icon">
                                                <span class="ti-menu"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="site-login-outer">
                                <div class="site-login-inner">
                                    <div class="site-login-main">
                                        <div class="site-login-icon-outer">
                                        @if(Auth::check())
                                                @if(auth()->user()->user_portal == "profile")
                                                <a href="#">
                                                    <div class="user-login-icon profile-menu">
                                                        <span class="ti-user"></span>
                                                        <span class="login-text"> Profile</span>
                                                        <span class="ti-angle-right"></span>
                                                        <div class="user-profile-menu">
                                                            <ul>
                                                                <li>
                                                                    <a href="{{url('guest/profile')}}">Profile</a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{url('guest/review')}}">Reviews</a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{url('guest/logout')}}" class='text-danger'>Logout</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                                @elseif(auth()->user()->user_portal == "dashboard")
                                                <a href="{{url('dashboard')}}">
                                                    <div class="user-login-icon profile-menu">
                                                        <span class="ti-user"></span>
                                                        <span class="login-text"> Dashboard</span>
                                                        <span class="ti-angle-right"></span>
                                                    </div>
                                                </a>
                                                @endif
                                            @else
                                                <a href="{{url('guest/login')}}">
                                                    <div class="user-login-icon">
                                                        <span class="ti-user"></span>
                                                        <span class="login-text">Login</span>
                                                        <span class="ti-angle-right"></span>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      @yield('container')
      <footer class="footer-section">
      <div class="footer-about-section">
            <div class="container">
                <div class="footer-about-outer">
                    <div class="footer-about-inner">
                        <div class="footer-about-main">
                            <div class="footer-about-main-text">
                                About Us
                            </div>
                            <div class="footer-about-main-links">
                                <div class="footer-about-main-links-outer">
                                     <div class="footer-about-main-links-inner">
                                        <span class="footer-about0us-link"><a href="{{url('about')}}" style="color: #b3adad">About Sahaa.me</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('edit-my-business-listing')}}" style="color: #b3adad">Business listings</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('help-support')}}" style="color: #b3adad">Help &amp; Support</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('sahaa-app')}}" style="color: #b3adad">Sahaa App</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="#" style="color: #b3adad">Sahaa Blogs</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('review-businesses')}}" style="color: #b3adad">Sahaa Reviews</a></span>
                                    </div>
                                    <div class="footer-about-main-links-button">
                                        <a href="mailto:advertise@sahaa.me">Adertise with Sahaa: advertise@sahaa.me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-about-outer">
                    <div class="footer-about-inner">
                        <div class="footer-about-main">
                            <div class="footer-about-main-text">
                                Our Businesses &amp; Services
                            </div>
                            <div class="footer-about-main-links">
                                <div class="footer-about-main-links-outer">
                                    <div class="footer-about-main-links-inner">
                                        <span class="footer-about0us-link"><a href="{{url('digital-marketing')}}" style="color: #b3adad">Digital Marketing</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Result-Driven Services</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Google Ads</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('social-media-advertising')}}" style="color: #b3adad">Social Media Ads</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('seacrh-engine-optimization')}}" style="color: #b3adad">SEO</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('smart-websites')}}" style="color: #b3adad">Websites</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('video-marketing')}}" style="color: #b3adad">Videos</a></span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link"><a href="{{url('free-digital-marketing')}}" style="color: #b3adad">Free Digital Marketing</a> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-about-outer">
                    <div class="footer-about-inner">
                        <div class="footer-about-main">
                            <div class="footer-about-main-text">
                                News &amp; Blogs
                            </div>
                            <div class="footer-about-main-links">
                                <div class="footer-about-main-links-outer">
                                    <div class="footer-about-main-links-inner">
                                        <span class="footer-about0us-link">Result-Driven Services</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Latest Blogs</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Service Blogs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-about-main">
                    <div class="footer-about-main-text">
                        Login & Signup
                    </div>
                    <div class="footer-about-main-links">
                        <div class="footer-about-main-links-outer">
                            <div class="footer-about-main-links-inner">
                                <span class="footer-about0us-link"><a href="{{url('guest/login')}}" style="color: #b3adad">Login</a></span>
                                <span class="side-devider">|</span>
                                <span class="footer-about0us-link"><a href="{{url('guest/signup')}}" style="color: #b3adad">SignUp</a></span>
                                <span class="side-devider">|</span>
                                <span class="footer-about0us-link"><a href="{{url('portal/login')}}" style="color: #b3adad">Portal Login</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-about-text-div">
                    Disclaimer: The opinions expressed within Reviews are those of the author and not the views or opinions of Yell Limited. Registered Office: 3 Forbury Place, Forbury Road, Reading, Berkshire, RG1 3YL. Registered in England and Wales No. 4205228 VAT Number: GB 765 346 017. © Yell Limited 2021. All rights reserved. Yell, Yellow Pages and other ™ are trademarks of Yell Limited.
                </div>
                <div class="footer-about-main-links">
                    <div class="footer-about-main-links-outer">
                        <div class="footer-about-main-links-inner">
                            <span class="footer-about0us-link">Privacy Policy</span>
                            <span class="side-devider">|</span>
                            <span class="footer-about0us-link">Terms &amp; Conditions</span>
                            <span class="side-devider">|</span>
                            <span class="footer-about0us-link">Review Policy</span>
                            <span class="side-devider">|</span>
                            <span class="footer-about0us-link">Legal</span>
                            <span class="side-devider">|</span>
                            <span class="footer-about0us-link">Accessibility Statement</span>
                        </div>
                    </div>
                </div>
                <div class="p-2"></div>
                <div class="footer-bottom">
                    <div class="footer-bottom-outer">
                        <div class="footer-bottom-inner">
                            <div class="footer-bottom-text">
                                <div class="site-logo-main">
                                    <a href="{{url('/')}}"><img src="{{asset('business/assets/images/logo/logo.png')}}" alt=""></a>
                                </div>
                                <span class='text'>Sahaa Limited 2022</span>
                            </div>
                            <div class="social-follow-icon">
                                <div class="social-follow-icon-outer">
                                    <div class="social-follow-icon-inner">
                                        <a href="https://www.facebook.com/Sahaa.me.uae"><span class='ti-facebook'></span></a>
                                        <a href="https://twitter.com/Sahaa_me2022"><span class='ti-twitter'></span></a>
                                        <a href="https://www.instagram.com/sahaa.me/"><span class='ti-instagram'></span></a>
                                        <a href="https://www.youtube.com/channel/UCZQBifnwxVKy4kUUOF4fTOA"><span class='ti-youtube'></span></a>
                                        <a href="https://www.linkedin.com/company/76628889/admin/"><span class='ti-linkedin'></span></a>
                                        <a href="https://www.pinterest.com/business/hub/"><span class='ti-pinterest'></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </footer>
      <div class="mobile-menu-container">
        <div class="mobile-menu-container-outer">
            <div class="mobile-menu-container-inner">
                <div class="mobile-menu-box">
                    <div class="site-logo-outer">
                        <div class="site-logo-inner mobile-navigation">
                            <div class="site-logo-main">
                                <a href="{{url('/')}}"><img src="{{asset('business/assets/images/logo/logo.png')}}" alt=""></a>
                            </div>
                            <div class="mobile-navigation-close-btn">
                                <span class='ti-close'></span>
                            </div>
                        </div>
                    </div>
                    <ul class='mobile-menu-ul'>
                        @if(Auth::check())
                            @if(auth()->user()->user_portal == "profile")
                                <li class='mobile-menu-li'><a href="{{url('guest/profile')}}">Profile</a></li>
                                <li class='mobile-menu-li'><a href="{{url('guest/profile/reviews')}}">Reviews</a></li>
                                <li class='mobile-menu-li'><a href="{{url('guest/logout')}}" class='text-danger'>Logout</a></li>
                            @elseif(auth()->user()->user_portal == "dashboard")
                                <li class='mobile-menu-li'><a href="{{url('dashboard')}}">Dashboard</a></li>
                                <li class='mobile-menu-li'><a href="{{url('logout')}}" class='text-danger'>Logout</a></li>
                            @endif
                        @else{
                            <li class='mobile-menu-li'><a href="{{url('guest/login')}}">Login</a></li>
                            <li class='mobile-menu-li'><a href="{{url('guest/signup')}}">Sign Up</a></li>
                        @endif
                        <li class='mobile-menu-li'><a href="{{url('/')}}">Sahaa.me</a></li>
                        <li class='mobile-menu-li'><a href="{{url('/membership')}}">Shaaa Promotion</a></li>
                        <li class='mobile-menu-li'><a href="{{url('/sahaa-app')}}">Download the app</a></li>
                        <li class='mobile-menu-li'><a href="{{url('/add-listing-to-sahaa')}}">Get a free Listing</a></li>
                    </ul>
                    <div class="footer-about-main-links-button d-block">
                        <a href="mailto:advertise@sahaa.me">Adertise with Sahaa: advertise@sahaa.me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('business/assets/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('business/assets/lib/jquery/jquery-ui.js')}}"></script>
<script src="{{asset('business/assets/lib/slider/owl/owl.js')}}"></script>
<script src="{{asset('business/assets/lib/lazy-loading/jquery.lazy.min.js')}}"></script>
<script>

$('.mobile-navigation-close-btn').click(function() {
    $('.mobile-menu-container').hide();
    $('body').addClass('body-show-mobile-nav');
})

$('.menu-icon').click(function() {
    $('.mobile-menu-container').fadeIn();
    $('body').removeClass('body-show-mobile-nav');
})
</script>
   </body>
</html>
