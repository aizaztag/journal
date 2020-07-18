<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>@yield('title') - {{ config('app.name') }}</title>

    <!--CSS============================================= -->
    <link rel="stylesheet" href="{{ asset('frontend/css/roboto_font.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css')}}">

    @yield('css')

</head>

<body>
<!--================ Start header Top Area =================-->
<section class="header-top">
    <div class="container box_1170">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <a href="/" class="logo">
                    <img src="{{ asset('frontend/img/logo.png')}}" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 search-trigger">
                <a href="#" class="search">
                    <i class="lnr lnr-magnifier" id="search"></i></a>
                </a>
            </div>
        </div>
    </div>
</section>
<!--================ End header top Area =================-->

<!-- Start header Area -->
@include('frontend.partials.header')
<!-- End header Area -->
<main>
    @yield('content')
</main>

<!-- start footer Area -->
@include('frontend.partials.footer')
<!-- End footer Area -->
@section('scripts')
    <script src="{{asset('frontend/js/popper.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script type="text/javascript"src="{{asset('frontend/js/maps_google.js')}}"></script>
    <script src="{{asset('frontend/js/easing.min.js')}}"></script>
    <script src="{{asset('frontend/js/hoverIntent.js')}}"></script>
    <script src="{{asset('frontend/js/superfish.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.tabs.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/js/mail-script.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
@show


{{-- script--}}
@stack('scripts')
{{-- script--}}

</body>

</html>