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
				<h1 style="font-family: Open Sans,Arial,sans-serif;color: #404040;font-size: 50px">FREE digital marketing</h1>
				<h5 style="padding-top: 20px;color: #404040">Help your business be found, chosen and trusted online with our FREE tools</h5><br>
			</center>
			<br><br>
		</div>
		<br><br>
	</div>
</div>
<div style="background-color: #e97d12; padding:50px 0">
<div class="container" >
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<center>
							<br>
							<h1 style="font-family: Open Sans,Arial,sans-serif;font-size: 30px;color: white">Marketing your business online can sometimes seem overwhelming in an ever-changing digital world</h1>
							<br>
							<p style="font-size: 20px;color: white">We have put together a collection of digital marketing tools designed to help you establish an online presence and enable customers to not only find you, but contact you too.</p><br>
						</center>
						
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" style="padding-bottom: 20px">
						<div class="card" style="height: 100% ;padding-bottom: 20px">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Free DIY website & domain name</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Get Web Builder & create your business website with unique .co.uk address & email</p>
							    <a href="" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Get started now</button></a><br>
						    </center>
						    </div>
						</div>
					</div>


					<div class="col-lg-4 col-md-6 col-sm-12" style="padding-bottom: 20px">
						<div class="card" style="height: 100% ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Free online business listing</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Claim your listing on SAHAA.ME to help your business be found and connected across our network</p>
							    <a href="{{ url('listing') }}" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Get listed now</button></a>
						    </center>
						  </div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" style="padding-bottom: 20px">
						<div class="card" style="height: 100% ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Free online business visibility report</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Use our free scan to see how your business is represented across a network of 40+ websites</p>
							    <a href="#" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Run your report now</button></a><br>
						    </center>
						  </div>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</div>
</div>
<div style="background-color: #f2f2f2; color: #000; padding:50px 0">
<div class="container" >
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<br><br>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12" style="padding-bottom: 20px">
						<div class="card" style="height: 100% ;padding-bottom: 20px">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Free website checker</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Already got a website? See what can be improved using our free website checker tool</p>
							    <a href="" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Check your site now</button></a><br>
						    </center>
						    </div>
						</div>
					</div>


					<div class="col-lg-4 col-md-6 col-sm-12" style="padding-bottom: 20px">
						<div class="card" style="height: 100% ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Facebook Calculator</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">Find out how many potential local customers you could reach with a Facebook ad campaign</p>
							    <a href="{{ url('listing') }}" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Try the tool now</button></a>
						    </center>
						  </div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12" style="padding-bottom: 20px">
						<div class="card" style="height: 100% ;">
						  <div class="card-body">
						    <center>
						    	<h2 class="card-title"><b>Free marketing guides</b></h2>
							    <h6 class="card-subtitle mb-2 text-muted"><br></h6>
							    <p class="card-text">A collection of comprehensive 'How To' guides to help you promote your business online</p>
							    <a href="#" style="">
							     <button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">View guides</button></a><br>
						    </center>
						  </div>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</div>
</div>
<div style='padding:50px 0'>
<div class="container" >
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<br><br>
			<center><h1 style="font-family: Open Sans,Arial,sans-serif;font-size: 50px;">Sahaa Messaging</h1></center>
			<br>
			<p style="font-size: 20px;">Available for no additional charge to businesses that feature on SAHAA.ME, Sahaa Messaging enables potential customers to connect with your business via messaging across major channels such as Apple Maps, Spotlight & Apple Chat Suggest (which provides messaging functionality anywhere your phone number is listed online including Facebook, Google My Business or your own website).<br>Hartley, our helpful messaging bot, acts like a virtual assistant working on your behalf 24/7. Hartley will pass relevant enquiries to you via your inbox within the free Sahaa for Business app. However, we don’t want you to miss enquiries, so we will also email you when you receive a new message.</p><br>
			<center>
				<a href="#" style="">
				<button class="btn" style="border: 3px solid #e97d12;font-size: 20px;padding: 18px 50px">Find out more</button></a>
			</center>
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
