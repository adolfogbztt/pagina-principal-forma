@php

    $title = 'Drone';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Drone · Drone ·';
    $img_hero = '/assets/video-corporativo/conferencias.webp';
    $description = 'Nuestro Servicio de Video Corporativo te ayuda a transmitir la esencia de tu empresa de manera 
        efectiva. Creamos videos profesionales y cautivadores que destacan tus productos, servicios y 
        fortalezas. Con equipos de última generación y técnicas cinematográficas, logramos resultados 
        impactantes. Desde la conceptualización hasta la edición, nos encargamos de todo el proceso para 
        garantizar videos de alta calidad que conecten con tu audiencia y te hagan destacar en el mercado. 
        Confía en nosotros para llevar la imagen de tu empresa al siguiente nivel. ';
    /*END HERO SECTION*/

    /*CONTENT SECTION*/
    $content_color = 'light'; // 'dark' || 'light'
    $content_data_bgcolor = $content_color == 'light' ? '#fff' : '#000'; // 'dark' || 'light'
    /*CONTENT SECTION*/

    $services = [
        [
            'img' => '/assets/drone/cartografia.webp',
            'title' => 'Cartografía',
            'description' => 'Descripción',
            'link' => '/blog-drone/cartografia',
        ],
        [
            'img' => '/assets/drone/termonometria.webp',
            'title' => 'Termografía',
            'description' => 'Descripción',
            'link' => '/blog-drone/termografia',
        ],
        [
            'img' => '/assets/drone/fotogrametria.webp',
            'title' => 'Fotogrametría',
            'description' => 'Descripción',
            'link' => '/blog-drone/fotogrametria',
        ],
        [
            'img' => '/assets/drone/corporativo.webp',
            'title' => 'Corporativo',
            'description' => 'Descripción',
            'link' => '/blog-drone/corporativo',
        ],
    ];
@endphp

@extends('layouts.articulo', ['title' => $title, 'img_hero' => $img_hero, 'text_move' => $text_move, 'description' => $description, 'color' => $color])

@section('content')
    <div class="content-row fadeout-element row_padding_top light-section change-header-color" data-bgcolor="#fff">

        <div class="one_half">
            <h1 class="has-mask-fill">Drone</h1>
            <p class="has-animation" data-delay="50">Nuestro servicio de drone te ofrece una experiencia
                audiovisual única y sorprendente. Con tecnología de vanguardia y pilotos expertos, somos
                especialistas en Fotogrametría y Termografía Aérea Avanzada, Cartografía 2D y 3D, Ortofotografía,
                así como en producciones cinematográficas y eventos. También ofrecemos soluciones para proyectos
                de ingeniería, energía, construcción, industriales, urbanismo, vialidad, agricultura, forestales
                y medio ambiente.
            </p>
        </div>

        <div class="one_half last">
            <video src='/assets/drone/vid-drone2.mov' className="item-image grayscale60" autoPlay muted loop></video>
        </div>

        <hr class="destroy">

    </div>
    <!--/Row -->


    <!-- Row -->
    <div class="content-row fadeout-element light-section change-header-color" data-bgcolor="#fff">

        <div class="marquee-text-wrapper">
            <h1 class="marquee-text big-title bw"> Cartografía · Termografía · Fotogrametría · Corporativo · </h1>
        </div>

    </div>
    <!--/Row -->

    <!-- Row -->
    <div class="content-row row_padding_top row_padding_bottom light-section change-header-color full" data-bgcolor="#fff">

        <div class="content-row row_padding_bottom light-section" data-bgcolor="#fff">
            <div class="pinned-section">
                <div class="scrolling-element left">
                    @foreach ($services as $k => $v)
                        <figure class="has-animation">
                            <a href="{{ $v['link'] }}" class="ajax-link" data-type="page-transition">
                                <img src="{{ $v['img'] }}" alt="{{ $v['title'] }}" class="grayscale60" />
                                {{-- <a class="ajax-link" href="{{ $item['link'] }}" data-type="page-transition"> --}}
                                <div class="overlay">
                                    <h2>{{ $v['title'] }}</h2>
                                </div>
                            </a>
                        </figure>
                        <br />
                    @endforeach
                </div>

                <div class="pinned-element right">
                    <h5 class="has-mask-fill">Servicios con drone</h5>
                    <p class="has-animation">Tenemos las soluciones para su proyecto de ingeniería,
                        energía, construcción, industriales, urbanismo, vialidad, agricultura, forestales y medio ambiente.
                        Capturamos imágenes aéreas en calidad 4K y Full HD. Garantizando tomas suaves y vibrantes.<br
                            class="destroy"> will reach the bottom</p>
                </div>
            </div>

        </div>
    </div>
    <!--/Row -->
@endsection

@section('adds')
    <div class="content-row full dark-section" data-bgcolor="#000">
        <figure class="has-parallax has-parallax-content" data-delay="100">
            <img src="https://www.clapat.com/templates/humpton/images/projects/ladies01.jpg" alt="Image Title">
            <div class="parallax-image-content content-max-width text-align-center">
                <div class="outer">
                    <div class="inner">
                    </div>
                </div>
            </div>
        </figure>
    </div>
@endsection
