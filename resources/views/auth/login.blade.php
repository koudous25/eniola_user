@extends('layouts.base')

@section('main')
    <!-- Page Banner Start -->
    <div class="section page-banner">



        <img class="shape-2" src="{{ url('images/shape/shape-23.png') }}" alt="Shape">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="/">Accueil</a></li>
                    <li class="active">Connexion</li>
                </ul>
                <h2 class="title">Formulaire de <span>Connexion</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>

        <!-- Shape Icon Box Start -->
        <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="{{ url('images/shape/shape-5.png') }}" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-badge"></i>
                </div>
            </div>

            <img class="icon-shape-2" src="{{ url('images/shape/shape-6.png') }}" alt="Shape">

        </div>
        <!-- Shape Icon Box End -->

        <img class="shape-3" src="{{ url('images/shape/shape-24.png') }}" alt="Shape">

        <img class="shape-author" src="{{ url('images/author/author-11.jpg') }}" alt="Shape">

    </div>
    <!-- Page Banner End -->

    <!-- Register & Login Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Register & Login Wrapper Start -->
            <div class="register-login-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <!-- Register & Login Images Start -->
                        <div class="register-login-images">
                            <div class="shape-1">
                                <img src="{{ url('images/shape/shape-26.png') }}" alt="Shape">
                            </div>


                            <div class="images">
                                <img src="{{ url('images/register-login.png') }}" alt="Register Login">
                            </div>
                        </div>
                        <!-- Register & Login Images End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Register & Login Form Start -->
                        <div class="register-login-form">
                            <h3 class="title"> <span> Connexion</span></h3>

                            <div class="form-wrapper">
                                <form action="{{ route('app_login_traitement') }}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="email" placeholder="Email" required name="login"
                                            value="{{ old('login') }}">
                                        @if ($errors->has('login'))
                                            <p class="text-danger mt-2">{{ $errors->first('login') }}</p>
                                        @endif
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="password" placeholder="Mot de passe" required name="password">
                                        @if ($errors->has('password'))
                                            <p class="text-danger mt-2">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button class="btn btn-primary btn-hover-dark w-100" type="submit">Se
                                            connecter</button>
                                        <a class="btn btn-secondary btn-outline w-100" href="#">Login with
                                            Google</a>
                                    </div>
                                    <!-- Single Form End -->
                                </form>
                                <p class="text-center mt-2">J'ai pas de compte?. <a
                                        href="{{ route('app_register') }}">S'inscrire</a>
                            </div>
                        </div>
                        <!-- Register & Login Form End -->

                    </div>
                </div>
            </div>
            <!-- Register & Login Wrapper End -->

        </div>
    </div>
    <!-- Register & Login End -->
@endsection
