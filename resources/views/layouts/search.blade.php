@extends('layouts.base')

@section('PageTitle')
    Recherche de cours
@endsection

@section('main')
    <!-- Page Banner Start -->
    <div class="section page-banner">

        <div class="container">
            <!-- Page Banner Start -->
            <div class="page-banner-content">
                <h2 class="title">Résultats de recherche pour : "<strong>{{ $key }}</strong>"</h2>
            </div>
            <!-- Page Banner End -->
        </div>

    </div>
    <!-- Page Banner End -->

    <!-- Contact Start -->
    <div class="section section-padding">
        <!-- Contact Wrapper Start -->
        <div class="container">
            <div class="tab-content courses-tab-content">
                <div class="tab-pane fade show active" id="tabs1">

                    <!-- All Courses Wrapper Start -->
                    @if ($Courses->isEmpty())
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <h1>Aucun résultat pour " <strong>{{ $key }}</strong> "</h1>
                            </div>
                        </div>
                    @else
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
                                                    <span> <i class="icofont-read-book"></i>
                                                        {{ count($cours['paragraphs']) }}
                                                        Paragraphes </span>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Single Courses End -->
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @endif

                    <!-- All Courses Wrapper End -->

                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
