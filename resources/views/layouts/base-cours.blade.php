<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, follow" />
    <title>Eniola - @yield('title')</title>

    <!-- Fonts -->

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset(images / favicon . ico) }}"> --}}

    <!-- Styles -->
    <!-- CSS
 ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ url('css/plugins/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/plugins/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('css/plugins/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ url('css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('css/plugins/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ url('css/plugins/jqvmap.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    {{-- Mon style --}}
    <link rel="stylesheet" href="{{ url('css/monStyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

    @yield('css')
</head>


<body>

    @yield('main')


    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icofont-simple-up"></i>
    </a>
    <!--Back To End-->



    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{ url('js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ url('js/vendor/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ url('js/plugins/popper.min.js') }}"></script>
    <script src="{{ url('js/plugins/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ url('js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('js/plugins/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('js/plugins/video-playlist.js') }}"></script>
    <script src="{{ url('js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('js/plugins/ajax-contact.js') }}"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="{{ url('js/main.js') }}"></script>

    <!-- Mon JS -->
    <script src="{{ url('js/monJs.js') }}"></script>

    @yield('scripts')



    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">@yield('content')</div>
    </div> --}}
</body>

</html>
