@extends('frontend.layouts.main')
@section('title', 'Project')
@section('main-container')


    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light" style="background-image: url(frontend/img/banner/10.jpg);">
        <div class="breadcrum-shape">
            <img src="frontend/img/shape/50.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Latest Projects</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>Project</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Project
    ============================================= -->
    <div class="project-style-two-area default-padding">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <div class="magnific-mix-gallery gallery-masonary">
                            <div id="gallery-masonary" class="gallery-items colums-2">
                                <!-- Single Item -->
                                <div class="gallery-item">
                                    <div class="gallery-style-two">
                                        <img src="frontend/img/gallery/5.jpg" alt="Thumb">
                                        <div class="shape">
                                            <img src="frontend/img/shape/35.png" alt="Image Not Found">
                                        </div>
                                        <div class="overlay">
                                            <div class="content">
                                                <span>Consulting, Recruitment</span>
                                                <h4><a href="#">Coping Under the Current Climate</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="gallery-item">
                                    <div class="gallery-style-two">
                                        <img src="frontend/img/gallery/3.jpg" alt="Thumb">
                                        <div class="shape">
                                            <img src="frontend/img/shape/35.png" alt="Image Not Found">
                                        </div>
                                        <div class="overlay">
                                            <div class="content">
                                                <span>Consulting, Recruitment</span>
                                                <h4><a href="#">Purpose-Driven Employers Succeed</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="gallery-item">
                                    <div class="gallery-style-two">
                                        <img src="frontend/img/gallery/2.jpg" alt="Thumb">
                                        <div class="shape">
                                            <img src="frontend/img/shape/35.png" alt="Image Not Found">
                                        </div>
                                        <div class="overlay">
                                            <div class="content">
                                                <span>Consulting, Recruitment</span>
                                                <h4><a href="#">Nifty Teams Respond After Crisis</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="gallery-item">
                                    <div class="gallery-style-two">
                                        <img src="frontend/img/gallery/6.jpg" alt="Thumb">
                                        <div class="shape">
                                            <img src="frontend/img/shape/35.png" alt="Image Not Found">
                                        </div>
                                        <div class="overlay">
                                            <div class="content">
                                                <span>Consulting, Recruitment</span>
                                                <h4><a href="#">Share Statistics With Team Leader</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="load-more-info text-center mt-60">
                                    <p>
                                        Are you interested to show more portfolios? <a href="#">Load More</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Project -->
@endsection
