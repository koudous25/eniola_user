@extends('layouts.base')

@section('PageTitle')
    Liste des cours
@endsection

@section('main')
    <!-- Overlay Start -->
    <div class="overlay"></div>
    <!-- Overlay End -->
    <div class="topb"></div>

    <!-- Page Banner Start -->
    <div class="section page-banner">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <h2 class="title"><span>Nos parcours</span></h2>
            </div>
            <!-- Page Banner End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- All Courses Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- All Courses Top Start -->
            <div class="courses-top">
                <!-- Courses Search Start -->
                <div class="courses-search">
                    <form action="{{ route('search') }}" method="GET" role="search">
                        @csrf
                        <input name="q" type="text" placeholder="Rechercher un cours" required>
                        <button type="submit"><i class="flaticon-magnifying-glass"></i></button>
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
                            <li class="swiper-slide"><button class="" data-bs-toggle=" tab"
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
                                            <a href="{{ route('app_course_detail', ['id' => $cours['id']]) }}">
                                                {{-- <img src="{{ url('images/courses/courses-01.jpg') }}" alt="Courses"> --}}
                                                <img src="{{ $cours['image']['url'] }}" alt="Courses">
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
                                                    <a href="#">{{ $cours['category']['category'] }}</a>
                                                </div>
                                            </div>

                                            <h4 class="title"><a
                                                    href="{{ route('app_course_detail', ['id' => $cours['id']]) }}">{{ $cours['title'] }}</a>
                                            </h4>
                                            <div class="courses-meta">
                                                <span></span>
                                                <span> <i class="icofont-read-book"></i> {{ count($cours['paragraphs']) }}
                                                    Paragraphes </span>
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
                                                    <a href="{{ route('app_course_detail', ['id' => $cours['id']]) }}">
                                                        <img src="{{ $cours['image']['url'] }}" alt="Courses">
                                                    </a>
                                                </div>
                                                <div class="courses-content">
                                                    <div class="courses-author">
                                                        <div class="author">
                                                            <div class="author-thumb">
                                                                <a href="#">
                                                                    <img src="{{ url('images/author/author-01.png') }}"
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
                                                            href="{{ route('app_course_detail', ['id' => $cours['id']]) }}">{{ $cours['title'] }}</a>
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
        <ul class="pagination justify-content-center mb-4">
            {{ $Courses->links('pagination::bootstrap-4') }}
        </ul>
        <!-- Page Pagination End -->

    </div>
    <!-- All Courses End -->




@endsection
