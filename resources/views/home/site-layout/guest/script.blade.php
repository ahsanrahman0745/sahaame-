<script>
    $(document).ready(function() {
        $('#replace-banner').click(function() {
           $('#banner-image').trigger('click');
        });

        $('#banner-image').change(function() {
            $('#banner-form').trigger('click');
        });

        $('#change_profile').click(function() {
           $('#profile-image').trigger('click');
        });

        $('#profile-image').change(function() {
            $('#profile-form').trigger('click');
        });
    })
</script>