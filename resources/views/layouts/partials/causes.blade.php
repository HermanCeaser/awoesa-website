<!--Causes Section-->
<section class="causes-section">
    <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20"
        data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
            class="flaticon-heart-2"></span></div>

    <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
            class="flaticon-donation"></span></div>

    <div class="icon-three paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
            class="flaticon-shelter"></span></div>

    <div class="icon-four paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical"><span
            class="flaticon-money-jar"></span></div>

    <div class="icon-five paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
            class="flaticon-dove-2"></span></div>

    <div class="icon-six paroller" data-paroller-factor="0.10" data-paroller-factor-lg="0.15"
        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
            class="flaticon-gift-box"></span></div>

    <div class="icon-seven paroller" data-paroller-factor="0.30" data-paroller-factor-lg="0.30"
        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical"><span
            class="flaticon-heart-2"></span></div>

    <div class="auto-container">

        <div class="sec-title centered">
            <div class="upper-icon"></div>
            <h2>Latest Causes</h2>
            <div class="text">We believe what we achieve</div>
        </div>

        <div class="row clearfix">

            <!--Cause Block-->
            <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms">
                    <div class="image-box">
                        <figure class="image"><a href="{{ route('aboutus') }}"><img
                                    src="{{ Vite::asset('resources/images/resource/cause-image-6.jpg') }}"
                                    alt=""></a></figure>
                        <div class="progress-box">
                            <div class="bar">
                                {{-- <div class="bar-inner count-bar" data-percent="80%"><div class="count-text">80%</div></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{ route('aboutus') }}">Health</a></h3>
                        <div class="cause-title">Health</div>
                        <div class="text">Our organization is committed to improving the health and well-being of AIDS
                            women orphans in South Sudan. With a lack of access to proper medical care, those living
                            with HIV/AIDS often struggle to manage their illness. Our health initiatives provide
                            essential medications, access to doctors and nurses, and education on proper self-care
                            practices. By prioritizing health, we aim to ensure that every woman and child in our
                            community can thrive despite the challenges they face.</div>
                        {{-- <div class="donate-info clearfix">
                            <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span> <strong>$10,000</strong> </div>
                            <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span> <strong>$6,500</strong> </div>
                        </div> --}}
                    </div>
                    <div class="link-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-two"><span
                                class="btn-title">Read More</span></a></div>
                </div>
            </div>

            <!--Cause Block-->
            <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                    <div class="image-box">
                        <figure class="image"><a href=""><img
                                    src="{{ Vite::asset('resources/images/resource/cause-image-3.jpg') }}"
                                    alt=""></a></figure>
                        <div class="progress-box">
                            <div class="bar">
                                {{-- <div class="bar-inner count-bar" data-percent="50%"><div class="count-text">50%</div></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{ route('aboutus') }}">Feed Hungry Children</a></h3>
                        <div class="cause-title">Food &amp; Water</div>
                        <div class="text">We believe that access to nutritious food is a fundamental human right. In
                            South Sudan, many families struggle to put food on the table, particularly those affected by
                            HIV/AIDS. Our feeding programs provide daily meals to those in need, including children who
                            are orphans and living with HIV. We work with local partners to ensure that the food we
                            distribute is locally sourced, sustainable, and culturally appropriate. By providing food
                            security, we aim to ensure that our community can focus on other areas of growth and
                            development.</div>
                        {{-- <div class="donate-info clearfix">
                            <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span> <strong>$10,000</strong> </div>
                            <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span> <strong>$6,500</strong> </div>
                        </div> --}}
                    </div>
                    <div class="link-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-two"><span
                                class="btn-title">Read More</span></a></div>
                </div>
            </div>

            <!--Cause Block-->
            <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/resource/cause-image-2.jpg') }}"
                                    alt=""></a></figure>
                        <div class="progress-box">
                            <div class="bar">
                                {{-- <div class="bar-inner count-bar" data-percent="40%"><div class="count-text">40%</div></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Education For People</a></h3>
                        <div class="cause-title">Education</div>
                        <div class="text">Education is key to breaking the cycle of poverty and promoting long-term,
                            sustainable development. Our education support initiatives provide access to quality
                            schooling for children affected by HIV/AIDS, particularly young girls who are often
                            disproportionately affected. We provide scholarships, mentorship, and academic support to
                            help these children achieve their full potential. By prioritizing education, we aim to
                            provide a pathway to a brighter future for every child in our community.</div>
                        {{-- <div class="donate-info clearfix">
                            <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span> <strong>$10,000</strong> </div>
                            <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span> <strong>$6,500</strong> </div>
                        </div> --}}
                    </div>
                    <div class="link-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-two"><span
                                class="btn-title">Read More</span></a></div>
                </div>
            </div>

            <!--Cause Block-->
            <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/resource/cause-image-4.webp') }}"
                                    alt=""></a></figure>
                        <div class="progress-box">
                            <div class="bar">
                                {{-- <div class="bar-inner count-bar" data-percent="40%"><div class="count-text">40%</div></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Women Emanicipation</a></h3>
                        <div class="cause-title">Women Emanicipation</div>
                        <div class="text">Women and girls are often the most vulnerable members of our community,
                            particularly those affected by HIV/AIDS. Our women's empowerment initiatives provide
                            education, training, and resources to help women become leaders and change-makers in their
                            own lives and communities. We prioritize initiatives that focus on skills training,
                            financial literacy, and reproductive health. By empowering women, we aim to promote gender
                            equality and create a more just and equitable society for all.</div>
                        {{-- <div class="donate-info clearfix">
                            <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span> <strong>$10,000</strong> </div>
                            <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span> <strong>$6,500</strong> </div>
                        </div> --}}
                    </div>
                    <div class="link-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-two"><span
                                class="btn-title">Read More</span></a></div>
                </div>
            </div>

            <!--Cause Block-->
            <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/resource/cause-image-5.jpg') }}"
                                    alt=""></a></figure>
                        <div class="progress-box">
                            <div class="bar">
                                {{-- <div class="bar-inner count-bar" data-percent="40%"><div class="count-text">40%</div></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Humanitarian Relief</a></h3>
                        <div class="cause-title">Humanitarian Relief</div>
                        <div class="text">South Sudan is a country that has been plagued by conflict and instability
                            for many years. Our humanitarian relief initiatives provide emergency assistance, including
                            shelter, food, and medical care, to those affected by crisis situations. We work closely
                            with local partners and community leaders to ensure that our relief efforts are timely,
                            effective, and culturally appropriate. By prioritizing humanitarian relief, we aim to ensure
                            that no one is left behind in times of crisis.</div>
                        {{-- <div class="donate-info clearfix">
                            <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span> <strong>$10,000</strong> </div>
                            <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span> <strong>$6,500</strong> </div>
                        </div> --}}
                    </div>
                    <div class="link-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-two"><span
                                class="btn-title">Read More</span></a></div>
                </div>
            </div>

            <!--Cause Block-->
            <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                    <div class="image-box">
                        <figure class="image"><a href="#"><img
                                    src="{{ Vite::asset('resources/images/resource/cause-image-1.jpg') }}"
                                    alt=""></a></figure>
                        <div class="progress-box">
                            <div class="bar">
                                {{-- <div class="bar-inner count-bar" data-percent="40%"><div class="count-text">40%</div></div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Clean Water</a></h3>
                        <div class="cause-title">Water</div>
                        <div class="text">Access to clean water is essential to health and well-being. In South
                            Sudan, many families lack access to safe drinking water, which can lead to waterborne
                            illnesses and disease. Our clean water initiatives provide access to clean water, sanitation
                            facilities, and hygiene education. We work with local partners to ensure that our water
                            sources are sustainable and safe. By prioritizing clean water, we aim to ensure that every
                            family in our community has access to this fundamental resource.</div>
                        {{-- <div class="donate-info clearfix">
                            <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span> <strong>$10,000</strong> </div>
                            <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span> <strong>$6,500</strong> </div>
                        </div> --}}
                    </div>
                    <div class="link-box"><a href="{{ route('donate') }}" class="theme-btn btn-style-two"><span
                                class="btn-title">Read More</span></a></div>
                </div>
            </div>
        </div>

    </div>
</section>
