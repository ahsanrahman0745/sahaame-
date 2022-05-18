<div class="guest-user-profile-banner">
    <div class="guest-user-profile-banner-outer" style="background-image:url({{asset('business/user-profile/banner')}}/{{$guest_data->banner_image}})">
        <div class="guest-user-profile-banner-inner">
            <div class="guest-user-profile-banner-overlay">
                <div class="guest-user-profile-banner-overlay-outer">
                    <div class="guest-user-profile-banner-overlay-inner">
                        <div class="guest-user-profile-banner-top-text">
                            Replace Banner Image
                        </div>
                        <div class="guest-user-profile-banner-size-text">
                            Optimal dimensions 3200 x 410px 
                        </div>
                        <div class="guest-user-profile-banner-action">
                            <div class="guest-user-profile-banner-action-outer">
                                <div class="guest-user-profile-banner-action-inner">
                                    <button class='replace' id='replace-banner'>Replace Image</button>
                                    <form action="{{url('guest/profile/update/banner')}}" method='POST' enctype="multipart/form-data" class='d-none'>
                                        @csrf
                                        <input type="file" name='banner' id='banner-image'>
                                        <input type="submit" id='banner-form'>
                                    </form>
                                    <!-- <button class='remove'>Remove</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>