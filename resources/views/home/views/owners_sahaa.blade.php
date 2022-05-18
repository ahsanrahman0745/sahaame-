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
@section('container')
<body>

	<!-- search navbar -->
			<div class="container-fluid">
				
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
			</script>

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
						<a class="s" href="{{ url('about') }}" style="color: black;padding-left: 5px">About Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('edit') }}" style="color: black">Edit business listing on Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('owners') }} " style="color: #e87503">How business owners can use Sahaa.me</a>
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
			<div class="col-lg-8 col-sm-8">
				<b><h2>How Business owners can use Sahaa.me</h2></b>
				<p style="color:gray;padding-top: 4px;margin-top: -10px" class="p">Last Updated Thu, 11 Nov, 2021 at 12:04 PM</p>
				<div class="row">
					<div class="col-sm-12 col-lg-12">
						<p style="padding-top: 30px;font-size: 14px;">Our guide to using Sahaa.me for the business owners can help you get your business found on Digital Networks. Here you are provided with the services to add, claim, edit or manage your Sahaa.me business listings on as well as finding out more about advertising on Sahaa.me.<br>
							<b>How does Sahaa.me works?</b>

					Sahaa.me is one of the most popular business directories in the UAE. For the past 10 years, we've been bringing buyers and sellers together. Customers all around the UAE can easily locate local businesses using our search engine and online business listings.Here you can learn more about Sahaa.me and how to search or use it.<br>
					I'd like to get a free Sahaa.me business listing for my company.<br>
					A free business listing on Sahaa.me can help you reach potential customer and grow your business. Within just two minutes, you can have your business listed on the UAE's most popular online business directory.<br>
					<b>Do you already have a business listing?</b><br>

					Claiming your business on Sahaa.me is an option if your business has already been listed. Register your business listing so you can make changes to your profile page, which will make it easier for customers to locate you.
					After login onto Sahaa.me, type in your business name and location, then click on the "Claim Your Business" button. Our page for Sahaa.me businesses will match yours if your business is already listed on Sahaa.me. Afterwards, you can register and update your personal information right away.<br>
					<b>What if I want to make some changes to my profile?
					</b><br>
					You can Sign in to your Business account and check if there’s something that needs to be updated in your Business Listing on Sahaa.me. Then you can provide us all the updated information and our web developer will help you update your business details to make changes to the content on your Sahaa.me profile page.Visit our Customer Help & Support to learn more about making changes to your Business profile content.<br>
					I want to advertise my business on Sahaa.me.<br>
					The services offered by Sahaa.me can assist you in growing your online business. Visit Sahaa Business to learn more about Sahaa advertising services and to get started with your online advertising on Sahaa.me. You may also send us a business inquiry via email.<br>
					I'd like to know more about my recent advertising campaign on Sahaa.me.<br>
					Business Advertisement is much easier now with Sahaa.me Advertising services. You can edit and monitor your advertising campaign on Sahaa.me from the comfort of your home. To log in or sign up for this service, click here. You can also check out our Customer Help & Support for more information.
					</p>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
@endsection
