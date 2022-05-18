<?php $listing_count = 1?>
<?php foreach($businesses AS $business) { ?>
<?php
$hide_class = '';
if ($listing_count > $show_pagiation['per_page']) {
    $hide_class = 'hide-listing';
}
?>
<div
    class="all-searchs-main-all-search-inner  single-listings single-listing-5  {{$hide_class}} single-listings single-listing-{{$listing_count}}">
    {{--    <div class="all-searchs-main-single-search p-2">--}}
    {{--        <div class="all-searchs-main-single-search-outer">--}}
    {{--            <div class="all-searchs-main-single-search-inner">--}}
    {{--                <div class="all-searchs-main-single-search-main">--}}
    {{--                    <div class="single-search-main-user-div">--}}
    {{--                        <div class="single-search-main-user-div-inner pt-2 pt-md-0" style="background-color: #fbeede;">--}}
    {{--                            <div class="single-search-main-user-div-main">--}}
    {{--                                <div class="single-search-main-restaurant-image">--}}
    {{--                                    <div class="single-search-main-restaurant-image-main">--}}
    {{--                                        <?php--}}
    {{--                                        if ($business->mini_site_link == "true") {--}}
    {{--                                            $project = count_total('mini_site_projects', "WHERE business_id = " . $business->id . "");--}}
    {{--                                            $promotion = count_total('mini_site_promotions', "WHERE business_id = " . $business->id . "");--}}
    {{--                                            $service = count_total('mini_site_services', "WHERE business_id = " . $business->id . "");--}}
    {{--                                            if ($project == 0 || $promotion == 0 || $service = 0) {--}}
    {{--                                                $link = url('business/detail/') . "/" . $business->slug;--}}
    {{--                                            } else {--}}
    {{--                                                $link = url('business/') . "/" . $business->slug;--}}
    {{--                                            }--}}
    {{--                                        } else {--}}
    {{--                                            $link = url('business/detail/') . "/" . $business->slug;--}}
    {{--                                        }--}}
    {{--                                        ?>--}}
    {{--                                        <a href="{{$link}}">--}}
    {{--                                            <?php $logo_file = public_path() . "/business/listings/logo/" . $business->logo; ?>--}}
    {{--                                            @if ($business->logo != "" && file_exists($logo_file))--}}
    {{--                                                <img src="{{asset('business/assets/lib/lazy-loading/logo.gif')}}" alt=""--}}
    {{--                                                     class='lazy-loading'--}}
    {{--                                                     data-src="{{asset('business/listings/logo')}}/{{$business->logo}}">--}}
    {{--                                            @else--}}
    {{--                                                <img src="{{asset('business/assets/lib/lazy-loading/logo.gif')}}" alt=""--}}
    {{--                                                     class='lazy-loading'--}}
    {{--                                                     data-src="{{asset('business/assets/images/default/logo-default.png')}}">--}}
    {{--                                            @endif--}}
    {{--                                        </a>--}}

    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div--}}
    {{--                                    class="single-search-main-user-review <?php echo ($business->ranking_stars > 0) ? 'has-icon' : '';?>">--}}
    {{--                                    @if($business->ranking_stars > 0)--}}
    {{--                                        <div class="ranking-stars">--}}
    {{--                                            <div class="ranking-stars-outer">--}}
    {{--                                                <div class="ranking-stars-inner">--}}
    {{--                                                    <div class="ranking-stars-main">--}}
    {{--                                                        @for($i=1; $i<=$business->ranking_stars; $i++)--}}
    {{--                                                            @if($business->ranking_stars == 3 && $i==2)--}}
    {{--                                                                <img--}}
    {{--                                                                    src="{{asset('business/assets/images/icons/star.png')}}"--}}
    {{--                                                                    style='transform:scale(1.6)' alt="">--}}
    {{--                                                            @else--}}
    {{--                                                                <img--}}
    {{--                                                                    src="{{asset('business/assets/images/icons/star.png')}}"--}}
    {{--                                                                    alt="">--}}
    {{--                                                            @endif--}}
    {{--                                                        @endfor--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="rank-text">--}}
    {{--                                                        Supplier rank--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    @endif--}}
    {{--                                    <div class="single-search-main-user-review-outer">--}}
    {{--                                        <div class="single-search-main-user-review-inner">--}}
    {{--                                            <div class="single-search-main-user-review-slider">--}}
    {{--                                                <div class="controller-arrow-left">--}}
    {{--                                                    <span class="controller-arrow">--}}
    {{--                                                        <span class="ti-angle-left"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="single-search-main-user-review-all-slides">--}}
    {{--                                                    <div class="single-search-main-user-review-single-slide">--}}
    {{--                                                        <div class="single-search-main-user-review-user-image">--}}
    {{--                                                            <div class="single-search-main-user-review-userimage-inner">--}}
    {{--                                                                <img--}}
    {{--                                                                    src="https://sahaa.me/business/assets/images/home/image-003.jpg"--}}
    {{--                                                                    alt="" class="lazy-loading" style="">--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                        <div class="single-search-main-user-review-user-text">--}}
    {{--                                                            <div class="single-search-main-user-review-text-inner">--}}
    {{--                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
    {{--                                                                Rem minus esse, quos iure voluptas eum voluptates.--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                        <div class="single-search-main-user-review-rateing">--}}
    {{--                                                            <div class="single-search-main-user-review-rating-inner">--}}
    {{--                                                                <div class="single-search-main-user-review-rating-main">--}}
    {{--                                                                    <div--}}
    {{--                                                                        class="single-search-main-user-review-rating-stars">--}}
    {{--                                                                        <?php $review_count = intval(avg_total('listing_reviews', "WHERE listing_id= {$business->id}")); ?>--}}
    {{--                                                                        <?php for($i = 0; $i < $review_count; $i++) { ?>--}}
    {{--                                                                        <span class="ti-star"></span>--}}
    {{--                                                                        <?php } ?>--}}
    {{--                                                                    </div>--}}
    {{--                                                                    <div--}}
    {{--                                                                        class="single-search-main-user-review-rating-text">--}}
    {{--                                                                        <span--}}
    {{--                                                                            class="rating"><?php echo $review_count?></span>--}}
    {{--                                                                        <span--}}
    {{--                                                                            class="total-review">(<?php echo count_total('listing_reviews', "WHERE listing_id= {$business->id}") ?>)</span>--}}
    {{--                                                                    </div>--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="controller-arrow-right">--}}
    {{--                                                    <span class="controller-arrow">--}}
    {{--                                                        <span class="ti-angle-right"></span>--}}
    {{--                                                    </span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="single-search-main-info-div">--}}
    {{--                        <div class="single-search-main-info-div-outer">--}}
    {{--                            <div class="single-search-main-info-div-inner">--}}
    {{--                                <div class="single-search-main-info-div-main">--}}
    {{--                                    <div--}}
    {{--                                        class="single-search-main-info-title <?php echo ($business->verified != 0) ? 'has-icon' : '';?>">--}}
    {{--                                        <a href="{{$link}}">--}}
    {{--                                            <?php echo $business->name; ?>--}}
    {{--                                            <a>--}}
    {{--                                                @if($business->verified != 0)--}}
    {{--                                                    <div class="verified-icon">--}}
    {{--                                                        <div class="verified-icon-outer">--}}
    {{--                                                            <div class="verified-icon-inner">--}}
    {{--                                                                <div class="verified-icon-main">--}}
    {{--                                                                    <img--}}
    {{--                                                                        src="{{asset('business/assets/images/icons/verified.png')}}"--}}
    {{--                                                                        alt="">--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                        @endif--}}
    {{--                                    </div>--}}
    {{--                                    <div class="single-search-main-info-cate-title">--}}
    {{--                                        <div class="single-search-main-info-left-side-text">--}}
    {{--                                            <?php echo $business->short_desc; ?>--}}
    {{--                                        </div>--}}
    {{--                                        <span class="side-devider">|</span>--}}
    {{--                                        <div class="single-search-main-info-right-side-text color-blue">--}}
    {{--                                            <?php  echo $business->sub_category_text; ?>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    </a>--}}
    {{--                                    <div class="all-share-buttons"><a>--}}
    {{--                                        </a>--}}
    {{--                                        <div class="all-share-buttons-inner share-options">--}}
    {{--                                            @if($business->phone != '')--}}
    {{--                                                <a href="tel:{{$business->phone}}">--}}
    {{--                                                    <div class="icon-image">--}}
    {{--                                                        <img src="{{asset('business/assets/images/icons/phone.png')}}">--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="icon-text">--}}
    {{--                                                        Call us--}}
    {{--                                                    </div>--}}
    {{--                                                </a>--}}
    {{--                                            @endif--}}
    {{--                                            @if($business->whatsapp != '')--}}
    {{--                                                <a href="https://wa.me/{{$business->whatsapp}}">--}}
    {{--                                                    <div class="icon-image">--}}
    {{--                                                        <img--}}
    {{--                                                            src="{{asset('business/assets/images/icons/whatsapp.png')}}">--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="icon-text">--}}
    {{--                                                        Whatsapp us--}}
    {{--                                                    </div>--}}
    {{--                                                </a>--}}
    {{--                                            @endif--}}
    {{--                                            @if($business->email != '')--}}
    {{--                                                <a href="mailto:{{$business->email}}">--}}
    {{--                                                    <div class="icon-image">--}}
    {{--                                                        <img src="{{asset('business/assets/images/icons/gmail.png')}}">--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="icon-text">--}}
    {{--                                                        Email us--}}
    {{--                                                    </div>--}}
    {{--                                                </a>--}}
    {{--                                            @endif--}}
    {{--                                            @if($business->phone_text != '')--}}
    {{--                                                <a href="http://m.me/{{$business->phone_text}}">--}}
    {{--                                                    <div class="icon-image">--}}
    {{--                                                        <img--}}
    {{--                                                            src="{{asset('business/assets/images/icons/messenger.png')}}">--}}
    {{--                                                    </div>--}}
    {{--                                                    <div class="icon-text">--}}
    {{--                                                        Messenger us--}}
    {{--                                                    </div>--}}
    {{--                                                </a>--}}
    {{--                                            @endif--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="address-div">--}}
    {{--                                        <div class="address-div-outer">--}}
    {{--                                            <div--}}
    {{--                                                class="address-div-inner address-text-hidden d-flex align-items-center">--}}
    {{--                                                <div class="address-div-icon color-gray">--}}
    {{--                                                    <span class="ti-location-pin" style="font-size: 1rem;"></span>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="address-div-text color-blue">--}}
    {{--                                                    <?php if ($business->floor != '') {--}}
    {{--                                                        echo $business->floor;--}}
    {{--                                                    } ; ?>--}}
    {{--                                                    <?php if ($business->office != '') {--}}
    {{--                                                        echo ", " . $business->office;--}}
    {{--                                                    } ; ?>--}}
    {{--                                                    <?php if ($business->buildingname != '') {--}}
    {{--                                                        echo ", " . $business->buildingname;--}}
    {{--                                                    } ; ?>--}}
    {{--                                                    <?php if ($business->streetname != '') {--}}
    {{--                                                        echo ", " . $business->streetname;--}}
    {{--                                                    } ; ?>--}}
    {{--                                                    <?php if ($business->city_text != '') {--}}
    {{--                                                        echo ", " . $business->city_text;--}}
    {{--                                                    } ; ?>--}}
    {{--                                                    <?php if ($business->state_text != '') {--}}
    {{--                                                        echo ", " . $business->state_text;--}}
    {{--                                                    } ; ?>--}}
    {{--                                                    <?php if ($business->country != '') {--}}
    {{--                                                        echo ", " . $business->country;--}}
    {{--                                                    } ; ?>--}}
    {{--                                                    <span class='dots'>...</span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="address-div">--}}
    {{--                                        <div class="address-div-outer">--}}
    {{--                                            <div class="address-div-inner d-flex align-items-center">--}}
    {{--                                                <div class="address-div-icon color-gray">--}}
    {{--                                                    <span class="ti-time" style="font-size: 1rem"></span>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="address-div-deistance color-blue">--}}
    {{--                                                    <span class="color-orange">Opens</span> <span--}}
    {{--                                                        class="color-gray"><?php  echo $business->mon_open_time; ?></span>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="single-search-main-user-review-rateing show-on-mobile">--}}
    {{--                                        <div class="single-search-main-user-review-rating-inner">--}}
    {{--                                            <div class="single-search-main-user-review-rating-main">--}}
    {{--                                                <div class="single-search-main-user-review-rating-stars">--}}
    {{--                                                    <span class="ti-star"></span>--}}
    {{--                                                    <span class="ti-star"></span>--}}
    {{--                                                    <span class="ti-star"></span>--}}
    {{--                                                    <span class="ti-star"></span>--}}
    {{--                                                    <span class="ti-star"></span>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="single-search-main-user-review-rating-text">--}}
    {{--                                                    <span class="rating">5.0</span> <span--}}
    {{--                                                        class="total-review">(13)</span>--}}
    {{--                                                </div>--}}
    {{--                                                <div class="single-search-main-user-review-text">--}}
    {{--                                                    <a href="#">Give us Review</a>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="card-bottom-options show-on-mobile my-1">--}}
    {{--                                        <div class="card-bottom-options-outer">--}}
    {{--                                            <div class="card-bottom-options-inner">--}}
    {{--                                                <div class="card-bottom-options-main">--}}
    {{--                                                    <div class="contact-options">--}}
    {{--                                                        <div class="contact-options-outer">--}}
    {{--                                                            <div class="contact-options-inner">--}}
    {{--                                                                <div class="contact-options-main">--}}
    {{--                                                                    @if($business->phone != '')--}}
    {{--                                                                        <a href="tel:{{$business->phone}}">--}}
    {{--                                                                            <div class="icon-image">--}}
    {{--                                                                                <img--}}
    {{--                                                                                    src="{{asset('business/assets/images/icons/phone.png')}}">--}}
    {{--                                                                            </div>--}}
    {{--                                                                        </a>--}}
    {{--                                                                    @endif--}}
    {{--                                                                    @if($business->whatsapp != '')--}}
    {{--                                                                        <a href="https://wa.me/{{$business->whatsapp}}">--}}
    {{--                                                                            <div class="icon-image">--}}
    {{--                                                                                <img--}}
    {{--                                                                                    src="{{asset('business/assets/images/icons/whatsapp.png')}}">--}}
    {{--                                                                            </div>--}}
    {{--                                                                        </a>--}}
    {{--                                                                    @endif--}}
    {{--                                                                    @if($business->email != '')--}}
    {{--                                                                        <a href="mailto:{{$business->email}}">--}}
    {{--                                                                            <div class="icon-image">--}}
    {{--                                                                                <img--}}
    {{--                                                                                    src="{{asset('business/assets/images/icons/gmail.png')}}">--}}
    {{--                                                                            </div>--}}
    {{--                                                                        </a>--}}
    {{--                                                                    @endif--}}
    {{--                                                                    @if($business->phone_text != '')--}}
    {{--                                                                        <a href="http://m.me/{{$business->phone_text}}">--}}
    {{--                                                                            <div class="icon-image">--}}
    {{--                                                                                <img--}}
    {{--                                                                                    src="{{asset('business/assets/images/icons/messenger.png')}}">--}}
    {{--                                                                            </div>--}}
    {{--                                                                        </a>--}}
    {{--                                                                    @endif--}}
    {{--                                                                </div>--}}
    {{--                                                            </div>--}}
    {{--                                                        </div>--}}
    {{--                                                    </div>--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="all-category-div">--}}
    {{--                                        <div class="all-category-div-inner">--}}
    {{--                                            <ul class="all-category-ul">--}}
    {{--                                                @if($business->stitle_1 != '')--}}
    {{--                                                    <li class="all-category-li">--}}
    {{--                                                        <span--}}
    {{--                                                            class="color-gray"><?php  echo $business->stitle_1; ?></span>--}}
    {{--                                                    </li>--}}
    {{--                                                @endif--}}
    {{--                                                @if($business->stitle_2 != '')--}}
    {{--                                                    <li class="all-category-li">--}}
    {{--                                                        <span--}}
    {{--                                                            class="color-gray"><?php  echo $business->stitle_2; ?></span>--}}
    {{--                                                    </li>--}}
    {{--                                                @endif--}}
    {{--                                                @if($business->stitle_3 != '')--}}
    {{--                                                    <li class="all-category-li">--}}
    {{--                                                        <span--}}
    {{--                                                            class="color-gray"><?php  echo $business->stitle_3; ?></span>--}}
    {{--                                                    </li>--}}
    {{--                                                @endif--}}
    {{--                                                @if($business->stitle_4 != '')--}}
    {{--                                                    <li class="all-category-li">--}}
    {{--                                                        <span--}}
    {{--                                                            class="color-gray"><?php  echo $business->stitle_4; ?></span>--}}
    {{--                                                    </li>--}}
    {{--                                                @endif--}}
    {{--                                                @if($business->stitle_5 != '')--}}
    {{--                                                    <li class="all-category-li">--}}
    {{--                                                        <span--}}
    {{--                                                            class="color-gray"><?php  echo $business->stitle_5; ?></span>--}}
    {{--                                                    </li>--}}
    {{--                                                @endif--}}
    {{--                                                @if($business->stitle_6 != '')--}}
    {{--                                                    <li class="all-category-li">--}}
    {{--                                                        <span--}}
    {{--                                                            class="color-gray"><?php  echo $business->stitle_6; ?></span>--}}
    {{--                                                    </li>--}}
    {{--                                                @endif--}}
    {{--                                            </ul>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="all-question-div">--}}
    {{--                                        <div class="all-question-div-outer">--}}
    {{--                                            <div class="all-question-div-inner py-2">--}}
    {{--                                                <div class="single-question-outer">--}}
    {{--                                                    Give us Review--}}
    {{--                                                </div>--}}
    {{--                                                <div class="single-question-outer">--}}
    {{--                                                    Give us Suggestions--}}
    {{--                                                </div>--}}
    {{--                                                <div class="single-question-outer">--}}
    {{--                                                    Report--}}
    {{--                                                </div>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="single-search-main-sale-div">--}}
    {{--                        <div class="single-search-main-sale-div-inner">--}}
    {{--                            <div class="single-search-main-sale-div-main">--}}
    {{--                                <div class="single-search-main-sale-div-image">--}}
    {{--                                    <div class="single-search-main-sale-div-img">--}}
    {{--                                        <?php $promotion_file = public_path() . "/business/listings/promotion/" . $business->snipshot; ?>--}}
    {{--                                        @if ($business->snipshot !="" && file_exists($promotion_file))--}}
    {{--                                            <img src="{{asset('business/assets/lib/lazy-loading/promotion.gif')}}"--}}
    {{--                                                 alt="" class='lazy-loading'--}}
    {{--                                                 data-src="{{asset('business/listings/promotion')}}/{{$business->snipshot}}">--}}
    {{--                                        @else--}}
    {{--                                            <img src="{{asset('business/assets/lib/lazy-loading/promotion.gif')}}"--}}
    {{--                                                 alt="" class='lazy-loading'--}}
    {{--                                                 data-src="{{asset('business/assets/images/default/promotion-default.png')}}">--}}
    {{--                                        @endif--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div class="searched_content">
        <!-- Desktop Card -->
        <div class="desktop_visible card">
            <div class="card_left">
                <div class="card_logo">
                    <?php
                    if ($business->mini_site_link == "true") {
                        $project = count_total('mini_site_projects', "WHERE business_id = " . $business->id . "");
                        $promotion = count_total('mini_site_promotions', "WHERE business_id = " . $business->id . "");
                        $service = count_total('mini_site_services', "WHERE business_id = " . $business->id . "");
                        if ($project == 0 || $promotion == 0 || $service = 0) {
                            $link = url('business/detail/') . "/" . $business->slug;
                        } else {
                            $link = url('business/') . "/" . $business->slug;
                        }
                    } else {
                        $link = url('business/detail/') . "/" . $business->slug;
                    }
                    ?>
                    <a href="{{$link}}">
                        <?php $logo_file = public_path() . "/business/listings/logo/" . $business->logo; ?>
                        @if ($business->logo != "" && file_exists($logo_file))
                            <img src="{{asset('business/assets/lib/lazy-loading/logo.gif')}}" alt=""
                                 class='lazy-loading'
                                 data-src="{{asset('business/listings/logo')}}/{{$business->logo}}">
                        @else
                            <img src="{{asset('business/assets/lib/lazy-loading/logo.gif')}}" alt=""
                                 class='lazy-loading'
                                 data-src="{{asset('business/assets/images/default/logo-default.png')}}">
                        @endif
                    </a>

                    {{--                    <img src="assets/img/card_logo.png" alt="">--}}
                </div>
                <div class="reviews">
                    <span class="next"><i class="fas fa-chevron-right"></i></span>
                    <span class="prev"><i class="fas fa-chevron-left"></i></span>
                    <div class="round_img"><img src="assets/img/image-003.jpg" alt=""></div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quaerat?
                    </div>
                    <div class="footer_review">
                        <div class="starts">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <?php $review_count = intval(avg_total('listing_reviews', "WHERE listing_id= {$business->id}")); ?>
                            <?php for($i = 0; $i < $review_count; $i++) { ?>
                            <span class="ti-star"></span>
                            <?php } ?>
                            <span style="font-size: 13px;font-weight: 800;"><?php echo $review_count?></span>
                            <span
                                style="font-size: 11px;">(<?php echo count_total('listing_reviews', "WHERE listing_id= {$business->id}") ?>)</span>
                        </div>
                    </div>
                </div>
                @if($business->ranking_stars > 0)
                    <div class="supplier_rank">
                        <div class="stars">
                            @for($i=1; $i<=$business->ranking_stars; $i++)
                                @if($business->ranking_stars == 3 && $i==2)
                                    <img src="{{asset('business/assets/images/icons/star.png')}}"
                                         style='transform:scale(1.6)' alt="">
                                @else
                                    <img src="{{asset('business/assets/images/icons/star.png')}}" alt="">
                                @endif
                            @endfor
                        </div>
                        <small>Supplier Rank</small>
                    </div>
                @endif
            </div>

            <div class="card_center">
                <a href="{{$link}}">
                <span class="card_heading">
<!--                    --><?php //echo $business->name; ?>
                        {{Str::limit($business->name, 25)}}
                </span>
                    <a>
                        <span class="card_detail"><?php echo $business->short_desc; ?> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <span
                                class="text-blue"> <?php  echo $business->sub_category_text; ?></span></span>
                        <div class="row">
                            @if($business->whatsapp!= '')
                                <div class="info_col">

                                    <a href="https://wa.me/{{$business->whatsapp}}">
                                        <div class="icon-image">
                                            <img src="{{asset('business/assets/images/icons/whatsapp.png')}}">
                                        </div>
                                        <span>Whatsapp us</span>
                                    </a>

                                </div>
                            @endif
                            @if($business->phone != '')
                                <div class="info_col">

                                    <a href="tel:{{$business->phone}}">
                                        <div class="icon-image">
                                            <img src="{{asset('business/assets/img/phone.png')}}">
                                        </div>
                                        <span>Call us</span>
                                    </a>

                                </div>
                            @endif
                            @if($business->email != '')
                                <div class="info_col">
                                    <a href="mailto:{{$business->email}}">
                                        <img src="{{asset('business/assets/img/gmail.png')}}" alt="">
                                        <span>Email us</span>
                                    </a>
                                </div>
                            @endif
                            @if($business->phone_text != '')
                                <div class="info_col">
                                    <a href="http://m.me/{{$business->phone_text}}">
                                        <img src="{{asset('business/assets/img/messenger.png')}}" alt="">
                                        <span>Messenger us</span>
                                    </a>
                                </div>
                            @endif
                            <div class="info_col">
                                <i class="text-blue fas fa-globe"></i>
                                <span>Website</span>
                            </div>
                        </div>
                        <div class="row">
                            <span class="txt-location"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;<span
                                    class="text-blue"> <span style="font-weight: 700;">
                                      @if ($business->floor != '')
{{--                                            echo $business->floor;--}}
                                            {{Str::limit($business->floor, 5)}}
                                          @endif
                                          @if ($business->office != '')

{{--                                              echo ", " . $business->office;--}}
                                          {{Str::limit($business->office, 5)}}
{{--                                          } ; ?>--}}
                                          @endif
                                          @if ($business->buildingname != '')
{{--                                              echo ", " . $business->buildingname;--}}
                                          {{Str::limit($business->buildingname, 5)}}
                                          @endif
                                          @if ($business->streetname != '')
{{--                                              echo ", " . $business->streetname;--}}
                                          {{Str::limit($business->streetname, 5)}}
                                          @endif
                                         @if ($business->city_text != '')
{{--//                                              echo ", " . $business->city_text;--}}
                                              {{Str::limit($business->city_text, 5)}}
                                         @endif
                                          @if ($business->state_text != '')
                                              {{Str::limit($business->state_text, 5)}}
{{--                                              echo ", " . $business->state_text;--}}
                                          @endif
                                          <?php if ($business->country != '') {
                                              echo ", " . $business->country;
                                          } ; ?>
                                          {{--                                          <span class='dots'>...</span>--}}
                            </span>
                        </div>
                        <div class="row">
                            <span class="clock"><i class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;<span class="orange"
                                                                                                    style="font-weight: 700;">Opens at</span>&nbsp;<?php  echo $business->mon_open_time; ?></span>
                        </div>
                        <div class="row">
                            <ul class="spec">
                                @if($business->stitle_1 != '')
                                    <li>
                                        <span class="color-gray"><?php  echo $business->stitle_1; ?></span>
                                    </li>
                                @endif
                                @if($business->stitle_2 != '')
                                    <li>
                                        <span class="color-gray"><?php  echo $business->stitle_2; ?></span>
                                    </li>
                                @endif
                                @if($business->stitle_3 != '')
                                    <li>
                                        <span class="color-gray"><?php  echo $business->stitle_3; ?></span>
                                    </li>
                                @endif
                                @if($business->stitle_4 != '')
                                    <li>
                                        <span class="color-gray"><?php  echo $business->stitle_4; ?></span>
                                    </li>
                                @endif
                                @if($business->stitle_5 != '')
                                    <li>
                                        <span class="color-gray"><?php  echo $business->stitle_5; ?></span>
                                    </li>
                                @endif
                                @if($business->stitle_6 != '')
                                    <li>
                                        <span class="color-gray"><?php  echo $business->stitle_6; ?></span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <div class="card_footer">
                            <ul>
                                <li>Give us Review</li>
                                <li>Add To Favourite <i class="fas fa-heart" style="font-size: 13px;"></i></li>
                                <li>Report</li>
                            </ul>
                        </div>
            </div>

            <div class="single-search-main-info-title <?php echo ($business->verified != 0) ? 'has-icon' : '';?>">
                @if($business->verified != 0)
                    <div class="verified-icon">
                        <div class="verified-icon-outer">
                            <div class="verified-icon-inner">
                                <div class="verified-icon-main">
                                    <img src="{{asset('business/assets/images/icons/verified.png')}}"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="card_right">
                <?php $promotion_file = public_path() . "/business/listings/promotion/" . $business->snipshot; ?>
                @if ($business->snipshot !="" && file_exists($promotion_file))
                    <img src="{{asset('business/assets/lib/lazy-loading/promotion.gif')}}"
                         alt="" class='lazy-loading'
                         data-src="{{asset('business/listings/promotion')}}/{{$business->snipshot}}">
                @else
                    <img src="{{asset('business/assets/lib/lazy-loading/promotion.gif')}}"
                         alt="" class='lazy-loading'
                         data-src="{{asset('business/assets/images/default/promotion-default.png')}}">
                @endif
                {{--                <img src="assets/img/card_right.jpg" alt="">--}}
                <a href="javascript:void(0)" class="btn_get">Get it now</a>
            </div>
        </div>

        <!-- Mobile Card -->
        <div class="mobile_visible card">
            <div class="card_left">
                <div class="card_logo">
                    <?php
                    if ($business->mini_site_link == "true") {
                        $project = count_total('mini_site_projects', "WHERE business_id = " . $business->id . "");
                        $promotion = count_total('mini_site_promotions', "WHERE business_id = " . $business->id . "");
                        $service = count_total('mini_site_services', "WHERE business_id = " . $business->id . "");
                        if ($project == 0 || $promotion == 0 || $service = 0) {
                            $link = url('business/detail/') . "/" . $business->slug;
                        } else {
                            $link = url('business/') . "/" . $business->slug;
                        }
                    } else {
                        $link = url('business/detail/') . "/" . $business->slug;
                    }
                    ?>
                    <a href="{{$link}}">
                        <?php $logo_file = public_path() . "/business/listings/logo/" . $business->logo; ?>
                        @if ($business->logo != "" && file_exists($logo_file))
                            <img src="{{asset('business/assets/lib/lazy-loading/logo.gif')}}" alt=""
                                 class='lazy-loading'
                                 data-src="{{asset('business/listings/logo')}}/{{$business->logo}}">
                        @else
                            <img src="{{asset('business/assets/lib/lazy-loading/logo.gif')}}" alt=""
                                 class='lazy-loading'
                                 data-src="{{asset('business/assets/images/default/logo-default.png')}}">
                        @endif
                    </a>

                    {{--                    <img src="assets/img/card_left1.jpeg" alt="">--}}
                </div>
                @if($business->ranking_stars > 0)
                    <div class="supplier_rank">
                        <div class="stars">
                            @for($i=1; $i<=$business->ranking_stars; $i++)
                                @if($business->ranking_stars == 3 && $i==2)
                                    <img src="{{asset('business/assets/images/icons/star.png')}}"
                                         style='transform:scale(1.6)' alt="">
                                @else
                                    <img src="{{asset('business/assets/images/icons/star.png')}}" alt="">
                                @endif
                            @endfor
                        </div>
                   <small>Supplier&nbsp;rank</small>
                    </div>
                @endif
{{--                <div class="supplier_rank">--}}
{{--                    <div class="stars">--}}
{{--                        <img src="assets/img/star.png" alt="">--}}
{{--                        <img src="assets/img/star.png" class="center_img" alt="">--}}
{{--                        <img src="assets/img/star.png" alt="">--}}
{{--                    </div>--}}
{{--                    <small>Supplier&nbsp;rank</small>--}}
{{--                </div>--}}
            </div>
            <div class="card_center">
                <div class="heading">
                    <a href="{{$link}}">
                        <?php echo $business->name; ?>
                        </a>
                            @if($business->verified != 0)
                                <div class="verified-icon">
                                    <div class="verified-icon-outer">
                                        <div class="verified-icon-inner">
                                            <div class="verified-icon-main">
                                                <img src="{{asset('business/assets/images/icons/verified.png')}}"
                                                     alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    @endif
                </div>
                <div class="card_detail"> <?php echo $business->short_desc; ?>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<span
                        class="text-blue"> <?php  echo $business->sub_category_text; ?></span></div>
                <div class="location">
                    <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="location_text" style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                        <span class="text-bold" style="display:block;text-overflow: ellipsis;width: 200px;overflow: hidden; white-space: nowrap;">
                            <?php if ($business->floor != '') {
                                echo $business->floor;
                            } ; ?>
                            <?php if ($business->office != '') {
                                echo ", " . $business->office;
                            } ; ?>
                            <?php if ($business->buildingname != '') {
                                echo ", " . $business->buildingname;
                            } ; ?>
                            <?php if ($business->streetname != '') {
                                echo ", " . $business->streetname;
                            } ; ?>
                            <?php if ($business->city_text != '') {
                                echo ",".$business->city_text;
                            } ; ?>
                            <?php if ($business->state_text != '') {
                                echo ", " . $business->state_text;
                            } ; ?>
                        </span>&nbsp;|
                        <?php if ($business->country != '') {
                            echo ", " . $business->country;
                        } ; ?>
                    </span>
                    </span>
                </div>
                <div class="clock">
                    <i class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;<span class=""><span
                            class="orange text-bold">Opens at</span>&nbsp; <?php  echo $business->mon_open_time; ?></span>
                </div>

                <div class="review">
                    <div class="review_stat">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i> &nbsp;&nbsp;&nbsp;
                    </div>
                    <?php $review_count = intval(avg_total('listing_reviews', "WHERE listing_id= {$business->id}")); ?>
                    <?php for($i = 0; $i < $review_count; $i++) { ?>
                    <span class="ti-star"></span>
                    <?php } ?>
                    <span class=""><?php echo $review_count ?></span> &nbsp;
                    <small>(<?php echo count_total('listing_reviews', "WHERE listing_id= {$business->id}") ?>)</small>&nbsp;&nbsp;&nbsp;
                    <a href="#" class="btn_link text-blue">Give us Review</a>
                </div>

                <!-- Card Footer -->

                <div class="card_footer">
                    <a href="#" class="btn_more">More&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
                    <div class="social ml-3">
                        <a href="#"><img src="assets/img/whatsapp.png" alt=""></a>
                        <a href="#"><img src="assets/img/phone.png" alt=""></a>
                        <a href="#"><img src="assets/img/gmail.png" alt=""></a>
                        <a href="#"><img src="assets/img/messenger.png" alt=""></a>
                        <a href="#"><i class="fas fa-globe"></i></a>
                    </div>
                </div>


            </div>
        </div>



    </div>
</div>


<?php $listing_count++; ?>
<?php } ?>
<div class="pagination">
    <div class="left goto-page prev" data-page="1"><a href="" class="previous">Previous</a></div>
    <div class="right goto-page next" data-page="2"><a href="" class="forward active">Next</a></div>
    <div class="center">
        <ul>
            <div class="pagination-navigation">
                <ul class="pagination-navigation-ul pagination-ul" data-currentpage="1">
                    <li class="pagination-navigation-li goto-page goto-li" data-page="1"><span
                            class="background-gray">1</span></li>
                    <li class="pagination-navigation-li goto-seprater-start"><span
                            class="background-gray">...</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav " data-page="2"><span
                            class="background-gray">2</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav " data-page="3"><span
                            class="background-gray">3</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav " data-page="4"><span
                            class="background-gray">4</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav " data-page="5"><span
                            class="background-gray">5</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="6">
                        <span class="background-gray">6</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="7">
                        <span class="background-gray">7</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="8">
                        <span class="background-gray">8</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="9">
                        <span class="background-gray">9</span></li>
                    <li class="pagination-navigation-li goto-page goto-li moving-nav hide-this" data-page="10">
                        <span class="background-gray">10</span></li>
                    <li class="pagination-navigation-li goto-seprater-end"><span
                            class="background-gray">...</span></li>
                    <li class="pagination-navigation-li goto-page goto-li" data-page="20"><span
                            class="background-gray">20</span></li>
                </ul>
            </div>
        </ul>
    </div>
</div>
