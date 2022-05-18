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
		.centered {
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		}
		.reviewsPage--hero {
		    position: relative;
		    height: 50%;
		    max-height: 500px;
		    background-position: top;
		    background-repeat: no-repeat;
		    background-size: cover;
		    text-align: center;
		}
		.img {
			  border-radius: 50%;
			}
		.inline { 
		    display: inline-block; 
		    margin:10px;
		    }
		    .search {
	padding-left:20px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('frontend/assets/images/pic/pic145.PNG')}}');
}
.searc {
	padding-left:20px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('frontend/assets/images/pic/pic146.PNG')}}');
}
.content {
  position: absolute;
  bottom: 50;
  top: 0;
  background: #dd8721; /* Fallback color */
  background: rgba(221, 135, 33, 0.8); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 300px;
}
	</style>
@section('container')
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12" class="" >
				<div class="row">
					
				<div class="col-lg-12 col-sm-12" style="background-image: url('{{('frontend/assets/images/pic/main.jpg')}}');height: 500px;opacity: 0.5">
					
				</div>
				</div>
				
				<div class="centered"><h1 style="font-size: 350%;color: #e87503;">
					<center>
				Review a local business today</h1>
					<h2 style="font-size: 150%;color: black;font-weight: 300; text-align: center;"><b>Help other consumers to make better decisions by sharing your experience with us.</b></h2>
					</center>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #e87503;height: auto;">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<br><br>
				<div class="container">
			      					<div class="row">
			      						<div class="col-sm-12 col-md-12 col-lg-12">
			      							<div class="input-group mb-3 mobile-inputs">
											  <!-- <div class="input-group-prepend">
											    <span class="" style="border-right: white;"><img class="d-block w-100" src="{{('assets/images/pic/pic145.png')}}" height="47px" alt="Third slide" style=""></span>
											  </div> -->
											  <input type="text" class="form-control search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter a search term" aria-label="Amount (to the nearest dollar)" style="height: 47px;color: #f2f2f2;font-size: 18px">
											  <!-- <div class="input-group-prepend">
											    <span class=""><img class="d-block w-100" src="{{('assets/images/pic/pic146.png')}}" height="47px" alt="Third slide"></span>
											  </div> -->
											  <input type="text" class="form-control searc" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UAE, town or postcode" aria-label="Amount (to the nearest dollar)" style="height: 47px;border-right: white;color: #f2f2f2;font-size: 18px">
											  <div class="input-group-prepend">
											    <span class="sear"></span>
											  </div>
											  <button style="height: 47px;width: 17%;background-color: black;color: white">Search</button>
											</div>
			      						</div>
			      					</div>
			      				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<center>
					<h1>Reviews of our companies</h1>
				</center>
			</div>
			<div class="col-sm-6 col-lg-6" style="border-right: 1px solid black">
				<!-- <h2>Reviews of our companies</h2> -->
				<div>
				<div class='inline'>
					<div><img src="{{('frontend/assets/images/pic/FHC.png')}}" class="img" alt="Avatar" style="width:120px;height: 120px"></div>
				</div>
				   <div class='inline'>
					   	<div><h4>FHC Group  </h4>
							<p>12, Dec 2021</p>
							<p></p>
						</div>
					</div>
				</div>
				<p>
					It was a great experience with Sahaa, who guided me and assisted me in running my business smoothly.  
				</p>

				<div>
				<div class='inline'>
					<div><img src="{{('frontend/assets/images/pic/SKY JUNCTION.png')}}" class="img" alt="Avatar" style="width:120px;height: 120px"></div>
				</div>
				   <div class='inline'>
					   	<div><h4>Sky Junction</h4>
							<p>22, Nov 2021</p>
							<p></p>
						</div>
					</div>
				</div>
				<p>
					I'm having a business of Travel and was worried about its promotion. Sahaa business advisor helps me generate an online presence and grow my business all over the U.A.E. 
				</p>

				<div>
					<div class='inline'>
						<div><img src="{{('frontend/assets/images/pic/BALQEES.png')}}" class="img" alt="Avatar" style="width:120px;;height: 120px"></div>
					</div>
					   <div class='inline'>
						   	<div><h4>Balqees Abbaya  </h4>
								<p>2, August 2021</p>
								<p></p>
							</div>
						</div>
					</div>
					<p>
						They guide everything with professionalism and friendliness. 
					</p>
				</div>
			<div class="col-sm-6 col-lg-6" style="">
				<!-- <h2>Catch up with our best reviewers</h2> -->
				<div>
				<div class='inline'>
						<div><img src="{{('frontend/assets/images/pic/AL QAMAR.png')}}" class="" alt="Avatar" style="width:120px;height: 120px;"></div>
					</div>
					   <div class='inline'>
						   	<div><h4>Al Qamar Printing </h4>
								<p>2, August 2021</p>
								<p></p>
							</div>
						</div>
					</div>
					<p>
						On Sahaa, I had a positive experience with the Customers, and I highly recommend it. 
					</p>

				<div>
				<div class='inline'>
						<div><img src="{{('frontend/assets/images/pic/DUBAI SCOPE.png')}}" class="img" alt="Avatar" style="width:120px;height: 120px"></div>
					</div>
					   <div class='inline'>
						   	<div><h4>Dubai Scope Property</h4>
								<p>2, August 2021</p>
								<p></p>
							</div>
						</div>
					</div>
					<p>
						Appreciate their free services and an excellent platform for starters. 

					</p>
				<div>
				<div class='inline'>
						<div><img src="{{('frontend/assets/images/pic/THE PALETTE ART.png')}}" class="img" alt="Avatar" style="width:120px;;height: 120px"></div>
					</div>
					   <div class='inline'>
						   	<div><h4>The Palette Art</h4>
								<p>2, August 2021</p>
								<p></p>
							</div>
						</div>
					</div>
					<p>
						Thank you to Sahaa's team for their cooperation, the best site to grow your business.
					</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<br>
			</div>
		</div>
	</div>

	<div class="container-fluid pt-5 pb-5 text-white" style="background-color: #e87503">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<p style="font-size: 150%;font-weight: 600;">FAQs</p>
							<p style="font-size: 120%;"><strong>What is the importance of reviews?</strong></p>
							<p style="    font-size: 16px;font-weight: 400;">Many people analyse or look at reviews before placing an order because they think it is the best way to check the quality of the product and website.<br>
							Watching others' comments remarks, and experiences, one becomes accustomed to trusting and deciding. 
							</p>

							<p style="font-size: 120%;"><strong>Are we allowed to make bad comments?</strong></p>
							<p style="    font-size: 16px;font-weight: 400;">Yes, if you have a bad experience, you can share it with other people because we are loyal to our customers and support truth. 
							</p>

							<p style="font-size: 120%;"><strong>Am I able to reply to reviews?</strong></p>
							<p style="    font-size: 16px;font-weight: 400;">Yes, you can reply to the reviews.
							</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

@endsection

