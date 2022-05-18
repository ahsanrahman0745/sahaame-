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
        <b><h2>About Yell.com</h2></b>
        <p style="color:gray;padding-top: 4px;margin-top: -10px" class="p">Last Updated Thu, 11 Nov, 2021 at 12:04 PM</p>
        <div class="row">
          <div class="col-sm-12 col-lg-12">
            <img src="{{('pic/pic1.png')}}" width="100%" height="100%" class="d-inline-block align-top" alt="">
          </div>
          <div class="col-sm-12 col-lg-12">
            <p style="padding-top: 30px;font-size: 14px;">Sahaa.me is the UAE's largest & most-trusted online business directory, started in 2020 in the United Arab Emirates. Since then, we've been a one-stop shop for finding the best local businesses and customers. A most appropriate platform with the names, addresses, and contact details of millions of businesses ready to assist you in finding the most suitable business in your area without having to search hundreds of websites. Search among thousands of business categories that match the type of business you require, or find the perfect business near you just by typing a company name into the search bar.<br></p>
          </div>
          <div class="col-sm-12 col-lg-12">
            <img src="{{('pic/pic2.png')}}" width="100%" height="100%" class="d-inline-block align-top" alt="">
          </div>
          <div class="col-sm-12 col-lg-12">
            <p style="padding-top: 30px"><b>Or would you like Sahaa to advertise your business?</b> <br>We've been connecting buyers and sellers all around the globe at Sahaa.me. We provide a broad range of digital marketing services to companies of all kinds, large and small. Learn more about Local Business Listing, social media advertising, website design, blog posting, and other services for your business at Digital Marketing, or give us a call.</p>
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
</html><!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
</head>
<style>
	body {
    background: #eee
}

.name {
    color: blue
}

.work {
    font-weight: bold;
    font-size: 15px
}

.about span {
    font-size: 13px
}

.v-profile {
    color: blue;
    cursor: pointer
}

.box {
    -webkit-box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72);
    -moz-box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72);
    box-shadow: 13px 12px 5px -10px rgba(196, 194, 196, 0.72)
}

.col-md-3 {
    margin-top: 10px
}
</style>
<body>

<div class="container" style="padding-left: -80px">
	<div class="row">
		<div class="col-lg-12">
			<b style="font-size: 25px;color: gray">- Who we are?</b> 
		</div>
		<div class="col-lg-12">
			<b style="font-size: 45px;color: #ff8b0f">About Us ?</b> 
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<img src="{{('pic/video.png')}} "> 
		</div>
		<div class="col-lg-6">
			<b style="font-size: 25px;color: #ff8b0f"> WELCOME TO </b> <b style="font-size: 25px;color: black"> SHARJA
				ENGINEERING CONSULTANTS</b> 
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
				nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
				nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
				nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
				Lorem ipsum dolor sit amet....</p>
				<button type="button" class="btn btn-lg btn-primary" style="font-size: 15px;background-color: #ff8b0f">Read More</button>
		</div>

	</div>
