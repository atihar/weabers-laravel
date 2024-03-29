
    @extends('layout')
 
    @section('title', 'Digital Product Design Studio')
     
    @section('main')
    <main class="main-root">
        <div id="dsn-scrollbar">
            <div class="wrapper">
                <!-- ========== Header Normal ========== -->
                <header class="header-page over-hidden p-relative header-padding-top dsn-header-animation" style="background-image: url('https://i.gifer.com/9wTk.gif'); background-repeat:no-repeat; background-position: center right;">
                    <div class="container">
                        <div class="content-hero p-relative h-100 dsn-hero-parallax-content">
                            <p class="subtitle p-relative letter-spacing-2">
                                <span class="p-10 background-section dsn-load-animate theme-color">Results-driven web design, mobile app,  SEO, branding, & more
                                </span>
                            </p>
                            <!-- <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">Build the product and business
you envision with custom software development</h1> -->
                            <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">Bring transformative software development to your business and technological goals.</h1>
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
                                        <!-- We deliver outcome driven product -->
                                        Delivering product that create business impact since last 7 years
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
            <section class="our-work our-work-col section-margin p-relative dsn-load-animate not-filter dsn-filter"
                data-dsn-animate="section">
                    <!-- ========== Heading ========== -->
                    <div class="container section-title d-flex text-center flex-column align-items-center mb-70">
                        <h5 class="sup-title theme-color mb-10 dsn-up"><span>04</span>OUR WORK</h5>
                        <h2 class="section-title dsn-text-shadow text-transform-upper text-center dsn-text">Featured
                            Projects</h2>
                    </div>

                <div class="container px-0 px-lg-5">
                    <div class="work-container">
                        <div class="w-100 dsn-item-filter dsn-isotope dsn-masonry d-grid grid-lg-2 grid-md-2"
                            data-dsn-item=".work-item" data-dsn-isotope='{"space": 30 }'>


                            <a href="https://180re.ca/" target="_blank"
                                class="work-item induction web architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/2.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">180re</span>
                                                    <span>Real Estate Creative Agency</span>
                                                </div>
                                                <h4 class="d-flex title-block sec-title text-uppercase letter-spacing-2">
                                                    visit
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                                </svg>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="https://trianastudio.com/" target="_blank"
                                class="work-item induction web architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/3.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Triana Studio</span>
                                                    <span>Agency Portfolio Website</span>
                                                </div>
                                                <h4 class="d-flex title-block sec-title text-uppercase letter-spacing-2">
                                                    visit
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                                </svg>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                             <a href="https://play.google.com/store/apps/details?id=gifty.app" target="_blank"
                                class="work-item induction app architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/29.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Gifty</span>
                                                    <span>Gift Scheduler App</span>
                                                </div>
                                                <h4 class="d-flex title-block sec-title text-uppercase letter-spacing-2">
                                                    visit
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                                </svg>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            

                            <a href="https://pluralinvesting.com" target="_blank" class="work-item induction web p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/18.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Plural Investing</span>
                                                        <span>Asset management firm website</span>
                                                    </div>
                                                    <h4 class="d-flex title-block sec-title text-uppercase letter-spacing-2">
                                                        visit
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                                    </svg>
                                                    </h4>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </a> 

                            <a href="https://hydracup.com/" target="_blank"
                                class="work-item induction web ecommerce p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/4.jpg"
                                            alt="" data-dsn-position="85% 50%">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Hydra Cup</span>
                                                    <span>Single Product Shop</span>
                                                </div>
                                                <h4 class="d-flex title-block sec-title text-uppercase letter-spacing-2">
                                                    visit
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                                </svg>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="https://bengalimentalhealth.org" target="_blank" class="work-item induction web p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/5.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">BMHM</span>
                                                    <span>Consultant Website</span>
                                                </div>
                                                <h4 class="d-flex title-block sec-title text-uppercase letter-spacing-2">
                                                    visit
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                                </svg>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="https://leagroupbd.com" target="_blank" class="work-item web p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/6.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Lea Group</span>
                                                    <span>Company Website</span>
                                                </div>
                                                <h4 class="d-flex title-block sec-title text-uppercase letter-spacing-2">
                                                    visit
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                                </svg>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                         <a href="https://www.himpanzee.com/" target="_blank" class="work-item induction web p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/7.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Himpanzee</span>
                                                    <span>Eco startup website</span>
                                                </div>
                                                <h4 class="d-flex title-block sec-title text-uppercase letter-spacing-2">
                                                    visit
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                                                </svg>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a> 
                            
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
     