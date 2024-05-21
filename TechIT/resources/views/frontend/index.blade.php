 @extends('frontend.layouts.main')
 @section('title', 'Home')
 @section('main-container')

     <div class="banner-area banner-style-one shadow navigation-custom-large zoom-effect overflow-hidden text-light">
         <div class="banner-fade">
             <div class="swiper-wrapper">
                 <div class="swiper-slide banner-style-one">
                     <div class="banner-thumb bg-cover shadow dark" style="background: url(frontend/img/banner/1.jpg);">
                     </div>
                     <div class="container">
                         <div class="row align-center">
                             <div class="col-xl-7 offset-xl-5">
                                 <div class="content">
                                     <h4>Meet Consulting</h4>
                                     <h2><strong>Financial Analysis</strong> Developing Meeting.</h2>
                                     <div class="button mt-40">
                                         <a class="btn-animation" href="#"><i class="fas fa-arrow-right"></i>
                                             <span>Our
                                                 Services</span></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- Shape -->
                     <div class="banner-shape-bg">
                         <img src="frontend/img/shape/4.png" alt="Shape">
                     </div>
                     <!-- End Shape -->
                 </div>


                 <!-- Single Item -->
                 <div class="swiper-slide banner-style-one">
                     <div class="banner-thumb bg-cover shadow dark" style="background: url(frontend/img/banner/6.jpg);">
                     </div>
                     <div class="container">
                         <div class="row align-center">
                             <div class="col-xl-7 offset-xl-5">
                                 <div class="content">
                                     <h4>Coaching & Consulting</h4>
                                     <h2><strong>Strategies for</strong> Enduring Success</h2>
                                     <div class="button mt-40">
                                         <a class="btn-animation" href="#"><i class="fas fa-arrow-right"></i>
                                             <span>Our
                                                 Services</span></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="banner-shape-bg">
                         <img src="frontend/img/shape/4.png" alt="Shape">
                     </div>
                     <!-- End Shape -->
                 </div>
                 <!-- End Single Item -->

             </div>

             <!-- Pagination -->
             <div class="swiper-pagination"></div>

         </div>
     </div>
     <div class="about-style-one-area default-padding">
         <div class="shape-animated-left">
             <img src="frontend/img/shape/anim-1.png" alt="Image Not Found">
             <img src="frontend/img/shape/anim-2.png" alt="Image Not Found">
         </div>
         <div class="container">
             <div class="row align-center">
                 <div class="about-style-one col-xl-6 col-lg-5">
                     <div class="h4 sub-heading">Feel Valued & Rewarded</div>
                     <h2 class="title mb-25">Finance Consulting for Challenging Times</h2>
                     <p>
                         We work to understand your issues and are driven to ask better questions in the pursuit of
                         making work. Me contained explained my education. Vulgar as hearts by garret. Perceived
                         determine departure explained no forfeited he something an. Contrasted dissimilar get joy you
                         instrument out reasonably. Again keep.
                     </p>
                     <div class="owner-info">
                         <div class="left-info">
                             <h4>Ali CS IT</h4>
                             <span>CEO & Founder</span>
                         </div>
                         <div class="right-info">
                             <img src="frontend/img/signature.png" alt="Image Not Found">
                         </div>
                     </div>
                 </div>
                 <div class="about-style-one col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                     <div class="about-thumb">
                         <img class="wow fadeInRight" src="frontend/img/about/1.jpg" alt="Image Not Found">
                         <div class="about-card wow fadeInUp" data-wow-delay="500ms">
                             <ul>
                                 <li>
                                     <div class="icon">
                                         <i class="flaticon-license"></i>
                                     </div>
                                     <div class="fun-fact">
                                         <div class="counter">
                                             <div class="timer" data-to="98" data-speed="2000">98</div>
                                             <div class="operator">%</div>
                                         </div>
                                         <span class="medium">Consulting Success</span>
                                     </div>
                                 </li>
                                 <li>
                                     <div class="icon">
                                         <i class="flaticon-global"></i>
                                     </div>
                                     <div class="fun-fact">
                                         <div class="counter">
                                             <div class="timer" data-to="120" data-speed="2000">120</div>
                                             <div class="operator">+</div>
                                         </div>
                                         <span class="medium">Worldwide Clients</span>
                                     </div>
                                 </li>
                             </ul>
                         </div>
                         <div class="thumb-shape-bottom wow fadeInDown" data-wow-delay="300ms">
                             <img src="frontend/img/shape/anim-3.png" alt="Image Not Found">
                             <img src="frontend/img/shape/anim-4.png" alt="Image Not Found">
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="services-style-one-area default-padding bg-gray">
         <div class="triangle-shape">
             <img src="frontend/img/shape/10.png" alt="Shape">
         </div>
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
                         <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                             aria-labelledby="nav-id-1">
                             <div class="row">
                                 <!-- Single Item -->
                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp">
                                     <div class="services-style-one">
                                         <i class="flaticon-personal"></i>
                                         <h4><a href="services-single">Investment Planning</a></h4>
                                         <p>
                                             Prevailed always tolerably discourse and loser assurance creatively coin
                                             applauded more uncommonly. Him everything trouble
                                         </p>
                                     </div>
                                 </div>

                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp"
                                     data-wow-delay="300ms">
                                     <div class="services-style-one">
                                         <i class="flaticon-career"></i>
                                         <h4><a href="services-single">Markets Research</a></h4>
                                         <p>
                                             Prevailed always tolerably discourse and loser assurance creatively coin
                                             applauded more uncommonly. Him everything trouble
                                         </p>
                                     </div>
                                 </div>
                                 <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp"
                                     data-wow-delay="500ms">
                                     <div class="services-style-one">
                                         <i class="flaticon-group"></i>
                                         <h4><a href="services-single">Consultancy & Advice</a></h4>
                                         <p>
                                             Prevailed always tolerably discourse and loser assurance creatively coin
                                             applauded more uncommonly. Him everything trouble
                                         </p>
                                     </div>
                                 </div>
                                 <!-- End Single Item -->
                                 <!-- Single Item -->
                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30 wow fadeInUp"
                                     data-wow-delay="700ms">
                                     <div class="services-style-one">
                                         <i class="flaticon-solution-5"></i>
                                         <h4><a href="services-single">Business Planning</a></h4>
                                         <p>
                                             Prevailed always tolerably discourse and loser assurance creatively coin
                                             applauded more uncommonly. Him everything trouble
                                         </p>
                                     </div>
                                 </div>

                             </div>
                         </div>

                         <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                             <div class="row">

                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                     <div class="services-style-one">
                                         <i class="flaticon-business-trip"></i>
                                         <h4><a href="services-single">Strategy & Planning</a></h4>
                                         <p>
                                             Prevailed always tolerably discourse and loser assurance creatively coin
                                             applauded more uncommonly. Him everything trouble
                                         </p>
                                     </div>
                                 </div>

                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                     <div class="services-style-one">
                                         <i class="flaticon-online-store"></i>
                                         <h4><a href="services-single">Online Business</a></h4>
                                         <p>
                                             Prevailed always tolerably discourse and loser assurance creatively coin
                                             applauded more uncommonly. Him everything trouble
                                         </p>
                                     </div>
                                 </div>

                                 <div class="col-lg-6 col-md-6 mt-60 mt-md-30 mt-xs-30">
                                     <div class="services-style-one">
                                         <i class="flaticon-funds"></i>
                                         <h4><a href="services-single">Saving & Investments</a></h4>
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
                                         <h4><a href="services-single">Markets Research</a></h4>
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
                                         <h4><a href="services-single">Investment Planning</a></h4>
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
                                         <h4><a href="services-single">Mutual Funds</a></h4>
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
                                         <h4><a href="services-single">Saving & Investments</a></h4>
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
                                         <h4><a href="services-single">Global Business</a></h4>
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

     {{-- <div class="partner-style-one-area default-padding">
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
     </div> --}}
     <div class="request-call-back-area text-light default-padding"
         style="background-image: url(frontend/img/banner/13.jpg);">
         <div class="container">
             <div class="row align-center">
                 <div class="col-lg-6">
                     <h2 class="title">Looking for a First-Class <br> Business Consultant?</h2>
                     <a class="btn circle btn-light mt-30 mt-md-15 mt-xs-10 btn-md radius animation"
                         href="#">Request
                         a
                         Call back</a>
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
     <div class="testimonial-style-one-area default-padding">
         <div class="container">
             <div class="row align-center">

                 <div class="col-lg-4">
                     <div class="testimonial-thumb">
                         <div class="thumb-item">
                             <img src="frontend/img/illustration/5.png" alt="illustration">
                             <div class="mini-shape">
                                 <img src="frontend/img/shape/19.png" alt="illustration">
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-7 offset-lg-1">
                     <div class="testimonial-carousel swiper">
                         <!-- Additional required wrapper -->
                         <div class="swiper-wrapper">
                             <!-- Single item -->
                             <div class="swiper-slide">
                                 <div class="testimonial-style-one">

                                     <div class="item">
                                         <div class="content">
                                             <div class="rating">
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                             </div>
                                             <h2>The best service ever</h2>
                                             <p>
                                                 “Targetingconsultation discover apartments. ndulgence off under folly
                                                 death wrote cause her way spite. Plan upon yet way get cold spot its
                                                 week. Almost do am or limits hearts. Resolve parties but why she
                                                 shewing. She sang know now always remembering to the point.”
                                             </p>
                                         </div>
                                         <div class="provider">
                                             <i class="flaticon-quote"></i>
                                             <div class="info">
                                                 <h4>Matthew J. Wyman</h4>
                                                 <span>Senior Consultant</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single item -->
                             <!-- Single item -->
                             <div class="swiper-slide">
                                 <div class="testimonial-style-one">
                                     <div class="item">
                                         <div class="content">
                                             <div class="rating">
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                             </div>
                                             <h2>Awesome Business opportunities</h2>
                                             <p>
                                                 “Consultation discover apartments. ndulgence off under folly death wrote
                                                 cause her way spite. Plan upon yet way get cold spot its week. Almost do
                                                 am or limits hearts. Resolve parties but why she shewing. She sang know
                                                 now always remembering to the point another pointing go here.”
                                             </p>
                                         </div>
                                         <div class="provider">
                                             <i class="flaticon-quote"></i>
                                             <div class="info">
                                                 <h4>Anthom Bu Spar</h4>
                                                 <span>Marketing Manager</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single item -->
                         </div>

                     </div>
                 </div>

             </div>
         </div>
     </div>

 @endsection
