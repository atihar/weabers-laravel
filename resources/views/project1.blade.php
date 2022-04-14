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
                <span>product</span>
              </li>
              <li class="dsn-up">
                <h5>Industry</h5>
                <span>First Things Studio</span>
              </li>
              <li class="dsn-up">
                <h5>Year</h5>
                <span>January 7th 2022</span>
              </li>
            </ul>

            <div class="intro-project-text mt-50">
              <h5 class="dsn-up">Summary</h5>
              <p class="dsn-up max-w750">
                Meet the Cowboy 4, the connected bike for urban riders. A full
                suite of CGI images and animation was crafted for the global
                launch of Cowboy's latest campaign. The launch of the new C4
                and ST explores the technology, beauty and road presence of
                the urban electric bike in every detail. Mount up, ride on.
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
              3D Cinematography
            </h4>

            <p class="dsn-up">
              The essence of this campaign is built around precise and
              carefully planned lighting techniques to celebrate the form,
              design and presence of Cowboy bikes. 3D cinematography was
              crafted to celebrate the purity of a mechanical and
              electronically advanced product.
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
                  Three colours
                </h2>

                <h5 class="max-w570 p-large mb-30">
                  Each bike and environment is offered in three colours, sand,
                  khaki green and of course, black. Complimentary environment
                  colours with subtle shifts in contrast are used to accent
                  each product visual.
                </h5>

                <p class="mb-10 max-w570">
                  A system that young people around the world with a club
                  culture and techno enthusiasts feel identified. We generated
                  a simple logo that is the basis for generating a geometric
                  and liquid system.
                </p>

                <p class="max-w570">
                  A system that young people around the world with a club
                  culture and techno enthusiasts feel identified. We generated
                  a simple logo that is the basis for generating a geometric
                  and liquid system.
                </p>

                <a href="https://www.behance.net/gallery/123143111/Cowboy" target="_blank"
                  class="default-button z-index-2 mt-30">
                  <span>
                    <span class="left"></span>
                    <span class="center"></span>
                    <span class="right"></span>
                  </span>
                  <span class="text">Visit site</span>
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