<div class="business-page-navigation">
    <div class="business-page-navigation-outer">
        <div class="container">
            <div class="business-page-navigation-inner">
                <div class="business-page-navigation-main">
                    <div class="site-logo">
                        <div class="site-logo-outer">
                            <div class="site-logo-inner">
                                <img src="{{asset('business/mini-site-resources/basic-info')}}/<?php echo $site_info->site_logo; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="page-navigation">
                        <div class="page-navigation-outer">
                            <div class="page-navigation-inner">
                                <div class="page-navigation-main">
                                    <ul class="page-navigation-ul">
                                    <li class="page-navigation-li">
                                            <a href="{{url('/')}}" class="page-navigation-link">Home</a>
                                        </li>
                                        <!-- <li class="page-navigation-li">
                                            <a href="#" class="page-navigation-link">Services</a>
                                        </li> -->
                                        <li class="page-navigation-li">
                                            <a href="{{url('business')}}/{{$business_slug}}" class="page-navigation-link">Profile</a>
                                        </li>
                                        <li class="page-navigation-li">
                                            <a href="{{url('business/profile')}}/{{$business_slug}}/projects" class="page-navigation-link">Projects</a>
                                        </li>
                                        <li class="page-navigation-li">
                                            <a href="{{url('business/profile')}}/{{$business_slug}}/promotions" class="page-navigation-link">Promotion</a>
                                        </li>
                                        <!-- <li class="page-navigation-li">
                                            <a href="#" class="page-navigation-link">Blog & News</a>
                                        </li> -->
                                        <li class="page-navigation-li">
                                            <a href="{{url('business')}}/{{$business_slug}}#contact-supplier" class="page-navigation-link">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-search">
                        <div class="page-search-outer">
                            <div class="page-search-inner">
                                <div class="page-search-main">
                                    <form action="#">
                                        <div class="page-search-field-outer">
                                            <div class="page-search-field-icon">
                                                <span class="ti-search"></span>
                                            </div>
                                            <input type="text" placeholder="Looking for something?" class="page-search-field">
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