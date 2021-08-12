@extends('userDash.base.base-parametre')

@section('param')
    <!-- Page Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="container-fluid">
            <div class="form-wrapper">
                <form action="#">
                    <div class="single-faq-item row justify-content-between">

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <p class="text-center"><img src="{{ url('images/custom/avatar.png') }}" alt=""
                                        class="img-thumbnail" style="border-radius: 50%;"></p>
                            </div>
                            <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                        </div>
                        <div class="col-lg-8">
                            <!-- Register & Login Form Start -->
                            <div>

                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label for="nom">Nom</label>
                                    <input type="text" id="nom" name="nom" placeholder="">
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <label for="nom">Prénom</label>
                                    <input type="text" id="nom" name="nom" placeholder="">
                                </div>
                                <!-- Single Form End -->
                                <div class="single-form mm">
                                    <label class="mb-2">Date de naissance</label>
                                    <div class="birth">
                                        <input disabled="true" required="true" id="datepicker" name="date"
                                            class="naissance" />
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
                                <div class="single-form">
                                    <label for="bio">Bio</label>
                                    <textarea name="bio" id="bio" placeholder="Décris toi en quelques mots"></textarea>
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
