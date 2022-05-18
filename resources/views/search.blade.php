<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Yell</title>
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
		    width: 1000px
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
	</style>
</head>
<body>
	<!-- Narrow navbar -->
	<nav class="navbar" style="background-color: black;height: 20px">

	  <a class="navbar-brand a" href="#" style="padding-left: 200px;">Yell.com</a>
	  <a class="navbar-brand a" href="#" style="padding-left: 40px;">Yell Busniss</a>
	  <a class="navbar-brand a" href="#" style="padding-left: 600px;">Download the app</a>
	  <a class="navbar-brand a" href="#" style="padding-left: 40px;">Get a free listing</a>
	  <a class="navbar-brand a" href="#" style="padding-left: 40px;">Advertise</a>
	  <a class="navbar-brand a" href="#" style="padding-left: 40px;">0800 777 449</a>
	</nav>

	<!-- logo navbar -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<nav class="navbar " style="height: 40px">
				  <a class="navbar-brand" href="#" style="padding-left: 180px;position: relative; bottom: 12px;">
				    <img src="{{('pic/saha.png')}}" width="200px" height="50" class="d-inline-block align-top" alt="">
				  </a>
				  <p style="padding-left: 1100px"><img src="{{('pic/userlogo.png')}}" width="35px" height="35px"  class="d-inline-block align-top" alt=""><a class="navbar-brand aa" href="#"  style="position: relative; bottom: 9px;left: 130px">Log in ></a></p>

				</nav>
			</div>
		</div>
	</div>


	<!-- search navbar -->
	<div class="container-fluid">
		<nav class="navbar" style="background-color: #333333;height: 200px">
			<center>
				<h1 style="color: white;font-size: 28px;line-height: 43.75px;display: block;">How can we help you today?</h1>
			    <form class="form-inline">
			    <input class="form-control mr-sm-2 search" type="search" placeholder="Search the Knowledge Base" aria-label="Search">
			    </form>
			    <p style="color: white;">OR</p>
			    <a href="" style="color: #ffd100">Search Yell.com for a business here</a>
		    </center>
		</nav>
	</div>

		<div class="container-fluid">
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
		        <a class="nav-link aaa" href="#">About Yell.com</a>
		      </li>
		    </ul>
		  </div>
		</nav>
				</div>
			</div>
		</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-4">
				<b><h2 style="font-size: 22px;">Products articles</h2></b>
				<h3 style="font-size: 16px;font-weight: 600;text-transform: uppercase;margin-bottom: 5px">YELL.COM</h3>
				<ul>
					<li >
						<a class="s" href="{{ url('about') }}">About Sahaa.me</a>
					</li>
					<li>
						<a class="s" href="{{ url('edit') }}">Edit business listing on Sahaa.me</a>
					</li>
					<li>
						<a class="s" href="{{ url('owners') }}">How business owners can use Sahaa.me</a>
					</li>
					<li>
						<a class="s" href="{{ url('use') }}">How to use Sahaa.me</a>
					</li>
					<li>
						<a class="s" href="{{ url('local') }}">Using Sahaa.me to find local businesses</a>
					</li>
					<li>
						<a class="s" href="{{ url('location') }}">Using Sahaa.me to find businesses by location</a>
					</li>
					<li>
						<a class="s" href="{{ url('search') }}">Searching on Sahaa.me</a>
					</li>
					<li>
						<a class="s" href="{{ url('claim') }}">Claim your Business on Sahaa.me</a>
					</li>
					<li>
						<a class="s" href="{{ url('profile') }}">How do I edit or add content to my Sahaa.me business profile?</a>
					</li>
					<li>
						<a class="s" href="{{ url('advertise') }}">To Advertise my businesson Sahaa.me, i want a free business listing</a>
					</li>
					<li>
						<a class="s" href="{{ url('visibility') }}">Increase your business visibility on Sahaa.me</a>
					</li>
					<li>
						<a class="s" href="{{ url('app') }}">Can I claim my Business listing on Sahaa Business app?</a>
					</li>

				</ul>
			</div>
			<div class="col-lg-8 col-sm-8">
				<b><h2>Searching on Sahaa.me</h2></b>
				<p style="color:gray;padding-top: 4px;margin-top: -10px" class="p">Last Updated Thu, 11 Nov, 2021 at 12:04 PM</p>
				<div class="row">

					<div class="col-sm-12 col-lg-12">
						<p style="padding-top: 30px;font-size: 14px;">Find out how your results are arranged, how to get in touch with the businesses, and which results show up in your search results. Using our step-by-step instructions, you can easily navigate Sahaa.me's search results pages, business listings, and company details. <br>
							<b>What results do I get when I type in my query?</b><br>

						Companies that are either based in or provide services to your location appear first in the search results. More matches appear as you scroll down the page, even if they may not be located in your search area, but they still serve your area.<br>
						Select the 'Sort By' drop-down option at the top of the results to modify the order of your results. Here, you can select to sort by distance from your current location, the service region the business services, the star rating, or the most reviewed businesses.<br>
						<b>Which buttons are included in company results& they can be used?</b><br>

						We provide a company's name, address, and phone number, as well as whether or not the company allows these facts available to the general public. Our search results also include:<br>
						<ul>
							<li>
								You can directly visit the company's website by simply clicking on the "Website" link next to its name.
							</li>
							<li>
								Directly contact the company by clicking the "Email" button.
							</li>
							<li>
								To make a phone call from your cell phone, simply click on the phone number.
							</li>
						</ul>
						You can also visit business's profile page created on Sahaa.me when you click on a business name, where you'll be able to see images, videos, reviews, and more.<br>
						<b>What about the sequence of my search results?</b><br>

						On the top few pages of search results, the most relevant local businesses are highlighted.A company's relevancy is determined by how well it matches your search criteria and how far away it is from the original location of your search. As you go down the results page, your results will become less relevant and more distant.
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<p>About us</p>
				<ul class="navbar-nav ul" style="position: relative;right: 39px">
			      <li class="nav-item li" >
			        <a class="nav-link "  style="color: black;" href="#" >About Yell.com &nbsp;&nbsp;| &nbsp; &nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Reviews&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Yell Home & Garden&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Help & Support&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Yell App&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Yell App&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link " style="color: black;" href="#">Careers</a>
			      </li>
			    </ul>

			</div>
			<div class="col-lg-12 col-sm-12" style="padding-top: 20px">
				<p>Our business products and services</p>
				<ul class="navbar-nav ul" style="position: relative;right: 39px">
			      <li class="nav-item li" >
			        <a class="nav-link "  style="color: black;" href="#" >Yell.com Advertising &nbsp;&nbsp;| &nbsp; &nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Smart Performance&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Pay-Per-Click (PPC)&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Social Media Advertising&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Display&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">SEO&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link " style="color: black;" href="#">Online Reputation Manager&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link " style="color: black;" href="#">Websites&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link " style="color: black;" href="#">Video&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link " style="color: black;" href="#">Free</a>
			      </li>
			    </ul>

			</div>
			<div class="col-lg-12 col-sm-12" style="padding-top: 25px">
				<p style="    font-size: 8px;">Disclaimer: The opinions expressed within Reviews are those of the author and not the views or opinions of Yell Limited. Registered Office: 3 Forbury Place, Forbury Road, Reading, Berkshire, RG1 3YL. Registered in England and Wales No. 4205228 VAT Number: GB 765 346 017.© Yell Limited 2021. All rights reserved. Yell, Yellow Pages and other ™ are trademarks of Yell Limited.</p>

			</div>
			<div class="col-lg-12 col-sm-12" style="padding-top: 20px">
				<ul class="navbar-nav ul" style="position: relative;right: 39px">
			      <li class="nav-item li" >
			        <a class="nav-link "  style="color: black;" href="#" >Privacy policy &nbsp;&nbsp;| &nbsp; &nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Cookie policy&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Conditions of use&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Legal&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Reviews policy&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Yell Group&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link " style="color: black;" href="#">Modern Slavery Act Statement</a>
			      </li>

			    </ul>

			</div>
		</div>
	</div>
</body>
</html>
