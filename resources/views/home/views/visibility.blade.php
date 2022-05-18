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
						<a class="s" href="{{ url('owners') }} " style="color: black">How business owners can use Sahaa.me</a>
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
						<a class="s" href="{{ url('visibility') }}" style="color: #e87503">Increase your business visibility on Sahaa.me</a>
					</li>
					<li style="background-color: white;border: 1px solid silver;padding-left: 5px">
						<a class="s" href="{{ url('app') }}" style="color: black">Can I claim my Business listing on Sahaa Business app?</a>
					</li>

				</ul>
			</div>
			<div class="col-lg-8 col-sm-8">
				<b><h2>Increase your business's visibility on Sahaa.me</h2></b>
				<p style="color:gray;padding-top: 4px;margin-top: -10px" class="p">Last Updated Thu, 11 Nov, 2021 at 12:04 PM</p>
				<div class="row">
					
					<div class="col-sm-12 col-lg-12">
						<p style="padding-top: 30px;font-size: 14px;">You can improve your Sahaa.me Businesslisting. For each search on Sahaa, we first determine which category or subcategories best fit the user's query. Related products, brand, and service terms influence our search results. Businesses that specialize in antique furnishings will also be found if a user searches for "high ceilings renovations."You can't double-score a business that has both "beauty salon" and "beauty products and salon" on its website if the user is specifically seeking for "beauty salon".<br>
						 In order to ensure that the listings and website information match exactly, we first look to see if the user has specified any specific products, services, or brands. <br>
						Assuming two or more businesses are equally relevant, the ranking of those enterprises is randomly distributed each one has an equal probability of being placed above the other (s).<br>
						You may help us show your business more regularly by updating the content and business overview on your listing. The more information you provide, the more likely we are to feature your ad to our users.
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
@endsection
