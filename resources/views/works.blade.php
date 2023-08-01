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
                        <span class="pl-10 pr-10 background-section dsn-load-animate theme-color">SOME OF OUR
                            LATEST</span>
                    </p>
                    <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">Case Stuidies</h1>
                    <p class="p-large">We've shipped over 80 digital products in the past six years. 
                        Most of which, we designed and built from the ground up. Here's a few of our favorites:
                    </p>
                </div>
            </div>
            <div class="dsn-container dsn-right-container border-bottom pt-section"></div>
        </header>
        <!-- ========== End Header Normal ========== -->

        <div class="wrapper">
            <div class="our-work section-margin p-relative dsn-load-animate not-filter dsn-filter"
                data-dsn-animate="section">
                <div class="container">
                    <div class="work-container">
                        <div class="filtering d-flex justify-content-between mb-50">
                            <h3 class="sm-title-block border-before text-uppercase">Filter by</h3>
                            <div class="filtering-wrap w-auto">
                                <div class="filtering">
                                    <div class="selector"></div>
                                    <button type="button" data-filter="*" class="active">All</button>
                                    <button type="button" data-filter=".branding">UI/UX</button>
                                    <button type="button" data-filter=".web">Web Platform</button>
                                    <button type="button" data-filter=".app">App Platform</button>
                                    <button type="button" data-filter=".startup">Startup</button>
                                </div>
                            </div>
                        </div>
                        <div class="dsn-item-filter dsn-isotope" data-dsn-item=".work-item">
                            <div class="work-item work-item-list branding app p-relative w-100 pb-50 pt-50">
                                <span class="line line-top"></span>
                                <span class="line line-bottom "></span>
                                <a href="/project"
                                    class="p-relative work-item-inner  d-grid align-items-center effect-ajax">

                                    <div class="metas dsn-up">
                                        <span>web</span>
                                        <span>Finance</span>
                                    </div>

                                    <div class="text-inner p-relative">
                                        <h4 class="p-large dsn-text text-uppercase fw-500">Finapp</h4>
                                    </div>

                                    <div class="view-project dsn-up">View Project</div>
                                </a>

                                <div class="box-img p-absolute">
                                    <div class="box-img-inner w-100 h-100 p-relative">
                                        <img class="cover-bg-img" src="assets/img/project/project1/1.jpg" alt=""
                                            data-dsn-position="100% 50%">
                                    </div>
                                </div>

                            </div>

                            <div class="work-item work-item-list web branding p-relative w-100 pb-50 pt-50">
                                <span class="line line-bottom "></span>
                                <a href="/project-2"
                                    class="p-relative work-item-inner  d-grid align-items-center effect-ajax">
                                    <div class="metas dsn-up">
                                        <span>web</span>
                                        <span>Media</span>
                                    </div>

                                    <div class="text-inner p-relative">
                                        <h4 class="p-large dsn-text text-uppercase fw-500">Triana Studio</h4>
                                    </div>

                                    <div class="view-project dsn-up">View Project</div>
                                </a>

                                <div class="box-img p-absolute">
                                    <div class="box-img-inner w-100 h-100 p-relative">
                                        <img class="cover-bg-img" src="assets/img/project/project2/1.jpg" alt="">
                                    </div>
                                </div>

                            </div>

                            <div class="work-item work-item-list app startup branding p-relative w-100 pb-50 pt-50">
                                <span class="line line-bottom "></span>
                                <a href="/project-3"
                                    class="p-relative work-item-inner  d-grid align-items-center effect-ajax">
                                    <div class="metas dsn-up">
                                        <span>startup</span>
                                        <span>SAAS</span>
                                    </div>

                                    <div class="text-inner p-relative">
                                        <h4 class="p-large dsn-text text-uppercase fw-500">Estucy</h4>
                                    </div>

                                    <div class="view-project dsn-up">View Project</div>
                                </a>

                                <div class="box-img p-absolute">
                                    <div class="box-img-inner w-100 h-100 p-relative">
                                        <img class="cover-bg-img" src="assets/img/project/project3/1.jpg" alt="">
                                    </div>
                                </div>

                            </div>

                            <div class="work-item work-item-list p-relative branding web w-100 pb-50 pt-50">
                                <span class="line line-bottom "></span>
                                <a href="/project-4"
                                    class="p-relative work-item-inner  d-grid align-items-center effect-ajax">
                                    <div class="metas dsn-up">
                                        <span>Web</span>
                                        <span>Brand</span>
                                    </div>

                                    <div class="text-inner p-relative">
                                        <h4 class="p-large dsn-text text-uppercase fw-500">High Societe</h4>
                                    </div>

                                    <div class="view-project dsn-up">View Project</div>
                                </a>

                                <div class="box-img p-absolute">
                                    <div class="box-img-inner w-100 h-100 p-relative">
                                        <img class="cover-bg-img" src="assets/img/project/project4/1.jpg" alt=""
                                            data-dsn-position="85% 50%">
                                    </div>
                                </div>

                            </div>

                            <div class="work-item work-item-list p-relative startup w-100 pb-50 pt-50">
                                <span class="line line-bottom "></span>
                                <a href="/project-5"
                                    class="p-relative work-item-inner  d-grid align-items-center effect-ajax">
                                    <div class="metas dsn-up">
                                        <span>PAAS</span>
                                        <span>Carbon</span>
                                    </div>

                                    <div class="text-inner p-relative">
                                        <h4 class="p-large dsn-text text-uppercase fw-500">Floresta</h4>
                                    </div>

                                    <div class="view-project dsn-up">View Project</div>
                                </a>

                                <div class="box-img p-absolute">
                                    <div class="box-img-inner w-100 h-100 p-relative">
                                        <img class="cover-bg-img" src="assets/img/project/project5/1.jpg" alt="">
                                    </div>
                                </div>

                            </div>

                            <div class="work-item work-item-list p-relative web fashion w-100 pb-50 pt-50">
                                <span class="line line-bottom "></span>
                                <a href="/project-6"
                                    class="p-relative work-item-inner  d-grid align-items-center effect-ajax">
                                    <div class="metas dsn-up">
                                        <span>App</span>
                                        <span>Brand</span>
                                    </div>

                                    <div class="text-inner p-relative">
                                        <h4 class="p-large dsn-text text-uppercase fw-500">Amir's</h4>
                                    </div>

                                    <div class="view-project dsn-up">View Project</div>
                                </a>

                                <div class="box-img p-absolute">
                                    <div class="box-img-inner w-100 h-100 p-relative">
                                        <img class="cover-bg-img" src="assets/img/project/project6/1.jpg" alt="">
                                    </div>
                                </div>

                            </div>

                            <div class="work-item work-item-list p-relative app branding w-100 pb-50 pt-50">
                                <span class="line line-bottom "></span>
                                <a href="/project-7"
                                    class="p-relative work-item-inner  d-grid align-items-center effect-ajax">
                                    <div class="metas dsn-up">
                                        <span>Startup</span>
                                        <span>Tourism</span>
                                    </div>

                                    <div class="text-inner p-relative">
                                        <h4 class="p-large dsn-text text-uppercase fw-500">Travel Planner</h4>
                                    </div>

                                    <div class="view-project dsn-up">View Project</div>
                                </a>

                                <div class="box-img p-absolute">
                                    <div class="box-img-inner w-100 h-100 p-relative">
                                        <img class="cover-bg-img" src="assets/img/project/project7/1.jpg" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="next-page section-padding background-section" data-dsn-animate="section">
                <div class="container">
                    <div class="next-page-inner background-section border p-10  dsn-up">
                        <a href="/contact"
                            class="background-main effect-ajax section-padding w-100 p-relative over-hidden">
                            <div class="bg-circle-dotted"></div>

                            <div class="section-title d-flex text-center flex-column align-items-center">
                                <h5 class="sup-title theme-color mb-10">Are you convinced enough</h5>
                                <h2 class="section-title dsn-text-shadow  before-text text-transform-upper text-center"
                                    data-text="Discuss a project with us">Discuss a project with us </h2>
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