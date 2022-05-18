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
<div class="row"  style="background-color: #333333;height: 250px">
				<div class="col-lg-4 col-sm-4">
					
				</div>
				<div class="col-lg-4 col-sm-4">
					<center>
						<h1 style="color: white;font-size: 28px;line-height: 43.75px;display: block;">How can we help you today?</h1><br>
						<form class="">
						    <input class="form-control mr-sm-2 search" type="search" placeholder="Search the Knowledge Base" aria-label="Search">
						    </form><br>
						    <p style="color: white;">OR</p><br>
						    <a href="" style="color: #ffd100">Search Yell.com for a business here</a>
					</center>
				</div>
				<div class="col-lg-4 col-sm-4">
					
				</div>
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
				<b><h2>Claim your Business on Sahaa.me</h2></b>
				<p style="color:gray;padding-top: 4px;margin-top: -10px" class="p">Last Updated Thu, 11 Nov, 2021 at 12:04 PM</p>
				<div class="row">
					
					<div class="col-sm-12 col-lg-12">
						<p style="padding-top: 30px;font-size: 14px;">Claiming your business on Sahaa.me is an option if your business is already listed. Register your business listing so you can make changes to your profile page, which will make it easier for customers to locate you.<br>
						Fill out a free business listing form and provide your company name and postcode to get started. Our page for Sahaa.me will match yours if your business has previously been listed there. In order to get started, you'll first need to sign up for an account to get your business registered.
   <br></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
@endsection
