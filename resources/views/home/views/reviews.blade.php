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
		    .search {
	padding-left:20px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('assets_1/images/pic/pic145.PNG')}}');
}
.searc {
	padding-left:20px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('assets_1/images/pic/pic146.PNG')}}');
}
	</style>
@section('container')
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-sm-12" class="reviewsPage--hero">
				<img src="{{('assets_1/images/pic/all1.PNG')}}" width="100%" height="450px"  class="d-inline-block align-top" alt="" style=" opacity: 0.6;">
				<div class="centered"><h1 style="font-size: 350%;color: #e87503;">Review a local business today</h1>
					<h2 style="font-size: 150%;color: black;font-weight: 300; text-align: center;">Help other consumers to make better decisions by sharing your experience with us.</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #e87503;height: 150px">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<br><br>
				<div class="container">
			      					<div class="row">
			      						<div class="col-sm-12 col-md-12 col-lg-12">
			      							<div class="input-group mb-3">
											  <!-- <div class="input-group-prepend">
											    <span class="" style="border-right: white;"><img class="d-block w-100" src="{{('assets_1/images/pic/pic145.png')}}" height="47px" alt="Third slide" style=""></span>
											  </div> -->
											  <input type="text" class="form-control search" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter a search term" aria-label="Amount (to the nearest dollar)" style="height: 47px;color: #f2f2f2;font-size: 18px">
											  <!-- <div class="input-group-prepend">
											    <span class=""><img class="d-block w-100" src="{{('assets_1/images/pic/pic146.png')}}" height="47px" alt="Third slide"></span>
											  </div> -->
											  <input type="text" class="form-control searc" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UAE, town or postcode" aria-label="Amount (to the nearest dollar)" style="height: 47px;border-right: white;color: #f2f2f2;font-size: 18px">
											  <div class="input-group-prepend">
											    <span class="sear"></span>
											  </div>
											  <button style="height: 47px;width: 17%;background-color: black;color: white">Search</button>
											</div>
			      						</div>
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
					<div><img src="{{('assets_1/images/pic/man1.jpg')}}" class="img" alt="Avatar" style="width:120px;height: 120px"></div>
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
					<div><img src="{{('assets_1/images/pic/man.PNG')}}" class="img" alt="Avatar" style="width:120px;height: 120px"></div>
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
					<div><img src="{{('assets_1/images/pic/man1.jpg')}}" class="img" alt="Avatar" style="width:120px;;height: 120px"></div>
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
					<div><img src="{{('assets_1/images/pic/pic11.PNG')}}" class="" alt="Avatar" style="width:120px;;height: 100px"></div>
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
					<div><img src="{{('assets_1/images/pic/all4.PNG')}}" class="" alt="Avatar" style="width:120px;;height: 100px"></div>
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
					<div><img src="{{('assets_1/images/pic/all2.PNG')}}" class="" alt="Avatar" style="width:120px;;height: 100px"></div>
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

	<div class="container-fluid" style="background-color: #e87503">
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

@endsection

