<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
<head>
   <style>
      * {
      margin: 0;
      padding: 0;
      transition: all .4s ease;
      font-family :'Roboto', sans-serif;
      }
      * {
      margin: 0;
      padding: 0;
      transition: all .4s ease;
      }
      html {
      scroll-behavior: smooth;
      }
      a {
      text-decoration: none;
      color: #002661;
      }
      a:hover {
      color: #e87526;
      text-decoration: none;
      }
      ul {
      list-style: none;
      margin: 0;
      }
      .color-orange {color: #e87526 !important;}
      .color-gray {color: #595959;}
      .color-blue {color: #57afdd;}
      .all-searchs-main-single-search {
    background: #f7f7f7;
}
      .all-searchs-main-single-search-main {
      display: flex;
      }
      .single-search-main-user-div {
    width: 25%;
    flex: 0 0 25%;
    /* margin-right: 15px; */
    height: 410px;
}
.single-search-main-info-div {
    width: 45%;
    flex: 0 0 45%;
    padding: 10px;
    padding-bottom: 0px;
}
      .single-search-main-sale-div {
      width: 30%;
      flex: 0 0 30%;
      }
      .single-search-main-restaurant-image-main img {
      width: 100%;
      height: 155px;
      object-fit: cover;
      }
      .single-search-main-user-review-userimage-inner img {
      display: block;
      width: 60px;
      margin: auto;
      border-radius: 100%;
      height: 60px;
      object-fit: cover;
      border: 5px solid #f7f7f7;
      }
      .single-search-main-user-review {
    background: #fbeede;
    padding: 15px;
    min-height: 200px;
}
      .ranking-stars-inner .rank-text {
      font-size: 10px;
      color: #b1aeae;
      }
      .single-search-main-user-review.has-icon {
      }
      .ranking-stars {
    width: 100%;
    margin-bottom: 7px;
}
      .ranking-stars-outer {
      width: 100%;
      text-align: center;
      }
      .ranking-stars-inner {
      display: inline-block;
      padding: 6px 30px;
      border-radius: 50px;
      background: #fff;
      padding-top: 2px;
      box-shadow: 0px 3px 15px 1px #f5e5d2;
      }
      .ranking-stars-main img {
      width: 20px;
      }
      .controller-arrow-left {
      position: absolute;
      left: -15px;
      cursor: pointer;
      top: 50%;
      }
      .single-search-main-user-review-slider {
    /* position: relative; */
    width: 100%;
    height: 142px;
}
      .controller-arrow-right {
      position: absolute;
      right: -15px;
      cursor: pointer;
      top: 50%;
      }
      .controller-arrow {
      font-size: 11px;
      }
      .single-search-main-user-review-all-slides {
      }
      .single-search-main-user-review-text-inner {
      font-size: 10px;
      margin-top: 10px;
      }
      .single-search-main-user-review-rating-main {
    display: flex;
    align-items: center;
    font-size: 12px;
    margin-top: 8px;
}
      .single-search-main-user-review-rating-main {
      display: flex;
      align-items: center;
      font-size: 12px;
      margin-top: 8px;
      }
      .single-search-main-user-review-rating-stars {
      color: #e87526;
      }
      .single-search-main-user-review-rating-text{
      margin-right:10px;
      }
      .single-search-main-user-review-rating-text .rating {
      font-weight: 600;
      }
      .single-search-main-sale-div-img img {
    width: 100%;
    height: 410px;
    object-fit: cover;
}
      .single-search-main-sale-div-img {
      margin: -15px 0;
      }
      .single-search-main-info-title {
      font-size: 19px;
      font-weight: 500;
      margin-bottom: 15px;
      text-transform: capitalize;
      }
      .single-search-main-info-title.has-icon {
    /* padding-right: 67px; */
    /* position: relative; */
    display: flex;
    justify-content: space-between;
}
      .address-text-hidden .address-div-text .dots {
      display: none;
      position: absolute;
      top: 0;
      right: 0px;
      }
      .verified-icon-main img {
      width: 65px;
      }
      .single-search-main-info-cate-title {
      font-size: 11px;
      display: flex;
      }
      .side-devider {
      margin: 0 10px;
      }
      .single-search-main-info-left-side-text {
      color: #a9a6a6;
      }
      .single-search-main-info-cate-title {
    font-size: 13px;
    display: flex;
    margin-bottom: 25px;
}
      .all-share-buttons-inner {
      margin-bottom: 15px;
      }
      .address-div-inner {
    font-size: 12px;
    display: flex;
    font-weight: 600;
    margin-bottom: 19px;
}
      .address-div {
      margin-bottom: 15px;
      }
      .all-category-li {
    font-size: 13px;
    width: 49%;
    flex: 0 0 49%;
    margin-bottom: 13px;
}
      .all-category-ul {
      list-style: disc;
      display: flex;
      flex-wrap: wrap;
      margin-left: 16px;
      flex-direction: row;
      }
      .all-question-div-inner {
      display: flex;
      font-size: 10px;
      justify-content: space-between;
      padding: 10px 15px;
      background: #fbeede;
      }
      .all-question-div-outer {
    /* margin-right: 10px; */
    border-top: 2px solid #e87526;
    margin-top: 5px;
}
      .all-share-buttons-inner.share-options {
      display: flex;
      margin-right: 15px;
      }
      .all-share-buttons-inner.share-options a {
      margin: 0 10px;
      }
      .all-share-buttons-inner.share-options .icon-text {
      font-size: 9px;
      text-align: center;
      padding-top: 5px;
      }
      .all-share-buttons-inner.share-options img {
      width: 25px;
      display: block;
      margin: auto;
      }
      .single-search-main-user-review-text a {
      color: #57afdd;
      }
      .show-on-mobile {
      display: none;
      }
      .contact-options-main img {
      width: 30px;
      display: block;
      padding: 5px;
      }
      .contact-options-main {
      display: flex;
      align-items: center;
      }
      .card-bottom-options-main {
      display: flex;
      align-items: center;
      }
      .more-info-button {
      margin-right: 15px;
      }
      .card-bottom-options {
      margin-bottom: 15px;
      margin-top: 10px;
      }
      .more-info-button-inner {
      cursor: pointer;
      padding: 4px 15px;
      font-size: 12px;
      border: 1px solid #e87503;
      border-top: 2px solid #e87503;
      }

      /* Custom CSS */

      body {
        background: #fbeede;
    }

    .listing-outer-most-outer {
    max-width: 850px;
    margin: auto;
    margin-top: 50px;
    background: #fff;
    padding: 30px;
    margin-bottom: 50px;
    border-radius: 5px;
}
.all-searchs-main-all-search-inner.single-listings {
    /* height: 390px; */
    overflow: hidden;
    margin-bottom: 50px;
}

.all-category-div {
    margin-bottom: 15px;
}

.single-search-main-info-div-main {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
}

.single-search-main-info-div-inner {
    height: 100%;
}

.single-search-main-info-div-outer {
    height: 100%;
}

.top-logo {
    margin-bottom: 50px;
}

.top-logo img {
    width: 170px;
    margin: auto;
    display: block;
}

.email-top-text {
    margin-bottom: 35px;
    font-size: 14px;
    line-height: 30px;
    color: #2e2e2e;
}

p.bold {
    font-size: 20px;
    text-align: center;
}

.single-search-main-user-review-rating-stars {
    display: flex;
    width: 100px;
    margin-right: 10px;
}

.single-search-main-user-review-rating-stars img{
    width: 20px;
}


.email-bottom-text {
    color: #2e2e2e;
}

.email-top-text {
    margin-bottom: 35px;
    font-size: 14px;
    line-height: 30px;
    color: #2e2e2e;
}

















      /* Site Responsiveness */
      @media only screen and (max-width: 990px){
      .single-search-main-sale-div {
      /* display: none; */
      }
      .single-search-main-info-div {
      width: 70%;
      flex: 0 0 45%;
      }
      .single-search-main-user-div {
      /* display: none; */
      }
      }
      @media only screen and (max-width: 768px){
      /* .mobile-menu-container {
      display: block;
      } */
      /* .single-search-main-user-div {
      display: none;
      } */
      /* .single-search-main-info-div {
      width: 70%;
      flex: 0 0 70%;
      } */
      .single-search-main-sale-div {
      display: none;
      }
      .single-search-main-info-div {
      width: 100%;
      flex: 0 0 100%;
      }
      /* .footer-about-main-links-button {
      display: none;
      } */
      .single-search-main-info-div {
      width: 69%;
      flex: 0 0 69%;
      }
      .single-search-main-user-div {
    width: 30%;
    flex: 0 0 30%;
    display: block;
    padding-right: 15px;
    margin-right: 0px;
    height: 270px;
}

.single-search-main-restaurant-image-main img {
    width: 100%;
    height: 210px;
    object-fit: cover;
}
      .single-search-main-user-review-outer {
      display: none;
      }
      .single-search-main-restaurant-image {
      width: 100%;
      height: 80%;
      }
      .single-search-main-user-div-inner {
      height: 100%;
      }
      .single-search-main-user-div-main {
      height: 100%;
      }
      .single-search-main-restaurant-image-main {
      height: 100%;
      }
      .single-search-main-user-review.has-icon {
      padding-top: 10px;
      }
      .single-search-main-user-review {
      background: #fbeede;
      padding: 15px;
      }
      .ranking-stars-inner {
      display: inline-block;
      padding: 2px 18px;
      border-radius: 10px;
      }
      .ranking-stars-main img {
      width: 15px;
      }
      .ranking-stars-inner .rank-text {
      font-size: 9px;
      padding-top: 3px;
      }
      .verified-icon {
      position: absolute;
      right: 20px;
      top: 0;
      }
      .single-search-main-info-title.has-icon {
      padding-right: 85px;
      position: relative;
      }
      .all-share-buttons {
      display: none;
      }
      .all-category-div {
      display: none;
      }
      .all-question-div {
      display: none;
      }
      .show-on-mobile {
      display: block;
      }
      }
      @media only screen and (max-width: 615px){
      }
      @media only screen and (max-width: 455px){
      .single-search-main-info-cate-title {
      flex-direction: column;
      }
      .single-search-main-info-cate-title .side-devider {
      display: none;
      }
      .single-search-main-user-review-rating-main {
      display: flex;
      align-items: flex-start;
      font-size: 12px;
      margin-top: 8px;
      }
      .single-search-main-info-title {
      font-size: 13px;
      font-weight: 700;
      margin-bottom: 15px;
      text-transform: capitalize;
      }
      .address-text-hidden .address-div-text {
      overflow: hidden;
      height: 13px;
      padding: 0px 8px 0 0;
      position: relative;
      text-overflow: ellipsis;
      word-break: break-all;
      }
      .address-text-hidden .address-div-text .dots{
      display: block;
      }
      .ranking-stars-inner .rank-text {
      display: none;
      }
      .ranking-stars-inner {
      padding: 6px 18px;
      }
      .ranking-stars-main img {
      width: 10px;
      }
      .card-bottom-options-main {
      display: flex;
      align-items: flex-start;
      }
      .more-info-button {
      margin-right: 0;
      text-align: center;
      order: 0;
      margin-top: 0px;
      }
      .more-info-button-inner {
      cursor: pointer;
      padding: 4px 4px;
      font-size: 11px;
      }
      .more-info-button {
      margin-right: 0;
      width: 35%;
      flex: 0 0 35%;
      text-align: center;
      order: 0;
      margin-top: 10px;
      }
      .contact-options-main img {
      width: 35px;
      display: block;
      padding: 7px;
      }
      .contact-options {
      margin-top: 5px;
      }
      .single-search-main-info-right-side-text {
      width: 100%;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      }
      .address-div-inner {
      font-size: 10px;
      display: flex;
      /* font-weight: 600; */
      }
      }
   </style>
   <title>
      Sahaa.me
   </title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
   <div class="listing-outer-most-outer">
       <div class="top-logo">
        <img src="https://sahaa.me/business/assets/images/logo/logo.png">
       </div>
       <div class="email-top-text">
        <p class='bold'>Hi, my name is Muhammad & I'm a Marketing executive in Sahaa.</p>

        <p>
        <b>Introduction about Sahaa:</b><br>
        Sahaa.me is the U.A.E is leading Media & Marketing Company. Our website launched in U.A.E in 2022. Our services are Marketing, Branding, Business Directory, and development (website, software & applications).
        </p>

        <p>
        <b>Purpose of Email:</b><br>
        I have listed your business on Sahaa, where you get more and more customers. For this, I need to verify your contact & services details.
        </p>
       </div>
      <div class="all-searchs-main-all-search-inner single-listings">
         <div class="all-searchs-main-single-search">
            <div class="all-searchs-main-single-search-outer">
               <div class="all-searchs-main-single-search-inner">
                  <div class="all-searchs-main-single-search-main">
                     <div class="single-search-main-user-div">
                        <div class="single-search-main-user-div-inner">
                           <div class="single-search-main-user-div-main">
                              <div class="single-search-main-restaurant-image">
                                 <div class="single-search-main-restaurant-image-main">
                                    <?php $logo_file = public_path(). "/business/listings/logo/".$business->logo; ?>
                                    @if ($business->logo != "" && file_exists($logo_file))
                                    <img src="https://sahaa.me/business/listings/logo/{{$business->logo}}">
                                    @else
                                    <img src="https://sahaa.me/business/assets/images/default/logo.jpg">
                                    @endif
                                 </div>
                              </div>
                              <div class="single-search-main-user-review <?php echo ($business->ranking_stars > 0) ? 'has-icon' : '' ;?>">
                                 @if($business->ranking_stars > 0)
                                 <div class="ranking-stars">
                                    <div class="ranking-stars-outer">
                                       <div class="ranking-stars-inner">
                                          <div class="ranking-stars-main">
                                             @for($i=1; $i<=$business->ranking_stars; $i++)
                                             @if($business->ranking_stars == 3 && $i==2)
                                             <img src="https://sahaa.me/business/assets/images/icons/star.png" style='transform:scale(1.6)' alt="">
                                             @else
                                             <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                             @endif
                                             @endfor
                                          </div>
                                          <div class="rank-text">
                                             Supplier rank
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endif
                                 <div class="single-search-main-user-review-outer">
                                    <div class="single-search-main-user-review-inner">
                                       <div class="single-search-main-user-review-slider">
                                          <div class="controller-arrow-left">
                                             <span class="controller-arrow">
                                             <span class="ti-angle-left"></span>
                                             </span>
                                          </div>
                                          <div class="single-search-main-user-review-all-slides">
                                             <div class="single-search-main-user-review-single-slide">
                                                <div class="single-search-main-user-review-user-image">
                                                   <div class="single-search-main-user-review-userimage-inner">
                                                      <img src="https://sahaa.me/business/assets/images/home/image-003.jpg" alt="" class="lazy-loading" data-src="https://sahaa.me/business/assets/images/home/image-003.jpg')}}">
                                                   </div>
                                                </div>
                                                <div class="single-search-main-user-review-user-text">
                                                   <div class="single-search-main-user-review-text-inner">
                                                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem minus esse, quos iure voluptas eum voluptates.
                                                   </div>
                                                </div>
                                                <div class="single-search-main-user-review-rateing">
                                                   <div class="single-search-main-user-review-rating-inner">
                                                      <div class="single-search-main-user-review-rating-main">
                                                         <div class="single-search-main-user-review-rating-stars">
                                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                                         </div>
                                                         <div class="single-search-main-user-review-rating-text">
                                                            <span class="rating">5.0</span> <span class="total-review">(13)</span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="controller-arrow-right">
                                             <span class="controller-arrow">
                                             <span class="ti-angle-right"></span>
                                             </span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="single-search-main-info-div">
                        <div class="single-search-main-info-div-outer">
                           <div class="single-search-main-info-div-inner">
                              <div class="single-search-main-info-div-main">
                                 <div class="single-search-main-info-title <?php echo ($business->verified != 0) ? 'has-icon' : '' ;?>">
                                    <?php echo $business->name; ?>
                                    @if($business->verified != 0)
                                    <div class="verified-icon">
                                       <div class="verified-icon-outer">
                                          <div class="verified-icon-inner">
                                             <div class="verified-icon-main">
                                                <img src="https://sahaa.me/business/assets/images/icons/verified.png" alt="">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endif
                                 </div>
                                 <div class="single-search-main-info-cate-title">
                                    <div class="single-search-main-info-left-side-text">
                                       <?php echo $business->short_desc; ?>
                                    </div>
                                    <span class='side-devider'>|</span>
                                    <div class="single-search-main-info-right-side-text color-blue">
                                       <?php  echo $business->sub_category_text; ?>
                                    </div>
                                 </div>
                                 <div class="all-share-buttons">
                                    <div class="all-share-buttons-inner share-options">
                                       @if($business->phone != '')
                                       <a href="tel:{{$business->phone}}">
                                          <div class="icon-image">
                                             <img src="https://sahaa.me/business/assets/images/icons/phone.png">
                                          </div>
                                          <div class="icon-text">
                                             Call us
                                          </div>
                                       </a>
                                       @endif
                                       @if($business->whatsapp != '')
                                       <a href="https://wa.me/{{$business->whatsapp}}">
                                          <div class="icon-image">
                                             <img src="https://sahaa.me/business/assets/images/icons/whatsapp.png">
                                          </div>
                                          <div class="icon-text">
                                             Whatsapp us
                                          </div>
                                       </a>
                                       @endif
                                       @if($business->email != '')
                                       <a href="mailto:{{$business->email}}">
                                          <div class="icon-image">
                                             <img src="https://sahaa.me/business/assets/images/icons/gmail.png">
                                          </div>
                                          <div class="icon-text">
                                             Email us
                                          </div>
                                       </a>
                                       @endif
                                       @if($business->phone_text != '')
                                       <a href="http://m.me/{{$business->phone_text}}">
                                          <div class="icon-image">
                                             <img src="https://sahaa.me/business/assets/images/icons/messenger.png">
                                          </div>
                                          <div class="icon-text">
                                             Messenger us
                                          </div>
                                       </a>
                                       @endif
                                    </div>
                                 </div>
                                 <div class="address-div">
                                    <div class="address-div-outer">
                                       <div class="address-div-inner address-text-hidden">
                                          <div class="address-div-icon color-gray">
                                             <span class="ti-location-pin"></span>
                                          </div>
                                          <div class="address-div-text color-blue">
                                             <?php if($business->floor !='') { echo $business->floor; } ; ?>
                                             <?php if($business->office !='') { echo ", ".$business->office; } ; ?>
                                             <?php if($business->buildingname !='') { echo ", ".$business->buildingname; } ; ?>
                                             <?php if($business->streetname !='') { echo ", ".$business->streetname; } ; ?>
                                             <?php if($business->city_text !='') { echo ", ".$business->city_text; } ; ?>
                                             <?php if($business->state_text !='') { echo ", ".$business->state_text; } ; ?>
                                             <?php if($business->country !='') { echo ", ".$business->country; } ; ?>
                                             <span class='dots'>...</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="address-div">
                                    <div class="address-div-outer">
                                       <div class="address-div-inner">
                                          <div class="address-div-icon color-gray">
                                             <span class="ti-time"></span>
                                          </div>
                                          <div class="address-div-deistance color-blue">
                                             <span class="color-orange">Opens</span> <span class="color-gray"><?php  echo $business->mon_open_time; ?></span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="single-search-main-user-review-rateing show-on-mobile">
                                    <div class="single-search-main-user-review-rating-inner">
                                       <div class="single-search-main-user-review-rating-main">
                                          <div class="single-search-main-user-review-rating-stars">
                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                            <img src="https://sahaa.me/business/assets/images/icons/star.png" alt="">
                                          </div>
                                          <div class="single-search-main-user-review-rating-text">
                                             <span class="rating">5.0</span> <span class="total-review">(13)</span>
                                          </div>
                                          <div class="single-search-main-user-review-text">
                                             <a href="#">Give us Review</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card-bottom-options show-on-mobile">
                                    <div class="card-bottom-options-outer">
                                       <div class="card-bottom-options-inner">
                                          <div class="card-bottom-options-main">
                                             <div class="more-info-button">
                                                <div class="more-info-button-outer">
                                                   <div class="more-info-button-inner">
                                                      <span class="text">More Info</span>
                                                      <span class="icon"><span class="ti-angle-right"></span></span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="contact-options">
                                                <div class="contact-options-outer">
                                                   <div class="contact-options-inner">
                                                      <div class="contact-options-main">
                                                         @if($business->phone != '')
                                                         <a href="tel:{{$business->phone}}">
                                                            <div class="icon-image">
                                                               <img src="https://sahaa.me/business/assets/images/icons/phone.png">
                                                            </div>
                                                         </a>
                                                         @endif
                                                         @if($business->whatsapp != '')
                                                         <a href="https://wa.me/{{$business->whatsapp}}">
                                                            <div class="icon-image">
                                                               <img src="https://sahaa.me/business/assets/images/icons/whatsapp.png">
                                                            </div>
                                                         </a>
                                                         @endif
                                                         @if($business->email != '')
                                                         <a href="mailto:{{$business->email}}">
                                                            <div class="icon-image">
                                                               <img src="https://sahaa.me/business/assets/images/icons/gmail.png">
                                                            </div>
                                                         </a>
                                                         @endif
                                                         @if($business->phone_text != '')
                                                         <a href="http://m.me/{{$business->phone_text}}">
                                                            <div class="icon-image">
                                                               <img src="https://sahaa.me/business/assets/images/icons/messenger.png">
                                                            </div>
                                                         </a>
                                                         @endif
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="all-category-div">
                                    <div class="all-category-div-inner">
                                       <ul class="all-category-ul">
                                          @if($business->stitle_1 != '')
                                          <li class="all-category-li">
                                             <span class="color-gray"><?php  echo $business->stitle_1; ?></span>
                                          </li>
                                          @endif
                                          @if($business->stitle_2 != '')
                                          <li class="all-category-li">
                                             <span class="color-gray"><?php  echo $business->stitle_2; ?></span>
                                          </li>
                                          @endif
                                          @if($business->stitle_3 != '')
                                          <li class="all-category-li">
                                             <span class="color-gray"><?php  echo $business->stitle_3; ?></span>
                                          </li>
                                          @endif
                                          @if($business->stitle_4 != '')
                                          <li class="all-category-li">
                                             <span class="color-gray"><?php  echo $business->stitle_4; ?></span>
                                          </li>
                                          @endif
                                          @if($business->stitle_5 != '')
                                          <li class="all-category-li">
                                             <span class="color-gray"><?php  echo $business->stitle_5; ?></span>
                                          </li>
                                          @endif
                                          @if($business->stitle_6 != '')
                                          <li class="all-category-li">
                                             <span class="color-gray"><?php  echo $business->stitle_6; ?></span>
                                          </li>
                                          @endif
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="all-question-div">
                                    <div class="all-question-div-outer">
                                       <div class="all-question-div-inner">
                                          <div class="single-question-outer">
                                             Give us Review
                                          </div>
                                          <div class="single-question-outer">
                                             Give us Suggestions
                                          </div>
                                          <div class="single-question-outer">
                                             Report
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="single-search-main-sale-div">
                        <div class="single-search-main-sale-div-inner">
                           <div class="single-search-main-sale-div-main">
                              <div class="single-search-main-sale-div-image">
                                 <div class="single-search-main-sale-div-img">
                                    <?php $promotion_file = public_path(). "/business/listings/promotion/".$business->snipshot; ?>
                                    @if ($business->snipshot !="" && file_exists($promotion_file))
                                    <img src="https://sahaa.me/business/listings/promotion/{{$business->snipshot}}" alt="" class='lazy-loading'>
                                    @else
                                    <img src="https://sahaa.me/business/assets/images/default/error.jpg">
                                    @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="email-bottom-text">
        <p>For this, I invite you for a short meeting over Zoom or Google meet. By clicking this link, you can inform us about the right time to speak. </p>
        <br>
        <b>Link: </b> <a href="https://sahaa.me/schedual-call">https://sahaa.me/schedual-call</a>
        <br>
        <p>& also, I'm sharing my contact details so you can notify me about a convenient time to talk with each other.</p>
        <br>
        <b>Contact Details</b>
        <br>
        <ul>
            <li>Name: Muhammad Khan<br></li>
            <li>Mob:<br></li>
            <li>Whatsapp number:<br></li>
            <li>Email: <a href="mailto:muhammad@sahaa.me">muhammad@sahaa.me</a></li>
        </ul>
        <br>
        <br>
        <center>
        <p>Thanks,</p>
        <p>Muhammad Khan</p>
        </center>
      </div>
   </div>
</body>
</html>
