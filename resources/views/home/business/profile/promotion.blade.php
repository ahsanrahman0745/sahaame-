<?php
$site_info = $site_info[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$business_name}} | Sahaa.me</title>
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
@include('home.site-layout.top-bar')
    <section class="section-main-page">
        <div class="main-page-inner">
            <div class="main-page-inner-main">
                <div class="main-page-header">
                    <div class="container">
                        @include('home.site-layout.header')
                    </div>
                </div>
                @include('home/business/inc.banner-top')
                <!-- Page Navigation Start -->
                @include('home/business/inc.navigation')
                <!-- Page Navigation End -->
            </div>
        </div>
    </section>
    <!-- Main Title -->
    <div class="page-title">
        <div class="page-title-outer">
            <div class="page-title-inner">
                <div class="container">
                    <div class="page-title-main">
                        <div class="page-title-main-outer">
                            <div class="site-nav">
                                Home / OUR PROMOTIONS
                            </div>
                            <div class="title">
                                OUR PROMOTIONS
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Title End -->
    <section class="promotions">
        <div class="promotions-outer">
            <div class="promotions-inner">
                <div class="container">
                    <div class="promotions-main">
                        <div class="promotions-title">
                            Recent Promotins
                        </div>
                        <div class="promotions-grid-outer">
                            <div class="promotions-grid-inner">
                                <div class="promotions-grid">
                                    @foreach($promotions AS $promotion)
                                    <div class="promotions-grid-col">
                                        <div class="promotions-grid-col-outer">
                                            <div class="promotions-grid-col-inner">
                                                <div class="promotions-grid-col-image">
                                                    <img src="{{asset('business/mini-site-resources/promotions')}}/{{$promotion->image}}" alt="">
                                                </div>
                                                <div class="promotions-grid-col-type">
                                                    Promotion Type
                                                </div>
                                                <div class="promotions-grid-col-title">
                                                    {{$promotion->title}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="promotions p-0">
        <div class="promotions-outer">
            <div class="promotions-inner">
                <div class="container">
                    <div class="promotions-main">
                        <div class="promotions-title">
                            Past Promotins
                        </div>
                        <div class="promotions-grid-outer">
                            <div class="promotions-grid-inner">
                                <div class="promotions-grid">
                                    @foreach($promotions AS $promotion)
                                    <div class="promotions-grid-col">
                                        <div class="promotions-grid-col-outer">
                                            <div class="promotions-grid-col-inner">
                                                <div class="promotions-grid-col-image">
                                                    <img src="{{asset('business/mini-site-resources/promotions')}}/{{$promotion->image}}" alt="">
                                                </div>
                                                <div class="promotions-grid-col-type">
                                                    Promotion Type
                                                </div>
                                                <div class="promotions-grid-col-title">
                                                    Promotion Title
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('home/site-layout.footer')
    @include('home/site-layout.script')
</body>
</html>