</div>
<div class="container" style="padding-left: -80px; padding-top: 190px">
	<div class="row">
		<div class="col-lg-12">
			<b style="font-size: 25px;color: gray">- Meet Our</b> 
		</div>
		<div class="col-lg-12">
			<b style="font-size: 45px;color: #ff8b0f">Professionals Team</b> 
		</div>
	</div>
	<div class="row">
		
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3">

            <div class="bg-white p-3 text-center rounded box"  style="background-color: white">
            	<center>
            	<img src="{{('pic/man1.jpg')}}" class="img-responsive rounded-circle" width="90" style="border-radius: 50%;" alt="Avatar">
                <h5 class="mt-3 name" style="font-size: 20px; color: #ff8b0f">Samuel Plamer</h5>
					                <div class="mt-4 about"><span>Lorem ipsum Lorem ipsum dolor sit amet,
					consectetuer adipiscing elit, sed diam
					nonumLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
					nibh euismod tincidunt ut laoreet dolore
					magna aliquam erat volutpat. Lorem ipsum
					Lorem ipsum dolor sit amet, consectetuer
					adipiscing elit, sed diam nonumLorem ipsum
					dolor sit amet.</span></div>
					                <div class="mt-4">
                    <h5 class="mt-3 name" style="font-size: 15px; color: #ff8b0f">Chief Exe.Officer</h5>
                </div>
                </center>
            </div>
        </div>
        <div class="col-md-3">

            <div class="bg-white p-3 text-center rounded box"  style="background-color: white">
            	<center>
            	<img src="{{('pic/man1.jpg')}}" class="img-responsive rounded-circle" width="90" style="border-radius: 50%;" alt="Avatar">
                <h5 class="mt-3 name" style="font-size: 20px; color: #ff8b0f">KINZA</h5>
                <div class="mt-4 about"><span>Lorem ipsum Lorem ipsum dolor sit amet,
					consectetuer adipiscing elit, sed diam
					nonumLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
					nibh euismod tincidunt ut laoreet dolore
					magna aliquam erat volutpat. Lorem ipsum
					Lorem ipsum dolor sit amet, consectetuer
					adipiscing elit, sed diam nonumLorem ipsum
					dolor sit amet.</span></div>
					                <div class="mt-4">
                    <h5 class="mt-3 name" style="font-size: 15px; color: #ff8b0f">Chief Exe.Officer</h5>
                </div>
                </center>
            </div>
        </div>
        <div class="col-md-3" >

            <div class="bg-white p-3 text-center rounded box" style="background-color: white">
            	<center>
            	<img src="{{('pic/man1.jpg')}}" class="img-responsive rounded-circle" width="90" style="border-radius: 50%;" alt="Avatar">
                <h5 class="mt-3 name" style="font-size: 20px; color: #ff8b0f">Samuel Plamer</h5>
                <div class="mt-4 about"><span>Lorem ipsum Lorem ipsum dolor sit amet,
					consectetuer adipiscing elit, sed diam
					nonumLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
					nibh euismod tincidunt ut laoreet dolore
					magna aliquam erat volutpat. Lorem ipsum
					Lorem ipsum dolor sit amet, consectetuer
					adipiscing elit, sed diam nonumLorem ipsum
					dolor sit amet.</span></div>
					                <div class="mt-4">
                    <h5 class="mt-3 name" style="font-size: 15px; color: #ff8b0f">Chief Exe.Officer</h5>
                </div>
                </center>
            </div>
        </div>
        <div class="col-md-3">

            <div class="bg-white p-3 text-center rounded box"  style="background-color: white">
            	<center>
            	<img src="{{('pic/man1.jpg')}}" class="img-responsive rounded-circle" width="90" style="border-radius: 50%;" alt="Avatar">
                <h5 class="mt-3 name" style="font-size: 20px; color: #ff8b0f">HROON REHMAN</h5>
                <div class="mt-4 about"><span>Lorem ipsum Lorem ipsum dolor sit amet,
					consectetuer adipiscing elit, sed diam
					nonumLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
					nibh euismod tincidunt ut laoreet dolore
					magna aliquam erat volutpat. Lorem ipsum
					Lorem ipsum dolor sit amet, consectetuer
					adipiscing elit, sed diam nonumLorem ipsum
					dolor sit amet.</span></div>
                <div class="mt-4">
                    <h5 class="mt-3 name" style="font-size: 15px; color: #ff8b0f">Chief Exe.Officer</h5>
                </div>
                </center>
            </div>
        </div>
    </div>
</div>

	</div>
</div>

<div class="container" style="padding-left: -80px; padding-top: 190px">
	<div class="row">
		<div class="col-lg-12">
			<b style="font-size: 25px;color: gray">- Previous work</b> 
		</div>
		<div class="col-lg-12">
			<b style="font-size: 45px;color: #ff8b0f">OUR PROJECTS</b> 
		</div>
	</div>
	<div class="row">
		<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: white">
    <a class="navbar-brand" href="#" style=";color: black">ALL</a>
    <a class="navbar-brand" href="#" style="padding-left: 50px;color: black">Renovation</a>
    <a class="navbar-brand" href="#" style="padding-left: 50px;color: black">Building Construction</a>
    <a class="navbar-brand" href="#" style="padding-left: 50px;color: black">Villa Construction</a>
    <a class="navbar-brand" href="#" style="padding-left: 50px;color: black">Interior Design</a>
  </nav>
</div>

	</div>
	<div class="row">
		<div class="col-lg-6">
			<img src="{{('pic/all1.png')}}">
		</div>
		<div class="col-lg-6">
		<div class="row">
			<div class="col-lg-6">
				<img src="{{('pic/all2.png')}}">
			</div>
			<div class="col-lg-6">
				<img src="{{('pic/all3.png')}}">
			</div>
			<div class="col-lg-6">
				<img src="{{('pic/all4.png')}}">
			</div>
			<div class="col-lg-6">
				<img src="{{('pic/all5.png')}}">
			</div>
		</div>
		</div>
	</div>
</div>
<div class="container" style="padding-left: -80px; padding-top: 190px">
	<div class="row">
		<div class="col-lg-8" style="padding-top: 60px">
			<center >
			<b style="font-size: 20px;color: #ff8b0f">Subscribe Our Newsletter</b> <br>
			It is a long established fact that a reader will be distracted by the readable
