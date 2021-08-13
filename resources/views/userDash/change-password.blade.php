@extends('userDash.base.base-parametre')

@section('param')
    <!-- Page Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="container-fluid">
            <div class="">
                <div class="col-lg-8 mx-auto">
                    <!-- Register & Login Form Start -->
                    <div>
                        <div class="form-wrapper">
                            <form action="{{ route('app_dash_student_change_password_traitement') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="single-form" style="display: none;">
                                    <input type="text" name="email" value="{{ Session::get('user')['userOut']['email'] }}"
                                        placeholder="{{ Session::get('user')['userOut']['email'] }}">
                                </div>
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="password" name="oldPassword" placeholder="Mot de passe">
                                </div>
                                @if ($errors->has('oldPassword'))
                                    <p class="text-danger mt-2">{{ $errors->first('oldPassword') }}</p>
                                @endif
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="password" name="newPassword" placeholder="Nouveau mot de passe">
                                </div>
                                @if ($errors->has('newPassword'))
                                    <p class="text-danger mt-2">{{ $errors->first('newPassword') }}</p>
                                @endif
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="password" name="newPassword_confirmation"
                                        placeholder="Confimer nouveau mot de passe">
                                </div>
                                @if ($errors->has('newPassword_confirmation'))
                                    <p class="text-danger mt-2">{{ $errors->first('newPassword_confirmation') }}</p>
                                @endif
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <button type="submit" class="btn bg-light w-100">Modifier</button>
                                </div>
                                <!-- Single Form End -->
                            </form>
                        </div>
                    </div>
                    <!-- Register & Login Form End -->
                </div>
            </div>

        </div>
        <!-- Page Content Wrapper End -->
    </div>
    <!-- Courses Admin End -->

@endsection
