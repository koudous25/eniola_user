<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, follow" />
    <title>@yield('PageTitle') | Eniola </title>

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
    <link rel="stylesheet" href="{{ url('css/bootstrap-datepicker.min.css') }}">

    {{-- Mon style --}}

    <!-- Date Picker -->


    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="{{ url('css/monStyle.css') }}">
    <link rel="stylesheet" href="{{ url('css/custom.css') }}">

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->

    @yield('css')
</head>


<body>

    @include('flashes.flash_message')
    <!-- Header Section Start -->
    <div class="header-section flash">

        <!-- Header Main Start -->
        <div class="header-main ">
            <div class="container">

                <!-- Header Main Start -->
                <div class="header-main-wrapper">

                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="{{ route('app_home') }}"><img src="{{ url('images/logo.png') }}" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Menu Start -->
                    <div class="header-menu d-none d-lg-block">
                        <ul class="nav-menu">
                            <li><a href="{{ route('app_courses') }}">Nos parcours </a></li>
                            <li><a href="{{ route('app_about') }}">C’est quoi Internet ?</a></li>
                            {{-- <li><a href="{{ route('app_about') }}">A propos</a></li> --}}
                            {{-- <li><a href="{{ route('app_contact') }}">Contact</a></li> --}}
                            {{-- <li><a href="{{ route('app_contact') }}">Contact</a></li> --}}
                        </ul>

                    </div>
                    <!-- Header Menu End -->

                    <!-- Header Sing In & Up Start -->
                    @if (Session::has('user'))
                        <div class="login-header-action">

                            <div class="dropdown">
                                <button class="action notification author" data-bs-toggle="dropdown">
                                    <img src="{{ url('https://ui-avatars.com/api/?name=' . Session::get('user')['userOut']['firstname'] . '+' . Session::get('user')['userOut']['lastname'] . '/?rounded=true') }}"
                                        alt="Author">
                                </button>
                                <div class="dropdown-menu dropdown-notification">
                                    <ul class="notification-items-list">

                                        @if (Session::get('user')['userOut']['role'] === 'ETUDIANT')
                                            <li class="notification-item">
                                                <span class="notify-icon bg-success text-white">
                                                    <img src="{{ url('https://ui-avatars.com/api/?name=' . Session::get('user')['userOut']['firstname'] . '+' . Session::get('user')['userOut']['lastname'] . '/?rounded=true') }}"
                                                        alt="Author">
                                                </span>
                                                <a class="" href=" {{ route('app_dash_student_profile') }}">
                                                    {{ pretty_firstname(Session::get('user')) }}</a>
                                            </li>
                                            <li class="notification-item">
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-user"></i></span>
                                                <a class="" href=" {{ route('app_dash_student') }}">
                                                    Mon tableau de bord</a>
                                            </li>
                                            <li class="notification-item">
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-settings-alt"></i></span>
                                                <a class="" href="
                                                    {{ route('app_dash_student_parametre') }}">Paramètres</a>
                                            </li>
                                        @elseif(Session::get('user')['userOut']['role']==="RESPONSABLE" ||
                                            Session::get('user')['userOut']['role']==="ORGANISATION")
                                            <li class="notification-item">
                                                <span class="notify-icon bg-success text-white"><img
                                                        src="{{ url('https://ui-avatars.com/api/?name=' . Session::get('user')['userOut']['firstname'] . '+' . Session::get('user')['userOut']['lastname'] . '/?rounded=true') }}"
                                                        alt="Author"></span>
                                                <a class="" href=" {{ route('app_dash_mentor_profile') }}">
                                                    {{ pretty_firstname(Session::get('user')) }}</a>
                                            </li>
                                            <li class="notification-item">
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-user"></i></span>
                                                <a class="" href=" {{ route('app_dash_mentor') }}">
                                                    Mon tableau de bord</a>
                                            </li>
                                            <li class="notification-item">
                                                <span class="notify-icon bg-success text-white"><i
                                                        class="icofont-settings-alt"></i></span>
                                                <a class="" href=" {{ route('app_dash_mentor_parametre') }}">
                                                    Paramètres</a>
                                            </li>
                                        @elseif(Session::get('user')['userOut']['role']==="ADMIN")
                                            <li class="notification-item">
                                                <span></span>
                                                <a class=""
                                                href="
                                                    {{ route('app_home') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                                            </li>
                                        @else
                                            <li class="notification-item"><a
                                                    class=""
                                                href="
                                                    {{ route('app_home') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                                            </li>
                                        @endif

                                        <li class="notification-item">
                                            <span class="notify-icon bg-success text-white"><i
                                                    class="icofont-logout"></i></span>
                                            <a class="" href=" {{ route('app_logout') }}">
                                                Deconnexion</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            {{-- <ul>

                                @if (Session::get('user')['userOut']['role'] === 'ETUDIANT')
                                    <li><a class="sign-in"
                                            href="{{ route('app_dash_student') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                                    </li>
                                @elseif(Session::get('user')['userOut']['role']==="RESPONSABLE" ||
                                    Session::get('user')['userOut']['role']==="ORGANISATION")
                                    <li><a class="sign-in"
                                            href="{{ route('app_dash_mentor') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                                    </li>
                                @elseif(Session::get('user')['userOut']['role']==="ADMIN")
                                    <li><a class="sign-in"
                                            href="{{ route('app_home') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                                    </li>
                                @else
                                    <li><a class="sign-in"
                                            href="{{ route('app_home') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                                    </li>
                                @endif

                                <li><a class="sign-in" href="{{ route('app_logout') }}">Deconnexion</a></li>
                            </ul> --}}
                        </div>
                    @else
                        <div class="header-sign-in-up d-none d-lg-block">
                            <ul>
                                <li><a class="sign-up" href="{{ route('app_register') }}">S'inscrire</a></li>
                                <li><a class="sign-in" href="{{ route('app_login') }}">Se connecter</a></li>
                            </ul>
                        </div>
                    @endif

                    <!-- Header Sing In & Up End -->

                    <!-- Header Mobile Toggle Start -->
                    <div class="header-toggle d-lg-none">
                        <a class="menu-toggle" href="javascript:void(0)">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <!-- Header Mobile Toggle End -->

                </div>
                <!-- Header Main End -->

            </div>
        </div>
        <!-- Header Main End -->

    </div>
    <!-- Header Section End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu">

        <!-- Menu Close Start -->
        <a class="menu-close" href="javascript:void(0)">
            <i class="icofont-close-line"></i>
        </a>
        <!-- Menu Close End -->

        <!-- Mobile Sing In & Up Start -->
        @if (Session::has('user'))
            <div class="mobile-sign-in-up">
                <ul>
                    <ul>
                        @if (Session::get('user')['userOut']['role'] === 'ETUDIANT')
                            <li><a class="sign-in"
                                    href="{{ route('app_dash_student') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                            </li>
                        @elseif(Session::get('user')['userOut']['role']==="RESPONSABLE" ||
                            Session::get('user')['userOut']['role']==="ORGANISATION")
                            <li><a class="sign-in"
                                    href="{{ route('app_dash_mentor') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                            </li>
                        @elseif(Session::get('user')['userOut']['role']==="ADMIN")
                            <li><a class="sign-in"
                                    href="{{ route('app_home') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                            </li>
                        @else
                            <li><a class="sign-in"
                                    href="{{ route('app_home') }}">{{ pretty_firstname(Session::get('user')) }}</a>
                            </li>
                        @endif
                        <li><a class="sign-in" href="{{ route('app_logout') }}">Deconnexion</a></li>
                    </ul>
                </ul>
            </div>
        @else
            <div class="mobile-sign-in-up">
                <ul>
                    <li><a class="sign-in" href="{{ route('app_login') }}">Se connecter</a></li>
                    <li><a class="sign-up" href="{{ route('app_register') }}">S'inscrire</a></li>
                </ul>
            </div>
        @endif

        <!-- Mobile Sing In & Up End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-items">
            <ul class="nav-menu">
                <li><a href="{{ route('app_courses') }}">Nos parcours</a></li>
                <li><a href="{{ route('app_about') }}">C’est quoi Internet ?</a></li>
                {{-- <li><a href="{{ route('app_about') }}">A propos</a></li> --}}
                {{-- <li><a href="{{ route('app_contact') }}">Contact</a></li> --}}
                {{-- <li><a href="{{ route('app_contact') }}">Contact</a></li> --}}
            </ul>

        </div>
        <!-- Mobile Menu End -->

        <!-- Mobile Menu End -->
        {{-- <div class="mobile-social">
            <ul class="social">
                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                <li><a href="#"><i class="flaticon-skype"></i></a></li>
                <li><a href="#"><i class="flaticon-instagram"></i></a></li>
            </ul>
        </div> --}}
        <!-- Mobile Menu End -->

    </div>
    <!-- Mobile Menu End -->


    @yield('main')


    <!-- Footer Start  -->
    <div class="section footer-section">

        <!-- Footer Widget Section Start -->
        {{-- <div class="footer-widget-section">

            <img class="shape-1 animation-down" src="{{ url('images/shape/shape-21.png') }}" alt="Shape">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 order-md-1 order-lg-1">

                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <div class="widget-logo">
                                <a href="{{ route('app_home') }}"><img src="{{ url('images/logo.png') }}"
                                        alt="Logo"></a>
                            </div>

                            <div class="widget-address">
                                <h4 class="footer-widget-title">Cotonou </h4>
                                <p>Midombo Akpakpa.</p>
                            </div>

                            <ul class="widget-info">
                                <li>
                                    <p> <i class="flaticon-email"></i> <a
                                            href="isocbenin@gmail.com">isocbenin@gmail.com</a> </p>
                                </li>
                                <li>
                                    <p> <i class="flaticon-phone-call"></i> <a href="tel:62916946">(+229) 62916946</a>
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
                                            <li><a href="https://isoc.bj/">ISOC Bénin</a></li>
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

        </div> --}}
        <!-- Footer Widget Section End -->

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">
                <div class="footer-wrapper">
                    <div>
                        <h5>Copyright 2021 Eniola. Powered by </h5>
                    </div>
                    <div><img src="{{ url('images/isoc-benin-logo-bleu.png') }}" alt="logo-isoc"></div>
                </div>

            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
    <!-- Footer End -->


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

    <!--Custom-->
    <!--Custom Js-->
    <!-- Mon JS -->
    <script src="{{ url('js/bootstrap-alerts.min.js') }}"></script>
    <script src="{{ url('js/monJs.js') }}"></script>
    <script src="{{ url('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            lang: "fr",
            format: 'dd/mm/yyyy'
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
            )
        });
    </script>

    @yield('scripts')

</body>

</html>
