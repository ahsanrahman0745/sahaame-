<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$page_title}}</title>
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
                                <div class="site-search-box-outer">
                                    <div class="site-search-box-inner">
                                        <div class="site-search-box-main">
                                            <div class="site-search-box-main-inner">
                                                <div class="site-search-box-main-outer">
                                                    <div class="search-form-outer">
                                                        <div class="search-form-inner">
                                                            <form action="{{url('business/search')}}" method='POST'>
                                                                {{ csrf_field() }}
                                                                <div class="search-form-main">
                                                                    <div class="form-fiels-inner">
                                                                        <div class="form-field-inner">
                                                                            <div class="form-field-icon">
                                                                                <div class="field-search-icon">
                                                                                    <span class="ti-search"></span>
                                                                                </div>
                                                                                <input type="text" placeholder="Name" name='term' value='<?php if(isset($term)){echo $term;} ?>' id='search-term'>
                                                                                <div class="field-close-icon">
                                                                                    <span class="ti-close"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-field-icon">
                                                                                <div class="field-search-icon">
                                                                                    <span class="ti-location-pin"></span>
                                                                                </div>
                                                                                <input type="text" class='ui-widget' placeholder="Location" value='<?php if(isset($location)){echo $location;} ?>' name='location' id='search-location'>
                                                                                <div class="field-close-icon">
                                                                                    <span class="ti-close"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-field-button">
                                                                                <button type='button' name='search' id='search-button' value='Search'>Search</button>
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
                                <div class="logged-in-user-menu">
                                    
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
                        <div class="mobile-show-search">
                            <div class="site-search-box-inner">
                                <div class="site-search-box-main">
                                    <div class="site-search-box-main-inner">
                                        <div class="site-search-box-main-outer">
                                            <div class="search-form-outer">
                                                <div class="search-form-inner">
                                                    <form action="{{url('business/search')}}" method='POST'>
                                                        {{ csrf_field() }}
                                                        <div class="search-form-main">
                                                            <div class="form-fiels-inner">
                                                                <div class="form-field-inner">
                                                                    <div class="form-field-icon">
                                                                        <div class="field-search-icon">
                                                                            <span class="ti-search"></span>
                                                                        </div>
                                                                        <input type="text" placeholder="Name" name='term' value='<?php if(isset($term)){echo $term;} ?>' id='search-term-mob'>
                                                                        <div class="field-close-icon">
                                                                            <span class="ti-close"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-field-icon">
                                                                        <div class="field-search-icon">
                                                                            <span class="ti-location-pin"></span>
                                                                        </div>
                                                                        <input type="text" class='ui-widget' placeholder="Location" value='<?php if(isset($location)){echo $location;} ?>' name='location' id='search-location-mob'>
                                                                        <div class="field-close-icon">
                                                                            <span class="ti-close"></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-field-button">
                                                                        <button type='button' name='search' value='Search' id='search-button-mob'>Search</button>
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
    </section>
    <div class="guest-user-profile">
        <div class="guest-user-profile-outer">
            <div class="guest-user-profile-inner">
                <div class="guest-user-profile-main">
                    <!-- Banner Start -->
                    @include('home/site-layout.guest.banner')
                    <!-- Banner End -->
                    <!-- Profile Start -->
                    <div class="guest-user-profile-container">
                        <div class="guest-user-profile-container-outer">
                            <div class="container">
                                <div class="guest-user-profile-container-inner">
                                    <!-- Profile Card Start -->
                                    @include('home/site-layout.guest.profile-card')
                                    <!-- Profile Card End -->
                                    <div class="guest-user-profile-content">
                                        <div class="guest-user-profile-content-outer">
                                            <div class="guest-user-profile-content-inner">
                                                <!-- Alerts -->
                                                <div class="guest-user-profile-content-setion-title">
                                                    <div class="guest-user-profile-content-setion-title-outer">
                                                        <div class="guest-user-profile-content-setion-title-inner">
                                                            User Dashboard
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="guest-user-profile-content-setion-navigation">
                                                    <div class="guest-user-profile-content-setion-navigation-outer">
                                                        <div class="guest-user-profile-content-setion-navigation-inner">
                                                            <div class="guest-user-profile-content-setion-navigation-nav">
                                                            <div class="guest-user-profile-content-setion-navigation-nav-text active">
                                                                    <a href="{{url('guest/profile')}}/reviews">Reviews</a>
                                                                </div>
                                                                <div class="guest-user-profile-content-setion-navigation-nav-text">
                                                                    <a href="{{url('guest/profile')}}">Settings</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="guest-user-profile-content-setion-main-content">
                                                    <div class="guest-user-profile-content-setion-main-content-outer">
                                                        <div class="guest-user-profile-content-setion-main-content-inner">
                                                            <div class="guest-user-profile-content-single-section">
                                                                <div class="guest-user-profile-content-single-section-outer">
                                                                    <div class="guest-user-profile-content-single-section-title">
                                                                        Edit Your Review
                                                                    </div>
                                                                    <div class="guest-user-profile-update-profile-section">
                                                                        <div class="guest-user-profile-update-profile-section-outer">
                                                                            <form action="{{url('guest/profile/review/update')}}/{{$review_data->id}}" method='POST'>
                                                                                @csrf
                                                                                <div class="guest-user-profile-update-profile-section-inner">
                                                                                    <div class="guest-user-profile-update-profile-box">
                                                                                        <div class="guest-user-profile-update-profile-fields-edit">
                                                                                            <div class="guest-user-profile-update-profile-section-field-review">
                                                                                                <label>Title</label>
                                                                                                <input type="text" class='field' name='title' value='{{$review_data->title}}'>
                                                                                            </div>
                                                                                            <div class="guest-user-profile-update-profile-section-field-review">
                                                                                                <label>Review</label>
                                                                                                <textarea name='review' id="" cols="30" rows="10" class='field'>{{$review_data->review}}</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="guest-user-profile-update-profile-save-button">
                                                                                            <button>Save Changes</button>
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
                        </div>
                    </div>
                    <!-- Profile End -->
                </div>
            </div>
        </div>
    </div>
    @include('home/site-layout.footer')
    @include('home/site-layout.script')
    @include('home/site-layout/guest.script')
    <script>
        $(document).ready(function() {
            $("#search-button") .click(function() {
               var term_val = $('#search-term').val();
               var location_val = $('#search-location').val();
               term_val = (term_val == '') ? '' : term_val;
               location_val = (location_val == '') ? '' : location_val;
               window.location.href = "{{url('business/search')}}/meta=|category=|term="+term_val+"|location="+location_val+"|services=|_s=";
            });
        });
    </script>
</body>
</html>