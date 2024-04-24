@php

    $title = 'Video Corporativo';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Video Corporativo · Video Corporativo ·';
    $img_hero = '/assets/video-corporativo/conferencias.webp';
    $description =
        'Nuestro Servicio de Video Corporativo te ayuda a transmitir la esencia de tu empresa de manera 
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
@endphp

@extends('layouts.articulo', ['title' => $title, 'img_hero' => $img_hero, 'text_move' => $text_move, 'description' => $description, 'color' => $color])

@section('content')
    <!-- Row -->
    <div class="content-row row_padding_top row_padding_bottom {{ $content_color }}-section change-header-color"
        data-bgcolor="{{ $content_data_bgcolor }}">

        <div class="one_fourth"></div>

        <div class="two_fourth">
            <h3 class="has-mask-fill">¡Impulsa tu éxito con videos de impacto!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Sports publicitarios</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Video institucional</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Video de inducción </h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Grabación de eventos</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Documentales</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Video conferencia</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
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
