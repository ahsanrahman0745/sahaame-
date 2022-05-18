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
		    width: 1100px
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
		.centered {
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		}
		.reviewsPage--hero {
		    position: relative;
		    height: 50%;
		    max-height: 500px;
		    background-position: top;
		    background-repeat: no-repeat;
		    background-size: cover;
		    text-align: center;
		}
		.img {
			  border-radius: 50%;
			}
		.inline { 
		    display: inline-block; 
		    margin:10px;
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
			<div class="col-lg-10 col-sm-10" >
				<nav class="navbar " style="height: 40px">
				  <a class="navbar-brand" href="#" style="padding-left: 180px;position: relative; bottom: 12px;">
				    <img src="{{('pic/saha.png')}}" width="200px" height="50" class="d-inline-block align-top" alt="">
				  </a>
				</nav>
			</div>
			<div class="col-lg-2 col-sm-2">
				<nav class="navbar " style="height: 40px">
				  <img src="{{('pic/userlogo.png')}}" width="35px" height="35px"  class="d-inline-block align-top" alt=""><a class="navbar-brand aa" href="#"  style="position: relative; bottom: 9px;">Log in</a>
				  
				</nav>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12" class="reviewsPage--hero">
				<img src="{{('pic/all1.png')}}" width="100%" height="450px"  class="d-inline-block align-top" alt="">
				<div class="centered"><h1 style="font-size: 350%;color: #fedb00;">Review a local business today</h1>
					<h2 style="font-size: 150%;color: #fff;font-weight: 300;">Help other consumers to make better decisions by sharing your experience with us.</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #0083c3;height: 150px">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="container">
					<div class="row">
						<form class="form-inline" style="position: relative;top: 40px">
						  <div class="form-group">
						    <label class="sr-only " for="inputOne">Enter a search team</label>
						    <input type="text" class="form-control" id="inputOne" style="height: 60px;width: 400px" placeholder="Enter a search team">
						  </div>
						  <div class="form-group">
						    <label class="sr-only" for="inputTwo">Location</label>
						    <input type="text" class="form-control" style="height: 60px;width: 400px" id="inputTwo" placeholder="Location">
						  </div>
						  <button type="submit" class="btn btn-default" style="height: 60px;width: 200px;background-color: yellow">Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-6" style="border-right: 1px solid black">
				<h2>Reviews of our customers</h2>
				<div>
				<div class='inline'>
					<div><img src="{{('pic/man1.jpg')}}" class="img" alt="Avatar" style="width:120px;height: 120px"></div>
				</div>
				   <div class='inline'>
					   	<div><h4>Catherina Jordan</h4>
							<p>12, Dec 2021</p>
							<p></p>
						</div>
					</div>
				</div>
				<p>
					I'm running a computer's business, and the team helped boost my business.
				</p>

				<div>
				<div class='inline'>
					<div><img src="{{('pic/man.png')}}" class="img" alt="Avatar" style="width:120px;height: 120px"></div>
				</div>
				   <div class='inline'>
					   	<div><h4>Juliet sizer</h4>
							<p>22, Nov 2021</p>
							<p></p>
						</div>
					</div>
				</div>
				<p>
					Great support they did; keep it up like that
				</p>

				<div>
				<div class='inline'>
					<div><img src="{{('pic/man1.jpg')}}" class="img" alt="Avatar" style="width:120px;;height: 120px"></div>
				</div>
				   <div class='inline'>
					   	<div><h4>Aarav Laghari:</h4>
							<p>2, August 2021</p>
							<p></p>
						</div>
					</div>
				</div>
				<p>
					Feeling relaxed while listing my business over there, I was anxious about my first deal of jackets, but It was successful because of this platform!!!
				</p>
			</div>
			<div class="col-sm-6 col-lg-6" style="">
				<h2>Catch up with our best reviewers</h2>
				<div>
				<div class='inline'>
					<div><img src="{{('pic/pic11.png')}}" class="" alt="Avatar" style="width:120px;;height: 100px"></div>
				</div>
				   <div class='inline'>
					   	<div><h4>Aditya Choudary</h4>
						</div>
					</div>
				</div>
				<a href="">
					19, May 2021
				</a><br>
				<!-- <h4><b>UPDATE - Predictions coming true!</b></h4> -->
				
				<p>
					My name is Aditya, and I'm a gym trainer. I have established a gym, trained many people to put off their weight and got a gorgeous body.
				</p>

				<div>
				<div class='inline'>
					<div><img src="{{('pic/all4.png')}}" class="" alt="Avatar" style="width:120px;;height: 100px"></div>
				</div>
				   <div class='inline'>
					   	<div><h4>David Smith</h4>
						</div>
					</div>
				</div>
				<a href="">
					22, May 2021
				</a><br>
				<!-- <h4><b>UPDATE - Predictions coming true!</b></h4> -->
				
				<p>
					Instead of wasting your time, choose the right one for your business, like Sahaa.
				</p>

				<div>
				<div class='inline'>
					<div><img src="{{('pic/all2.png')}}" class="" alt="Avatar" style="width:120px;;height: 100px"></div>
				</div>
				   <div class='inline'>
					   	<div><h4>Ayan Noor</h4>
						</div>
					</div>
				</div>
				<a href="">
					20, Oct 2020
				</a><br>
				<!-- <h4><b>UPDATE - Predictions coming true!</b></h4> -->
				
				<p>
					I'm working as a sales manager in a multinational company. In my opinion, Sahaa is the best source to generate a link with clients and suppliers and offer the best services.
				</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<br>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="background-color: #fedb00">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<p style="font-size: 150%;font-weight: 600;">FAQs</p>
							<p style="font-size: 120%;"><strong>What is the importance of reviews?</strong></p>
							<p style="    font-size: 16px;font-weight: 400;">Many people analyse or look at reviews before placing an order because they think it is the best way to check the quality of the product and website.<br>
							Watching others' comments remarks, and experiences, one becomes accustomed to trusting and deciding. 
							</p>

							<p style="font-size: 120%;"><strong>Are we allowed to make bad comments?</strong></p>
							<p style="    font-size: 16px;font-weight: 400;">Yes, if you have a bad experience, you can share it with other people because we are loyal to our customers and support truth. 
							</p>

							<p style="font-size: 120%;"><strong>Am I able to reply to reviews?</strong></p>
							<p style="    font-size: 16px;font-weight: 400;">Yes, you can reply to the reviews.
							</p>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<br>
			</div>
		</div>
	</div>
	

	<!-- search navbar -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12">
				<p>About us</p>
				<ul class="navbar-nav ul" style="position: relative;right: 39px">
			      <li class="nav-item li" >
			        <a class="nav-link "  style="color: black;" href="#" >About Yell.com &nbsp;&nbsp;| &nbsp; &nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="{{ url('reviews') }}">Reviews&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="#">Yell Home & Garden&nbsp;&nbsp; |&nbsp;&nbsp;</a>
			      </li>
			      <li class="nav-item li">
			        <a class="nav-link "  style="color: black;" href="{{ url('help&support') }}">Help & Support&nbsp;&nbsp; |&nbsp;&nbsp;</a>
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