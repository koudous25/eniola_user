@extends('layouts.base') @section('title', 'Accueil')

@section('main')

<div class="main-wrapper">

    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Slider Start -->
    <div class="section slider-section">

        <!-- Slider Shape Start -->
        <div class="slider-shape">
            <img class="shape-1 animation-round" src=" {{ url('images/shape/shape-8.png') }}" alt="Shape">
        </div>
        <!-- Slider Shape End -->

        <div class="container">

            <!-- Slider Content Start -->
            <div class="slider-content">
                <h4 class="sub-title">Commencez votre cours préféré</h4>
                <h2 class="main-title">Apprenez de n'importe où et construisez votre <span>avenir.</span>
                </h2>
                <p>Tous nos cours ont rapport avec l'internet.</p>
                <a class="btn btn-primary btn-hover-dark" href="/login">Commencer un cours</a>
            </div>
            <!-- Slider Content End -->

        </div>

        <!-- Slider Courses Box Start -->
        <div class="slider-courses-box">

            <img class="shape-1 animation-left" src="{{ url('images/shape/shape-5.png') }}" alt="Shape">

            <div class="box-content">
                <div class="box-wrapper">
                    <i class="flaticon-open-book"></i>
                    <span class="count">1,235</span>
                    <p>courses</p>
                </div>
            </div>

            <img class="shape-2" src="{{ url('images/shape/shape-6.png') }}" alt="Shape">

        </div>
        <!-- Slider Courses Box End -->



        <!-- Slider Images Start -->
        <div class="slider-images">
            <div class="images">

                <img src="{{ url('images/slider/slider-1.png') }}" alt="Slider">
            </div>
        </div>
        <!-- Slider Images End -->

        <!-- Slider Video Start -->
        <div class="slider-video">
            <img class="shape-1" src="{{ 'images/shape/shape-9.png' }}" alt="Shape">

            <div class="video-play">
                <img src="{{ url('images/shape/shape-10.png') }}" alt="Shape">
                <a href="https://www.youtube.com/watch?v=BRvyWfuxGuU" class="play video-popup"><i
                        class="flaticon-play"></i></a>
            </div>
        </div>
        <!-- Slider Video End -->

    </div>
    <!-- Slider End -->

    <!-- All Courses Start -->
    <div class="section section-padding-02">
        <div class="container">

            <!-- All Courses Top Start -->
            <div class="courses-top">

                <!-- Section Title Start -->
                <div class="section-title shape-01">
                    <h2 class="main-title">Tous les <span>Cours</span> de Eniola</h2>
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


            <!-- All Courses Tabs Menu Start -->
            <div class="courses-tabs-menu courses-active">
                <div class="swiper-container">
                    <ul class="swiper-wrapper nav">
                        @foreach ($Categories as $category)
                            <li class="swiper-slide"><button class="" data-bs-toggle="tab"
                                    data-bs-target="#tabs{{ $loop->iteration }}">{{ $category['categoryName'] }}</button>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Add Pagination -->
                <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
            </div>
            <!-- All Courses Tabs Menu End -->

            <!-- All Courses tab content Start -->
            <div class="tab-content courses-tab-content">
                <div class="tab-pane fade show active" id="tabs1">

                    <!-- All Courses Wrapper Start -->
                    <div class="courses-wrapper">
                        <div class="row">

                            @foreach ($Courses as $cours)

                                <div class="col-lg-4 col-md-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-courses">
                                        <div class="courses-images">
                                            <a href="/courses-details">
                                                {{-- <img src="{{ url('images/courses/courses-01.jpg') }}" alt="Courses"> --}}
                                                <img src="{{ $cours['image']['url'] }}" alt="Courses">
                                            </a>
                                        </div>
                                        <div class="courses-content">
                                            <div class="courses-author">
                                                <div class="author">
                                                    <div class="author-thumb">
                                                        <a href="#">
                                                            <img src="{{ url('images/author/author-01.jpg') }}"
                                                                alt="Author">
                                                        </a>
                                                    </div>
                                                    <div class="author-name">
                                                        <a class="name" href="#"> </a>
                                                    </div>
                                                </div>
                                                <div class="tag">
                                                    <a href="#">{{ $cours['category']['category'] }}</a>
                                                </div>
                                            </div>

                                            <h4 class="title"><a href="/courses-details">{{ $cours['title'] }}</a>
                                            </h4>
                                            <div class="courses-meta">
                                                <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                                <span> <i class="icofont-read-book"></i> 9 Lectures </span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- All Courses Wrapper End -->

                </div>

                @foreach ($Categories as $category)
                    <div class="tab-pane fade" id="tabs{{ $loop->iteration }}">

                        <!-- All Courses Wrapper Start -->
                        <div class="courses-wrapper">
                            <div class="row">

                                @foreach ($Courses as $cours)

                                    @if ($cours['category']['category'] == $category['categoryName'])
                                        <div class="col-lg-4 col-md-6">
                                            <!-- Single Courses Start -->
                                            <div class="single-courses">
                                                <div class="courses-images">
                                                    <a href="/courses-details">
                                                        <img src="{{ $cours['image']['url'] }}" alt="Courses">
                                                    </a>
                                                </div>
                                                <div class="courses-content">
                                                    <div class="courses-author">
                                                        <div class="author">
                                                            <div class="author-thumb">
                                                                <a href="#">
                                                                    <img src="{{ url('images/author/author-01.jpg') }}"
                                                                        alt="Author">
                                                                </a>
                                                            </div>
                                                            <div class="author-name">
                                                                <a class="name" href="#"> </a>
                                                            </div>
                                                        </div>
                                                        <div class="tag">
                                                            <a href="#">{{ $cours['category']['category'] }}</a>
                                                        </div>
                                                    </div>

                                                    <h4 class="title"><a
                                                            href="/courses-details">{{ $cours['title'] }}</a>
                                                    </h4>
                                                    <div class="courses-meta">
                                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                                        <span> <i class="icofont-read-book"></i> 9 Lectures </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Single Courses End -->
                                        </div>
                                    @else

                                        @continue
                                    @endif


                                @endforeach
                            </div>
                        </div>
                        <!-- All Courses Wrapper End -->

                    </div>
                @endforeach
            </div>
            <!-- All Courses tab content End -->

            <!-- All Courses BUtton Start -->
            <div class="courses-btn text-center">
                <a href="/courses" class="btn btn-secondary btn-hover-primary">Voir plus de cours</a>
            </div>
            <!-- All Courses BUtton End -->

        </div>
    </div>
    <!-- All Courses End -->

    <!-- How It Work End -->
    <div class="section section-padding mt-n1">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title shape-03 text-center">
                <h5 class="sub-title">Over 1,235+ Course</h5>
                <h2 class="main-title">Comment ça <span> marche ?</span></h2>
            </div>
            <!-- Section Title End -->

            <!-- How it Work Wrapper Start -->
            <div class="how-it-work-wrapper">

                <!-- Single Work Start -->
                <div class="single-work">
                    <img class="shape-1" src="{{ url('images/shape/shape-15.png') }}" alt="Shape">

                    <div class="work-icon">
                        <i class="flaticon-transparency"></i>
                    </div>
                    <div class="work-content">
                        <h3 class="title">Trouvez votre cours</h3>
                        <p>It has survived not only centurie also leap into electronic.</p>
                    </div>
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="work-arrow">
                    <img class="arrow" src="{{ url('images/shape/shape-17.png') }}" alt="Shape">
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="single-work">
                    <img class="shape-2" src="{{ url('images/shape/shape-15.png') }}" alt="Shape">

                    <div class="work-icon">
                        <i class="flaticon-forms"></i>
                    </div>
                    <div class="work-content">
                        <h3 class="title">Réserver un siège</h3>
                        <p>It has survived not only centurie also leap into electronic.</p>
                    </div>
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="work-arrow">
                    <img class="arrow" src="{{ url('images/shape/shape-17.png') }}" alt="Shape">
                </div>
                <!-- Single Work End -->

                <!-- Single Work Start -->
                <div class="single-work">
                    <img class="shape-3" src="{{ url('images/shape/shape-16.png') }}" alt="Shape">

                    <div class="work-icon">
                        <i class="flaticon-badge"></i>
                    </div>
                    <div class="work-content">
                        <h3 class="title">Obtenir un certificat</h3>
                        <p>It has survived not only centurie also leap into electronic.</p>
                    </div>
                </div>
                <!-- Single Work End -->

            </div>

        </div>
    </div>
    <!-- How It Work End -->

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
                    <h2 class="main-title">Téléchargez notre application mobile. pour commencer facilement votre
                        cours.</h2>
                </div>
                <!-- Section Title End -->

                <img class="shape-1 animation-right" src="{{ url('images/shape/shape-14.png') }}" alt="Shape">

                <!-- Download App Button End -->
                <div class="download-app-btn">
                    <ul class="app-btn">
                        <li><a href="/courses-details"><img src="{{ url('images/google-play.png') }}"
                                    alt="Google Play"></a></li>
                        <li><a href="/courses-details"><img src="{{ url('images/app-store.png') }}"
                                    alt="App Store"></a></li>
                    </ul>
                </div>
                <!-- Download App Button End -->

            </div>
            <!-- Download App Wrapper End -->

        </div>
    </div>
    <!-- Download App End -->

    <!-- Brand Logo Start -->
    <div class="section section-padding-02">
        <div class="container">

            <!-- Brand Logo Wrapper Start -->
            <div class="brand-logo-wrapper">

                <img class="shape-1" src="{{ url('images/shape/shape-19.png') }}" alt="Shape">

                <img class="shape-2 animation-round" src="{{ url('images/shape/shape-20.png') }}" alt="Shape">

                <!-- Section Title Start -->
                <div class="section-title shape-03">
                    <h2 class="main-title">Les partenaires <span> d'Eniola.</span></h2>
                </div>
                <!-- Section Title End -->

                <!-- Brand Logo Start -->
                <div class="brand-logo brand-active">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{ url('images/brand/brand-03.png') }}" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{ url('images/brand/brand-04.png') }}" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{ url('images/brand/brand-05.png') }}" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                            <!-- Single Brand Start -->
                            <div class="single-brand swiper-slide">
                                <img src="{{ url('images/brand/brand-06.png') }}" alt="Brand">
                            </div>
                            <!-- Single Brand End -->

                        </div>
                    </div>
                </div>
                <!-- Brand Logo End -->

            </div>
            <!-- Brand Logo Wrapper End -->

        </div>
    </div>
    <!-- Brand Logo End -->

    <!-- Blog Start -->
    <div class="section section-padding mt-n1">
        <div class="container">

            <!-- Section Title Start -->
            <!-- <div class="section-title shape-03 text-center">
                                                                                                                                        <h5 class="sub-title">Latest News</h5>
                                                                                                                                        <h2 class="main-title">Educational Tips & <span> Tricks</span></h2>
                                                                                                                                    </div> -->
            <!-- Section Title End -->

            <!-- Blog Wrapper Start -->
            <div class="blog-wrapper">
                <div class="row">

                </div>
            </div>
            <!-- Blog Wrapper End -->

        </div>
    </div>
    <!-- Blog End -->

</div>

@endsection
