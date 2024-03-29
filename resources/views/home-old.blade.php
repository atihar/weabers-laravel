
    @extends('layout')
 
    @section('title', 'Digital Product Design Studio')
     
    @section('main')
    <main class="main-root">
        <div id="dsn-scrollbar">
            <div class="wrapper">
                <!-- ========== Header Normal ========== -->
                <header class="header-page over-hidden p-relative header-padding-top dsn-header-animation" style="background-image: url('/assets/img/about/bg.svg'); background-repeat:no-repeat; background-position: center right;">
                    <div class="container">
                        <div class="content-hero p-relative h-100 dsn-hero-parallax-content">
                            <p class="subtitle p-relative letter-spacing-2">
                                <span class="p-10 background-section dsn-load-animate theme-color">Results-driven web design, development, SEO, branding, & more
                                </span>
                            </p>
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">Get a website/app that drives revenue</h1>
                            <a href="/contact" class="default-button effect-ajax z-index-2 mt-30 dsn-up">
                                <span>
                                    <span class="left"></span>
                                    <span class="center"></span>
                                    <span class="right"></span>
                                </span>
                                <span class="text">Get a proposal</span>
                                <span class="plus-icon"></span>
                            </a>
                            <div class="d-flex mt-90">
                               <img src="https://global-uploads.webflow.com/637116ed63d653540d84bcc3/637116ee63d6537b4c84bd40_Star%20cluster.svg">
                            </div>
                            <p class="mt-15 dsn-text">"Our new site has a 60% higher conversion<br> rate than our old one"</p>
                            <div class="mt-15 d-flex">
                                <img src="/assets/img/avatar/client-1.jpeg" alt="..." style="height:70px; width: auto; border-radius:50%">
                                <p class="ml-10 mt-5">
                                    JpMacavoy<br>
                                    Triana Studio
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="dsn-container dsn-right-container border-bottom pt-section"></div>
                </header>
                <!-- ========== End Header Normal ========== -->

                <!-- ==========  About  ========== -->
                <section class="about-section about-section-style-2 section-margin" data-dsn-animate="section">
                    <div class="container">
                        <div class="text-box">
                            <div class="h-100">

                                <div class="section-title">
                                    <h5 class="sup-title theme-color mb-10 dsn-up"><span>01</span>ABOUT</h5>
                                    <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper dsn-text">
                                        Building human-centric products for <br> Business Impact
                                    </h2>
                                </div>

                                <div class="d-grid grid-md-2 d-grid-15">
                                    <p class="max-w570 dsn-up">Founded in 2015, Weabers has become a name of trust for 
                                        improving the experience in business and human behavior centric digital ecosystem.</p>
                                    <p class="max-w570 dsn-up">Weabers partner with both startup founders and enterprises 
                                        to help them taking their product ideas and deployment to the next level.</p>
                                </div>
                            </div>

                        </div>

                        <div class="img-box mt-30">
                            <div>
                                <img class="cover-bg-img" src="assets/img/about.jpg" alt="">
                            </div>

                            <span class="box-experience background-section d-flex flex-column ml-auto">
                                <span class="numb-ex fw-bold has-animate-number fw-400">7</span>
                                <span class="text title-block heading-font heading-color letter-spacing-2 fw-400">YEARS
                                    OF <br> DIGITAL EXPERIENCE</span>
                            </span>
                        </div>

                    </div>

                </section>
                <!-- ========== End About ========== -->

                <!-- ========== Services ========== -->
                <section class="services section-margin" data-dsn-animate="section" style="background-image: url('/assets/img/about/bg-2.svg'); background-repeat:no-repeat; background-position: center left;">
                    <div class="container section-title mb-70">
                        <h5 class="sup-title theme-color mb-10 dsn-up"><span>02</span>Everything you need</h5>
                        <h2 class="section-title dsn-text-shadow text-transform-upper dsn-text">
                            For Success</h2>
                    </div>

                    <div class="container">
                        <div class="d-grid grid-lg-3 grid-md-2">
                            <div class="service-item border dsn-up p-10">
                                <div class="service-item-wrapper background-section">
                                    <div class="icon mb-20">
                                        <span class="background-main ion-ios-color-wand-outline"></span>
                                    </div>
                                    <h4 class="title-block letter-spacing-2 text-transform-upper mb-20">Product Discovery
                                    </h4>
                                    <p>Product Research<br>
                                    Journey Mapping<br>
                                    User Flow Discover<br>
                                    Competitor Analysis<br>
                                    Market Analysis
                                    </p>
                                </div>

                            </div>

                            <div class="service-item border dsn-up p-10">
                                <div class="service-item-wrapper background-section">
                                    <div class="icon mb-20">
                                        <span class="background-main ion-ios-lightbulb-outline"></span>
                                    </div>
                                    <h4 class="title-block letter-spacing-2 text-transform-upper mb-20">Design & Development
                                    </h4>
                                    <p>Custom Web Design<br>
                                    Interactive Prototye<br>
                                    ios app development<br>
                                    Landing page<br>
                                    E-commerce & Membership   
                                </p>
                                </div>
                            </div>

                            <div class="service-item border dsn-up p-10">
                                <div class="service-item-wrapper background-section">
                                    <div class="icon mb-20">
                                        <span class="background-main ion-ios-cog-outline"></span>
                                    </div>
                                    <h4 class="title-block letter-spacing-2 text-transform-upper mb-20">
                                        Growth & Marketing</h4>
                                    <p>Social Media Presence<br>
                                    Video Production<br>
                                    Content Writing<br>
                                    PPC Campaign<br>
                                    SEO Optimization  
                                        .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ========== End Services ========== -->

                <!-- ========== Feature ========== -->
                <!-- <div class="dsn-container section-margin" data-dsn-animate="section">
                    <section class="feature-section p-relative background-section v-dark v-dark-head">
                        <div class="p-absolute w-100 h-100 top-0 bottom-0">
                            <div class="h-100 w-100 top-0 right-0 bottom-0 before-z-index" data-dsn-grid="move-up"
                                data-overlay="4">
                                <img class="cover-bg-img"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-dsn-src="assets/img/bg.jpg" alt="">
                            </div>
                        </div>

                        <div class="container">
                            <div class="d-grid grid-lg-2">
                                <div class="d-flex flex-column justify-content-between dsn-z-index-2">
                                    <div class="video-btn">
                                        <a href="https://vimeo.com/175353205" class="vid btn-wrapper">
                                            <span class="icon ion-play"></span>
                                            <span class="icon-before ion-ios-play-outline"></span>
                                            <h5 class="label letter-spacing-2 text-uppercase">Watch video</h5>
                                        </a>
                                    </div>

                                    <div class="d-grid grid-sm-2 mt-auto">
                                        <div class="fact-item border">
                                            <div class="fact-item-wrapper">
                                                <div class="icon mb-10">
                                                    <span class="ion-heart"></span>
                                                </div>

                                                <h5 class="number section-title mb-10 has-animate-number">19k</h5>
                                                <h6 class="sup-title body-color dsn-up">Satisfied Customers</h6>
                                            </div>
                                        </div>

                                        <div class="fact-item border">
                                            <div class="fact-item-wrapper">
                                                <div class="icon mb-10">
                                                    <span class="ion-ios-stopwatch-outline"></span>
                                                </div>

                                                <h5 class="number section-title mb-10 has-animate-number">575</h5>
                                                <h6 class="sup-title body-color dsn-up">Days Of Operation</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="box-text p-relative d-flex justify-content-center flex-column mt-section dsn-z-index-2">
                                    <div class="box-text-wrapper section-padding">
                                        <h5 class="sup-title theme-color mb-10 dsn-up"><span>03</span>BEST FEATURES</h5>
                                        <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper dsn-text">
                                            How the socials are changing?</h2>
                                        <div class="pt-30 pb-30 border-top border-bottom">
                                            <p class="mb-10 max-w570 dsn-up">A system that young people around the globe
                                                with a club culture and fashion enthusiasts feel identified. We tied with Estucy to
                                            bring changes with their current idea and make their things better.  </p>
                                            <p class="dsn-up">Founded in 2018, Estucy was trying to create SAAS based model for retailers.
                                                With the change of socials people are more comfort in buying ...</p>
                                        </div>
                                        <a href="/project"
                                            class="default-button effect-ajax z-index-2 mt-30 dsn-up">
                                            <span>
                                                <span class="left"></span>
                                                <span class="center"></span>
                                                <span class="right"></span>
                                            </span>
                                            <span class="text">View Case</span>
                                            <span class="plus-icon"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div> -->
                <!-- ========== End Feature ========== -->

                <!-- ========== Work Section ========== -->
                <section class="work-section p-relative section-margin dsn-swiper over-hidden"
                    data-dsn-title="our Portfolio"
                    data-dsn-option='{"slidesPerView":1.5,"spaceBetween":30,"centeredSlides":true }'
                    data-dsn-animate="section">

                    <div class="container section-title d-flex text-center flex-column align-items-center mb-70">
                        <h5 class="sup-title theme-color mb-10 dsn-up"><span>04</span>OUR WORK</h5>
                        <h2 class="section-title dsn-text-shadow text-transform-upper text-center dsn-text">Featured
                            Projects</h2>
                    </div>

                    <div class="swiper-container">
                        <div class="swiper-wrapper v-dark-head">

                            <div class="swiper-slide over-hidden work-item h-70-v v-dark-head">
                                <div class="box-img p-relative over-hidden before-z-index" data-overlay="5"
                                    data-swiper-parallax-scale="0.95">
                                    <img class="cover-bg-img"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/project/project1/1.jpg" alt="">
                                </div>

                                <div class="box-content p-absolute bottom-0 border text-center">
                                    <div class="box-content-inner">
                                        <div class="metas d-inline-block mb-15">
                                            <span>startup</span> <span>finance</span>
                                        </div>
                                        <h4 class="sec-title text-uppercase letter-spacing-2">
                                            <a class="effect-ajax" data-dsn-ajax="work" href="/project">Finapp</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide over-hidden work-item h-70-v v-dark-head">
                                <div class="box-img p-relative over-hidden before-z-index" data-overlay="7"
                                    data-swiper-parallax-scale="0.95">
                                    <img class="cover-bg-img"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/project/project2/1.jpg" alt="">
                                </div>

                                <div class="box-content p-absolute bottom-0 border text-center">
                                    <div class="box-content-inner">
                                        <div class="metas d-inline-block mb-15">
                                            <span>website</span> <span>media</span>
                                        </div>
                                        <h4 class="sec-title text-uppercase letter-spacing-2">
                                            <a class="effect-ajax" data-dsn-ajax="work" href="/project-2">Triana Studio</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide over-hidden work-item h-70-v v-dark-head">
                                <div class="box-img p-relative over-hidden before-z-index" data-overlay="5"
                                    data-swiper-parallax-scale="0.95">
                                    <img class="cover-bg-img"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/project/project7/1.jpg" alt="">
                                </div>

                                <div class="box-content p-absolute bottom-0 border text-center">
                                    <div class="box-content-inner">
                                        <div class="metas d-inline-block mb-15">
                                            <span> app</span><span>tourism</span>
                                        </div>
                                        <h4 class="sec-title text-uppercase letter-spacing-2">
                                            <a class="effect-ajax" data-dsn-ajax="work" href="/project-7">Travel Notes</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide over-hidden work-item h-70-v v-dark-head">
                                <div class="box-img p-relative over-hidden before-z-index" data-overlay="5"
                                    data-swiper-parallax-scale="0.95">
                                    <img class="cover-bg-img"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/project/project3/1.jpg" alt="">
                                </div>

                                <div class="box-content p-absolute bottom-0 border text-center">
                                    <div class="box-content-inner">
                                        <div class="metas d-inline-block mb-15">
                                            <span>SAAS</span> <span>fashion</span>
                                        </div>
                                        <h4 class="sec-title text-uppercase letter-spacing-2">
                                            <a class="effect-ajax" data-dsn-ajax="work" href="/project-3">ESTUCY</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide over-hidden work-item h-70-v v-dark-head">
                                <div class="box-img p-relative over-hidden before-z-index" data-overlay="6"
                                    data-swiper-parallax-scale="0.95">
                                    <img class="cover-bg-img"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/project/project6/1.jpg" alt="">
                                </div>

                                <div class="box-content p-absolute bottom-0 border text-center">
                                    <div class="box-content-inner">
                                        <div class="metas d-inline-block mb-15">
                                            <span>app</span> <span>brand</span>
                                        </div>
                                        <h4 class="sec-title text-uppercase letter-spacing-2">
                                            <a class="effect-ajax" data-dsn-ajax="work" href="/project-6">AMIRS</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide over-hidden work-item h-70-v v-dark-head">
                                <div class="box-img p-relative over-hidden before-z-index" data-overlay="6"
                                    data-swiper-parallax-scale="0.95">
                                    <img class="cover-bg-img"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/project/project5/1.jpg" alt="">
                                </div>

                                <div class="box-content p-absolute bottom-0 border text-center">
                                    <div class="box-content-inner">
                                        <div class="metas d-inline-block mb-15">
                                            <span>platform</span> <span>carbon</span>
                                        </div>
                                        <h4 class="sec-title text-uppercase letter-spacing-2">
                                            <a class="effect-ajax" data-dsn-ajax="work" href="/project-5">Floresta</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="dsn-pagination dsn-container mt-30 d-flex justify-content-between align-items-center">
                            <div class="swiper-prev">
                                <div class="prev-container">
                                    <div class="container-inner background-section">
                                        <svg viewBox="0 0 6 10">
                                            <path
                                                d="M0,9.9C1.4,8.3,2.9,5.6,3.4,5C2.9,4.4,1.4,1.7,0,0.1L0.1,0C1.5,1.6,5.8,4.8,6,5 c-0.2,0.2-4.5,3.4-5.9,5L0,9.9z">
                                            </path>
                                        </svg>
                                        <svg viewBox="0 0 6 10">
                                            <path
                                                d="M0,9.9C1.4,8.3,2.9,5.6,3.4,5C2.9,4.4,1.4,1.7,0,0.1L0.1,0C1.5,1.6,5.8,4.8,6,5 c-0.2,0.2-4.5,3.4-5.9,5L0,9.9z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination background-section"></div>

                            <div class="swiper-next">

                                <div class="next-container">
                                    <div class="container-inner background-section">
                                        <svg viewBox="0 0 6 10">
                                            <path
                                                d="M0,9.9C1.4,8.3,2.9,5.6,3.4,5C2.9,4.4,1.4,1.7,0,0.1L0.1,0C1.5,1.6,5.8,4.8,6,5 c-0.2,0.2-4.5,3.4-5.9,5L0,9.9z">
                                            </path>
                                        </svg>
                                        <svg viewBox="0 0 6 10">
                                            <path
                                                d="M0,9.9C1.4,8.3,2.9,5.6,3.4,5C2.9,4.4,1.4,1.7,0,0.1L0.1,0C1.5,1.6,5.8,4.8,6,5 c-0.2,0.2-4.5,3.4-5.9,5L0,9.9z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!-- ========== End Work Section ========== -->

                <!-- ========== Section ========== -->
                <div class="dsn-container section-margin p-relative">
                    <div class="box-gallery-vertical md-pt-section" data-dsn-animate="section" data-dsn-duration="100%"
                        data-dsn="color">
                        <div class="container">
                            <div class="d-grid grid-lg-2">
                                <div class="box-im h-100" data-dsn-grid="move-up">
                                    <img class="has-top-bottom" src="assets/img/project/project2/home-thumb.png" alt=""
                                        data-dsn-move="20%">
                                </div>

                                <div class="box-info section-padding p-relative section-margin pl-40 pr-40">
                                    <h5 class="sup-title theme-color mb-10 dsn-up"><span>05</span>Already have a website?</h5>
                                    <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper dsn-text">5 Important Reasons To Redesign Your Website</h2>
                                    <div class="pt-30 pb-30 border-top border-bottom">
                                        <p class="mb-10 max-w570 dsn-up"> A website redesign always implies a lot of work. It doesn't matter if you do it yourself or hire a freelancer or agency to do it for you. A redesign not only involves time but also an allocated budget. The best part, though,</p>
                                        <p class="dsn-up">is the excitement of having a brand-new online presence at the end of the process that you will be proud to show everyone......</p>
                                    </div>
                                    <a href="/website-redesign" class="default-button effect-ajax z-index-2 mt-30 dsn-up">
                                        <span>
                                            <span class="left"></span>
                                            <span class="center"></span>
                                            <span class="right"></span>
                                        </span>
                                        <span class="text">View more</span>
                                        <span class="plus-icon"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========== End Section ========== -->

                @include('components.testimonials')

                <section class="blog section-padding background-section" data-dsn-animate="section">
                    <div class="container section-title mb-70">
                        <h5 class="sup-title theme-color mb-10 dsn-up"><span>07</span>OUR Blog</h5>
                        <h2 class="section-title dsn-text-shadow text-transform-upper dsn-text">Latest Blog Posts</h2>
                    </div>

                    <div class="container">
                        <div class="d-grid grid-md-2">
                            <div class="bolg-item dsn-up">
                                <div class="img">
                                    <img src="assets/img/blog/1.jpg" alt="">
                                </div>

                                <div class="box-content">
                                    <div class="content-inner background-section">
                                        <span
                                            class="blog-catgeory background-main p-10 text-uppercase letter-spacing-2 mb-10 theme-color"><a
                                                href="/our-process" class="effect-ajax">Product Design</a> </span>
                                        <h4 class="title-block mb-20"><a href="/our-process" class="effect-ajax">The tested design process
                                            </a></h4>
                                        <p>Creating your app from scratch can feel overwhelming and complicated at first. Since 
                                            the process is long, project leaders and software...
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bolg-item dsn-up">
                                <div class="img">
                                    <img src="assets/img/blog/2.jpg" alt="">
                                </div>

                                <div class="box-content">
                                    <div class="content-inner background-section">
                                        <span
                                            class="blog-catgeory background-main p-10 text-uppercase letter-spacing-2 mb-10 theme-color"><a
                                                href="/faq" class="effect-ajax">MVP Launch</a> </span>
                                        <h4 class="title-block mb-20"><a href="/faq" class="effect-ajax">Dont get
                                            overwhelmed</a>
                                        </h4>
                                        <p>Creating your app from scratch can feel overwhelming and complicated at first. 
                                            Since the process is long, project leaders and software engineering....
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <!-- ========== End brand-client Section ========== -->
                <section class="brand-client section-margin" data-dsn-animate="section">

                    <div class="container section-title d-flex text-center flex-column align-items-center mb-70">
                        <h5 class="sup-title theme-color mb-10 dsn-up"><span>08</span>OUR CLIENTS</h5>
                        <h2 class="section-title dsn-text-shadow text-transform-upper text-center dsn-text">Your
                            successful</h2>
                    </div>

                    <div class="container">
                        <div class="wrapper-client dsn-up">
                            <div class="logo-box">
                                <div class="logo-box-inner">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/logo/1.png" alt="">
                                </div>
                            </div>

                            <div class="logo-box">
                                <div class="logo-box-inner">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/logo/3.png" alt="">
                                </div>
                            </div>

                            <div class="logo-box">
                                <div class="logo-box-inner">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/logo/4.png" alt="">
                                </div>
                            </div>

                            <div class="logo-box">
                                <div class="logo-box-inner">
                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                        data-dsn-src="assets/img/logo/5.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- ========== End brand-client Section ========== -->

                <div class="next-page section-padding background-section" data-dsn-animate="section">
                    <div class="container">
                        <div class="next-page-inner background-section border p-10  dsn-up">
                            <a href="/contact"
                                class="background-main effect-ajax section-padding w-100 p-relative over-hidden">
                                <div class="bg-circle-dotted"></div>

                                <div class="section-title d-flex text-center flex-column align-items-center">
                                    <h5 class="sup-title theme-color mb-10">Dare and contact us immediately</h5>
                                    <h2 class="section-title dsn-text-shadow  before-text text-transform-upper text-center"
                                        data-text="Ready to get onto Launchpad? 🚀">Ready to get onto Launchpad? 🚀</h2>
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
     