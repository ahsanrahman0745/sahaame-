@extends('frontend.front.main')
<head>
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
</head>
<style>


.bt:hover {
  background-color: #e97d12;
  color: #e97d12;
}
.guide[data-v-9ae41412] {
		    align-items: center;
		    border-radius: 3px;
		    box-shadow: 0 2px 20px 0 rgb(0 0 0 / 15%);
		    cursor: pointer;
		    display: flex;
		    flex-direction: column;
		    justify-content: center;
		    padding: 2rem 0 3rem;
		    text-decoration: none;
		}
		.gui[data-v-9ae41412] {
		    border-radius: 3px;
		    box-shadow: 0 2px 20px 0 rgb(0 0 0 / 15%);
		    cursor: pointer;
		    display: flex;
		    flex-direction: column;
		    padding: 0.5rem 0;
		    text-decoration: none;
		    width: 100%;
		}
		.guides[data-v-9ae41412] {
		    display: flex;
		    flex: 1;
		    justify-content: space-around;
		    max-width: 900px;
		}
</style>

@section('container')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
				<br><br>
				<h1 style="font-family: Open Sans,Arial,sans-serif;color: #404040;font-size: 50px">Video marketing</h1>
				<h5 style="padding-top: 20px;color: #404040">Bring your business to life online with a video from the local digital experts</h5><br>
				<button class="btn bt" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Request a Free quate</button>
			</center>
			<br><br>
		</div>
		<br><br>
	</div>
</div>
<div style="background-color: #e97d12; color: white; padding:50px 0">
<div class="container" >
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
				<br>
				<h1 style="font-family: Open Sans,Arial,sans-serif;font-size: 30px">A picture says a thousand words</h1>
			</center>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12">
			<br>
			<div class="container">
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<center >
					<p style="font-size: 20px">
				
					With many businesses selling similar products and services, it’s hard to stand out online.<br>But the best businesses, including some of your competitors, bring their offerings to life using video. Video is a powerful way to help consumers understand your products and services and explain why your business is different to the competition.
					</p>
					</center>
				</div>
			</div>
			</div>
		</div>
		
	</div>
</div>
</div>
<div class="video-markiting" style="padding: 50px 0">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
				<h1 style="font-family: Open Sans,Arial,sans-serif;font-size: 30px; margin-bottom:20px">What you get with a video from Sahaa</h1>
			</center>
			<div class="container-fluid">
				<center>
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="guides">
								<p   class="guide" data-v-9ae41412  style="font-size: 19px;padding:15px;">We’ve options for all needs and budgets, from scriptwriting to music, voiceover and a director<br><br></p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="guides">
								<p  class="guide"  data-v-9ae41412 style="font-size: 19px;padding:15px;">Animation and aerial drone footage options are also available to really bring your business to life<br><br></p>

							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="guides">
								<p  class="guide" data-v-9ae41412  style="font-size: 19px;padding:15px;">Your Video will be distributed online including YouTube, the world’s second largest website, to be found easily</p>
							</div>
						</div>
						
					</div>
				</center>
			</div>
			<!-- <video width="100%" controls>
				<source  src="{{('assets/images/pic/video.mp4')}}" type="video/mp4">
			</video> -->
		</div>
	</div>
</div>
</div>

<div class="social-media-top-outer" style="background-color: #f2f2f2; color: #000; padding:50px 0">
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
				<h1 style="font-family: Open Sans,Arial,sans-serif;color: #404040;font-size: 30px">Are you an existing customer looking for support? <b style="color:#e97d12">Visit our support hub</b></h1>
				<br>
			</center>
			<div class="row">
				<div class="col-lg-6 col-lg-6">
					<div class="form-group">
					    <input type="text" style="height: 45px;font-size: 20px" class="form-control" id="inputAddress" placeholder="First Name*">
					</div>
					<div class="form-group">
					    <input type="text" style="height: 45px;font-size: 20px" class="form-control" id="inputAddress" placeholder="Last Name*">
					</div>
					<div class="form-group">
					    <input type="text" style="height: 45px;font-size: 20px" class="form-control" id="inputAddress" placeholder="Company*">
					</div>
					<div class="form-group">
					    <input type="text" style="height: 45px;font-size: 20px" class="form-control" id="inputAddress" placeholder="Website Adress">
					</div>
					<div class="form-group">
					    <input type="text" style="height: 45px;font-size: 20px" class="form-control" id="inputAddress" placeholder="Email Adress">
					</div>
					<div class="form-group">
					    <input type="text" style="height: 45px;font-size: 20px" class="form-control" id="inputAddress" placeholder="Phone Number">
					</div>
					<center>
						<button class="btn bt" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Request a Free call back</button>
					</center>
				</div>
				<div class="col-lg-6 col-lg-6">
					<div class="row">
						<div class="col-lg-6">
							<center>
								<br><br>
								<span class="social-media-icon">
									<div class="ti-headphone-alt"></div>
								</span>
								<br>
								<h2><b>0800 777 445</b></h2>
								<p>Mon-Thu 8:30am-6:00pm<br>

								Fri 8:30am-5:30pm

								</p>
							</center>
						</div>
						<div class="col-lg-6">
							<center>
								<br><br>
								<span class="social-media-icon">
									<div class="ti-comments"></div>
								</span>
								<button class="btn " style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 30px">Online now</button>
								<p>Ready to chat 24/7<br>
								7 days a week
								</p>
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
