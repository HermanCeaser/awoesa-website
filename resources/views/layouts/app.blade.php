<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Kausid - Charity and Fundraising HTML Template | Home Page 02</title>
    @vite('resources/css/app.css')

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"><div class="icon"></div></div>

        <!-- Main Header -->
        <header class="main-header header-style-two">
            <!-- Header Top -->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <div class="top-left clearfix">
                            <ul class="info clearfix">
                                <li>Become A Helping Hand For The Poor</li>
                            </ul>
                        </div>

                        <div class="top-right clearfix">
                            <ul class="info clearfix">
                                <li>
                                    <div class="change-language">
                                        <div class="language dropdown"><a class="dropdown-toggle clearfix"
                                                id="lang-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" href="#"><span
                                                    class="icon fa fa-globe"></span>Eng <span
                                                    class="arrow flaticon-cheveron-down"></span></a>
                                            <ul class="dropdown-menu style-one" aria-labelledby="lang-dropdown">
                                                <li><a href="#">Arabic</a></li>
                                                <li><a href="#">Chinese</a></li>
                                                <li><a href="#">Spanish</a></li>
                                                <li><a href="#">English</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Upper -->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.html"
                                    title="Kausid - Charity and Fundraising HTML Template"><img
                                        src="{{ Vite::asset('resources/images/logo-2.png') }}"
                                        alt="Kausid - Charity and Fundraising HTML Template"
                                        title="Kausid - Charity and Fundraising HTML Template"></a></div>
                        </div>

                        <!--Nav Box-->
                        <div class="nav-outer clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Charity</a></li>
                                                <li><a href="index-2.html">Home Volunteer</a></li>
                                                <li><a href="index-3.html">Home Wildlife</a></li>
                                                <li><a href="index-4.html">Home Environment</a></li>
                                                <li class="dropdown"><a href="index.html">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style One</a></li>
                                                        <li><a href="index-2.html">Header Style Two</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="about.html">About</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="volunteers.html">Our Volunteers</a></li>
                                                <li><a href="faq.html">Faq's</a></li>
                                                <li><a href="donate.html">Make Donation</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="causes.html">Causes</a>
                                            <ul>
                                                <li><a href="causes.html">See Causes</a></li>
                                                <li><a href="cause-single.html">Cause Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="events.html">Pages</a>
                                            <ul>
                                                <li><a href="events.html">All Events</a></li>
                                                <li><a href="event-single.html">Event Details</a></li>
                                                <li><a href="donate.html">Make Donation</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="blog.html">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Visit Our Blog</a></li>
                                                <li><a href="blog-single.html">Blog Post Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                            <!-- Main Menu End-->

                            <div class="donate-link">
                                <a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate
                                        Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index.html" title=""><img
                                src="{{ Vite::asset('resources/images/sticky-logo.png') }}" alt=""
                                title=""></a>
                    </div>
                    <!--Right Col-->
                    <div class="pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav><!-- Main Menu End-->
                    </div>
                </div>
            </div><!-- End Sticky Menu -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img
                                src="{{ Vite::asset('resources/images/nav-logo.png') }}" alt=""
                                title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div><!-- End Mobile Menu -->
        </header>
        <!-- End Main Header -->

        <!-- Page Content -->
        <main>
            @if (session()->has('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="d-flex w-auto card-body"
                    style="position:fixed; top: 16px; right: 0; z-index: 1030;">
                    <span class="alert alert-success ">{{ session('success') }}</span>
                </div>
            @elseif(session()->has('error'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="d-flex w-auto card-body"
                    style="position:fixed; top: 16px; right: 0; z-index: 1030;">
                    <span class="alert alert-danger ">{{ session('error') }}</span>
                </div>
            @endif
            {{ $slot }}
        </main>


        @include('layouts.partials.footer')

    </div>

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/paroller.js') }}"></script>
    @vite('resources/js/app.js')
</body>

</html>