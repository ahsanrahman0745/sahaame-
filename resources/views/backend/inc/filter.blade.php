                                <!-- all-searchs-main-filter -->
                                <div class="all-searchs-main-filter">
                                    <div class="all-searchs-main-filter-outer">
                                        <div class="all-searchs-main-filter-inner">
                                            <div class="all-searchs-main-filter-map">
                                                <div class="all-searchs-main-filter-map-outer">
                                                    <div class="all-searchs-main-filter-map-inner">
                                                        <img src="{{asset('assets/images/home/image-000.jpg')}}" alt="">
                                                        <div class="all-searchs-main-filter-map-overlay">
                                                            <div class="all-searchs-main-filter-map-overly-inner">
                                                                <div class="all-searchs-main-filter-map-overly-text">
                                                                    <span class="ti-location-pin"></span>
                                                                    <span class="overly-text">View
                                                                        Map</span>
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
                                                                @foreach($side_cat as $sc)
                                                                    <li class="all-category-option-main-list-li">
                                                                        <div
                                                                            class="all-category-option-main-list-option-div">
                                                                            <div
                                                                                class="all-category-option-main-list-check">
                                                                                <input type="checkbox">
                                                                            </div>
                                                                            <div
                                                                                class="all-category-option-main-list-text color-gray">
                                                                               {{$sc}}
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    @endforeach
                                                                    
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
                                                                        <div
                                                                            class="all-category-option-main-list-option-div">
                                                                            <div
                                                                                class="all-category-option-main-list-check">
                                                                                <input type="checkbox">
                                                                            </div>
                                                                            <div
                                                                                class="all-category-option-main-list-text color-gray">
                                                                                Websites</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="all-category-option-main-list-li">
                                                                        <div
                                                                            class="all-category-option-main-list-option-div">
                                                                            <div
                                                                                class="all-category-option-main-list-check">
                                                                                <input type="checkbox">
                                                                            </div>
                                                                            <div
                                                                                class="all-category-option-main-list-text color-gray">
                                                                                Photos</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="all-category-option-main-list-li">
                                                                        <div
                                                                            class="all-category-option-main-list-option-div">
                                                                            <div
                                                                                class="all-category-option-main-list-check">
                                                                                <input type="checkbox">
                                                                            </div>
                                                                            <div
                                                                                class="all-category-option-main-list-text color-gray">
                                                                                Reviews</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="all-category-option-main-list-li">
                                                                        <div
                                                                            class="all-category-option-main-list-option-div">
                                                                            <div
                                                                                class="all-category-option-main-list-check">
                                                                                <input type="checkbox">
                                                                            </div>
                                                                            <div
                                                                                class="all-category-option-main-list-text color-gray">
                                                                                Messaging</div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="all-category-option-main-list-li">
                                                                        <div
                                                                            class="all-category-option-main-list-option-div">
                                                                            <div
                                                                                class="all-category-option-main-list-check">
                                                                                <input type="checkbox">
                                                                            </div>
                                                                            <div
                                                                                class="all-category-option-main-list-text color-gray">
                                                                                Videos</div>
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
                                                        <img src="{{asset('assets/images/home/s2img1.JPG')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="side-bar-images-main">
                                                <div class="side-bar-images-main-outer">
                                                    <div class="side-bar-images-main-inner">
                                                        <img src="{{asset('assets/images/home/s2img2.JPG')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="side-bar-images-main">
                                                <div class="side-bar-images-main-outer">
                                                    <div class="side-bar-images-main-inner">
                                                        <img src="{{asset('assets/images/home/s3img3.JPG')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->