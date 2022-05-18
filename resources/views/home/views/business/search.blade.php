<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business - Search | Sahaa.me</title>
    @include('site-layout.style')
</head>
<body>
    @include('site-layout.top-bar')
    <section class="section-main-page">
        <div class="main-page-inner">
            <div class="main-page-inner-main">
                <div class="main-page-header">
                    <div class="container">
                    @include('site-layout.header')
                    </div>
                </div>
                <div class="main-page-under-header">
                    <div class="container">
                        <div class="main-page-under-header-outer">
                            <div class="page-beardcrumb">
                                <div class="page-beardcrumb-inner">
                                    <div class="page-beardcrumb-outer">
                                        <div class="page-beardcrumb-main">
                                            <span class="beadcrumb-active-link">Home</span>
                                            <span class="beard-crumb-devider"><span class="ti-angle-right"></span></span>
                                            <span class="beadcrumb-active-link">Restaurants</span>
                                            <span class="beard-crumb-devider"><span class="ti-angle-right"></span></span>
                                            <span class="beadcrumb-active-link">Dubai</span>
                                            <span class="beard-crumb-devider"><span class="ti-angle-right"></span></span>
                                            <span class="beadcrumb-active-text color-gray">Restaurants near Dubai</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-page-under-header-title-div">
                                <div class="main-page-under-header-title-div-outer">
                                    <div class="main-page-under-header-title-div-inner">
                                        <div class="main-page-under-header-title-main">
                                            <div class="main-title">
                                                Restaurants near Dubai
                                            </div>
                                            <div class="main-sub-title">
                                                Did you mean a company called <span class="color-orange">"Restaurants"?</span>
                                            </div>
                                        </div>
                                        <div class="sort-div">
                                            <div class="sort-div-outer">
                                                <div class="sort-div-main">
                                                    <div class="sort-div-input">
                                                        <span class="sort-div-icon"><span class="ti-exchange-vertical"></span></span>
                                                        <select>
                                                            <option>Sort by relevance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="all-searchs-outer">
                                <div class="all-searchs-inner">
                                    <div class="all-searchs-main">
                                        <div class="top-related-searchs">
                                            <div class="top-related-search-outer">
                                                <div class="top-related-search-inner">
                                                    <div class="top-related-search-text">
                                                        Related Searches:
                                                    </div>
                                                    <div class="top-related-search-tags">
                                                        <div class="top-related-search-tags-inner">
                                                            <div class="top-related-search-tags-main">
                                                                <span>Top Restaurant</span>
                                                                <span>Restaurant</span>
                                                                <span>Restaurant near me</span>
                                                                <span>Restaurant in Dubai</span>
                                                                <span>Restaurant</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="all-searchs-main-outer">
                                            <div class="all-searchs-main-inner">
                                                <div class="all-searchs-main-filter">
                                                    <div class="all-searchs-main-filter-outer">
                                                        <div class="all-searchs-main-filter-inner">
                                                            <div class="all-searchs-main-filter-map">
                                                                <div class="all-searchs-main-filter-map-outer">
                                                                    <div class="all-searchs-main-filter-map-inner">
                                                                        <img src="{{asset('public/assets/images/home/image-000.jpg')}}" alt="">
                                                                        <div class="all-searchs-main-filter-map-overlay">
                                                                            <div class="all-searchs-main-filter-map-overly-inner">
                                                                                <div class="all-searchs-main-filter-map-overly-text">
                                                                                    <span class="ti-location-pin"></span>
                                                                                    <span class="overly-text">View Map</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="side-filter-div">
                                                                <div class="side-filter-div-outer">
                                                                    <div class="side-filter-div-inner">
                                                                        <div class="side-filter-icon">
                                                                            <span class="ti-panel"></span>
                                                                        </div>
                                                                        <div class="side-filter-text">
                                                                            Filter results
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="all-category-options">
                                                                <div class="all-category-options-outer">
                                                                    <div class="all-category-options-inner">
                                                                        <div class="all-category-options-main">
                                                                            <div class="all-category-options-title-div">
                                                                                <div class="all-category-options-text">
                                                                                    Category
                                                                                </div>
                                                                                <div class="all-category-options-icon">
                                                                                    <span class="ti-angle-up"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="all-category-option-main-list">
                                                                                <ul class="all-category-option-main-list-ul">
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">African Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Lebanese Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Indian Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Turkish Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Mediterranean Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Middle Eastern Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Thai Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Italian Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Caribbean Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Spanish Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Vegetarian Restaurants</div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="all-category-options">
                                                                <div class="all-category-options-outer">
                                                                    <div class="all-category-options-inner">
                                                                        <div class="all-category-options-main">
                                                                            <div class="all-category-options-title-div">
                                                                                <div class="all-category-options-text">
                                                                                    Content
                                                                                </div>
                                                                                <div class="all-category-options-icon">
                                                                                    <span class="ti-angle-up"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="all-category-option-main-list">
                                                                                <ul class="all-category-option-main-list-ul">
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Websites</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Photos</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Reviews</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Messaging</div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="all-category-option-main-list-li">
                                                                                        <div class="all-category-option-main-list-option-div">
                                                                                            <div class="all-category-option-main-list-check"><input type="checkbox"></div>
                                                                                            <div class="all-category-option-main-list-text color-gray">Videos</div>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="side-bar-images-main">
                                                                <div class="side-bar-images-main-outer">
                                                                    <div class="side-bar-images-main-inner">
                                                                        <img src="{{asset('public/assets/images/home/s2img1.JPG')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="side-bar-images-main">
                                                                <div class="side-bar-images-main-outer">
                                                                    <div class="side-bar-images-main-inner">
                                                                        <img src="{{asset('public/assets/images/home/s2img2.JPG')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="side-bar-images-main">
                                                                <div class="side-bar-images-main-outer">
                                                                    <div class="side-bar-images-main-inner">
                                                                        <img src="{{asset('public/assets/images/home/s3img3.JPG')}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="all-searchs-main-all-search">
                                                    <div class="all-searchs-main-all-search-outer">
                                                        <?php foreach($businesses AS $business) { ?>
                                                            <div class="all-searchs-main-all-search-inner">
                                                            <div class="all-searchs-main-single-search">
                                                                <div class="all-searchs-main-single-search-outer">
                                                                    <div class="all-searchs-main-single-search-inner">
                                                                        <div class="all-searchs-main-single-search-main">
                                                                            <div class="single-search-main-user-div">
                                                                                <div class="single-search-main-user-div-inner">
                                                                                    <div class="single-search-main-user-div-main">
                                                                                        <div class="single-search-main-restaurant-image">
                                                                                            <div class="single-search-main-restaurant-image-main">
                                                                                                <img src="{{asset('public/assets/images/home/image-002.jpg')}}" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="single-search-main-user-review">
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
                                                                                                                        <img src="{{asset('public/assets/images/home/image-003.jpg')}}" alt="">
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
                                                                                                                                <span class="ti-star"></span>
                                                                                                                                <span class="ti-star"></span>
                                                                                                                                <span class="ti-star"></span>
                                                                                                                                <span class="ti-star"></span>
                                                                                                                                <span class="ti-star"></span>
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
                                                                                            <div class="single-search-main-info-title">
                                                                                                <?php echo $business->business_name; ?>
                                                                                            </div>
                                                                                            <div class="single-search-main-info-cate-title">
                                                                                                <div class="single-search-main-info-left-side-text">
                                                                                                    Taste is abouve all things
                                                                                                </div>
                                                                                                <span class='side-devider'>|</span>
                                                                                                <div class="single-search-main-info-right-side-text color-blue">
                                                                                                    <?php  echo $business->business_type; ?>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="all-share-buttons">
                                                                                                <div class="all-share-buttons-inner">
                                                                                                    <button class="button-icon">
                                                                                                        <span class="ti-search"></span>
                                                                                                        Whatsapp
                                                                                                    </button>
                                                                                                    <button class="button-icon">
                                                                                                        <span class="ti-search"></span>
                                                                                                        Whatsapp
                                                                                                    </button>
                                                                                                    <button class="button-icon">
                                                                                                        <span class="ti-search"></span>
                                                                                                        Whatsapp
                                                                                                    </button>
                                                                                                    <button class="button-icon">
                                                                                                        <span class="ti-search"></span>
                                                                                                        Whatsapp
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="address-div">
                                                                                                <div class="address-div-outer">
                                                                                                    <div class="address-div-inner">
                                                                                                        <div class="address-div-icon color-gray">
                                                                                                            <span class="ti-location-pin"></span>
                                                                                                        </div>
                                                                                                        <div class="address-div-deistance color-blue">
                                                                                                            2.3 mi
                                                                                                        </div>
                                                                                                        <span class='side-devider color-blue'>|</span>
                                                                                                        <div class="address-div-text color-blue">
                                                                                                            <?php  echo $business->business_address; ?>
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
                                                                                                            <span class="color-orange">Closed</span> <span class="color-gray"><?php  echo $business->timings; ?></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="all-category-div">
                                                                                                <div class="all-category-div-inner">
                                                                                                    <ul class="all-category-ul">
                                                                                                        <li class="all-category-li">
                                                                                                            <span class="color-gray">Fish And Chips</span>
                                                                                                        </li>
                                                                                                        <li class="all-category-li">
                                                                                                            <span class="color-gray">Fish And Chips</span>
                                                                                                        </li>
                                                                                                        <li class="all-category-li">
                                                                                                            <span class="color-gray">Fish And Chips</span>
                                                                                                        </li>
                                                                                                        <li class="all-category-li">
                                                                                                            <span class="color-gray">Fish And Chips</span>
                                                                                                        </li>
                                                                                                        <li class="all-category-li">
                                                                                                            <span class="color-gray">Fish And Chips</span>
                                                                                                        </li>
                                                                                                        <li class="all-category-li">
                                                                                                            <span class="color-gray">Fish And Chips</span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="all-question-div">
                                                                                                <div class="all-question-div-outer">
                                                                                                    <div class="all-question-div-inner">
                                                                                                        <div class="single-question-outer">
                                                                                                            Why choose us?
                                                                                                        </div>
                                                                                                        <div class="single-question-outer">
                                                                                                            For future use
                                                                                                        </div>
                                                                                                        <div class="single-question-outer">
                                                                                                            For future use
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
                                                                                                <img src="{{asset('public/assets/images/home/image-001.jpg')}}" alt="">
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
                                                        <?php } ?>

                                                        <!-- <div class="all-searchs-main-all-search-inner">
                                                            <div class="all-searchs-main-single-search">
                                                                <div class="all-searchs-main-single-search-outer">
                                                                    <div class="all-searchs-main-single-search-inner">
                                                                        <div class="">
                                                                            <div class="all-searchs-main-single-search-main">
                                                                                <div class="single-search-main-user-div">
                                                                                    <div class="single-search-main-user-div-inner">
                                                                                        <div class="single-search-main-user-div-main">
                                                                                            <div class="single-search-main-restaurant-image">
                                                                                                <div class="single-search-main-restaurant-image-main">
                                                                                                    <img src="{{asset('public/assets/images/home/image-005.jpg')}}" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="single-search-main-user-review">
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
                                                                                                                            <img src="{{asset('public/assets/images/home/image-006.jpg')}}" alt="">
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
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
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
                                                                                                <div class="single-search-main-info-title">
                                                                                                    Sagar Vegetarian & Vegan Restaurant
                                                                                                </div>
                                                                                                <div class="single-search-main-info-cate-title">
                                                                                                    <div class="single-search-main-info-left-side-text">
                                                                                                        Taste is abouve all things
                                                                                                    </div>
                                                                                                    <span class='side-devider'>|</span>
                                                                                                    <div class="single-search-main-info-right-side-text color-blue">
                                                                                                        African Restaurants
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-share-buttons">
                                                                                                    <div class="all-share-buttons-inner">
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="address-div">
                                                                                                    <div class="address-div-outer">
                                                                                                        <div class="address-div-inner">
                                                                                                            <div class="address-div-icon color-gray">
                                                                                                                <span class="ti-location-pin"></span>
                                                                                                            </div>
                                                                                                            <div class="address-div-deistance color-blue">
                                                                                                                2.3 mi
                                                                                                            </div>
                                                                                                            <span class='side-devider color-blue'>|</span>
                                                                                                            <div class="address-div-text color-blue">
                                                                                                                1 Kentish Town Rd, London, NW1 8NH
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
                                                                                                                <span class="color-orange">Closed</span> <span class="color-gray">Opens at 11:00</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-category-div">
                                                                                                    <div class="all-category-div-inner">
                                                                                                        <ul class="all-category-ul">
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-question-div">
                                                                                                    <div class="all-question-div-outer">
                                                                                                        <div class="all-question-div-inner">
                                                                                                            <div class="single-question-outer">
                                                                                                                Why choose us?
                                                                                                            </div>
                                                                                                            <div class="single-question-outer">
                                                                                                                For future use
                                                                                                            </div>
                                                                                                            <div class="single-question-outer">
                                                                                                                For future use
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
                                                                                                    <img src="{{asset('public/assets/images/home/image-004.jpg')}}" alt="">
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
                                                        </div>
                                                        <div class="all-searchs-main-all-search-inner">
                                                            <div class="all-searchs-main-single-search">
                                                                <div class="all-searchs-main-single-search-outer">
                                                                    <div class="all-searchs-main-single-search-inner">
                                                                        <div class="">
                                                                            <div class="all-searchs-main-single-search-main">
                                                                                <div class="single-search-main-user-div">
                                                                                    <div class="single-search-main-user-div-inner">
                                                                                        <div class="single-search-main-user-div-main">
                                                                                            <div class="single-search-main-restaurant-image">
                                                                                                <div class="single-search-main-restaurant-image-main">
                                                                                                    <img src="{{asset('public/assets/images/home/image-002.jpg')}}" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="single-search-main-user-review">
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
                                                                                                                            <img src="{{asset('public/assets/images/home/image-010.jpg')}}" alt="">
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
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
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
                                                                                                <div class="single-search-main-info-title">
                                                                                                    Nazmins Indian Restaurant Ltd
                                                                                                </div>
                                                                                                <div class="single-search-main-info-cate-title">
                                                                                                    <div class="single-search-main-info-left-side-text">
                                                                                                        Taste is abouve all things
                                                                                                    </div>
                                                                                                    <span class='side-devider'>|</span>
                                                                                                    <div class="single-search-main-info-right-side-text color-blue">
                                                                                                        African Restaurants
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-share-buttons">
                                                                                                    <div class="all-share-buttons-inner">
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="address-div">
                                                                                                    <div class="address-div-outer">
                                                                                                        <div class="address-div-inner">
                                                                                                            <div class="address-div-icon color-gray">
                                                                                                                <span class="ti-location-pin"></span>
                                                                                                            </div>
                                                                                                            <div class="address-div-deistance color-blue">
                                                                                                                2.3 mi
                                                                                                            </div>
                                                                                                            <span class='side-devider color-blue'>|</span>
                                                                                                            <div class="address-div-text color-blue">
                                                                                                                1 Kentish Town Rd, London, NW1 8NH
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
                                                                                                                <span class="color-orange">Closed</span> <span class="color-gray">Opens at 11:00</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-category-div">
                                                                                                    <div class="all-category-div-inner">
                                                                                                        <ul class="all-category-ul">
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-question-div">
                                                                                                    <div class="all-question-div-outer">
                                                                                                        <div class="all-question-div-inner">
                                                                                                            <div class="single-question-outer">
                                                                                                                Why choose us?
                                                                                                            </div>
                                                                                                            <div class="single-question-outer">
                                                                                                                For future use
                                                                                                            </div>
                                                                                                            <div class="single-question-outer">
                                                                                                                For future use
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
                                                                                                    <img src="{{asset('public/assets/images/home/image-007.jpg')}}" alt="">
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
                                                        </div>
                                                        <div class="all-searchs-main-all-search-inner">
                                                            <div class="all-searchs-main-single-search">
                                                                <div class="all-searchs-main-single-search-outer">
                                                                    <div class="all-searchs-main-single-search-inner">
                                                                        <div class="">
                                                                            <div class="all-searchs-main-single-search-main">
                                                                                <div class="single-search-main-user-div">
                                                                                    <div class="single-search-main-user-div-inner">
                                                                                        <div class="single-search-main-user-div-main">
                                                                                            <div class="single-search-main-restaurant-image">
                                                                                                <div class="single-search-main-restaurant-image-main">
                                                                                                    <img src="{{asset('public/assets/images/home/image-002.jpg')}}" alt="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="single-search-main-user-review">
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
                                                                                                                            <img src="{{asset('public/assets/images/home/image-014.jpg')}}" alt="">
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
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
                                                                                                                                    <span class="ti-star"></span>
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
                                                                                                <div class="single-search-main-info-title">
                                                                                                    Pizza Time Thornton Heath
                                                                                                </div>
                                                                                                <div class="single-search-main-info-cate-title">
                                                                                                    <div class="single-search-main-info-left-side-text">
                                                                                                        Taste is abouve all things
                                                                                                    </div>
                                                                                                    <span class='side-devider'>|</span>
                                                                                                    <div class="single-search-main-info-right-side-text color-blue">
                                                                                                        African Restaurants
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-share-buttons">
                                                                                                    <div class="all-share-buttons-inner">
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                        <button class="button-icon">
                                                                                                            <span class="ti-search"></span>
                                                                                                            Whatsapp
                                                                                                        </button>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="address-div">
                                                                                                    <div class="address-div-outer">
                                                                                                        <div class="address-div-inner">
                                                                                                            <div class="address-div-icon color-gray">
                                                                                                                <span class="ti-location-pin"></span>
                                                                                                            </div>
                                                                                                            <div class="address-div-deistance color-blue">
                                                                                                                2.3 mi
                                                                                                            </div>
                                                                                                            <span class='side-devider color-blue'>|</span>
                                                                                                            <div class="address-div-text color-blue">
                                                                                                                1 Kentish Town Rd, London, NW1 8NH
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
                                                                                                                <span class="color-orange">Closed</span> <span class="color-gray">Opens at 11:00</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-category-div">
                                                                                                    <div class="all-category-div-inner">
                                                                                                        <ul class="all-category-ul">
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                            <li class="all-category-li">
                                                                                                                <span class="color-gray">Fish And Chips</span>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="all-question-div">
                                                                                                    <div class="all-question-div-outer">
                                                                                                        <div class="all-question-div-inner">
                                                                                                            <div class="single-question-outer">
                                                                                                                Why choose us?
                                                                                                            </div>
                                                                                                            <div class="single-question-outer">
                                                                                                                For future use
                                                                                                            </div>
                                                                                                            <div class="single-question-outer">
                                                                                                                For future use
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
                                                                                                    <img src="{{asset('public/assets/images/home/image-011.jpg')}}" alt="">
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
                                                        </div> -->
                                                    </div>
                                                    <div class="page-pagintation-div">
                                                        <div class="page-pagintation-div-outer">
                                                            <div class="page-pagintation-div-inner">
                                                                <div class="pagination-button">
                                                                    <span class="background-gray">Previous</span>
                                                                </div>
                                                                <div class="pagination-navigation">
                                                                    <ul class="pagination-navigation-ul">
                                                                        <li class="pagination-navigation-li"><span class="background-orange">1</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">2</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">3</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">4</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">5</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">6</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">7</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">8</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">9</span></li>
                                                                        <li class="pagination-navigation-li"><span class="background-gray">10</span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pagination-button">
                                                                    <span class="background-orange">Next</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-box-get-started">
                                                        <div class="bottom-box-get-started-outer">
                                                            <div class="bottom-box-get-started-inner">
                                                                <div class="bottom-box-get-started-text">
                                                                    Business not here?
                                                                </div>
                                                                <div class="bottom-box-get-started-bottom-text">
                                                                    Is the business you’re looking for not listed? Tell us what we’re missing
                                                                </div>
                                                                <div class="bottom-box-get-started-button">
                                                                    <button>Add a business</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('site-layout.footer')
    @include('site-layout.script')
</body>
</html>
