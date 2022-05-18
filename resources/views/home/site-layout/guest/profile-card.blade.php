<div class="guest-user-profile-card">
    <div class="guest-user-profile-card-outer">
        <div class="guest-user-profile-card-inner">
            <div class="guest-user-profile-card-image">
                <div class="guest-user-profile-card-image-outer">
                    <div class="guest-user-profile-card-image-inner">
                        @if($guest_data->profile_image != '')
                            <img src="{{asset('business/user-profile/profile')}}/{{$guest_data->profile_image}}" alt="">
                        @else
                            <img src="{{asset('business/assets/images/guest-profile/user.png')}}" alt="">
                        @endif
                    </div>
                </div>
            </div>
            <div class="guest-user-profile-card-name">
                {{$guest_data->first_name}} {{$guest_data->last_name}}
            </div>
            <div class="guest-user-profile-card-edit-button">
                <form action="{{url('guest/profile/update/profile-image')}}" method='POST' enctype="multipart/form-data" class='d-none'>
                    @csrf
                    <input type="file" name='profile_image' id='profile-image'>
                    <input type="submit" id='profile-form'>
                </form>
                <a href="#" id='change_profile'>
                    <span class="icon"><img src="{{asset('business/assets/images/icons/edit-white.png')}}" alt=""></span>
                    <span class="text">Edit Your Profile Image</span>
                </a>
            </div>
            <div class="guest-user-profile-card-join-date">
                Member since 2021
            </div>
            <div class="guest-user-profile-card-location">
                <span class="icon"><img src="{{asset('business/assets/images/icons/location.png')}}" alt=""></span>
                <span class="text">{{$guest_data->country}}, {{$guest_data->city}}</span>
            </div>
            <div class="guest-user-profile-card-table">
                <div class="guest-user-profile-card-table-outer">
                    <div class="guest-user-profile-card-table-inner">
                        <ul class="guest-user-profile-card-table-ul">
                            <li class="guest-user-profile-card-table-li">
                                <span>Total Reviewed</span>
                                <span><?php echo count_total('listing_reviews',"WHERE user_id = ".$guest_data->id.""); ?></span>
                            </li>
                            <li class="guest-user-profile-card-table-li">
                                <span>Following Listings</span>
                                <span><?php echo count_total('following_listings',"WHERE user_id = ".$guest_data->id.""); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>