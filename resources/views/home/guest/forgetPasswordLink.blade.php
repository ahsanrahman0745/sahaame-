<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$page_title}}</title>
    <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

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
                                        <a href="{{url('/')}}"><img
                                                src="{{asset('business/assets/images/logo/logo.png')}}" alt=""></a>
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
                    <form action="{{url('guest/reset-password')}}" method='POST'>
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="guest-login-signup-mian-form-inner">
                            <div class="guest-login-signup-mian-form-outer">
                                <div class="guest-login-signup-mian-form-box">
                                    <div class="guest-login-signup-mian-form-top-text">
                                        <div class="guest-login-signup-mian-form-top-text-outer">
                                            <div class="guest-login-signup-mian-form-top-text-inner">
                                                <div class="guest-login-signup-form-top-text">
                                                    All Businesses at One Place
                                                </div>
                                                <div class="guest-login-signup-mian-form-top-text-bottom">
                                                    Reset Your password
                                                </div>
                                                @if(session()->has('success'))
                                                    <div class="alert alert-success text-success text-center"
                                                         id='success-message'>{{ session()->get('success') }}</div>
                                                @endif
                                                @if(session()->has('error'))
                                                    <div class="alert alert-danger text-danger text-center"
                                                         id='success-message'>{{ session()->get('error') }}</div>
                                                @endif
                                                <div class="guest-login-signup-form-box">
                                                    <div class="guest-login-signup-box-inner">
                                                        <div class="guest-login-signup-outer">
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
                                                                        <button type='submit'> Reset Password <span class="ti-angle-right"></span></button>
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
    $(document).ready(function () {
        $("#search-button").click(function () {
            var term_val = $('#search-term').val();
            var location_val = $('#search-location').val();
            term_val = (term_val == '') ? '' : term_val;
            location_val = (location_val == '') ? '' : location_val;
            window.location.href = "{{url('business/search')}}/meta=|category=|term=" + term_val + "|location=" + location_val + "|services=|_s=";
        });
    });
</script>
</body>
</html>
