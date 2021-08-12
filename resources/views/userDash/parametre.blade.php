@extends('userDash.base.base-parametre')

@section('param')
 <!-- Page Content Wrapper Start -->
 <div class="main-content-wrapper">
    <div class="container-fluid">
        <div class="single-faq-item">
            <div class="col-lg-8 mx-auto">
                <!-- Register & Login Form Start -->
                <div>
                    <div class="form-wrapper">
                        <form action="#">
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="text" placeholder="Mot de passe">
                            </div>
                            <!-- Single Form End -->
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="text" placeholder="Nouvel mot de passe">
                            </div>
                            <!-- Single Form End -->
                            <!-- Single Form Start -->
                            <div class="single-form">
                                <input type="text" placeholder="Confimer nouveau mot de passe">
                            </div>
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