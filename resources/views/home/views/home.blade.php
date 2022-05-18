<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Search | Sahaa.me</title>
    @include('site-layout.style')
</head>
<body>
    @include('site-layout.top-bar')
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
                                            <img src="{{asset('public/assets/images/logo/logo.png')}}" alt="">
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
            </div>
        </div>
    </section>
    <!-- Main Section Start -->
    <!-- <section class="home-section" style="background-image: url({{asset('public/assets/images/home/main-bg.jpg')}});">
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
                                                    <img src="{{asset('public/assets/images/home/icons/arrow-down.svg')}}" alt="">
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
    <section class="home-section" style="background-image: url({{asset('public/assets/images/home/main-bg.jpg')}});">
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
                                        <form action="{{url('search')}}" method='POST'>
                                            {{ csrf_field() }}
                                                <div class="home-page-search-section-form">
                                                    <div class="home-page-search-section-form-outer">
                                                        <div class="home-page-search-section-form-inner">
                                                            <div class="home-page-search-section-form-box">
                                                                <div class="home-page-search-section-form-fields">
                                                                    <div class="search-section-form-fields-outer city">
                                                                        <span class="icon">
                                                                            <img src="{{asset('public/assets/images/home/icons/location.svg')}}" alt="">
                                                                        </span>
                                                                        <input type="text" placeholder="Select city, Area" name='area'>
                                                                    </div>
                                                                    <div class="search-section-form-fields-outer input">
                                                                        <span class="icon"><span class="ti-search"></span></span>
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
                                                    <div class="home-page-slider-slide slide-01 active">
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
                                                    <div class="home-page-slider-slide slide-02">
                                                        <div class="home-page-slider-slide-text">
                                                            <div class="text">
                                                                Top 10 <br> Resturants
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
                                                                Top 10 <br> Schools
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
                                                            <span class="dot active" data-slide=".slide-01" data-image='{{asset("public/assets/images/home/main-bg.jpg")}}'></span>
                                                            <span class="bar"></span>
                                                            <span class="dot" data-slide=".slide-02" data-image='{{asset("public/assets/images/home/main-bg-02.jpg")}}'></span>
                                                            <span class="bar"></span>
                                                            <span class="dot" data-slide=".slide-03" data-image='{{asset("public/assets/images/home/main-bg-03.jpg")}}'></span>
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
                                        <img src="{{asset('public/assets/images/home/icons/arrow-down.svg')}}" alt="">
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
                                    <div class="explore-section-grid-col">
                                        <div class="explore-section-grid-col-outer">
                                            <div class="explore-section-grid-col-image">
                                                <img src="{{asset('public/assets/images/home/icons/automotive.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/cleaning.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/gym.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/movers.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/finance.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/electrition.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/mobile-repair.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/laundary.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/landscaping.svg')}}" alt="">
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
                                                <img src="{{asset('public/assets/images/home/icons/health.svg')}}" alt="">
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
                                        <button>See More</button>
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
                <div class="container">
                    <div class="app-links-main">
                        <div class="app-links-inner-grid">
                            <div class="app-links-inner-grid-col">
                                <div class="app-links-image app-button-main">
                                    <img src="{{asset('public/assets/images/home/s2img1.JPG')}}" alt="">
                                    <div class="app-button">
                                        <div class="app-button-outer">
                                            <div class="app-button-inner">
                                                <a href="#">
                                                    <img src="{{asset('public/assets/images/home/image-022.png')}}" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="{{asset('public/assets/images/home/image-020.png')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="app-links-inner-grid-col">
                                <div class="app-links-image">
                                    <img src="{{asset('public/assets/images/home/s2img2.JPG')}}" alt="">
                                </div>
                            </div>
                            <div class="app-links-inner-grid-col">
                                <div class="app-links-image">
                                    <img src="{{asset('public/assets/images/home/s3img3.JPG')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- App Link End -->
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
                                                        <img src="{{asset('public/assets/images/home/icons/verified-reviews.svg')}}" alt="">
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
                                                        <img src="{{asset('public/assets/images/home/icons/business-categories.svg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-trust-grid-col-title">
                                                    Business Categories
                                                </div>
                                                <div class="why-trust-grid-col-nums">
                                                    300+
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
                                                        <img src="{{asset('public/assets/images/home/icons/free-markiting.svg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-trust-grid-col-title">
                                                    Free Marketing
                                                </div>
                                                <div class="why-trust-grid-col-nums">
                                                    OPPORTUNITY
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
                                                        <img src="{{asset('public/assets/images/home/icons/right-audiance.svg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="why-trust-grid-col-title">
                                                    Get to know the
                                                </div>
                                                <div class="why-trust-grid-col-title-text">
                                                    right audience
                                                </div>
                                                <div class="why-trust-grid-col-text">
                                                    Find out about our verified reviews that have had a significant impact on our online reputation, as well as what others have to say about our Company's services.
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
        <div class="new-user-outer" style="background-image: url({{asset('public/assets/images/home/icons/footer-bg.svg')}});">
            <div class="new-user-inner">
                <div class="container">
                    <div class="new-user-main" style="background-image: url({{asset('public/assets/images/home/icons/gift02.svg')}});">
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
                                                    <img src="{{asset('public/assets/images/home/icons/coupon.svg')}}" alt="">
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
                                                    <img src="{{asset('public/assets/images/home/icons/gift.svg')}}" alt="">
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
    @include('site-layout.footer')
    @include('site-layout.script')
</body>
</html>