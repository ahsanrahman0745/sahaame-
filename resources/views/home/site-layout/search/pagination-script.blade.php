<script>
    var pagination = JSON.parse('<?php echo $pagination_json?>');
    var listings_per_page = pagination.per_page;
    var total_listings = pagination.total_listings;
    var total_pages = pagination.pages;
    $('.goto-page').click(function() {
        window.scrollTo(0, 0)
        var element = $(this);
        setTimeout(function(){
            var page_num = parseInt(element.attr('data-page'));
            var next_page = page_num+1;
            var prev_page = page_num-1;

            // Start Hide Navs
            var start_nav = 0;
            var hide_from_start = page_num-5;
            var hide_from_end = hide_from_start+5;
            for (i=0; i<total_pages; i++) {
                if(i == 0 && i < hide_from_start) {
                    $('.moving-nav:eq('+i+')').addClass('hide-this');
                } else if(i > hide_from_start && i < hide_from_end){
                    $('.moving-nav:eq('+i+')').removeClass('hide-this');
                } else {
                    $('.moving-nav:eq('+i+')').addClass('hide-this');
                }
            }
            $('.goto-seprater-start').show();
            var total_navs = $('.goto-li').length;
            // End hide Nav

            var current_page = parseInt($('.pagination-ul').attr('data-currentpage'));
            prev_page = (prev_page < 1) ? 1 : prev_page ;
            next_page = (next_page > total_pages) ? total_pages : next_page ;
            if (page_num != current_page && page_num != 0) {
                $('.goto-page.goto-li span').removeClass('background-orange').addClass('background-gray');
                $('.goto-page.next').attr('data-page',next_page);
                $('.goto-page.prev').attr('data-page',prev_page);
                $('.pagination-ul').attr('data-currentpage',page_num)
                $('#page-num').html(page_num)
                $('.goto-page.goto-li').each(function() {
                    var current_page_num = parseInt($(this).attr('data-page'));
                    if (current_page_num == page_num) {
                        $(this).children('span').removeClass('background-gray').addClass('background-orange');
                    }
                });
                var end_rang = listings_per_page*page_num;
                var start_range = (end_rang-listings_per_page)+1;
                console.log(start_range+" | "+end_rang);
                $('.single-listings').hide();
                for (var i=start_range; i<=end_rang; i++) {
                    $('.single-listing-'+i+'').fadeIn(500);
                }
            }
        }, 500);
    });

    $('.field-close-icon').click(function() {
       $(this).siblings('input').val('')
    });

    // CSRF Token
  
    (function($) {
        var CSRF_TOKEN = $('input[name="_token"]').val();
        $(document).ready(function() {

            // $("#search-term").autocomplete({
            //     source: function(request, response) {
            //         // Fetch data
            //         $.ajax({
            //             url: "{{url('autocomplete/getAutocomplete')}}",
            //             type: 'post',
            //             dataType: "json",
            //             data: {
            //                 _token: CSRF_TOKEN,
            //                 search: request.term,
            //                 city: $('#search-term').val()
            //             },
            //             success: function(data) {
            //                 response(data);

            //             }
            //         });
            //     },
            //     select: function(event, ui) {
            //         $('#search-term').val(ui.item.label);
            //         return false;
            //     }
            // });
            $("#search-location").autocomplete({
                source: function(request, response) {
                    // Fetch data
                    $.ajax({
                        url: "{{url('autocomplete/getAutocompletecity')}}",
                        type: 'post',
                        dataType: "json",
                        data: {
                            _token: CSRF_TOKEN,
                            search: request.term
                        },
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {
                    $('#search-location').val(ui.item.label);
                    return false;
                }
            });
        });

    }(jQuery));
</script>