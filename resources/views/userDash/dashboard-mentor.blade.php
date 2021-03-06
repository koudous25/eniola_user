@extends('userDash.base.basementor')

@section('main')
    <div class="page-content-wrapper py-0">

        <!-- Admin Tab Menu Start -->
        <div class="nav flex-column nav-pills admin-tab-menu">
            <a href="/dashboard-mentor" class="active">Overview</a>
            <a href="students.html">Etudiants</a>
        </div>
        <!-- Admin Tab Menu End -->

        <!-- Page Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="container-fluid">

                <!-- Admin Top Bar Start -->
                <div class="admin-top-bar flex-wrap">

                    <div class="top-bar-filter">
                        <ul class="filter-check">
                            <li>
                                <div class="courses-select">
                                    <select>
                                        <option data-display="All Courses">All</option>
                                        <option value="1">option</option>
                                        <option value="2">option</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="top-bar-filter-right">
                        <div class="filter-btn">
                            <a href="/register" class="btn btn-primary btn-hover-dark">Ajouter un étudiant</a>
                        </div>
                    </div>
                </div>
                <!-- Admin Top Bar End -->

                <!-- Message Start -->
                <div class="message mt-8">
                    <div class="message-icon">
                        <img src="{{ url('images/menu-icon/icon-6.png') }}" alt="">
                    </div>
                    <div class="message-content">
                        <p>Maria SIMONS</p>
                    </div>
                </div>
                <!-- Message End -->

                <!-- Courses Rating Wrapper Start -->
                <div class="courses-rating-wrapper">

                    <!-- Single Courses Rating Start -->
                    <div class="single-courses-rating">

                        <!-- Courses Start -->
                        <div class="courses">
                            <div class="rating-author">
                                <img src="{{ url('images/author/author-14.jpg') }}" alt="Author">
                            </div>
                            <div class="courses-content">
                                <h4 class="title"><a href="#">Build An WholeSale WooCommerce Store using Whols Plugin</a>
                                </h4>
                            </div>
                            <div class="courses-btn">
                                <a class="btn" href="#">View Summary</a>
                            </div>
                        </div>
                        <!-- Courses End -->
                    </div>
                    <!-- Single Courses Rating End -->

                    <!-- Single Courses Rating Start -->
                    <div class="single-courses-rating">

                        <!-- Courses Start -->
                        <div class="courses">
                            <div class="rating-author">
                                <img src="{{ url('images/author/author-14.jpg') }}" alt="Author">
                            </div>
                            <div class="courses-content">
                                <h4 class="title"><a href="#">Build An WholeSale WooCommerce Store using Whols Plugin</a>
                                </h4>
                            </div>
                            <div class="courses-btn">
                                <a class="btn" href="#">View Summary</a>
                            </div>
                        </div>
                        <!-- Courses End -->
                    </div>
                    <!-- Single Courses Rating End -->

                    <!-- Single Courses Rating Start -->
                    <div class="single-courses-rating">

                        <!-- Courses Start -->
                        <div class="courses">
                            <div class="rating-author">
                                <img src="{{ url('images/author/author-14.jpg') }}" alt="Author">
                            </div>
                            <div class="courses-content">
                                <h4 class="title"><a href="#">Build An WholeSale WooCommerce Store using Whols Plugin</a>
                                </h4>
                            </div>
                            <div class="courses-btn">
                                <a class="btn" href="#">View Summary</a>
                            </div>
                        </div>
                        <!-- Courses End -->
                    </div>
                    <!-- Single Courses Rating End -->

                    <!-- Single Courses Rating Start -->
                    <div class="single-courses-rating">

                        <!-- Courses Start -->
                        <div class="courses">
                            <div class="rating-author">
                                <img src="{{ url('images/author/author-14.jpg') }}" alt="Author">
                            </div>
                            <div class="courses-content">
                                <h4 class="title"><a href="#">Build An WholeSale WooCommerce Store using Whols Plugin</a>
                                </h4>
                            </div>
                            <div class="courses-btn">
                                <a class="btn" href="#">View Summary</a>
                            </div>
                        </div>
                        <!-- Courses End -->
                    </div>
                    <!-- Single Courses Rating End -->

                </div>
                <!-- Courses Rating Wrapper End -->

            </div>
        </div>
        <!-- Page Content Wrapper End -->

    </div>
@endsection
