@extends('layout')
 
@section('title', 'Portfolio - Estucy')
 
@section('main')

<main class="main-root">
  <div id="dsn-scrollbar">
    <!-- ========== Header Normal ========== -->
    <header class="header-project p-relative dsn-header-animation over-hidden h-v-100 v-dark-head ">
      <div class="box-content d-flex flex-column align-items-center text-center justify-content-center h-100">
        <div class="hero-img p-absolute w-100 h-100 before-z-index z-index-0" data-overlay="5" data-dsn-ajax="img">
          <img class="cover-bg-img dsn-hero-parallax-img"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-dsn-src="assets/img/project/project3/1-sm.jpg"
            data-dsn-srcset="assets/img/project/project3/1.jpg 1800w,assets/img/project/project3/1-sm.jpg 768w" alt=""
            data-dsn-position="10% 10%" />
        </div>
        <div class="hero-content dsn-container dsn-hero-parallax-content">
          <div class="metas d-inline-block mb-10">
            <span class="date v-light background-main">2022</span>
            <span>startup</span> <span>saas</span>
          </div>

          <div class="title-wapper p-relative">
            <h1 class="title" data-dsn-ajax="title">ESTUCY</h1>
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
          <ul class="p-relative project-info d-grid d-grid grid-md-3">
            <li>
              <h5>SERVICES</h5>
              <span>product</span>
            </li>
            <li>
              <h5>Industry</h5>
              <span>Fashion</span>
            </li>
            <li>
              <h5>Year</h5>
              <span>2021</span>
            </li>
          </ul>

          <div class="intro-project-text mt-50">
            <h5>Summary</h5>
            <p class="dsn-up max-w750">This innovative layered mask for Never Go Alone takes inspiration from the
              design language of athleisure, with a seamlessly bonded construction and adjustable features that offer
              exceptional comfort.
            </p>
          </div>
        </div>
      </div>

      <!-- ========== 2 col image with pop image ========== -->
      <div class="container has-popup over-hidden p-relative">
        <div class="d-grid grid-md-2 grid-md-2-plus-1 over-hidden">
          <a href="assets/img/project/project3/2.jpg" class="p-relative over-hidden d-flex h-v-60">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/3/2-sm.jpg"
              data-dsn-srcset="assets/img/project/project3/2.jpg 1800w,assets/img/project/project3/2-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>

          <a href="assets/img/project/project3/3.jpg" class="p-relative over-hidden d-flex h-v-60">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project3/3-sm.jpg"
              data-dsn-srcset="assets/img/project/project3/3.jpg 1800w,assets/img/project/project3/3-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>

          <a href="assets/img/project/project3/4.jpg" class="p-relative over-hidden d-flex h-v-60">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/3/4-sm.jpg"
              data-dsn-srcset="assets/img/project/project3/4.jpg 1800w,assets/img/project/project3/4-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>

          <a href="assets/img/project/project3/5.jpg" class="p-relative over-hidden d-flex h-v-60">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/3/5-sm.jpg"
              data-dsn-srcset="assets/img/project/project3/5.jpg 1800w,assets/img/project/project3/5-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>

          <a href="assets/img/project/project3/6.jpg" class="p-relative over-hidden d-flex h-v-60">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project3/6-sm.jpg"
              data-dsn-srcset="assets/img/project/project3/6.jpg 1800w,assets/img/project/project3/6-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>
        </div>
      </div>
      <!-- ========== end 2 col image with pop image  ========== -->

      <!-- ========== Section Paragraph ========== -->
      <div class="container section-margin" data-dsn-animate="section">
        <div class="d-grid grid-md-2">
          <div class="text-item">
            <h4 class="p-large letter-spacing-2 fw-400">The outermost layer is a highly breathable and lightweight
              knitted fabric that conceals a replaceable bespoke PM2.5 diamond-shaped filter that fits the contours of
              the face.</h4>
          </div>

          <div class="text-item">
            <p class="mb-20">This layer is bonded to an ultrasuede mid-layer that gives the mask a sculptural
              structure while providing soft touchpoints for the skin. The innermost layer is an advanced technical
              Superfine knit that incorporates antibacterial fibres for increased protection.</p>

            <p> The mask also utilises modular ear loops so the user can customise the colour to match their style.
              When not in use, it folds flat and can be stored in a convenient travel pouch.</p>
          </div>
        </div>
      </div>
      <!-- ========== End Section Paragraph ========== -->

      <div class="img-box-small dsn-parallax-full parallax-responsive section-margin" data-dsn-grid="move-up">
        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
          data-dsn-src="assets/img/project/project3/7-sm.jpg"
          data-dsn-srcset="assets/img/project/project3/7.jpg 1800w, assets/img/project/project3/7-sm.jpg 768w"
          alt="" />
        <div class="cap">
          <span>Web Design</span>
        </div>
      </div>

      <!-- ========== Section Paragraph ========== -->
      <div class="container section-margin text-center" data-dsn-animate="section">
        <div class="max-w750">
          <h4 class="p-large letter-spacing-2 fw-400 text-transform-upper">This innovative layered mask
            for Never Go Alone takes inspiration from the design language of athleisure.</h4>
        </div>
      </div>
      <!-- ========== End Section Paragraph ========== -->

      <div class="next-project p-relative mt-section pt-section back-ground-section h-100-v v-dark-head">
        <div class="box-content d-flex flex-column justify-content-center align-items-center text-center h-100">
          <div class="hero-img p-absolute top-0 w-100 h-100 before-z-index z-index-0" data-overlay="5"
            data-dsn-ajax="img">
            <img class="cover-bg-img dsn-hero-parallax-img"
              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project4/1.jpg" alt="" data-dsn-position="85% 50%" />
          </div>
          <div class="container">
            <div class="intro-title text-center p-relative">
              <div class="next-title background-section theme-color pl-20 pr-20 pt-10 pb-10 d-inline-block mb-10">
                <span> NEXT PROJECT</span>
              </div>

              <div class="hero-title">
                <a href="/project-4" class="effect-ajax title-wapper" data-dsn-ajax="next">
                  <h2 class="title">High Societe</h2>
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