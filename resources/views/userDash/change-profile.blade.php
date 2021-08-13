@extends('userDash.base.base-parametre')

@section('param')
    <!-- Page Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="container-fluid">
            <div class="form-wrapper">
                <form action="#">
                    <div class="row justify-content-between">

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <p class="text-center"><img src="{{ secure_asset('images/custom/avatar.png') }}" alt=""
                                        class="img-thumbnail" style="border-radius: 50%; height:300px;"></p>
                            </div>
                            <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="mt-5">
                        </div>
                        <div class="col-lg-8">
                            <!-- Register & Login Form Start -->
                            <div>

                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="text" id="prenom" name="nom"
                                        placeholder="{{ Session::get('user')['userOut']['lastname'] }}">
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="text" id="prenom" name="prenom"
                                        placeholder="{{ Session::get('user')['userOut']['firstname'] }}">
                                </div>
                                <!-- Single Form End -->
                                <div class="single-form mm">
                                    <div class="birth">
                                        <input readonly required="true" id="datepicker" name="birth" class="naissance"
                                            id="date" value="{{ old('birth') }}"
                                            placeholder="{{ Session::get('user')['userOut']['birthday'] }}" />
                                    </div>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                        value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Féminin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                        value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Masculin</label>
                                </div>
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

        </div>
        <!-- Page Content Wrapper End -->
    </div>
    <!-- Courses Admin End -->
@endsection
