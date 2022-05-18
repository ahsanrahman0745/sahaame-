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