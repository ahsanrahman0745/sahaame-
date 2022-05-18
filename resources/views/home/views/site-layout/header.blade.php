<div class="main-page-header-inner">
    <div class="site-logo-outer-search">
        <div class="site-logo-outer">
            <div class="site-logo-inner">
                <div class="site-logo-main">
                    <img src="{{asset('public/assets/images/logo/logo.png')}}" alt="">
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
                                    <form action="{{url('search')}}" method='POST'>
                                        {{ csrf_field() }}
                                        <div class="search-form-main">
                                            <div class="form-fiels-inner">
                                                <div class="form-field-inner">
                                                    <div class="form-field-icon">
                                                        <div class="field-search-icon">
                                                            <span class="ti-search"></span>
                                                        </div>
                                                        <input type="text" placeholder="Restaurants" name='query'>
                                                        <div class="field-close-icon">
                                                            <span class="ti-close"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-field-icon">
                                                        <div class="field-search-icon">
                                                            <span class="ti-location-pin"></span>
                                                        </div>
                                                        <input type="text" placeholder="Dubai" name='area'>
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