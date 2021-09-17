@extends('layouts.base')

@section('PageTitle')
    Accueil
@endsection

@section('main')

    <div class="main-wrapper">

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Slider Start -->
        <div class="section slider-section">

            <!-- Slider Images Start -->
            <div class="slider-images">
                <div class="images">
                    <img src="{{ url('images/slider/slider-eniola.png') }}" alt="Slider">
                </div>
            </div>
            <!-- Slider Images End -->

            <!-- Slider Content Start -->
            <div class="slider-content">
                <h2 class="main-title">Découvrons ensemble Internet</h2>
                <a class="btn btn-secondary btn-hover-dark" href="{{ route('app_about') }}">C'est quoi Internet ?</a>
            </div>
            <!-- Slider Content End -->


        </div>
        <!-- Slider End -->

        <!-- How It Work End -->
        <div class="section detail-eniola">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h1 class="main-title">Qui suis je ?</span></h2>
                </div>
                <!-- Section Title End -->

                <div class="text-justify detail-content">
                    <p>Eniola est une plateforme développée par le
                        Chapitre Benin de l'internet Society, dans le
                        cadre de la mise en oeuvre du Chapterthon
                        2021.
                        Elle a pour but de favoriser l’inclusion numerique
                        de tous, en commencant par proposer a travers
                        des contenus elaborés et dudiques, des parcours
                        sur l’Internet et comment bien l’utiliser</p>
                </div>

                <div class="courses-btn text-center">
                    <a href="{{ route('app_contact') }}" class="btn btn-secondary btn-hover-primary">Qui est Eniola ?</a>
                </div>
            </div>
        </div>
        <!-- How It Work End -->

        <!-- All Courses Start -->
        <div class="section pt-8 pb-8 courses-index">
            <div class="container">

                <!-- All Courses Top Start -->
                <div class="courses-index-top">

                    <!-- Section Title Start -->
                    <div class="section-title shape-01">
                        <h2 class="main-title">Quelques modules</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Courses Search Start -->
                    <div class="courses-search">
                        <form action="#">
                            <input type="text" placeholder="Rechercher un cours">
                            <button><i class="flaticon-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <!-- Courses Search End -->

                </div>
                <!-- All Courses Top End -->

                <!-- All Courses tab content Start -->
                @php
                    $tab = rand_no_repete(count($Courses), 6);
                @endphp
                <div class="tab-content courses-tab-content">
                    <div class="tab-pane fade show active" id="tabs1">

                        <!-- All Courses Wrapper Start -->
                        <div class="courses-wrapper">
                            <div class="row">
                                @for ($i = 0; $i < count($tab); $i++)
                                    <div class="col-lg-4 col-md-6">
                                        <!-- Single Courses Start -->
                                        <div class="single-courses">
                                            <div class="courses-images">
                                                <a
                                                    href="{{ route('app_course_detail', ['id' => $Courses[$tab[$i]]['id']]) }}">
                                                    {{-- <img src="{{ url('images/courses/courses-01.jpg') }}" alt="Courses"> --}}
                                                    <img style="height: 200px; object-fit: cover;"
                                                        src="{{ $Courses[$tab[$i]]['image']['url'] }}" alt="Courses">
                                                </a>
                                            </div>
                                            <div class="courses-content">
                                                <div class="courses-author">
                                                    <div class="author">
                                                        <div class="author-thumb">
                                                            <a href="#">
                                                                <img src="{{ url('images/author/author-01.png') }}"
                                                                    alt="Author">
                                                            </a>
                                                        </div>
                                                        <div class="author-name">
                                                            <a class="name" href="#"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="tag">
                                                        <a href="#">{{ $Courses[$tab[$i]]['category']['category'] }}</a>
                                                    </div>
                                                </div>

                                                <h4 class="title"><a
                                                        href="{{ route('app_course_detail', ['id' => $Courses[$tab[$i]]['id']]) }}">{{ $Courses[$tab[$i]]['title'] }}</a>
                                                </h4>
                                                <div class="courses-meta">
                                                    <span></span>
                                                    <span> <i class="icofont-read-book"></i>
                                                        {{ count($Courses[$tab[$i]]['paragraphs']) }} Paragraphes </span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>

                                @endfor


                            </div>
                        </div>
                        <!-- All Courses Wrapper End -->

                    </div>
                </div>
                <!-- All Courses tab content End -->

                <!-- All Courses BUtton Start -->
                <div class="courses-btn text-center">
                    <a href="{{ route('app_courses') }}" class="btn btn-secondary btn-hover-primary">Voir tout</a>
                </div>
                <!-- All Courses BUtton End -->

            </div>
        </div>
        <!-- All Courses End -->

        <!-- Download App Start -->
        <div class="section section-padding download-section">

            <div class="app-shape-1"></div>
            <div class="app-shape-2"></div>
            <div class="app-shape-3"></div>
            <div class="app-shape-4"></div>

            <div class="container">

                <!-- Download App Wrapper Start -->
                <div class="download-app-wrapper mt-n6">

                    <!-- Section Title Start -->
                    <div class="section-title">
                        {{-- <h5 class="sub-title">Téléchargez Eniola sur</h5> --}}
                        <h2 class="main-title">Téléchargez Eniola sur</h2>
                    </div>
                    <!-- Section Title End -->

                    {{-- <img class="shape-1 animation-right" src="{{ url('images/shape/shape-14.png') }}" alt="Shape"> --}}

                    <!-- Download App Button End -->
                    <div class="download-app-btn">
                        <ul class="app-btn">
                            <li><a href="#"><img src="{{ url('images/google-play.png') }}" alt="Google Play"></a></li>
                            {{-- <li class="eniola_head"><img src="{{ url('images/eniola_head.png') }}" alt="eniola_head">
                            </li> --}}
                        </ul>
                    </div>
                    <!-- Download App Button End -->

                    <div class="eniola-head"><img src="{{ url('images/eniola_head.png') }}" alt="eniola_head"></div>

                </div>
                <!-- Download App Wrapper End -->

            </div>
        </div>
        <!-- Download App End -->

    </div>

@endsection
