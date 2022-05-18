<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sahaa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" >

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>


    </head>
    <body>
        <!-- Navbar1 -->
<nav class="navbar navbar-expand-lg  text-light bg-dark">
    <div class="container-fluid mx-5 ">
        <ul class="navbar-nav me-auto ml-5 mb-2 mb-lg-0">
            <li class="nav-item mx-2">
              <a class="nav-link" href="#">Sahaa.me</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Sahaa Business</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link " href="#">Sahaa Promotions</a>
            </li>
          </ul>

        <div class="d-flex">
            <ul class="navbar-nav me-auto mr-5 mb-2 mb-lg-0">
                <li class="nav-item mx-2">
                  <a class="nav-link xyz" href="#">Download the app</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="/listing">Get a free listing</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#">Advertise</a>
                </li>
                <li class="nav-item mx-2 ">
                    <a class="nav-link" style="color:#E87503" href="#"><i class="fas fa-phone-alt mr-2" ></i>info@sahaa.me</a>
                </li>
              </ul>

        </div>
    </div>
  </nav>
      <!-- Navbar2 -->
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid my-2 mx-5 ">
            <a class="navbar-brand ml-5 " href="#">
                <img src="{{ asset('assets/Logo/1x/full logomdpi.png') }}" class="ml-3" alt="..." height="50">
              </a>
              <div class="d-flex justify-content-center">
                <a class="navbar-brand mr-5 " href="#">
                    <i class="far fa-user mx-2 " style="color:#E87503"></i>
                    Login
                    <i class="fas fa-chevron-right mx-2 " style="color: gray"></i>
                  </a>
              </div>
        </div>
      </nav>
      <!---header--->
      <div class="container-fluid py-5 header">
        <div class="row  mx-3  justify-content-center">
          <div class="col-md-2 m-0 p-0">

               <div class="form-group">

                    <select class="" >
                      <option><i class="fas fa-map-marker-alt" style=""></i>Select City</option>
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                      <option>4</option>
                    </select>
                </div>
          </div>

          <div class="col-md-2 m-0 p-0">
            <div class="form-group">
            <input type="text" class="" placeholder="Any Area">
          </div>
        </div>
        <div class="col-md-4 m-0 p-0">
          <div class="form-group">
          <input type="text"  style=""class="" placeholder="Search by Business Name, Product Name or service">
        </div>
      </div>
      <div class="col-md-2 m-0 p-0 text-center">
        <div class="form-group">
          <button class="btn btn-dark">SEARCH</button>
        </div>
      </div>



        </div>
        <div class="row  mx-md-5 pt-md-5 px-md-5">
          <div class="col-md-10 my-5 my-sm-0 ">
           <b> <h1 style="color:white; font-size:60px; font-weight:bolder">Top 10 <br>
            Educational Institutes</h1><b>
          </div>

        </div>
        <div class="row  mx-md-5 px-md-5 ">
          <div class="col-md-5 my-sm-0 mt-3">
            <button class="btn bg-white ml-sm- py-2 px-3 ">View All<i class="fas fa-chevron-right mx-2 " style="color:#E87503"></i></button>
          </div>
      </div>
      <div class="row  mx-3  justify-content-center">
        <div class="col text-center">
          <div id="circle"><div><i class="fas fa-arrow-down" style="color: white"></i></div></div>
        </div>
      </div>

      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,106.7C96,149,192,235,288,229.3C384,224,480,128,576,85.3C672,43,768,53,864,74.7C960,96,1056,128,1152,128C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

      <div class="container">
          <div class="row justify-content-center">
            <p>  Once you've settled on a Business</p>
          </div>
          <div class="row justify-content-center">
              <h2>Explore Marketplace</h2>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-2  text-center">
                <img src="{{ asset('assets/icons/icons8-automotive-64.png') }}" class="icons m-4"/>
            <br>
            <h3>Automotive</h3>
            <small>browse this</small>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-cleaning-50.png') }}" class="icons m-4"/>
            <br>
            <h3>Cleaning</h3>
            <small>browse this</small>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-gym-64.png') }}" class="icons m-4"/>
            <br>
            <h3>Gym</h3>
            <small>browse this</small>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-movers-48.png') }}" class="icons m-4"/>
            <br>
            <h3>Movers</h3>
            <small>browse this</small>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-graph-64.png') }}" class="icons m-4"/>
            <br>
            <h3>Finance</h3>
            <small>browse this</small>
            </div>

          </div>
          <div class="row my-4 justify-content-between">
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-automotive-64.png') }}" class="icons m-4"/>
            <br>
            <h3>Automotive</h3>
            <small>browse this</small>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-cleaning-50.png') }}" class="icons m-4"/>
            <br>
            <h3>Cleaning</h3>
            <small>browse this</small>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-gym-64.png') }}" class="icons m-4"/>
            <br>
            <h3>Gym</h3>
            <small>browse this</small>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-movers-48.png') }}" class="icons m-4"/>
            <br>
            <h3>Movers</h3>
            <small>browse this</small>
            </div>
            <div class="col-md-2 text-center">
                <img src="{{ asset('assets/icons/icons8-graph-64.png') }}" class="icons m-4"/>
            <br>
            <h3>Finance</h3>
            <small>browse this</small>
            </div>

          </div>
          <div class="row  justify-content-center">
              <a href="#" class="btn my-5 px-4" id="seemore">See More<i class="fas fa-chevron-right mx-2 " style="color:#E87503"></i></a>
          </div>
      </div>
      <div class="container-fluid py-5   section-2">

           <div class="row  mx-5 px-5 justify-content-center">
               <div class="col-md-4 my-sm-5 my-md-5 text-center">
                <img src="{{ asset('assets/images/s2img1.jpg') }}" class="img"/>
               </div>
               <div class="col-md-4 my-sm-5 my-md-5 text-center">
                <img src="{{ asset('assets/images/s2img2.jpg') }}" class="img"/>
               </div>
               <div class="col-md-4  my-sm-5 my-md-5 text-center">
                <img src="{{ asset('assets/images/s3img3.jpg') }}" class="img"/>
               </div>
          </div>
      </div>
      <div class="container-fluid py-5  py-5 section-3">
       <div class="row my-4">
           <h3 class="col text-center ">Popular Promotions</h3>
       </div>
        <div class="row  mx-5 px-5  justify-content-center">
            <div class="col-md-3 my-sm-5">
             <img src="{{ asset('assets/images/s3img1.jpg') }}" class=" img"/>
             <h4 class="mt-2">Business Name and offer</h4>
             <h4 class="orange">Enjoy flat 40% off</h4>
            </div>
            <div class="col-md-3 my-sm-5">
             <img src="{{ asset('assets/images/s3img2.jpg') }}" class=" img"/>
             <h4 class="mt-2">Business Name and offer</h4>
             <h4 class="orange">Enjoy flat 40% off</h4>
            </div>
            <div class="col-md-3 my-sm-5 ">
             <img src="{{ asset('assets/images/s3imgs3.jpg') }}" class=" img"/>
             <h4 class="mt-2">Business Name and offer</h4>
             <h4 class="orange">Enjoy flat 40% off</h4>
            </div>
            <div class="col-md-3 my-sm-5 ">
                <img src="{{ asset('assets/images/s3img4.jpg') }}" class=" img"/>
                <h4 class="mt-2">Business Name and offer</h4>
                <h4 class="orange">Enjoy flat 40% off</h4>
            </div>
            <div class="col-md-4  my-5">
               <h1 >A clear process every step of the way</h1>
               <p class="my-3">Email us to get the documented process for listing
                Your business on the biggest bussiness directory platform
                Sahaa.me</p>
                <div class="input-group">
                <input type="email" class="form-control p-3"placeholder="Your Email">
                <div class="input-group-append">
                    <span class="input-group-text bg-white" id="basic-addon2"><i class="fas fa-paper-plane orange"></i></span>

                  </div>
                </div>
            </div>
            <div class="col-md-8"></div>
       </div>
   </div>
   <div class="container-fluid py-5  ">
    <div class="row  mx-5 px-5 justify-content-center ">
        <div class="col-md-5 text-center">
         <h1 >Why Business Trust Saaha</h1>
        <p>We've earned the trust of thousands of
            customers by featuring only the
            most reputable and high-quality businesses. Finding a perfect business on
            Sahaa.me is much easy with simple, accurate, and precise information that
            you can use right now to directly contact any business.</p>
        </div>
    </div>
    <div class="row mx-5 px-5">
			<div class="col-md-3 ">
				<div class="card mb-5 bg-white rounded text-center" style="background-color: white; margin-top: 15px; padding-bottom: 15px; padding-left: 15px; padding-right: 15px;">
					<div class="card-block ">
						<div class="orange-div ">
                         <div class="rounded-circle bg-light mx-2 " style="height: 120px;">
                          <img src="{{ asset('assets/Banner and Icons/Reviews@300x-8.png') }}" class=" mt-3 banner-img">
                          </div>
						</div>
						<div  class="card-title mt-2">
							<h3>
								<p style="height: 20px;">Verified Reviews</p>
								<p class="orange">1,00,000+</p>
							</h3>
						</div>
						<div class="card-text text-secondary">
						<p>	Find out about our verified reviews that
							have had a significant impact on our
							online roputaton. as we as what others
							have to say about our
							company's services.</p>
						</div>
					</div>
				</div>

	</div>
    <div class="col-md-3">
        <div class="card text-center"
            style="background-color: white; margin-top: 15px; padding-bottom: 15px; padding-left: 15px; padding-right: 15px;">
            <div class="card-block">
                <div class="orange-div">
                 <div class="rounded-circle bg-light mx-2 " style="height: 120px;">
                  <img src="{{ asset('assets/Banner and Icons/Catgories@300x-8.png') }}" class=" mt-3 banner-img">
                  </div>
                </div>
                <div  class="card-title mt-2">
                    <h3>
                        <p style="height: 20px;">Busines Category</p>
                        <p class="orange">300+</p>
                    </h3>
                </div>
                <div class="card-text text-secondary">
                <p>From our 300+ business categories to
                    choose from, it becomes extremely
                    simple for you to choose the right
                    Business for your requirements.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center"
            style="background-color: white; margin-top: 15px; padding-bottom: 15px; padding-left: 15px; padding-right: 15px;">
            <div class="card-block">
                <div class="orange-div">
                 <div class="rounded-circle bg-light mx-2 " style="height: 120px;">
                  <img src="{{ asset('assets/Banner and Icons/Free Marketing@300x-8.png') }}" class=" mt-3 banner-img">
                  </div>
                </div>
                <div  class="card-title mt-2">
                    <h3>
                        <p style="height: 20px;">Free Marketing</p>
                        <p class="orange">OPPURTUNITY</p>
                    </h3>
                </div>
                <div class="card-text text-secondary">
                <p>Free marketing services with an in-depth
                    analysis of your customers, competitors,
                    and campaigns to help you boost your sales.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center"
            style="background-color: white; margin-top: 15px; padding-bottom: 15px; padding-left: 15px; padding-right: 15px;">
            <div class="card-block">
                <div class="orange-div">
                 <div class="rounded-circle bg-light mx-2 " style="height: 120px;">
                  <img src="{{ asset('assets/Banner and Icons/Right Audiance@300x-8.png') }}" class=" mt-3 banner-img">
                  </div>
                </div>
                <div  class="card-title my-2  ">
                    <h3>
                        <p>Get to know the<br>right audience</p>
                    </h3>

                </div>
                <div class="card-text mt-4 text-secondary">
                <p>List your products and services on our
                    site to get maximum targeted customers
                    and increase your revenue.</p>
                </div>
            </div>
        </div>
    </div>
   </div>
   <div class="container-fluid mx-0 mt-3 benefits">
     <div class="row justify-content-center pt-5">
         <div class="col-sm-6 mt-5  text-light ">
             <h2> New User Benefit</h2>

                <p>Avail the offer as a new user and get a <br> free Coupon Gift or Allowance.</p>
         </div>
     </div>
     <div class="row justify-content-center border-box">
       <div class="col-md-3 text-center">
           <div class="bg-light rounded-top mt-3">
            <div style="opacity: 0.9;" type="button" class="left-btn btn btn-light btn-lg">
                <p style="display: inline;"><p style=" font-size: small; color: red; display: inline; font-weight: bold;">Free Gift</p><p style="font-size: small; color: red;">Choose your free gift</p></p>
            </div>
           </div>
       </div>
       <div class="col-md-3 text-center">
        <div class="bg-light rounded-top mt-3" style="opacity: 0.9;">
        <div style="" type="button" class="right-btn btn btn-light btn-lg">
			<p style="display: inline;"><p style="font-size: small; color: red; display: inline; font-weight: bold;">Allowance</p><p style="font-size: small; color: red;">Order over $10</p></p>
        </div>
        </div>
       </div>
     </div>
   </div>
   <div class="container-fluid py-5  footer">
    <hr>
    <div class="row  mx-lg-5 px-lg-5   ">
        <h3 class="">Popular Searches</h3>
    </div>
    <div class="row my-2 ml-md-4 justify-content-around ">
        <div class="col-md-2">
            <ul class="list-unstyled " >
                <li>
                  <a href="#!">Home Decor</a>
                </li>
                <li>
                  <a href="#!">Garden Decor</a>
                </li>
                <li>
                  <a href="#!">Gardening</a>
                </li>
                <li>
                  <a href="#!">Laundering</a>
                </li>
                <li>
                    <a>Hair stylist</a>

                </li>
                <li>
                    <a href="#!">New vendors</a>
                  </li>
                  <li>
                    <a href="#!">Constructors</a>
                  </li>
                  <li>
                    <a href="#!">House Agents</a>
                  </li>
                  <li>
                    <a href="#!">Gasfitters</a>
                  </li>
                  <li>
                    <a href="#!">Electrical Experts</a>
                  </li>
              </ul>


        </div>
        <div class="col-md-2">
            <ul class="list-unstyled " >
                <li>
                  <a href="#!">Home Decor</a>
                </li>
                <li>
                  <a href="#!">Garden Decor</a>
                </li>
                <li>
                  <a href="#!">Gardening</a>
                </li>
                <li>
                  <a href="#!">Laundering</a>
                </li>
                <li>
                    <a>Hair stylist</a>

                </li>
                <li>
                    <a href="#!">New vendors</a>
                  </li>
                  <li>
                    <a href="#!">Constructors</a>
                  </li>
                  <li>
                    <a href="#!">House Agents</a>
                  </li>
                  <li>
                    <a href="#!">Gasfitters</a>
                  </li>
                  <li>
                    <a href="#!">Electrical Experts</a>
                  </li>
              </ul>
        </div>
        <div class="col-md-2">
            <ul class="list-unstyled " >
                <li>
                  <a href="#!">Home Decor</a>
                </li>
                <li>
                  <a href="#!">Garden Decor</a>
                </li>
                <li>
                  <a href="#!">Gardening</a>
                </li>
                <li>
                  <a href="#!">Laundering</a>
                </li>
                <li>
                    <a>Hair stylist</a>

                </li>
                <li>
                    <a href="#!">New vendors</a>
                  </li>
                  <li>
                    <a href="#!">Constructors</a>
                  </li>
                  <li>
                    <a href="#!">House Agents</a>
                  </li>
                  <li>
                    <a href="#!">Gasfitters</a>
                  </li>
                  <li>
                    <a href="#!">Electrical Experts</a>
                  </li>
              </ul>
        </div>
        <div class="col-md-2 ">
            <ul class="list-unstyled " >
                <li>
                  <a href="#!">Home Decor</a>
                </li>
                <li>
                  <a href="#!">Garden Decor</a>
                </li>
                <li>
                  <a href="#!">Gardening</a>
                </li>
                <li>
                  <a href="#!">Laundering</a>
                </li>
                <li>
                    <a>Hair stylist</a>

                </li>
                <li>
                    <a href="#!">New vendors</a>
                  </li>
                  <li>
                    <a href="#!">Constructors</a>
                  </li>
                  <li>
                    <a href="#!">House Agents</a>
                  </li>
                  <li>
                    <a href="#!">Gasfitters</a>
                  </li>
                  <li>
                    <a href="#!">Electrical Experts</a>
                  </li>
              </ul>
        </div>

    </div>
    <hr>
   </div>
   <div class="container-fluid  footer">
    <div class="row  mx-md-5 px-md-5  ">
        <h3 class=" ">About Us</h3>
    </div>
     <div class="row  mx-md-5 px-md-5   ">
    <ul class="list-inline">
        <li class="list-inline-item  ">
          <a href="" class="">About Saaha.me</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
          <a href="" class="">Business Listings</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
          <a href="" class="">Help & Support</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
          <a href="" class="">Saaha App</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
            <a href="" class="">Saaha Blogs</a>
          </li>
          <li class="list-inline-item pl-2 border-left border-secondary">
            <a href="" class="">Saaha Reviews</a>
          </li>
      </ul>
   </div>
   <div class="row  mx-md-5 px-md-5   ">
    <h3 class=" ">Our Business and Services</h3>
    </div>
   <div class="row mx-md-5 px-md-5  ">
    <ul class="list-inline">
        <li class="list-inline-item  ">
          <a href="" class="">Digital Marketing</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
          <a href="" class="">Result Driven Servies</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
          <a href="" class="">Google Adds</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
          <a href="" class="">Social Media Adds</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
            <a href="" class="">SEO</a>
          </li>
          <li class="list-inline-item pl-2 border-left border-secondary">
            <a href="" class="">Websites</a>
          </li>
          <li class="list-inline-item pl-2 border-left border-secondary">
            <a href="" class="">Videos</a>
          </li>
          <li class="list-inline-item pl-2 border-left border-secondary">
            <a href="" class="">Free Digital Marketing</a>
          </li>
      </ul>
   </div>
   <div class="row mx-md-5 px-md-5   ">
    <h3 class=" ">News and Blogs</h3>
   </div>
   <div class="row  mx-md-5 px-md-5  ">
    <ul class="list-inline">
        <li class="list-inline-item  ">
          <a href="" class="">Latest News</i></a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
          <a href="" class="">Latest Blogs</a>
        </li>
        <li class="list-inline-item pl-2 border-left border-secondary">
          <a href="" class="">Service Blogs</a>
        </li>
      </ul>
      <small class="text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus fugit porro optio amet explicabo sequi nam voluptatibus, recusandae exercitationem aut aspernatur, quos quo deserunt repudiandae possimus debitis. Obcaecati, hic voluptates. Recusandae excepturi odit earum, asperiores et id nam odio perferendis, velit laborum molestiae numquam, blanditiis quidem est adipisci reprehenderit mollitia!</small>
   </div>


   </div>
   <nav class="navbar navbar-expand-lg">
    <div class="container-fluid mt-2  mx-md-4 ">
        <a class="navbar-brand ml-5 " style="display:inline-block;"href="#">
            <img src="{{ asset('assets/Logo/1x/logo iconmdpi.png') }}" class="ml-2 footer-logo" alt="..." height="50">
            <small class="ml-2 text-secondary">&copy; Saaha Limited 2021</small></a>
          <div class="d-flex justify-content-center">
            <ul class="list-inline mt-sm-3 mr-5">
                <li class="list-inline-item text-secondary " style="font-weight: normal;">
                  Share :
                </li>
                <li class="list-inline-item ">
                    <i class="fab fa-twitter orange"></i>
                </li>
                <li class="list-inline-item ">
                    <i class="fab fa-facebook orange"></i>
                </li>
                <li class="list-inline-item  ">
                    <i class="fab fa-instagram orange"></i>
                </li>
                <li class="list-inline-item  ">
                    <i class="fab fa-whatsapp orange"></i>
                </li>
              </ul>
          </div>
    </div>
  </nav>
    </body>

</html>
