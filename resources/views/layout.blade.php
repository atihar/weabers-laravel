<!DOCTYPE html>
<html lang="en-US">
<!--Author : Weabers 
    This website has been designed as version 3.0.1
    Author URL: www.weabers.com -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="weabers is a product studio based in New York. We build customized sustainable online success by creating valuable platforms based on a strategic foundation help to transform your business into the digital sphere." />
    <meta name="keyword" content="weabers, software agency, web design agency, product design, creative agency dubai, creative agency new york, mobile app development dubai, nextjs website , nodejs website development, branding agency, UI/UX design dubai, 
    UI/UX design new york, landing page dubai, real estate website dubai, real estate website new york, startup website, startup dubai, software company new york, software company dubai, weabers design, react development, react website, ecommerce app, finance app development" />

    <!--  Page Title -->
    <title>Weabers - @yield('title')</title>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://weabers.com/">
    <meta property="og:title" content="Weabers – Digital Product Studio">
    <meta property="og:description" content="weabers is a product development studio. We build customized sustainable online success by creating valuable platforms based on a strategic foundation help to transform your business into the digital sphere.">
    <meta property="og:image" content="assets/img/about.jpg">
    

    <!-- Font & styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96185219-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96185219-1');
</script>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

</head>

<!--classic-menu-->
<body class="v-dark dsn-effect-scroll dsn-cursor-effect dsn-ajax classic-menu">
 
    @include('components.loading')
    <!-- ========== Menu ========== -->
    @include('components.menu')

    @yield('main')
    <!-- ========== Cursor Page ========== -->
    <div class="cursor">

        <div class="cursor-helper">
            <span class="cursor-drag">Drag</span>
            <span class="cursor-view">View</span>
            <span class="cursor-open"><i class="fas fa-plus"></i></span>
            <span class="cursor-close">Close</span>
            <span class="cursor-play">play</span>
            <span class="cursor-next"><i class="fas fa-chevron-right"></i></span>
            <span class="cursor-prev"><i class="fas fa-chevron-left"></i></span>
        </div>

    </div>
    <!-- ========== End Cursor Page ========== -->


    <!-- ========== Scroll Right Page To Top Page ========== -->
    <div id="dsn_scroll_to_top" class="scroll-to-top">
        <img src="assets/img/scroll_top.svg" alt="">
        <div class="box-number v-middle">
            <span>0%</span>
        </div>
    </div>
    <!-- ========== End Scroll Right Page To Top Page ========== -->

    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/dsn-grid.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>