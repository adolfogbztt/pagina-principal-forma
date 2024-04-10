@php

    $title = 'Cafetera Automática';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Cafetera Automática · Cafetera Automática ·';
    $img_hero = '/assets/video-corporativo/conferencias.jpeg';
    $description = 'Nos complace ofrecer una experiencia exclusiva como 
                    parte de nuestro servicio de catering corporativo, especialmente diseñado para 
                    nuestros clientes más valiosos. Presentamos con orgullo la cafetera automática JURA. 
                    Este elegante y sofisticado dispositivo es un auténtico símbolo de elegancia y 
                    disfrute, diseñado para hacer de cada experiencia un momento memorable.';
    /*END HERO SECTION*/

    /*CONTENT SECTION*/
    $content_color = 'light'; // 'dark' || 'light'
    $content_data_bgcolor = $content_color == 'light' ? '#fff' : '#000'; // 'dark' || 'light'
    /*CONTENT SECTION*/
@endphp

@extends('layouts.articulo', ['title' => $title, 'img_hero' => $img_hero, 'text_move' => $text_move, 'description' => $description, 'color' => $color])

@section('content')
    <!-- Row -->
    <div class="content-row row_padding_top row_padding_bottom {{ $content_color }}-section change-header-color"
        data-bgcolor="{{ $content_data_bgcolor }}">

        <div class="one_fourth"></div>

        <div class="two_fourth">
            <h3 class="has-mask-fill">¡Un deleite exclusivo para nuestros clientes de incorporaciones!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">CARACTERÍSTICAS DESTACADAS</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Experiencia excepcional: La cafetera automática JURA ofrece un 
                impresionante espectro de especialidades de café con tan solo pulsar un botón. Desde Latte Macchiato 
                hasta Cappuccino, cada taza es un placer instantáneo.<br><br>Máximo aroma y sabor: Gracias 
                al Proceso de Extracción por Pulsos (P.E.P.®), cada especialidad de café se prepara de 
                manera óptima, garantizando el máximo aroma y un sabor inigualable en cada 
                sorbo.<br><br>Elegancia y sofisticación: La cafetera JURA es un testimonio de lujo y distinción. Su 
                diseño elegante y acabados de alta calidad aportan un toque exclusivo a cada momento de 
                disfrute.<br><br>Atención personalizada: Nuestro equipo se encargará del mantenimiento y suministro 
                de la cafetera, asegurando una experiencia perfecta y sin preocupaciones para nuestros clientes 
                exclusivos.</p>
        </div>

        <div class="one_fourth last"></div>

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
