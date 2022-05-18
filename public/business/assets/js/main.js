let category_filter = true;
let ranking_filter = true;
$('#category_toggle').click(function(e) {
    e.preventDefault();
    // alert("");
    if (category_filter) {
        $('.category_filter').slideUp('slow');
        category_filter = false;
        $(this).find('i').addClass('fa-chevron-down').removeClass('fa-chevron-up');
    } else {
        $(this).find('i').addClass('fa-chevron-up').removeClass('fa-chevron-down');
        category_filter = true;
        $('.category_filter').slideDown('slow');
    }
})

$('#ranking_toggle').click(function(e) {
    e.preventDefault();
    // alert("");
    if (ranking_filter) {
        $('.ranking_filter').slideUp('slow');
        ranking_filter = false;
        $(this).find('i').addClass('fa-chevron-down').removeClass('fa-chevron-up');
    } else {
        $(this).find('i').addClass('fa-chevron-up').removeClass('fa-chevron-down');
        ranking_filter = true;
        $('.ranking_filter').slideDown('slow');
    }
})