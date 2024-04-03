<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Humpton - Creative Portfolio Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Download the best Creative Portfolio HTML Template in 2022" />
    <meta name="author" content="ClaPat Studio">
    <meta charset="UTF-8" />
    <link rel="icon" type="image/ico" href="favicon.ico" />
    <link href="https://www.clapat.com/templates/humpton/style.css" rel="stylesheet" />
    <link href="https://www.clapat.com/templates/humpton/css/all.min.css" rel="stylesheet" />
</head>


<body class="hidden hidden-ball smooth-scroll" data-primary-color="#ff0000">

    <main>
        <x-preloader />

        <div class="cd-index cd-main-content">

            <!-- Page Content -->
            <div id="page-content" class="light-content" data-bgcolor="#171717">

                <x-header />

                <!-- Content Scroll -->
                <div id="content-scroll">

                    <!-- Main -->
                    <div id="main">

                        <!-- Hero Section -->
                        @yield('hero')
                        <!--/Hero Section -->


                        <!-- Main Content -->
                        <div id="main-content">
                            <!-- Main Page Content -->
                            <div id="main-page-content" class="content-max-width">

                                @yield('content')

                                <!-- Row -->
                                <div class="content-row full dark-section text-align-center" data-bgcolor="#171717">


                                    <div class="slowed-pin">
                                        <div class="slowed-text">
                                            <h5>Recent Engagements</h5>
                                            <h1 class=" big-title">We've shipped hundreds of successful projects and
                                                features for our clients.</h1>
                                            <hr>
                                            <h5>The driving force of all speeches, we believe that <br class="destroy">
                                                creation should be the point around.</h5>
                                        </div>

                                        <div class="slowed-images">
                                            <div class="slowed-image-left">
                                                <img src="images/studio01.jpg" class="link" alt="Image">
                                            </div>
                                            <div class="slowed-image-right">
                                                <img src="images/studio02.jpg" class="link" alt="Image">
                                            </div>
                                            <div class="slowed-image-left">
                                                <img src="images/studio03.jpg" class="link" alt="Image">
                                            </div>
                                            <div class="slowed-image-right">
                                                <img src="images/studio04.jpg" class="link" alt="Image">
                                            </div>
                                            <div class="slowed-image-left">
                                                <img src="images/studio01.jpg" class="link" alt="Image">
                                            </div>
                                            <div class="slowed-image-right">
                                                <img src="images/studio02.jpg" class="link" alt="Image">
                                            </div>
                                            <div class="slowed-image-left">
                                                <img src="images/studio03.jpg" class="link" alt="Image">
                                            </div>
                                            <div class="slowed-image-right">
                                                <img src="images/studio04.jpg" class="link" alt="Image">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <!--/Row -->


                                <!-- Row -->
                                <div class="content-row full light-section" data-bgcolor="#fff">

                                    <!-- Row -->
                                    <div class="content-row row_padding_top light-section change-header-color"
                                        data-bgcolor="#fff">

                                        <hr>

                                        <div class="one_half">
                                            <h1 class="has-mask-fill no-margins">News</h1>
                                            <h1 class="has-mask-fill">Featured</h1>

                                            <hr>

                                            <p class="has-animation" data-delay="0">There are many variations of
                                                passages of Lorem Ipsum available, but the majority have suffered
                                                alteration in some form by injected humour.</p>

                                        </div>

                                        <div class="one_half last"></div>

                                    </div>
                                    <!--/Row -->


                                    <!-- Row -->
                                    <div class="content-row light-section full change-header-color"
                                        data-bgcolor="#fff">



                                        <div class="panels news-panel">

                                            <div class="panels-container">

                                                <div class="panel" data-color="#000" data-firstline="Read"
                                                    data-secondline="Story">
                                                    <div class="panel-content-wrapper">
                                                        <div class="panel-image">
                                                            <a class="ajax-link" href="index.html"
                                                                data-type="page-transition"><img
                                                                    src="images/news01.jpg"></a>
                                                        </div>
                                                        <div class="panel-content">
                                                            <div class="entry-meta entry-categories">
                                                                <ul class="post-categories">
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Insights">Insights</span></a>
                                                                    </li>
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Nature">Nature</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-panel-title"><span>We are thrilled to be
                                                                    nominated for the Agency of the Year</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel" data-color="#000" data-firstline="Read"
                                                    data-secondline="Story">
                                                    <div class="panel-content-wrapper">
                                                        <div class="panel-image">
                                                            <a class="ajax-link" href="index.html"
                                                                data-type="page-transition"><img
                                                                    src="images/news02.jpg"></a>
                                                        </div>
                                                        <div class="panel-content">
                                                            <div class="entry-meta entry-categories">
                                                                <ul class="post-categories">
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Insights">Insights</span></a>
                                                                    </li>
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Work">Work</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-panel-title"><span>How we approached our
                                                                    own website redesign</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel" data-color="#000" data-firstline="Read"
                                                    data-secondline="Story">
                                                    <div class="panel-content-wrapper">
                                                        <div class="panel-image">
                                                            <a class="ajax-link" href="index.html"
                                                                data-type="page-transition"><img
                                                                    src="images/news03.jpg"></a>
                                                        </div>
                                                        <div class="panel-content">
                                                            <div class="entry-meta entry-categories">
                                                                <ul class="post-categories">
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Insights">Insights</span></a>
                                                                    </li>
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Work">Work</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-panel-title"><span>We are thrilled to be
                                                                    nominated for the Agency of the Year</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel change-header" data-color="#000"
                                                    data-firstline="Read" data-secondline="Story">
                                                    <div class="panel-content-wrapper">
                                                        <div class="panel-image">
                                                            <a class="ajax-link" href="index.html"
                                                                data-type="page-transition"><img
                                                                    src="images/news04.jpg"></a>
                                                        </div>
                                                        <div class="panel-content">
                                                            <div class="entry-meta entry-categories">
                                                                <ul class="post-categories">
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Insights">Insights</span></a>
                                                                    </li>
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Work">Work</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-panel-title"><span>How we approached our
                                                                    own website redesign</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel" data-color="#000" data-firstline="Read"
                                                    data-secondline="Story">
                                                    <div class="panel-content-wrapper">
                                                        <div class="panel-image">
                                                            <a class="ajax-link" href="index.html"
                                                                data-type="page-transition"><img
                                                                    src="images/news05.jpg"></a>
                                                        </div>
                                                        <div class="panel-content">
                                                            <div class="entry-meta entry-categories">
                                                                <ul class="post-categories">
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Insights">Insights</span></a>
                                                                    </li>
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Work">Work</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-panel-title"><span>We are thrilled to be
                                                                    nominated for the Agency of the Year</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel" data-color="#000" data-firstline="Read"
                                                    data-secondline="Story">
                                                    <div class="panel-content-wrapper">
                                                        <div class="panel-image">
                                                            <a class="ajax-link" href="index.html"
                                                                data-type="page-transition"><img
                                                                    src="images/news06.jpg"></a>
                                                        </div>
                                                        <div class="panel-content">
                                                            <div class="entry-meta entry-categories">
                                                                <ul class="post-categories">
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Insights">Insights</span></a>
                                                                    </li>
                                                                    <li class="link"><a href="#"><span
                                                                                data-hover="Work">Work</span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="news-panel-title"><span>How we approached our
                                                                    own website redesign</span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <!--/Row -->


                                    <!-- Row -->
                                    <div class="content-row row_padding_bottom light-section change-header-color"
                                        data-bgcolor="#fff">

                                        <hr>

                                        <div class="one_half">
                                            <h3 class="has-mask-fill no-margins">Read</h3>
                                            <h3 class="has-mask-fill">All Stories</h3>

                                            <hr>

                                            <div class="button-wrap right button-link large-btn has-animation">
                                                <div class="icon-wrap parallax-wrap">
                                                    <div class="button-icon parallax-element">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </div>
                                                </div>
                                                <a class="ajax-link" href="portfolio-grid.html"
                                                    data-type="page-transition">
                                                    <div class="button-text sticky right"><span
                                                            data-hover="Go To Blog">Go To Blog</span></div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="one_half last"></div>

                                    </div>
                                    <!--/Row -->

                                </div>
                                <!--/Row -->


                            </div>
                            <!--/Main Page Content -->


                            <!-- Page Navigation -->
                            <x-page-navigation />
                            <!--/Page Navigation -->


                        </div>
                        <!--/Main Content -->

                    </div>
                    <!--/Main -->

                    <!-- Footer -->
                    <x-footer />
                    <!--/Footer -->


                </div>
                <!--/Content Scroll -->


                <div class="thumb-wrapper">
                    <div class="thumb-container">
                        <div class="thumb-page" data-src="images/01hero.jpg"></div>
                        <div class="thumb-page" data-src="images/02hero.jpg"></div>
                        <div class="thumb-page" data-src="images/03hero.jpg"></div>
                        <div class="thumb-page" data-src="images/04hero.jpg"></div>
                        <div class="thumb-page" data-src="images/05hero.jpg"></div>
                        <div class="thumb-page" data-src="images/06hero.jpg"></div>
                    </div>
                </div>

                <div id="app"></div>


            </div>
            <!--/Page Content -->

        </div>
    </main>




    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
            <div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
            <div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image">
        <div class="hero-translate"></div>
    </div>
    <div id="rotate-device"></div>



    <script src="https://www.clapat.com/templates/humpton/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js'></script>
    <script src="https://www.clapat.com/templates/humpton/js/clapatwebgl.js"></script>
    <script src="https://www.clapat.com/templates/humpton/js/plugins.js"></script>
    <script src="https://www.clapat.com/templates/humpton/js/common.js"></script>
    <script src="https://www.clapat.com/templates/humpton/js/contact.js"></script>
    <script src="https://www.clapat.com/templates/humpton/js/scripts.js"></script>



</body>

</html>
