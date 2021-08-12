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
                <div class="single-faq-item">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div>
                                <p class="text-center"><img src="{{ url('images/custom/avatar.png') }}" alt=""
                                        class="img-thumbnail" style="border-radius: 50%;"></p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="text-center mt-2">Martha SIMSON</h3>
                            <h4 class="text-center mt-2">22/01/2000</h4>
                            <div>
                                <p class="pprofil">Lorem Ipsum is simply dummy text
                                    of the printing
                                    and
                                    typesetting industry
                                    lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500 when un
                                    known
                                    printer took make a type specimen typesetting industry lorem Ipsum has
                                    been
                                    the
                                    industry's standard dummy text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single FAQ Item End -->

                <!-- Single FAQ Item Start -->
                <div class="container">
                    <div class="single-faq-item row justify-content-between caseprofil">
                        <div class="col-lg-10">
                            <h5>Date d'inscription:</h5>
                        </div>
                        <div class="col-lg-2">
                            <p>15/07/2021</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class=" single-faq-item row justify-content-between caseprofil">
                        <div class="col-lg-10 ">
                            <h5>Dernière connexion:</h5>
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
