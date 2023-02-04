 <!-- Gallery Section -->
 <section class="gallery-section">
    <div class="auto-container">
         <!--Masonry Galery-->
        <div class="sortable-masonry">
            <div class="row clearfix">
                <div class="title-column col-xl-6 col-lg-12 col-md-12">
                    <div class="sec-title">
                        <div class="sub-title"><span class="icon"></span> We believe what we achieve</div>
                        <h2>Images Gallery</h2>
                    </div>
                </div>
                 <div class="filters-column col-xl-6 col-lg-12 col-md-12">
                    <!--Filter-->
                    <div class="filters text-center clearfix">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="filter" data-role="button" data-filter=".medical"><span class="icon flaticon-first-aid-kit"></span><span class="txt">Medical</span></li>
                            <li class="filter" data-role="button" data-filter=".education"><span class="icon flaticon-book"></span><span class="txt">Education</span></li>
                            <li class="filter" data-role="button" data-filter=".shelter"><span class="icon flaticon-shelter"></span><span class="txt">Shelters</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="items-container row clearfix">
                <!--Gallery Item-->
                <div class="gallery-item all masonry-item shelter col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ Vite::asset('resources/images/gallery/1.jpg') }}" alt="">
                            <a href="{{ Vite::asset('resources/images/gallery/1.jpg') }}" class="icon lightbox-image" data-fancybox="gallery"><span class="fa fa-search-plus"></span></a>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item-->
                <div class="gallery-item all masonry-item medical shelter col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ Vite::asset('resources/images/gallery/2.jpg') }}" alt="">
                            <a href="{{ Vite::asset('resources/images/gallery/2.jpg') }}" class="icon lightbox-image" data-fancybox="gallery"><span class="fa fa-search-plus"></span></a>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item-->
                <div class="gallery-item all masonry-item medical education col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ Vite::asset('resources/images/gallery/3.jpg') }}" alt="">
                            <a href="{{ Vite::asset('resources/images/gallery/3.jpg') }}" class="icon lightbox-image" data-fancybox="gallery"><span class="fa fa-search-plus"></span></a>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item-->
                <div class="gallery-item all masonry-item medical education shelter col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ Vite::asset('resources/images/gallery/4.jpg') }}" alt="">
                            <a href="{{ Vite::asset('resources/images/gallery/4.jpg') }}" class="icon lightbox-image" data-fancybox="gallery"><span class="fa fa-search-plus"></span></a>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item-->
                <div class="gallery-item all masonry-item education shelter col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ Vite::asset('resources/images/gallery/5.jpg') }}" alt="">
                            <a href="{{ Vite::asset('resources/images/gallery/5.jpg') }}" class="icon lightbox-image" data-fancybox="gallery"><span class="fa fa-search-plus"></span></a>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item-->
                <div class="gallery-item all masonry-item medical shelter col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ Vite::asset('resources/images/gallery/6.jpg') }}" alt="">
                            <a href="{{ Vite::asset('resources/images/gallery/6.jpg') }}" class="icon lightbox-image" data-fancybox="gallery"><span class="fa fa-search-plus"></span></a>
                        </figure>
                    </div>
                </div>

                <!--Gallery Item-->
                <div class="gallery-item all masonry-item medical education col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="{{ Vite::asset('resources/images/gallery/7.jpg') }}" alt="">
                            <a href="{{ Vite::asset('resources/images/gallery/7.jpg') }}" class="icon lightbox-image" data-fancybox="gallery"><span class="fa fa-search-plus"></span></a>
                        </figure>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Gallery Section -->
