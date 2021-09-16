@extends('layouts.base')

@section('PageTitle')
    {{ $Course['title'] }}
@endsection

@section('main')


    <div class="main-wrapper">

        <!-- Overlay Start -->
        <div class="overlay"></div>
        <!-- Overlay End -->

        <!-- Page Banner Start -->
        <div class="section page-banner">

            <div class="container">
                <!-- Page Banner Start -->
                <div class="page-banner-content">
                    <h3>Module :</h3>
                    <h2 class="title">{{ $Course['title'] }}</h2>
                </div>
                <!-- Page Banner End -->
            </div>

        </div>
        <!-- Page Banner End -->

        <!-- Courses Enroll Start -->
        <div class="section section-padding mt-n10">

            <!-- Courses Enroll Wrapper Start -->
            <div class=" container courses-enroll-wrapper">

                <!-- Courses Video Player Start -->
                <div class="courses-video-player">

                    <!-- Courses Enroll Content Start -->
                    {{-- <div class="courses-enroll-content">
                        <!-- Courses Enroll Title Start -->
                        <div class="courses-enroll-title">
                            <h2 class="title">{{ $Course['title'] }}</h2>
                            <p><i class="icofont-eye-alt"></i> <span>8</span> Students are watching</p>
                        </div>
                        <!-- Courses Enroll Title End -->
                    </div> --}}
                    <!-- Courses Enroll Content End -->

                    <!-- Courses text Container Start -->
                    <div class="textcontainer container" id="textcontainer">
                        <div class="container">

                            <div class="chap-wrapper chap-active">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach ($Paragraphs as $paragraph)
                                            <div class="swiper-slide" id="Para{{ $paragraph['id'] }}">
                                                <!-- Single Paragraph Start -->
                                                <div class="single-chap">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-6">
                                                            <!-- Paragraph Images Start -->
                                                            <div class="images">
                                                                <img src="{{ $paragraph['image']['url'] }}"
                                                                    alt="{{ $paragraph['title'] }}">
                                                            </div>
                                                            <!-- Paragraph Images End -->
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <!-- Paragraph Content Start -->
                                                            <div class="text-content">
                                                                <h2 class="main-title">{{ $paragraph['title'] }}
                                                                </h2>
                                                                <p>{{ $paragraph['text'] }}</p>
                                                            </div>
                                                            <!-- Paragraph Content End -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Single Paragraph End -->
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="chap-arrow">
                                        <!-- Add Pagination -->
                                        <div class="swiper-button-prev"><i class="icofont-rounded-left"></i>
                                        </div>
                                        <div class="swiper-button-next" onclick=""><i class="icofont-rounded-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Courses text Container End -->

                </div>
                <!-- Courses Video Player End -->

                <!-- Courses Quiz Start -->
                <div class="courses-quiz">
                    <div class="container">
                        {{-- <p>Qestionnaire sous forme de QCM. Les questions peuvent
                            comporter une ou plusieurs bonnes réponses</p> --}}
                        {{-- <div class="quiz-wrapper">
                            <div class="quiz-content">
                                @foreach ($Question as $qs)

                                    <div class="container-qs">
                                        <h2>Question n°{{ $loop->iteration }} :</h2>
                                        <p class="qs-enonce">{{ $qs['question'] }}</p>
                                        <ol class="qs-choix">
                                            @foreach ($qs['answers'] as $answer)
                                                <li>{{ $answer['answer'] }}</li>
                                            @endforeach

                                        </ol>
                                    </div>
                                    <br><br>
                                @endforeach

                                <p><a href="#" class="ch-suivant">Soumettre</a></p>

                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- Courses Quiz End -->

                <!-- Courses Quiz response Start -->
                <div class="courses-quiz-response">
                    <div class="container">

                    </div>
                </div>
                <!-- Courses Quiz response End -->

                <!-- Courses paragraph Playlist Start -->
                <div class="courses-video-playlist float-right">
                    <div class="playlist-title">
                        <h3 class="title">{{ $Course['title'] }}</h3>
                        <span>{{ count($Paragraphs) }} leçons</span>
                    </div>

                    <!-- paragraph Playlist Start  -->
                    <div class="video-playlist">
                        <div class="accordion" id="">

                            <!-- Accordion Items Start  -->
                            <div class="accordion-item">

                                <div id="navigation" class="">
                                    <nav class=" vids">

                                    @foreach ($Paragraphs as $paragraph)
                                        <a class="link"
                                            href="#Para{{ $paragraph['id'] }}_{{ $paragraph['title'] }}">
                                            <p>{{ $paragraph['id'] }}. {{ $paragraph['title'] }}
                                            </p>
                                        </a>
                                    @endforeach

                                    </nav>
                                </div>
                            </div>

                            <!-- Accordion Items End  -->

                            <!-- Accordion Items quiz Start  -->
                            <div class="accordion-item">
                                <button class="collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseQuiz">
                                    <p>Quiz</p>
                                    <span class="total-duration">10 questions</span>
                                </button>

                                <div id="collapseQuiz" class="accordion-collapse collapse" data-bs-parent="#videoPlaylist">
                                    <nav class="vids">
                                        <a class="link quiz" href="#quizPart">
                                            <p>Questions</p>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                            <!-- Accordion Items quiz End  -->

                        </div>
                    </div>
                    <!-- Cours Playlist End  -->

                </div>
                <!-- Courses paragraph Playlist End -->

            </div>
            <!-- Courses Enroll Wrapper End -->

        </div>
        <!-- Courses Enroll End -->

    </div>

@endsection
