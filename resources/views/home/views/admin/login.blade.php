<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Sahaa.me</title>
    @include('site-layout.style')
</head>
<body class="login-page">
    <div class="login-page-wrapper">
        <div class="login-page-outer">
            <div class="login-page-inner">
                <div class="login-page-main">
                    <div class="login-page-form">
                        <form action="{{url('admin/dashboard')}}" method='GET'>
                            <div class="login-form-box">
                                <div class="login-form-box-outer">
                                    <div class="login-form-box-inner">
                                        <div class="top-title">
                                           Welcome
                                        </div>
                                        <div class="login-form-fields">
                                            <input type="text" placeholder="Email or Username">
                                        </div>
                                        <div class="login-form-fields">
                                            <input type="text" placeholder="Password">
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
    @include('site-layout.script')
</body>
</html>