<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedual a Consultation Call | Sahaa.me</title>
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
    <section class="schedual-call">
        <div class="schedual-call-outer">
            <div class="schedual-call-inner">
                <div class="schedual-call-logo">
                    <div class="schedual-call-logo-outer">
                        <a href="{{url('/')}}"><img src="{{asset('business/assets/images/logo/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="schedual-call-form-box">
                    <div class="schedual-call-form-box-outer">
                        <form action="{{url('schedual-call/add')}}" method='POST'>
                        @csrf
                            <div class="schedual-call-form-box-inner">
                                <div class="schedual-call-form-title">
                                    Schedual a Consultation Call
                                </div>
                                <?php if ($success) { ?>
                                    <div class="alert alert-success text-center">We will contact you soon.</div>
                                 <?php } ?>
                                <div class="schedual-call-form-box-main">
                                    <div class="schedual-call-form-box-fields">
                                        <div class="schedual-call-form-box-field">
                                            <div class="form-group">
                                                <label>Name <span class='text-danger'>*</span></label>
                                                <input type="text" class='form-control' name='name' required autofill='off'>
                                            </div>
                                        </div>
                                        <div class="schedual-call-form-box-field">
                                            <div class="form-group">
                                                <label>Company Name <span class='text-danger'>*</span></label>
                                                <input type="text" class='form-control'  name='company_name' required autofill='off'>
                                            </div>
                                        </div>
                                        <div class="schedual-call-form-box-field">
                                            <div class="form-group">
                                                <label>Email Address <span class='text-danger'>*</span></label>
                                                <input type="email" class='form-control'  name='email' required autofill='off'>
                                            </div>
                                        </div>
                                        <div class="schedual-call-form-box-field">
                                            <div class="form-group">
                                                <label>Phone Number <span class='text-danger'>*</span></label>
                                                <input type="text" class='form-control'  name='phone' required autofill='off'>
                                            </div>
                                        </div>
                                        <div class="schedual-call-form-box-field">
                                            <div class="form-group">
                                                <label>City <span class='text-danger'>*</span></label>
                                                <input type="text" class='form-control'  name='city' required autofill='off'>
                                            </div>
                                        </div>
                                        <div class="schedual-call-form-box-field">
                                            <div class="form-group">
                                                <label>What time will you be available for call? <span class='text-danger'>*</span></label>
                                                <select name="call_time" class='form-control'>
                                                    <option value="" >Select Timing</option>
                                                    <option value="Morning" >Morning</option>
                                                    <option value="Afternoon" >Afternoon</option>
                                                    <option value="Evening" >Evening</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="schedual-call-form-box-field">
                                            <button>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('home/site-layout.script')
</body>
</html>