<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$page_title}}</title>
    <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CT19N7GEB1');
    </script>
    @include('home/site-layout.style')
</head>
<body>
@include('home/site-layout.top-bar')
    <section class="section-main-page">
        <div class="main-page-inner">
            <div class="main-page-inner-main">
                <div class="main-page-header">
                    <div class="container">
                        <div class="main-page-header-inner">
                            <div class="site-logo-outer-search">
                                <div class="site-logo-outer">
                                    <div class="site-logo-inner">
                                        <div class="site-logo-main">
                                            <a href="{{url('/')}}"><img src="{{asset('business/assets/images/logo/logo.png')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobile-navigation">
                                    <div class="mobile-navigation-outer">
                                        <div class="mobile-navigation-inner">
                                            <div class="user-icon">
                                                <span class="ti-user"></span>
                                            </div>
                                            <div class="menu-icon">
                                                <span class="ti-menu"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="guest-login-signup" style="background-image:url({{asset('business/assets/images/login/bg.png')}})">
        <div class="guest-login-signup-outer">
            <div class="guest-login-signup-inner">
                <div class="guest-login-signup-mian">
                    <div class="guest-login-signup-mian-form">
                        <form action="{{url('guest/signup')}}" method='POST'>
                            @csrf
                            <input type="hidden" id='ip_address' name='ip_address'>
                            <input type="hidden" id='city' name='city'>
                            <input type="hidden" id='region' name='region'>
                            <input type="hidden" id='country' name='country'>

                            <div class="guest-login-signup-mian-form-inner">
                                <div class="guest-login-signup-mian-form-outer">
                                    <div class="guest-login-signup-mian-form-box">
                                        <div class="guest-login-signup-mian-form-top-text">
                                            <div class="guest-login-signup-mian-form-top-text-outer">
                                                <div class="guest-login-signup-mian-form-top-text-inner">
                                                    <div class="guest-login-signup-form-top-text">
                                                        All Businesses at One Place
                                                    </div>
                                                    <div class="guest-login-signup-mian-form-top-option">
                                                        <div class="guest-login-signup-mian-form-top-option-outer">
                                                            <div class="guest-login-signup-mian-form-top-option-inner">
                                                                <div class="guest-login-signup-mian-form-top-option-single">
                                                                    <a href="{{url('guest/login')}}">Login</a>
                                                                </div>
                                                                <div class="guest-login-signup-mian-form-top-option-single active">
                                                                    <a href="{{url('guest/signup')}}">Sign up</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="guest-login-signup-form-box">
                                                        <div class="guest-login-signup-box-inner">
                                                            <div class="guest-login-signup-outer">
                                                            <div class="guest-login-signup-field-with-icon">
                                                                    <span class='icon'><span class="ti-user"></span></span>
                                                                    <input type="text" class='field' required placeholder='Your First Name' name='first_name' value="<?php if(isset($first_name)) { echo $first_name; }?>">
                                                                </div>
                                                                <div class="guest-login-signup-field-with-icon">
                                                                    <span class='icon'><span class="ti-user"></span></span>
                                                                    <input type="text" class='field' required placeholder='Your Last Name' name='last_name' value="<?php if(isset($last_name)) { echo $last_name; }?>">
                                                                </div>
                                                                <div class="guest-login-signup-field-with-icon">
                                                                    <span class='icon'><img src="{{asset('business/assets/images/icons/phone.png')}}" alt=""></span>
                                                                    <input type="text" class='field' required placeholder='Your Phone' name='phone' value="<?php if(isset($phone)) { echo $phone; }?>">
                                                                </div>
                                                                @if(isset($email_error))
                                                                <div class="text-danger mb-2 text-left">
                                                                    {{$email_error}}
                                                                </div>
                                                                @endif
                                                                <div class="guest-login-signup-field-with-icon">
                                                                    <span class='icon'><span class="ti-email"></span></span>
                                                                    <input type="email" class='field <?php if(isset($email_error)) { echo 'error-border'; }?>' required placeholder='Your Email' name='email' value="<?php if(isset($email)) { echo $email; }?>">
                                                                </div>
                                                                @if(isset($password_error))
                                                                <div class="text-danger mt-1 mb-2 text-left">
                                                                    {{$password_error}}
                                                                </div>
                                                                @endif
                                                                <div class="guest-login-signup-field-with-icon">
                                                                    <span class='icon'><span class="ti-lock"></span></span>
                                                                    <input class='field <?php if(isset($password_error)) { echo 'error-border'; }?>' type='password' required placeholder='Password' name='password' id='password-input'>
                                                                    <span class='view-password' id='show-password'><span class="ti-eye"></span></span>
                                                                </div>
                                                                <div class="guest-login-signup-field-with-icon">
                                                                    <span class='icon'><span class="ti-lock"></span></span>
                                                                    <input class='field <?php if(isset($password_error)) { echo 'error-border'; }?>' type='password' required placeholder='Confirm Password' name='confirm_password' id='confirm_password-input'>
                                                                    <span class='view-password' id='show-confirm_password'><span class="ti-eye"></span></span>
                                                                </div>
                                                                <div class="guest-login-button">
                                                                    <div class="guest-login-button-outer">
                                                                        <div class="guest-login-button-inner">
                                                                            <button type='submit' name='signup'>SING UP <span class="ti-angle-right"></span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    @include('home/site-layout.script')
    <script>
        $(document).ready(function() {
            
            $.ajax({
                url: "https://ipinfo.io/?token=62ebec8a9603bf",
                type: 'get',
                data: {},
                success: function(data) {
                    $("#ip_address").val(data.ip);
                    $("#city").val(data.city);
                    $("#region").val(data.region);
                    $("#country").val(data.country);
                }
            });
        });
    </script>
</body>
</html>