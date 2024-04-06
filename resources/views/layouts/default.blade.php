<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Forma Producciones Audiovisuales</title>
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Download the best Creative Portfolio HTML Template in 2022" />
    <meta name="author" content="ClaPat Studio">
    <meta charset="UTF-8" />
    <link rel="icon" type="image/ico" href="favicon.ico" />

    <link href="https://www.clapat.com/templates/humpton/style.css" rel="stylesheet" />
    <link href="https://www.clapat.com/templates/humpton/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css"
        integrity="sha512-Hp+WwK4QdKZk9/W0ViDvLunYjFrGJmNDt6sCflZNkjgvNq9mY+0tMbd6tWMiAlcf1OQyqL4gn2rYp7UsfssZPA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="/assets/style.css" rel="stylesheet" />
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
                    @include('components.footer', ['color' => 'light'])
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
