@extends('layout')
 
@section('title', 'Portfolio - Triana Studio')
 
@section('main')
<main class="main-root">
  <div id="dsn-scrollbar">
    <!-- ========== Header Normal ========== -->
    <header class="header-project p-relative dsn-header-animation over-hidden h-v-100 v-dark-head">
      <div class="box-content d-flex flex-column justify-content-center align-items-center text-center h-100">
        <div class="hero-img p-absolute w-100 h-100 before-z-index z-index-0" data-overlay="7" data-dsn-ajax="img">
          <img class="cover-bg-img dsn-hero-parallax-img"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
            data-dsn-src="assets/img/project/project2/1-sm.jpg"
            data-dsn-srcset="assets/img/project/project2/1.jpg 1800w,assets/img/project/project2/1-sm.jpg 768w" alt=""
            data-dsn-position="10% 10%" />
        </div>
        <div class="hero-content dsn-container dsn-hero-parallax-content">
          <div class="metas d-inline-block mb-10">
            <span class="date v-light background-main">2021</span>
            <span>Web</span> <span>Media</span>
          </div>

          <div class="title-wapper p-relative">
            <h1 class="title" data-dsn-ajax="title">Triana Studio</h1>
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
              <span>Web Platform</span>
            </li>
            <li>
              <h5>Industry</h5>
              <span>Media Production</span>
            </li>
            <li>
              <h5>Year</h5>
              <span>January 7th 2021</span>
            </li>
          </ul>

          <div class="intro-project-text mt-50">
            <h5>Summary</h5>
            <p class="dsn-up max-w750">
              Triana Studio selected Weabers to design and develop their website while keeping their
              legacy brand identity preserved. Our Designer team selected the animations and interface
              to meet their requirements. As they are from media industry we served the media elements
              from separate CDN to make the experience better.
            </p>
          </div>
        </div>
      </div>

      <!-- ========== 3 col image with pop image ========== -->
      <div class="section-margin has-popup over-hidden p-relative">
        <div class="d-grid grid-md-3 over-hidden">
          <a href="assets/img/project/project2/2.jpg" class="p-relative over-hidden d-flex">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project2/2-sm.jpg"
              data-dsn-srcset="assets/img/project/project2/2.jpg 1800w,assets/img/project/project2/2-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>

          <a href="assets/img/project/project2/3.jpg" class="p-relative over-hidden d-flex">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project2/3-sm.jpg"
              data-dsn-srcset="assets/img/project/project2/3.jpg 1800w,assets/img/project/project2/3-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>

          <a href="assets/img/project/project2/4.jpg" class="p-relative over-hidden d-flex">
            <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project2/4-sm.jpg"
              data-dsn-srcset="assets/img/project/project2/4.jpg 1800w,assets/img/project/project2/4-sm.jpg 768w"
              alt="" class="cover-bg-img" />
          </a>
        </div>
      </div>
      <!-- ========== end 3 col image with pop image  ========== -->

      <!-- ========== box-gallery-vertical image left ========== -->
      <div class="box-gallery-vertical box-gallery-content over-hidden">
        <div class="row dsn-z-index-2">
          <div class="col-lg-6  pr-0">
            <div class="box-im h-100-v">
              <div class="img-container h-100 before-z-index" data-overlay="2" data-dsn-grid="move-up">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  data-dsn-src="assets/img/project/project2/5-sm.jpg"
                  data-dsn-srcset="assets/img/project/project2/5.jpg 1800w,assets/img/project/project2/5-sm.jpg 768w"
                  alt="" class="cover-bg-img" />
              </div>

            </div>
          </div>

          <div class="col-lg-6 pl-0 box-content">

            <div class="box-info h-100 box-padding background-section d-flex flex-column justify-content-center">
              <div class="box-info-inner">
                <h5 class="heading-large max-w570 border-bottom pb-30 mb-30"><span class="theme-color">Inspired by
                  </span> a cut-ting-edge technolo-gy, the triana studio website.</h5>

                <p class="dsn-up max-w570">
                  The essence of the luxury fashion brand is reflected on the web components which was done in a precise and
                  carefully planned lighting techniques to celebrate the form,
                  design and presence of Cowboy bikes. 3D cinematography was
                  crafted to celebrate the purity of a mechanical and
                  electronically advanced product.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- ========== End box-gallery-vertical image left ========== -->

      <!-- ========== box-gallery-vertical image left ========== -->
      <div class="box-gallery-vertical box-gallery-content over-hidden">
        <div class="row dsn-z-index-2">
          <div class="col-lg-6 pl-0 order-lg-2 order-md-1">
            <div class="box-im h-100-v">
              <div class="img-container h-100 before-z-index" data-overlay="2" data-dsn-grid="move-up">
                <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                  data-dsn-src="assets/img/project/project2/6-sm.jpg"
                  data-dsn-srcset="assets/img/project/project2/6.jpg 1800w,assets/img/project/project2/6-sm.jpg 768w"
                  alt="" class="cover-bg-img" />
              </div>

            </div>
          </div>

          <div class="col-lg-6 pr-0 box-content order-lg-1 order-md-2">

            <div class="box-info h-100 box-padding background-section d-flex flex-column justify-content-center">
              <div class="box-info-inner">
                <h5 class="heading-large max-w570 border-bottom pb-30 mb-30"><span class="theme-color">Binge-worthy
                    Modern Web Stacks.
                  </span> Thanks to localisation based cloud edge technology to buffer-stream media faster.
                </h5>

                <ul>
                  <li class="list-number d-flex align-items-center">
                    <span class="number mr-20">01</span>
                    <p class=" max-w570">Keeping the legacy branding across the whole platform and keeping design minimal</p>
                  </li>

                  <li class="list-number d-flex align-items-center">
                    <span class="number mr-20">02</span>
                    <p class=" max-w570">We aimed to capture not only the brand aesthetic in the site but also users personality, so we put them in our high-tech analysis chamber 
                      (shhh, it’s just our group of designers). Triana Studio's aesthetic was a palette of black, white and the users personality was a touch of modern, minimal and also luxury.</p>
                  </li>

                  <li class="list-number d-flex align-items-center">
                    <span class="number mr-20">03</span>
                    <p class=" max-w570">We designed the site to have a visually rich and engaging feel, interactivity and cool effects that brought about a feeling of depth and fluidity while retaining solidity, swiftness, and trust</p>
                  </li>

                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- ========== End box-gallery-vertical image left ========== -->


      <div class="gallary-img-2-col section-margin">
        <div class="container">
          <div class="d-grid grid-lg-1 d-grid-no-space">
            <div class="item">
              <img class="cover-bg-img" src="assets/img/project/project2/8.jpg" alt="" />
            </div>

            <div class="item">
              <img class="cover-bg-img" src="assets/img/project/project2/7.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>

      <!-- ========== Section Paragraph ========== -->
      <div class="dsn-container section-margin text-center" data-dsn-animate="section">
        <div class="max-w750">
          <h4 class="p-large letter-spacing-2 fw-500 text-transform-upper dsn-text mb-20">
            “1.618”, Math?, Yes, The Golden Ratio, this was the groundwork for every easing and timing and layout on the site
          </h4>

          <p class="dsn-up">
            "1.618”, Math?, Yes, The Golden Ratio, this was the groundwork for every easing and timing and layout on the site. We weaved it into every interaction and every smooth scroll.
          The site was built to be responsive and have a perfect aspect ratio to provide the same experience across all major devices while maintaining quality.
          </p>
        </div>
      </div>
      <!-- ========== End Section Paragraph ========== -->

      <div class="next-project p-relative mt-section pt-section back-ground-section h-100-v v-dark-head">
        <div class="box-content d-flex flex-column justify-content-center align-items-center text-center h-100">
          <div class="hero-img p-absolute top-0 w-100 h-100 before-z-index z-index-0" data-overlay="5"
            data-dsn-ajax="img">
            <img class="cover-bg-img dsn-hero-parallax-img"
              src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
              data-dsn-src="assets/img/project/project3/1.jpg" alt="" data-dsn-position="10% 10%" />
          </div>
          <div class="container">
            <div class="intro-title text-center p-relative">
              <div class="next-title background-section theme-color pl-20 pr-20 pt-10 pb-10 d-inline-block mb-10">
                <span> NEXT PROJECT</span>
              </div>

              <div class="hero-title">
                <a href="/project-3" class="effect-ajax title-wapper" data-dsn-ajax="next">
                  <h2 class="title">Estucy</h2>
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