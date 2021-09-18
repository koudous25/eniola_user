@extends('layouts.base')

@section('PageTitle')
    Qui est Eniola ?
@endsection

@section('main')
    <!-- Page Banner Start -->
    <div class="section page-banner">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <h2 class="title">Qui est Eniola ?</h2>
            </div>
            <!-- Page Banner End -->
        </div>

    </div>
    <!-- Page Banner End -->

    <!-- Contact Start -->
    <div class="section section-padding">
        <!-- Contact Wrapper Start -->
        <div class="container">
            <div class=" section eniola-section">
                <div class="image-eniola">

                    {{-- <img class="" src=" {{ url('/images/eniola.png') }}" alt="eniola"> --}}

                    <img class="" src=" {{ url('/images/slider/slider-eniola.png') }}" alt="eniola">
                </div>
                <div class="eniola-content">
                    <div class="image-eniola-bulle">
                        <img class="bulle" src=" {{ url('/images/bulle_enioladef.png') }}" alt="eniola-bulle">

                        <span> &nbsp;&nbsp;&nbsp;&nbsp; Je <br> suis ENIOLA et <br> je vais t'apprendre à <br> &nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            bien utiliser
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &#160; internet</span>
                    </div>

                    <div class="text-eniola">
                        <p class=" text-justify part-1">Eniola est une plateforme développée par le Chapitre Benin de
                            l'internet Society, dans le cadre de la mise en oeuvre du Chapterthon 2021.
                        </p>
                        <p class="text-justify part-2"> Elle a pour but de favoriser l’inclusion numérique de tous, en
                            commençant par proposer à travers des contenus elaborés et ludiques, des parcours sur l’Internet
                            et comment bien l’utiliser
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->
@endsection
