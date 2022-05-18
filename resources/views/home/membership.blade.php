<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion | Sahaa.me</title>
    <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CT19N7GEB1');
    </script>
    @include('home/site-layout.style')
</head>
<body>
@include('home/site-layout.top-bar')
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
                                                                    <a href="{{url('guest/profile/reviews')}}">Reviews</a>
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
    <section class="member-ship">
        <div class="member-ship-outer">
            <div class="member-ship-inner">
                <div class="container">
                    <div class="member-ship-main">
                        <!-- Grow Business Start -->
                        <div class="grow-your-business">
                            <div class="grow-your-business-outer">
                                <!-- <img src="{{asset('business/assets/images/member-ship/grow-business.png')}}" alt="">
                                <div class="grow-your-business-overlay">
                                    <img src="{{asset('business/assets/images/member-ship/call.png')}}" alt="">
                                </div> -->
                                <div class="grow-your-business-inner">
                                    <div class="grow-your-business-main">
                                        <div class="grow-your-business-text">
                                        <img src="{{asset('business/assets/images/member-ship/grow-business-text.png')}}" alt="">
                                        </div>
                                        <div class="grow-your-business-grid">
                                            <div class="grow-your-business-grid-outer">
                                                <div class="grow-your-business-grid-inner">
                                                    <div class="grow-your-business-grid-inner-row">
                                                        <div class="grow-your-business-grid-inner-col">
                                                            <div class="grow-your-business-grid-inner-col-main">
                                                                <a href="#">
                                                                    <span class='icon'>
                                                                        <img src="{{asset('business/assets/images/member-ship/free-digital-marketing.png')}}" alt="">
                                                                    </span>
                                                                    <span class="text">
                                                                        Free Digital Marketing
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="grow-your-business-grid-inner-col">
                                                            <div class="grow-your-business-grid-inner-col-main">
                                                                <a href="#">
                                                                    <span class='icon'>
                                                                        <img src="{{asset('business/assets/images/member-ship/free-account-managment.png')}}" alt="">
                                                                    </span>
                                                                    <span class="text">
                                                                        Free Account Management
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grow-your-business-grid-inner-row bg" style="background-image:url({{asset('business/assets/images/member-ship/grow-bg.png')}})">
                                                        <div class="grow-your-business-grid-inner-col">
                                                            <div class="grow-your-business-grid-inner-col-main">
                                                                <a href="#">
                                                                    <span class='icon'>
                                                                        <img src="{{asset('business/assets/images/member-ship/free-training.png')}}" alt="">
                                                                    </span>
                                                                    <span class="text">
                                                                        Free Training
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="grow-your-business-grid-inner-col">
                                                            <div class="grow-your-business-grid-inner-col-main">
                                                                <a href="#">
                                                                    <span class='icon'>
                                                                        <img src="{{asset('business/assets/images/member-ship/mini-site.png')}}" alt="">
                                                                    </span>
                                                                    <span class="text">
                                                                        Mini-Site
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grow-your-business-grid-inner-row">
                                                        <div class="grow-your-business-grid-inner-col">
                                                            <div class="grow-your-business-grid-inner-col-main">
                                                                <a href="#">
                                                                    <span class='icon'>
                                                                        <img src="{{asset('business/assets/images/member-ship/branding.png')}}" alt="">
                                                                    </span>
                                                                    <span class="text">
                                                                        Branding
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="grow-your-business-grid-inner-col">
                                                            <div class="grow-your-business-grid-inner-col-main">
                                                                <a href="#">
                                                                    <span class='icon'>
                                                                        <img src="{{asset('business/assets/images/member-ship/content-creation.png')}}" alt="">
                                                                    </span>
                                                                    <span class="text">
                                                                        Content Creation
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grow-your-business-grid-inner-row bg" style="background-image:url({{asset('business/assets/images/member-ship/grow-bg.png')}})">
                                                        <div class="grow-your-business-grid-inner-col-image">
                                                            <div class="grow-your-business-grid-inner-col-image-inner">
                                                                    <a href="{{url('schedual-call')}}">
                                                                        <img src="{{asset('business/assets/images/member-ship/call.png')}}" alt="">
                                                                    </a>
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
                        <!-- Grow Business End -->
                        <!-- Why Work Start -->
                        <div class="why-work" style="background-image:url({{asset('business/assets/images/member-ship/why-work-bg.png')}})">
                        <!-- <div class="why-work"> -->
                            <div class="why-work-inner">
                                <!-- <img src="{{asset('business/assets/images/member-ship/why-work.png')}}" alt=""> -->
                                <div class="why-work-inner-outer">  
                                    <div class="why-work-inner-outer-main">
                                        <div class="why-work-main">
                                            <div class="why-work-main-text">
                                                Why work with Sahaa.me ?
                                            </div>
                                            <div class="why-work-main-text-bottom">
                                                Every membership gives you access to a suite of business boosting features.
                                            </div>
                                        </div>
                                        <div class="why-work-main-grid">
                                            <div class="why-work-main-grid-outer">
                                                <div class="why-work-main-grid-inner">
                                                    <div class="why-work-main-grid-col">
                                                        <div class="why-work-main-grid-col-outer">
                                                            <div class="why-work-main-grid-col-inner">
                                                                <div class="why-work-main-grid-col-image">
                                                                    <div class="why-work-main-grid-col-image-outer">
                                                                        <img src="{{asset('business/assets/images/member-ship/no-1.png')}}" alt="">
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text">
                                                                        #No1
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text-bottom">
                                                                        (B2C Plat Form)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="why-work-main-grid-col">
                                                        <div class="why-work-main-grid-col-outer">
                                                            <div class="why-work-main-grid-col-inner">
                                                                <div class="why-work-main-grid-col-image">
                                                                    <div class="why-work-main-grid-col-image-outer">
                                                                        <img src="{{asset('business/assets/images/member-ship/business.png')}}" alt="">
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text">
                                                                        500k+
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text-bottom">
                                                                        (Online Business on the Platform)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="why-work-main-grid-col">
                                                        <div class="why-work-main-grid-col-outer">
                                                            <div class="why-work-main-grid-col-inner">
                                                                <div class="why-work-main-grid-col-image">
                                                                    <div class="why-work-main-grid-col-image-outer">
                                                                        <img src="{{asset('business/assets/images/member-ship/categories.png')}}" alt="">
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text">
                                                                        300+
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text-bottom">
                                                                        (Business Categories)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="why-work-main-grid-col">
                                                        <div class="why-work-main-grid-col-outer">
                                                            <div class="why-work-main-grid-col-inner">
                                                                <div class="why-work-main-grid-col-image">
                                                                    <div class="why-work-main-grid-col-image-outer">
                                                                        <img src="{{asset('business/assets/images/member-ship/digital-marketing.png')}}" alt="">
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text">
                                                                        Free Digital Marketing
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text-bottom">
                                                                        (Till 2023)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="why-work-main-grid-col">
                                                        <div class="why-work-main-grid-col-outer">
                                                            <div class="why-work-main-grid-col-inner">
                                                                <div class="why-work-main-grid-col-image">
                                                                    <div class="why-work-main-grid-col-image-outer">
                                                                        <img src="{{asset('business/assets/images/member-ship/no-1.png')}}" alt="">
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text">
                                                                        10k+
                                                                    </div>
                                                                    <div class="why-work-main-grid-col-text-bottom">
                                                                        (Active Inquiries from Around UAE)
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
                        <!-- Why Work End -->
                        <!-- How Sahaa is Doing Start -->
                        <div class="how-sahaa-is-doing">
                            <div class="how-sahaa-is-doing-outer">
                                <div class="how-sahaa-is-doing-text">
                                    How Sahaa.me is doing this?
                                </div>
                                <div class="how-sahaa-is-doing-outer">
                                    <!-- <img src="{{asset('business/assets/images/member-ship/how-sahaa.png')}}" alt=""> -->
                                </div>
                            </div>
                        </div>
                        <!-- How Sahaa is Doing End -->
                        <!-- Exclusive Servoces Start -->
                        <div class="exclusive-services">
                            <div class="exclusive-services-outer">
                                <div class="exclusive-services-outer">
                                    <!-- <img src="{{asset('business/assets/images/member-ship/services.png')}}" alt=""> -->
                                </div>
                            </div>
                        </div>
                        <!-- Exclusive Servoces End -->
                        <!-- MemberShip Plane Start -->
                        <div class="member-ship-plan">
                            <div class="member-ship-plan-outer">
                                <div class="member-ship-plan-inner">
                                    <div class="member-ship-plan-banner">
                                        <!-- <img src="{{asset('business/assets/images/member-ship/membership-banner.png')}}" alt=""> -->
                                    </div>
                                    <div class="member-ship-plan-table">
                                        <div class="member-ship-plan-table-outer">
                                            <div class="member-ship-plan-table-inner">
                                                <div class="member-ship-plan-table-grid">
                                                    <div class="member-ship-plan-table-col active member-ship-plan plan-01">
                                                        <div class="member-ship-plan-table-col-outer">
                                                            <div class="member-ship-plan-table-inner">
                                                                <div class="member-ship-plan-table-top-stars">
                                                                    <div class="member-ship-plan-table-top-stars-outer">
                                                                        <img src="{{asset('business/assets/images/member-ship/1-star.png')}}" alt="">
                                                                    </div>
                                                                    <div class="member-ship-plan-table-verified"></div>
                                                                </div>
                                                                <div class="member-ship-plan-table-price">
                                                                    <div class="member-ship-plan-table-price-outer">
                                                                        <div class="member-ship-plan-table-price-inner">
                                                                            <span class='text'>Free</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="member-ship-plan-table-plane-name">
                                                                    Basic Package Includes
                                                                </div>
                                                                <div class="member-ship-plan-table-plan-detail">
                                                                    <div class="member-ship-plan-table-plan-detail-outer">
                                                                        <div class="member-ship-plan-table-plan-detail-inner">
                                                                            <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Free Listing</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li click" data-modal='#free_digital_marketing-free-plane'><span class="icon"><span class='ti-check'></span></span><span class="text">Free Digital Marketing till 2023</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon red"><span class='ti-close'></span></span><span class="text">Dynamic Website</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon red"><span class='ti-close'></span></span><span class="text">Branding</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Free Training</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon red"><span class='ti-close'></span></span><span class="text">Free Sahaa Business Dashboard</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon red"><span class='ti-close'></span></span><span class="text">Customer Account manager</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Marketing Advisor</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">1 Year Complete Support </span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sign-up-button">
                                                                    <a href="{{url('schedual-call')}}">Schedule a Consultation Call</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="member-ship-plan-table-col active member-ship-plan plan-02">
                                                        <div class="member-ship-plan-table-col-outer">
                                                            <div class="member-ship-plan-table-inner">
                                                                <div class="member-ship-plan-table-top-stars">
                                                                    <div class="member-ship-plan-table-top-stars-outer bg-black">
                                                                        <img src="{{asset('business/assets/images/member-ship/2-star.png')}}" alt="">
                                                                    </div>
                                                                    <div class="member-ship-plan-table-verified"></div>
                                                                </div>
                                                                <div class="member-ship-plan-table-price bg-black">
                                                                    <div class="member-ship-plan-table-price-outer">
                                                                        <div class="member-ship-plan-table-price-inner">
                                                                            <span class='text'>$ 779</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="member-ship-plan-table-plane-name">
                                                                    Standard (Recomended)<br>
                                                                    Package Includes
                                                                </div>
                                                                <div class="member-ship-plan-table-plan-detail">
                                                                    <div class="member-ship-plan-table-plan-detail-outer">
                                                                        <div class="member-ship-plan-table-plan-detail-inner">
                                                                            <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Free Listing</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li click" data-modal='#free_digital_marketing-standard-plane'><span class="icon"><span class='ti-check'></span></span><span class="text">Free Digital Marketing till 2023</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Dynamic Website</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon red"><span class='ti-close'></span></span><span class="text">Branding</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Free Training</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Free Sahaa Business Dashboard</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Customer Account manager</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Marketing Advisor</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">1 Year Complete Support </span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sign-up-button">
                                                                    <a href="{{url('schedual-call')}}">Schedule a Consultation Call</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="member-ship-plan-table-col active member-ship-plan plan-03">
                                                        <div class="member-ship-plan-table-col-outer">
                                                            <div class="member-ship-plan-table-inner">
                                                                <div class="member-ship-plan-table-top-stars">
                                                                    <div class="member-ship-plan-table-top-stars-outer">
                                                                        <img src="{{asset('business/assets/images/member-ship/3-star.png')}}" alt="">
                                                                    </div>
                                                                    <div class="member-ship-plan-table-verified">
                                                                        <span class='text'>Verified <span class='ti-check'></span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="member-ship-plan-table-price">
                                                                    <div class="member-ship-plan-table-price-outer">
                                                                        <div class="member-ship-plan-table-price-inner">
                                                                            <span class='text'>$ 1449</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="member-ship-plan-table-plane-name">
                                                                    Premium<br>
                                                                    Package Includes
                                                                </div>
                                                                <div class="member-ship-plan-table-plan-detail">
                                                                    <div class="member-ship-plan-table-plan-detail-outer">
                                                                        <div class="member-ship-plan-table-plan-detail-inner">
                                                                            <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Free Listing</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li click" data-modal='#free_digital_marketing-premuim-plane'><span class="icon"><span class='ti-check'></span></span><span class="text">Free Digital Marketing till 2023</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Dynamic Website</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li click" data-modal='#branding-premuim-plane'><span class="icon"><span class='ti-check'></span></span><span class="text">Branding</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Free Training</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Free Sahaa Business Dashboard</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Customer Account manager</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">Marketing Advisor</span></li>
                                                                                <li class="member-ship-plan-table-plan-detail-li"><span class="icon"><span class='ti-check'></span></span><span class="text">1 Year Complete Support </span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="sign-up-button">
                                                                    <a href="{{url('schedual-call')}}">Schedule a Consultation Call</a>
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
                        <!-- MemberShip Plane End -->
                        <!-- Our Work Show Start -->
                        <div class="our-work-show">
                            <div class="our-work-show-outer">
                                <div class="our-work-show-inner">
                                    <img src="{{asset('business/assets/images/member-ship/our-work-show.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Our Work Show End -->
                        <!-- Sahaa Team Start -->
                        <div class="sahaa-team">
                            <div class="sahaa-team-outer">
                                <div class="sahaa-team-inner">
                                    <img src="{{asset('business/assets/images/member-ship/sahaa-team.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Sahaa Team End -->
                        <!-- Our Customers Start -->
                        <div class="what-our-customer-say" style="background-image:url({{asset('business/assets/images/member-ship/our-customer-bg.png')}})">
                            <div class="what-our-customer-say-outer">
                                <div class="what-our-customer-say-inner">
                                    <div class="what-our-customer-say-top-text">
                                        What our customers are saying?
                                    </div>
                                    <div class="what-our-customer-say-bottom-text">
                                        Hear about there experiance with us!
                                    </div>
                                    <div class="what-our-customer-say-slider">
                                        <div class="what-our-customer-say-slider-control prev-review"data-prev='' data-main='' data-next='' >
                                            <div class="what-our-customer-say-slider-control-image">
                                                <div class="what-our-customer-say-slider-control-image-outer">
                                                    <img src="{{asset('business/assets/images/member-ship/user-02.jpg')}}" alt="" class='prev-review-image-div'>
                                                    <div class="what-our-customer-say-slider-control-overlay">
                                                        <div class="what-our-customer-say-slider-control-overlay-outer">
                                                            <span class="ti-arrow-left"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="what-our-customer-say-slider-main-slide">
                                            <div class="what-our-customer-say-slider-main-slide-outer">
                                                <div class="what-our-customer-say-slider-main-slide-inner">
                                                    <div class="what-our-customer-say-slider-main-slide-image">
                                                        <div class="what-our-customer-say-slider-main-slide-inner-image">
                                                            <img src="{{asset('business/assets/images/member-ship/user-01.jpg')}}" alt="" class='review-image-div'>
                                                        </div>
                                                    </div>
                                                    <div class="what-our-customer-say-slider-main-slide-text">
                                                        <div class="what-our-customer-say-slider-main-slide-quote">
                                                            <img src="{{asset('business/assets/images/member-ship/quot.png')}}" alt="" >
                                                        </div>
                                                        <div class="what-our-customer-say-slider-main-slide-customer-text review-text-div">
                                                            It was a great experience with Sahaa, who guided me and
                                                            assisted me in running my business smoothly.
                                                        </div>
                                                        <div class="what-our-customer-say-slider-main-slide-customer-name">
                                                            <div class="name review-name-div">
                                                                FHC Group
                                                            </div>
                                                            <div class="bottom-text d-none">
                                                                UAE Construction Company
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="what-our-customer-say-slider-control next-review" data-prev='' data-main='' data-next='' >
                                            <div class="what-our-customer-say-slider-control-image">
                                                <div class="what-our-customer-say-slider-control-image-outer">
                                                        <img src="{{asset('business/assets/images/member-ship/user-03.jpg')}}" alt="" class='next-review-image-div'>
                                                    <div class="what-our-customer-say-slider-control-overlay">
                                                        <div class="what-our-customer-say-slider-control-overlay-outer">
                                                            <span class="ti-arrow-right"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Our Customers End -->
                        <!-- Join Us Start -->
                        <div class="our-work-show">
                            <div class="our-work-show-outer">
                                <div class="our-work-show-inner">
                                    <img src="{{asset('business/assets/images/member-ship/join-us.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Join Us End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Membership Single Modal Start -->
    <div class="member-ship-modal" id='free_digital_marketing-free-plane'>
        <div class="member-ship-modal-outer">
            <div class="modal-close-button">
                <div class="modal-close-button-inner">
                    <span class='ti-close'></span>
                </div>
            </div>
            <div class="member-ship-modal-inner">
                <div class="member-ship-plan-table">
                    <div class="member-ship-plan-table-outer">
                        <div class="member-ship-plan-table-inner">
                            <div class="member-ship-plan-table-grid">
                                <div class="member-ship-plan-table-col">
                                    <div class="member-ship-plan-table-col-outer">
                                        <div class="member-ship-plan-table-inner">
                                            <div class="member-ship-plan-table-top-stars">
                                                <div class="member-ship-plan-table-top-stars-outer">
                                                    <img src="{{asset('business/assets/images/member-ship/1-star.png')}}" alt="">
                                                </div>
                                                <div class="member-ship-plan-table-verified"></div>
                                            </div>
                                            <div class="member-ship-plan-table-price">
                                                <div class="member-ship-plan-table-price-outer">
                                                    <div class="member-ship-plan-table-price-inner">
                                                        <span class='text'>Free</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member-ship-plan-table-plane-name">
                                                Basic Package Includes
                                            </div>
                                            <div class="member-ship-plan-table-option-name">
                                                        Free Digital Marketing till 2023 
                                                    </div>
                                            <div class="member-ship-table-plan-grid">
                                                <div class="member-ship-table-plan-grid-col">
                                                    <div class="member-ship-plan-table-option-name-bottom">
                                                        Paid Marketing
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">(SEM) Search Engine Marketing</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Google ads</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">5 keywords</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Display ad network</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="member-ship-table-plan-grid-col">
                                                    <div class="member-ship-plan-table-option-name-bottom">
                                                        Organic Marketing
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Optimisation</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sign-up-button">
                                                <a href="{{url('schedual-call')}}">Schedule a Consultation Call</a>
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
    <div class="member-ship-modal" id='free_digital_marketing-standard-plane'>
        <div class="member-ship-modal-outer">
            <div class="modal-close-button">
                <div class="modal-close-button-inner">
                    <span class='ti-close'></span>
                </div>
            </div>
            <div class="member-ship-modal-inner">
                <div class="member-ship-plan-table">
                    <div class="member-ship-plan-table-outer">
                        <div class="member-ship-plan-table-inner">
                            <div class="member-ship-plan-table-grid">
                                <div class="member-ship-plan-table-col">
                                    <div class="member-ship-plan-table-col-outer">
                                        <div class="member-ship-plan-table-inner">
                                            <div class="member-ship-plan-table-top-stars">
                                                <div class="member-ship-plan-table-top-stars-outer bg-black">
                                                    <img src="{{asset('business/assets/images/member-ship/2-star.png')}}" alt="">
                                                </div>
                                                <div class="member-ship-plan-table-verified"></div>
                                            </div>
                                            <div class="member-ship-plan-table-price bg-black">
                                                <div class="member-ship-plan-table-price-outer">
                                                    <div class="member-ship-plan-table-price-inner">
                                                        <span class='text'>$ 779</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member-ship-plan-table-plane-name">
                                                Standard (Recomended)<br>
                                                Package Includes
                                            </div>
                                            <div class="member-ship-plan-table-option-name">
                                                Free Digital Marketing till 2023 
                                            </div>
                                            <div class="member-ship-table-plan-grid">
                                                <div class="member-ship-table-plan-grid-col">
                                                    <div class="member-ship-plan-table-option-name-bottom">
                                                        Paid Marketing
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">(SEM) Search Engine Marketing</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Google ads</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">10 keywords</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Display ad network</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="member-ship-plan-table-option-name-bottom sub">
                                                        Social Media  Ads
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Facebook ads</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Instagram ads</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="member-ship-table-plan-grid-col">
                                                    <div class="member-ship-plan-table-option-name-bottom">
                                                        Organic Marketing
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">SEO (Search Engine Optimization)</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">10 Suggested number of keywords</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">English keywords</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Ranking UAE </span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="member-ship-plan-table-option-name-bottom sub">
                                                        Social Media Marketing 
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Facebook</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Instagram</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Twiter</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Linkdin</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Youtube</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sign-up-button">
                                                <a href="{{url('schedual-call')}}">Schedule a Consultation Call</a>
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
    <div class="member-ship-modal" id='free_digital_marketing-premuim-plane'>
        <div class="member-ship-modal-outer">
            <div class="modal-close-button">
                <div class="modal-close-button-inner">
                    <span class='ti-close'></span>
                </div>
            </div>
            <div class="member-ship-modal-inner">
                <div class="member-ship-plan-table">
                    <div class="member-ship-plan-table-outer">
                        <div class="member-ship-plan-table-inner">
                            <div class="member-ship-plan-table-grid">
                                <div class="member-ship-plan-table-col">
                                    <div class="member-ship-plan-table-col-outer">
                                        <div class="member-ship-plan-table-inner">
                                            <div class="member-ship-plan-table-top-stars">
                                                <div class="member-ship-plan-table-top-stars-outer">
                                                    <img src="{{asset('business/assets/images/member-ship/3-star.png')}}" alt="">
                                                </div>
                                                <div class="member-ship-plan-table-verified">
                                                    <span class='text'>Verified <span class='ti-check'></span></span>
                                                </div>
                                            </div>
                                            <div class="member-ship-plan-table-price">
                                                <div class="member-ship-plan-table-price-outer">
                                                    <div class="member-ship-plan-table-price-inner">
                                                        <span class='text'>$ 1449</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member-ship-plan-table-plane-name">
                                                Premium<br>
                                                Package Includes
                                            </div>
                                            <div class="member-ship-plan-table-option-name">
                                                Free Digital Marketing till 2023 
                                            </div>
                                            <div class="member-ship-table-plan-grid">
                                                <div class="member-ship-table-plan-grid-col">
                                                    <div class="member-ship-plan-table-option-name-bottom">
                                                        Paid Marketing
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">(SEM) Search Engine Marketing</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Google ads </span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">25 keywords</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Display ad network</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="member-ship-plan-table-option-name-bottom sub">
                                                        Social Media  Ads
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Facebook ads</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Instagram ads</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Youtube</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="member-ship-table-plan-grid-col">
                                                    <div class="member-ship-plan-table-option-name-bottom">
                                                        Organic Marketing
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">SEO (Search Engine Optimization)</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">25 Suggested number of keywords</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">English & Arabic keywords</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Ranking UAE</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="member-ship-plan-table-option-name-bottom  sub">
                                                        Social Media Marketing 
                                                    </div>
                                                    <div class="member-ship-plan-table-plan-detail">
                                                        <div class="member-ship-plan-table-plan-detail-outer">
                                                            <div class="member-ship-plan-table-plan-detail-inner">
                                                                <ul class='member-ship-plan-table-plan-detail-ul'>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Facebook</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Instagram</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Twiter</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Linkdin</span></li>
                                                                    <li class="member-ship-plan-table-plan-detail-li">Youtube</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="sign-up-button">
                                                <a href="{{url('schedual-call')}}">Schedule a Consultation Call</a>
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
    <div class="member-ship-modal" id='branding-premuim-plane'>
        <div class="member-ship-modal-outer">
            <div class="modal-close-button">
                <div class="modal-close-button-inner">
                    <span class='ti-close'></span>
                </div>
            </div>
            <div class="member-ship-modal-inner">
                <div class="member-ship-plan-table">
                    <div class="member-ship-plan-table-outer">
                        <div class="member-ship-plan-table-inner">
                            <div class="member-ship-plan-table-grid">
                                <div class="member-ship-plan-table-col">
                                    <div class="member-ship-plan-table-col-outer">
                                        <div class="member-ship-plan-table-inner">
                                            <div class="member-ship-plan-table-top-stars">
                                                <div class="member-ship-plan-table-top-stars-outer">
                                                    <img src="{{asset('business/assets/images/member-ship/3-star.png')}}" alt="">
                                                </div>
                                                <div class="member-ship-plan-table-verified">
                                                    <span class='text'>Verified <span class='ti-check'></span></span>
                                                </div>
                                            </div>
                                            <div class="member-ship-plan-table-price">
                                                <div class="member-ship-plan-table-price-outer">
                                                    <div class="member-ship-plan-table-price-inner">
                                                        <span class='text'>$ 1449</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="member-ship-plan-table-plane-name">
                                                Premium<br>
                                                Package Includes
                                            </div>
                                            <div class="member-ship-plan-table-option-name">
                                                Branding
                                            </div>
                                            <div class="member-ship-plan-table-plan-detail">
                                                <div class="member-ship-plan-table-plan-detail-outer">
                                                    <div class="member-ship-plan-table-plan-detail-inner">
                                                        <ul class='member-ship-plan-table-plan-detail-ul'>
                                                            <li class="member-ship-plan-table-plan-detail-li">Business Loge </span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">Business Profile</span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">corporative video</span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">Office & Staff Shoot </span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">Email signature</span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">Business Card</span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">Business Letter head</span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">Business envelope </span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">Notepad & Notebook </span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">Receipt Vouchers</span></li>
                                                            <li class="member-ship-plan-table-plan-detail-li">A4 Flyer </span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sign-up-button">
                                                <a href="{{url('schedual-call')}}">Schedule a Consultation Call</a>
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
    <!-- Membership Single Modal End -->
    <!-- Main Section End -->
    @include('home/site-layout.footer')
    @include('home/site-layout.script')
</body>
</html>