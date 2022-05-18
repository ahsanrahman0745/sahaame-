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
<meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/intlTelInput.css">
  <link rel="stylesheet" href="assets/css/demo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="styles.css" />
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>
<style>
.icon {
  padding-left: 40px;
  background: url('{{('frontend/assets/images/pic/pic172.PNG')}}') no-repeat left;
  background-size: 40px;

}
</style>
@section('container')
<div class="container" >
 <div class="row">
 	<div class="col-lg-12 col-sm-12">
 		
 	</div>
 </div>
</div>

 
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4">
			
		</div>
		<div class="col-lg-8 col-sm-8">
			<br><br><br><br>
			<h4><b style="color: #e87503">Add your free business listing to Sahaa.me</b></h4>

		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<div class="row">
				<div class="col-sm-12 col-12 col-md-12 col-lg-12">
					<h6><b style="color: #e87503">Why sahaa?</b></h6>
				</div>
				
				<div class="col-sm-6 col-6 col-md-12 col-lg-12">
					
			<p><b>Grow your customers</b></p>
			<p style="font-size: 13px">Add your business to the 3 million<br>
			listings already available on sahaa.me,<br>
			the top leading online business<br>
			directory.</p>
				</div>
				<div class="col-sm-6 col-6 col-md-12 col-lg-12">
					<p><b>Enhance your listing</b></p>
			<p style="font-size: 13px">Update your FREE business profile<br>
			page with photos, contact details,<br>
			opening times, payment methods,<br>
			customer reviews and more.</p>
				</div>
				<div class="col-sm-6 col-6 col-md-12 col-lg-12">
					<p><b>Be visible online</b></p>
			<p style="font-size: 13px">Get your business details distributed<br>
			across the Sahaa network which includes<br>
			Apple, Microsoft (Bing, Yahoo & AOL)<br>
			and Amazon Alexa3</p>
				</div>
			</div>
			
			
			
		</div>
		<div class="col-lg-8 col-md-8 col-sm-12">
			<br><br>
			<form id="login" onsubmit="process(event)">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <input type="" style="background-color: #ffeede;height: 45px;color: #e5ab9a" class="form-control" id="inputEmail4" placeholder="First Name">
			    </div>
			    <div class="form-group col-md-6">
			      <input type="password" style="background-color: #ffeede;height: 45px;color: #e5ab9a" class="form-control" id="inputPassword4" placeholder="Last Name">
			    </div>
			  </div>
			  <div class="form-group">
			    <input type="text" style="background-color: #ffeede;height: 45px" class="form-control" id="inputAddress" placeholder="Business Name">
			  </div>
			  	<div class="form-row">
				    <div class="form-group col-md-6">
				      <input type="email" style="background-color: #ffeede;height: 45px" class="form-control" id="inputEmail4" placeholder="City">
				    </div>
				    <div class="form-group col-md-6">
				    	<input type="text" class="form-control icon" placeholder="Business Phone Number" aria-label="Amount (to the nearest dollar)" style="padding-left: 40px;background-color: #ffeede;height: 45px">
				     <!--  <input type="email" class="form-control icon" style="background-color: #ffeede;height: 45px"  id="inputEmail4" style="padding-left: 90px" placeholder="Business Phone Number"> -->
				    </div>
			    <!-- <div class="form-group col-md-6">
			    	
				   <input id="" type="tel" style="padding-left: 20px" name="phone" style="background-color: #ffeede;height: 45px;" class="form-control icon" placeholder="Business Phone Number" style="" />

							       <script src="assets/js/intlTelInput.js"></script>
				  <script>
				    var input = document.querySelector("#pho");
				    window.intlTelInput(input, {
				      
				      utilsScript: "assets/js/utils.js",
				    });
				  </script>
				   <script>
				    document.getElementById("pho").setAttribute('size', '150');
				    </script>
			    </div> -->
			  </div>
			  <div class="form-group">
			    <input type="text" style="background-color: #ffeede;height: 45px" class="form-control" id="inputAddress" placeholder="Email Adress">
			  </div>
			  <p style="font-size: 13px">By populating these fields you are: i) consenting for this information to be published; and ii) sharing your<br>
				contact details with Sahaa Limited. We may contact you in accordance with our Privacy Policy.</p>
			  <button type="submit" class="btn" style="background-color: #e87503;float: right;width: 240px;height: 50px;color: white">Continue</button>
			</form>
		</div>
	</div>
</div>
@endsection
<script>
   const phoneInputField = document.querySelector("#pho");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
 </script>