content of a page we when looking at its layout.
<div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" placeholder="Search" class="form-control" />
    <label class="form-label" for="form1" >Search</label>
  </div>
</div>
</center>
		</div>
		<div class="col-lg-4">
			 <img src="{{('pic/sub.png')}}">
		</div>
		
	</div>
	</div>
	
</div>

<div class="container" style="padding-left: -80px; padding-top: 190px">
	<div class="row">
		<center>
		<div class="col-lg-12">
			<b style="font-size: 17px;color: gray">- Testmonials</b> 
		</div>
		<div class="col-lg-12">
			<b style="font-size: 45px;color: #ff8b0f">Love From Clients</b> 
		</div>
		</center>
	</div>
	<div class="row">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{('pic/slider.png')}}" alt="First slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		

	</div>
</div>

<div class="container-fluid" style="font-size: 45px;background-color: #ff8b0f;color: white; height: 180px">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
			<b style="padding-top: 30px">How It Work ?</b>
			</center>
		</div>
	</div>
</div>
<div class="container" style="font-size: ;color:black ; height: 180px;">
	<div class="row">
		<div class="col-lg-2 col-sm-2" style="background-color: white;height: 90px;">
			<b style="padding-top: 30px">Submit Requirement</b>
		</div>
		<div class="col-lg-1 col-sm-1">
			<!-- <b style="padding-top: 30px">Submit Requirement</b> -->
		</div>
		
		<div class="col-lg-2 col-sm-2" style="background-color: white;;height: 90px">
			<b style="padding-top: 30px">We Back Quote</b>
		</div>
		<div class="col-lg-1 col-sm-1">
			<!-- <b style="padding-top: 30px">Submit Requirement</b> -->
		</div>
		<div class="col-lg-2 col-sm-2" style="background-color: white;;height: 90px">
			<b style="padding-top: 30px">Pay 50% Advance</b>
		</div>
		<div class="col-lg-1 col-sm-1">
			<!-- <b style="padding-top: 30px">Submit Requirement</b> -->
		</div>
		<div class="col-lg-2 col-sm-2" style="background-color: white;;height: 90px">
			<b style="padding-top: 30px">Client Satisfaction</b>
		</div>
	</div>
	<br>
	<div class="row" style="border: 4px solid #ff8b0f;padding-top: 40px;padding-bottom: 40px">
		<center>
		<b>Client Satisfication</b>
		<p>It is a long established fact that a reader will be distracted by the readable content of a page we when looking at its layout. The
point of using lorem estm ipsum is that it has a more-or-less normal distribution of letters, as kertms opposed to using
‘Content here, content here, making it look like readables English Knowladge</p>
		</center>
	</div>
</div>

<div class="container-fluid" style="padding-top: 198px">
	<div class="row">
		<div class="col-lg-12 col-sm-2">
			<hr style="border: 1px solid black">
		</div>
	</div>
</div>

<div class=" container-fluid">
	<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row  d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <h6 class="text-uppercase " style="color: black;float: left;font-size: 15px">
      	<b>About us</b>

      </h6>
      <br>
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase ">
          <a href="#!"  style="color: gray">About Sahaa.me | </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="#!"  style="color: gray">Business listings | </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="#!"  style="color: gray">Help & Support | </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="#!" style="color: gray">Sahaa App | </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="#!" style="color: gray">Sahaa Blogs | </a>
        </h6>
      </div>
      
      <!-- Grid column -->

    </div>
    <h6 class="text-uppercase " style="color: black;float: left;font-size: 15px">
      	<b>Our Businesses & Services</b>

      </h6>
      <br>
      <div class="col-lg-2 sm-3">
        <h6 class="text-uppercase ">
          <a href="#!"  style="color: gray">Digital Marketing |  </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="#!"  style="color: gray">Result-Driven Services  | </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="#!"  style="color: gray">Google Ads  | </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="#!" style="color: gray">Sahaa App | </a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase">
          <a href="#!" style="color: gray">Social Media Ads | </a>
        </h6>
      </div>
      
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">Disclaimer: The opinions expressed within Reviews are those of the author and not the views or opinions of Yell Limited. Registered Office: 3 Forbury Place, Forbury Road, Reading, Berkshire,
RG1 3YL. Registered in England and Wales No. 4205228 VAT Number: GB 765 346 017. © Yell Limited 2021. All rights reserved. Yell, Yellow Pages and other ™ are trademarks of Yell Limited.</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text"> </i>
          </a>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>
</body>
</html>