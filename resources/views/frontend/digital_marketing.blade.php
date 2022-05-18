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
</style>

@section('container')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
				<br><br>
				<h1 style="font-family: Open Sans,Arial,sans-serif;color: #404040;font-size: 50px">Digital marketing</h1>
				<h5 style="padding-top: 20px;color: #404040">From Websites to Google Ads, Facebook to SAHAA.ME we have everything your business needs to succeed</h5><br>
				<button class="btn bt" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Request a Free quate</button>
			</center>
			<br><br>
		</div>
		<br><br>
	</div>
</div>
<div class="container-fluid" style="background-color: #e97d12; color: ">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-12 mobile-margin-bottom">
						<center>
							<br>
							<h1 style="font-family: Open Sans,Arial,sans-serif;font-size: 50px">Our market leading products</h1>
							<br>
						</center>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mobile-margin-bottom">
						<center>
							<h2 class=""><b  style="border: 3px solid white;font-size: 20px;padding: 18px 50px;display: block;"><a href="" style="color: white">Build an online presence</a></b></h2>
							<br>
						</center>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Websites</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Professional and secure websites, built at pace by skilled web design experts</p>
							    <a href="{{ url('website') }}" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
						<br>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Sahaa.me</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>							    <p class="card-text">Helping your business to be found and connected across our network</p>
							     <a href="{{ url('/') }}" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
						<br>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Reputation Manager</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Your business's reputation is visible online - take control of it now</p>
							     <a href="" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
						<br>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Videos</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Bring your business to life online with a video from Sahaa</p>
							    <a href="" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
						<br>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Starter Pack</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Instantly give your business an online presence*</p>
							    <a href="" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
					<br>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<center>
							<h2 class="" ><b  style="border: 3px solid white;font-size: 20px;padding: 18px 50px;display: block;"><a href="" style="color: white">Find new customers</a></b></h2>
							<br>
						</center>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Smart Performance</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Drive more customers to your business with our unique blended advertising solution</p>
							   <a href="" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
						<br>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>PPC advertising</b></h2>
							   <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Promote your business where people are actively searching, on Google and Bing</p>
							    <a href="" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
						<br>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Social media advertising</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Promote your business on the world’s most popular social media networks</p>
							    <a href="{{ url('socialmedia') }}" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
						<br>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Display advertising</b></h2>
							   <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Promote your business across a wide range of popular UK websites and apps</p>
							    <a href="" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
						<br>
						<div class="card" style="width: ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>SEO</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Our experts can optimise your website to help it rank higher in search engine results</p>
							    <a href="{{ url('seo') }}" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Learn More</button></a>
						    </center>
						  </div>
						</div>
					<br>
					</div>

				</div>
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
