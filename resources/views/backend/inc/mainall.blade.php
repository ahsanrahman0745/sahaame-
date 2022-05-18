<!-- all-searchs-main-all-search -->
<div class="all-searchs-main-all-search">
    <div class="all-searchs-main-all-search-outer">

        @include('backend.inc.businesslist')

        <!-- example -->


    </div>


    <div class="d-flex justify-content-center page-pagintation-div">

        {!! $listings->links() !!}
    </div>
@if(!$listings->links())
    <div class="bottom-box-get-started">
        <div class="bottom-box-get-started-outer">
            <div class="bottom-box-get-started-inner">
                <div class="bottom-box-get-started-text">
                    Business not here?
                </div>
                <div class="bottom-box-get-started-bottom-text">
                    Is the business you’re looking for not listed? Tell
                    us what we’re missing
                </div>
                <div class="bottom-box-get-started-button">
                    <button>Add a business</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- end -->