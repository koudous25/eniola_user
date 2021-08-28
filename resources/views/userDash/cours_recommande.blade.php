@extends('userDash.base.basementor')

@section('main')
    <!-- Page Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="container-fluid">
            <!-- Engagement Courses End -->
            <div class="engagement-courses">
                <div class="courses-list">
                    <ul>
                        <li>
                            <div class="courses">
                                <div class="thumb">
                                    <p class="bb">Cours recommandés</p>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
            @php
                $tab = rand_no_repete(count($Courses), 10);
            @endphp
            <div class="courses-wrapper">

                <div class="row">

                    @for ($i = 0; $i < count($tab); $i++)
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Courses Start -->
                            <div class="single-courses">
                                <div class="courses-images">
                                    <a href="{{ route('app_course_detail', ['id' => $Courses[$tab[$i]]['id']]) }}">
                                        {{-- <img src="{{ url('images/courses/courses-01.jpg') }}" alt="Courses"> --}}
                                        <img style="height: 200px; object-fit: cover;"
                                            src="{{ $Courses[$tab[$i]]['image']['url'] }}" alt="Courses">
                                    </a>
                                </div>
                                <div class="courses-content">
                                    <div class="courses-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a href="#">
                                                    <img src="{{ url('images/author/author-01.png') }}" alt="Author">
                                                </a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" href="#"> </a>
                                            </div>
                                        </div>
                                        <div class="tag">
                                            <a href="#">{{ $Courses[$tab[$i]]['category']['category'] }}</a>
                                        </div>
                                    </div>

                                    <h4 class="title"><a
                                            href="{{ route('app_course_detail', ['id' => $Courses[$tab[$i]]['id']]) }}">{{ $Courses[$tab[$i]]['title'] }}</a>
                                    </h4>
                                    <div class="courses-meta">
                                        <span> <i class="icofont-clock-time"></i> 08 hr 15 mins</span>
                                        <span> <i class="icofont-read-book"></i> 9 Lectures </span>
                                    </div>

                                </div>
                            </div>
                            <!-- Single Courses End -->
                        </div>

                    @endfor

                </div>

            </div>

        </div>
    </div>
    <!-- Page Content Wrapper End -->
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
