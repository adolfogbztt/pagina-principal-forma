@php

    $title = 'Fotografía';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Fotografía · Fotografía ·';
    $img_hero = '/assets/fotografia/1eventos.webp';
    $description = 'Ofrecemos servicios de fotografía profesional, capturando momentos y productos con calidad 
                    y creatividad excepcionales para satisfacer las necesidades de nuestros clientes.';
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
            <h3 class="has-mask-fill">¡Capturamos la esencia en cada imagen!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Composición y encuadre:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Dominar la composición y el encuadre es fundamental 
                para crear imágenes atractivas y efectivas. Esto implica considerar la disposición de 
                elementos dentro del encuadre, así como la elección de ángulos y perspectivas que resalten 
                los sujetos de manera favorable.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Iluminación:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">La iluminación adecuada puede transformar por 
                completo una fotografía. Ya sea luz natural o artificial, comprender cómo manipular 
                la luz para resaltar los sujetos y crear la atmósfera deseada es esencial para obtener 
                resultados profesionales.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Dirección y conexión con el sujeto:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">El éxito de una sesión fotográfica depende en gran 
                medida de la habilidad del fotógrafo para dirigir y conectar con el sujeto. Esto implica 
                establecer una relación de confianza, comunicar claramente las instrucciones y capturar 
                la esencia del individuo o la marca que se está fotografiando.</p>
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
