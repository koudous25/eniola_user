@extends('layouts.base')


@section('main')
    <!-- Page Banner Start -->
    <div class="section page-banner">


        <img class="shape-2" src="{{ secure_asset('images/shape/shape-23.png') }}" alt="Shape">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="{{ route('app_home') }}">Accueil</a></li>
                    <li class="active">Inscription</li>
                </ul>
                <h2 class="title">Inscrivez vous sur <span>Eniola</span> pour suivre nos cours </h2>
            </div>
            <!-- Page Banner End -->
        </div>

        <!-- Shape Icon Box Start -->
        <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="{{ secure_asset('images/shape/shape-5.png') }}" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-badge"></i>
                </div>
            </div>

            <img class="icon-shape-2" src="{{ secure_asset('images/shape/shape-6.png') }}" alt="Shape">

        </div>
        <!-- Shape Icon Box End -->

        <img class="shape-3" src="{{ secure_asset('images/shape/shape-24.png') }}" alt="Shape">

        <img class="shape-author" src="{{ secure_asset('images/author/author-11.jpg') }}" alt="Shape">

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
                                <img src="{{ secure_asset('images/shape/shape-26.png') }}" alt="Shape">
                            </div>


                            <div class="images">
                                <img src="{{ secure_asset('images/register-login.png') }}" alt="Register Login">
                            </div>
                        </div>
                        <!-- Register & Login Images End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Register & Login Form Start -->
                        <div class="register-login-form">
                            <h3 class="title">Inscription <span>Eniola</span></h3>
                            <div class="form-wrapper">
                                <form action="/register" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <div class="single-form select">
                                        <!--label for="selector">Rôle</label-->
                                        <!--select name="select" id="selector" onchange="updated(this)"
                                                        class="w-100 select mb-4">
                                                        <option selected>Selectionnez votre rôle</option>
                                                        <option value="ETUDIANT">Etudiant</option>
                                                        <option value="RESPONSABLE">Responsable</option>
                                                        <option value="ORGANISATION">Organisation</option>
                                                        <option value="ADMIN">Admin</option>
                                                    </select-->
                                        <select class="w-100  mb-4 xx" name="select">
                                            <option selected>Selectionnez votre rôle</option>
                                            <option value="ETUDIANT">Etudiant</option>
                                            <option value="RESPONSABLE">Responsable</option>
                                            <option value="ORGANISATION">Organisation</option>
                                            <option value="ADMIN">Admin</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('select'))
                                        <p class="text-danger mt-2">{{ $errors->first('select') }}</p>
                                    @endif

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="text" placeholder="Nom" required name="nom" id="nom"
                                            value="{{ old('nom') }}">
                                        @if ($errors->has('nom'))
                                            <p class="text-danger mt-2">{{ $errors->first('nom') }}</p>
                                        @endif
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="text" placeholder="Prénom" required name="prenom" id="prenom"
                                            value="{{ old('prenom') }}">
                                        @if ($errors->has('prenom'))
                                            <p class="text-danger mt-2">{{ $errors->first('prenom') }}</p>
                                        @endif
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="email" placeholder="Email" required name="email" id="email"
                                            value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <p class="text-danger mt-2">{{ $errors->first('email') }}</p>
                                        @endif

                                    </div>
                                    <!-- Single Form End -->
                                    <div class="single-form mm">
                                        <!--label class="mb-2">Date de naissance</label-->
                                        <div class="birth">
                                            <input readonly required="true" id="datepicker" name="birth" class="naissance"
                                                id="date" value="{{ old('birth') }}" placeholder="Date de naissance" />
                                        </div>
                                        @if ($errors->has('birth'))
                                            <p class="text-danger mt-2">{{ $errors->first('birth') }}</p>
                                        @endif
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1"
                                            value="FEMALE">
                                        <label class="form-check-label" for="inlineRadio1">Féminin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2"
                                            value="MALE">
                                        <label class="form-check-label" for="inlineRadio2">Masculin</label>
                                    </div>
                                    @if ($errors->has('sexe'))
                                        <p class="text-danger mt-2">{{ $errors->first('sexe') }}</p>
                                    @endif
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="password" placeholder="Mot de passe" required name="password"
                                            id="password">
                                        @if ($errors->has('password'))
                                            <p class="text-danger mt-2">{{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="password" placeholder="Confirmer le mot de passe" required
                                            name="password_confirmation" id="confirm_password">
                                        @if ($errors->has('password_confirmation'))
                                            <p class="text-danger mt-2">{{ $errors->first('password_confirmation') }}</p>
                                        @endif
                                    </div>
                                    <p class="mt-3 text-center" style="font-style:italic;">En vous s'inscrivant, vous
                                        acceptez les termes et les
                                        conditions d'utilisation</p>
                                    <!-- Single Form End -->

                                    <!--div class="form-check mb-2">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" name="terms" id="terms">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        J'accepte les termes et conditions d'utilisation
                                                    </label>
                                                    @if ($errors->has('terms'))
                                                    <p class="text-danger mt-2">{{ $errors->first('terms') }}</p>
                                                    @endif
                                                </div-->

                                    <!-- Single Form Start -->
                                    <div class="single-form bouton">
                                        <button class="btn btn-primary btn-hover-dark w-100"
                                            type="submit">S'inscrire</button>
                                        <!--a class="btn btn-secondary btn-outline w-100" href="#">Sign up with
                                                        Google</a-->
                                    </div>
                                    <!-- Single Form End -->
                                </form>
                                <p class="text-center mt-2">J'ai déja un compte ? <a style="font-weight:bold;"
                                        href="{{ route('app_login') }}">Se
                                        connecter</a>
                                </p>
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
