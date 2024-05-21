@extends('frontend.layouts.main')
@section('title', 'Faqs')
@section('main-container')


    <div class="breadcrumb-area bg-cover shadow dark text-center text-light"
        style="background-image: url(frontend/img/banner/10.jpg);">
        <div class="breadcrum-shape">
            <img src="frontend/img/shape/50.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Frequently Asked Question</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Faq Area
                ============================================= -->
    <div class="faq-area bg-gray default-padding">
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-md-30 mb-xs-30">
                    <div class="faq-sidebar">
                        <div class="faq-sidebar-item bg-theme text-light"
                            style="background-image: url(frontend/img/shape/map-light.png);">
                            <h4>Need Help?</h4>
                            <ul>
                                <li><a href="#">Business Policy</a></li>
                                <li><a href="#">Marketing strategy</a></li>
                                <li><a href="#">Customer Benifits</a></li>
                                <li><a href="#">Profit Sharing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 faq-style-one dark pl-50 pl-md-15 pl-xs-15">

                    <h2 class="title mb-40">You need to know <br> before begin everything.</h2>

                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where can I get analytics help?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Bennings appetite disposed me an at subjects an. To no indulgence diminution so
                                        discovered mr apartments. Are off under folly death wrote cause her way spite. Plan
                                        upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties
                                        but why she shewing. She sang know now minute exact dear open to reaching out.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How much does data analytics costs?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Cennings appetite disposed me an at subjects an. To no indulgence diminution so
                                        discovered mr apartments. Are off under folly death wrote cause her way spite. Plan
                                        upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties
                                        but why she shewing. She sang know now minute exact dear open to reaching out.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What kind of data is needed for analysis?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Tennings appetite disposed me an at subjects an. To no indulgence diminution so
                                        discovered mr apartments. Are off under folly death wrote cause her way spite. Plan
                                        upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties
                                        but why she shewing. She sang know now minute exact dear open to reaching out.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do I pay for your service?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Sennings appetite disposed me an at subjects an. To no indulgence diminution so
                                        discovered mr apartments. Are off under folly death wrote cause her way spite. Plan
                                        upon yet way get cold spot its week. Almost do am or limits hearts. Resolve parties
                                        but why she shewing. She sang know now minute exact dear open to reaching out.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Faq Area -->

    @endsection
