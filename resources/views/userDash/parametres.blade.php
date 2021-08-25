
@extends('userDash.base.dashuser')

@section('main')
   <!-- Page Content Wrapper Start -->
 <div class="main-content-wrapper">
    <div class="container-fluid">
        <div class="form-wrapper">
            <form action="{{ route('app_dash_student_change_profile')}}"  method="POST">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <p class="text-center"><img src="{{ url('https://ui-avatars.com/api/?name='.Session::get('user')['userOut']['firstname'].'+'.Session::get('user')['userOut']['lastname'].'/?rounded=true') }}" alt="Avatar" class="img-thumbnail" style="border-radius: 50%; height:260px;"></p>
                        </div>
                        <!--input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="mt-3"-->
                    </div>
                    <div class="col-lg-8">
                        <!-- Register & Login Form Start -->
                       
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div> 
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="text" id="nom" name="nom" placeholder="{{ Session::get('user')['userOut']['lastname']}}" value="{{ Session::get('user')['userOut']['lastname']}}">
                                </div>
                                @if ($errors->has('nom'))
                                <p class="text-danger mt-2">{{ $errors->first('nom') }}</p>
                                @endif
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="text" id="prenom" name="prenom" placeholder="{{ Session::get('user')['userOut']['firstname']}}" value="{{ Session::get('user')['userOut']['firstname']}}">
                                </div>
                                @if ($errors->has('prenom'))
                                <p class="text-danger mt-2">{{ $errors->first('prenom') }}</p>
                                @endif
                                <!-- Single Form End -->
                                <div class="single-form mm">
                                    <div class="birth">
                                        <input readonly required="true" id="datepicker" name="birth" class="naissance"
                                            id="date" value="{{ old('birth') }}" placeholder="Date de naissance" />
                                    </div>
                                </div>
                                @if ($errors->has('birth'))
                                <p class="text-danger mt-2">{{ $errors->first('birth') }}</p>
                                @endif
                                
    
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
                                    <button type="submit" class="btn bg-light w-100">Modifier</button>
                                </div>
                                <!-- Single Form End -->
    
                            </div>
                            <!-- Register & Login Form End -->
                    </div>

                </div>
            </form>
        </div>

        <div class="single-faq-item mt-7">
            <div class="col-lg-8 mx-auto">
                <!-- Register & Login Form Start -->
                <div>
                    <div class="form-wrapper">
                        <form action="{{route('app_dash_student_change_password')}}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="single-form" style="display: none;">
                                <input type="text" name="email" value="{{Session::get('user')['userOut']['email']}}" placeholder="{{Session::get('user')['userOut']['email']}}">
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
                                <input type="password" name="newPassword_confirmation" placeholder="Confirmer nouveau mot de passe">
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


