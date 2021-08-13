@extends('layouts.base-dashboard')

@section('main')
    <div class="page-content-wrapper py-0">

        <!-- Admin Tab Menu Start -->
        <div class="nav flex-column nav-pills admin-tab-menu">
            <a href="#" class="active">A propos de moi</a>
            <a href="#">Informations sur le compte</a>
        </div>
        <!-- Admin Tab Menu End -->
        <div class="main-content-wrapper">
            <div class="container-fluid">
                <!-- Single FAQ Item Start -->
                <div class="">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div>
                                <p class="text-center"><img src="{{ secure_asset('images/custom/avatar.png') }}" alt=""
                                        class="img-thumbnail" style="border-radius: 50%; height:300px;"></p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="text-center mt-2">{{ complete_name(Session::get('user')) }}</h3>
                            <h4 class="text-center mt-2 text-muted">{{ Session::get('user')['userOut']['birthday'] }}
                            </h4>
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
                <div class="mt-3">
                    <a href="/change-profile" role="button" class="btn  btn-success w-100">Modifier mon profil</a>
                </div>
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
