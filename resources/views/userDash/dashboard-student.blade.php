@extends('layouts.base-dashboard')

@section('main')
    <div class="page-content-wrapper py-0">

        <!-- Admin Tab Menu Start -->
        <div class="nav flex-column nav-pills admin-tab-menu">
            <a href="#" class="active">Mes cours</a>
            <a href="#">Mon parcours</a>
        </div>
        <!-- Admin Tab Menu End -->

        <!-- Page Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="container-fluid">
                <!-- Engagement Courses Start -->
                <div class="engagement-courses">

                    <div class="courses-list">
                        <ul>
                            <!--li>Cours</li>
                                    <li>Inscription</li>
                                    <li>Progression</li>
                                    <li>Certificat</li-->
                            <li>
                                <div class="courses">
                                    <div class="thumb">
                                        <h4>Cours suivis</h4>
                                    </div>
                                    <div class="content">
                                        <h4>Titre</h4>
                                    </div>
                                </div>
                                <div class="taught">
                                    <h4>Inscription</h4>
                                </div>
                                <div class="student">
                                    <h4>Progression</h4>
                                </div>
                                <div class="button">
                                    <h4>Certificat</h4>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="courses-list">
                        <ul>
                            <li>
                                <div class="courses">
                                    <div class="thumb">
                                        <img src="{{ url('/images/courses/admin-courses-01.jpg') }}" alt="Courses">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">Build An eCommerce Site With WooCommerce
                                                and WooLentor</a></h4>
                                    </div>
                                </div>
                                <div class="taught datee">
                                    <span>11/02/2021</span>
                                </div>

                                <div>
                                    <div class="progress skill-bar ">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"> <span class="skill">70%</span> </div>
                                    </div>
                                </div>

                                <div class="button d-flex flex-column ml-auto">
                                    <p class="text-center"><img src="{{ url('/images/custom/certificat.png') }}"
                                            alt="certificat" style="width:70px; height:60px;"></p>
                                    <p class="text-center">18/20</p>
                                </div>
                            </li>
                            <li>
                                <div class="courses">
                                    <div class="thumb">
                                        <img src="{{ url('/images/courses/admin-courses-01.jpg') }}" alt="Courses">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">Build An WholeSale WooCommerce Store using
                                                Whols Plugin</a></h4>
                                    </div>
                                </div>
                                <div class="taught datee">
                                    <span>11/02/2021</span>
                                </div>
                                <div>
                                    <div class="progress skill-bar ">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100"> <span class="skill">70%</span> </div>
                                    </div>
                                </div>
                                <div class="button d-flex flex-column ml-auto">
                                    <p>Pas de certificat</p>
                                </div>
                            </li>

                            <li>
                                <div class="courses">
                                    <div class="thumb">
                                        <img src="{{ url('/images/courses/admin-courses-01.jpg') }}" alt="Courses">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="#">Build An WholeSale WooCommerce Store using
                                                Whols Plugin</a></h4>
                                    </div>
                                </div>
                                <div class="taught datee">
                                    <span>11/02/2021</span>
                                </div>

                                <div>
                                    <div class="progress skill-bar ">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"> <span class="skill">50%</span> </div>
                                    </div>

                                </div>
                                <div class="button d-flex flex-column ml-auto">
                                    <p class="text-center"><img src="{{ url('/images/custom/certificat.png') }}"
                                            alt="certificat" style="width:70px; height:60px;"></p>
                                    <p class="text-center">18/20</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Engagement Courses End -->
                <div class="engagement-courses">
                    <div class="courses-list">
                        <ul>
                            <li>
                                <div class="courses">
                                    <div class="thumb">
                                        <h4>Cours recommandés</h4>
                                    </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="courses-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="courses-details.html"><img src="{{ url('/images/courses/courses-03.jpg') }}"
                                            alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="tag">
                                            <a href="#">Science</a>
                                        </div>
                                    </div>
                                    <h4 class="title"><a href="courses-details.html">Culture & Leadership:
                                            Strategies for a Successful Business</a></h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                    </div>
                                    <div class="courses-price-review justify-content-center">
                                        <div class="courses-review">
                                            <span class="rating-count">4.9</span>
                                            <span class="rating-star">
                                                <span class="rating-bar" style="width: 80%;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Courses End -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="courses-details.html"><img src="{{ url('/images/courses/courses-03.jpg') }}"
                                            alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="tag">
                                            <a href="#">Science</a>
                                        </div>
                                    </div>

                                    <h4 class="title"><a href="courses-details.html">Culture & Leadership:
                                            Strategies for a Successful Business</a></h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                    </div>
                                    <div class="courses-price-review justify-content-center">
                                        <div class="courses-review">
                                            <span class="rating-count">4.9</span>
                                            <span class="rating-star">
                                                <span class="rating-bar" style="width: 80%;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Courses End -->
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="courses-details.html"><img src="{{ url('/images/courses/courses-03.jpg') }}"
                                            alt="Courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="tag">
                                            <a href="#">Science</a>
                                        </div>
                                    </div>

                                    <h4 class="title"><a href="courses-details.html">Culture & Leadership:
                                            Strategies for a Successful Business</a></h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 29 Lectures </span>
                                    </div>
                                    <div class="courses-price-review justify-content-center">
                                        <div class="courses-review">
                                            <span class="rating-count">4.9</span>
                                            <span class="rating-star">
                                                <span class="rating-bar" style="width: 80%;"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Courses End -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Page Content Wrapper End -->
    </div>
@endsection

@section('scripts')
    <!--Custom-->
    <script>
        $(document).ready(function() {
            $('.progress .progress-bar').css("width",
                function() {
                    return $(this).attr("aria-valuenow") + "%";
                }
            )
        });
    </script>
@endsection
