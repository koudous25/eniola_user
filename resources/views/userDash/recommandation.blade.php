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
                                    <p class="bb">Cours de {{ $student['lastname'] }} {{ $student['firstname'] }}</p>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
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
                                                    <img src="{{ url('images/author/author-01.png') }}" alt="Author">
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

                                        <div class="single-item">
                                            <div class="item-bar">
                                                <div class="bar-line" style="width:80%;"></div>
                                            </div>
                                            <div class="item-percentage">
                                                <p><span>0%</span> (0)</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Single Courses End -->
                        </div>
                    @endforeach

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
