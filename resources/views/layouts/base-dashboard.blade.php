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

    {{-- ====== Use the minified version files listed below for better performance and remove the files listed above ====== --}}
    {{-- <link rel="stylesheet" href="{{url('css/vendor/plugins.min.css') }}">
    <link rel="stylesheet" href="{{url('css/style.min.css') }}"> --}}

    @yield('css')
</head>


<body>
    @include('flashes.flash_message')
    <div class="main-wrapper main-wrapper-02 flash">

        <!-- Login Header Start -->
        <div class="section login-header header-dash">
            <!-- Login Header Wrapper Start -->
            <div class="login-header-wrapper navbar navbar-expand justify-content-between">

                <!-- Header Logo Start -->
                <div class="login-header-logo">
                    <a href="/"><img src="{{ url('images/logo-icon.png') }}" alt="Logo"></a></li>

                </div>
                <!-- Header Logo End -->
                <!-- Header Action Start -->
                <div class="login-header-action">
                    <div class="dropdown">
                        <button class="action notification" data-bs-toggle="dropdown">
                            <i class="flaticon-notification"></i>
                            <span class="active"></span>
                        </button>
                        <div class="dropdown-menu dropdown-notification">
                            <ul class="notification-items-list">
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i
                                            class="icofont-ui-user"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i
                                            class="icofont-shopping-cart"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-danger text-white"><i
                                            class="icofont-book-mark"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i
                                            class="icofont-heart-alt"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-image"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong> James.</strong> has added a<strong>customer</strong>
                                                Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                            </ul>
                            <a class="all-notification" href="#">See all notifications <i
                                    class="icofont-simple-right"></i></a>
                        </div>
                    </div>

                    <a class="action author" href="#">
                        <img src="{{ url('images/author/author-07.jpg') }}" alt="Author">
                    </a>

                    <div class="dropdown">
                        <button class="action more" data-bs-toggle="dropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="" href="{{ route('app_dash_student_profile') }}"><i class="icofont-user"></i>
                                    Profile</a></li>
                            <li><a class="" href="{{ route('app_dash_student_parametre') }}"><i
                                        class="icofont-settings-alt"></i> Paramètres</a>
                            </li>
                            <li><a class="" href="{{ route('app_logout') }}"><i class="icofont-logout"></i>
                                    Deconnexion</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Action End -->

            </div>
            <!-- Login Header Wrapper End -->
        </div>
        <!-- Login Header End -->

        <!-- Courses Admin Start -->
        <div class="section overflow-hidden position-relative" id="wrapper">

            <!-- Sidebar Wrapper Start -->
            <div class="sidebar-wrapper">
                <div class="menu-list">
                    <a class="active" href="{{ route('app_dash_student') }}"><img
                            src="{{ url('images/menu-icon/icon-1.png') }}" alt="Icon"></a>
                    <a href="{{ route('app_dash_student_profile') }}"><img
                            src="{{ url('images/menu-icon/icon-2-2.png') }}" alt="Icon"></a>
                    <a href="{{ route('app_dash_student_statistique') }}"><img
                            src="{{ url('images/menu-icon/icon-3.png') }}" alt="Icon"></a>
                    <a href="{{ route('app_dash_student_parametre') }}"><img
                            src="{{ url('images/menu-icon/icon-4.png') }}" alt="Icon"></a>

                </div>
            </div>
            <!-- Sidebar Wrapper End -->

            @yield('main')

            <!-- Courses Admin End -->

            <!--Back To Start-->
            <a href="#" class="back-to-top">
                <i class="icofont-simple-up"></i>
            </a>
            <!--Back To End-->


        </div>

        <!-- Footer Start  -->
        <div class="section footer-section">

            <!-- Footer Widget Section Start -->
            <div class="footer-widget-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 order-md-1 order-lg-1">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="/"><img src="{{ url('images/logo.png') }}" alt="Logo"></a>
                                </div>

                                <div class="widget-address">
                                    <h4 class="footer-widget-title">Cotonou </h4>
                                    <p>Midombo Akpakpa.</p>
                                </div>

                                <ul class="widget-info">
                                    <li>
                                        <p> <i class="flaticon-email"></i> <a
                                                href="mailto:address@gmail.com">address@gmail.com</a> </p>
                                    </li>
                                    <li>
                                        <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970)
                                                262-1413</a>
                                        </p>
                                    </li>
                                </ul>

                                <ul class="widget-social">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <div class="col-lg-8 order-md-3 order-lg-2">

                            <!-- Footer Widget Link Start -->
                            <div class="footer-widget-link">

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Catégories</h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Histoire de <br> l'internet au Bénin</a></li>
                                        <li><a href="#">Identité numérique du <br> Bénin dans le cyber espace</a></li>
                                        <li><a href="#">Hygiène numérique</a></li>
                                        <li><a href="#">Compétences numérique</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Liens utiles <h4>

                                            <ul class="widget-link">
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">Discussion</a></li>
                                                <li><a href="#">Terms & Conditions</a></li>
                                                <li><a href="#">Course FAQ’s</a></li>
                                            </ul>

                                </div>
                                <!-- Footer Widget End -->

                            </div>
                            <!-- Footer Widget Link End -->

                        </div>
                    </div>
                </div>

                <img class="shape-2 animation-left" src="{{ url('images/shape/shape-22.png') }}" alt="Shape">

            </div>
            <!-- Footer Widget Section End -->

            <!-- Footer Copyright Start -->
            <div class="footer-copyright">
                <div class="container">

                    <!-- Footer Copyright Start -->
                    <div class="copyright-wrapper">
                        <div class="copyright-link">
                            <a href="#">Terms of Service</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Sitemap</a>
                            <a href="#">Security</a>
                        </div>
                        <div class="copyright-text">
                            <p>&copy; 2021 <span> Eniola </span> Tous droits reservés</p>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->

                </div>
            </div>
            <!-- Footer Copyright End -->

        </div>
        <!-- Footer End -->




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
        {{-- <script src="{{url('js/plugins.min.js') }}"></script> --}}


        <!-- Main JS -->
        <script src="{{ url('js/main.js') }}"></script>

        <!-- Mon JS -->
        <script src="{{ url('js/bootstrap-alerts.min.js') }}"></script>
        <script src="{{ url('js/monJs.js') }}"></script>

        @yield('scripts')


</body>

</html>
