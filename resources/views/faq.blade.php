@extends('layout')
 
@section('title', 'FAQs')
 
@section('main')
<main class="main-root">
    <div id="dsn-scrollbar">
        <header
            class="header-page over-hidden p-relative header-padding-top header-padding-bottom dsn-header-animation">
            <div class="bg-circle-dotted"></div>
            <div class="container">
                <div class="content-hero p-relative d-flex flex-column h-100 dsn-hero-parallax-fill">
                    <div class="metas metas-blog d-flex align-items-center letter-s1 fz-16 p-relative">
                        <p class="post-categories d-inline-block">
                            <span class="cat-links">Startup Studio</span>
                        </p>

                    </div>

                    <div class="hero-title mt-30 dsn-load-animate text-transform-upper ">
                        <div class="d-inline-block">
                            <h1 class="title" data-dsn-ajax="title">MVP FAQs</h1>
                        </div>

                    </div>

                </div>
            </div>
        </header>
        <!-- ========== End Header ========== -->


        <div class="wrapper">

            <div class="root-blog">
                <div class="container ">
                    <div class="dsn-posts">
                        <div class="image-head p-relative full-width">
                            <div class="before-z-index" data-dsn-grid="move-up" data-overlay="5">
                                <img class="cover-bg-img has-bigger-scale"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-dsn-src="assets/img/blog/process.jpg" alt="">
                            </div>
                        </div>

                        <div class="news-content mt-section">
                            <div class="news-content-inner">

                                <div class="post-content">
                                    
                               
                                <h4><strong>>How much should I budget for an MVP app?</strong></h4>
                            
                                <p>We believe that time to market is an important thing for any MVP. That’s why we limit the production timeline of any product to 3 months and fast tracked project starting from $12000 as a budget limit. Within that budget, you can achieve a value bringing minimum viable product that your users can start paying for.</p>
                                
                                <h4><strong>>How long will it take to build an MVP?</strong></h4>
                                <p> Firstly, there’s no need to spend years on MVP development. Time to market matters, so you should validate the idea within the shortest possible time.<br>
                                From our experience, the 3-month time frame is perfect to build MVP. Within this time, it’s possible to get a high-quality product that brings real value
                                to users and looks convincing enough to turn them into paying customers or be proposed to investors.</p>
                                 
                                <h4><strong>>So, why 3 months to build MVP?</strong></h4>
                                <p> To build a solid product, you need to get it prototyped, designed, developed and tested. To cover all these stages, it will take you about 3 months.<br>

                                    So, yes, you need 3 months to build MVP. However, it’s hardly possible to claim something like ‘3 months to spend on MVP development,
                                    and I’ll be done with it’. In fact, you’ll never become ‘done’ - because product building is never a destination but an ongoing process.</p>
                                
                                <h4><strong>> MVP anyhow different from prototypes?</strong></h4>
                                <p> Unlike prototypes, MVP is a functional product, not just a set of paper-based sketches. It somehow works (not the same as poor execution, though)
                                    and already brings real value to end users. It is meant to be your ‘true’ starting point, so you can use it to start tracking purchase intent (how many users
                                    will turn into customers) or get funded.</p>
                                
                                <h4><strong>>So Why building MVP comes first?</strong></h4>
                                <p>Whether or not you wanna get started with MVP, idea validation must be the top priority.<br>
                                    You can pawn your house and get the money needed to build a complete product. Another scenario would be to take small steps (not giant leaps)
                                    and test things out with something fast and simple. In both cases, it might turn out that the idea isn’t worth pursuing - the difference is that in the second case
                                    you won’t end up being a homeless entrepreneur :)</p>


                                <h4><strong>>My MVP is ready. What should I do next?</strong></h4>
                                <p>We firmly believe that the MVP development path is like “Get started with something very quick and simple → test → improve → repeat”<br>

                                    You’re likely to know that MVP development is an ongoing process of improving, right? It means that once you’ve got your MVP designed, developed
                                    and tested, you’re not done - in businesses, it’s hardly possible to ever become ‘done’. So, share your ‘done’ MVP with the market and ask for opinions
                                    - because the only way to arrive at the ‘Truly Viable Product’ stage is when all the tweaks are feedback-based (not imagination-based).</p>


                                <h4><strong>>What is needed from me to get started with MVP development?</strong></h4>
                                <p>No fancy documentation or white papers needed. It’s good if you have such, but to initiate the process a simple interview is enough. We’ll ask the questions about your idea and document it in a proper way.<br>
                                    Go write to us at info@weabers.com to schedule a call.</p>

                                <h4><strong>>Will you sign an NDA?</strong></h4>
                                <p>Sure thing.  We value your privacy.</p>

                                <h4><strong>>Do you provide marketing service?</strong></h4>
                                <p>Our strength areas are UI/UX, development, QA and management. Not marketing. Bringing you ‘average’ results isn’t what we strive for, so you’d better find true marketing experts for that purpose.</p>
                                    <div class="post-tags p-relative">
                                        <a class="fz-16" href="#">
                                            <span class="post_tag post_tag">Recent MVP questions</span>
                                        </a>
                                        <a class="fz-16" href="#">
                                            <span class="post_tag post_tag">Product Design</span>
                                        </a>
                                    </div>

                                    <div class="pagination-post d-flex border-top border-bottom">
                                        <div
                                            class="pagination-item heading-color text-uppercase border-right border-left w-100">
                                            <a href="/our-process" class="effect-ajax">Learn more about our process</a>
                                        </div>

                                        <div class="icon  heading-color">
                                            <a href="/" class="effect-ajax">
                                                <i class="fas fa-th-large"></i>
                                            </a>
                                        </div>

                                        <div
                                            class="pagination-item heading-color text-right text-uppercase border-right border-left w-100">
                                            <a href="/portfolio" class="effect-ajax">Our Works</a>
                                        </div>
                                    </div>
                                </div>
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