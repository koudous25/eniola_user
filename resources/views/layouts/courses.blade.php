@extends('layouts.base')

@section('main')
    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->

    <!-- Page Banner Start -->
    <div class="section page-banner">
        <img class="shape-2" src="{{ secure_asset('images/shape/shape-23.png') }}" alt="Shape">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <ul class="breadcrumb">
                    <li><a href="{{ route('app_home') }}">Accueil</a></li>
                    <li class="active">Tous les cours</li>
                </ul>
                <h2 class="title">Cours <span>Eniola</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>

        <!-- Shape Icon Box Start -->
        <div class="shape-icon-box">

            <img class="icon-shape-1 animation-left" src="{{ secure_asset('images/shape/shape-5.png') }}" alt="Shape">

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

    <!-- All Courses Start -->
    <div class="section section-padding">
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
                                            <a href="{{ route('app_courses_details', ['title' => $cours['title']]) }}">
                                                {{-- <img src="{{ secure_asset('images/courses/courses-01.jpg') }}" alt="Courses"> --}}
                                                <img src="{{ $cours['image']['url'] }}" alt="Courses">
                                            </a>
                                        </div>
                                        <div class="courses-content">
                                            <div class="courses-author">
                                                <div class="author">
                                                    <div class="author-thumb">
                                                        <a href="#">
                                                            <img src="{{ secure_asset('images/author/author-01.jpg') }}"
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
                                                    href="{{ route('app_courses_details', ['title' => $cours['title']]) }}">{{ $cours['title'] }}</a>
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
                                                    <a
                                                        href="{{ route('app_courses_details', ['title' => $cours['title']]) }}">
                                                        <img src="{{ $cours['image']['url'] }}" alt="Courses">
                                                    </a>
                                                </div>
                                                <div class="courses-content">
                                                    <div class="courses-author">
                                                        <div class="author">
                                                            <div class="author-thumb">
                                                                <a href="#">
                                                                    <img src="{{ secure_asset('images/author/author-01.jpg') }}"
                                                                        alt="ISOC BENIN">
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
                                                            href="{{ route('app_courses_details', ['title' => $cours['title']]) }}">{{ $cours['title'] }}</a>
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

        </div>
        <!-- Page Pagination End -->
        <div class="page-pagination">
            <ul class="pagination justify-content-center">
                <li><a href="#"><i class="icofont-rounded-left"></i></a></li>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
            </ul>
        </div>
        <!-- Page Pagination End -->

    </div>
    <!-- All Courses End -->




@endsection
