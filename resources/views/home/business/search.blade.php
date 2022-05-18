<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business - Search | Sahaa.me</title>
    <link rel="icon" href="business/assets/images/logo/icon.png" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-CT19N7GEB1');
    </script>
    <link rel="stylesheet" href="business/assets/icon/themify-icons.css">
    <link rel="stylesheet" href="business/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="business/assets/css/style.css?v={{rand(0,1000)}}">
    <link rel="stylesheet" href="business/assets/css/responsive.css?v={{rand(0,1000)}}">
    <link rel="stylesheet" href="{{asset('business/assets/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="business/assets/lib/jquery/jquery-ui.css">

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
<div class="top-info-bar background-black">
    <div class="top-info-bar-inner">
        <div class="top-info-bar-outer">
            <div class="container">
                <div class="top-navigation-bar">
                    <div class="top-navigation-bar-inner">
                        <div class="top-navigation-bar-main">
                            <div class="top-navigation-bar-side">
                                <div class="top-navigation-links">
                                    <div class="top-navigation-links-inner">
                                        <div class="top-navigation-links-main">
                                            <ul class="top-navigation-links-ul">
                                                <li class="top-navigation-links-li active">
                                                        <span class="top-navigation-links-text">
                                                            <a href="{{url('/')}}">Sahaa.me</a>
                                                        </span>
                                                </li>
                                                <!-- <li class="top-navigation-links-li">
                                                    <span class="top-navigation-links-text">
                                                        <a href="{{url('/advertise-your-business')}}">Sahaa Business</a>
                                                    </span>
                                                </li> -->
                                                <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
                                                            <a href="{{url('/membership')}}">Sahaa Promotion</a>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-navigation-bar-side">
                                <div class="top-navigation-links">
                                    <div class="top-navigation-links-inner right-sided">
                                        <div class="top-navigation-links-main">
                                            <ul class="top-navigation-links-ul">
                                                <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
                                                            <a href="{{url('/sahaa-app')}}">Download the app</a>
                                                        </span>
                                                </li>
                                                <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
                                                            <a href="{{url('/add-listing-to-sahaa')}}">Get a free Listing</a>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="top-navigation-links-main right-side">
                                            <ul class="top-navigation-links-ul">
                                                <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
                                                            <span class="text">Adertise : </span>
                                                            <span class="nav-icon"><span class="ti-email"></span></span>
                                                            <span class="nav-text color-orange">advertise@shaa.me</span>
                                                        </span>
                                                </li>
                                            </ul>
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
                                        <a href="https://sahaa.me"><img src="https://sahaa.me/business/assets/images/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="site-search-box-outer">
                                <div class="site-search-box-inner">
                                    <div class="site-search-box-main">
                                        <div class="site-search-box-main-inner">
                                            <div class="site-search-box-main-outer">
                                                <div class="search-form-outer">
                                                    <div class="search-form-inner">
                                                        <form action="https://sahaa.me/business/search" method="POST">
                                                            <input type="hidden" name="_token" value="FdzZAkNrXSClCu7QbQGRS1bjj3id3mzE2XFFUI3x">
                                                            <div class="search-form-main">
                                                                <div class="form-fiels-inner">
                                                                    <div class="form-field-inner">
                                                                        <div class="form-field-icon">
                                                                            <div class="field-search-icon">
                                                                                <span class="ti-search"></span>
                                                                            </div>
                                                                            <input type="text" placeholder="Name" name="term" value="" id="search-term">
                                                                            <div class="field-close-icon">
                                                                                <span class="ti-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-field-icon">
                                                                            <div class="field-search-icon">
                                                                                <span class="ti-location-pin"></span>
                                                                            </div>
                                                                            <input type="text" class="ui-widget ui-autocomplete-input" placeholder="Location" value="" name="location" id="search-location" autocomplete="off">
                                                                            <div class="field-close-icon">
                                                                                <span class="ti-close"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-field-button">
                                                                            <button type="button" name="search" id="search-button" value="Search">Search</button>
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
                            <div class="mobile-navigation">
                                <div class="mobile-navigation-outer">
                                    <div class="mobile-navigation-inner">
                                        <div class="user-icon">
                                            <a href="https://sahaa.me/guest/login"></a><span class="ti-user"></span>
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
                                        <a href="https://sahaa.me/guest/login">
                                            <div class="user-login-icon">
                                                <span class="ti-user"></span>
                                                <span class="login-text">Login</span>
                                                <span class="ti-angle-right"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-show-search">
                        <div class="site-search-box-inner">
                            <div class="site-search-box-main">
                                <div class="site-search-box-main-inner">
                                    <div class="site-search-box-main-outer">
                                        <div class="search-form-outer">
                                            <div class="search-form-inner">
                                                <form action="https://sahaa.me/business/search" method="POST">
                                                    <input type="hidden" name="_token" value="FdzZAkNrXSClCu7QbQGRS1bjj3id3mzE2XFFUI3x">
                                                    <div class="search-form-main">
                                                        <div class="form-fiels-inner">
                                                            <div class="form-field-inner">
                                                                <div class="form-field-icon">
                                                                    <div class="field-search-icon">
                                                                        <span class="ti-search"></span>
                                                                    </div>
                                                                    <input type="text" placeholder="Name" name="term" value="" id="search-term-mob">
                                                                    <div class="field-close-icon">
                                                                        <span class="ti-close"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-field-icon">
                                                                    <div class="field-search-icon">
                                                                        <span class="ti-location-pin"></span>
                                                                    </div>
                                                                    <input type="text" class="ui-widget" placeholder="Location" value="" name="location" id="search-location-mob">
                                                                    <div class="field-close-icon">
                                                                        <span class="ti-close"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-field-button">
                                                                    <button type="button" name="search" value="Search" id="search-button-mob">Search</button>
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
                    </div>                    </div>
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
                                        <span class="beadcrumb-active-link">Search</span>
                                        <span class="beard-crumb-devider"><span class="ti-angle-right"></span></span>
                                        <span class="beadcrumb-active-text color-gray">Restaurants near Dubai</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-page-under-header-title-div">
                            <div class="main-page-under-header-title-div-outer">
                                <div class="main-page-under-header-title-div-inner">
                                    <div class="main-page-under-header-title-main">
                                        <div class="main-title">
                                            Restaurant Near Dubai
                                        </div>
                                        <div class="main-sub-title">
                                            Did you mean a company called <span class="beadcrumb-active-link">"Restaurant" ?</span>
                                        </div>
                                    </div>
                                    <div class="sort-div">
                                        <div class="sort-div-outer">
                                            <div class="sort-div-main">
                                                <div class="sort-div-input">
                                                    <span class="sort-div-icon"><span class="ti-exchange-vertical"></span></span>
                                                    <select class="py-2" style="background-color: transparent; width: 13rem; border: 1px solid #c6bfbf;">
                                                        <option>Sort by relevance</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="all-searchs-outer">
                            <div class="all-searchs-inner">
                                <div class="all-searchs-main">
                                    <div class="top-related-searchs">
                                        <div class="top-related-search-outer">
                                            <div class="top-related-search-inner">
                                                <div class="top-related-search-text">
                                                    Related Searches:
                                                </div>
                                                <div class="top-related-search-tags">
                                                    <div class="top-related-search-tags-inner">
                                                        <div class="top-related-search-tags-main">
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=HERITAGE PACKAGES&amp;location=&amp;services=&amp;_s="><span>HERITAGE PACKAGES</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=MASTER PLAN SCALE MODELS&amp;location=&amp;services=&amp;_s="><span>MASTER PLAN SCALE MODELS</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Travel insurance&amp;location=&amp;services=&amp;_s="><span>Travel insurance</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Spa &amp; Wellness&amp;location=&amp;services=&amp;_s="><span>Spa &amp; Wellness</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Landscape Design &amp;amp; Architecture&amp;location=&amp;services=&amp;_s="><span>Landscape Design &amp;amp; Architecture</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Jebel Ali Residential Tower&amp;location=&amp;services=&amp;_s="><span>Jebel Ali Residential Tower</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Airline Reservation, Ticket &amp;amp; Hotel Bookings&amp;location=&amp;services=&amp;_s="><span>Airline Reservation, Ticket &amp;amp; Hotel Bookings</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Best Deals&amp;location=&amp;services=&amp;_s="><span>Best Deals</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=DUBAI VISA&amp;location=&amp;services=&amp;_s="><span>DUBAI VISA</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=DESERT SAFARI&amp;location=&amp;services=&amp;_s="><span>DESERT SAFARI</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=F &amp;amp; B  Restaurants &amp;amp; Caffe&amp;location=&amp;services=&amp;_s="><span>F &amp;amp; B  Restaurants &amp;amp; Caffe</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Car Shipping&amp;location=&amp;services=&amp;_s="><span>Car Shipping</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Design Studio&amp;location=&amp;services=&amp;_s="><span>Design Studio</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=Hotel Booking&amp;location=&amp;services=&amp;_s="><span>Hotel Booking</span></a>
                                                            <a href="https://sahaa.me/business/search?meta=&amp;category=&amp;term=RAMDAN PACKAGE&amp;location=&amp;services=&amp;_s="><span>RAMDAN PACKAGE</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-searchs-main-outer">
                                        <div class="all-searchs-main-inner">
                                        @include('home.site-layout.search.search-filter')
                                            <form action=""></form>
                                            <div class="all-searchs-main-all-search">
                                                <div class="top-page-num-bar show-on-mobile">
                                                    <div class="top-page-num-bar-outer">
                                                        <div class="top-page-num-bar-inner">
                                                            <div class="top-page-num-bar-main">
                                                                <div class="page-num-show-on-map-div">
                                                                    <div class="page-num-show-on-map-div-outer">
                                                                        <div class="page-num-show-on-map-div-inner">
                                                                            <span class="icon"><span class="ti-location-pin"></span></span>
                                                                            <span class="text">Map View</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="page-num-div">
                                                                    Page <span id='page-num' class='num'>1</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @include('home.site-layout.search.listing')
{{--                                                <div class="page-pagintation-div">--}}
{{--                                                    <div class="page-pagintation-div-outer">--}}
{{--                                                        <div class="page-pagintation-div-inner">--}}
{{--                                                            <div class="pagination-button goto-page prev" data-page="1">--}}
{{--                                                                <span class="background-orange">Previous</span>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="pagination-navigation">--}}
{{--                                                                <ul class="pagination-navigation-ul pagination-ul" data-currentpage="1">--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li" data-page="1"><span class="background-gray">1</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-seprater-start"><span class="background-gray">...</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav " data-page="2"><span class="background-gray">2</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav " data-page="3"><span class="background-gray">3</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav " data-page="4"><span class="background-gray">4</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav " data-page="5"><span class="background-gray">5</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="6"><span class="background-gray">6</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="7"><span class="background-gray">7</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="8"><span class="background-gray">8</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="9"><span class="background-gray">9</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="10"><span class="background-gray">10</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-seprater-end"><span class="background-gray">...</span></li>--}}
{{--                                                                    <li class="pagination-navigation-li goto-page goto-li" data-page="20"><span class="background-gray">20</span></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="pagination-button goto-page next" data-page="2">--}}
{{--                                                                <span class="background-orange">Next</span>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

                                                <div class="bottom-box-get-started">
                                                    <div class="bottom-box-get-started-outer">
                                                        <div class="bottom-box-get-started-inner">
                                                            <div class="bottom-box-get-started-text">
                                                                Business not here?
                                                            </div>
                                                            <div class="bottom-box-get-started-bottom-text">
                                                                Is the business you’re looking for not listed? Tell us what we’re missing
                                                            </div>
                                                            <div class="bottom-box-get-started-button">
                                                                <button>Add a business</button>
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
</section>
<footer class="footer-section">
    <div class="container">
        <div class="footer-section-outer">
            <div class="footer-section-inner">
                <div class="footer-popular-searches">
                    <div class="footer-list-text">
                        Popular Searches
                    </div>
                    <div class="footer-links-outer">
                        <div class="footer-links-inner">
                            <div class="footer-links-row">
                                <div class="footer-links-col">
                                    <ul class="footer-links-ul">
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Home Decor</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Garden decor</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Laundering</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Hairstylist</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">News vendors</a></li>                                            </a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Archetonics</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Constructor</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">House agents</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Gasfitters</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Electrical Experts</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Carpenter shops</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Styling Salon</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Drugstore, Dispensary</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Portrait and sketcher</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Wine bar</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Cafeteria</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Dining room</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Dining room</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Restaurants</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Guest Houses</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Steamfitters</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Housekeeper</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Parking lot</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Agriculture</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Physician, Clinician</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Roof Material</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Fast Food</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Charity Store</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Malls</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Retail Store</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Mini Market</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Mobile Shop</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Chasses and Brake</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Veterinary doctor</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Vehicle rental</a></li>
                                        <li class="footer-links-li"><a href="#" class="footer-link-a">Medical practitioner</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular-search-input">
                        <div class="popular-search-input-outer">
                            <div class="popular-search-input-inner">
                                <div class="popular-search-input-main">
                                    <div class="search-icon">
                                        <span class="ti-search"></span>
                                    </div>
                                    <input type="text" placeholder='Explore Populor Searches'>
                                    <div class="down-icon">
                                        <span class="ti-angle-down"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advertise-email-div">
                        <a href="mailto:advertise@sahaa.me">
                                <span class="mail-icon">
                                    <span class="ti-email"></span>
                                </span>
                            <span class="text">Adertise with Sahaa: advertise@sahaa.me</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                Disclaimer: The opinions expressed within Reviews are those of the author and not the views or opinions of Sahaa Limited. Registered Office: P5-07 Saif Zone - Sharjah United Arab Emirates. © SAHAA Limited 2022. All rights reserved. Sahaa, Sahaa Pages and other ™ are trademarks of Sahaa Limited.
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
                                <a href="{{url('/')}}"><img src="business/assets/images/logo/logo.png" alt=""></a>
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
                            <a href="{{url('/')}}"><img src="business/assets/images/logo/logo.png" alt=""></a>
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
                <div class="advertise-email-div">
                    <a href="mailto:advertise@sahaa.me">
                        <span class="mail-icon">
                            <span class="ti-email text-success"></span>
                        </span>
                        <span class="text">Adertise with Sahaa: advertise@sahaa.me</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="business/assets/lib/jquery/jquery.js"></script>
<script src="business/assets/lib/jquery/jquery-ui.js"></script>
<script src="business/assets/lib/slider/owl/owl.js"></script>
<script src="business/assets/lib/lazy-loading/jquery.lazy.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--<script src="{{asset('business/assets/js/main.js')}}"></script>--}}
<script>
    $(document).ready(function(){
        // setTimeout(function(){
        var slider_timer = setInterval(function() {
            move_slider();
        }, 3000);
        // }, 1000 );
        $('.slider-controller-inner .dot').click(function(){
            var slide_show = $(this).attr('data-slide');
            var slide_image = $(this).attr('data-image');
            $('.home-slide-images-outer').removeClass('image-slide-down-animation');
            $('.home-slide-images-outer').removeClass('animate__animated').removeClass('animate__fadeInDown');
            $('.home-slide-images-outer').addClass('animate__animated').addClass('animate__fadeOutDown');
            setTimeout(function(){
                $('.home-slide-images-single').hide();
                $(slide_image).show();
                $('.home-slide-images-outer').removeClass('animate__animated').removeClass('animate__fadeOutDown');
                $('.home-slide-images-outer').addClass('animate__animated').addClass('animate__fadeInDown');
            }, 150);
            $('.home-page-slider-slide').removeClass('active').removeClass('slide-down-animation');
            $('.slider-controller-inner .dot').removeClass('active');
            $(this).addClass('active');
            $(slide_show).addClass('slide-down-animation');
            clearInterval(slider_timer);
            slider_timer = setInterval(function() {
                move_slider();
            }, 3000);
        });


        // home-slide-images-outer image-slide-down-animation
        function move_slider() {
            var current_dot = $('.slider-controller-inner span.active').index();
            current_dot = current_dot+2;
            current_dot = (current_dot > 4 ) ? 0 : current_dot ;
            var next_dot = $('.slider-controller-inner span:eq('+current_dot+')');
            var slide_show = next_dot.attr('data-slide');
            var slide_image = next_dot.attr('data-image');
            $('.home-slide-images-outer').removeClass('image-slide-down-animation');
            $('.home-slide-images-outer').removeClass('animate__animated').removeClass('animate__fadeInDown');
            $('.home-slide-images-outer').addClass('animate__animated').addClass('animate__fadeOutDown');
            setTimeout(function(){
                $('.home-slide-images-single').hide();
                $(slide_image).show();
                $('.home-slide-images-outer').removeClass('animate__animated').removeClass('animate__fadeOutDown');
                $('.home-slide-images-outer').addClass('animate__animated').addClass('animate__fadeInDown');
            }, 150);
            $('.home-page-slider-slide').removeClass('active').removeClass('slide-down-animation');
            $('.slider-controller-inner .dot').removeClass('active');
            next_dot.addClass('active');
            $(slide_show).addClass('slide-down-animation');
        }


    });
    $('.show-content').click(function() {
        $('.show-form-field').hide();
        var show_class = $(this).attr('data-class');
        var show_title = $(this).attr('data-title');
        $(show_class).show();
        $('.step-text-main').html(show_title);
    });

    // Modal Script
    $(document).ready(function(){
        $('.member-ship-plan-table-col-outer.click').click(function(){
            var modal_show = $(this).attr('data-modal');
            console.log(modal_show);
            $('body').addClass('member-ship-modal-open');
            $(modal_show).show();
        });

        $('.member-ship-plan-table-plan-detail-li.click').click(function(){
            var modal_show = $(this).attr('data-modal');
            $('body').addClass('member-ship-modal-open');
            $(modal_show).fadeIn();
        });

        $('.modal-close-button').click(function(){
            $('.member-ship-modal').fadeOut();
            $('body').removeClass('member-ship-modal-open');
        });
    });

    // Review Script
    var reviews = {
        "reviews": [{
            "name": "FHC Group",
            "review": "It was a great experience with Sahaa, who guided me and assisted me in running my business smoothly.",
            "logo": "business/assets/images/membership-review/fhc.png"

        }, {
            "name": "Sky Junction",
            "review": "I'm having a business of Travel and was worried about its promotion. Sahaa business advisor helps me generate an online presence and grow my business all over the U.A.E.",
            "logo": "business/assets/images/membership-review/sky-junction.png"

        }, {
            "name": "Balqees Abbaya ",
            "review": "They guide everything with professionalism and friendliness.",
            "logo": "business/assets/images/membership-review/balqees.png"

        }, {
            "name": "Qamar Printing",
            "review": "On Sahaa, I had a positive experience with the Customers, and I highly recommend it.",
            "logo": "business/assets/images/membership-review/al-qamar.png"

        }]
    };

    $(document).ready(function(){
        var reviews_obj = reviews.reviews;
        var main_review_obj = 0;
        var next_review_obj = 1;
        var prev_review_obj = (reviews_obj.length)-1;

        $('.prev-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
        $('.next-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);

        $('.review-image-div').attr('src',reviews_obj[main_review_obj].logo);
        $('.prev-review-image-div').attr('src',reviews_obj[prev_review_obj].logo);
        $('.next-review-image-div').attr('src',reviews_obj[next_review_obj].logo);

        $('.review-text-div').html(reviews_obj[main_review_obj].review);
        $('.review-name-div').html(reviews_obj[main_review_obj].name);

        $('.next-review').click(function(){
            prev_review_obj = parseInt($(this).attr('data-main'));
            main_review_obj = parseInt($(this).attr('data-next'));
            next_review_obj = main_review_obj+1;

            if(!(next_review_obj < reviews_obj.length)){next_review_obj=(0)}
            $('.prev-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
            $('.next-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
            $('.review-image-div').attr('src',reviews_obj[main_review_obj].logo).fadeIn(1000);
            $('.prev-review-image-div').attr('src',reviews_obj[prev_review_obj].logo).fadeIn(1000);
            $('.next-review-image-div').attr('src',reviews_obj[next_review_obj].logo).fadeIn(1000);

            $('.review-text-div').html(reviews_obj[main_review_obj].review);
            $('.review-name-div').html(reviews_obj[main_review_obj].name);


        });

        $('.prev-review').click(function(){
            prev_review_obj = parseInt($(this).attr('data-prev'))-1;
            main_review_obj = parseInt($(this).attr('data-prev'));
            next_review_obj = parseInt($(this).attr('data-main'));
            if(!(next_review_obj < reviews_obj.length)){next_review_obj=(0)}
            if((prev_review_obj < 0)){prev_review_obj=(reviews_obj.length)-1}

            $('.prev-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
            $('.next-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);


            $('.review-image-div').attr('src',reviews_obj[main_review_obj].logo).fadeIn(1000);
            $('.prev-review-image-div').attr('src',reviews_obj[prev_review_obj].logo).fadeIn(1000);
            $('.next-review-image-div').attr('src',reviews_obj[next_review_obj].logo).fadeIn(1000);

            $('.review-text-div').html(reviews_obj[main_review_obj].review);
            $('.review-name-div').html(reviews_obj[main_review_obj].name);

        });
    });

    $('.mobile-navigation-close-btn').click(function() {
        $('.mobile-menu-container').hide();
        $('body').removeClass('body-show-mobile-nav');
    })

    $('.menu-icon').click(function() {
        $('.mobile-menu-container').fadeIn();
        $('body').addClass('body-show-mobile-nav');
    })

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
</script>
<script>
    var pagination = JSON.parse('<?php echo $pagination_json?>');
    var listings_per_page = pagination.per_page;
    var total_listings = pagination.total_listings;
    var total_pages = pagination.pages;
    $('.goto-page').click(function() {
        window.scrollTo(0, 0)
        var element = $(this);
        setTimeout(function(){
            var page_num = parseInt(element.attr('data-page'));
            var next_page = page_num+1;
            var prev_page = page_num-1;

            // Start Hide Navs
            var start_nav = 0;
            var hide_from_start = page_num-5;
            var hide_from_end = hide_from_start+5;
            for (i=0; i<total_pages; i++) {
                if(i == 0 && i < hide_from_start) {
                    $('.moving-nav:eq('+i+')').addClass('hide-this');
                } else if(i > hide_from_start && i < hide_from_end){
                    $('.moving-nav:eq('+i+')').removeClass('hide-this');
                } else {
                    $('.moving-nav:eq('+i+')').addClass('hide-this');
                }
            }
            $('.goto-seprater-start').show();
            var total_navs = $('.goto-li').length;
            // End hide Nav

            var current_page = parseInt($('.pagination-ul').attr('data-currentpage'));
            prev_page = (prev_page < 1) ? 1 : prev_page ;
            next_page = (next_page > total_pages) ? total_pages : next_page ;
            if (page_num != current_page && page_num != 0) {
                $('.goto-page.goto-li span').removeClass('background-orange').addClass('background-gray');
                $('.goto-page.next').attr('data-page',next_page);
                $('.goto-page.prev').attr('data-page',prev_page);
                $('.pagination-ul').attr('data-currentpage',page_num)
                $('#page-num').html(page_num)
                $('.goto-page.goto-li').each(function() {
                    var current_page_num = parseInt($(this).attr('data-page'));
                    if (current_page_num == page_num) {
                        $(this).children('span').removeClass('background-gray').addClass('background-orange');
                    }
                });
                var end_rang = listings_per_page*page_num;
                var start_range = (end_rang-listings_per_page)+1;
                console.log(start_range+" | "+end_rang);
                $('.single-listings').hide();
                for (var i=start_range; i<=end_rang; i++) {
                    $('.single-listing-'+i+'').fadeIn(500);
                }
            }
        }, 500);
    });

    $('.field-close-icon').click(function() {
        $(this).siblings('input').val('')
    });

    // CSRF Token

    (function($) {
        var CSRF_TOKEN = $('input[name="_token"]').val();
        $(document).ready(function() {

            // $("#search-term").autocomplete({
            //     source: function(request, response) {
            //         // Fetch data
            //         $.ajax({
            //             url: "{{url('autocomplete/getAutocomplete')}}",
            //             type: 'post',
            //             dataType: "json",
            //             data: {
            //                 _token: CSRF_TOKEN,
            //                 search: request.term,
            //                 city: $('#search-term').val()
            //             },
            //             success: function(data) {
            //                 response(data);

            //             }
            //         });
            //     },
            //     select: function(event, ui) {
            //         $('#search-term').val(ui.item.label);
            //         return false;
            //     }
            // });
            $("#search-location").autocomplete({
                source: function(request, response) {
                    // Fetch data
                    $.ajax({
                        url: "{{url('autocomplete/getAutocompletecity')}}",
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
                    $('#search-location').val(ui.item.label);
                    return false;
                }
            });
        });

    }(jQuery));
</script>
<script>
    $(function() {
        $('.lazy-loading').lazy({
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            visibleOnly: true,
        });
    });
</script>
<script>
    // Ranking Star
    $(document).ready(function() {
        $('.ranking-star-selection').click(function() {

            var current_url = window.location.href;
            var selected_star = parseInt($(this).attr('data-star'));

            if(current_url.includes("&star=")) {

                current_url = current_url.slice(0, -1);
                current_url = current_url.replaceAll("&star=",'');
                current_url = current_url+"&star="+selected_star;

            } else if(current_url.includes("&star=")){

                current_url = current_url.slice(0, -1);
                current_url = current_url.replaceAll("&star=",'');
                current_url = current_url+"&star="+selected_star;

            } else {

                current_url = current_url+"&star="+selected_star;

            }

            window.location.href = current_url;
        });
    });
</script>
</body>
</html>
