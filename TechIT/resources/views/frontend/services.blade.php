@extends('frontend.layouts.main')
@section('title', 'Services')
@section('main-container')



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
                    <h1>Our Services</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Servics Style One
        ============================================= -->
    <div class="services-style-one-area default-padding bg-gray">
        <div class="center-shape" style="background-image: url(frontend/img/shape/5.png);"></div>
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5 mb-md-60">
                    <div class="service-nav-info">
                        <h4 class="sub-title">What we do</h4>
                        <h2>Excellent service and support for you</h2>
                        <div class="nav nav-tabs service-tab-navs" id="nav-tab" role="tablist">

                            <button class="nav-link active" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1"
                                type="button" role="tab" aria-controls="tab1" aria-selected="true">
                                <i class="flaticon-portfolio"></i>
                                Consulting services
                            </button>
                            <button class="nav-link" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2"
                                type="button" role="tab" aria-controls="tab2" aria-selected="false">
                                <i class="flaticon-megaphone"></i>
                                Marketing services
                            </button>
                            <button class="nav-link" id="nav-id-3" data-bs-toggle="tab" data-bs-target="#tab3"
                                type="button" role="tab" aria-controls="tab3" aria-selected="false">
                                <i class="flaticon-save-money"></i>
                                Banking services
                            </button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl-50 pl-md-15 pl-xs-15">
                    <div class="tab-content services-tab-content" id="nav-tabContent">

                        <!-- Tab Single Item -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="nav-id-1">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp">
                                    <div class="services-style-one">
                                        <i class="flaticon-personal"></i>
                                        <h4><a href="services-single.php">Investment Planning</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="300ms">
                                    <div class="services-style-one">
                                        <i class="flaticon-career"></i>
                                        <h4><a href="services-single.php">Markets Research</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="500ms">
                                    <div class="services-style-one">
                                        <i class="flaticon-group"></i>
                                        <h4><a href="services-single.php">Consultancy & Advice</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="services-style-one">
                                        <i class="flaticon-solution-5"></i>
                                        <h4><a href="services-single.php">Business Planning</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                        <!-- End Tab Single Item -->

                        <!-- Tab Single Item -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <i class="flaticon-business-trip"></i>
                                        <h4><a href="services-single.php">Strategy & Planning</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <i class="flaticon-online-store"></i>
                                        <h4><a href="services-single.php">Online Business</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <i class="flaticon-funds"></i>
                                        <h4><a href="services-single.php">Saving & Investments</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <i class="flaticon-career"></i>
                                        <h4><a href="services-single.php">Markets Research</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                        <!-- End Tab Single Item -->

                        <!-- Tab Single Item -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-id-3">
                            <div class="row">
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <i class="flaticon-budget"></i>
                                        <h4><a href="services-single.php">Investment Planning</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <i class="flaticon-money-1"></i>
                                        <h4><a href="services-single.php">Mutual Funds</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <i class="flaticon-funds"></i>
                                        <h4><a href="services-single.php">Saving & Investments</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                    <div class="services-style-one">
                                        <i class="flaticon-world-globe"></i>
                                        <h4><a href="services-single.php">Global Business</a></h4>
                                        <p>
                                            Prevailed always tolerably discourse and loser assurance creatively coin
                                            applauded more uncommonly. Him everything trouble
                                        </p>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                        <!-- End Tab Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Style One -->

    <!-- Start Process
        ============================================= -->
    <div class="process-style-one-area text-center default-padding">
        <div class="large-shape">
            <img src="frontend/img/shape/11.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading">Our Process</h4>
                        <h2 class="title">Steps of Recruitment <br> work process</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-4">
                    <div class="process-style-one active">
                        <div class="thumb">
                            <img src="frontend/img/about/3.jpg" alt="Thumb">
                            <span>01</span>
                        </div>
                        <h4>Differentiate from the competition</h4>
                        <p>
                            Capitalize on low hanging fruit to identify a ballpark value added.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4">
                    <div class="process-style-one">
                        <div class="thumb">
                            <img src="frontend/img/about/6.jpg" alt="Thumb">
                            <span>02</span>
                        </div>
                        <h4>Target the right people effectively</h4>
                        <p>
                            Override the digital divide with additional clickthroughs from DevOps.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4">
                    <div class="process-style-one">
                        <div class="thumb">
                            <img src="frontend/img/about/5.jpg" alt="Thumb">
                            <span>03</span>
                        </div>
                        <h4>Communicate your story consistently</h4>
                        <p>
                            Nanotechnology immersion along the information highway will close loop.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End Process -->

    <!-- Start Partner Area
        ============================================= -->
    <div class="partner-style-one-area bg-gray default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-5">
                    <div class="partner-map" style="background-image: url(frontend/img/shape/map.png);">
                        <h2 class="mask-text" style="background-image: url(frontend/img/banner/10.jpg);">80</h2>
                        <h4>Partners in world wide</h4>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="partner-items">
                        <ul>
                            <li><img src="frontend/img/logo/1.png" alt="Image Not FOund"></li>
                            <li><img src="frontend/img/logo/2.png" alt="Image Not FOund"></li>
                            <li><img src="frontend/img/logo/7.png" alt="Image Not FOund"></li>
                            <li><img src="frontend/img/logo/4.png" alt="Image Not FOund"></li>
                            <li><img src="frontend/img/logo/5.png" alt="Image Not FOund"></li>
                            <li><img src="frontend/img/logo/6.png" alt="Image Not FOund"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Area -->


    <!-- End Team Area -->

    <!-- Start Request Call Back
        ============================================= -->
    <div class="request-call-back-area text-light default-padding"
        style="background-image: url(frontend/img/banner/13.jpg);">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6">
                    <h2 class="title">Looking for a First-Class <br> Business Consultant?</h2>
                    <a class="btn circle btn-light mt-30 mt-md-15 mt-xs-10 btn-md radius animation" href="#">Request
                        a Call back</a>
                </div>
                <div class="col-lg-6 text-end">
                    <div class="achivement-counter">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-handshake"></i>
                                </div>
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="500" data-speed="2000">500</div>
                                        <div class="operator">+</div>
                                    </div>
                                    <span class="medium">Business advices given over 30 years</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-employee"></i>
                                </div>
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="30" data-speed="2000">30</div>
                                        <div class="operator">+</div>
                                    </div>
                                    <span class="medium">Business Excellence awards achieved</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Request Call Back  -->

    <!-- Start Pricing
        ============================================= -->
    <div class="pricing-style-one-area default-padding bottom-less">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-heading">Our Pricing</h4>
                        <h2 class="title">Best Pricing Plans</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Single Itme -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="pricing-style-one" style="background-image: url(frontend/img/shape/15.webp);">
                        <div class="pricing-header">
                            <h4>Basic Plan</h4>
                            <p>
                                Low cost & affordable services to get you started very soon.
                            </p>
                        </div>
                        <div class="pricing-content">
                            <div class="price">
                                <h2><strong>Free</strong></h2>
                            </div>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Increase traffic 130%</li>
                                <li><i class="fas fa-check-circle"></i> Organic traffic 215%</li>
                                <li><i class="fas fa-times-circle"></i> 10 Free Optimization</li>
                            </ul>
                            <a class="btn mt-25 btn-sm btn-dark animation" href="#">Purchase Plan</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="pricing-style-one" style="background-image: url(frontend/img/shape/15.webp);">
                        <div class="pricing-header">
                            <h4>Premium Plan</h4>
                            <p>
                                Increased processing power with multiple sites, storage.
                            </p>
                        </div>
                        <div class="pricing-content">
                            <div class="price">
                                <h2><sup>$</sup>29 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> 1,300 Keywords</li>
                                <li><i class="fas fa-check-circle"></i> SEO Optimized</li>
                                <li><i class="fas fa-check-circle"></i> Live Support</li>
                            </ul>
                            <a class="btn mt-25 btn-sm btn-dark animation" href="#">Purchase Plan</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="pricing-style-one active" style="background-image: url(frontend/img/shape/15.webp);">
                        <div class="pricing-header">
                            <h4>Advanced Plan</h4>
                            <p>
                                Target is processing power with multiple sites, storage.
                            </p>
                        </div>
                        <div class="pricing-content">
                            <div class="price">
                                <h2><sup>$</sup>58 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Increase traffic 130%</li>
                                <li><i class="fas fa-check-circle"></i> Backlink analysis</li>
                                <li><i class="fas fa-times-circle"></i> 10 Free Optimization</li>
                            </ul>
                            <a class="btn mt-25 btn-sm btn-theme animation" href="#">Purchase Plan</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Itme -->

                <!-- Single Itme -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="pricing-style-one" style="background-image: url(frontend/img/shape/15.webp);">
                        <div class="pricing-header">
                            <h4>Business Plan</h4>
                            <p>
                                Mentionling processing power with multiple sites, storage.
                            </p>
                        </div>
                        <div class="pricing-content">
                            <div class="price">
                                <h2><sup>$</sup>89 <sub>/ Monthly</sub></h2>
                            </div>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Increase traffic 130%</li>
                                <li><i class="fas fa-check-circle"></i> Backlink analysis</li>
                                <li><i class="fas fa-check-circle"></i> Live Support</li>
                            </ul>
                            <a class="btn mt-25 btn-sm btn-dark animation" href="#">Purchase Plan</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Itme -->

            </div>
        </div>
    </div>
    <!-- End Pricng -->

    <!-- Start Footer
        ============================================= -->
@endsection
