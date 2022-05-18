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
		.ull .lii{
			float: bottom;
		  display: inline;
		 color: #333!important;
    font-size: 20px;
    font-weight: 300;
    padding: 0;
    width: auto;
    position: relative;
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
		.dropbtn {
			  background-color:;
			  color: white;
			  padding: 16px;
			  font-size: 16px;
			  border: none;
			  cursor: pointer;
			}

			.dropdown {
			  position: relative;
			  display: inline-block;
			}

			.dropdown-content {
			  display: none;
			  position: absolute;
			  background-color: #f9f9f9;
			  min-width: 160px;
			  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			  z-index: 1;
			}

			.dropdown-content a {
			  color: black;
			  padding: 12px 16px;
			  text-decoration: none;
			  display: block;
			}

			.dropdown-content a:hover {background-color: #f1f1f1}

			.dropdown:hover .dropdown-content {
			  display: block;
			}

			.dropdown:hover .dropbtn {
			  background-color: #3e8e41;
			}
			.uu {
			  list-style: none;
			  font-size: 20px
			}

			.uu .ll:before {
			  content: '✓';
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
		    background: #ffd100;
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
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<h1>Advertise your business</h1>
				<p style="font-size: 20px;font-weight: 300;">Get your business off the ground with Sahaa on all networks such as</p>
				<ul class="uu">
				  <li class="ll">Sahaa.com</li>
				  <li class="ll">Google</li>
				  <li class="ll">Yahoo</li>
				  <li class="ll">Bing</li>
				  <li class="ll">All social media platforms</li>
				</ul>
				<a href="" style="border: 2px solid #0083c3; background-color: white; color: #0083c3;font-size: 18px;display: inline-block;cursor: pointer;text-decoration: none;line-height: 3em;">Free of cost listing stage</a>
			</div>
			<div class="col-lg-6 col-sm-6">
				 <img src="{{('pic/pic12.png')}}" width="100%" height="100%" class="d-inline-block align-top" alt="">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<h1>Become a part of our advertising campaign to digitalize your business</h1>
				<p style="font-size: 17px">
					Digital marketing is useless if you haven't got the expected result and can't familiarise yourself with all digital channels where all viewers spend most of their time.<br>

					So, from this point, Sahaa starts their work and correlates you to all the leading brands and promote your items on all social media accounts so that consumer can catch up with you.<br>

					Sahaa is like a shining example that keeps his clients a step forward to their competitors and provides opportunities to contact you all over UAE. Viewers will be ready to grab your brand with our enticing style and digital strategies.<br>

					The leads who visit our site are trustworthy and reliable, and they are browsing for desirable products that can meet their interests. Thus without skipping the golden chance, you can become part of it.<br>
					List your business on Sahaa and the remnant advertising task we will immensely enjoy.

				</p>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="background-color: #f2f2f2">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-lg-12">
							<h1>We are here to simplify your business</h1>
							
						</div>
						<div class="col-sm-4 col-sm-4" style="background-color: white">
							<div class="guides" >
								<div data-v-9ae41412 class="app--headingCopy-bold app--headingCopy-larger gui" style="height: 250px">
									<center><img src="{{('pic/pic13.png')}}" width="100px" height="100px" class="d-inline-block align-top" alt="">
											<p style="font-size: 16px;">We will publicize your business on all social media accounts and websites like google, yahoo, bing, sahaa to make you familiar worldwide.</p>
									</center>
											
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-sm-4" style="background-color: white">
							<div class="guides" >
								<div data-v-9ae41412 class="app--headingCopy-bold app--headingCopy-larger gui" style="height: 250px">
									<center><img src="{{('pic/pic14.png')}}" width="100px" height="100px" class="d-inline-block align-top" alt="">
											<p style="font-size: 16px;">A messaging tool allows you to ask your queries and sort out your problems by communicating with our expertise without extra charges. </p>
									</center>
											
								</div>
							</div>
						</div>

						<div class="col-sm-4 col-sm-4" style="background-color: white">
							<div class="guides" >
								<div data-v-9ae41412 class="app--headingCopy-bold app--headingCopy-larger gui" style="height: 250px">
									<center><img src="{{('pic/pic15.png')}}" width="100px" height="100px" class="d-inline-block align-top" alt="">
											<p style="font-size: 16px;">You can take advantage of Sahaa's mobile app, where you can watch out for your reviews, update your content and get message requests from your clients as well. </p>
									</center>
											
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<center>
					<h1>Enjoy upstairs of success with a penniless advertisement for six months</h1>
				</center>
				<div class="col-sm-3 col-lg-3">
					<img src="{{('pic/pic16.png')}}" width="350px" height="350px" class="d-inline-block align-top" alt="">
				</div>
				<div class="col-sm-8 col-lg-8">
					<p style="font-size: 16px;">We have several strategies and tactics to empower your business and boost your search result on sahaa and other platforms. In addition, we make your business link with suitable suppliers or buyers just a few advertising tricks.<br>

					By utilizing our website and listing your business, you can attract other clients and customers toward your brand and enhance more clicks, which calls for your business. Our target is to show your features, brand, and items worldwide.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<hr style="border: 2px solid #d27728">

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<center>
					<h1>
						Boost your listing today with Sahaa.me Prominence Are you an existing customer looking for support? 
					</h1>
				</center>
				<div class="row">
					<div class="col-sm-6 col-lg-6">
						<form>
							<small style="float: right;">required*</small>
						  <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First name*">
						  </div>
						  <div class="form-group">
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Last name*">
						  </div>
						   <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company*">
						  </div>
						  <div class="form-group">
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Website adress*">
						  </div>
						   <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Eail adress*">
						  </div>
						  <div class="form-group">
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone number*">
						  </div>
						  <center>
						  <a href="" style="background-color: #d27728; color: white;font-size: 18px;display: inline-block;cursor: pointer;text-decoration: none;line-height: 3em;">Request a Free Call Back</a>
						  </center>
						</form>
					</div>
					<div class="col-sm-6 col-lg-6">
						<div class="row">
							<div class="col-sm-6 col-lg-6">
								<center>
								<img src="{{('pic/pic17.png')}}" width="80px" height="80px" class="d-inline-block align-top" alt="">
								<h2>0800 777 445</h2>
								<p>Mon-Thu 8:30am-6:00pm<br>Fri 8:30am-5:30pm</p>
								</center>
							</div>
							<div class="col-sm-6 col-lg-6">
								<center>
								<img src="{{('pic/pic18.png')}}" width="80px" height="80px" class="d-inline-block align-top" alt=""><br>
								<a href="" style="background-color: green; color: white;font-size: 18px;display: inline-block;cursor: pointer;text-decoration: none;line-height: 3em;width: 8em;">Online Chat</a>
								<p>Ready to chat 24/7<br>7 days a week</p>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<br><br><br>
				<hr>
			</div>
		</div>
	</div>

@endsection

