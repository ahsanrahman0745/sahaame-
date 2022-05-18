
@extends('front.main')
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
		    width: 180px;
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

	<div style="background-color: #f2f2f2">
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
					<button type="button" class="btn btn-lg " style="background-color: #e87503;color: white">Send Message Now</button>

				</div>
				<div class="col-lg-6 col-sm-12" >
					<br>
					<img src="{{('assets_1/images/pic/Download.png')}}" width="400px" height="500px" class="d-inline-block align-top" alt="">

				</div>

			</div>
			<br>
		</div>
	</div>
	
	<div style="background-color: #e87503;">
		<div class="container">
							<div class="row" style="position: relative;background-color: #e87503;">
								<br>
								<div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;height: 100px;padding-top: 30px" >
									<img src="{{('assets_1/images/home/image.jpg')}}" height="50px" width="50px">
									<p style="color: white;">Text us to Resolve any query</p>
									
								</div>
								<br>
								<div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;height: 100px;padding-top: 30px">
									<img src="{{('assets_1/images/home/image.png')}}" height="40px" width="40px">
									<p style="color: white;">Get quick comeback </p>
									
								</div>
								<br>
								<div class="col-lg-4 col-md-6 col-sm-12" style="display: flex;height: 100px;padding-top: 30px">
									<img src="{{('assets_1/images/home/pic6.PNG')}}" height="50px" width="50px">
									<p style="color: white;">Access our service 24/7</p>
									
								</div>
							</div>
						</div>
	</div>
	


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div data-v-9ae41412="" class="supportGuides--heading">Our popular questions</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="guides">
					<a href="" class="guide" data-v-9ae41412><img src="{{('assets_1/images/pic/pic7.PNG')}}" height="40px" width="40px">Accounts</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="guides">
					<a href="" class="guide" data-v-9ae41412><img src="{{('assets_1/images/pic/pic7.PNG')}}" height="40px" width="40px">Products</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="guides">
					<a href="" class="guide" data-v-9ae41412><img src="{{('assets_1/images/pic/pic7.PNG')}}" height="40px" width="40px">Digital Marketing</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="guides">
					<a href="" class="guide" data-v-9ae41412><img src="{{('assets_1/images/pic/pic7.PNG')}}" height="40px" width="40px">Advertising</a>
				</div>
			</div>
			<div class="col-lg-12  col-sm-12">
				<div data-v-9ae41412="" class="supportGuides--heading">Get an Answer to the question that's circling in your head.<br>
				<button type="button" class="btn btn-lg " style="background-color: #e87503;color: white">Help Center</button>
			<div data-v-9ae41412="" class="supportGuides--heading">OR</div><br>
				<a href="">Visit Sahaa for further details </a>
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
				<div class="guides">
					<div data-v-9ae41412 class="app--headingCopy-bold app--headingCopy-larger gui">
						<div class="row" style="">
							<div class="col-12-8 col-md-8 col-lg-8" style="padding-left: 15px">
								<br><br>
								<h3 style="padding-left: 15px">Sign up Sahaa to start your business</h3>
								<br>
								<p style="font-size: 16px;padding-left: 15px">To manage your Sahaa account and products on the go</p>
								<ul class="ul ">
									<li class="li step" style="float: left;padding-left: 15px">
										<div style="display: flex; justify-content: space-between;float: left;">
										  <p data-v-6d983f5b=""  style="" class="step--number">1</p>
										  <p data-v-6d983f5b=""  style="" class="step--text">Avail of the inquiry service for any questioning.</p>
										 </div>
										 <br>
										 <div style="display: flex;float: left;">
										  <p data-v-6d983f5b=""  style="" class="step--number">2</p>
										  <p data-v-6d983f5b=""  style="" class="step--text">List your business along with images and business details.</p>
										 </div><br>
										 <div style="display: flex; justify-content: space-between;float: left;">
										  <p data-v-6d983f5b=""  style="" class="step--number">3</p>
										  <p data-v-6d983f5b=""  style="" class="step--text">Organise Sahaa reviews and requests for your products.</p>
										 </div>
									</li><br>
								</ul>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<img src="{{('assets_1/images/pic/Download.png')}}" height="100%" width="200px">
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

		<div class="container-fluid">
			<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div data-v-9ae41412="" class="supportGuides--heading">Our popular questions</div>
			</div>

				<div class="col-lg-1 col-md-1 col-sm-1">
					<br>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12"  style="border: 1px solid black;height: 350px">
					<center>
						<br>
					<img src="{{('assets_1/images/pic/pic9.PNG')}}" height="50px" width="30px"><br>
					<p style="font-size: 20px">Reach us</p>
					<p style="background-color:">Text us at our Whatsapp num</p>
					<button type="button" class="btn btn-lg " style="background-color: #25d366;">Message us on WhatsApp</button>
					<p style="background-color:">Alternatively, text the word 'Hello' to</p>
					<h5><b> 07480 788 480</b></h5>
					</center>

				</div>
				<div class="col-lg-1 col-md-1  col-sm-12">
					<br>
				</div>
				<div class="col-lg-4 col-md-4  col-sm-12" style="border: 1px solid black;height: 350px">
					<center>
						<br>
					<img src="{{('assets_1/images/pic/pic10.PNG')}}" height="50px" width="30px"><br>
					<p style="font-size: 20px">Contact us</p>
					<p style="background-color:">You can call our experts in the customer centre</p>
					<h5><b>0800 555 444</b></h5>
					<p style="background-color:">Mon-Thu 9am-5pm, Fri 9am-4:30pm</p>
					
					</center>
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

