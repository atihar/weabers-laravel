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
                        <span class="pl-10 pr-10 background-section dsn-load-animate theme-color">Elements for branding</span>
                    </p>
                    <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">Community For Creatives</h1>
                    <p class="p-large">Kindly refrain from calling us an “agency.” We are a collective built by
                        artists, engineers,
                        and makers; united by a shared passion for cultural relevance and timeless creative.</p>
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
                            <h3 class="sm-title-block border-before text-uppercase">Filter by</h3>
                            <div class="filtering-wrap w-auto">
                                <div class="filtering">
                                    <div class="selector"></div>
                                    <button type="button" data-filter="*" class="active">All</button>
                                    <button type="button" data-filter=".brand">Social</button>
                                    <button type="button" data-filter=".photography">Video</button>
                                    <button type="button" data-filter=".fashion">Startup</button>
                                    <button type="button" data-filter=".product">Presentation</button>
                                </div>
                            </div>
                        </div>
                        <div class="w-100 dsn-item-filter dsn-isotope dsn-masonry d-grid grid-lg-2 grid-md-2"
                            data-dsn-item=".work-item" data-dsn-isotope='{"space": 30 }'>

                            <a href="#"
                                class="work-item induction photography architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/project/project1/1.jpg"
                                            alt="" data-dsn-position="100% 50%">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Social</span>
                                                    <span>Instagram</span> <span>branded story</span>
                                                </div>
                                                <h4 class="title-block sec-title text-uppercase letter-spacing-2">
                                                    $149.00</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="work-item induction photography architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/project/project2/1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Business</span>
                                                    <span>The Business Proposal</span>
                                                </div>
                                                <h4 class="title-block sec-title text-uppercase letter-spacing-2">
                                                    $59.00</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="work-item induction photography architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/project/project3/1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Brand</span>
                                                    <span>Style</span> <span>Guide Kit</span>
                                                </div>
                                                <h4 class="title-block sec-title text-uppercase letter-spacing-2">
                                                    $199.00</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#"
                                class="work-item induction photography architecture p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/project/project4/1.jpg"
                                            alt="" data-dsn-position="85% 50%">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Startup</span>
                                                    <span>Investor Pitch Deck</span>
                                                </div>
                                                <h4 class="title-block sec-title text-uppercase letter-spacing-2">
                                                    $29.00</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="work-item induction photography p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/project/project5/1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Brand</span>
                                                    <span>Product Promotion Video</span>
                                                </div>
                                                <h4 class="title-block sec-title text-uppercase letter-spacing-2">
                                                    $499.00</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="work-item induction photography p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/project/project6/1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Presentation</span>
                                                    <span>MVP Mockup + Animation</span>
                                                </div>
                                                <h4 class="title-block sec-title text-uppercase letter-spacing-2">
                                                    $349.00</h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="work-item induction photography p-10 border effect-ajax"
                                data-dsn-ajax="work">
                                <div class="work-item-inner background-section p-30">
                                    <div class="img-next-box before-z-index w-100 h-100 over-hidden">
                                        <img class="cover-bg-img box-shadow" src="assets/img/project/project7/1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-info p-relative w-100 d-flex align-items-end z-index-1 mt-20">
                                        <div class="effect-ajax d-flex align-items-center">
                                            <div class="text">
                                                <div class="metas background-main d-inline-block mb-10">
                                                    <span class="date v-light background-main">Social Media</span>
                                                    <span>Campaign Guideline 2022</span>
                                                </div>
                                                <h4 class="title-block sec-title text-uppercase letter-spacing-2">
                                                    $299.00</h4>
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
                        <a href="contact.html"
                            class="background-main effect-ajax section-padding w-100 p-relative over-hidden">
                            <div class="bg-circle-dotted"></div>

                            <div class="section-title d-flex text-center flex-column align-items-center">
                                <h5 class="sup-title theme-color mb-10">Dare and contact us immediately</h5>
                                <h2 class="section-title dsn-text-shadow  before-text text-transform-upper text-center"
                                    data-text="We are hiring">We are hiring</h2>
                            </div>

                        </a>
                    </div>
                </div>
            </div>

            <footer class="footer pt-60">
                <div class="container">
                    <div class="footer-top d-grid grid-sm-3">
                        <div class="footer-block-item">
                            <h4 class="title-footer theme-color mb-10">Address</h4>
                            <p class="heading-color">El-Mahalla El-Kubra 37<br>1776 Damietta<br>Egypt</p>
                        </div>

                        <div class="footer-block-item">
                            <h4 class="title-footer theme-color mb-10">Phone</h4>
                            <p class="heading-color">+38 044 364 55 19</p>
                        </div>

                        <div class="footer-block-item">
                            <h4 class="title-footer theme-color mb-10">Phone</h4>
                            <a href="#" class="heading-color">info@dsngrid.com</a>
                        </div>
                    </div>

                    <div class="copyright-social d-flex justify-content-between">
                        <div class="copright-text heading-color text-uppercase">© 2022 broow DIGITAL AGENCY | <a
                                class="theme-color" href="#" target="_blank">DSN Grid</a>
                        </div>

                        <div class="footer-social p-relative">
                            <ul>
                                <li>
                                    <a href="#" target="_blank">Dribbble</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Behance</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Linkedin</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Twitter</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>


    </div>
</main>
@endsection