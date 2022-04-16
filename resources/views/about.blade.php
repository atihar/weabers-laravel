@extends('layout')
 
@section('title', 'Home Page')
 
@section('main')
<main class="main-root">
    <div id="dsn-scrollbar">

        <!-- ========== Header Normal ========== -->
        <header class="header-page over-hidden p-relative header-padding-top dsn-header-animation">
            <div class="container">
                <div class="content-hero p-relative d-flex flex-column h-100 dsn-hero-parallax-content">
                    <p class="subtitle p-relative letter-spacing-2">
                        <span class="p-10 background-section dsn-load-animate theme-color">DESIGN
                            STUDIO</span>
                    </p>
                    <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">Made to make.</h1>
                    <p class="p-large">Kindly refrain from calling us an “agency.” We are a collective built by
                        artists, engineers,
                        and makers; united by a shared passion for cultural relevance and timeless creative.</p>
                </div>
            </div>
            <div class="dsn-container dsn-right-container border-bottom pt-section"></div>
        </header>
        <!-- ========== End Header Normal ========== -->

        <div class="wrapper">
            <div class="image-about section-margin">
                <div class="dsn-container dsn-right-container border-bottom pb-section">
                    <div class="galleries">
                        <div class="gallery z-index-2 p-relative">
                            <img class="gallery__img" src="assets/img/about/1.jpg" alt="Some image">
                            <img class="gallery__img" src="assets/img/about/2.jpg" alt="Some image">
                            <img class="gallery__img" src="assets/img/about/3.jpg" alt="Some image">
                            <img class="gallery__img" src="assets/img/about/4.jpg" alt="Some image">
                            <img class="gallery__img" src="assets/img/about/5.jpg" alt="Some image">
                            <img class="gallery__img" src="assets/img/about/6.jpg" alt="Some image">
                            <img class="gallery__img" src="assets/img/about/7.jpg" alt="Some image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== Services ========== -->
            <section class="services services-list section-margin" data-dsn-animate="section">
                <div class="container section-title mb-70">
                    <h5 class="sup-title theme-color mb-10 dsn-up"><span>01</span>OUR SERVICES</h5>

                    <h2 class="section-title dsn-text-shadow text-transform-upper dsn-text">
                        Product Design Agency</h2>
                </div>

                <div class="container">
                    <div class="d-grid grid-lg-1">
                        <div class="service-item">

                            <span class="number p-large fw-400 theme-color dsn-up">01</span>
                            <div class="d-grid grid-lg-2 pt-20 mt-20">
                                <span class="line"></span>
                                <h4 class="p-large letter-spacing-2 text-uppercase dsn-text">Mapping & Research</h4>
                                <p class="dsn-up">Each of my clients is a partner whom I help to achieve small
                                    financial
                                    goals. Whether it's the purchase of a new car or a long-awaited vacation, we
                                    will turn into life your goals together</p>
                            </div>
                        </div>

                        <div class="service-item">

                            <span class="number p-large fw-400 theme-color dsn-up">02</span>
                            <div class="d-grid grid-lg-2 pt-20 mt-20">
                                <span class="line"></span>
                                <h4 class="p-large letter-spacing-2 text-uppercase dsn-text">Product Development</h4>
                                <p class="dsn-up">Each of my clients is a partner whom I help to achieve small
                                    financial
                                    goals. Whether it's the purchase of a new car or a long-awaited vacation, we
                                    will turn into life your goals together</p>
                            </div>
                        </div>

                        <div class="service-item">
                            <span class="number p-large fw-400 theme-color dsn-up">03</span>
                            <div class="d-grid grid-lg-2 pt-20 mt-20">
                                <span class="line"></span>
                                <h4 class="p-large letter-spacing-2 text-uppercase dsn-text">Enhance Experience</h4>
                                <p class="dsn-up">Each of my clients is a partner whom I help to achieve small
                                    financial
                                    goals. Whether it's the purchase of a new car or a long-awaited vacation, we
                                    will turn into life your goals together</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End Services ========== -->

            <!-- ========== Feature ========== -->
            <div class="dsn-container section-margin">
                <section class="awards-section p-relative section-padding v-dark-head">
                    <div class="bg-section p-absolute w-100 h-100 top-0 bottom-0">
                        <div class="h-100 w-100 top-0 right-0 bottom-0 before-z-index" data-dsn-grid="move-up"
                            data-overlay="7">
                            <img class="cover-bg-img"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                data-dsn-src="assets/img/awards-bg.jpg" alt="">
                        </div>
                    </div>

                    <div class="container">
                        <div class="justify-content-center">
                            <div class="d-grid grid-md-3 grid-sm-2 p-relative z-index-2">
                                <div class="awards text-center">
                                    <span class="number title fw-400 mb-20">9 <span class="sup-title">+</span>
                                    </span>
                                    <h4 class="sup-title letter-spacing-2 text-uppercase mb-20 theme-color">Site of
                                        month</h4>
                                    <figure class="border-top pt-20"> <img src="assets/img/awards/logo-cssda.png"
                                            alt="Image"> </figure>
                                </div>

                                <div class="awards text-center">
                                    <span class="number title fw-400 mb-20">16 <span
                                            class="sup-title">+</span></span>
                                    <h4 class="sup-title letter-spacing-2 text-uppercase mb-20 theme-color">Mobile
                                        Excellence</h4>
                                    <figure class="border-top pt-20"> <img src="assets/img/awards/logo-awwwards.png"
                                            alt="Image"> </figure>
                                </div>

                                <div class="awards text-center">
                                    <span class="number title fw-400 mb-20">7 <span
                                            class="sup-title">+</span></span>
                                    <h4 class="sup-title letter-spacing-2 text-uppercase mb-20 theme-color">Site of
                                        the Day</h4>
                                    <figure class="border-top pt-20"> <img src="assets/img/awards/logo-fwa.png"
                                            alt="Image"> </figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
            <!-- ========== End Feature ========== -->

            @include('components.testimonials')

            <!-- ========== Team ========== -->
            <section class="team section-padding background-section" data-dsn-animate="section">
                <div class="container section-title d-flex text-center flex-column align-items-center mb-70">
                    <h5 class="sup-title theme-color mb-10 dsn-up"><span>03</span>OUR Team</h5>
                    <h2 class="section-title dsn-text-shadow text-transform-upper dsn-text">Meet The Team</h2>
                </div>

                <div class="container">
                    <div class="d-grid grid-lg-3 grid-md-2">
                        <div class="team-item text-center border p-10 dsn-up">
                            <div class="box-img mb-20">
                                <img class="cover-bg-img" src="assets/img/team/1.jpg" alt="">
                            </div>

                            <div class="box-text">
                                <h4 class="sm-title-block letter-spacing-2 mb-5 text-uppercase fw-400">Ahmed shawky
                                </h4>
                                <h5 class="job theme-color sup-title fw-400">Art Director</h5>

                                <ul class="social border-top pt-15 mt-15">
                                    <li>
                                        <a href="#"><span class="ion-social-facebook-outline"></span></a>
                                    </li>

                                    <li>
                                        <a href="#"><span class="ion-social-instagram-outline"></span></a>
                                    </li>

                                    <li>
                                        <a href="#"><span class="ion-social-twitter-outline"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="team-item text-center border p-10 dsn-up">
                            <div class="box-img mb-20">
                                <img class="cover-bg-img" src="assets/img/team/2.jpg" alt="">
                            </div>

                            <div class="box-text">
                                <h4 class="sm-title-block letter-spacing-2 mb-5 text-uppercase fw-400">Jone Darlene
                                </h4>
                                <h5 class="job theme-color sup-title fw-400">CEO / Architect</h5>

                                <ul class="social border-top pt-15 mt-15">
                                    <li>
                                        <a href="#"><span class="ion-social-facebook-outline"></span></a>
                                    </li>

                                    <li>
                                        <a href="#"><span class="ion-social-instagram-outline"></span></a>
                                    </li>

                                    <li>
                                        <a href="#"><span class="ion-social-twitter-outline"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="team-item text-center border p-10 dsn-up">
                            <div class="box-img mb-20">
                                <img class="cover-bg-img" src="assets/img/team/3.jpg" alt="">
                            </div>

                            <div class="box-text">
                                <h4 class="sm-title-block letter-spacing-2 mb-5 text-uppercase fw-400">Martin Tyrell
                                </h4>
                                <h5 class="job theme-color sup-title fw-400">Designer</h5>

                                <ul class="social border-top pt-15 mt-15">
                                    <li>
                                        <a href="#"><span class="ion-social-facebook-outline"></span></a>
                                    </li>

                                    <li>
                                        <a href="#"><span class="ion-social-instagram-outline"></span></a>
                                    </li>

                                    <li>
                                        <a href="#"><span class="ion-social-twitter-outline"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End Team ========== -->

            <!-- ========== End brand-client Section ========== -->
            <section class="values section-margin" data-dsn-animate="section">

                <div class="container">
                    <div class="d-grid grid-lg-2 justify-content-center align-items-center">
                        <div class="container-img d-grid grid-lg-3 pr-30">
                            <div class="dsn-up"><img class="cover-bg-img" src="assets/img/about/v-1.jpg" alt="">
                            </div>
                            <div class="dsn-up"><img class="cover-bg-img" src="assets/img/about/v-2.jpg" alt="">
                            </div>
                            <div class="dsn-up"><img class="cover-bg-img" src="assets/img/about/v-3.jpg" alt="">
                            </div>
                        </div>

                        <div class="box-info p-relative">

                            <h5 class="sup-title theme-color mb-10 dsn-up"><span>04</span>About Us</h5>
                            <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper dsn-text">FOR THE FUTURE
                            </h2>
                            <div class="">
                                <ul>
                                    <li class="d-flex">
                                        <span class="line"></span>
                                        <h4 class="sup-title">Drive</h4>
                                        <p class="dsn-up">We convert the potential of the team into the energy of
                                            creation</p>
                                    </li>

                                    <li class="d-flex">
                                        <span class="line"></span>
                                        <h4 class="sup-title">Distinctiveness</h4>
                                        <p class="dsn-up">We create real estate superbrands for personalities</p>
                                    </li>

                                    <li class="d-flex">
                                        <span class="line"></span>
                                        <h4 class="sup-title">Confidence</h4>
                                        <p class="dsn-up">We value our reputation, appreciate the confidence of our
                                            customers and are willing to trust our partners</p>
                                    </li>

                                    <li class="d-flex">
                                        <span class="line"></span>
                                        <h4 class="sup-title">Innovation</h4>
                                        <p class="dsn-up">Today we create what will meet the demands of tomorrow.
                                        </p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- ========== End brand-client Section ========== -->

            <div class="next-page section-padding background-section" data-dsn-animate="section">
                <div class="container">
                    <div class="next-page-inner background-section border p-10  dsn-up">
                        <a href="/portfolio"
                            class="background-main effect-ajax section-padding w-100 p-relative over-hidden">
                            <div class="bg-circle-dotted"></div>

                            <div class="section-title d-flex text-center flex-column align-items-center">
                                <h5 class="sup-title theme-color mb-10">See How we are creating impact</h5>
                                <h2 class="section-title dsn-text-shadow  before-text text-transform-upper text-center"
                                    data-text="View Portfolio">View Portfolio</h2>
                            </div>

                        </a>
                    </div>
                </div>
            </div>

            @include('components.footer')
        </div>
    </div>
</main>
@endsection