
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
		.ul .li{
		  display: inline;
		}
		.p{
		    display: block;
		    margin-block-start: 1em;
		    margin-block-end: 1em;
		    margin-inline-start: 0px;
		    margin-inline-end: 0px;
		    font-family: Open Sans,sans-serif;
		    font-size: 16px;
		}
		.supportGuides--heading[data-v-9ae41412] {
			font-size: 1.5625rem;
			font-weight: 400;
			margin: 1.5rem 0;
			text-align: center;
			margin-top: 50px;
		}
		.step[data-v-6d983f5b] {
		    align-items: center;
		    display: flex;
		    padding: 0.5rem 0;
		}
		.steps[data-v-6d983f5b] {
		    font-size: .75rem;
		    padding: 0 0 1.5rem;
		}
		.step--number[data-v-6d983f5b] {
    align-items: center;
    background: #e87503;
    color: white;
    border-radius: 0.7rem;
    display: flex;
    height: 1.4rem;
    justify-content: center;
    line-height: 1;
    width: 1.4rem;
    margin-right: 15px;
    height: 1.4rem;
    padding: 13px;
}
		.guide[data-v-9ae41412] {
		    align-items: center;
			border:1px solid #ccc;
		    /* border-radius: 3px;
		    box-shadow: 0 2px 20px 0 rgb(0 0 0 / 15%); */
		    cursor: pointer;
		    display: flex;
		    flex-direction: column;
		    justify-content: center;
		    padding: 2rem 0 3rem;
		    text-decoration: none;
		    width: 180px;
			margin-bottom: 10px;
		}
		.gui[data-v-9ae41412] {
			/* border-radius: 3px; */
			/* box-shadow: 0 2px 20px 0 rgb(0 0 0 / 15%); */
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

		.guide img {
			margin-bottom: 20px;
		}

		.guide[data-v-9ae41412] {
    align-items: center;
    border: 1px solid #ccc;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 2rem 0 3rem;
    text-decoration: none;
    width: 100%;
    margin-bottom: 10px;
}
	</style>
@section('container')

	<div style="background-color: #f2f2f2" class='help-support-section'>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-sm-12" >
					<br>
					<h1>
						Any query in your mind?<br>Take direction from us
					</h1>
					<br>
					<p class="p">We are here to sort out your query and make you satisfied in a friendly way.</p>
					<ul class="ul steps" style="overflow: hidden;">
						<li class="li step" style="float: left;">
							<div style="display: flex; justify-content: space-between;float: left;">
							  <p data-v-6d983f5b=""  style="" class="step--number">1</p>
							  <p data-v-6d983f5b=""  style="" class="step--text">Behind there is a message icon, you can share your question.</p>
							 </div>
						</li>
						<li class="li step">
							<div style="display: flex; justify-content: space-between;float: left;">
							  <p data-v-6d983f5b=""  style="" class="step--number">2</p>
							  <p data-v-6d983f5b=""  style="" class="step--text">You can get automatic answers to your question there.</p>
							 </div>
						</li>
						<li class="li step">
							<div style="display: flex; justify-content: space-between;float: left;">
							  <p data-v-6d983f5b=""  style="" class="step--number">3</p>
							  <p data-v-6d983f5b=""  style="" class="step--text">For further information, you can negotiate with our proficient.</p>
							 </div>
						</li>
					</ul>
					<br>
					<button type="button" class="btn btn-lg " style="background-color: #e87503;color: white">Send Message Now</button>

				</div>
				<div class="col-lg-6 col-sm-6 hide-moble" >
					<br>
					<center>
					<img src="{{('frontend/assets/images/pic/Download.png')}}" height="400px" style="image-rendering: pixelated;" class="d-inline-block align-top" alt="">
					</center>

				</div>

			</div>
			<br>
		</div>
	</div>
	
	<div style="background-color: #e87503;" class='help-support-opt-div'>
		<div class="container">
			<br>
							<div class="row justify-content-center" style="position: relative;background-color: #e87503;color: white">
								<br>
								<div class="col-lg-4 col-md-6 col-sm-9" >
									<div class="help-support-opt-outer">
										<div class="help-support-opt-inner">
										<img src="{{('frontend/assets/images/icons/message us.svg')}}"  height="50px" width="50px" style="color: white;fill: ">
										<div style="font-size: 20px">&nbsp;Text us to Resolve any query</div>
										</div>
									</div>
								</div>
								<br>
								<div class="col-lg-4 col-md-6 col-sm-9">
									<div class="help-support-opt-outer">
										<div class="help-support-opt-inner">
											<img src="{{('frontend/assets/images/icons/instant responce.svg')}}" height="40px" width="40px">
											<div style="font-size: 20px;">&nbsp;Get quick comeback </div>
										</div>
									</div>
								</div>
								<br>
								<div class="col-lg-4 col-md-6 col-sm-9">
									<div class="help-support-opt-outer">
										<div class="help-support-opt-inner">
											<img src="{{('frontend/assets/images/icons/complex query .svg')}}" height="50px" width="50px">
											<div style="font-size: 20px">&nbsp;Access our service 24/7</div>
										</div>
									</div>
								</div>
							</div>
							<br>
						</div>
	</div>
	


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div data-v-9ae41412="" class="supportGuides--heading">Our popular questions</div>
			</div>
			
			<div class="container">
				<center>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="guides">
								<a href="" class="guide" data-v-9ae41412><img src="{{('frontend/assets/images/SVG/Account.svg')}}" height="40px" width="40px">Accounts</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="guides">
								<a href="" class="guide" data-v-9ae41412><img src="{{('frontend/assets/images/SVG/Products.svg')}}" height="40px" width="40px">Products</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="guides">
								<a href="" class="guide" data-v-9ae41412><img src="{{('frontend/assets/images/SVG/digital Marketing.png')}}" height="40px" width="40px">Digital Marketing</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="guides">
								<a href="" class="guide" data-v-9ae41412><img src="{{('frontend/assets/images/SVG/Advertisement.png')}}" height="40px" width="40px">Advertising</a>
							</div>
						</div>
					</div>
				</center>
			</div>
			
			<div class="col-lg-12  col-sm-12">
					<div data-v-9ae41412="" class="supportGuides--heading"><p style="font-size: 23px;margin-top:100px">Get an Answer to the question that's circling in your head.</p><br>
					<button type="button" class="btn btn-lg " style="background-color: #e87503;color: white;margin-bottom: 24px;margin-top: -25px">Help Center</button>

					<div>
						<p style="font-size: 15px;color: gray;">OR </p>
						
					</div>
					<div style="margin-top: -10px">
						<a href="" style="font-size: 18px;color: blue;padding-top: 30px">Visit Sahaa for further details </a>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<br><br><br>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="guides help-support-sign-up-outer-most">
					<div data-v-9ae41412 class="app--headingCopy-bold app--headingCopy-larger gui">
						<div class="row align-items-center" style="">
							<div class="col-12-8 col-md-8 col-lg-8">
								<div class="help-support-sign-up">
									<h3>Sign up Sahaa to start your business</h3>
									<p>To manage your Sahaa account and products on the go</p>
									<ul class="ul">
										<li class="li step">
											<div class='help-support-signup-step'>
												<p data-v-6d983f5b="" class="step--number">1</p>
												<p data-v-6d983f5b="" class="step--text">Avail of the inquiry service for any questioning.</p>
											</div>
											<div class='help-support-signup-step'>
												<p data-v-6d983f5b="" class="step--number">2</p>
												<p data-v-6d983f5b="" class="step--text">List your business along with images and business details.</p>
											</div>
											<div class='help-support-signup-step'>
												<p data-v-6d983f5b="" class="step--number">3</p>
												<p data-v-6d983f5b="" class="step--text">Organise Sahaa reviews and requests for your products.</p>
											</div>
										</li>
									</ul>
								</div>
								
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<center>
								<img src="{{('frontend/assets/images/pic/Download.png')}}" style="image-rendering: pixelated;" height="400px">
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<br><br><br>
			</div>
		</div>
	</div>

		<div class="help-support-reach-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12">
					<div data-v-9ae41412="" class="supportGuides--heading" style="font-size: 34px; text-align:center">Reach Us</div>
				</div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5 col-md75 col-sm-7 col-9 mobile-margin-bottom"  style="background:#fff;border: 1px solid black;height: 350px;border-radius: 20px;display: flex;align-items: center;justify-content: center;">
							<center>
							<img src="{{('frontend/assets/images/SVG/Reach us.png')}}" height="70px" width="60px">
							<p style="font-size: 23px"><b>Reach us</b></p>
							<p style="background-color:">Text us at our Whatsapp num</p>
							<button type="button" class="btn btn-lg " style="background-color: #25d366;">Message us on WhatsApp</button>
							<p style="background-color:">Alternatively, text the word 'Hello' to</p>
							<h5><b> 054 351 2089</b></h5>
							</center>

						</div>
						<div class="col-lg-5 col-md-7  col-sm-7 col-9 mobile-margin-bottom" style="background:#fff;border: 1px solid black;height: 350px;border-radius: 20px;display: flex;align-items: center;justify-content: center;">
							<center>
							<img src="{{('frontend/assets/images/SVG/complex query .svg')}}" height="70px" width="50px">
							<p style="font-size: 23px"><b>Contact us</b></p>
							<p style="background-color:">You can call our experts in the customer centre</p>
							<h5><b>0800 555 444</b></h5>
							<p style="background-color:">Mon-Thu 9am-5pm, Fri 9am-4:30pm</p>
							
							</center>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<hr style="border: 1px solid gray">
			</div>
		</div>
	</div>

@endsection

