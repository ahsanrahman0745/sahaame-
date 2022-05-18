<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sahaa</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"> -->

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid  ">
            <a class="navbar-brand ml-5 " href="/">
                <img src="{{ asset('assets/Logo/1x/full logomdpi.png') }}" class="ml-3" alt="..." height="50">
            </a>
            <div class="d-flex justify-content-center">
                <div class="navbar-brand mr-5 " href="#">

                    <a href="#"><i class="fas fa-user-cog orange"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <hr style="height: 5px; background:orange; border:none" class="my-0">
    <div class="d-flex " id="wrapper">
        <!-- Sidebar-->
        <div class="flex-shrink-0 p-3 bg-light" style="width: 200px; height :100vh;">

            <ul class="list-unstyled  ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="true">
                        <i class="fas fa-home orange mx-2"></i> Home
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark orange pl-5 rounded">Overview</a></li>
                            <li><a href="#" class="link-dark orange pl-5 rounded">Updates</a></li>
                            <li><a href="#" class="link-dark  orange pl-5 rounded">Reports</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <i class="fas fa-tools orange mx-2"></i>Dashboard
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="/dashboard/listings" class="link-dark orange pl-5 rounded">Request Listing</a>
                            </li>

                            <li><a href="/dashboard/list_a_business" class="link-dark orange pl-5 rounded">List
                                    Business</a></li>
                        </ul>
                    </div>
                </li>

                <li class="border-top my-3"></li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#account-collapse" aria-expanded="false">
                        <i class="fas fa-user-circle mx-2 orange"></i>Account
                    </button>
                    <div class="collapse" id="account-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark orange pl-5 rounded">New...</a></li>
                            <li><a href="#" class="link-dark orange pl-5 rounded">Profile</a></li>
                            <li><a href="#" class="link-dark orange pl-5 rounded">Settings</a></li>
                            <li><a href="#" class="link-dark orange pl-5 rounded">Sign out</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper" style="width:100%">
            <!-- Top navigation-->

            <!-- Page content-->
            <div class="container-fluid my-4">
                @include('inc.messages')
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>