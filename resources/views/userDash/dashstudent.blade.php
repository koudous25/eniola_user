@extends('userDash.base.dashuser')

@section('main')
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
                                                <p class="bb">Cours suivis</p>
                                            </div>
                                            <div class="content">
                                                <p class="bb">Titre</p>
                                            </div>
                                        </div>
                                        <!--div class="taught">
                                            <p class="bb">Inscription</p>
                                        </div-->
                                        <div class="button">
                                            <p class="bb">Progression</p>
                                        </div>
                                    </li>
                    </ul>
                </div>     

                <div class="courses-list">
                    <ul>
                        @foreach ($courses_enrolled as $enrolled)
                        <li>
                            <div class="courses">
                                <div class="thumb">
                                    <a href="{{ route('app_after_enroll',['id'=>$enrolled['course']['id'] ])}}"><img src="{{ $enrolled['course']['image']['url']}}" alt="Courses"></a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="{{ route('app_after_enroll',['id'=>$enrolled['course']['id'] ])}}">{{ $enrolled['course']['title']}}</a></h4>
                                </div>
                            </div>
                            <!--div class="taught datee">
                                <span>11/02/2021</span>
                            </div-->
                            <div class="button d-flex flex-column ml-auto">
                                <div class="progress skill-bar ">
                                    <div class="progress-bar progress-bar-success" role="progressbar"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"> <span
                                            class="skill">70%</span> </div>
                                </div>
                            </div>
                        </li>
                            
                        @endforeach
                        
                    </div>

                    </ul>
                    
            </div>
            <!-- Engagement Courses End -->
            <div class="engagement-courses">
                <div class="courses-list">
                    <ul>
                        <li>
                            <div class="courses">
                                <div class="thumb">
                                    <p class="bb">Cours recommand??s</p>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="courses-wrapper">
                @if (count($courses) !==0)
                    <div class="row">
                        @for($i = 0; $i < 3; $i++)
                            <div class="col-lg-4 col-md-6">
                                <!-- Single Courses Start -->
                                <div class="single-courses">
                                    <div class="courses-images">
                                        <a href="/courses-details">
                                            <img src="{{ $courses[rand(0,count($courses)-1)]['image']['url'] }}" alt="Courses">
                                        </a>
                                    </div>
                                    <div class="courses-content">
                                        <div class="courses-author">
                                            <div class="author">
                                                <div class="author-thumb">
                                                    <a href="#">
                                                        <img src="{{ url('images/author/author-01.jpg') }}"
                                                            alt="Author">
                                                    </a>
                                                </div>
                                                <div class="author-name">
                                                    <a class="name" href="#"> </a>
                                                </div>
                                            </div>
                                            <div class="tag">
                                                <a href="#">{{ $courses[rand(0,count($courses)-1)]['category']['category'] }}</a>
                                            </div>
                                        </div>

                                        <h4 class="title"><a
                                                href="/courses-details">{{ $courses[rand(0,count($courses)-1)]['title'] }}</a>
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
                    @else
                    <p>Pas de cours recommand??s</p>
                @endif    
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
