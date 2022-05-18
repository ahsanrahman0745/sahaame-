@extends('front.main')

@section('container')
<div class="container">
    <div class="main-page-header-inner">
        <div class="site-logo-outer-search">
            <div class="site-logo-outer">
                <div class="site-logo-inner">
                    <div class="site-logo-main">
                        <img src="{{url('assets/images/logo/logo.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="site-search-box-outer">
                <div class="site-search-box-inner">
                    <div class="site-search-box-main">
                        <div class="site-search-box-main-inner">
                            <div class="site-search-box-main-outer">
                                <div class="search-form-outer">
                                    <div class="search-form-inner">
                                        <form action="{{ route('searchlistingspage') }}" method="post">
                                            @csrf
                                            <div class="search-form-main">
                                                <div class="form-fiels-inner">
                                                    <div class="form-field-inner">
                                                        <div class="form-field-icon">
                                                            <div class="field-search-icon">
                                                                <span class="ti-search"></span>
                                                            </div>
                                                            <input type="text" name="business_search"
                                                                id="business_search" value="{{ $search }}"
                                                                placeholder="Restaurants">
                                                            <div class="field-close-icon">
                                                                <span class="ti-close"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-field-icon">
                                                            <div class="field-search-icon">
                                                                <span class="ti-location-pin"></span>
                                                            </div>
                                                            <input type="text" value="{{ $city }}" name="searchcity"
                                                                id="searchcity" placeholder="Dubai">
                                                            <div class="field-close-icon">
                                                                <span class="ti-close"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-field-button">
                                                            <button>Search</button>
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
            </div>
        </div>
        <div class="site-login-outer">
            <div class="site-login-inner">
                <div class="site-login-main">
                    <div class="site-login-icon-outer">
                        <div class="user-login-icon">
                            <span class="ti-user"></span>
                            <span class="login-text">Login</span>
                            <span class="ti-angle-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                @include('inc.filter')
                                @include('inc.mainall')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
