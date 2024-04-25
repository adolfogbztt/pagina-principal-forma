@php

    $title = 'Fotogrametría';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Fotogrametría · Fotogrametría ·';
    $img_hero = '/assets/drone/1fotogrametria.webp';
    $description = 'Nuestro servicio de fotogrametría utiliza tecnología de vanguardia para capturar datos 
    precisos del mundo real y convertirlos en modelos 3D detallados. Ya sea para cartografía, inspección 
    de sitios o creación de contenido visual, ofrecemos soluciones precisas y personalizadas que 
    satisfacen las necesidades de nuestros clientes con resultados de alta calidad.';
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
            <h3 class="has-mask-fill">¡Datos precisos, soluciones poderosas: Fotogrametría a tu alcance!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Destacamos</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Precisión: La fotogrametría ofrece mediciones precisas y detalladas 
                del mundo real, permitiendo la generación de modelos 3D exactos y fieles a la realidad.<br><br>Versatilidad: 
                Es aplicable en una amplia gama de industrias, desde topografía y cartografía hasta inspecciones 
                industriales y recreación digital.<br><br>Eficiencia: Permite la captura rápida y eficiente de datos a través 
                de imágenes aéreas o terrestres, reduciendo los tiempos de relevamiento y aumentando la productividad.</p>
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
