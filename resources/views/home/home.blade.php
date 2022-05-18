<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Search | Sahaa.me</title>
    <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
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
    <!-- Main Section Start -->
    <!-- <section class="home-section" style="background-image: url({{asset('business/assets/images/home/main-bg.jpg')}});">
        <div class="home-section-outer">
            <div class="home-section-inner">
                <div class="container">
                    <div class="home-page-search-section">
                        <div class="home-page-search-section-outer">
                            <div class="home-page-search-section-inner">
                                <div class="home-page-search-section-main">
                                    <div class="home-page-search-section-bar">
                                        <div class="home-page-search-section-bar-inputs">
                                            <form action="{{url('search')}}" method='POST'>
                                                {{ csrf_field() }}
                                                <div class="home-page-search-section-form">
                                                    <div class="home-page-search-section-form-outer">
                                                        <div class="home-page-search-section-form-inner">
                                                            <div class="home-page-search-section-form-box">
                                                                <div class="home-page-search-section-form-fields">
                                                                    <div class="search-section-form-fields-outer city">
                                                                        <span class="icon"></span>
                                                                        <input type="text" placeholder="Select city, Area" name='area'>
                                                                    </div>
                                                                    <div class="search-section-form-fields-outer input">
                                                                        <input type="text" placeholder="Search by Business Name, Product Name or Service" name='query'>
                                                                    </div>
                                                                    <div class="search-section-form-fields-outer button">
                                                                        <button>Search</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="home-page-slider">
                                        <div class="home-page-slider-outer">
                                            <div class="home-page-slider-inner">
                                                <div class="home-page-slider-main">
                                                    <div class="home-page-slider-slide">
                                                        <div class="home-page-slider-slide-text">
                                                            <div class="text">
                                                                Top 10 <br> Educational Institutes
                                                            </div>
                                                            <div class="view-button">
                                                                <button>
                                                                    View All
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-bottom-arrow">
                                        <div class="section-bottom-arrow-outer">
                                            <div class="section-bottom-arrow-inner">
                                                <span class="arrow">
                                                    <img src="{{asset('business/assets/images/home/icons/arrow-down.svg')}}" alt="">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-devider">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
                    </svg>
                </div>
            </div>
        </div>
    </section> -->
    <section class="home-section">
        <div class="home-slide-images-outer image-slide-down-animation">
            <div class="home-slide-images-inner">
                <div class="home-slide-images-all">
                    <div class="home-slide-images-single home-slide-image-01" style='display:block'>
                        <img src="{{asset('business/assets/images/home/slide-01.png')}}" alt="">
                    </div>
                    <div class="home-slide-images-single home-slide-image-02">
                        <img src="{{asset('business/assets/images/home/slide-02.png')}}" alt="">
                    </div>
                    <div class="home-slide-images-single home-slide-image-03">
                        <img src="{{asset('business/assets/images/home/slide-03.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="home-section-outer">
            <div class="home-section-inner">
                <div class="container">
                    <div class="home-page-search-section">
                        <div class="home-page-search-section-outer">
                            <div class="home-page-search-section-inner">
                                <div class="home-page-search-section-main">
                                    <div class="home-page-search-section-main-text">
                                        Sahaa.me The UAE Leading Online Business Directory
                                    </div>
                                    <div class="home-page-search-section-bar">
                                        <div class="home-page-search-section-bar-inputs">
                                        <form action="{{url('business/search')}}" method='POST'>
                                            {{ csrf_field() }}
                                                <div class="home-page-search-section-form">
                                                    <div class="home-page-search-section-form-outer">
                                                        <div class="home-page-search-section-form-inner">
                                                            <div class="home-page-search-section-form-box">
                                                                <div class="home-page-search-section-form-fields">
                                                                    <div class="search-section-form-fields-outer input">
                                                                        <span class="icon"><span class="ti-search"></span></span>
                                                                        <input type="text" placeholder="Business Name, Product Name or Service" name='term' id='search-term'>
                                                                    </div>
                                                                    <div class="search-section-form-fields-outer city">
                                                                        <span class="icon">
                                                                            <img src="{{asset('business/assets/images/home/icons/location.svg')}}" alt="">
                                                                        </span>
                                                                        <input type="text" placeholder="Select city, Area" name='location' id='search-location'>
                                                                        <span class="location-icon">
                                                                            <span class="ti-location-pin"></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="search-section-form-fields-outer button">
                                                                        <button type='button' name='search' value='search' id='search-button'>Search</button>
                                                                    </div>
                                                                    <div class="recent-search-outer">
                                                                        <span class="text">Browse Search History</span>
                                                                        <span class="down-icon">
                                                                            <span class="ti-angle-down"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="home-page-slider">
                                        <div class="home-page-slider-outer">
                                            <div class="home-page-slider-inner">
                                                <div class="home-page-slider-main">
                                                    <div class="home-page-slider-slide slide-01 active slide-down-animation">
                                                        <div class="home-page-slider-slide-text">
                                                            <div class="text">
                                                                Top 10 <br> Building Material and Suppliers
                                                            </div>
                                                            <div class="view-button">
                                                                <button>
                                                                    View All
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home-page-slider-slide slide-02">
                                                        <div class="home-page-slider-slide-text">
                                                            <div class="text">
                                                                Top 10 <br> Engineers and Surveyors
                                                            </div>
                                                            <div class="view-button">
                                                                <button>
                                                                    View All
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="home-page-slider-slide slide-03">
                                                        <div class="home-page-slider-slide-text">
                                                            <div class="text">
                                                                Top 10 <br> Construction Companies
                                                            </div>
                                                            <div class="view-button">
                                                                <button>
                                                                    View All
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slider-controller">
                                                    <div class="slider-controller-outer">
                                                        <div class="slider-controller-inner">
                                                            <span class="dot active" data-slide=".slide-01" data-image='.home-slide-image-01'></span>
                                                            <span class="bar"></span>
                                                            <span class="dot" data-slide=".slide-02" data-image='.home-slide-image-02'></span>
                                                            <span class="bar"></span>
                                                            <span class="dot" data-slide=".slide-03" data-image='.home-slide-image-03'></span>
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
                <div class="shape-devider">
                <svg style="" id="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				  <path fill="white" fill-opacity="1" d="M0,160L80,181.3C160,203,320,245,480,218.7C640,192,800,96,960,74.7C1120,53,1280,107,1360,133.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
				</svg>
                    <div class="section-bottom-arrow">
                        <div class="section-bottom-arrow-outer">
                            <div class="section-bottom-arrow-inner">
                                <span class="arrow">
                                    <a href="#explore">
                                        <img src="{{asset('business/assets/images/home/icons/arrow-down.svg')}}" alt="">
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Section Start -->
    <section class="explore" id='explore'>
        <div class="explore-section-outer">
            <div class="explore-section-inner">
                <div class="container">
                    <div class="explore-section-main">
                        <div class="explore-section-text">
                            <div class="explore-section-text-inner">
                                <!-- <span class="top">Once you’ve settled on a business</span> -->
                                <span class="bottom-main">Explore the Marketplace</span>
                            </div>
                        </div>
                        <div class="explore-section-grid">
                            <div class="explore-section-grid-outer">
                                <div class="explore-section-grid-inner">
                                    <div class="explore-section-grid-col animate__animated animate__fadeInDown animate__repeat-5">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/automotive.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Automotive
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/cleaning.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Cleaning
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/gym.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Gym
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/movers.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Movers
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/finance.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Finance
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/electrition.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Electrician
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/mobile-repair.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Mobile repair
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/laundary.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Laundary
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/landscaping.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Landscaping
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('business/assets/images/home/icons/health.svg')}}" alt="">
                                            </div>
                                            <div class="explore-section-grid-col-title">
                                                Health
                                            </div>
                                            <div class="explore-section-grid-col-link">
                                                <a href="#">Brows This</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="explore-more-button">
                                    <div class="explore-more-button-outer">
                                        <a href="{{url('/all-categories')}}">See More</a>
                                        <!-- <button>See More</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Section End -->
    <!-- App Link Start -->
    <section class="app-links">
        <div class="app-links-outer">
            <div class="app-links-inner">
                <div class="container width-mobile">
                    <div class="app-links-main">
                        <div class="app-links-inner-grid">
                            <div class="app-links-inner-grid-col">
                                <div class="app-links-image app-button-main">
                                    <img src="{{asset('business/assets/images/home/card-01.png')}}" alt="">
                                    <div class="image-text-overlay">
                                        <div class="image-text-overlay-outer">
                                            Download Sahaa.me app to search, locate and Contact any local Business
                                        </div>
                                    </div>
                                    <div class="app-button">
                                        <div class="app-button-outer">
                                            <div class="app-button-inner">
                                                <a href="#">
                                                    <img src="{{asset('business/assets/images/home/image-022.png')}}" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="{{asset('business/assets/images/home/image-020.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-links-inner-grid-col">
                                <div class="app-links-image app-button-main">
                                    <img src="{{asset('business/assets/images/home/card-02.png')}}" alt="">
                                    <div class="image-text-overlay promote">
                                        <div class="image-text-overlay-outer">
                                            Promote your business with Free business listing, google, Ads, social media ads, Social media marketing, and more
                                        </div>
                                    </div>
                                    <div class="learn-more-overlay">
                                        <div class="learn-more-outer">
                                            <div class="learn-more-inner">
                                                <a href="#" class='white'>
                                                    <span class="icon"><span class="ti-arrow-circle-right"></span></span>
                                                    <span class="text">Learn More</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-links-inner-grid-col">
                                <div class="app-links-image app-button-main">
                                    <img src="{{asset('business/assets/images/home/card-03.png')}}" alt="">
                                    <div class="image-text-overlay post">
                                        <div class="image-text-overlay-outer">
                                            Post your blogs & news to attract maximum Traffic & create an active online persence
                                        </div>
                                    </div>
                                    <div class="learn-more-overlay">
                                        <div class="learn-more-outer">
                                            <div class="learn-more-inner">
                                                <a href="#" class='black'>
                                                    <span class="icon"><span class="ti-arrow-circle-right"></span></span>
                                                    <span class="text">Learn More</span>
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
    </section>
    <!-- App Link End -->
    <!-- Clear Process Start-->
    <section class='clear-process'>
        <div class="clear-process-outer">
            <div class="clear-process-inner">
                <div class="clear-process-main">
                    <div class="clear-process-text">
                        <div class="clear-process-text-outer">
                            <div class="clear-process-text-inner">
                                <div class="clear-process-text-top">
                                    A clear process every step of the way
                                </div>
                                <div class="clear-process-text-bottom">
                                    Email us to get the documented process for listing
                                    Your business on the biggest bussiness directory platform
                                    Sahaa.me 
                                </div>
                                <div class="clear-process-text-input">
                                    <div class="clear-process-text-input-outer">
                                        <span class='icon'><span class="ti-location-arrow"></span></span>
                                        <input type="text" placeholder='Your email'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear-process-image">
                        <div class="clear-process-image-outer">
                            <img src="{{asset('business/assets/images/home/laptop.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clear Process End-->
    <!-- Why Trust Start -->
    <section class="why-trust">
        <div class="why-trust-outer">
            <div class="why-trust-inner">
                <div class="container">
                    <div class="why-trust-main">
                        <div class="why-trust-main-text">
                            <div class="why-trust-main-text-outer">
                                <div class="why-trust-main-text-inner">
                                    <div class="title">
                                        Why Businesses Trust Sahaa
                                    </div>
                                    <div class="text">
                                        We've earned the trust of thousands of customers by featuring only the most reputable and high-quality businesses. Finding a perfect business on Sahaa.me is much easy with simple, accurate, and precise information that you can use right now to directly contact any business.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="why-trust-grid">
                            <div class="why-trust-grid-outer">
                                <div class="why-trust-grid-inner">
                                    <div class="why-trust-grid-col">
                                        <div class="why-trust-grid-col-outer">
                                            <div class="why-trust-grid-col-inner">
                                                <div class="why-trust-grid-col-image">
                                                    <div class="why-trust-grid-col-image-outer">
                                                        <img src="{{asset('business/assets/images/home/icons/verified-reviews.svg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-trust-grid-col-title">
                                                    Verified Reviews
                                                </div>
                                                <div class="why-trust-grid-col-nums">
                                                    1,00,000+
                                                </div>
                                                <div class="why-trust-grid-col-text">
                                                    Find out about our verified reviews that have had a significant impact on our online reputation, as well as what others have to say about our Company's services.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-trust-grid-col">
                                        <div class="why-trust-grid-col-outer">
                                            <div class="why-trust-grid-col-inner">
                                                <div class="why-trust-grid-col-image">
                                                    <div class="why-trust-grid-col-image-outer">
                                                        <img src="{{asset('business/assets/images/home/icons/business-categories.svg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-trust-grid-col-title">
                                                    Business Categories
                                                </div>
                                                <div class="why-trust-grid-col-nums">
                                                    300+
                                                </div>
                                                <div class="why-trust-grid-col-text">
                                                    We are here to help you in finding the business you are seeking. You can find a reliable client on our 300 plus business categories without second-guessing.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-trust-grid-col">
                                        <div class="why-trust-grid-col-outer">
                                            <div class="why-trust-grid-col-inner">
                                                <div class="why-trust-grid-col-image">
                                                    <div class="why-trust-grid-col-image-outer">
                                                        <img src="{{asset('business/assets/images/home/icons/free-markiting.svg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-trust-grid-col-title">
                                                    Free Marketing
                                                </div>
                                                <div class="why-trust-grid-col-nums">
                                                    OPPORTUNITY
                                                </div>
                                                <div class="why-trust-grid-col-text">
                                                We welcome you to Join Sahaa Business Family, where you will get free  Marketing services throughout the year 2022 &many more benefits.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="why-trust-grid-col">
                                        <div class="why-trust-grid-col-outer">
                                            <div class="why-trust-grid-col-inner">
                                                <div class="why-trust-grid-col-image">
                                                    <div class="why-trust-grid-col-image-outer">
                                                        <img src="{{asset('business/assets/images/home/icons/right-audiance.svg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-trust-grid-col-title">
                                                    Get to know
                                                </div>
                                                <div class="why-trust-grid-col-nums">
                                                    the right audience
                                                </div>
                                                <div class="why-trust-grid-col-text">
                                                    Creating a target audience is essential for knowing where to focus your sales and marketing efforts. we helps you to understand who your target customer is and what they care about.
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
    </section>
    <!-- Why Trust End -->
    <!-- New User Start -->
    <section class="new-user">
        <div class="new-user-outer" style="background-image: url({{asset('business/assets/images/home/icons/footer-bg.svg')}});">
            <div class="new-user-inner">
                <div class="container">
                    <div class="new-user-main" style="background-image: url({{asset('business/assets/images/home/icons/gift02.svg')}});">
                        <div class="title">
                            New User benefits
                        </div>
                        <div class="text">
                            Avail the offer as a New-User and get a<br>
                            free Coupon Gift or Allowance.
                        </div>
                        <div class="new-user-box-grid">
                            <div class="new-user-box-grid-outer">
                                <div class="new-user-box-grid-col">
                                    <div class="new-user-box-grid-col-outer">
                                        <div class="new-user-box-grid-col-inner">
                                            <div class="new-user-box-grid-col-image">
                                                <div class="new-user-box-grid-col-image-outer">
                                                    <img src="{{asset('business/assets/images/home/icons/coupon.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="new-user-box-grid-col-text">
                                                <div class="title">
                                                    Allowence
                                                </div>
                                                <div class="text">
                                                    Order over US$10
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-user-box-grid-col">
                                    <div class="new-user-box-grid-col-outer blur">
                                        <div class="new-user-box-grid-col-inner">
                                            <div class="new-user-box-grid-col-image">
                                                <div class="new-user-box-grid-col-image-outer">
                                                    <img src="{{asset('business/assets/images/home/icons/gift.svg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="new-user-box-grid-col-text">
                                                <div class="title">
                                                    Free Gift
                                                </div>
                                                <div class="text">
                                                    Choose your Gift Offer
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
    </section>
    <!-- New User End -->
    @include('home/site-layout.footer')
    @include('home/site-layout.script')
    <script>
        $(document).ready(function() {
            $("#search-button") .click(function() {
               var term_val = $('#search-term').val();
               var location_val = $('#search-location').val();
               term_val = (term_val == '') ? '' : term_val;
               location_val = (location_val == '') ? '' : location_val;
               window.location.href = "{{url('business/search')}}?meta=&category=&term="+term_val+"&location="+location_val+"&services=";
            });
        });
    </script>
</body>
</html>