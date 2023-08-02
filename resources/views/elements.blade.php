@extends('layout')
 
@section('title', 'Portfolio')
 
@section('main')
<main class="main-root">
    <div id="dsn-scrollbar">

        <!-- ========== Header Normal ========== -->
        <header class="header-page over-hidden p-relative header-padding-top dsn-header-animation">
            <div class="container">
                <div class="content-hero p-relative d-flex flex-column h-100 dsn-hero-parallax-content">
                    <p class="subtitle p-relative letter-spacing-2">
                        <span class="pl-10 pr-10 background-section dsn-load-animate theme-color">Portfolio</span>
                    </p>
                    <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">Weaving the Web of Success</h1>
                    <p class="p-large">Welcome to our portfolio at Weabers, where we celebrate the success of our diverse range of clients. Our work is a reflection of our passion for web design, our knack for strategic creativity, and our commitment to providing seamless digital experiences. Scroll through to see some of the highlights of our impressive web designs and discover why businesses around the globe trust Weabers.</p>
                </div>
            </div>
            <div class="dsn-container dsn-right-container border-bottom pt-section"></div>
        </header>
        <!-- ========== End Header Normal ========== -->

        <div class="wrapper">
            <section class="our-work our-work-col section-margin p-relative dsn-load-animate not-filter dsn-filter"
                data-dsn-animate="section">
                <div class="container">
                    <div class="work-container">
                        <div class="filtering d-flex justify-content-between mb-50">
                            <h3 class="sm-title-block border-before text-uppercase">Filter by tags</h3>
                            <div class="filtering-wrap w-auto">
                                <div class="filtering">
                                    <div class="selector"></div>
                                    <button type="button" data-filter="*" class="active">All</button>
                                    <button type="button" data-filter=".ecommerce">Ecommerce</button>
                                    <button type="button" data-filter=".web">Website</button>
                                    <button type="button" data-filter=".branding">Branding</button>
                                    <button type="button" data-filter=".app">Mobile App</button>
                                </div>
                            </div>
                        </div>
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
                             <a href="https://play.google.com/store/apps/details?id=com.kayafriends.com" target="_blank"
                                class="work-item induction app architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/26.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Kaya Friends</span>
                                                    <span>Professional Networking app</span>
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

                            <a href="https://play.google.com/store/apps/details?id=com.travelingbd.app" target="_blank" class="work-item induction app p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/22.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Traveling BD</span>
                                                        <span>Travelers Booking Platform</span>
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

                         <a href="#" class="work-item induction photography p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/8.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Medx</span>
                                                    <span>Management dashboard</span>
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
                            <a href="#" class="work-item induction p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/9.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Flamia</span>
                                                        <span>Restaurant POS</span>
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
                            <a href="https://blockbunny.one/" target="_blank" class="work-item web photography p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/10.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Block bunny</span>
                                                        <span>Crypto Startup</span>
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
                            <a href="https://sekandargroup.com/" target="_blank" class="work-item induction web p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/11.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Sekandar group</span>
                                                        <span>Real Estate Agency Website</span>
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
                                <a href="https://estucy.com/" target="_blank"
                                class="work-item induction web architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/1.jpg"
                                            alt="" data-dsn-position="100% 50%">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Estucy</span>
                                                    <span>App</span> <span>Landing Page</span>
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

                            <a href="http://portraiture-bd.com/" target="_blank" class="work-item induction web p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/12.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Portraiture</span>
                                                        <span>Photography Agency Website</span>
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
                            <a href="http://finpowerbd.com/" target="_blank" class="work-item induction web p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/13.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Finpower</span>
                                                        <span>Finance Agency Website</span>
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
                            <a href="#" class="work-item induction photography p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/14.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Placid</span>
                                                        <span>Hotel Website & Management Sys</span>
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

                                <a href="https://www.thesauce.video/" target="_blank" class="work-item induction web  p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/21.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">The Sauce</span>
                                                        <span>Content Creators Platform</span>
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
                            <a href="http://eastcoastpax.com/" target="_blank" class="work-item induction web ecommerce p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/15.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Eastcoast Pax</span>
                                                        <span>Online Store</span>
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
                            <a href="https://greencontributor.org" target="_blank" class="work-item induction web p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/16.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Green Contributor</span>
                                                        <span>NPO Ecommerce Website</span>
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
                            <a href="https://goldentexbd.com" target="_blank" class="work-item induction web branding p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/17.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Golden Tex</span>
                                                        <span>RMG Product Showcase Website</span>
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
                            
                            <a href="https://voiceinnovators.net/" target="_blank" class="work-item induction web p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/19.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Voice innovators</span>
                                                        <span>SMS service landing page</span>
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
                            <a href="https://methodmelody.com" target="_blank" class="work-item induction ecommerce p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/20.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Methodmelody</span>
                                                        <span>Music Learning Platform</span>
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
                            <a href="https://play.google.com/store/apps/details?id=com.elife.app" target="_blank" class="work-item induction photography p-10 border effect-ajax"
                                    data-dsn-ajax="work">
                                    <div class="work-item-inner background-section p-30">
                                        <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                            <img class="cover-bg-img box-shadow" src="assets/img/elements/23.jpg"
                                                alt="">
                                        </div>
                                        <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                            <div class="effect-ajax d-flex align-items-center">
                                                <div class="text">
                                                    <div class="metas background-main d-inline-block mb-10">
                                                        <span class="date v-light background-main">Elife</span>
                                                        <span>Map Explorer App</span>
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
                                 <a href="https://www.behance.net/gallery/124121101/High-Societe-Branding" target="_blank"
                                class="work-item induction branding architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/24.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">High Societe</span>
                                                    <span>Branding and Web Design</span>
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
                            <a href="https://apps.apple.com/gb/app/estucy/id1588943765" target="_blank"
                                class="work-item induction app architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/25.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Estucy</span>
                                                    <span>Unified marketplace app</span>
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
                            <a href="https://play.google.com/store/apps/details?id=com.kayafriends.com" target="_blank"
                                class="work-item induction app architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/26.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Kaya Friends</span>
                                                    <span>Professional Networking app</span>
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

                            <a href="https://brandable.com.au" target="_blank"
                                class="work-item induction web architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/27.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Brandable</span>
                                                    <span>Product base optimization</span>
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

                            <a href="https://torontofilmforum.org/" target="_blank"
                                class="work-item induction web architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/elements/28.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Toronto Films</span>
                                                    <span>Films Forum Community Website</span>
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

            <div class="next-page section-padding background-section" data-dsn-animate="section">
                <div class="container">
                    <div class="next-page-inner background-section border p-10  dsn-up">
                        <a href="/contact"
                            class="background-main effect-ajax section-padding w-100 p-relative over-hidden">
                            <div class="bg-circle-dotted"></div>

                            <div class="section-title d-flex text-center flex-column align-items-center">
                                <h5 class="sup-title theme-color mb-10">Planning to discuss a full project?</h5>
                                <h2 class="section-title dsn-text-shadow  before-text text-transform-upper text-center"
                                    data-text="Contact Us">Contact Us</h2>
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