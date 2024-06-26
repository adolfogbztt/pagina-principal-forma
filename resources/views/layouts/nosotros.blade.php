<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns#">

<head>
    <meta http-equiv="Cache-Control" content="max-age: 180, no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>Nosotros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="Forma Producciones Audiovisuales, empresas, eventos corporativos, sesiones fotográficas, photobooks, anuarios, servicios de video, servicios de dron, soluciones audiovisuales, asesoramiento, calidad, experiencia, confianza, profesionalismo">
    <meta name="author" content="Adolfo Gabazutt" />
    <meta charset="UTF-8" />

    <link rel="alternate" hreflang="es" href="{{ $_SERVER['APP_URL'] }}/">
    <link rel="canonical" href="{{ url()->current() }}">


    <meta property="og:locale" content="es">
    <meta property="og:title"
        content='{{ $title }} | formaproducciones.com Producciones Audiovisuales Soluciones Colegios'>
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="394125557286858">
    <meta property="og:description" content='{{ $description }}'>
    <meta property="og:url" content="{{ $_SERVER['APP_URL'] }}">
    <meta property="og:site_name" content="{{ $_SERVER['APP_URL'] }}">

    <meta property="og:image" content="{{ $_SERVER['APP_CDN'] }}/assets/logo-solo.png">
    <meta property="og:image:secure_url" content="{{ $_SERVER['APP_CDN'] }}/assets/logo-solo.png">

    <meta property="og:image:width" content="499">
    <meta property="og:image:height" content="333">
    <meta property="og:image:alt" content=''>
    <meta property="og:image:type" content="image/jpeg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content='{{ $title }} | formaproducciones.com Producciones Audiovisuales Soluciones Colegios'>
    <meta name="twitter:description" content='{{ $description }}'>
    <meta name="twitter:site" content="@formaimagen">
    <meta name="twitter:creator" content="@formaimagen">
    <meta name="twitter:image" content="{{ $_SERVER['APP_CDN'] }}/assets/logo-solo.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSRF Token -->

    <link rel="icon" href="{{ $_SERVER['APP_CDN'] }}/assets/icon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ $_SERVER['APP_CDN'] }}/assets/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ $_SERVER['APP_CDN'] }}/assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ $_SERVER['APP_CDN'] }}/assets/icon/favicon-16x16.png">
    <link rel="manifest" href="{{ $_SERVER['APP_URL'] }}/assets/icon/site.webmanifest">
    <link rel="mask-icon" href="{{ $_SERVER['APP_CDN'] }}/assets/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2563eb">
    <meta name="theme-color" content="#2563eb">

    <link rel="stylesheet" href="{{ $_SERVER['APP_CDN'] }}/css/style.css" />


    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">

    <link rel="icon" type="image/ico" href="{{ $_SERVER['APP_CDN'] }}/assets/icon/favicon.ico" />

    <link href="{{ $_SERVER['APP_CDN'] }}/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css"
        integrity="sha512-Hp+WwK4QdKZk9/W0ViDvLunYjFrGJmNDt6sCflZNkjgvNq9mY+0tMbd6tWMiAlcf1OQyqL4gn2rYp7UsfssZPA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ $_SERVER['APP_CDN'] }}/assets/style.css" rel="stylesheet" />

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



    <script src="{{ $_SERVER['APP_CDN'] }}/js/jquery.min.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/gsap.min.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/ScrollTrigger.min.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/ScrollToPlugin.min.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/Draggable.min.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/EasePack.min.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/ScrollMagic.min.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/animation.gsap.min.js"></script>
    <script src='{{ $_SERVER['APP_CDN'] }}/js/three.min.js'></script>
    <script src='{{ $_SERVER['APP_CDN'] }}/js/imagesloaded.pkgd.min.js'></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/clapatwebgl.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/plugins.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/common.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/contact.js"></script>
    <script src="{{ $_SERVER['APP_CDN'] }}/js/scripts.js"></script>




</body>

</html>
