@extends('frontend.layouts.main')
@section('title', 'Contact')
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
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact Us
            ============================================= -->
    <div class="contact-style-one-area overflow-hidden default-padding">

        <div class="contact-shape">
            <img src="frontend/img/shape/37.png" alt="Image Not Found">
        </div>

        <div class="container">
            <div class="row align-center">

                <div class="contact-stye-one col-lg-5 mb-md-50 mb-xs-20">

                    <div class="contact-style-one-info">
                        <h2>Contact Information</h2>
                        <p>
                            Plan upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties but
                            why she shewing.
                        </p>
                        <ul>
                            <li class="wow fadeInUp">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <h5 class="title">Hotline</h5>
                                    <a href="#">+923251806654</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        59/5l Sahiwal Punjab, <br> Pakistan
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Official Email</h5>
                                    <a href="mailto:aliab7357@gmail.com.com">aliab7357@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="contact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-form-style-one">
                        <h5 class="sub-title">Have Questions?</h5>
                        <h2 class="heading">Send us a Message</h2>
                        <form id="contactForm" action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="name" value="{{ old('name') }}"
                                            placeholder="Name" type="text">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" placeholder="Email*" type="email">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" placeholder="Phone" type="text"
                                            value="{{ old('phone') }}">
                                        <span class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" name="message" placeholder="Tell Us About Project *"></textarea>
                                        <span class="text-danger">
                                            @error('message')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit">
                                        <i class="fa fa-paper-plane"></i> Get in Touch
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Start Map -->
    <div class="maps-area bg-gray overflow-hidden">
        <div class="google-maps">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.4893875355206!2d73.26938057479539!3d30.64834491854407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b12b408572bb%3A0xe7ad8598fe94d45a!2sAli%20Abbas%20cs!5e0!3m2!1sen!2s!4v1715926384718!5m2!1sen!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- End Map -->



@endsection
