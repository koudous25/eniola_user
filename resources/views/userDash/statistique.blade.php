@extends('layouts.base-dashboard')

@section('main')
    <div class="page-content-wrapper py-0">

        <!-- Admin Tab Menu Start -->
        <div class="nav flex-column nav-pills admin-tab-menu">
            <a href="evolution.html" class="active">Mon évolution</a>
        </div>
        <!-- Admin Tab Menu End -->

        <!-- Page Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="container-fluid">

                <!-- Overview Top Start -->
                <div class="admin-top-bar flex-wrap">

                    <div class="overview-box">
                        <div class="single-box">
                            <h5 class="title">Total Cours suivis</h5>
                            <div class="count">12</div>
                        </div>
                        <div class="single-box">
                            <h5 class="title">Total certificats</h5>
                            <div class="count">10</div>
                        </div>
                    </div>
                </div>
                <!-- Overview Top End -->

                <!-- Graph Top Start -->
                <div class="graph">
                    <div class="graph-title">
                        <h4 class="title">Get top insights about your performance</h4>

                        <div class="months-select">
                            <select>
                                <option data-display="Last 12 months">Last 12 months</option>
                                <option value="1">Last 6 months</option>
                                <option value="1">Last 3 months</option>
                                <option value="1">Last 2 months</option>
                                <option value="1">Last 1 months</option>
                                <option value="1">Last 1 week</option>
                            </select>
                        </div>
                    </div>

                    <div class="graph-content">
                        <div id="uniqueReport"></div>
                    </div>

                    <!--div class="graph-btn">
                        <a class="btn btn-primary btn-hover-dark" href="#">Revenue Report <i
                                class="icofont-rounded-down"></i></a>
                    </div-->
                </div>
                <!-- Graph Top End -->

            </div>
        </div>
        <!-- Page Content Wrapper End -->

    </div>
@endsection
