<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sahaa</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css">

    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --bg-opacity: 1;
        background-color: #fff;
        background-color: rgba(255, 255, 255, var(--bg-opacity))
    }

    .bg-gray-100 {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity))
    }

    .border-gray-200 {
        --border-opacity: 1;
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --text-opacity: 1;
        color: #edf2f7;
        color: rgba(237, 242, 247, var(--text-opacity))
    }

    .text-gray-300 {
        --text-opacity: 1;
        color: #e2e8f0;
        color: rgba(226, 232, 240, var(--text-opacity))
    }

    .text-gray-400 {
        --text-opacity: 1;
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--text-opacity))
    }

    .text-gray-500 {
        --text-opacity: 1;
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--text-opacity))
    }

    .text-gray-600 {
        --text-opacity: 1;
        color: #718096;
        color: rgba(113, 128, 150, var(--text-opacity))
    }

    .text-gray-700 {
        --text-opacity: 1;
        color: #4a5568;
        color: rgba(74, 85, 104, var(--text-opacity))
    }

    .text-gray-900 {
        --text-opacity: 1;
        color: #1a202c;
        color: rgba(26, 32, 44, var(--text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --bg-opacity: 1;
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--bg-opacity))
        }

        .dark\:bg-gray-900 {
            --bg-opacity: 1;
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--bg-opacity))
        }

        .dark\:border-gray-700 {
            --border-opacity: 1;
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--border-opacity))
        }

        .dark\:text-white {
            --text-opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255, var(--text-opacity))
        }

        .dark\:text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: #6b7280;
            color: rgba(107, 114, 128, var(--tw-text-opacity))
        }
    }
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
                        <a class="nav-link" style="color:#E87503" href="#"><i
                                class="fas fa-phone-alt mr-2"></i>info@sahaa.me</a>
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

    <hr style="height: 5px; background: orange; border: none; user-select: auto;" class="my-0">



    {{-- start body --}}



    <div class="container">


        <div class="row">
            <div class="container float-left url_search_details">

                <div>
                    <p> <span class="url_search_friendly"> Home › Restaurants › Dubai › </span>Restaurants near Dubai
                    </p>


                    <p> <span class="bold_text">Restaurants</span> near <span class="bold_text">Dubai</span>
                        <br>
                        Did you mean a company called <span class="url_search_friendly">"Restaurants"?</span>
                    </p>


                </div>



            </div>

            <div class="container float-right dropdown_leftblock">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>



        </div>


        <div class="row container">


            <div class="container row line_sliver"></div>

            <div class="container row related_search">
                Related Searches: &nabla;
                <a href="#"><span class="border related_search_border">Top Restaurant</span></a>
                <a href="#"><span class="border related_search_border">Restaurant</span></a>
                <a href="#"><span class="border related_search_border">Restaurant near me</span></a>
                <a href="#"><span class="border related_search_border">Restaurant in Dubai</span></a>
                <a href="#"><span class="border related_search_border">Top Restaurant</span></a>
                <a href="#"><span class="border related_search_border">Restaurant</span></a>

            </div>

            <div class="container related_search" style="background: #E87503; ">
                <div class="container float-left" style="background: #9c744b;width: 27%;  margin-left: -15px;">



                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1081.0372401044258!2d73.14693753855195!3d33.52366568681487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfed5d8c9eb015%3A0x1964c3c5dafe3d97!2sMattanys%20pizza%20%26%20more!5e0!3m2!1sen!2s!4v1638701988915!5m2!1sen!2s"
                        width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                    <div class="container">


                        <i class="bi bi-menu-button-wide-fill">Filter results</i>

                        <div class="row filters--title">

                            <a href="#">Category</a>




                        </div>

                    </div>



                </div>
                <div class="float-right" style="background: #5f3ac7; width: 73% ">


                    <div class="float-left" style="background: #97918b; width:74%">

                        <div class="float-left" style="background: #8b9793; width:25%">

                            <img src="assets/images/Capture.png" style="width: 100%" />
                            <img src="assets/images/Capture.png" style="width: 100%" />


                        </div>
                        <div class="float-right" style="background: #8b9793; width:75%; padding:5px">

                            <h6>The Calabash Restaurant & Bar</h6>
                            <p>aste is abouve all things | <span style="color: #4482df">Restaurants</span> </p>


                            <button type="button" style="background-color: #e87503 !important;
                    border-color: #e87503 !important;"><i class="fa fa-whatsapp"> Secondary</button>
                            <button type="button" style="background-color: #e87503 !important;
                    border-color: #e87503 !important;">Secondary</button>
                            <button type="button" style="background-color: #e87503 !important;
                    border-color: #e87503 !important;">Secondary</button>






                        </div>






                    </div>

                    <img class="float-right" style="    width: 28%;
                margin-right: -15px;" src="assets/images/Capture2.png" />
                </div>




            </div>



            dbasdbh hasbdh djasdj jasdhasdb jadasd ajjdnjajksd
        </div>

        acontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc
        ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc
        ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc
        ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc
        ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainersacontainerc ontainers

    </div>



    </div>




    {{-- <div class="container pt-3 url_filter" >


        <div class="col-6 float-left">
            <p> <span class="url_search_friendly"> Home › Restaurants › Dubai › </span>Restaurants near Dubai</p>


            <p> <span class="bold_text">Restaurants</span> near <span class="bold_text">Dubai</span>
              <br>
                Did you mean a company called <span class="url_search_friendly">"Restaurants"?</span>
              </p>


          </div>

          <div class="col-3 float-right" >
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>


          </div>

          <div class="row" style="backgroun: rgb(182, 35, 35); height: 128px;
          user-select: auto;
          margin-top: 100px;"></div>





      </div>
 --}}


    {{-- end body $ --}}









    {{--

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
                <img src="{{ asset('assets/Logo/1x/logo iconmdpi.png') }}" class="ml-2 footer-logo" alt="..."
    height="50">
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
    </div> --}}
    </nav>
</body>





<script>
function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(51.508742, -0.120850),
        zoom: 5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXwRF4P6Y92KV2N3F_G9zreuKL49BRyyE&callback=myMap">
</script>

</html>
