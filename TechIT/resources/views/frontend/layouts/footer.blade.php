<footer class="bg-dark text-light">
    <div class="footer-shape">
        <div class="item">
            <img src="frontend/img/shape/7.png" alt="Shape">
        </div>
        <div class="item">
            <img src="frontend/img/shape/9.png" alt="Shape">
        </div>
    </div>
    <div class="container">
        <div class="f-items relative pt-70 pb-120 pt-xs-0 pb-xs-50">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-item pr-50 pr-xs-15">
                    <div class="f-item about">
                        <img class="logo" src="frontend/img/logo-light.png" alt="Logo">
                        <p>
                            Excellence decisively nay man twins impression maximum contrasted remarkably is perfect.
                        </p>
                        <div class="opening-hours">
                            <h5>Opening Hours</h5>
                            <ul>
                                <li>
                                    <div class="working-day">Monday – Sunday:</div>
                                    <div class="marker"></div>
                                    <div class="working-hour">2pm – 2pm</div>
                                </li>
                                <li>
                                    <div class="working-day">Sunday:</div>
                                    <div class="marker"></div>
                                    <div class="working-hour">Off Day</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-item">
                    <div class="f-item link">
                        <h4 class="widget-title">Our Company</h4>
                        <ul>
                            <li>
                                <a href="/aboutus">Compnay Profile</a>
                            </li>
                            <li>
                                <a href="/faq">Help Center</a>
                            </li>
                            <li>
                                <a href="/aboutus">Career</a>
                            </li>
                            {{-- <li>
                                <a href="pricing.php">Plans & Pricing</a>
                            </li> --}}
                            <li>
                                <a href="/contactus">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 footer-item">
                    <div class="f-item link">
                        <h4 class="widget-title">Our Services</h4>
                        <ul>
                            <li>
                                <a href="/servicesdetails">Manage investment</a>
                            </li>
                            <li>
                                <a href="/servicesdetails">Business planning</a>
                            </li>
                            <li>
                                <a href="/servicesdetails">Financial advices</a>
                            </li>
                            <li>
                                <a href="/servicesdetails">Tax strategy</a>
                            </li>
                            <li>
                                <a href="/insurance">Insurance strategy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 footer-item">
                    <h4 class="widget-title">Newsletter</h4>
                    <p>
                        Join our subscribers list to get the latest <br> news and special offers.
                    </p>
                    <div class="f-item newsletter">
                        <form action="" method="POST">
                            @csrf
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit"> Subscribe</button>
                        </form>
                    </div>
                    <ul class="footer-social">
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
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p> All Rights Reserved &copy; {{ date('Y') }}  | Developed by <a href="mailto:ali@gmail.com">Ali Abbas</a> under the supervision of <a href="mailto:jamil@cuisahiwal.edu.pk">Sir Muhammad Jamil</a></p>
                </div>
                <div class="col-lg-4 text-end">
                    <ul>
                        <li>
                            <a href="/aboutus">Terms</a>
                        </li>
                        <li>
                            <a href="/aboutus">Privacy</a>
                        </li>
                        <li>
                            <a href="/contactus">Support</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="frontend/js/jquery-3.6.0.min.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script src="frontend/js/jquery.appear.js"></script>
<script src="frontend/js/jquery.easing.min.js"></script>
<script src="frontend/js/jquery.magnific-popup.min.js"></script>
<script src="frontend/js/modernizr.custom.13711.js"></script>
<script src="frontend/js/swiper-bundle.min.js"></script>
<script src="frontend/js/wow.min.js"></script>
<script src="frontend/js/progress-bar.min.js"></script>
<script src="frontend/js/circle-progress.js"></script>
<script src="frontend/js/isotope.pkgd.min.js"></script>
<script src="frontend/js/imagesloaded.pkgd.min.js"></script>
<script src="frontend/js/jquery.nice-select.min.js"></script>
<script src="frontend/js/count-to.js"></script>
<script src="frontend/js/jquery.scrolla.min.js"></script>
<script src="frontend/js/YTPlayer.min.js"></script>
<script src="frontend/js/TweenMax.min.js"></script>
<script src="frontend/js/rangeSlider.min.js"></script>
<script src="frontend/js/jquery-ui.min.js"></script>
<script src="frontend/js/validnavs.js"></script>
<script src="frontend/js/main.js"></script>
</body>
</html>
