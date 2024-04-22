@php

    $title = 'Cartografía';

    /*HERO SECTION*/
    $color = 'light'; // 'dark' || 'light'
    $text_move = ' Cartografia · Cartografia ·';
    $img_hero = '/assets/drone/2cartografia.webp';
    $description = 'Ofrecemos servicios de cartografía en 2D y 3D para empresas que
                    buscan una representación precisa y detallada del terreno. 
                    Somos expertos en tecnología avanzada para crear mapas digitales 
                    que satisfagan las necesidades de navegación y planificación urbana.';
    /*END HERO SECTION*/

    /*CONTENT SECTION*/
    $content_color = 'light'; // 'dark' || 'light'
    $content_data_bgcolor = $content_color == 'light' ? '#fff' : '#000'; // 'dark' || 'light'
    /*CONTENT SECTION*/
@endphp

@extends('layouts.articulo', ['title' => $title, 'img_hero' => $img_hero, 'text_move' => $text_move, 'description' => $description, 'color' => $color, 'faq' => $faq])

@section('content')
    <!-- Row -->
    <div class="content-row row_padding_top row_padding_bottom {{ $content_color }}-section change-header-color"
        data-bgcolor="{{ $content_data_bgcolor }}">

        <div class="one_fourth"></div>

        <div class="two_fourth">
            <h3 class="has-mask-fill">¡Explora un universo de datos geoespaciales sin limites!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Destacamos</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Precisión y detalle: Destacamos por ofrecer mapas tanto en 2D como
                en 3D que brindan una representación precisa y detallada del terreno, permitiendo a nuestros clientes tomar
                decisiones informadas con confianza.<br><br>Versatilidad y adaptabilidad: Nuestros servicios de cartografía 
                se adaptan a una variedad de necesidades y sectores, desde la planificación urbana hasta la gestión de
                recursos naturales, proporcionando soluciones personalizadas que se ajustan a las demandas específicas 
                de cada proyecto.<br><br>Innovación tecnológica: Nos mantenemos a la vanguardia de las últimas tecnologías 
                en cartografía, empleando herramientas avanzadas como modelos digitales de elevación y software de visualización 
                3D, lo que nos permite ofrecer a nuestros clientes resultados de alta calidad y mayor eficiencia en la 
                interpretación de datos geoespaciales.</p>
        </div>

        <div class="one_fourth last"></div>

    </div>
    <!--/Row -->
@endsection

@section('adds')
    <div class="content-row full dark-section" data-bgcolor="#000">
        <figure class="has-parallax has-parallax-content" data-delay="100">
            <img src="https://www.esri.com/content/dam/esrisites/en-us/arcgis/capabilities/capabilities-redesign-2022/imagery-remote-sensing/assets/drone-mapping-banner.jpg" alt="Image Title">
            <div class="parallax-image-content content-max-width text-align-center">
                <div class="outer">
                    <div class="inner">
                    </div>
                </div>
            </div>
        </figure>
    </div> 
@endsection
