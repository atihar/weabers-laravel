@extends('layout')
 
@section('title', 'Digital Product Design Studio')
 
@section('main')
<main class="main-root">
    <div id="dsn-scrollbar">
        <div class="wrapper">

        <!-- ========== Header Normal ========== -->
        <header class="header-page over-hidden p-relative header-padding-top dsn-header-animation">
            <div class="container">
                <div class="content-hero p-relative d-flex flex-column h-100 dsn-hero-parallax-content">
                    <p class="subtitle p-relative letter-spacing-2">
                        <span class="p-10 background-section dsn-load-animate theme-color">OUR SERVICES</span>
                    </p>
                    <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">We Deliver Results.</h1>
                    <p class="p-large">
                        Whether we’re building a new product or improving an existing one, we comply with our clients to make a measurable impact. 
                        We’ve helped hundreds of organizations, including large enterprises, small businesses and even non-profits.
                    </p>
                </div>
            </div>
            <div class="dsn-container dsn-right-container border-bottom pt-section"></div>
        </header>
        <!-- ========== End Header Normal ========== -->

        <!-- =========== Process Image =============== -->
                <!-- ========== Services ========== -->
                <section class="services services-list section-margin" data-dsn-animate="section">
                    <div class="container section-title mb-70">
                        <img style="background-color: white; margin:20px 0px;" src="/assets/img/service-process.svg">
                    </div>
                </section>
        <!-- =========== End Process Image =============== -->

        <!-- ========== Services ========== -->
        <section class="services services-list section-margin" data-dsn-animate="section">
            <div class="container section-title mb-70">
                <h5 class="sup-title theme-color mb-10 dsn-up"><span>01</span>OUR SERVICES</h5>
                <h2 class="section-title dsn-text-shadow text-transform-upper dsn-text">
                    Product Design Consultant</h2>
            </div>

            <div class="container">
                <div class="d-grid grid-lg-1">
                    <div class="service-item">
                        <span class="number p-large fw-400 theme-color dsn-up">01</span>
                        <div class="d-grid grid-lg-2 pt-20 mt-20">
                            <span class="line"></span>
                             <div>
                                <h4 class="p-large letter-spacing-2 text-uppercase dsn-text">Product Discovery</h4>
                                <img src="https://www.greenbook.org/mr/wp-content/uploads/2021/03/pexels-tima-miroshnichenko-6914476.jpg"/>
                            </div>
                            <p class="dsn-up">
                                <strong>Market Research:</strong> Evaluating market trends, consumer behavior, and opportunities.<br><br>
                                <strong>Competitor Analysis: </strong>Identifying competitor strategies, strengths, and weaknesses.<br><br>
                                <strong>User Research: </strong>Conducting surveys, interviews, and usability tests to understand user needs and preferences.<br><br>
                                <strong>Customer Journey Mapping: </strong>Visualizing the user's process to accomplish a goal with your product.<br><br>
                                <strong>Product Roadmap Creation: </strong>Outlining the future direction and timeline of product development.<br><br>
                            </p>
                        </div>
                    </div>

                    <div class="service-item">

                        <span class="number p-large fw-400 theme-color dsn-up">02</span>
                        <div class="d-grid grid-lg-2 pt-20 mt-20">
                            <span class="line"></span>
                            <div>
                                <h4 class="p-large letter-spacing-2 text-uppercase dsn-text">Design & Development</h4>
                                <img src="assets/img/about/code.jpg"/>
                            </div>
                            <p class="dsn-up">
                                 <strong>UX/UI Design: </strong> Creating user-friendly and attractive interfaces for your digital product.<br><br>
                                 <strong>Prototyping:  </strong> Developing an early, interactive model of the product to test and refine its functionality.<br><br>
                                 <strong>iOS App Development: </strong> Creating applications for iOS, Android, or cross-platform solutions.<br><br>
                                 <strong>Custom Web Development:  </strong> Building responsive websites and content management systems.<br><br>
                                 <strong>MVP Development:  </strong>  Building a minimum viable product with core functionalities to gather user feedback for further improvement.<br><br>
                                 <strong>E-commerce Store:  </strong>  Building a onlnine store including e-commerce functionalities and automations.<br><br>
                                </p>
                        </div>
                    </div>

                    <div class="service-item">
                        <span class="number p-large fw-400 theme-color dsn-up">03</span>
                        <div class="d-grid grid-lg-2 pt-20 mt-20">
                            <span class="line"></span>
                            <div>
                                <h4 class="p-large letter-spacing-2 text-uppercase dsn-text">Growth & Marketing</h4>
                                <!-- <video width="320" height="240"  autoplay="true" loop>
                                    <source src="assets/img/about/marketing.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                    </video> -->
                                     <video style="width:100%"  src="/assets/img/about/marketing.mp4" muted autoplay loop>
    </video>
                            </div>
                            <p class="dsn-up">
                                <strong>SEO Optimization: </strong> Optimizing your website to improve visibility and rankings on search engines.<br><br> 
                                <strong>Social Media Marketing: </strong> Using platforms like Facebook, Instagram, Twitter, and LinkedIn to engage with audiences and promote your product.<br><br> 
                                <strong>Analytics and Reporting: </strong> Providing data-driven insights and reports on marketing campaigns to measure effectiveness and inform future strategies.<br><br> 
                                <strong>App Store Optimization: </strong> Optimizing mobile app visibility within app stores and improving app conversion rate<br><br> 
                                <strong>Email Marketing Automation:  </strong> Sending direct emails to targeted groups of people to promote your product and build relationships.<br><br> 
                            </p>
                        </div>
                    </div>

                    <div class="service-item">
                        <span class="number p-large fw-400 theme-color dsn-up">04</span>
                        <div class="d-grid grid-lg-2 pt-20 mt-20">
                            <span class="line"></span>
                            <h4 class="p-large letter-spacing-2 text-uppercase dsn-text">Startup Early Stage Support</h4>
                            <p class="dsn-up">Whether you're looking to start a business, or reinvent one, we have a niche service to support 
                                you. Our team can provide valuable input and support during the early phases of business development.
                                <p><strong>Services : </strong></p>
                                <p>Pitch Deck Design<br>
                                    Content Design<br>
                                   Brand Identity generation<br>
                                    Choosing brand name<br>
                                    Smoke testing(early stage user test) 
                                        .</p>
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== End Services ========== -->

        <!-- ========== Subscription ========== -->
        <section class="services section-margin" data-dsn-animate="section">
            <div class="container section-title mb-70">
                <h5 class="sup-title theme-color mb-10 dsn-up"><span>02</span>three ways to</h5>
                <h2 class="section-title dsn-text-shadow text-transform-upper dsn-text">
                    Work Together</h2>
            </div>

            <div class="container">
                <div class="d-grid grid-lg-3 grid-md-2">
                    <div class="service-item border dsn-up p-10">
                        <div class="service-item-wrapper background-section">
                            <div class="icon mb-20">
                                <span class="background-main ion-ios-color-wand-outline"></span>
                            </div>
                            <h4 class="title-block letter-spacing-2 text-transform-upper mb-20">For a fixed fee
                            </h4>
                            <p>We’ve honed processes and refined our services so that our clients know what to expect up front. 
                                Our product consultancy and design services can be delivered for a fixed fee or estimated up front.</p>
                        </div>

                    </div>

                    <div class="service-item border dsn-up p-10">
                        <div class="service-item-wrapper background-section">
                            <div class="icon mb-20">
                                <span class="background-main ion-ios-lightbulb-outline"></span>
                            </div>
                            <h4 class="title-block letter-spacing-2 text-transform-upper mb-20">Using Agile Delivery
                            </h4>
                            <p>Digital innovation projects require a new way of working. For product development we focus on flexibility, 
                                rapid development and problem solving. The team and process is shaped to meet your requirements.
                            </p>
                        </div>
                    </div>

                    <div class="service-item border dsn-up p-10">
                        <div class="service-item-wrapper background-section">
                            <div class="icon mb-20">
                                <span class="background-main ion-ios-rose-outline"></span>
                            </div>
                            <h4 class="title-block letter-spacing-2 text-transform-upper mb-20">By Subscription</h4>
                            <p>Amazing things can happen when you stay curious and ask questions. A subscription service is ideal for UX analysis, 
                                product refinements or on-going support – delivered according to your needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========== End Subscription ========== -->
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
    </div>
        @include('components.footer')
    </div>
</main> 
@endsection