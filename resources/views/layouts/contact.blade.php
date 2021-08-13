@extends('layouts.base')

@section('main')
    <!-- Page Banner Start -->
    <div class="section page-banner">

        <img class="shape-1 animation-round" src="{{ secure_asset('/images/shape/shape-8.png') }}" alt="Shape">

        <img class="shape-2" src="{{ secure_asset('/images/shape/shape-23.png') }}" alt="Shape">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="{{ route('app_home') }}">Accueil</a></li>
                    <li class="active">contact</li>
                </ul>
                <h2 class="title">Contactez <span>Nous</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>

        <!-- Shape Icon Box Start -->
        <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="{{ secure_asset('/images/shape/shape-5.png') }}" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-badge"></i>
                </div>
            </div>

            <img class="icon-shape-2" src="{{ secure_asset('/images/shape/shape-6.png') }}" alt="Shape">

        </div>
        <!-- Shape Icon Box End -->

        <img class="shape-3" src="{{ secure_asset('/images/shape/shape-24.png') }}" alt="Shape">

        <img class="shape-author" src="{{ secure_asset('/images/author/author-11.jpg') }}" alt="Shape">

    </div>
    <!-- Page Banner End -->

    <!-- Contact Map Start -->
    <div class="section section-padding-02">
        <div class="container">

            <!-- Contact Map Wrapper Start -->
            <div class="contact-map-wrapper">
                <iframe id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
            <!-- Contact Map Wrapper End -->

        </div>
    </div>
    <!-- Contact Map End -->

    <!-- Contact Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Contact Wrapper Start -->
            <div class="contact-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">

                        <!-- Contact Info Start -->
                        <div class="contact-info">

                            <img class="shape animation-round" src="{{ secure_asset('/images/shape/shape-12.png') }}"
                                alt="Shape">

                            <!-- Single Contact Info Start -->
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="info-content">
                                    <h6 class="title">Téléphone</h6>
                                    <p><a href="tel:62916946">(+229) 62916946</a></p>
                                </div>
                            </div>
                            <!-- Single Contact Info End -->
                            <!-- Single Contact Info Start -->
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h6 class="title">Email Address.</h6>
                                    <p><a href="isocbenin@gmail.com">isocbenin@gmail.com</a></p>
                                </div>
                            </div>
                            <!-- Single Contact Info End -->
                            <!-- Single Contact Info Start -->
                            <div class="single-contact-info">
                                <div class="info-icon">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="info-content">
                                    <h6 class="title">Notre Siège</h6>
                                    <p>En face du marché Midombo-Akpakpa, Cotonou, Bénin</p>
                                </div>
                            </div>
                            <!-- Single Contact Info End -->
                        </div>
                        <!-- Contact Info End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <h3 class="title">Prenez contact <span>avec nous </span></h3>

                            <div class="form-wrapper">
                                <form id="contact-form" action="api/user" method="POST">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="text" name="name" placeholder="Nom" required>
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input type="text" name="subject" placeholder="Sujet" required>
                                    </div>
                                    <!-- Single Form End -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                    <!-- Single Form End -->
                                    <p class="form-message"></p>
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button class="btn btn-primary btn-hover-dark w-100">Envoyez Message <i
                                                class="flaticon-right"></i></button>
                                    </div>
                                    <!-- Single Form End -->
                                </form>
                            </div>
                        </div>
                        <!-- Contact Form End -->

                    </div>
                </div>
            </div>
            <!-- Contact Wrapper End -->

        </div>
    </div>
    <!-- Contact End -->
@endsection
