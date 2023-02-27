<x-app-layout>
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image:url('{{ Vite::asset('resources/images/background/bg-page-title-2.jpg') }}');"></div>

        <div class="auto-container">
            <h1>About Us</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}">Pages</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    {{-- @include('layouts.partials.motto') --}}


    <!--About Section-->
    <section class="about-section-three">

        <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-donation"></span></div>


        <div class="icon-four paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical"><span
                class="flaticon-money-jar"></span></div>

        <div class="icon-five paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-gift-box"></span></div>

        <div class="icon-six paroller" data-paroller-factor="0.10" data-paroller-factor-lg="0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-dove-2"></span></div>

        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="sub-title"><span class="icon"></span> Who we are</div>
                            <h2>Warmth & True Support <br>For Needed People</h2>
                            <div class="lower-title">We make ways to good things happen</div>
                        </div>
                        <div class="lower-text">Aid widow and Orphans Education support Organization (AWOESO) is a
                            christian relief and development Non- Government Organization with it’s head offices in
                            Juba, the capital city of South Sudan. AWOESO was formed in 2000, as a community based
                            organization to respond to the overwhelming and increasing number of orphans, widows,
                            internally displaced persons (IDPs), in the Equatorial Region (Central, Eastern and Western
                            States) and South Sudan at large</div>
                        <div class="lower-text">
                            Acknowledging the limited capacity of the government and the increasing demand of the people
                            of South Sudan for Economic Development, Health care, Human Rights, Shelter, Rehabilitation,
                            and Education to the most vulnerable people. AWOESO was therefore formed to support the
                            vulnerable people with Education Support, Shelter, Relief Aid, Health care support ,
                            Rehabilitation and also advocate for equality, women empowerment and Justice for al
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <figure class="image wow slideInRight" data-wow-delay="0ms"><img
                            src="{{ Vite::asset('resources/images/resource/featured-image-5.jpg') }}" alt="" />
                    </figure>
                </div>
            </div>

            <!--Featured Blocks-->

        </div>
    </section>

    @include('layouts.partials.motto')

    <section class="start-giving alternate">
        <div class="image-layer" style="background-image:url('images/background/bg-pattern-1.png')"></div>

        <div class="auto-container">
            <div class="inner-container wow fadeInUp" data-wow-delay="0ms">
                <div class="sec-title light">
                    <div class="sub-title"><span class="icon"></span> We believe what we achieve</div>
                    <h2>Start Giving Today &amp; <br>Good Things Will Happen!</h2>
                </div>
                <div class="text">Through your generous gift the vulnerable people in South Sudan get the aid they
                    need to survive, recover and regain control of their lives..</div>
                <div class="link-box"><a href="#" class="default-link">learn more</a></div>
            </div>
        </div>
    </section>

    <!--Team Section-->
    <section class="team-section">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20"
            data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal">
            <span class="flaticon-tshirt"></span>
        </div>

        <div class="auto-container">

            <div class="sec-title centered">
                <div class="upper-icon"></div>
                <h2>Our Team</h2>
                <div class="text">Volunteers play a critical role in helping vulnerable people thrive. AWOESO
                    offers volunteer opportunities to work remotely and in person</div>
            </div>

            <div class="carousel-box">
                <div class="kausid-carousel owl-theme owl-carousel"
                    data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "800":{ "items" : "2" }, "1024":{ "items" : "3" }}}'>
                    <!--Team Block-->
                    <div class="team-block">
                        <div class="inner-box">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ Vite::asset('resources/images/resource/team-image-1.jpg') }}"
                                        alt=""></a></figure>
                            <h3><a href="#">Amule Samuel William</a></h3>

                            <div class="designation">CEO</div>
                            <div class="designation"><a href="tel:+211929298488"><span class="fa fa-phone-alt"></span>
                                    Phone
                                    +211-92-929-8488</a></div>
                            <div class="text">
                                Amule Samuel William Baba is a native of Kimba Payam in Morobu County in the Greater
                                Equatoria region of central Equatorial state Republic of South Sudan. Having a diverse
                                cultural background of Kakawa and Lubgara communities, it has exposed me to focus on
                                community collaborations that led me to a number of volunteering opportunities and
                                community leadership roles since my teenage age. I started my early pre-school life in
                                Emmanuel kindergarten Yei county and later proceeded to high school in St.Charles
                                Luwanga in Koboko and my college life in St .Joseph's college Ombaci in Arua Uganda.
                                Later in at Strathmore University in Kenya. Since then in the early 2000s, I had been
                                in senior managerial positions in the business sectors with multinational companies that
                                proved and paved way in my excellence in management and administration of organization.
                                Before devoting my life to serve our people this idea has being driven by self instinct
                                and feel of the suffering of our people hence a call for establishment of AWOESO.
                                Currently I serve as the cofounder of AIDS widows and orphans education support
                                organization in south Sudan which is a humanitarian organization that focuses on serving
                                the vulnerable people in our communities in the republic of South Sudan so as to
                                alleviate poverty and improve the quality of life of our people
                            </div>
                        </div>
                    </div>
                    <!--Team Block-->
                    <div class="team-block">
                        <div class="inner-box">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ Vite::asset('resources/images/resource/team-image-2.jpg') }}"
                                        alt=""></a></figure>
                            <h3><a href="#">Asienzo jackline Michael.</a></h3>
                            <div class="designation">Deputy Admin</div>
                            <div class="designation"><a href="tel:+211923643890"><span
                                        class="fa fa-phone-alt"></span> Phone
                                    +211-92-364-3890</a></li>
                            </div>
                            <div class="text">
                                Asienzo Jackline Micheal Bara is a born of Pageri Payam in Magwi County of Eastern
                                Equatoria State in South Sudan.
                                I am a cofounder of AWOESO south Sudan, a national Christian based, Non Profit making
                                and non political humanitarian relief and development Organization. My passion was
                                always helping and serving the needy in the communities. I have over 6 years of
                                experience and expertise specializing in management and administration in humanitarian
                                reliefs. I attended my primary in Redeemer Children's Primary School of Adjumani
                                District in Uganda and later attained my high school from Gulu Central High School of
                                Gulu in Uganda, later at Multi-tech Business School where I attained my Bachelor's
                                Degree in Business Administration and Management.
                            </div>
                        </div>
                    </div>
                    <!--Team Block-->
                    <div class="team-block">
                        <div class="inner-box">
                            <figure class="image-box"><a href="#"><img
                                        src="{{ Vite::asset('resources/images/resource/team-image-3.jpg') }}"
                                        alt=""></a></figure>
                            <h3><a href="#">Kibirango Liz</a></h3>

                            <div class="designation">Consultant</div>
                            <div class="designation"><a href="tel:+211922340927"><span
                                        class="fa fa-phone-alt"></span> Phone
                                    +211-92-234-0927</a></div>
                            <div class="text">
                                Kibirango Liz is a born of central Buganda, Uganda along the banks of River Nile and
                                showers if lake Victoria. She grew up from an extended family and has got a humble
                                background.
                                She acquires a diploma in law from law development center, Kampala Uganda, bachelor's
                                degree in humanitarian studies from University of Pretoria, South Africa, politics and
                                law from University of Dar el Salaam, Tanzania.
                                She has got exposed to various conferences and workshops in respect of NGO governance,
                                international relations, environmental protection policy and law, gender and law across
                                the globe to mention but the few.
                                She has been a brain behind so many NGOs smooth running of a day to day businesses and
                                sits on various boards of different NGOs and CBOs all over the world.
                                Due to her love for culture, she started up a cultural one stop corner at her home
                                village, Johnsonburg and at Kibeho,Rwanda.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action alternate-two">
        <div class="image-layer"
            style="background-image:url('{{ Vite::asset('resources/images/background/bg-pattern-1.png') }}')"></div>

        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                    <h2>Become a vital part of AWOESO &amp; make a real difference to lives of many!</h2>
                </div>
                <div class="link-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="link-box">
                        <a data-toggle="popover" data-placement="top"
                            data-content="Click to Download the Volunteer Application Form, fill it and send it to info@awoeso.org via email"
                            href="{{ route('volunteer.download') }}" class="theme-btn btn-style-one"><span
                                class="btn-title">join to
                                Volunteer</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Default Section-->
    @include('layouts.partials.funfacts2')

    <!--Testimonial Section-->
    <section class="testimonial-section">
        <div class="image-layer" style="background-image:url('images/background/bg-pattern-2.png')"></div>

        <div class="auto-container">

            <div class="sec-title centered">
                <div class="upper-icon"></div>
                <h2>What People Saying About Us!</h2>
            </div>

            <div class="carousel-box">
                <div class="kausid-carousel owl-theme owl-carousel"
                    data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" }, "1024":{ "items" : "1" }}}'>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner">
                            <div class="text">Since vindictively over agile the some far well besides constructively
                                well airy then one during with close excellent grabbed gosh contrary far dalmatian
                                upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a
                                dwelled ouch busy.</div>
                            <div class="info">
                                <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                <div class="author">Sandy Thomas</div>
                                <div class="designation">Donator</div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner">
                            <div class="text">Since vindictively over agile the some far well besides constructively
                                well airy then one during with close excellent grabbed gosh contrary far dalmatian
                                upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a
                                dwelled ouch busy.</div>
                            <div class="info">
                                <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                <div class="author">Sandy Thomas</div>
                                <div class="designation">Donator</div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner">
                            <div class="text">Since vindictively over agile the some far well besides constructively
                                well airy then one during with close excellent grabbed gosh contrary far dalmatian
                                upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a
                                dwelled ouch busy.</div>
                            <div class="info">
                                <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                <div class="author">Sandy Thomas</div>
                                <div class="designation">Donator</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="sponsors-outer">
            <div class="auto-container">
                <!--Sponsors Carousel-->
                <div class="kausid-carousel owl-theme owl-carousel"
                    data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "800":{ "items" : "3" }, "1024":{ "items" : "4" }}}'>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/clients/1.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/clients/2.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/clients/3.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/clients/4.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/clients/1.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/clients/2.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/clients/3.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/clients/4.png') }}" alt=""></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
