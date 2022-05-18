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
                                Home / OUR PROJECTS
                            </div>
                            <div class="title">
                                OUR PROJECTS
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Title End -->
    <div class="project-search">
        <div class="project-search-outer">
            <div class="project-search-inner">
                <div class="container">
                    <div class="project-search-main">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="profile-project">
        <div class="profile-project-outer">
            <div class="profile-project-inner">
                <div class="container">
                    <div class="profile-project-grid-outer">
                        <div class="profile-project-grid-inner">
                            <div class="profile-project-grid">
                            <?php foreach($projects AS $project) { ?>
                                <div class="profile-project-grid-col">
                                    <div class="profile-project-grid-col-outer">
                                        <div class="profile-project-grid-col-inner">
                                            <div class="profile-project-grid-image">
                                                <img src="{{asset('business/mini-site-resources/projects')}}/<?php echo $project->image;?>" alt="">
                                            </div>
                                            <div class="profile-project-grid-text">
                                                <div class="profile-project-type">
                                                    Construction
                                                </div>
                                                <div class="profile-project-title">
                                                    <?php echo $project->title;?>
                                                </div>
                                                <!-- <div class="profile-project-action">
                                                    <div class='icon'>
                                                        <span class="ti-eye"></span>
                                                        <span class="text">123</span>
                                                    </div>
                                                    <div class='icon'>
                                                        <span class="ti-heart"></span>
                                                        <span class="text">5</span>
                                                    </div>
                                                    <div class='icon'>
                                                        <span class="ti-sharethis"></span>
                                                        <span class="text">18</span>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                            <div class="profile-project-pagination">
                                <div class="profile-project-pagination-outer">
                                    <div class="profile-project-pagination-inner">
                                        <ul class='profile-project-pagination-ul'>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'><span class='ti-angle-left'></span></span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>1</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>2</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>3</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>4</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>5</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>6</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>...</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>11</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'>12</span>
                                            </li>
                                            <li class="profile-project-pagination-li">
                                                <span class='profile-project-pagination-span'><span class='ti-angle-right'></span></span>
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
    </section>
    @include('home/site-layout.footer')
    @include('home/site-layout.script')
</body>
</html>