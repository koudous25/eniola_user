@extends('layouts.base')

{{-- @section('PageTitle', $Course->title) --}}

@section('header')

@endsection

@section('main')

    <div class="main-wrapper">

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->


        <!-- Page Banner Start -->
        <div class="section page-banner">

            <img class="shape-1 animation-round" src="{{ url('images/shape/shape-8.png') }}" alt="Shape">

            <img class="shape-2" src="{{ url('images/shape/shape-23.png') }}" alt="Shape">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('app_home') }}">Accueil</a></li>
                        <li class="active">Présentation du cours </li>
                    </ul>
                    <h2 class="title"><span>{{ $Course['title'] }} </span></h2>
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

        <!-- Courses Start -->
        <div class="section section-padding mt-n10">
            <div class="container">
                <div class="row gx-10">
                    <div class="col-lg-8">

                        <!-- Courses Details Start -->
                        <div class="courses-details">

                            <div class="courses-details-images">
                                <img src="{{ $Course['image']['url'] }}" alt="Courses Details">
                                <span class="tags">{{ $Course['category']['category'] }}</span>

                                <div class="courses-play">
                                    <img src="{{ url('images/courses/circle-shape.png') }}" alt="Play">
                                    <a class="play video-popup" href="https://www.youtube.com/watch?v=dyQSFP8y4kw"><i
                                            class="flaticon-play"></i></a>
                                </div>
                            </div>

                            <h2 class="title">{{ $Course['title'] }}</h2>

                            <div class="courses-details-admin">
                                <div class="admin-author">
                                    <div class="author-thumb">
                                        <img src="{{ url('images/author/author-01.png') }}" alt="Author">
                                    </div>
                                    <div class="author-content">
                                        <a class="name" href="isoc.bj">ISOC Bénin</a>
                                        {{-- <span class="Enroll">28 Étudiants inscrits</span> --}}
                                    </div>
                                </div>

                            </div>

                            <!-- Courses Details Tab Start -->
                            <div class="courses-details-tab">

                                <!-- Details Tab Menu Start -->
                                <div class="details-tab-menu">
                                    <ul class="nav justify-content-center">
                                        <li><button class="active" data-bs-toggle="tab"
                                                data-bs-target="#description">Description</button></li>
                                        <li><button data-bs-toggle="tab" data-bs-target="#reviews">Commentaires</button>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Details Tab Menu End -->

                                <!-- Details Tab Content Start -->
                                <div class="details-tab-content">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="description">

                                            <!-- Tab Description Start -->
                                            <div class="tab-description">
                                                <div class="description-wrapper">
                                                    <h3 class="tab-title">Description:</h3>
                                                    <p>{{ $Course['description'] }}</p>
                                                </div>
                                            </div>
                                            <!-- Tab Description End -->

                                        </div>

                                        <div class="tab-pane fade" id="reviews">

                                            <!-- Tab Reviews Start -->
                                            <div class="tab-reviews">
                                                <h3 class="tab-title">Commentaires des étudiants:</h3>

                                                <div class="reviews-wrapper reviews-active">
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">

                                                            <!-- Single Reviews Start -->
                                                            <div class="single-review swiper-slide">
                                                                <div class="review-author">
                                                                    <div class="author-thumb">
                                                                        <img src="{{ url('images/author/author-06.jpg') }}"
                                                                            alt="Author">
                                                                        <i class="icofont-quote-left"></i>
                                                                    </div>
                                                                    <div class="author-content">
                                                                        <h4 class="name">Sara Alexander</h4>
                                                                        <span class="designation">Product Designer,
                                                                            USA</span>
                                                                        <span class="rating-star">
                                                                            <span class="rating-bar"
                                                                                style="width: 100%;"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem Ipsum has been the industry's standard dummy text
                                                                    since the 1500 when unknown printer took a galley of
                                                                    type and scrambled to make type specimen book has
                                                                    survived not five centuries but also the leap into
                                                                    electronic type and book.</p>
                                                            </div>
                                                            <!-- Single Reviews End -->

                                                            <!-- Single Reviews Start -->
                                                            <div class="single-review swiper-slide">
                                                                <div class="review-author">
                                                                    <div class="author-thumb">
                                                                        <img src="{{ url('images/author/author-07.jpg') }}"
                                                                            alt="Author">
                                                                        <i class="icofont-quote-left"></i>
                                                                    </div>
                                                                    <div class="author-content">
                                                                        <h4 class="name">Karol Bachman</h4>
                                                                        <span class="designation">Product Designer,
                                                                            USA</span>
                                                                        <span class="rating-star">
                                                                            <span class="rating-bar"
                                                                                style="width: 100%;"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem Ipsum has been the industry's standard dummy text
                                                                    since the 1500 when unknown printer took a galley of
                                                                    type and scrambled to make type specimen book has
                                                                    survived not five centuries but also the leap into
                                                                    electronic type and book.</p>
                                                            </div>
                                                            <!-- Single Reviews End -->

                                                            <!-- Single Reviews Start -->
                                                            <div class="single-review swiper-slide">
                                                                <div class="review-author">
                                                                    <div class="author-thumb">
                                                                        <img src="{{ url('images/author/author-03.jpg') }}"
                                                                            alt="Author">
                                                                        <i class="icofont-quote-left"></i>
                                                                    </div>
                                                                    <div class="author-content">
                                                                        <h4 class="name">Gertude Culbertson</h4>
                                                                        <span class="designation">Product Designer,
                                                                            USA</span>
                                                                        <span class="rating-star">
                                                                            <span class="rating-bar"
                                                                                style="width: 100%;"></span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <p>Lorem Ipsum has been the industry's standard dummy text
                                                                    since the 1500 when unknown printer took a galley of
                                                                    type and scrambled to make type specimen book has
                                                                    survived not five centuries but also the leap into
                                                                    electronic type and book.</p>
                                                            </div>
                                                            <!-- Single Reviews End -->

                                                        </div>
                                                        <!-- Add Pagination -->
                                                        <div class="swiper-pagination"></div>
                                                    </div>
                                                </div>

                                                <div class="reviews-btn">
                                                    <button type="button" class="btn btn-primary btn-hover-dark"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#reviewsModal">Commentez</button>
                                                </div>

                                                <!-- Reviews Form Modal Start -->
                                                <div class="modal fade" id="reviewsModal">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Ajoutez un commentaire</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <!-- Reviews Form Start -->
                                                            <div class="modal-body reviews-form">
                                                                <form action="#">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <!-- Single Form Start -->
                                                                            <div class="single-form">
                                                                                <input type="text"
                                                                                    placeholder="Entrer votre nom">
                                                                            </div>
                                                                            <!-- Single Form End -->
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <!-- Single Form Start -->
                                                                            <div class="single-form">
                                                                                <input type="text"
                                                                                    placeholder="Entrer votre Email">
                                                                            </div>
                                                                            <!-- Single Form End -->
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <!-- Single Form Start -->
                                                                            <div class="reviews-rating">
                                                                                <label>Rating</label>
                                                                                <ul id="rating" class="rating">
                                                                                    <li class="star" title='Poor'
                                                                                        data-value='1'><i
                                                                                            class="icofont-star"></i></li>
                                                                                    <li class="star" title='Poor'
                                                                                        data-value='2'><i
                                                                                            class="icofont-star"></i></li>
                                                                                    <li class="star" title='Poor'
                                                                                        data-value='3'><i
                                                                                            class="icofont-star"></i></li>
                                                                                    <li class="star" title='Poor'
                                                                                        data-value='4'><i
                                                                                            class="icofont-star"></i></li>
                                                                                    <li class="star" title='Poor'
                                                                                        data-value='5'><i
                                                                                            class="icofont-star"></i></li>
                                                                                </ul>
                                                                            </div>
                                                                            <!-- Single Form End -->
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <!-- Single Form Start -->
                                                                            <div class="single-form">
                                                                                <textarea
                                                                                    placeholder="Ecrivez votre commentaire ici"></textarea>
                                                                            </div>
                                                                            <!-- Single Form End -->
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <!-- Single Form Start -->
                                                                            <div class="single-form">
                                                                                <button
                                                                                    class="btn btn-primary btn-hover-dark">Envoyer</button>
                                                                            </div>
                                                                            <!-- Single Form End -->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <!-- Reviews Form End -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Reviews Form Modal End -->

                                            </div>
                                            <!-- Tab Reviews End -->

                                        </div>
                                    </div>
                                </div>
                                <!-- Details Tab Content End -->

                            </div>
                            <!-- Courses Details Tab End -->

                        </div>
                        <!-- Courses Details End -->

                    </div>
                    <div class="col-lg-4">
                        <!-- Courses Details Sidebar Start -->
                        <div class="sidebar">

                            <!-- Sidebar Widget Information Start -->
                            <div class="sidebar-widget widget-information">
                                <div class="info-price">
                                    <span class="price">Gratuit</span>
                                </div>
                                <div class="info-list">
                                    <ul>
                                        {{-- <li><i class="icofont-clock-time"></i> <strong>Durée</strong> <span>08 hr 15 mins</span></li> --}}
                                        {{-- <li><i class="icofont-ui-video-play"></i> <strong>Lectures</strong> <span>29</span> --}}
                                        </li>
                                        <li><i class="icofont-bars"></i> <strong>Niveau</strong> <span>Secondaire</span>
                                        </li>
                                        <li><i class="icofont-certificate-alt-1"></i> <strong>Certificat</strong>
                                            <span>Oui</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="info-btn">
                                    @if (Session::get('user')['userOut']['role'] == 'RESPONSABLE')
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#enrollStudent"
                                            class="btn btn-primary btn-hover-dark">Inscrire un étudiant</a>
                                    @else
                                        <a href="{{ route('app_enroll', ['id' => $Course['id']]) }}"
                                            class="btn btn-primary btn-hover-dark">Inscrivez-vous</a>
                                    @endif
                                </div>
                                @if (Session::get('user')['userOut']['role'] == 'RESPONSABLE')
                                    <!-- Reviews Form Modal Start -->
                                    <div class="modal fade" id="enrollStudent">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Inscrire des étudiants à
                                                        {{ $Course['title'] }}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <!-- Reviews Form Start -->
                                                <div class="modal-body reviews-form">
                                                    <form action="{{ route('app_enroll2', ['id' => $Course['id']]) }}"
                                                        method="POST">

                                                        @csrf
                                                        @foreach ($Students as $student)
                                                            <div class="row m-5">
                                                                <div class="col-md-2">
                                                                    <input class="form-check-input" name="check"
                                                                        id="<?php echo $student['userId']; ?>" type="checkbox">

                                                                </div>
                                                                <div class="col-md-10">

                                                                    <h5>{{ $student['firstname'] }}
                                                                        {{ $student['lastname'] }}
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <div class="col-md-12">
                                                            <!-- Single Form Start -->
                                                            <div class="single-form">
                                                                <button
                                                                    class="btn btn-primary btn-hover-dark">VALIDER</button>
                                                            </div>
                                                            <!-- Single Form End -->
                                                        </div>
                                                        <input name="students" type="hidden" value="" id="etuList" />
                                                    </form>
                                                </div>
                                                <!-- Reviews Form End -->
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <!-- Reviews Form Modal End -->

                            </div>
                            <!-- Sidebar Widget Information End -->

                            <!-- Sidebar Widget Share Start -->
                            {{-- <div class="sidebar-widget">
                                <h4 class="widget-title">Partager le cours:</h4>

                                <ul class="social">
                                    <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                    <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                    <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                    <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div> --}}
                            <!-- Sidebar Widget Share End -->

                        </div>
                        <!-- Courses Details Sidebar End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->

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
                    <div class="section-title section-title-white">
                        <h5 class="sub-title">Prêt à commencer ?</h5>
                        <h2 class="main-title">Téléchargez notre application mobile. pour commencer facilement votre cours.
                        </h2>
                    </div>
                    <!-- Section Title End -->

                    <img class="shape-1 animation-right" src="{{ url('images/shape/shape-14.png') }}" alt="Shape">

                    <!-- Download App Button End -->
                    <div class="download-app-btn">
                        <ul class="app-btn">
                            <li><a href="#"><img src="{{ url('images/google-play.png') }}" alt="Google Play"></a></li>
                            <li><a href="#"><img src="{{ url('images/app-store.png') }}" alt="App Store"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Download App Button End -->

                </div>
                <!-- Download App Wrapper End -->

            </div>
        </div>
        <!-- Download App End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>

@endsection

@section('footer')

@endsection

@section('scripts')

    <script>
        $('#enrollStudent').on('shown.bs.modal', function(e) {
            $('.form-check-input').on('change', function(e) {
                var valueCheck = $(this).val();
                var id_Student_Check = $(this).prop('id');
                //etuList  id_check
                var last_ids = $('#etuList').val();
                if (last_ids.includes(id_Student_Check)) {
                    last_ids = last_ids.replace(id_Student_Check + ",", "");
                } else {
                    last_ids = last_ids + id_Student_Check + ",";
                }
                $('#etuList').val(last_ids);
            });
        })
    </script>
@endsection
