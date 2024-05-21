<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ========== Page Title ========== -->
    <title> @yield('title') IT Business</title>

    <link rel="shortcut icon" href="frontend/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/css/themify-icons.css" rel="stylesheet">
    <link href="frontend/css/elegant-icons.css" rel="stylesheet">
    <link href="frontend/css/flaticon-set.css" rel="stylesheet">
    <link href="frontend/css/magnific-popup.css" rel="stylesheet">
    <link href="frontend/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="frontend/css/animate.css" rel="stylesheet">
    <link href="frontend/css/validnavs.css" rel="stylesheet">
    <link href="frontend/css/helper.css" rel="stylesheet">
    <link href="frontend/css/unit-test.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

</head>

<body>
    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area top-bar-style-one bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7">
                    <ul class="item-flex">
                        <li>
                            <i class="fas fa-map-marker-alt"></i> Sahiwal punjab pakistan
                        </li>
                        <li>
                            <a href="tel:+923251806654"><i class="fas fa-phone-alt"></i> +923251806654</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 text-end">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-common navbar-sticky navbar-default validnavs">


            <div class="container d-flex justify-content-between align-items-center">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/index">
                        <img src="frontend/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="frontend/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="">
                            <a href="/index" class=" active">Home</a>

                        </li>
                        <li>
                            <a href="/aboutus">About</a>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="team">Team</a></li>
                                <li><a href="team-details">Team Details</a></li>
                                <li><a href="pricing">Pricing</a></li>
                                <li><a href="faq">FAQ</a></li> --}}

                            {{-- </ul> --}}
                        </li>
                        <li>
                            <a href="/project">Projects</a>
                            {{-- <ul class="dropdown-menu">
                                <li><a href="project-details">Project Details</a></li>
                            </ul> --}}
                        </li>
                        <li class="dropdown">
                            <a href="/services">Services</a>
                            {{-- <ul class="dropdown-menu">

                                <li><a href="services-details">Services Details</a></li>
                            </ul> --}}
                        </li>
                        <li class="dropdown">
                            <a href="/blog">Blog</a>
                        </li>
                        <li><a href="/faq">Faqs</a></li>
                        <li><a href="/contactus">contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button"><a href="/contactus">Get consultant</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>

                <!-- Main Nav -->
            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
