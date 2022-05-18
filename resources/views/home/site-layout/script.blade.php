<div class="mobile-menu-container">
    <div class="mobile-menu-container-outer">
        <div class="mobile-menu-container-inner">
            <div class="mobile-menu-box">
                <div class="site-logo-outer">
                    <div class="site-logo-inner mobile-navigation">
                        <div class="site-logo-main">
                            <a href="{{url('/')}}"><img src="{{asset('business/assets/images/logo/logo.png')}}" alt=""></a>
                        </div>
                        <div class="mobile-navigation-close-btn">
                            <span class='ti-close'></span>
                        </div>
                    </div>
                </div>
                <ul class='mobile-menu-ul'>
                    @if(Auth::check())
                        @if(auth()->user()->user_portal == "profile")
                            <li class='mobile-menu-li'><a href="{{url('guest/profile')}}">Profile</a></li>
                            <li class='mobile-menu-li'><a href="{{url('guest/profile/reviews')}}">Reviews</a></li>
                            <li class='mobile-menu-li'><a href="{{url('guest/logout')}}" class='text-danger'>Logout</a></li>
                        @elseif(auth()->user()->user_portal == "dashboard")
                            <li class='mobile-menu-li'><a href="{{url('dashboard')}}">Dashboard</a></li>
                            <li class='mobile-menu-li'><a href="{{url('logout')}}" class='text-danger'>Logout</a></li>
                        @endif
                    @else{
                        <li class='mobile-menu-li'><a href="{{url('guest/login')}}">Login</a></li>
                        <li class='mobile-menu-li'><a href="{{url('guest/signup')}}">Sign Up</a></li>
                    @endif
                    <li class='mobile-menu-li'><a href="{{url('/')}}">Sahaa.me</a></li>
                    <li class='mobile-menu-li'><a href="{{url('/membership')}}">Shaaa Promotion</a></li>
                    <li class='mobile-menu-li'><a href="{{url('/sahaa-app')}}">Download the app</a></li>
                    <li class='mobile-menu-li'><a href="{{url('/add-listing-to-sahaa')}}">Get a free Listing</a></li>
                </ul>
                <div class="advertise-email-div">
                    <a href="mailto:advertise@sahaa.me">
                        <span class="mail-icon">
                            <span class="ti-email text-success"></span>
                        </span>
                        <span class="text">Adertise with Sahaa: advertise@sahaa.me</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('business/assets/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('business/assets/lib/jquery/jquery-ui.js')}}"></script>
<script src="{{asset('business/assets/lib/slider/owl/owl.js')}}"></script>
<script src="{{asset('business/assets/lib/lazy-loading/jquery.lazy.min.js')}}"></script>
<script>
    $(document).ready(function(){
        // setTimeout(function(){
            var slider_timer = setInterval(function() {
                move_slider();
            }, 3000);
        // }, 1000 );
        $('.slider-controller-inner .dot').click(function(){
            var slide_show = $(this).attr('data-slide');
            var slide_image = $(this).attr('data-image');
            $('.home-slide-images-outer').removeClass('image-slide-down-animation');
            $('.home-slide-images-outer').removeClass('animate__animated').removeClass('animate__fadeInDown');
            $('.home-slide-images-outer').addClass('animate__animated').addClass('animate__fadeOutDown');
            setTimeout(function(){
                $('.home-slide-images-single').hide();
                $(slide_image).show();
                $('.home-slide-images-outer').removeClass('animate__animated').removeClass('animate__fadeOutDown');
                $('.home-slide-images-outer').addClass('animate__animated').addClass('animate__fadeInDown');
            }, 150);
            $('.home-page-slider-slide').removeClass('active').removeClass('slide-down-animation');
            $('.slider-controller-inner .dot').removeClass('active');
            $(this).addClass('active');
            $(slide_show).addClass('slide-down-animation');
            clearInterval(slider_timer);
            slider_timer = setInterval(function() {
                move_slider();
            }, 3000);
        });


        // home-slide-images-outer image-slide-down-animation
        function move_slider() {
            var current_dot = $('.slider-controller-inner span.active').index();
            current_dot = current_dot+2;
            current_dot = (current_dot > 4 ) ? 0 : current_dot ;
            var next_dot = $('.slider-controller-inner span:eq('+current_dot+')');
            var slide_show = next_dot.attr('data-slide');
            var slide_image = next_dot.attr('data-image');
            $('.home-slide-images-outer').removeClass('image-slide-down-animation');
            $('.home-slide-images-outer').removeClass('animate__animated').removeClass('animate__fadeInDown');
            $('.home-slide-images-outer').addClass('animate__animated').addClass('animate__fadeOutDown');
            setTimeout(function(){
                $('.home-slide-images-single').hide();
                $(slide_image).show();
                $('.home-slide-images-outer').removeClass('animate__animated').removeClass('animate__fadeOutDown');
                $('.home-slide-images-outer').addClass('animate__animated').addClass('animate__fadeInDown');
            }, 150);
            $('.home-page-slider-slide').removeClass('active').removeClass('slide-down-animation');
            $('.slider-controller-inner .dot').removeClass('active');
            next_dot.addClass('active');
            $(slide_show).addClass('slide-down-animation');
        }

        
    });
    $('.show-content').click(function() {
        $('.show-form-field').hide();
        var show_class = $(this).attr('data-class');
        var show_title = $(this).attr('data-title');
        $(show_class).show();
        $('.step-text-main').html(show_title);
    });

    // Modal Script
    $(document).ready(function(){
        $('.member-ship-plan-table-col-outer.click').click(function(){
            var modal_show = $(this).attr('data-modal');
            console.log(modal_show);
            $('body').addClass('member-ship-modal-open');
            $(modal_show).show();
        });

        $('.member-ship-plan-table-plan-detail-li.click').click(function(){
            var modal_show = $(this).attr('data-modal');
            $('body').addClass('member-ship-modal-open');
            $(modal_show).fadeIn();
        });

        $('.modal-close-button').click(function(){
            $('.member-ship-modal').fadeOut();
            $('body').removeClass('member-ship-modal-open');
        });
    });

    // Review Script
    var reviews = {
        "reviews": [{
            "name": "FHC Group",
            "review": "It was a great experience with Sahaa, who guided me and assisted me in running my business smoothly.",
            "logo": "{{asset('business/assets/images/membership-review/fhc.png')}}"

        }, {
            "name": "Sky Junction",
            "review": "I'm having a business of Travel and was worried about its promotion. Sahaa business advisor helps me generate an online presence and grow my business all over the U.A.E.",
            "logo": "{{asset('business/assets/images/membership-review/sky-junction.png')}}"

        }, {
            "name": "Balqees Abbaya ",
            "review": "They guide everything with professionalism and friendliness.",
            "logo": "{{asset('business/assets/images/membership-review/balqees.png')}}"

        }, {
            "name": "Qamar Printing",
            "review": "On Sahaa, I had a positive experience with the Customers, and I highly recommend it.",
            "logo": "{{asset('business/assets/images/membership-review/al-qamar.png')}}"

        }]
    };

    $(document).ready(function(){
        var reviews_obj = reviews.reviews;
        var main_review_obj = 0;
        var next_review_obj = 1;
        var prev_review_obj = (reviews_obj.length)-1;

        $('.prev-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
        $('.next-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
        
        $('.review-image-div').attr('src',reviews_obj[main_review_obj].logo);
        $('.prev-review-image-div').attr('src',reviews_obj[prev_review_obj].logo);
        $('.next-review-image-div').attr('src',reviews_obj[next_review_obj].logo);

        $('.review-text-div').html(reviews_obj[main_review_obj].review);
        $('.review-name-div').html(reviews_obj[main_review_obj].name);

        $('.next-review').click(function(){
            prev_review_obj = parseInt($(this).attr('data-main'));
            main_review_obj = parseInt($(this).attr('data-next'));
            next_review_obj = main_review_obj+1;
            
            if(!(next_review_obj < reviews_obj.length)){next_review_obj=(0)}
            $('.prev-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
            $('.next-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
            $('.review-image-div').attr('src',reviews_obj[main_review_obj].logo).fadeIn(1000);
            $('.prev-review-image-div').attr('src',reviews_obj[prev_review_obj].logo).fadeIn(1000);
            $('.next-review-image-div').attr('src',reviews_obj[next_review_obj].logo).fadeIn(1000);

            $('.review-text-div').html(reviews_obj[main_review_obj].review);
            $('.review-name-div').html(reviews_obj[main_review_obj].name);


        });

        $('.prev-review').click(function(){
            prev_review_obj = parseInt($(this).attr('data-prev'))-1;
            main_review_obj = parseInt($(this).attr('data-prev'));
            next_review_obj = parseInt($(this).attr('data-main'));
            if(!(next_review_obj < reviews_obj.length)){next_review_obj=(0)}
            if((prev_review_obj < 0)){prev_review_obj=(reviews_obj.length)-1}

            $('.prev-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);
            $('.next-review').attr('data-main',main_review_obj).attr('data-next',next_review_obj).attr('data-prev',prev_review_obj);


            $('.review-image-div').attr('src',reviews_obj[main_review_obj].logo).fadeIn(1000);
            $('.prev-review-image-div').attr('src',reviews_obj[prev_review_obj].logo).fadeIn(1000);
            $('.next-review-image-div').attr('src',reviews_obj[next_review_obj].logo).fadeIn(1000);

            $('.review-text-div').html(reviews_obj[main_review_obj].review);
            $('.review-name-div').html(reviews_obj[main_review_obj].name);

        });
    });

    $('.mobile-navigation-close-btn').click(function() {
    $('.mobile-menu-container').hide();
    $('body').removeClass('body-show-mobile-nav');
})

$('.menu-icon').click(function() {
    $('.mobile-menu-container').fadeIn();
    $('body').addClass('body-show-mobile-nav');
})

$(document).ready(function() {
    $("#search-button") .click(function() {
        var term_val = $('#search-term').val();
        var location_val = $('#search-location').val();
        term_val = (term_val == '') ? '' : term_val;
        location_val = (location_val == '') ? '' : location_val;
        window.location.href = "{{url('business/search')}}?meta=&category=&term="+term_val+"&location="+location_val+"&services=";
    });

    $("#search-button-mob") .click(function() {
        var term_val = $('#search-term-mob').val();
        var location_val = $('#search-location-mob').val();
        term_val = (term_val == '') ? '' : term_val;
        location_val = (location_val == '') ? '' : location_val;
        window.location.href = "{{url('business/search')}}?meta=&category=&term="+term_val+"&location="+location_val+"&services=";
    });
});
</script>