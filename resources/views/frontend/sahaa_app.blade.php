@extends('frontend.front.main')
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>{{$page_name}} | Sahaa.me</title>
    <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CT19N7GEB1');
    </script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/templatemo-chain-app-dev.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animated.css')}}">
  </head>
<style>
ul {
  list-style: none;
}

.ul .li:before {
	color: #e87526;
  content: '✓';
}

footer {
    margin-top: 70px;
    padding-top: 0;
}
</style>
@section('container')
  <div class="main-banner wow fadeIn custom-gray-bg" id="top" data-wow-duration="1s" data-wow-delay="0.5s" style="">
    <div class="container" >
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <center>
                    	<h2>Get The Sahaa App From App Stores</h2>
                    <p></p>
                    </center>
                  </div>
                  <div class="col-lg-12">
                    <center>
                    	<div class="white-button first-button scroll-to-section">
                      <a href="#contact" style="background-color: #e87526">Free Quote <i class="fab fa-apple"></i></a>
                    </div>
                    <div class="white-button scroll-to-section">
                      <a href="#contact" style="background-color: #e87526">Free Quote <i class="fab fa-google-play"></i></a>
                    </div>
                    </center>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec.png" alt="">
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="container">
	<div class="row">
		<div class=" col-lg-12 col-sm-12">
			<center>
				<br><br>
				<!-- <h1>The Sahaa app for iOS & Android</h1> -->
			</center>
			<div class="row align-items-center">
				<div class="col-lg-12 col-sm-12 mb-5"><br><br>
					<center>
						<p style="font-size: 23px;color: black">Find local businesses on the go</p>
					<p style="font-size: 18px;color: black">The Sahaa app is the quickest way to find the businesses near you, wherever you are. Download the free Sahaa app on the App Store or Google Play now *</p>
					</center>
					
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
					<center>
						<img src="{{('frontend/assets/images/pic/pic163.PNG')}}"  width="100px" class="" style="image-rendering: pixelated;" alt="">
					</center>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
          <br>
					<ul style="font-size: 19px" class="ul">
					  <li class="li">&nbsp;&nbsp;Search the UK’s leading online business directory on the go</li>
					  <li class="li">&nbsp;&nbsp;Find and connect with millions of local businesses</li>
					  <li class="li">&nbsp;&nbsp;Keep your favourite services and businesses close at hand</li>
					  <li class="li">&nbsp;&nbsp;Rate and review businesses with ease</li>
					  <li class="li">&nbsp;&nbsp;Get directions to a business</li>
					</ul>
          <br>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
				
						<img src="{{('frontend/assets/images/pic/pic162.PNG')}}" style="image-rendering: pixelated;" width="100px" class="" alt="">
					
				</div>
			</div>
		</div>
	</div>
</div>
  <script src="frontend/vendor/jquery/jquery.min.js"></script>
  <script src="frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/js/owl-carousel.js"></script>
  <script src="frontend/assets/js/animation.js"></script>
  <script src="frontend/assets/js/imagesloaded.js"></script>
  <script src="frontend/assets/js/popup.js"></script>
  <script src="frontend/assets/js/custom.js"></script>
@endsection
