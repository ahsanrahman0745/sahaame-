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
	<style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.036 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
</head>
<style>
		.a{
			color: white;
			text-decoration: none;
			font-size: 13px
		}
		.aa{
			color: black;
			text-decoration: none;
			font-size: 20px;
		}
		.search{
			font-size: 16px;
		    padding: 10px 10px 10px 60px;
		    height: 48px;
		    background-color: #F2F2F2;
		    border-radius: 6px;
		    border: 2px solid gray;
		    box-shadow: none;
		    color: #183247;
		    width: 1100px
		}
		.ul .li{
		  display: inline;
		}
		.aaa{
			color: black;
			text-decoration: none;
			font-family: "Open Sans";
			font-size: 16px;
		}
		.s{
			color: black;
		    text-decoration: none;
		    box-sizing: border-box;
		    cursor: pointer;
		    line-height: 21.875px;
		    font-size: 15px;
		}
		button.icon {
	padding-left:20px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('frontend/assets/images/pic/pic168.PNG')}}');

	}
	.icon {
	  padding-left: 25px;
	  padding-right: 45px;
	  background: url('{{('frontend/assets/images/pic/pic170.PNG')}}') no-repeat left;
	  background-size: 40px;
	}
	.icon2 {
	  padding-left: 25px;
	  padding-right: 45px;
	  background: url('{{('frontend/assets/images/pic/pic170.PNG')}}') no-repeat left;
	  background-size: 40px;
	}

	</style>
