@extends('frontend.front.main')
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta charset="utf-8">

<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>

.button5 {

	border-radius: 50%;
	background-color: #e87503;
  border: 5px solid white;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 2px;
  width: 90px

}
/* Bootstrap 4 text input with search icon */
input.search {
	padding-left:20px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('frontend/assets/images/pic/pic145.PNG')}}');
}
input.searc {
	padding-left:20px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('frontend/assets/images/pic/pic146.PNG')}}');
}
.sear {
	padding-left:35px;
	background-repeat: no-repeat;
	background-position-y: 1px;
	background-image: url('{{('frontend/assets/images/pic/pic147.PNG')}}');
}


.main-text {
    position: absolute;
    top: 50px;
    width: 96.66666666666666%;
    color: #FFF;
}
div.gallery {
			  margin: 5px;
			  border: 1px solid #ccc;
			  float: left;
			  width: 280px;
			  height: 450px
			}

			div.gallery:hover {
			  border: 1px solid #777;
			}

			div.gallery img {
			  width: 100%;
			  height: auto;
			}

			div.desc {
			  padding: 15px;
			  text-align: center;
			}
			.curved-div svg {
  display: block;
}
.curved-div {
  background: #ff3c00;
  color: #FFF;
  text-align: center;
}
.curved-div h1 {
  font-size: 6rem;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
.curved-div p {
  font-size: 1rem;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
svg{
	position: absolute;
	bottom: 0px;
}
.content {
  position: absolute;
  bottom: 0;
  background: #dd8721; /* Fallback color */
  background: rgba(221, 135, 33, 0.9); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 300px;
}
.icon {
  padding-left: 25px;
  padding-right: 45px;
  background: url('{{('frontend/assets/images/pic/pic145.PNG')}}') no-repeat left;
  background-size: 40px;
}
.icons {
  padding-left: 25px;
  padding-right: 45px;
  background: url('{{('frontend/assets/images/pic/pic146.PNG')}}') no-repeat left;
  background-size: 40px;
}
</style>
@section('container')

        	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="">
			  <div class="carousel-inner" style="height: 700px">
			    <div class="carousel-item active " >
				  <img class="d-block w-100 " src="{{('frontend/assets/images/pic/pic155.PNG')}}" height="600px" alt="First slide">
				  <div class="content">
				   
				  </div>
			      <div class=" container-fluid">
			      	<div class="row">
			      		<div class="col-sx-12 col-sm-12 col-sm-12 col-lg-12">
			      			<div class="carousel-caption  d-md-block" style="color: white;">
			      				<!-- <h1 style="font-size: 40px;font-weight: 20px"><b>Sahaa.me The UAE leading online business directory</b></h1>
			      				<br><br><br>
			      				<div class="site-search-box-outer">
					                <div class="site-search-box-inner">
					                    <div class="site-search-box-main">
					                        <div class="site-search-box-main-inner">
					                            <div class="site-search-box-main-outer">
					                                <div class="search-form-outer">
					                                    <div class="search-form-inner">
					                                        <form action="">
					                                            <div class="search-form-main">
					                                                <div class="form-fiels-inner">
					                                                    <div class="form-field-inner">
					                                                        <div class="form-field-icon">
					                                                            <div class="field-search-icon" style="height: 50px;">
					                                                                <span class="ti-search" style="height: 50px;"></span>
					                                                            </div>
					                                                            <input type="text" id="business_search"
					                                                                placeholder="Enter a Search Team" style="height: 50px;width: 400px">
					                                                            <div class="field-close-icon">
					                                                                <span class="ti-close"></span>
					                                                            </div>
					                                                        </div>
					                                                        <div class="form-field-icon">
					                                                            <div class="field-search-icon">
					                                                                <span class="ti-location-pin"></span>
					                                                            </div>
					                                                            <input type="text" placeholder="UK,town or postcode" style="height: 50px;width: 400px">
					                                                            <div class="field-close-icon">
					                                                                <span class="ti-close"></span>
					                                                            </div>
					                                                        </div>
					                                                        <div class="form-field-button" >
					                                                            <button style="height: 50px;width: 200px">Search</button>
					                                                        </div>
					                                                    </div>
					                                                </div>
					                                            </div>
					                                        </form>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div> -->
					            
						    <h1><b style="float: left;">TOP 10</b><br><b style="float: left;">Engineers and Surveyors</b><br></h1><br>
						     <h1><button type="button" class="btn btn-lg" style="float: left;background-color: white">View All -></button></h1><br>
						    
						  </div>
			      		</div>
			      	</div>
			      </div>
			      
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{('frontend/assets/images/pic/pic157.jpg')}}"  height="600px" alt="Second slide">
			      <div class="content">
				   
				  </div>
			      <div class=" container-fluid">
			      	<div class="row">
			      		<div class="col-sm-12 col-md-12 col-lg-12">
			      			<div class="carousel-caption  d-md-block" style="color: white">
			      				<!-- <h1 style="font-size: 40px;font-weight: 20px"><b>Sahaa.me The UAE leading online business directory</b></h1>
			      				<br><br><br>
			      				<div class="site-search-box-outer">
					                <div class="site-search-box-inner">
					                    <div class="site-search-box-main">
					                        <div class="site-search-box-main-inner">
					                            <div class="site-search-box-main-outer">
					                                <div class="search-form-outer">
					                                    <div class="search-form-inner">
					                                        <form action="">
					                                            <div class="search-form-main">
					                                                <div class="form-fiels-inner">
					                                                    <div class="form-field-inner">
					                                                        <div class="form-field-icon">
					                                                            <div class="field-search-icon" style="height: 50px;">
					                                                                <span class="ti-search" style="height: 50px;"></span>
					                                                            </div>
					                                                            <input type="text" id="business_search"
					                                                                placeholder="Restaurants" style="height: 50px;width: 400px">
					                                                            <div class="field-close-icon">
					                                                                <span class="ti-close"></span>
					                                                            </div>
					                                                        </div>
					                                                        <div class="form-field-icon">
					                                                            <div class="field-search-icon">
					                                                                <span class="ti-location-pin"></span>
					                                                            </div>
					                                                            <input type="text" placeholder="Dubai" style="height: 50px;width: 400px">
					                                                            <div class="field-close-icon">
					                                                                <span class="ti-close"></span>
					                                                            </div>
					                                                        </div>
					                                                        <div class="form-field-button" >
					                                                            <button style="height: 50px;width: 200px">Search</button>
					                                                        </div>
					                                                    </div>
					                                                </div>
					                                            </div>
					                                        </form>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div> -->
						    <br>
						    <h1><b style="float: left;">TOP 10</b><br><b style="float: left;">Construction Companies</b><br></h1><br>
						     <h1><button type="button" class="btn btn-lg" style="float: left;background-color: white">View All -></button></h1><br>
						    
						  </div>
			      		</div>
			      	</div>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="{{('frontend/assets/images/pic/pic154.PNG')}}" height="600px" alt="Third slide">
			      <div class="content">
				   
				  </div>
			      <div class=" container-fluid">
			      	<div class="row">
			      		<div class="col-sm-12 col-lg-12">
			      			<div class="carousel-caption  d-md-block" style="color: white">
			      				<!-- <h1 style="font-size: 40px;font-weight: 20px"><b>Sahaa.me The UAE leading online business directory</b></h1>
			      				<br><br><br>
			      				<div class="site-search-box-outer">
					                <div class="site-search-box-inner">
					                    <div class="site-search-box-main">
					                        <div class="site-search-box-main-inner">
					                            <div class="site-search-box-main-outer">
					                                <div class="search-form-outer">
					                                    <div class="search-form-inner">
					                                        <form action="">
					                                            <div class="search-form-main">
					                                                <div class="form-fiels-inner">
					                                                    <div class="form-field-inner">
					                                                        <div class="form-field-icon">
					                                                            <div class="field-search-icon" style="height: 50px;">
					                                                                <span class="ti-search" style="height: 50px;"></span>
					                                                            </div>
					                                                            <input type="text" id="business_search"
					                                                                placeholder="Restaurants" style="height: 50px;width: 400px">
					                                                            <div class="field-close-icon">
					                                                                <span class="ti-close"></span>
					                                                            </div>
					                                                        </div>
					                                                        <div class="form-field-icon">
					                                                            <div class="field-search-icon">
					                                                                <span class="ti-location-pin"></span>
					                                                            </div>
					                                                            <input type="text" placeholder="Dubai" style="height: 50px;width: 400px">
					                                                            <div class="field-close-icon">
					                                                                <span class="ti-close"></span>
					                                                            </div>
					                                                        </div>
					                                                        <div class="form-field-button" >
					                                                            <button style="height: 50px;width: 200px">Search</button>
					                                                        </div>
					                                                    </div>
					                                                </div>
					                                            </div>
					                                        </form>
					                                    </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
					                </div>
					            </div> -->
						    <br><h1><b style="float: left;">TOP 10</b><br><b style="float: left;">Building Material and Suppliers</b><br></h1><br>
						     <h1><button type="button" class="btn btn-lg" style="float: left;background-color: white">View All -></button></h1><br>
						  </div>
			      		</div>
			      	</div>
			      </div>
			    </div>
			     
			  </div>
			   	<svg style="" id="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				  <path fill="white" fill-opacity="1" d="M0,160L80,181.3C160,203,320,245,480,218.7C640,192,800,96,960,74.7C1120,53,1280,107,1360,133.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
				</svg>
				
			</div>
			<div class="main-text">
			    <div class="row">
			    	<div class="col-md-12 col-lg-12 col-lg-12 text-center">
			    	<br><br><br>
			        <h1 style="font-size: 40px;font-weight: 400; font-weight: 20px;font-family: Open Sans,Arial,Helvetica,Verdana,sans-serif;">Sahaa.me The UAE Leading Online Business Directory</h1>
			      				<br>

			      				<div class="container">
			      					<div class="row">
			      						<div class="col-sm-12 col-md-12 col-lg-12">
			      							<div class="input-group mb-3">
											  <!-- <div class="input-group-prepend">
											    <span class="" style="border-right: white;"><img class="d-block w-100" src="{{('assets/images/pic/pic145.png')}}" height="47px" alt="Third slide" style=""></span>
											  </div> -->
											  
											  <!-- <i class="fa fa-search" style="color: #cccccc;background-color: white;font-size: 22px;border-right: none;padding-top: 10px;padding-left: 5px;width: 35px;height: 50px;margin-top: 0.9px"></i> -->
											  <input type="text" class="form-control icon" placeholder="Enter a search term" aria-label="Amount (to the nearest dollar)" style="height: 50px;color: black;font-size: 18px;border-left: none;padding-left: 40px">
											  <!-- <div class="input-group-prepend">
											    <span class=""><img class="d-block w-100" src="{{('assets/images/pic/pic146.png')}}" height="47px" alt="Third slide"></span>
											  </div> -->
											   <!-- <i class="fa fa-map-marker" style="color: #cccccc;background-color: white;font-size: 22px;border-right: none;padding-top: 10px;padding-left: 5px;height: 50px;"></i> -->
											  <input type="text" class="form-control icons" placeholder="UAE, town or postcode" aria-label="Amount (to the nearest dollar)" style="height: 50px;border-right: white;color: black;font-size: 18px;padding-left: 40px">
											  <div class="input-group-prepend">
											    <span class="sear"></span>
											  </div>
											  <button style="height: 50px;width: 17%;background-color: black;color: white">Search</button>
											</div>
			      						</div>
			      					</div>
			      				</div>
					<button class="button button5" style="position: relative;top: 300px;z-index: 1;">&#8595;</button>
			    </div>
			    </div>
			</div>

			      					
<br><br>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<center>
				<!-- <p>Once you’ve settled on a business</p> -->
				<h2><b>Explore the Marketplace</b></h2>
				<br>
			</center>
		</div>
		<div class="col-lg-12 col-sm-12">
			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-4">
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Automotive\SVG\Automotive.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Automotive	</p>
					<p style="font-size: 11px">browse this</p>
					</center>
					
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Home & Garden\SVG\Cleaning.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Cleaning	</p>
					
					<p style="font-size: 11px">browse this</p>
					</center>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4">
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Automotive\SVG\Gym.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Gym	</p>
					
					<p style="font-size: 11px">browse this</p>
					</center>
					
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					
					<center>
						<img src="{{'frontend/assets\icon\Categoryicons\Entertainment\SVG\Movies.svg'}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
					
					<p style="font-size:  18px">Movers	</p>
					<p style="font-size: 11px">browse this</p>
					</center>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4">
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Automotive\SVG\finance.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Finance	</p>
					
					<p style="font-size: 11px">browse this</p>
					</center>
					
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Construction & Contractors\SVG\Electricians.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Electrician	</p>
					
					<p style="font-size: 11px">browse this</p>
					</center>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Automotive\SVG\Mobile repair.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Mobile repair	</p>
					
					<p style="font-size: 11px">browse this</p>
					</center>
					
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4">
					
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Automotive\SVG\laundry.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Laundary	</p>
					
					<p style="font-size: 11px">browse this</p>
					</center>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4">
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Automotive\SVG\landscaping.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Landscaping	</p>
					
					<p style="font-size: 11px">browse this</p>
					</center>
					
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4">
					<center>
						<img src="{{('frontend/assets\icon\Categoryicons\Health & Medicine\SVG\Mental Health.svg')}}" width="100px" height="100px" class="d-inline-block align-top" alt=""><br>
						<p style="font-size:  18px">Health	</p>
					
					<p style="font-size: 11px">browse this</p>
					</center>
					
				</div>
			</div>
			<div class="row">
				
				<div class="col-sm-12 col-lg-12">
					<center>
						<a href="{{ url('categories') }}" type="button" class="btn btn-lg" style="background-color: white;border: 1px solid #e87526; font-size: 11px">See More &emsp;<p style="display: inline;border: 1px solid #e87526; color: #e87526;border-radius: 100% ">&nbsp; > &nbsp;</p></a>
						
					</center>
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

<div class="container-fluid" style="background-color: #ffeede;">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<br><br>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="card" style=";background-image: url('{{('assets/images/pic/pic45.PNG')}}');background-repeat: no-repeat;background-size: cover; height: 270px">
						  <div class="card-body">
						    <p class="card-text" >Download sahaa.Me app<br>
								</p>
								<p class="card-text" style="margin-top: -20px">
								To search, locate and<br>
								</p>
								<p class="card-text" style="margin-top: -20px">
								Contact any local<br>
								</p>
								<p class="card-text" style="margin-top: -20px">
								Business.</p>
						    <a href="#" class="card-link" style="position: absolute;left: 20; bottom: 60;"><img src="{{('frontend/assets/images/pic/pic49.PNG')}}" width="130px" height="40px" class="d-inline-block align-top" alt=""><br></a><br>
						    <a href="#" class="card-link" style="position: absolute;left: 20; bottom: 10;"> <img src="{{('frontend/assets/images/pic/pic50.PNG')}}" width="130px" height="40px" class="d-inline-block align-top" alt=""><br></a>
						  </div>
						</div>

				<br>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="card" style=";background-image: url('{{('frontend/assets/images/pic/pic46.PNG')}}');background-repeat: no-repeat;background-size: cover;background-repeat: no-repeat;background-size: cover; height: 270px;">
							  <div class="card-body" style="color: white">
							    <center>
							    	 <p class="card-text" style="margin-bottom: 0px;margin-top: -5px;padding: 0;font-size: 17px">Promote your busniss with</p>
							    	 <p class="card-text" style="margin-bottom: 0px;margin-top: -8px; padding: 0;font-size: 17px">Free busniss listing,google
							    	 <p class="card-text" style="margin-bottom: 0px;margin-top: -8px;padding: 0;font-size: 17px">Ads,Social media ads, </p>
							    	 <p class="card-text" style="margin-bottom: -6px;margin-top: -8px;padding: 0;font-size: 17px">Socail media marketing,and and more </p>
							    </center>
							    <a href="#" class="card-link" style="position: absolute;left: 20; bottom: 14;background-color: #f4910b;color: white;height: 27px;width: 120px"><center> Learn More</center></a>
							  </div>
							</div>
									<br>			
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<div class="card" style=";background-image: url('{{('assets/images/pic/pic47.PNG')}}');background-repeat: no-repeat;background-size: cover; height: 270px">
							  <div class="card-body" style="">
							    <p class="card-text" style="float: right;margin-bottom: 0px;margin-top: -5px;padding: 0;font-size: 15px">Post your blods & news</p><br>
							    	 <p class="card-text" style="float: right;margin-bottom: 0px;margin-top: -11px; padding: 0;font-size: 15px">To attract maximum</p><br>
							    	 <p class="card-text" style="float: right;margin-bottom: 0px;margin-top: -17px;padding: 0;font-size: 15px">Traffic and create an active </p><br>
							    	 <p class="card-text" style="float: right;margin-bottom: -6px;margin-top: -24px;padding: 0;font-size: 15px">online presence </p>
							      <a href="#" class="card-link" style="position: absolute;left: 20; bottom: 14;background-color: white;color: #f4910b;height: 25px;width: 120px"><!-- <img src="{{('assets/images/pic/pic153.png')}}" class="d-inline-block align-top" alt=""> --><center> Learn More</center></a>
							  </div>
							</div>
												
						</div>
				</div>
			</div>
			<br><br>
		</div>
	</div>
</div>

<div class="container-fluid" style="background-color: #f2f2f0;">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
			<div class="container" style="background-color: ">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<br><br><br>
						<h1><b>A clear process every<br>
						step of the way</b></h1>
						<p style="font-size: 12px;color: #aaaaaa">Email us to get the documented process for listing<br>
						Your business on the biggest bussiness directory platform<br>
						Sahaa.me </p>
						<br><br>
						<form>
						  <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email" style="width: 300px">
						  </div>
						  
						</form>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<!-- <img src="{{('assets/images/pic/pic51.PNG')}}" width="700px" height="100%" class="d-inline-block align-top" alt=""> -->
					</div>
				</div>
			</div>
			<br>
			<div class="container" style="background-color: ">
				<div class="row">
					<div class="col-lg-12 col-sm-12">
						<br><br><br>
						<center>
							<h2><b>Why Businesses Trust Sahaa</b></h2>
							<p style="font-size: 17px">We've earned the trust of thousands of customers by featuring only the<br>
							most reputable and high-quality businesses. Finding a perfect business on<br>
							Sahaa.me is much easy with simple, accurate, and precise information that<br>
							you can use right now to directly contact any business.</p>
						</center>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-lg-3">
						      <div class="thumbnail"  style="background-color: white;">
						          <center>
						          	<img src="{{('frontend/assets/images/pic/pic52.PNG')}}"  width="100px" height="100px" class="d-inline-block align-top" alt="">
						          </center>
						          <div class="caption">
						            <div class="desc">
									  	<center>
								    		<p class="card-text" style="position: absolute;left: 75px; top: 0;"></p><br>
								    	<p><b>Verified Reviews</b><br><h4><b style="color: #e87503">1,00,000+</b></h4></p>
								    	<p style="font-size: 11px">Find out about our verified reviews that<br>
										have had a significant impact on our<br>
										online reputation, as well as what others<br>
										have to say about our<br>
										Company's services.</p>
								    	</center>
									 </div>
						          </div>
						      </div>
						      <br>
						    </div>
							<div class="col-md-6 col-sm-6 col-lg-3">
						      <div class="thumbnail"  style="background-color: white;">
						          <center>
						          	<img src="{{('frontend/assets/images/pic/pic53.PNG')}}"  width="100px" height="100px" class="d-inline-block align-top" alt="">
						          </center>
						          <div class="caption">
						            <div class="desc">
									  	<center>
								    		<p class="card-text" style="position: absolute;left: 75px; top: 0;"></p><br>
								    	<p><b>Business Categories</b><br><h4><b style="color: #e87503">300+</b></h4></p>
								    	<p style="font-size: 11px">From our 300+ business categories to<br>
											choose from, it becomes extremely<br>
											simple for you to choose the right<br>
											Business for your requirements</p>
								    	</center>
									 </div>
						          </div>
						      </div>
						      <br>
						    </div>
							<div class="col-md-6 col-sm-6 col-lg-3" >
						      <div class="thumbnail"  style="background-color: white;">
						          <center>
						          	<img src="{{('frontend/assets/images/pic/pic54.PNG')}}"  width="100px" height="100px" class="d-inline-block align-top" alt="">
						          </center>
						          <div class="caption">
						            <div class="desc">
									  	<center>
								    		<p class="card-text" style="position: absolute;left: 75px; top: 0;"></p><br>
								    	<p><b>Free Marketing</b><br><h4><b style="color: #e87503">OPPORTUNITY</b></h4></p>
								    	<p style="font-size: 11px">Free marketing services with an in-depth<br>
											analysis of your customers, competitors,<br>
											and campaigns to help you boost your<br>
											sales.</p>
								    	</center>
									 </div>
						          </div>
						      </div>
						      <br>
						    </div>
						    <div class="col-md-6 col-sm-6 col-lg-3">
						      <div class="thumbnail"  style="background-color: white;">
						          <center>
						          	<img src="{{('frontend/assets/images/pic/pic55.PNG')}}"  width="100px" height="100px" class="d-inline-block align-top" alt="">
						          </center>
						          <div class="caption">
						            <div class="desc">
									  	<center>
								    		<p class="card-text" style="position: absolute;left: 75px; top: 0;"></p><br>
								    	<p><b>Get to know the<br>
										right audience</b></p>
								    	<p style="font-size: 11px">List your products and services on our<br>
											site to get maximum targeted customers<br>
											and increase your revenue.</p>
											<br><br>
								    	</center>
									 </div>
						          </div>
						      </div>
						      <br>
						    </div>
						    <br>
					</div>
					<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid" style="background-image: url('{{('assets/images/pic/banner.png')}}');background-repeat: no-repeat;background-size: cover;">
           <div class="row">
           	<div class="col-sm-12 col-lg-12">
           		<div class="container">
           			<div class="row">
           				<div class="col-lg-2 col-sm-2">
           					
           				</div>
           				<div class="col-lg-10 col-sm-10">
           					<br><br>
           					<h2><b style="color: white">New User benefits</b></h2>
           					<p style="font-size: 16px; color: white">Avail the offer as a New-User and get a<br>
							free Coupon Gift or Allowance.</p>
							<br><br>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-5" >
									<a href=""><img src="{{('frontend/assets/images/pic/pic56.PNG')}}" width="300px" height="70px" class="d-inline-block align-top" alt="" >
									</a>

								</div>
								<div class="col-sm-12 col-md-12 col-lg-2" style="color: orange">
									
									.
								</div>
								<div class="col-sm-12 col-md-12 col-lg-5">
									
									<a href="">
										<img src="{{('frontend/assets/images/pic/pic58.PNG')}}" width="300px" height="70px" class="d-inline-block align-top" alt="">
									</a>
								</div>
							</div>
							
           				</div>
           			</div>
           		</div>
           	</div>
           </div>
        </div>



<div class="container">
            <div class="footer-section-outer">
                <div class="footer-section-inner">
                    <div class="footer-popular-searches">
                        <div class="footer-list-text">
                            <h4><b>Popular Searches</b></h4>
                        </div>
                        <div class="footer-links-outer">
                            <div class="footer-links-inner">
                                <div class="footer-links-row">
                                    <div class="footer-links-col">
                                        <ul class="footer-links-ul">
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Home Decor</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Garden
                                                    decor</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Laundering</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Hairstylist</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">News
                                                    vendors</a></li> </a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Archetonics</a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Constructor</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">House
                                                    agents</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Gasfitters</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Electrical
                                                    Experts</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-links-col">
                                        <ul class="footer-links-ul">
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Carpenter
                                                    shops</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Styling
                                                    Salon</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Drugstore,
                                                    Dispensary</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Portrait and
                                                    sketcher</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Wine bar</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Cafeteria</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Dining
                                                    room</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Dining
                                                    room</a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Restaurants</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Guest
                                                    Houses</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-links-col">
                                        <ul class="footer-links-ul">
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Steamfitters</a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Housekeeper</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Parking
                                                    lot</a></li>
                                            <li class="footer-links-li"><a href="#"
                                                    class="footer-link-a">Agriculture</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Physician,
                                                    Clinician</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Roof
                                                    Material</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Fast Food</a>
                                            </li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Charity
                                                    Store</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Malls</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Retail
                                                    Store</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-links-col">
                                        <ul class="footer-links-ul">
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Mini
                                                    Market</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Mobile
                                                    Shop</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Chasses and
                                                    Brake</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Veterinary
                                                    doctor</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Vehicle
                                                    rental</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Medical
                                                    practitioner</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Mobile Repair
                                                    </a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Entertainment</a></li>        
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Construction & Contractors</a></li>
                                            <li class="footer-links-li"><a href="#" class="footer-link-a">Health & Medicine</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
