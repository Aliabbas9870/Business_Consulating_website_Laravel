@extends('frontend.layouts.main')
@section('title', 'Team')
@section('main-container')

    <!-- End Header -->

    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area bg-cover shadow dark text-center text-light"
        style="background-image: url(frontend/img/banner/10.jpg);">
        <div class="breadcrum-shape">
            <img src="frontend/img/shape/50.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Team Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Team Single Area
    ============================================= -->
    <div class="team-single-area default-padding-top">
        <div class="container">
            <div class="team-content-top">
                <div class="row">
                    <div class="col-lg-5 left-info">
                        <div class="thumb">
                            <img src="frontend/img/team/2.jpg" alt="Thumb">
                        </div>
                    </div>
                    <div class="col-lg-7 right-info">
                        <h2>Lucas Ethan</h2>
                        <span>Senior SEO Analyst</span>
                        <p>
                            Bring to the table win-win survival strategies to ensure proactive domination. At the end of
                            the day, going forward, a new normal that has evolved from generation is on the runway
                            heading towards a streamlined cloud solution. User generated content in real-time will have
                            multiple touchpoints for offshoring house in never fruit up. Pasture imagine my garrets..
                        </p>

                        <ul>
                            <li>
                                <strong>Email:</strong>
                                <a href="mailto:aliab7357@digital.com">aliab7357@gmail.com</a>
                            </li>
                            <li>
                                <strong>Phone:</strong>
                                <a href="tel:123-456-7890">+44-20-7328-4499</a>
                            </li>
                        </ul>
                        <div class="social">
                            <a class="btn circle btn-sm btn-dark animation" href="#">Contact Me</a>
                            <div class="share-link">
                                <i class="fas fa-share-alt"></i>
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-info bg-gray default-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-single-list">
                            <div class="team-list-item">
                                <h4>Education</h4>
                                <ul>
                                    <li>
                                        <h5>Residential College</h5>
                                        <span>BA Honours - Biology</span>
                                        <p>
                                            2004 - 2008
                                        </p>
                                    </li>
                                    <li>
                                        <h5>University of Iowa</h5>
                                        <span>Master's degree - Macroeconomics</span>
                                        <p>
                                            2009 - 2012
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-list-item">
                                <h4>Experience</h4>
                                <ul>
                                    <li>
                                        <h5>Product Manager</h5>
                                        <span>Pran RFL Company</span>
                                        <p>
                                            31 Aug, 2013
                                        </p>
                                    </li>
                                    <li>
                                        <h5>Senior Marketing</h5>
                                        <span>Masuring Technology Company</span>
                                        <p>
                                            12 Dec 2018
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-items">
                            <h3>Personal Skills</h3>
                            <!-- Progress Bar Start -->
                            <div class="progress-box">
                                <h5>Programming Language</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="88">
                                        <span>88%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Backend Development</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="95">
                                        <span>95%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-box">
                                <h5>Product Design</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" data-width="80">
                                        <span>80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Progressbar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Single Area -->

    <!-- Start Footer
    ============================================= -->
    @endsection
