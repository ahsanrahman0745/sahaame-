<script src="{{asset('public/assets/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('public/assets/lib/slider/owl/owl.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.slider-controller-inner .dot').click(function(){
            var slide_show = $(this).attr('data-slide');
            var slide_image = $(this).attr('data-image');
            $('.home-section').css({'background-image':'url('+slide_image+')'});
            $('.home-page-slider-slide').hide().removeClass('active');
            $('.slider-controller-inner .dot').removeClass('active');
            $(this).addClass('active');
            $(slide_show).hide('active');
            $(slide_show).slideDown();
        });

        function move_slider() {
            var current_dot = $('.slider-controller-inner span.active').index();
            current_dot = current_dot+2;
            current_dot = (current_dot > 4 ) ? 0 : current_dot ;
            var next_dot = $('.slider-controller-inner span:eq('+current_dot+')');
            var slide_show = next_dot.attr('data-slide');
            var slide_image = next_dot.attr('data-image');
            $('.home-section').css({'background-image':'url('+slide_image+')'});
            $('.home-page-slider-slide').hide().removeClass('active');
            $('.slider-controller-inner .dot').removeClass('active');
            next_dot.addClass('active');
            $(slide_show).hide('active');
            $(slide_show).slideDown();
        }

        setInterval(function() {
            move_slider();
        }, 2000);
    });
    $('.show-content').click(function() {
        $('.show-form-field').hide();
        var show_class = $(this).attr('data-class');
        var show_title = $(this).attr('data-title');
        $(show_class).show();
        $('.step-text-main').html(show_title);
    });
</script>