<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="StudyBox">
    <meta name="author" content="Mohammed Seblini, Khalil Zayour, Mohammed Alghoush">
    <meta name="copyright" content="studybox.live">
    <link rel="icon" type="image/png"  href="{{asset('img/logowhite.png')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StudyBox</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/flat-icon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing/style.css') }}">


</head>
<body>
<div class="dashboard-main-wrapper">

@include('inc_landing.navbar')

<!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content p-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 m-0 p-0">
                            @yield('landing')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('inc_landing.footer')
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('js/studyBox.js') }}"></script>



</body>
</html>
