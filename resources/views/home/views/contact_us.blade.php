@extends('front.main')
<head>


<meta charset="utf-8">
  <link rel="stylesheet" href="assets_1/css/intlTelInput.css">
  <link rel="stylesheet" href="assets_1/css/demo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link rel="stylesheet" href="styles.css" />
   <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>
<style>

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
		<div class="col-lg-4 col-sm-4">
			<h6><b style="color: #e87503">Why sahaa?</b></h6>
			<p><b>Grow your customers</b></p>
			<p style="font-size: 13px">Add your business to the 3 million<br>
			listings already available on sahaa.me,<br>
			the top leading online business<br>
			directory.</p>
			<p><b>Enhance your listing</b></p>
			<p style="font-size: 13px">Update your FREE business profile<br>
			page with photos, contact details,<br>
			opening times, payment methods,<br>
			customer reviews and more.</p>
			<p><b>Be visible online</b></p>
			<p style="font-size: 13px">Get your business details distributed<br>
			across the Yell network which includes<br>
			Apple, Microsoft (Bing, Yahoo & AOL)<br>
			and Amazon Alexa3</p>
		</div>
		<div class="col-lg-8 col-sm-8">
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
			    	<!-- <input id="ccode" type="text" name="ccode" style="display: inline;" class="form-control" /> -->
				   <input id="pho" type="tel" name="phone" style="background-color: #ffeede;height: 45px;" class="form-control" placeholder="Business Phone Number" style="" />

							       <script src="assets_1/js/intlTelInput.js"></script>
				  <script>
				    var input = document.querySelector("#pho");
				    window.intlTelInput(input, {
				      
				      utilsScript: "assets_1/js/utils.js",
				    });
				  </script>
				   <script>
    document.getElementById("pho").setAttribute('size', '150');
    </script>
			    </div>
			  </div>
			  <div class="form-group">
			    <input type="text" style="background-color: #ffeede;height: 45px" class="form-control" id="inputAddress" placeholder="Email Adress">
			  </div>
			  <p style="font-size: 13px">By populating these fields you are: i) consenting for this information to be published; and ii) sharing your<br>
				contact details with Yell Limited. We may contact you in accordance with our Privacy Policy.</p>
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
