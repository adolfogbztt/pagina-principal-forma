@php

    $title = 'Fotografía Corporativa';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Fotografía Corporativa · Fotografía Corporativa ·';
    $img_hero = '/assets/video-corporativo/spot-publicitario.webp';
    $description = 'Nuestro servicio de Fotografía Digital y Artística se especializa en capturar imágenes profesionales 
        y creativas. Utilizando equipos de última generación y técnicas de iluminación avanzadas, 
        garantizamos la más alta calidad en cada foto. Nuestro enfoque artístico captura momentos 
        únicos y transmite emociones. Trabajamos contigo para ofrecerte soluciones personalizadas 
        que se alineen con tu estilo y visión. Destaca con nuestras fotografías de impacto.';
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
            <h3 class="has-mask-fill">¡Deteniendo el tiempo en imágenes perfectas!
            </h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Fotografía Corporativa</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Fotografía de Producto</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Fotografía Publicitaria</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">texto o video</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Fotografía de Eventos</h6>
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
