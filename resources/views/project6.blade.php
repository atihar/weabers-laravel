@extends('layout')
 
@section('title', 'Portfolio - Amirs')
 
@section('main')

<main class="main-root">
  <div id="dsn-scrollbar">
    <!-- ========== Header Normal ========== -->
    <header class="header-project p-relative dsn-header-animation over-hidden h-v-100 v-dark-head ">
      <div class="box-content d-flex flex-column align-items-center text-center justify-content-center h-100">
        <div class="hero-img p-absolute w-100 h-100 before-z-index z-index-0" data-overlay="6" data-dsn-ajax="img">
          <img class="cover-bg-img dsn-hero-parallax-img"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-dsn-src="assets/img/project/project6/1-sm.jpg"
            data-dsn-srcset="assets/img/project/project6/1.jpg 1800w,assets/img/project/project6/1-sm.jpg 768w" alt=""
            data-dsn-position="10% 10%" />
        </div>
        <div class="hero-content dsn-container dsn-hero-parallax-content">
          <div class="metas d-inline-block mb-10">
            <span class="date v-light background-main">2021</span>
            <span>Web</span> <span>Brand</span>
          </div>

          <div class="title-wapper p-relative">
            <h1 class="title" data-dsn-ajax="title">AMIR's</h1>
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

      <!-- ========== 2 col image with pop image ========== -->
      <div class="container section-margin has-popup over-hidden p-relative">
        <div class="section-title mb-50 pb-30 border-bottom text-center">
          <h5 class="sup-title theme-color mb-10">Allbirds</h5>
          <h2 class="p-large dsn-text-shadow text-transform-upper fw-600">Happy to share our new <br> work for
            Allbirds</h2>
        </div>

        <div class="d-grid grid-md-2 over-hidden">
          <a href="assets/img/project/project6/3.jpg" class="p-relative over-hidden d-flex">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project6/3-sm.jpg"
              data-dsn-srcset="assets/img/project/project6/3.jpg 1800w,assets/img/project/project6/3-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>

          <a href="assets/img/project/project6/4.jpg" class="p-relative over-hidden d-flex">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project6/4-sm.jpg"
              data-dsn-srcset="assets/img/project/project6/4.jpg 1800w,assets/img/project/project6/4-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>
        </div>
      </div>
      <!-- ========== end 2 col image with pop image  ========== -->


      <section class="feature-section p-relative background-section section-margin v-dark">
        <div class="p-absolute w-100 h-100 top-0 bottom-0">
          <div class="h-100 w-100 top-0 right-0 bottom-0 before-z-index" data-dsn-grid="move-up" data-overlay="5">
            <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project6/2.jpg" alt="">
          </div>
        </div>

        <div class="container">
          <div class="d-grid grid-lg-2">
            <div class="d-flex flex-column justify-content-between">
              <div class="video-btn p-relative z-index-2">
                <a href="https://player.vimeo.com/video/595899669" class="btn-wrapper vid">
                  <span class="icon ion-play"></span>
                  <span class="icon-before ion-ios-play-outline"></span>
                  <h5 class="label letter-spacing-2 text-uppercase">Watch video</h5>
                </a>
              </div>

            </div>

            <div class="box-text p-relative d-flex justify-content-center flex-column mt-section">
              <div class="box-text-wrapper section-padding p-relative z-index-2">
                <h2 class="section-title mb-30 dsn-text-shadow text-transform-upper">Nature is making</h2>
                <div class="pt-30 pb-30 border-top border-bottom">
                  <p class="mb-10 max-w570">Happy to share our new work for Allbirds. Made for the 2021 Olympics.
                    Allbirds wanted to make a statement about the use of oil-based materials in sportswear and
                    Allbirds' mission to change that! To make this project happen, </p>
                  <p>we teamed up with our good friends and talented people at Playback Design. Echoic on sound.
                  </p>
                </div>
                <a href="https://www.behance.net/gallery/126541231/Allbirds?tracking_source=project_owner_other_projects"
                  class="default-button z-index-2 mt-30">
                  <span>
                    <span class="left"></span>
                    <span class="center"></span>
                    <span class="right"></span>
                  </span>
                  <span class="text">View Project</span>
                  <span class="plus-icon"></span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </section>

      <div class="section-margin has-popup over-hidden p-relative">
        <div class="container">
          <div class="d-grid grid-half-1  over-hidden">
            <a href="assets/img/project/project6/5.jpg" class="p-relative over-hidden d-flex">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-dsn-src="assets/img/project/project6/5-sm.jpg"
                data-dsn-srcset="assets/img/project/project6/5.jpg 1800w,assets/img/project/project6/5-sm.jpg 768w"
                alt="" class="cover-bg-img" />
            </a>

            <a href="assets/img/project/project6/6.jpg" class="p-relative over-hidden d-flex">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-dsn-src="assets/img/project/project6/6-sm.jpg"
                data-dsn-srcset="assets/img/project/project6/6.jpg 1800w,assets/img/project/project6/6-sm.jpg 768w"
                alt="" class="cover-bg-img" />
            </a>
          </div>
        </div>
      </div>

      <div class="section-margin has-popup over-hidden p-relative">
        <div class="container">
          <div class="d-grid grid-1-half over-hidden">
            <a href="assets/img/project/project6/7.jpg" class="p-relative over-hidden d-flex">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-dsn-src="assets/img/project/project6/7-sm.jpg"
                data-dsn-srcset="assets/img/project/project6/7.jpg 1800w,assets/img/project/project6/7-sm.jpg 768w"
                alt="" class="cover-bg-img" />
            </a>

            <a href="assets/img/project/project6/8.jpg" class="p-relative over-hidden d-flex">
              <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                data-dsn-src="assets/img/project/project6/8-sm.jpg"
                data-dsn-srcset="assets/img/project/project6/8.jpg 1800w,assets/img/project/project6/8-sm.jpg 768w"
                alt="" class="cover-bg-img" />
            </a>
          </div>
        </div>
      </div>

      <!-- ========== testimonials ========== -->
      <div class="testimonials dsn-swiper section-margin" data-dsn-option='{"effect":"fade"}'>
        <div class="container">
          <div class="testimonials-inner">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide testimonial-item ">
                  <div class="testimonial-content text-center" data-swiper-parallax-opacity="0">
                    <p class="heading-color">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Alias aliquam asperiores consectetur, consequatur dicta doloremque
                      ducimus iure omnis perspiciatis possimus provident quibusdam quis
                      repudiandae,

                    </p>
                  </div>

                  <div class="testimonial-author mt-30 d-flex justify-content-center align-items-center"
                    data-swiper-parallax-opacity="0" data-swiper-parallax="-5%">
                    <div class="author  mr-15">
                      <img src="assets/img/avatar/1.jpg" alt="">
                    </div>
                    <div class="author-text">
                      <h4 class="sm-title-block letter-spacing-2 mb-5 fw-400">Hellstar Works
                      </h4>
                      <h5 class="sup-title theme-color">Envato Customer</h5>
                    </div>
                  </div>
                </div>

                <div class="swiper-slide testimonial-item ">

                  <div class="testimonial-content text-center" data-swiper-parallax-opacity="0">
                    <p class="heading-color">
                      " The designer is just amazing! Very good quality and taste.
                      This template is incredible beautiful. The overall impression is more
                      than good.The support cannot be better. I wish
                      the team all success! "
                    </p>
                  </div>

                  <div class="testimonial-author mt-30 d-flex justify-content-center align-items-center"
                    data-swiper-parallax-opacity="0" data-swiper-parallax="-5%">
                    <div class="author  mr-15">
                      <img src="assets/img/avatar/1.jpg" alt="">
                    </div>
                    <div class="author-text">
                      <h4 class="sm-title-block letter-spacing-2 mb-5 fw-400">Names News
                      </h4>
                      <h5 class="sup-title theme-color">DsnGrid Customer</h5>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dsn-pagination mt-30 d-flex justify-content-between align-items-center">
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
        </div>
      </div>
      <!-- ========== End testimonials ========== -->

      <div class="next-project p-relative mt-section pt-section back-ground-section h-100-v v-dark-head">
        <div class="box-content d-flex flex-column justify-content-center align-items-center text-center h-100">
          <div class="hero-img p-absolute top-0 w-100 h-100 before-z-index z-index-0" data-overlay="5"
            data-dsn-ajax="img">
            <img class="cover-bg-img dsn-hero-parallax-img"
              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project7/1.jpg" alt="" data-dsn-position="10% 10%" />
          </div>
          <div class="container">
            <div class="intro-title text-center p-relative">
              <div class="next-title background-section theme-color pl-20 pr-20 pt-10 pb-10 d-inline-block mb-10">
                <span> NEXT PROJECT</span>
              </div>

              <div class="hero-title">
                <a href="/project-7" class="effect-ajax title-wapper" data-dsn-ajax="next">
                  <h2 class="title">Travel Planner</h2>
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