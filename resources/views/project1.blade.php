@extends('layout')
 
@section('title', 'Portfolio - Finapp')
 
@section('main')
<main class="main-root">
    <div id="dsn-scrollbar">
      <!-- ========== Header Normal ========== -->
      <header class="header-project p-relative dsn-header-animation over-hidden h-v-100 v-dark-head">
        <div class="box-content d-flex flex-column justify-content-center h-100">
          <div class="hero-img p-absolute w-100 h-100 before-z-index z-index-0" data-overlay="5" data-dsn-ajax="img">
            <img class="cover-bg-img dsn-hero-parallax-img"
              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project1/1-sm.jpg"
              data-dsn-srcset="assets/img/project/project1/1.jpg 1800w,assets/img/project/project1/1-sm.jpg 768w" alt=""
              data-dsn-position="100% 50%" />
          </div>
          <div class="hero-content dsn-container dsn-hero-parallax-content">
            <div class="metas d-inline-block mb-10">
              <span class="date v-light background-main">2022</span>
              <span>product</span> <span>finance</span>
            </div>

            <div class="title-wapper p-relative">
              <h1 class="title" data-dsn-ajax="title">
                Finapp
              </h1>
              <span class="line"></span>
            </div>
          </div>
        </div>
        <div class="main-social">
          <div class="socials-text">
            Follow Us
          </div>

          <div class="social-network d-flex align-items-center">
            <ul class="socials d-flex align-items-center">
              <li data-dsn="parallax">
                <a href="" target="_blank">
                  <i class="fab fa-dribbble"></i>
                  <span>Db</span>
                </a>
              </li>
              <li data-dsn="parallax">
                <a href="" target="_blank">
                  <i class="fab fa-twitter"></i>
                  <span>Tw</span>
                </a>
              </li>
              <li data-dsn="parallax">
                <a href="" target="_blank">
                  <i class="fab fa-behance"></i>
                  <span>Be</span>
                </a>
              </li>
              <li data-dsn="parallax">
                <a href="" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                  <span>Fb</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <!-- ========== End Header Normal ========== -->

      <div class="wrapper">
        <div class="intro-project p-relative section-margin overflow-hidden" data-dsn-animate="section">
          <div class="container">
            <div class="intro-project-title">
              <h2 class="heading-large letter-spacing-2 text-uppercase fw-500 mb-50 dsn-text">
                introduction the project
              </h2>
              <span class="line"></span>
            </div>
            <ul class="p-relative project-info d-grid grid-md-3">
              <li class="dsn-up">
                <h5>SERVICES</h5>
                <span>product design</span>
              </li>
              <li class="dsn-up">
                <h5>Industry</h5>
                <span>Finance</span>
              </li>
              <li class="dsn-up">
                <h5>Year</h5>
                <span>January 7th 2022</span>
              </li>
            </ul>

            <div class="intro-project-text mt-50">
              <h5 class="dsn-up">Summary</h5>
              <p class="dsn-up max-w750">
                We now know that cryptocurrencies are a virtual currency alternative 
                to government currencies, i.e. outside the control of central banks, 
                using alternative circuits, the blockchain, to exist. Moreover, they 
                can be exchanged with any other “traditional” currency. Our target was
                to make the exchange app easy to use and maintain the leagacy usability.
              </p>
            </div>
          </div>
        </div>

        <div class="img-box-small dsn-parallax-full parallax-responsive section-margin" data-dsn-grid="move-up">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-dsn-src="assets/img/project/project1/2-sm.jpg"
            data-dsn-srcset="assets/img/project/project1/2.jpg 1800w, assets/img/project/project1/2-sm.jpg 768w"
            alt="" />
          <div class="cap">
            <span>Web Design</span>
          </div>
        </div>

        <!-- ========== Section Paragraph ========== -->
        <div class="dsn-container section-margin text-center" data-dsn-animate="section">
          <div class="max-w750">
            <h4 class="p-large fw-500 letter-spacing-2 text-transform-upper dsn-text mb-20">
              User Insights
            </h4>

            <p class="dsn-up">
              From this research, Weabers were able to conclude that most of the people buying cryptocurrencies 
              today are men, around 30 years old. They spend about 1 hour (on average) each week monitoring 
              their portfolio, and can invest a lot of money if they trust the platforms they use, especially 
              with the motivation to make money without doing much. Therefore, the most successful features are 
              those that guarantee automatic returns. These people use more than 3 platforms to do so, most of 
              them using Bitso as an access to others not accepting MXN.
            </p>
          </div>
        </div>
        <!-- ========== End Section Paragraph ========== -->

        <div class="gallary-img-2-col">
          <div class="container">
            <div class="d-grid grid-lg-1 d-grid-no-space">
              <div class="item" data-dsn-grid="move-sections" data-dsn-from="0" data-dsn-to="350"
                data-dsn-responsive="tablet">
                <img class="cover-bg-img" src="assets/img/project/project1/3.jpg" alt="" />
              </div>

              <div class="item" data-dsn-grid="move-sections" data-dsn-from="0" data-dsn-to="-350"
                data-dsn-responsive="tablet">
                <img class="cover-bg-img" src="assets/img/project/project1/4.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="img-box-small dsn-parallax-full parallax-responsive section-margin" data-dsn-grid="move-up">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-dsn-src="assets/img/project/project1/10-sm.jpg"
            data-dsn-srcset="assets/img/project/project1/10.jpg 1800w, assets/img/project/project1/10-sm.jpg 768w"
            alt="" />
          <div class="cap">
            <span>Web Design</span>
          </div>
        </div>

        <div class="gallary-img-content section-margin">
          <div class="container">
            <div class="d-grid grid-lg-2 align-items-center">
              <div class="box-text-wrapper">
                <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper">
                  We will create
                </h2>

                <h5 class="max-w570 p-large mb-30">
                  a new simple, user-friendly platform with automated processes that 
                  allows you to invest your money in cryptocurrencies in a simple and didactic way, 
                  from deposits in local currency (MXN) to the purchase of the chosen cryptocurrencies, 
                  with a visualization system that allows our users to track their savings in confidence.
                </h5>

                <p class="mb-10 max-w570">
                  Hypothesis: We believe that by creating a unique educational application for cryptocurrency and FIAT 
                  currency management for crypto lovers, newbies or not, we will open up access to this 
                  other world to many people who were previously reluctant, build their loyalty and make 
                  cryptocurrency part of their daily life and saving habits.
                </p>

                <p class="max-w570">
                  Customer Journey : We developed a happy path for our users within the platform. This happy path, to better represent 
                  the functionalities of the app, and because of the time spent on the development of the app, does
                   not include onboarding. It includes the connection of other banks to the app to show the general 
                   functioning of the solution, but the design will only show the app of a user who has already 
                   connected his bank account to the app.
                </p>

                <a href="https://atlassian.design/" target="_blank"
                  class="default-button z-index-2 mt-30">
                  <span>
                    <span class="left"></span>
                    <span class="center"></span>
                    <span class="right"></span>
                  </span>
                  <span class="text">Design System</span>
                  <span class="plus-icon"></span>
                </a>
              </div>

              <div class="img-inner">
                <div class="d-grid grid-md-2">
                  <div class="img-box">
                    <img class="cover-bg-img" src="assets/img/project/project1/1.jpg" alt="" />

                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                      data-dsn-src="assets/img/project/project1/5-sm.jpg"
                      data-dsn-srcset="assets/img/project/project1/5.jpg 1800w,assets/img/project/project1/5-sm.jpg 768w"
                      alt="" class="cover-bg-img" />
                  </div>

                  <div class="img-box">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                      data-dsn-src="assets/img/project/project1/6-sm.jpg"
                      data-dsn-srcset="assets/img/project/project1/6.jpg 1800w,assets/img/project/project1/6-sm.jpg 768w"
                      alt="" class="cover-bg-img" />

                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                      data-dsn-src="assets/img/project/project1/7-sm.jpg"
                      data-dsn-srcset="assets/img/project/project1/7.jpg 1800w,assets/img/project/project1/7-sm.jpg 768w"
                      alt="" class="cover-bg-img" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ========== 2 col image with pop image ========== -->
        <div class="section-margin has-popup over-hidden p-relative">
          <div class="dsn-container">
            <div class="d-grid grid-md-2 over-hidden">
              <a href="assets/img/project/project1/9.jpg" class="p-relative over-hidden h-v-60 d-flex">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  data-dsn-src="assets/img/project/project1/9-sm.jpg"
                  data-dsn-srcset="assets/img/project/project1/9.jpg 1800w,assets/img/project/project1/9-sm.jpg 768w"
                  alt="" class="cover-bg-img" />
              </a>
              <a href="assets/img/project/project1/8.jpg" class="p-relative over-hidden h-v-60 d-flex">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  data-dsn-src="assets/img/project/project1/8-sm.jpg"
                  data-dsn-srcset="assets/img/project/project1/8.jpg 1800w,assets/img/project/project1/8-sm.jpg 768w"
                  alt="" class="cover-bg-img" />
              </a>
            </div>
          </div>
        </div>
        <!-- ========== end 2 col image with pop image  ========== -->

        <div class="next-project p-relative mt-section pt-section back-ground-section h-100-v v-dark-head">
          <div class="box-content d-flex flex-column justify-content-center align-items-center text-center h-100">
            <div class="hero-img p-absolute top-0 w-100 h-100 before-z-index z-index-0" data-overlay="7"
              data-dsn-ajax="img">
              <img class="cover-bg-img dsn-hero-parallax-img"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-dsn-src="assets/img/project/project2/1.jpg" alt="" data-dsn-position="10% 10%" />
            </div>
            <div class="container">
              <div class="intro-title text-center p-relative">
                <div class="next-title background-section theme-color pl-20 pr-20 pt-10 pb-10 d-inline-block mb-10">
                  <span> NEXT PROJECT</span>
                </div>

                <div class="hero-title">
                  <a href="/project-2" class="effect-ajax title-wapper" data-dsn-ajax="next">
                    <h2 class="title">Triana Studio</h2>
                    <span class="line-before"></span>
                    <span class="line"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @include('components.footer')
      </div>
    </div>
  </main>
@endsection