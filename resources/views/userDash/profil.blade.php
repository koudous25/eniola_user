

@extends('userDash.base.dashuser')



@section('main')
    
        <div class="main-content-wrapper">
            <div class="container-fluid">
                <!-- Single FAQ Item Start -->
                <div class="">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div>
                                <p class="text-center"><img src="{{ url('https://ui-avatars.com/api/?name='.Session::get('user')['userOut']['firstname'].'+'.Session::get('user')['userOut']['lastname'].'/?rounded=true') }}" alt="Avatar" class="img-thumbnail" style="border-radius: 50%; height:300px;"></p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <p class="text-center mt-2 bb">{{ complete_name(Session::get('user'))}}</p>
                            <p class="text-center mt-2 text-muted bb">{{ (Session::get('user')['userOut'])['birthday']}}</p>
                            <p class="text-center mt-2 text-muted bb">Mentor: ONG RegardeEnfants</p>
                        </div>
                    </div>
                </div>
                <!-- Single FAQ Item End -->

                <!-- Single FAQ Item Start -->
                <div class="container">
                    <div class="row justify-content-between caseprofil">
                        <div class="col-lg-10">
                            <p>Date d'inscription:</p>
                        </div>
                        <div class="col-lg-2">
                            <p>15/07/2021</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-between caseprofil">
                        <div class="col-lg-10 ">
                            <p>Dernière connexion:</p>
                        </div>
                        <div class="col-lg-2">
                            <p>15/07/2021</p>
                        </div>
                    </div>
                </div>

                <!-- Single FAQ Item End -->
                <div class="mt-5">
                    <a href="{{ route('app_dash_student_parametre')}}" role="button" class="btn  btn-success w-100">Modifier mon profil</a>
                </div>
            </div>
        </div>


   
@endsection

@section('scripts')
    <!--Custom-->
    <script>
        $(document).ready(function() {
            $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
            )
        });
    </script>
@endsection
