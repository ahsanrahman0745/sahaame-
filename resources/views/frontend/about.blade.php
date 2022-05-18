@extends('frontend.front.main')
<head>
   <title>{{$page_name}} | Sahaa.me</title>
   <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
      height: 400px;
      /* The height is 400 pixels */
      width: 100%;
      /* The width is the width of the web page */
      }
   </style>
   <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.036 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
   </script>
   <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CT19N7GEB1');
    </script>
</head>
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
   button.icon {
   padding-left:20px;
   background-repeat: no-repeat;
   background-position-y: 1px;
   background-image: url('{{('frontend/assets/images/pic/pic168.PNG')}}');
   }
   .icon {
   padding-left: 25px;
   padding-right: 45px;
   background: url('{{('frontend/assets/images/pic/pic170.PNG')}}') no-repeat left;
   background-size: 40px;
   }
   .icon2 {
   padding-left: 25px;
   padding-right: 45px;
   background: url('{{('frontend/assets/images/pic/pic170.PNG')}}') no-repeat left;
   background-size: 40px;
   }
</style>
@section('container')
@include('frontend/include.search-section')
<br><br>
<div class="container">
   <div class="row">
   	@include('frontend/include.side-bar-nav')
      <div class="col-lg-9 col-md-9 col-sm-12 mobile-order-01 mobile-margin-bottom" style="">
         <div class="container" style="height: 100%;background-color: #f2f2f0;">
            <div class="row" style="background-color: #f2f2f0;margin-left: 20px">
               <div class="col-lg-12 ">
                  <br>
                  <h2 style="color: #e97d12" class='custom-flex'> <span class="custom-bar"></span><b>About Sahaa.me</b></h2>
                  <br>
                  <p style="font-size: 18px;color: black">
                     <a href="" style="color:blue">SAHAA.ME</a> is the UAE’s leading online business directory. Our website was launched in the UAE in 2022 by the publishers of the Yellow Pages directory. And from now we start puting the names, addresses, telephone numbers and other useful details at your fingertips.<br><br>
                     Search over 3,000 classifications for companies matching the type of business you need, or find the right business near you by searching for a company name. Our service covers the whole of the UAE <br><br>
                     Find out more about Sahaa Limited and meet our senior management team on our<a href="" style="color: blue"> Sahaa Business site</a>.
                     <br><br>
                     <b style="color: #e97d12">I’d like to find out more about advertising with SAHAA</b>
                     <br><br>
                     We've been connecting buyers and sellers at Sahaa.me. We provide a broad range of digital marketing services to companies of all kinds, large and small. Learn more about <a href="" style="color: blue">Local Business Listing</a>, <a href="" style="color: blue">social media advertising</a>, <a href="" style="color: blue">website design</a>, <a href="" style="color: blue">blog posting</a>, and other services for your business at <a href="" style="color: blue">Digital Marketing</a>, or give us a call.
                  </p>
                  <br><br><br><br>
                  <div class="container">
                     <div class="row" style=";float: right;display: flex; justify-content: space-between;margin-bottom: 0;right: 0">
                        <div class="col-lg-6 col-sm-12">
                           Did you find this artical helpful <br><br>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6">
                           <button class="btn" style="background-color: white;border: 1px solid black;padding-left: 30px;padding-right: 30px;display: flex;margin-top: -10px;height: 50px">
                              <img class="d-block " src="{{('frontend/assets/images/pic/pic169.PNG')}}"  height="" alt="Second slide" style=""></p> 
                              <p style="padding-top: 4px;">YES</p>
                           </button>
                           <br>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-6">
                           <button class="btn" style="background-color: white;border: 1px solid black;padding-left: 30px;padding-right: 30px;display: flex; justify-content: space-between;;margin-top: -10px;height: 50px">
                              <img class="d-block " src="{{('frontend/assets/images/pic/pic171.PNG')}}"  height="" alt="Second slide" style=""></p> 
                              <p style="padding-top: 4px;">NO</p>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
