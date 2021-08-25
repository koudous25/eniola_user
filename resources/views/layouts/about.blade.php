@extends('layouts.base')

@section('PageTitle')
    A propos
@endsection

@section('main')
    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Page Banner Start -->
    <div class="section page-banner">
        <img class="shape-2" src="{{ url('images/shape/shape-23.png') }}" alt="Shape">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="{{ route('app_home') }}">Accueil</a></li>
                    <li class="active">A propos</li>
                </ul>
                <h2 class="title">A propos de <span>Eniola</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>

        <!-- Shape Icon Box Start -->
        <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="{{ url('images/shape/shape-5.png') }}" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-badge"></i>
                </div>
            </div>

            <img class="icon-shape-2" src="{{ url('images/shape/shape-6.png') }}" alt="Shape">

        </div>
        <!-- Shape Icon Box End -->

        <img class="shape-3" src="{{ url('images/shape/shape-24.png') }}" alt="Shape">

        <img class="shape-author" src="{{ url('images/author/author-11.jpg') }}" alt="Shape">

    </div>
    <!-- Page Banner End -->

    <!-- About Start -->
    <div class="section">

        <div class="section-padding-02 mt-n10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <!-- About Images Start -->
                        <div class="about-images">
                            <div class="images">
                                <img src="{{ url('images/about.jpg') }}" alt="About">
                            </div>

                            <div class="about-years">
                                <div class="years-icon">
                                    <img src="{{ url('images/logo-icon.png') }}" alt="About">
                                </div>
                                <p><strong>28+</strong> Years Experience</p>
                            </div>
                        </div>
                        <!-- About Images End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- About Content Start -->
                        <div class="about-content">
                            <h5 class="sub-title">Bienvenu sur Eniola.</h5>
                            <h2 class="main-title">vous pouvez rejoindre Edule et améliorer vos compétences pour
                                <span>bien appréhender l'internet.</span>
                            </h2>
                            <p>Nous vous proposons des cours de qualité extremement autour de l'internet</p>
                            <a href="/courses" class="btn btn-primary btn-hover-dark">Commencer un cours</a>
                        </div>
                        <!-- About Content End -->

                    </div>
                </div>
            </div>
        </div>

        <div class="section-padding-02 mt-n6">
            <div class="container">

                <!-- About Items Wrapper Start -->
                <div class="about-items-wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- About Item Start -->
                            <div class="about-item">
                                <div class="item-icon-title">
                                    <div class="item-icon">
                                        <i class="flaticon-tutor"></i>
                                    </div>
                                    <div class="item-title">
                                        <h3 class="title">Meilleurs cours</h3>
                                    </div>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dumy text since the when took and
                                    scrambled to make type specimen book has survived.</p>
                                <p>Lorem Ipsum has been the industry's standard dumy text since the when took and
                                    scrambled make.</p>
                            </div>
                            <!-- About Item End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- About Item Start -->
                            <div class="about-item">
                                <div class="item-icon-title">
                                    <div class="item-icon">
                                        <i class="flaticon-coding"></i>
                                    </div>
                                    <div class="item-title">
                                        <h3 class="title">Programme de tout niveau</h3>
                                    </div>
                                </div>
                                <p>Nos cours sont faciles à comprendre.</p>
                                <p></p>
                            </div>
                            <!-- About Item End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- About Item Start -->
                            <div class="about-item">
                                <div class="item-icon-title">
                                    <div class="item-icon">
                                        <i class="flaticon-increase"></i>
                                    </div>
                                    <div class="item-title">
                                        <h3 class="title">Améliorer rapidement</h3>
                                    </div>
                                </div>
                                <p>Lorem Ipsum has been the industry's standard dumy text since the when took and
                                    scrambled to make type specimen book has survived.</p>
                                <p>Lorem Ipsum has been the industry's standard dumy text since the when took and
                                    scrambled make.</p>
                            </div>
                            <!-- About Item End -->
                        </div>
                    </div>
                </div>
                <!-- About Items Wrapper End -->

            </div>
        </div>

    </div>
    <!-- About End -->
@endsection
