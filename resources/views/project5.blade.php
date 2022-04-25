@extends('layout')
 
@section('title', 'Portfolio - Floresta')
 
@section('main')

<main class="main-root">
  <div id="dsn-scrollbar">
    <!-- ========== Header Normal ========== -->
    <header class="header-project p-relative dsn-header-animation over-hidden h-v-100 v-dark-head ">
      <div class="box-content d-flex flex-column justify-content-center h-100">
        <div class="hero-img p-absolute w-100 h-100 before-z-index z-index-0" data-overlay="6" data-dsn-ajax="img">
          <img class="cover-bg-img dsn-hero-parallax-img"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-dsn-src="assets/img/project/project5/1-sm.jpg"
            data-dsn-srcset="assets/img/project/project5/1.jpg 1800w,assets/img/project/project5/1-sm.jpg 768w" alt=""
            data-dsn-position="10% 10%" />
        </div>
        <div class="hero-content dsn-container dsn-hero-parallax-content">

          <div class="metas d-inline-block mb-10">
            <span class="date v-light background-main">2022</span>
            <span>PAAS</span> <span>Carbon Footprint</span>
          </div>

          <div class="title-wapper p-relative">
            <h1 class="title" data-dsn-ajax="title">FLORESTA</h1>
            <span class="line-before"></span>
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
      <div class="intro-project p-relative section-margin">
        <div class="container">
          <div class="intro-project-title">
            <h2 class="heading-large letter-spacing-2 text-uppercase fw-500 mb-50">
              introduction the project
            </h2>
            <span class="line"></span>
          </div>
          <ul class="p-relative project-info d-grid grid-md-3">
            <li>
              <h5>SERVICES</h5>
              <span>product</span>
            </li>
            <li>
              <h5>Industry</h5>
              <span>Carbon management</span>
            </li>
            <li>
              <h5>Year</h5>
              <span>2021</span>
            </li>
          </ul>

          <div class="intro-project-text mt-50">
            <h5>Summary</h5>
            <p class="dsn-up max-w750">The app calculates how much your air travel generates in carbon emissions 
              and you finance trees that are planted in the Institute to compensate for the amount. The Floresta 
              Terra is a nonprofit organization responsible for replanting an area in Atlantic Forest.</p>
          </div>
        </div>
      </div>

      <div class="dsn-container  section-margin">
        <div class="img-box-small dsn-parallax-full parallax-responsive" data-dsn-grid="move-up">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-dsn-src="assets/img/project/project5/6-sm.jpg"
            data-dsn-srcset="assets/img/project/project5/6.jpg 1800w, assets/img/project/project5/6-sm.jpg 768w"
            alt="" />
        </div>
      </div>

      <!-- ========== Section ========== -->
      <div class="box-gallery-vertical section-margin md-pt-section p-relative" data-dsn-animate="section"
        data-dsn-duration="100%" data-dsn="color">
        <div class="container">
          <div class="d-grid grid-lg-2">
            <div class="box-im h-100" data-dsn-grid="move-up">
              <img class="has-top-bottom" src="assets/img/project/project5/2.jpg" alt="" data-dsn-move="20%">
            </div>

            <div class="box-info section-padding p-relative section-margin pl-40 pr-40">
              <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper">Real Estate Carbon Emission Problem</h2>
              <div class="pt-30 border-top">
                <p class="mb-10 max-w570">Real estate GHG challenges
                  Our case study client has real estate in 14 states, 305 locations, and controls more than 4 million square feet. 
                  This posed a significant data collection and processing challenge, starting with reviewing the client’s already 
                  collected data on utility costs and bills from each of their locations. </p>
                <p>We immediately realized we would need to solve several problems. Different locations collected utility bill 
                  information in different ways — some in Excel spreadsheets and others in PDF format. Our in-depth review of the 
                  data revealed many gaps in the baseline year, as well as reporting inconsistencies. We worked closely with our 
                  client to resolve these issues, but it was time-consuming and expensive for both parties. Advice for any company 
                  contemplating GHG emissions analysis is to first ensure consistency of reporting and formatting utility data.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- ========== End Section ========== -->

      <div class="dsn-container  section-margin">
        <div class="img-box-small dsn-parallax-full parallax-responsive" data-dsn-grid="move-up">
          <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-dsn-src="assets/img/project/project5/8-sm.jpg"
            data-dsn-srcset="assets/img/project/project5/8.jpg 1800w, assets/img/project/project5/8-sm.jpg 768w"
            alt="" />
        </div>
      </div>

      <!-- ==========  Section ========== -->
      <div class=" p-relative section-margin dsn-swiper over-hidden"
        data-dsn-option='{"slidesPerView":1.8,"spaceBetween":30,"centeredSlides":true }'>
        <div class="swiper-container">
          <div class="swiper-wrapper v-dark-head">

            <div class="swiper-slide over-hidden work-item h-70-v">
              <div class="box-img p-relative over-hidden before-z-index">
                <img class="cover-bg-img"
                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  data-dsn-src="assets/img/project/project5/7.jpg" alt="">
              </div>
            </div>

            <div class="swiper-slide over-hidden work-item h-70-v">
              <div class="box-img p-relative over-hidden before-z-index">
                <img class="cover-bg-img"
                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  data-dsn-src="assets/img/project/project5/8.jpg" alt="">
              </div>
            </div>

            <div class="swiper-slide over-hidden work-item h-70-v">
              <div class="box-img p-relative over-hidden before-z-index">
                <img class="cover-bg-img"
                  src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  data-dsn-src="assets/img/project/project5/9.jpg" alt="">
              </div>
            </div>
          </div>

          <div class="dsn-pagination dsn-container mt-30 d-flex justify-content-between align-items-center">
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

      </div>
      <!-- ========== End Section ========== -->

      <div class="next-project p-relative mt-section pt-section back-ground-section h-100-v v-dark-head">
        <div class="box-content d-flex flex-column justify-content-center align-items-center text-center h-100">
          <div class="hero-img p-absolute top-0 w-100 h-100 before-z-index z-index-0" data-overlay="6"
            data-dsn-ajax="img">
            <img class="cover-bg-img dsn-hero-parallax-img"
              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project6/1.jpg" alt="" data-dsn-position="10% 10%" />
          </div>
          <div class="container">
            <div class="intro-title text-center p-relative">
              <div class="next-title background-section theme-color pl-20 pr-20 pt-10 pb-10 d-inline-block mb-10">
                <span> NEXT PROJECT</span>
              </div>

              <div class="hero-title">
                <a href="/project-6" class="effect-ajax title-wapper" data-dsn-ajax="next">
                  <h2 class="title">Amirs</h2>
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