<!-- Main Footer -->
<footer class="main-footer">
    <div class="image-layer"
        style="background-image:url('{{ Vite::asset('resources/images/background/footer-bg.jpg') }}')"></div>

    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column big-column col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="widget-content">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}"><img
                                        src="{{ Vite::asset('resources/images/footer-logo.png') }}"
                                        alt="" /></a>
                            </div>
                            <div class="text">Aid widow and Orphans Education support Organization (AWOESO) is a
                                christian relief and development Non- Government Organization with it’s head offices in
                                Juba, the capital city of South Sudan. </div>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Column-->
                <div class="big-column col-lg-8 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h3>About Us</h3>
                                    <ul>
                                        <li><a href="#">Upcoming Events</a></li>
                                        <li><a href="#">Latest Causes</a></li>
                                        <li><a href="#">News Blog</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Who We Are</a></li>
                                        <li><a href="#">Connect With Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h3>Our Partners</h3>
                                    <ul>
                                        <li><a href="#">Donate AWOESO </a></li>
                                        <li><a href="#">Save Our earth</a></li>
                                        <li><a href="#">Water Shortages</a></li>
                                        <li><a href="#">Recycle Better</a></li>
                                        <li><a href="#">Plant Trees Welfare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="widget-content">
                                    <h3>Explore</h3>
                                    <ul>
                                        <li><a href="#">Adopt A Child</a></li>
                                        <li><a href="#">Join Our Programs</a></li>
                                        <li><a href="#">Food Crisis Looms</a></li>
                                        <li><a href="#">Make Donation</a></li>
                                        <li><a href="#">Press Releases</a></li>
                                        <li><a href="#">Global Programs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Column-->
                <div class="big-column col-lg-12 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget info-widget">
                                <div class="widget-content">
                                    <h3>Contact Us</h3>
                                    <ul class="contact-info">
                                        <li>P.O. Box 129, Juba, South Sudan</li>
                                        <li><a href="tel:+211929298488"><span class="fa fa-phone-alt"></span> Phone
                                                +211-92-929-8488</a></li>
                                        <li><a href="tel:+211923643890"><span class="fa fa-phone-alt"></span> Phone
                                                +211-92-364-3890</a></li>
                                        <li><a href="tel:+211922340927"><span class="fa fa-phone-alt"></span> Phone
                                                +211-92-234-0927</a></li>
                                        <li><a href="mailto:info@awoeso.org"><span class="fa fa-envelope-open"></span>
                                                info@awoeso.org</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Column-->
                        <div class="column col-lg-8 col-md-12 col-sm-12">
                            <div class="footer-widget info-widget">
                                <div class="widget-content">
                                    <h3>Subscribe Our Newsletter For Updates</h3>
                                    <div class="newsletter-form">
                                        <form>
                                            <div class="form-group clearfix">
                                                <input type="email" name="email" value=""
                                                    placeholder="Enter Your Email" required="">
                                                <button type="submit"
                                                    class="theme-btn newsletter-btn">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner">
                <!--Copyright-->
                <div class="copyright">Copyrights (c) {{ date('Y') }} <a href="#">(AWOESO) AIDs Women and
                        Orphans Education Support Organization.</a> All rights reserved.</div>
            </div>
        </div>
    </div>

</footer>
