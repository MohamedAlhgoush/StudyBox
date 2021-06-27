<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="StudyBox">
    <meta name="author" content="Mohammed Seblini, Khalil Zayour, Mohammed Alghoush">
    <meta name="copyright" content="studybox.live">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png"  href="{{asset('img/logowhite.png')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>StudyBox</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{asset('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">


</head>
<body>
    <div class="dashboard-main-wrapper">

        @include('inc.navbar')

        @include('inc.sidebar')


        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content p-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-md-10 col-xs-12 m-0 p-0">
                                @include('inc.messages')
                                 
                                @include('inc.footer')
                            </div>
                            <div class="col-md-1 col-xs-2 m-0 ml-1">
                                 @include('inc.addsbar')
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/sparkline/spark-js.js')}}"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js/studyBox.js') }}"></script>

</body>
</html>
