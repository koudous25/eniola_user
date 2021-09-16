@extends('layouts.base')

@section('PageTitle')
    Inscription
@endsection


@section('main')
    <!-- Page Banner Start -->
    <div class="section page-banner">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                @if ($from_mentor == false)
                    <h2 class="title">INSCRIPTION</h2>
                @else
                    <h2 class="title">Inscrivez un étudiant</h2>
                @endif

            </div>
            <!-- Page Banner End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Register & Login Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Register & Login Wrapper Start -->
            <div class="register-login-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-2"></div>

                    <div class="col-lg-8 text-center">

                        <!-- Register & Login Form Start -->
                        <div class="register-login-form">
                            <div class="form-wrapper">
                                <form action="{{ route('app_register_traitement') }}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    @if ($from_mentor == true)
                                        <input type="hidden" name="from_mentor" value="true" />
                                    @endif
                                    <div class="single-form selecte">
                                        {{-- <label for="selector">Rôle</label>
                                        <select name="select" id="selector" onchange="updated(this)"
                                            class="w-100 select mb-4">
                                            <option selected>Selectionnez votre rôle</option>
                                            <option value="ETUDIANT">Etudiant</option>
                                            <option value="RESPONSABLE">Responsable</option>
                                            <option value="ORGANISATION">Organisation</option>
                                            <option value="ADMIN">Admin</option>
                                        </select> --}}
                                        <select class="w-100  mb-4 xx" name="select" required>
                                            <option selected disabled>Selectionnez votre rôle</option>
                                            <option value="ETUDIANT">Etudiant</option>
                                            @if ($from_mentor == false)
                                                <option value="RESPONSABLE">Responsable</option>
                                                <option value="ORGANISATION">Organisation</option>
                                            @endif
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
                                    @if ($from_mentor == false)
                                        <div class="single-form">
                                            <input type="email" placeholder="Email" required name="email" id="email"
                                                value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <p class="text-danger mt-2">{{ $errors->first('email') }}</p>
                                            @endif

                                        </div>
                                    @endif
                                    <!-- Single Form End -->
                                    <div class="single-form mm">
                                        <div class="row">
                                            <div class="col-lg-4 text-center">
                                                <p class="vac">Date de naissance : </p>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="birth">
                                                    {{-- <input id="datepicker" name="birth" id="date"
                                                        value="{{ old('birth') }}" placeholder="Date de naissance"
                                                        required> --}}
                                                    <input readonly id="datepicker" name="birth" class="naissance"
                                                        id="date" value="{{ old('birth') }}"
                                                        placeholder="Date de naissance" required />
                                                </div>
                                            </div>
                                        </div>


                                        @if ($errors->has('birth'))
                                            <p class="text-danger mt-2">{{ $errors->first('birth') }}</p>
                                        @endif
                                    </div>

                                    <div class="container mt-4">
                                        <div class="row">
                                            <div class="col-lg-2 text-center">
                                                <p class="vac">Sexe : </p>
                                            </div>
                                            <div class="col-lg-8 text-center">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="sexe"
                                                        id="inlineRadio1" value="FEMALE">
                                                    <label class="form-check-label" for="inlineRadio1">Féminin</label>
                                                </div>
                                                <div class="form-check form-check-inline ">
                                                    <input class="form-check-input" type="radio" name="sexe"
                                                        id="inlineRadio2" value="MALE">
                                                    <label class="form-check-label" for="inlineRadio2">Masculin</label>
                                                </div>
                                                @if ($errors->has('sexe'))
                                                    <p class="text-danger mt-2">{{ $errors->first('sexe') }}</p>
                                                @endif
                                            </div>
                                            <div class="col-lg-2"></div>
                                        </div>
                                    </div>

                                    @if ($from_mentor == false)
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
                                                <p class="text-danger mt-2">{{ $errors->first('password_confirmation') }}
                                                </p>
                                            @endif
                                        </div>
                                        <p class="mt-3 text-center" style="font-style:italic;">En vous inscrivant, vous
                                            acceptez les termes et les conditions d'utilisation</p>
                                    @endif

                                    <!-- Single Form End -->

                                    {{-- <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck1" name="terms" id="terms">
                                        <label class="form-check-label" for="defaultCheck1">
                                            J'accepte les termes et conditions d'utilisation
                                        </label>
                                        @if ($errors->has('terms'))
                                        <p class="text-danger mt-2">{{ $errors->first('terms') }}</p>
                                        @endif
                                    </div> --}}

                                    <!-- Single Form Start -->
                                    <div class="single-form bouton">
                                        @if ($from_mentor == false)
                                            <button class="btn btn-secondary text-white btn-hover-dark w-100"
                                                type="submit">S'inscrire</button>
                                        @else
                                            <button class="btn btn-secondary text-white btn-hover-dark w-100 mt-5"
                                                type="submit">Inscrire</button>
                                        @endif
                                    </div>
                                    <!-- Single Form End -->
                                </form>
                                @if ($from_mentor == false)

                                    <p class="text-center mt-2">J'ai déja un compte ? <a style="font-weight:bold;"
                                            href="{{ route('app_login') }}">Se
                                            connecter</a>
                                    </p>
                                @endif
                            </div>
                        </div>
                        <!-- Register & Login Form End -->

                    </div>

                    <div class="col-lg-2"></div>

                </div>
            </div>
            <!-- Register & Login Wrapper End -->

        </div>
    </div>
    <!-- Register & Login End -->
@endsection
