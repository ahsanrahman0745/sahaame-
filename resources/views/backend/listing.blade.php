<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"><title>Sahaa</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" >


    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid  ">
                <a class="navbar-brand ml-5 " href="#">
                    <img src="{{ asset('assets/Logo/1x/full logomdpi.png') }}" class="ml-3" alt="..." height="50">
                  </a>
                  <div class="d-flex justify-content-center">
                    <div class="navbar-brand mr-5 " href="#">
                        Need Help? <br>
                       <a href="#"> Contact Us</a>
                    </div>
                  </div>
            </div>
          </nav>
          <hr style="height: 5px; background:orange; border:none"  class="my-0">
          <div class="container-fluid pt-4 content">
              <div class="row justify-content-center">
                  <div class="col-md-6">
                      <h3>Add your free business listing to Saaha.me</h3>
                  </div>
              </div>
              <div class="row mt-5 mx-5 justify-content-center">
                  <div class="col-md-4">
                      <h5>Grow your customers</h5>
                      <p>Add your business to the 3 million listings already available on Yell.com1, the UK's leading online business directory2.</p>
                  </div>
                  <div class="col-md-4">
                    <h5>Enhance your listing</h5>
                    <p>Update your FREE business profile page with photos, contact details, opening times, payment methods, customer reviews and more.</p>
                  </div>
                  <div class="col-md-4 ">
                      <h5>Be visible Online</h5>
                      <p>Get your business details distributed across the Yell network which includes Apple, Microsoft (Bing, Yahoo & AOL) and Amazon Alexa3.</p>
                  </div>
              </div>
              <form action="/listingstore" method="POST">
                  @csrf
              <div class="row mt-5 justify-content-center">
                <div class="form-group col-md-3">
                    <label >First Name</label>
                    <input type="text" name="first_name" required class="form-control"  >
                  </div>
                  <div class="form-group col-md-3">
                    <label >Last Name</label>
                    <input type="text" name="last_name" required  class="form-control"  >
                  </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group col-md-6">
                    <label >Business Name</label>
                    <input type="text" name="business_name" required  class="form-control"  >
                  </div>
              </div>
              <div class="row  justify-content-center">
                <div class="form-group col-md-3">
                    <label >Post Code</label>
                    <input type="number" name="postal_code" required class="form-control"  >
                  </div>
                  <div class="form-group col-md-3">
                    <label >Business Phone Number</label>
                    <input type="number" name="number" required class="form-control"  >
                  </div>
              </div>
              <div class="row justify-content-center">
                <div class="form-group col-md-6">
                    <label >Business Email</label>
                    <input type="email" name="b_email" class="form-control"  >
                    <p class="my-3"  required style="font-size: 15px;">By populating these fields you are: i) consenting for this information to be published; and ii) sharing your contact details with Yell Limited. We may contact you in accordance with our <a href="#" style="color:orange;">Privacy Policy.</a></p>
                  </div>
              </div>
              <div class="row justify-content-center">
                  <div class="form-group text-center col-md-6">
                    <button type ="submit" class="btn px-5 text-light" style="background: orange;">Continue</button>
                  </div>
              </div>
              </form>

          </div>
          <hr>
          <div class="container-fluid mt-4  footer">
            <div class="row  mx-5 px-5  ">
                <h3 class=" ">About Us</h3>
            </div>
             <div class="row  mx-5 px-5  ">
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
           <div class="row  mx-5 px-5  ">
            <h3 class=" ">Our Business and Services</h3>
            </div>
           <div class="row  mx-5 px-5  ">
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
           <div class="row  mx-5 px-5  ">
            <h3 class=" ">News and Blogs</h3>
           </div>
           <div class="row  mx-5 px-5  ">
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

           <hr>
           </div>
           <nav class="navbar navbar-expand-lg">
            <div class="container-fluid mt-2 mx-4 ">
                <a class="navbar-brand ml-5 " style="display:inline-block;"href="#">
                    <img src="{{ asset('assets/Logo/1x/logo iconmdpi.png') }}" class="ml-2 footer-logo" alt="..." height="50">
                    <small class="ml-2 text-secondary">&copy; Saaha Limited 2021</small></a>
                  <div class="d-flex justify-content-center">
                    <ul class="list-inline mr-5">
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
