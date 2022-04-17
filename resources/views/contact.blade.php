@extends('layout')
 
@section('title', 'Contact')
 
@section('main')
<main class="main-root">
    <div id="dsn-scrollbar">

        <!-- ========== Header Normal ========== -->
        <header class="header-page over-hidden p-relative header-padding-top dsn-header-animation">
            <div class="container">
                <div class="content-hero p-relative d-flex flex-column h-100 dsn-hero-parallax-content">
                    <p class="subtitle p-relative letter-spacing-2">
                        <span class="p-10 background-section dsn-load-animate theme-color">Let's get you an
                            estimate</span>
                    </p>
                    <h1 class="title mt-30 dsn-load-animate text-transform-upper mb-20">Contact Us</h1>
                    <p class="p-large">It’s all about the humans behind a brand and those experiencing it, we’re
                        right there. In the middle.</p>
                </div>
            </div>
        </header>
        <!-- ========== End Header Normal ========== -->

        <div class="wrapper">
            <div class="contact-info section-margin" data-dsn-animate="section">
                <div class="dsn-container dsn-right-container border-bottom"></div>

                <div class="container mt-50">
                    <div class="d-grid grid-md-3 grid-sm-2">
                        <div class="item dsn-up">
                            <h4
                                class="sup-title p-10 d-inline-block background-section dsn-load-animate theme-color mb-20">
                                Email Address</h4>
                            <a class="d-block" href="#">info@weabers.com</a>
                            <a class="d-block" href="#">hello@weabers.com</a>
                        </div>

                        <div class="item dsn-up">
                            <h4
                                class="sup-title p-10 d-inline-block background-section dsn-load-animate theme-color mb-20">
                                Address</h4>
                            <p class="heading-color">302 East 8th Street, Brooklyn<br> USA
                            </p>
                            <h4
                                class="sup-title p-10 d-inline-block background-section dsn-load-animate theme-color mb-20">
                                Address 2</h4>
                            <p class="heading-color">123 Rickson Ave, Ontario <br> CANADA
                            </p>
                        </div>

                        <div class="item dsn-up">
                            <h4
                                class="sup-title p-10 d-inline-block background-section dsn-load-animate theme-color mb-20">
                                Contact</h4>
                            <a class="d-block" href="#">+1 347 922 0840</a>
                            <a class="d-block" href="#">+1 519 400 4667</a>
                        </div>
                    </div>
                </div>
                <div class="dsn-container dsn-right-container border-bottom pt-50"></div>
            </div>

            <div class="dsn-container contact-inner section-margin" data-dsn-animate="section">
                <div class="container">

                    <div class="d-grid grid-lg-2">
                        <div class="">
                            <h5 class="sup-title theme-color mb-10 dsn-up"><span>01</span>Stay connected</h5>
                            <h2
                                class="section-title before-text mb-30 dsn-text-shadow text-transform-upper dsn-text">
                                Don’t be shy. <br> Say hi.</h2>
                            <p class="dsn-up max-w570">It’s all about the humans behind a brand and those
                                experiencing it, we’re right there. In the middle.</p>
                        </div>
                        <div class="form-box d-flex flex-column">
                            <form id="contact-form" class="form w-100" method="post" action="contact.php"
                                data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <label>Your name *</label>
                                            <input id="form_name" type="text" name="name"
                                                placeholder="Type your name" required="required"
                                                data-error="name is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <label>Where should we get back?*</label>
                                            <input id="form_email" type="email" name="email"
                                                placeholder="yourname@email.com" required="required"
                                                data-error="Valid email is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group dsn-up">
                                        <div class="entry-box">
                                            <label>What's up?</label>
                                            <textarea id="form_message" class="form-control" name="message"
                                                placeholder="Tell us about your idea" required="required"
                                                data-error="Please,leave us a message."></textarea>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="text-right">
                                        <div class="image-zoom w-auto d-inline-block move-circle"
                                            data-dsn="parallax">
                                            <input type="submit" value="Send Message" class="background-theme">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="next-page section-padding background-section" data-dsn-animate="section">
                <div class="container">
                    <div class="next-page-inner background-section border p-10  dsn-up">
                        <a href="/about"
                            class="background-main effect-ajax section-padding w-100 p-relative over-hidden">
                            <div class="bg-circle-dotted"></div>

                            <div class="section-title d-flex text-center flex-column align-items-center">
                                <h5 class="sup-title theme-color mb-10">About Us</h5>
                                <h2 class="section-title dsn-text-shadow  before-text text-transform-upper text-center"
                                    data-text="Digital Experiences">Digital Experiences</h2>
                            </div>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection