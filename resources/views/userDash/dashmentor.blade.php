@extends('userDash.base.basementor')

@section('main')
    <!-- Page Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="container-fluid">

            <!-- Admin Top Bar Start -->
            <div class="admin-top-bar flex-wrap">

                <!-- Courses Search Start -->
                <div class="courses-search">
                    <form action="#">
                        <input type="text" placeholder="Search a student">
                        <button><i class="flaticon-magnifying-glass"></i></button>
                    </form>
                </div>
                <!-- Courses Search End -->

                <div class="engagement-meta">
                    <p class="meta"><img src="{{ url('/images/icon/icon-2.png') }}" alt="Icon"> {{ count($students) }}
                        Elèves</p>
                </div>
                <div class="top-bar-filter-right">
                    <div class="filter-btn">
                        <a href="{{ route('app_register_mentor') }}" class="btn btn-primary btn-hover-dark">Ajouter un
                            étudiant</a>
                    </div>
                </div>





            </div>
            <!-- Admin Top Bar End -->

            <!-- Message Start -->
            <div class="message mt-8">
                <div class="message-content">
                    <p>Mes éleves</p>
                </div>
            </div>
            <!-- Message End -->

            <!-- Courses Rating Wrapper Start -->
            <div class="courses-rating-wrapper">

                @foreach ($students as $item)
                    <!-- Single Courses Rating Start -->
                    <div class="single-courses-rating">

                        <!-- Courses Start -->
                        <div class="courses">
                            <div class="rating-author">
                                <img src="{{ url('https://ui-avatars.com/api/?name=' . $item['firstname'] . '+' . $item['lastname'] . '/?rounded=true') }}"
                                    alt="Author">
                            </div>
                            <div class="courses-content">
                                <h4 class="title"><a href="#">{{ $item['firstname'] }} {{ $item['lastname'] }}</a>
                                </h4>
                            </div>
                            <div class="courses-btn">
                                <a class="btn" href="#">Retirer</a>
                            </div>
                        </div>
                        <!-- Courses End -->
                    </div>
                @endforeach
            </div>
            <!-- Courses Rating Wrapper End -->

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
