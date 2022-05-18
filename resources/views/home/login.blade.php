<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('business/assets/icon/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('business/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('business/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('business/assets/css/responsive.css')}}">
    <link rel="icon" href="{{asset('business/assets/images/logo/icon.png')}}" type="image/png">
    <meta name="google-site-verification" content="2ngvz1n0OIXNh2dFIVfOLCexq9gGV2c_V-K8fEJRNm4" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CT19N7GEB1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-CT19N7GEB1');
    </script>
</head>
<body class="login-page">
    <div class="login-page-wrapper">
        <div class="login-page-outer">
            <div class="login-page-inner">
                <div class="login-page-main">
                    <div class="login-page-form">
                        <form action="{{url('admin/login')}}" method='post'>
                            @csrf
                            <div class="login-form-box">
                                <div class="login-form-box-outer">
                                    <div class="login-form-box-inner">
                                        <div class="top-title">
                                           Welcome
                                        </div>
                                        @if(session()->has('error'))
                                            <div class="text-danger text-center mt-2 mb-2">{{ session()->get('error') }}</div>
                                        @endif
                                        <div class="login-form-fields">
                                            <input type="email" placeholder="Email" name='email'>
                                        </div>
                                        <div class="login-form-fields">
                                            <input type="password" placeholder="Password" name='password'>
                                        </div>
                                        <div class="login-button">
                                            <button>Login</button>
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
</body>
</html>