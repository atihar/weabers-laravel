<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword" content="agency, business, corporate, creative, freelancer, interior, nextjs website , nodejs website, branding agency, UI/UX, multipurpose, personal, portfolio, responsive, simple" />

    <!--  Page Title -->
    <title>Weabers - @yield('title')</title>

    <!-- Font & styles -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
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