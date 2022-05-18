<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/icon/themify-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
 

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
                                                            Shaaa.me
                                                        </span>
                                                    </li>
                                                    <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
                                                            Shaaa Business
                                                        </span>
                                                    </li>
                                                    <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
                                                            Shaaa Promotion
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
                                                            Download the app
                                                        </span>
                                                    </li>
                                                    <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
                                                            Get a free Listing
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="top-navigation-links-main right-side">
                                                <ul class="top-navigation-links-ul">
                                                    <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
                                                            Advertise
                                                        </span>
                                                    </li>
                                                    <li class="top-navigation-links-li">
                                                        <span class="top-navigation-links-text">
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
                        <img src="assets/images/logo/logo.png" alt="">
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
                                        <form action="">
                                            <div class="search-form-main">
                                                <div class="form-fiels-inner">
                                                    <div class="form-field-inner">
                                                        <div class="form-field-icon">
                                                            <div class="field-search-icon">
                                                                <span class="ti-search"></span>
                                                            </div>
                                                            <input type="text" id="business_search"
                                                                placeholder="Restaurants">
                                                            <div class="field-close-icon">
                                                                <span class="ti-close"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-field-icon">
                                                            <div class="field-search-icon">
                                                                <span class="ti-location-pin"></span>
                                                            </div>
                                                            <input type="text" placeholder="Dubai">
                                                            <div class="field-close-icon">
                                                                <span class="ti-close"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-field-button">
                                                            <button>Search</button>
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
        <div class="site-login-outer">
            <div class="site-login-inner">
                <div class="site-login-main">
                    <div class="site-login-icon-outer">
                        <div class="user-login-icon">
                            <span class="ti-user"></span>
                            <span class="login-text">Login</span>
                            <span class="ti-angle-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="main-page-under-header">
    <div class="container">
        <div class="main-page-under-header-outer">
           @yield('container')
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
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Home Decor</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Garden
                                                    decor</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Laundering</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Hairstylist</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">News
                                                    vendors</a></li> </a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Archetonics</a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Constructor</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">House
                                                    agents</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Gasfitters</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Electrical
                                                    Experts</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-links-col">
                                        <ul class="footer-links-ul">
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Carpenter
                                                    shops</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Styling
                                                    Salon</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Drugstore,
                                                    Dispensary</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Portrait and
                                                    sketcher</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Wine bar</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Cafeteria</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Dining
                                                    room</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Dining
                                                    room</a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Restaurants</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Guest
                                                    Houses</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-links-col">
                                        <ul class="footer-links-ul">
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Steamfitters</a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Housekeeper</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Parking
                                                    lot</a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Agriculture</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Physician,
                                                    Clinician</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Roof
                                                    Material</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Fast Food</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Charity
                                                    Store</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Malls</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Retail
                                                    Store</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-links-col">
                                        <ul class="footer-links-ul">
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Mini
                                                    Market</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Mobile
                                                    Shop</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Chasses and
                                                    Brake</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Veterinary
                                                    doctor</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Vehicle
                                                    rental</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Medical
                                                    practitioner</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
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
                                        <span class="footer-about0us-link">About Sahaa.me</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Business listings</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Help & Support</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Sahaa App</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Sahaa Blogs</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Sahaa Reviews</span>
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
                                Our Businesses & Services
                            </div>
                            <div class="footer-about-main-links">
                                <div class="footer-about-main-links-outer">
                                    <div class="footer-about-main-links-inner">
                                        <span class="footer-about0us-link">Digital Marketing</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Result-Driven Services</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Google Ads</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Social Media Ads</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">SEO</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Websites</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Videos</span>
                                        <span class="side-devider">|</span>
                                        <span class="footer-about0us-link">Free Digital Marketing </span>
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
                                News & Blogs
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
                <div class="footer-about-text-div">
                    Disclaimer: The opinions expressed within Reviews are those of the author and not the views or
                    opinions of Yell Limited. Registered Office: 3 Forbury Place, Forbury Road, Reading, Berkshire, RG1
                    3YL. Registered in England and Wales No. 4205228 VAT Number: GB 765 346 017. © Yell Limited 2021.
                    All rights reserved. Yell, Yellow Pages and other ™ are trademarks of Yell Limited.
                </div>
                <div class="footer-about-main-links">
                    <div class="footer-about-main-links-outer">
                        <div class="footer-about-main-links-inner">
                            <span class="footer-about0us-link">Privacy Policy</span>
                            <span class="side-devider">|</span>
                            <span class="footer-about0us-link">Terms & Conditions</span>
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
            </div>
        </div>
    </footer>








</body>
</html>