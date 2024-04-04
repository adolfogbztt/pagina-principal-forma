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
    <link href="/assets/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>


<body class="hidden hidden-ball smooth-scroll" data-primary-color="#ff0000">


    <main>
        <x-preloader />

        <div class="cd-index cd-main-content">

            <!-- Page Content -->
            <div id="page-content" class="light-content" data-bgcolor="#171717">

                <!-- Header -->

                <x-header />
                <!--/Header -->


                <!-- Content Scroll -->
                <div id="content-scroll">


                    <!-- Main -->
                    <div id="main">

                        <!-- Hero Section -->
                        <div id="hero" class="has-image">
                            <div id="hero-styles">
                                <div id="hero-caption" class="content-max-width marquee-title">
                                    <div class="inner">
                                        <div class="hero-arrow"><i class="arrow-icon"></i></div>
                                        <div class="hero-subtitle"><span>Forma</span><span>Producciones
                                                Audiovisuales</span></div>
                                        <div class="hero-title-wrapper">
                                            <div class="hero-title"><span>The</span><span>Beautiful</span><span>Ladies
                                                    -</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="hero-footer">
                                    <div class="hero-footer-right">
                                        <div class="button-wrap right scroll-down">
                                            <div class="icon-wrap parallax-wrap">
                                                <div class="button-icon parallax-element">
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                            <div class="button-text sticky right"><span
                                                    data-hover="Scroll to navigate">Scroll to navigate</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="hero-description" class="content-max-width">
                                    <div class="inner">

                                        <div class="hero-text">{{ $description }}</div>

                                        <div id="share" class="page-action-content" data-text="Share Project:">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="hero-image-wrapper">
                            <div id="hero-background-layer" class="parallax-scroll-image">
                                <div id="hero-bg-image" class="grayscale60"
                                    style="background-image:url({{ $img_hero }})"></div>
                            </div>
                        </div>
                        <!--/Hero Section -->


                        <!-- Main Content -->
                        <div id="main-content">
                            <div id="main-page-content">


                                <!-- Row -->
                                @yield('content')
                                <!--/Row -->


                                <!-- Row -->
                                @yield('adds')
                                <!--/Row -->

                            </div>
                            <!--/Main Page Content -->

                        </div>
                        <!--/Main Content -->
                    </div>
                    <!--/Main -->


                    <!-- Footer -->
                    <x-footer />
                    <!--/Footer -->


                </div>
                <!--/Content Scroll -->

                <div id="app"></div>

            </div>
            <!--/Page Content -->

        </div>
    </main>





    <div class="cd-cover-layer"></div>
    {{-- <div id="magic-cursor">
        <div id="ball">
            <div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
            <div id="ball-loader"></div>
        </div>
    </div> --}}
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
