@extends('layouts.base-cours') @section('title', 'Cours 0')

@section('main')


<div class="main-wrapper">

    <!-- Login Header Start -->
    <div class="section login-header">
        <!-- Login Header Wrapper Start -->
        <div class="login-header-wrapper navbar navbar-expand">

            <!-- Header Logo Start -->
            <div class="login-header-logo logo-2">
                <a href="{{ route('app_home') }}"><img src="{{ secure_asset('images/logo-icon.png') }}"
                        alt="Logo"></a></li>
                <a href="{{ route('app_home') }}"><img src="{{ secure_asset('images/text-logo.png') }}"
                        alt="Logo"></a></li>
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
                    <img src="{{ secure_asset('images/author/author-07.jpg') }}" alt="Author">
                </a>

                <div class="dropdown">
                    <button class="action more" data-bs-toggle="dropdown">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="" href="/profile"><i class="icofont-user"></i> Profile</a></li>
                        <li><a class="" href="/login"><i class="icofont-logout"></i> Sign Out</a></li>
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

                <!-- Courses text Container Start -->
                <div class="textcontainer container" id="textcontainer">
                    <div class="container">
                        <div class="students-wrapper chap-active">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($Paragraphs as $paragraph)
                                        <div class="swiper-slide" id="Para{{ $paragraph['id'] }}">
                                            <!-- Single Paragraph Start -->
                                            <div class="single-chap">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6">
                                                        <!-- Paragraph Images Start -->
                                                        <div class="error-images">
                                                            <img src="{{ $paragraph['image']['url'] }}"
                                                                alt="{{ $paragraph['title'] }}">
                                                        </div>
                                                        <!-- Paragraph Images End -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- Paragraph Content Start -->
                                                        <div class="error-content">
                                                            <h2 class="main-title">{{ $paragraph['image']['title'] }}
                                                            </h2>
                                                            <p>{{ $paragraph['image']['text'] }}</p>
                                                        </div>
                                                        <!-- Paragraph Content End -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Paragraph End -->
                                        </div>
                                    @endforeach

                                </div>

                                <div class="students-arrow">
                                    <!-- Add Pagination -->
                                    <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
                                    <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Courses text Container End -->


                <!-- Courses Enroll Content Start -->
                <div class="courses-enroll-content">

                    <!-- Courses Enroll Title Start -->
                    <div class="courses-enroll-title">
                        <h2 class="title">{{ $Course['title'] }}</h2>
                        {{-- <p><i class="icofont-eye-alt"></i> <span>8</span> Students are watching</p> --}}
                    </div>
                    <!-- Courses Enroll Title End -->

                    <!-- Courses Enroll Tab Start -->
                    <div class="courses-enroll-tab">
                        <div class="enroll-tab-menu">
                            <ul class="nav">
                                <li><button class="active" data-bs-toggle="tab"
                                        data-bs-target="#tab1">Description</button>
                                </li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab2">Certificates</button></li>
                                {{-- <li><button data-bs-toggle="tab" data-bs-target="#tab3"></button></li> --}}
                                {{-- <li><button data-bs-toggle="tab" data-bs-target="#tab4">Instructor</button></li> --}}
                            </ul>
                        </div>
                        {{-- <div class="enroll-share">
                            <a href="#"><i class="icofont-share-alt"></i> Share</a>
                        </div> --}}
                    </div>
                    <!-- Courses Enroll Tab End -->

                    <!-- Courses Enroll Tab Content Start -->
                    <div class="courses-enroll-tab-content">
                        <div class="tab-content">
                            {{-- <div class="tab-pane fade show active" id="tab0">

                                <!-- Overview Start -->
                                <div class="overview">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="enroll-tab-title">
                                                <h3 class="title">Course Details</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="enroll-tab-content">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been industry's standard dummy text
                                                    ever since the 1500s when andom unknown printer took a galley of
                                                    type scrambled it to make a type specimen book. It has survived
                                                    not’s only and five centuries, but also the lea into electronic
                                                    typesetting, remaining priting essentially unchanged. It was
                                                    popularsed in the 1960 with containing Lorem Ipsum passages
                                                    desktop publishing software.</p>

                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Instructor <span>:</span></th>
                                                            <td>Pamela Foster</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Duration <span>:</span></th>
                                                            <td>08 hr 15 mins</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Lectures <span>:</span></th>
                                                            <td>2,16</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Level <span>:</span></th>
                                                            <td>Secondary</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Language <span>:</span></th>
                                                            <td>English</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Caption’s <span>:</span></th>
                                                            <td>Yes</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been industry's standard dummy text
                                                    ever since the 1500s when andom unknown printer took a galley of
                                                    type scrambled it to make a type specimen book.</p>

                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been industry's standard dummy text
                                                    ever since the 1500s when andom unknown printer took a galley of
                                                    type scrambled it to make a type specimen book.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Overview End -->

                            </div> --}}
                            <div class="tab-pane fade" show active id="tab1">

                                <!-- Description Start -->
                                <div class="description">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="enroll-tab-title">
                                                <h3 class="title">Description</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="enroll-tab-content">
                                                <p>{{ $Course['description'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Description End -->

                            </div>
                            <div class="tab-pane fade" id="tab2">

                                <!-- Certificates Start -->
                                <div class="certificates">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="enroll-tab-title">
                                                <h3 class="title">Certificats Eniola</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="enroll-tab-content">
                                                <p>{{ $Course['description'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Certificates End -->

                            </div>
                            {{-- <div class="tab-pane fade" id="tab4">

                                <!-- Instructor Start -->
                                <div class="instructor">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="enroll-tab-title">
                                                <h3 class="title">Instructor</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="enroll-tab-content">

                                                <!-- Single Instructor Start -->
                                                <div class="single-instructor">
                                                    <div class="review-author">
                                                        <div class="author-thumb">
                                                            <img src="{{ secure_asset('images/author/author-06.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="author-content">
                                                            <h4 class="name">Sara Alexander</h4>
                                                            <span class="designation">Product Designer, USA</span>
                                                            <span class="rating-star">
                                                                <span class="rating-bar" style="width: 80%;"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been industry's
                                                        standard dummy text ever since the 1500s when andom unknown
                                                        printer took a galley of type scrambled it to make a type
                                                        specimen book.</p>
                                                </div>
                                                <!-- Single Instructor End -->

                                                <!-- Single Instructor Start -->
                                                <div class="single-instructor">
                                                    <div class="review-author">
                                                        <div class="author-thumb">
                                                            <img src="{{ secure_asset('images/author/author-07.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="author-content">
                                                            <h4 class="name">Karol Bachman</h4>
                                                            <span class="designation">Product Designer, USA</span>
                                                            <span class="rating-star">
                                                                <span class="rating-bar" style="width: 80%;"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been industry's
                                                        standard dummy text ever since the 1500s when andom unknown
                                                        printer took a galley of type scrambled it to make a type
                                                        specimen book.</p>
                                                </div>
                                                <!-- Single Instructor End -->

                                                <!-- Single Instructor Start -->
                                                <div class="single-instructor">
                                                    <div class="review-author">
                                                        <div class="author-thumb">
                                                            <img src="{{ secure_asset('images/author/author-03.jpg') }}"
                                                                alt="Author">
                                                        </div>
                                                        <div class="author-content">
                                                            <h4 class="name">Gertude Culbertson</h4>
                                                            <span class="designation">Product Designer, USA</span>
                                                            <span class="rating-star">
                                                                <span class="rating-bar" style="width: 80%;"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been industry's
                                                        standard dummy text ever since the 1500s when andom unknown
                                                        printer took a galley of type scrambled it to make a type
                                                        specimen book.</p>
                                                </div>
                                                <!-- Single Instructor End -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Instructor End -->

                            </div> --}}
                        </div>
                    </div>
                    <!-- Courses Enroll Tab Content End -->

                </div>
                <!-- Courses Enroll Content End -->
            </div>
            <!-- Courses Video Player End -->

            <!-- Courses Quiz Start -->
            <div class="courses-quiz">
                <div class="container">
                    {{-- <p>Qestionnaire sous forme de QCM. Les questions peuvent
                            comporter une ou plusieurs bonnes réponses</p> --}}

                    <div class="students-wrapper quiz-active">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Single quiz Start -->
                                    <div class="single-question">
                                        <div class="container-qs active">
                                            <h2>Question n°1 :</h2>
                                            <p class="qs-enonce">Le rôle du HTML est de...</p>
                                            <ol class="qs-choix">
                                                <li>Mettre en forme du texte</li>
                                                <li>Ordonner du contenu</li>
                                                <li>Créer des sites e-commerce</li>
                                            </ol>
                                            <button class="btn">Afficher la réponse</button>
                                            <p class="reponse1" id="rep">Réponse 2. Le HTML est un langage de balisage.
                                                Son rôle est
                                                de donner du sens et de structurer du contenu, afin d'indiquer à un
                                                navigateur
                                                comment celui-ci doit afficher la page.</p>
                                        </div>
                                    </div>
                                    <!-- Single quiz End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single quiz Start -->
                                    <div class="single-question">
                                        <div class="container-qs">
                                            <h2>Question n°2 :</h2>
                                            <p>Pour définir un titre DANS une page HTML, on utilise...</p>
                                            <ol>
                                                <li>L'élément title</li>
                                                <li>L'élément head</li>
                                                <li>Un élément h1, h2, ... h6</li>
                                            </ol>
                                            <button class="r2">Afficher la réponse</button>
                                            <p class="reponse2" id="rep">Réponse 3. Pour définir un titre dans une page
                                                HTML, on
                                                utilise un élément de type "h". L'élément title est utilisé pour définir
                                                le titre DE
                                                la page (qui s'affichera dans la barre haute du navigateur).</p>
                                        </div>
                                    </div>
                                    <!-- Single quiz End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single quiz Start -->
                                    <div class="single-question">
                                        <div class="container-qs">
                                            <h2>Question n°4 :</h2>
                                            <p>Lorsque vous utilisez l'élément a, vous devez obligatoirement préciser...
                                            </p>
                                            <ol>
                                                <li>Un attribut target</li>
                                                <li>Un attribut href</li>
                                                <li>Deux attributs href et target</li>
                                            </ol>
                                            <button class="r4">Afficher la réponse</button>
                                            <p class="reponse4" id="rep">Réponse 2. Seul l'attribut href est nécessaire
                                                au bon
                                                fonctionnement de l'élément a.</p>
                                        </div>
                                    </div>
                                    <!-- Single quiz End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single quiz Start -->
                                    <div class="single-question">
                                        <div class="container-qs">
                                            <h2>Question n°5 :</h2>
                                            <p>Laquelle de ces syntaxes est correcte pour écrire un commentaire en HTML
                                                ?</p>
                                            <ol>
                                                <li>&lt;!--Commentaire--&gt;</li>
                                                <li>&lt;--Commentaire--&gt;</li>
                                                <li>&lt;!--Commentaire--!&gt;</li>
                                            </ol>
                                            <button class="r5">Afficher la réponse</button>
                                            <p class="reponse5" id="rep">Réponse 1. Un commentaire en HTML va s'écrire
                                                de cette
                                                manière : &lt;!--Commentaire--&gt;. Rappelez vous qu'on utilise un point
                                                d'exclamation seulement au début de la balise.</p>
                                        </div>
                                    </div>
                                    <!-- Single quiz End -->
                                </div>
                                <div class="swiper-slide">
                                    <!-- Single quiz Start -->
                                    <div class="single-question">
                                        <div class="container-qs">
                                            <h2>Question n°3 :</h2>
                                            <p>Pour créer un lien vers la page d'accueil de Wikipédia, on écrira...</p>
                                            <ol>
                                                <li>&lt;a target="http://wikipedia.org">Wikipédia&lt;/a&gt;</li>
                                                <li>&lt;a href="http://wikipedia.org"&gt;</li>
                                                <li>&lt;a href="http://wikipedia.org">Wikipédia&lt;/a&gt;</li>
                                            </ol>
                                            <button class="r3">Afficher la réponse</button>
                                            <p class="reponse3" id="rep">Réponse 3. L'élément a est constitué d'une
                                                paire de balises
                                                (balises ouvrante et fermante) ainsi que d'un contenu cliquable. Cet
                                                élément doit
                                                obligatoirement être accompagné de son attribut href.</p>
                                        </div>
                                    </div>
                                    <!-- Single quiz End -->
                                </div>
                            </div>

                            <div class="students-arrow">
                                <!-- Add Pagination -->
                                <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
                                <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                            </div>
                        </div>
                    </div>
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
                    <span>{{ length($Paragraphs) }} paragraphs</span>
                </div>

                <!-- paragraph Playlist Start  -->
                <div class="video-playlist">
                    <div class="accordion" id="videoPlaylist">

                        <!-- Accordion Items Start  -->
                        <div class="accordion-item">
                            <button class="collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                <p> SOMMAIRE </p>
                            </button>

                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#videoPlaylist">
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
                                        <p>Question 1</p>
                                    </a>

                                    <a class="link quiz" id="" href="#quizPart">
                                        <p>Question 2</p>
                                    </a>

                                    <a class="link quiz" href="#quizPart">
                                        <p>Question 3</p>
                                    </a>

                                    <a class="link quiz" id="" href="#quizPart">
                                        <p>Question 4</p>
                                    </a>

                                    <a class="link quiz" href="#quizPart">
                                        <p>Question 5</p>
                                    </a>

                                    <a class="link quiz" id="" href="#quizPart">
                                        <p>Question 6</p>
                                    </a>

                                    <a class="link quiz" id="" href="#quizPart">
                                        <p>Question 7</p>
                                    </a>

                                    <a class="link quiz" id="" href="#quizPart">
                                        <p>Question 8</p>
                                    </a>

                                    <a class="link quiz" id="" href="#quizPart">
                                        <p>Question 9</p>
                                    </a>

                                    <a class="link quiz" id="" href="#quizPart">
                                        <p>Question 10</p>
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

    <!-- Footer Start  -->
    <div class="section footer-section">

        <!-- Footer Widget Section Start -->
        <div class="footer-widget-section">

            <img class="shape-1 animation-down" src="{{ secure_asset('images/shape/shape-21.png') }}" alt="Shape">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 order-md-1 order-lg-1">

                        <!-- Footer Widget Start -->
                        <div class="footer-widget">
                            <div class="widget-logo">
                                <a href="/"><img src="{{ secure_asset('images/logo.png') }}" alt="Logo"></a>
                            </div>

                            <div class="widget-address">
                                <h4 class="footer-widget-title">Cotonou </h4>
                                <p>Midombo Akpakpa.</p>
                            </div>

                            <ul class="widget-info">
                                <li>
                                    <p> <i class="flaticon-email"></i> <a
                                            href="mailto:address@gmail.com">address@gmail.com</a> </p>
                                </li>
                                <li>
                                    <p> <i class="flaticon-phone-call"></i> <a href="tel:9702621413">(970)
                                            262-1413</a> </p>
                                </li>
                            </ul>

                            <ul class="widget-social">
                                <li><a href="#"><i class="flaticon-facebook"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                <li><a href="#"><i class="flaticon-skype"></i></a></li>
                                <li><a href="#"><i class="flaticon-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer Widget End -->

                    </div>
                    <div class="col-lg-8 order-md-3 order-lg-2">

                        <!-- Footer Widget Link Start -->
                        <div class="footer-widget-link">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Categories</h4>

                                <ul class="widget-link">
                                    <li><a href="#">Creative Writing</a></li>
                                    <li><a href="#">Film & Video</a></li>
                                    <li><a href="#">Graphic Design</a></li>
                                </ul>

                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Liens utiles <h4>

                                        <ul class="widget-link">
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Discussion</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Course FAQ’s</a></li>
                                        </ul>

                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <!-- Footer Widget Link End -->

                    </div>
                </div>
            </div>

            <img class="shape-2 animation-left" src="{{ secure_asset('images/shape/shape-22.png') }}" alt="Shape">

        </div>
        <!-- Footer Widget Section End -->

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <div class="container">

                <!-- Footer Copyright Start -->
                <div class="copyright-wrapper">
                    <div class="copyright-link">
                        <a href="#">Terms of Service</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Sitemap</a>
                        <a href="#">Security</a>
                    </div>
                    <div class="copyright-text">
                        <p>&copy; 2021 <span> Eniola </span> Tous droits reservés</p>
                    </div>
                </div>
                <!-- Footer Copyright End -->

            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
    <!-- Footer End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="icofont-simple-up"></i>
    </a>
    <!--Back To End-->

</div>

@endsection
