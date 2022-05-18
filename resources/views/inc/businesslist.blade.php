@foreach ( $listings as $lists )

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
   @if($lists->logo)


                         <img src="storage/{{$lists->logo}}" alt="">
                        @else
                      <img src="assets/images/home/image-005.jpg" alt="">
                        @endif
                                        
                                    </div>
                                </div>
                                <div class="single-search-main-user-review">
                                @php
$c= intval($lists->starts);
@endphp
                                @if($lists->starts)
<div class="rating-wapper">
<ul>
@for($i=1;$i<=$c; $i++)
<li><img src="assets/icons/star.png" height="20" alt=""></li>

@endfor
</ul>
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


                      <div class="charaterpic">{{ substr($lists->name,0,1) }} {{ $lists->rank }}</div>
                  




                                                              
                                                            </div>
                                                        </div>
                                                        <div class="single-search-main-user-review-user-text">
                                                            <div class="single-search-main-user-review-text-inner">
                                                               “Lorem ipsum dolor sit amet, consectetuer 
adipiscing elit, sed diam nonummy nibh 
euismod tincidunt ut laoreet dolore magna 
aliquam erat volutpat.”

                                                            </div>
                                                        </div>
                                                        <div class="single-search-main-user-review-rateing">
                                                            <div class="single-search-main-user-review-rating-inner">
                                                                <div class="single-search-main-user-review-rating-main">
                                                                    <div
                                                                        class="single-search-main-user-review-rating-stars">
                                                                        <span class="ti-star"></span>
                                                                        <span class="ti-star"></span>
                                                                        <span class="ti-star"></span>
                                                                        <span class="ti-star"></span>
                                                                        <span class="ti-star"></span>
                                                                    </div>
                                                                    <div
                                                                        class="single-search-main-user-review-rating-text">
                                                                        <span class="rating">5.0</span>
                                                                        <span class="total-review">(13)</span>
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
                                        {{ $lists->name }} @if($lists->varified)
                                     <img src="assets/icons/verified.png" height="24" style="margin-top:-10px;">
                                        @else
                                            
                                        @endif
                                    </div>
                                    <div class="single-search-main-info-cate-title">
                                        <div class="single-search-main-info-left-side-text">


                                            {{ substr($lists->short_desc,0,20) }}
                                        </div>
                                        <span class='side-devider'>|</span>
                                        <div class="single-search-main-info-right-side-text color-blue">
                                            {{ $lists->pcategories }}
                                        </div>
                                    </div>
                                    <div class="all-share-buttons">
                                        <div class="all-share-buttons-inner">
                                            <a href="https://wa.me/{{ $lists->whatsapp}}" class="button-icon"
                                                style="margin-right: 5px;">
                                               <img src="assets/icons/whatsapp.png" height="36">
                                            </a>
                                            <a href="tel:{{ $lists->phone}}" class="button-icon"
                                                style="margin-right: 5px;">
                                                <img src="assets/icons/callus.png" height="36">
                                            </a>
                                            <a href="mailto:{{ $lists->email}}" class="button-icon"
                                                style="margin-right: 5px;">
                                               <img src="assets/icons/email.png" height="36">
                                            </a>
                                            <a href="http://m.me/{{ $lists->website}}" class="button-icon"
                                                style="margin-right: 5px;">
                                            
                                                <img src="assets/icons/messanger.png" height="36">
                                            </a>
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

                                                    {{ substr($lists->office,0,30) }} {{ substr($lists->floor,0,30) }}
                                                    {{ substr($lists->buildingname,0,30) }}
                                                    {{ substr($lists->streetname,0,30) }}
                                                    {{ substr($lists->area,0,30) }}
                                                    , {{ $lists->city}} ,{{ $lists->country}}

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
                                                    <span class="color-orange">Closed</span>
                                                    <span class="color-gray">
                                                    @php 
                                                    $day=strtolower(date('D'));
                                                    @endphp

                                                                                                        Opens at {{ $lists->{$day.'_open_time'} }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="all-category-div">
                                        <div class="all-category-div-inner">
                                            @php
                                            {{ $tags=explode(',',$lists->tags); }}
                                            @endphp

                                            <ul class="all-category-ul">
                                                <!-- @foreach ( $tags as $t )

                                              
                                                <li class="all-category-li">
                                                    <span class="color-gray">{{ $t }}</span>
                                                </li>
                                              
                                                @endforeach -->

                                                @if($lists->stitle_1)
                                                <li class="all-category-li">
                                                    <span class="color-gray">{{$lists->stitle_1}}</span>
                                                </li>
                                                @endif
                                                @if($lists->stitle_2)
                                                <li class="all-category-li">
                                                    <span class="color-gray">{{$lists->stitle_2}}</span>
                                                </li>
                                                @endif
                                                @if($lists->stitle_3)
                                                <li class="all-category-li">
                                                    <span class="color-gray">{{$lists->stitle_3}}</span>
                                                </li>
                                                @endif
                                                @if($lists->stitle_4)
                                                <li class="all-category-li">
                                                    <span class="color-gray">{{$lists->stitle_4}}</span>
                                                </li>
                                                @endif
                                                @if($lists->stitle_5)
                                                <li class="all-category-li">
                                                    <span class="color-gray">{{$lists->stitle_5}}</span>
                                                </li>
                                                @endif
                                                 @if($lists->stitle_6)
                                                <li class="all-category-li">
                                                    <span class="color-gray">{{$lists->stitle_6}}</span>
                                                </li>
                                                @endif

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="all-question-div">
                                        <div class="all-question-div-outer">
                                            <div class="all-question-div-inner">
                                                <div class="single-question-outer">
                                                    <a class="listingfooter" href="#">Give us Review</a>
                                                </div>
                                                <div class="single-question-outer">
                                                   <a class="listingfooter" href="#">Give us Suggestions</a>
                                                </div>
                                                <div class="single-question-outer">
                                                <a class="listingfooter" href="#">Report</a>
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
                                      @if($lists->snipshot)
                                        <img src="storage/{{$lists->snipshot}}" alt="">
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
@endforeach