@section('container')
<!-- search navbar -->
@include('frontend/include.search-section')
<br><br>
<div class="container">
	<div class="row">
	@include('frontend/include.side-bar-nav')
		<div class="col-lg-9 col-md-9 col-sm-12  mobile-order-01 mobile-margin-bottom" style="">
			<div class="container" style="height: 100%;background-color: #f2f2f0;">
				<div class="row" style="background-color: #f2f2f0;margin-left: 20px">
					<div class="col-lg-12 ">
							<br>
							<h2 style="color: #e97d12"><b>Increase your business's visibility on SAHAA.ME </b></h2>
							<br>
							<p style="font-size: 18px;color: black">
							You can improve your SAHAA.ME Businesslisting. For each search on Sahaa, we first determine which category or subcategories best fit the user's query. Related products, brand, and service terms influence our search results. Businesses that specialize in antique furnishings will also be found if a user searches for "high ceilings renovations."You can't double-score a business that has both "beauty salon" and "beauty products and salon" on its website if the user is specifically seeking for "beauty salon".<br><br>
							In order to ensure that the listings and website information match exactly, we first look to see if the user has specified any specific products, services, or brands. <br><br>
							Assuming two or more businesses are equally relevant, the ranking of those enterprises is randomly distributed—each one has an equal probability of being placed above the other (s).<br><br>
							You may help us show your business more regularly by updating the content and business overview on your listing. The more information you provide, the more likely we are to feature your ad to our users.

							</p>
							<br><br><br><br>
							<div class="container">
								<div class="row" style=";float: right;display: flex; justify-content: space-between;margin-bottom: 0;right: 0">
									<div class="col-lg-6 col-sm-12">
										Did you find this artical helpful <br><br>
									</div>
									<div class="col-lg-3 col-sm-6 col-6">
										<button class="btn" style="background-color: white;border: 1px solid black;padding-left: 30px;padding-right: 30px;display: flex;margin-top: -10px;height: 50px"><img class="d-block " src="{{('frontend/assets/images/pic/pic169.PNG')}}"  height="" alt="Second slide" style=""></p> <p style="padding-top: 4px;">YES</p></button>
										<br>
									</div>
									<div class="col-lg-3 col-sm-6 col-6">
										<button class="btn" style="background-color: white;border: 1px solid black;padding-left: 30px;padding-right: 30px;display: flex; justify-content: space-between;;margin-top: -10px;height: 50px"><img class="d-block " src="{{('frontend/assets/images/pic/pic171.PNG')}}"  height="" alt="Second slide" style=""></p> <p style="padding-top: 4px;">NO</p></button>
									</div>
								</div>
							</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
			<!-- <div class="container-fluid">
				
				<div class="row" id="div_register" style="background-color: #333333;">
					<div class="col-lg-4 col-sm-2">
						
					</div>
					<div class="col-lg-4 col-sm-8">
						<center>
							<h1 style="color: white;font-size: 28px;line-height: 43.75px;display: block;">How can we help you today?</h1><br>
							<form class="">
							    <input class="form-control search" type="search" placeholder="Search the Knowledge Base" aria-label="Search">
							    </form><br>
							    <p style="color: white;">OR</p>
							    <a href="" style="color: #e87503">Search Sahaa.me for a business here</a>
						</center>
					</div>
					<div class="col-lg-4 col-sm-2">
						
					</div>
				</div>
			</div>
			<script>
				document.getElementById('div_register').setAttribute("style","background-color: #333333","");
			</script> -->

		<!-- <div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-sm-12">
					<nav class="navbar" style="background-color: white">
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto ul">
		      <li class="nav-item active li">
		        <a class="nav-link aaa" href="#" style="padding-left: 200px;">Help Centre &nbsp;> &nbsp;</a>
		      </li>
		      <li class="nav-item li">
		        <a class="nav-link aaa" href="#">Products&nbsp; >&nbsp;</a>
		      </li>
		      <li class="nav-item li">
		        <a class="nav-link aaa" href="#">About Sahaa.me</a>
		      </li>
		    </ul>
		  </div>
		</nav>
				</div>
			</div>
		</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-8 col-sm-12" >
				<b><h2 style="font-size: 22px;">Products articles</h2></b>
				<h3 style="font-size: 16px;font-weight: 600;text-transform: uppercase;margin-bottom: 5px">Sahaa.me</h3>
				<ul style=" color: white">
					<li style="background-color: white;color: black;border: 1px solid silver">
						<a class="s" href="{{ url('about') }}" style="color: #e87503;padding-left: 5px">About Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('edit') }}" style="color: black">Edit business listing on Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('owners') }} " style="color: black">How business owners can use Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('use') }} " style="color: black">How to use Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('local') }} " style="color: black">Using Sahaa.me to find local businesses</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('location') }} " style="color: black">Using Sahaa.me to find businesses by location</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('search') }} " style="color: black">Searching on Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('claim') }}" style="color: black">Claim your Business on Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('profile') }}" style="color: black">How do I edit or add content to my Sahaa.me business profile?</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('advertise') }}" style="color: black">To Advertise my businesson Sahaa.me, i want a free business listing</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('visibility') }}" style="color: black">Increase your business visibility on Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('app') }}" style="color: black">Can I claim my Business listing on Sahaa Business app?</a>
					</li>

				</ul>
			</div>
			<div class="col-lg-8 col-sm-12" >
				<b><h2>About Sahaa.me:</h2></b>
				<p style="color:gray;padding-top: 4px;margin-top: -10px" class="p">Last Updated Thu, 11 Nov, 2021 at 12:04 PM</p>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-lg-6">
						<img src="{{('assets/images/pic/Abut us.png')}}" width="100%" height="100%" class="d-inline-block align-top" alt="">
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<p style="padding-top: 30px;font-size: 14px;">Sahaa.me is the UAE's largest & most-trusted online business directory, started in 2020 in the United Arab Emirates. Since then, we've been a one-stop shop for finding the best local businesses and customers. A most appropriate platform with the names, addresses, and contact details of millions of businesses ready to assist you in finding the most suitable business in your area without having to search hundreds of websites. Search among thousands of business categories that match the type of business you require, or find the perfect business near you just by typing a company name into the search bar.<br></p>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<br><br>
						<p style="padding-top: 30px"><b>Or would you like Sahaa to advertise your business?</b> <br>We've been connecting buyers and sellers all around the globe at Sahaa.me. We provide a broad range of digital marketing services to companies of all kinds, large and small. Learn more about Local Business Listing, social media advertising, website design, blog posting, and other services for your business at Digital Marketing, or give us a call.</p>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
						<br><br>
						<img src="{{('assets/images/pic/Website.png')}}" width="100%" height="100%" class="d-inline-block align-top" alt="">
					</div>
					
				</div>
			</div>
		</div>
	</div>
 -->

@endsection
