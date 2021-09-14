@extends('layouts.base')

@section('PageTitle')
    {{ $Course['title'] }}
@endsection

@section('main')


    <div class="main-wrapper">

        <!-- Login Header Start -->
        <div class="section login-header" style="opacity: 0; margin-bottom:10px;">
            <!-- Login Header Wrapper Start -->
            <div class="login-header-wrapper navbar navbar-expand">

                <!-- Header Logo Start -->
                <div class="login-header-logo logo-2">
                    <a href="{{ route('app_home') }}"><img src="{{ url('images/logo-icon.png') }}" alt="Logo"></a></li>
                    <a href="{{ route('app_home') }}"><img src="{{ url('images/text-logo.png') }}" alt="Logo"></a></li>
                </div>
                <!-- Header Logo End -->

                <!-- Header Search Start -->
                <div class="login-header-search search-2 dropdown">
                    <button class="search-toggle" data-bs-toggle="dropdown"><i class="flaticon-loupe"></i></button>

                    <div class="search-input dropdown-menu">
                        <form action="#">
                            <input type="text" placeholder="Rechercher un cours">
                        </form>
                    </div>

                </div>
                <!-- Header Search End -->

                <!-- Header Action Start -->
                <div class="login-header-action action-2 ml-auto">
                    <div class="dropdown">
                        <button class="action notification" data-bs-toggle="dropdown">
                            <i class="flaticon-notification"></i>
                            <span class="active"></span>
                        </button>
                        <div class="dropdown-menu dropdown-notification">
                            <ul class="notification-items-list">
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-ui-user"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i
                                            class="icofont-shopping-cart"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-danger text-white"><i class="icofont-book-mark"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-heart-alt"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                                <li class="notification-item">
                                    <span class="notify-icon bg-success text-white"><i class="icofont-image"></i></span>
                                    <div class="dropdown-body">
                                        <a href="#">
                                            <p><strong> James.</strong> has added a<strong>customer</strong>
                                                Successfully
                                            </p>
                                        </a>
                                    </div>
                                    <span class="notify-time">3:20 am</span>
                                </li>
                            </ul>
                            <a class="all-notification" href="#">See all notifications <i
                                    class="icofont-simple-right"></i></a>
                        </div>
                    </div>

                    <a class="action author" href="#">
                        <img src="{{ url('images/author/author-07.jpg') }}" alt="Author">
                    </a>

                    <div class="dropdown">
                        <button class="action more" data-bs-toggle="dropdown">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="" href=" /profile"><i class="icofont-user"></i> Profile</a></li>
                            <li><a class="" href=" /login"><i class="icofont-logout"></i> Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Action End -->

            </div>
            <!-- Login Header Wrapper End -->
        </div>
        <!-- Login Header End -->

        <!-- Courses Enroll Start -->
        <div class="section">

            <!-- Courses Enroll Wrapper Start -->
            <div class="courses-enroll-wrapper">

                <!-- Courses Video Player Start -->
                <div class="courses-video-player">

                    <!-- Courses Enroll Content Start -->
                    <div class="courses-enroll-content">

                        <!-- Courses Enroll Title Start -->
                        <div class="courses-enroll-title">
                            <h2 class="title">{{ $Course['title'] }}</h2>
                            {{-- <p><i class="icofont-eye-alt"></i> <span>8</span> Students are watching</p> --}}
                        </div>
                        <!-- Courses Enroll Title End -->

                    </div>
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
                        <span>{{ count($Paragraphs) }} paragraphes</span>
                    </div>

                    <!-- paragraph Playlist Start  -->
                    <div class="video-playlist">
                        <div class="accordion" id="videoPlaylist">

                            <!-- Accordion Items Start  -->
                            <div class="accordion-item">

                                <div id="collapseOne" class="" data-bs-parent=" #videoPlaylist">
                                    <nav class="vids">

                                        @foreach ($Paragraphs as $paragraph)
                                            <a class="link" href="#Para{{ $paragraph['id'] }}">
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
