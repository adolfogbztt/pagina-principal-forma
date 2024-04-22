@php

    $title = 'Tour 360';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Tour 360 · Tour 360 ·';
    $img_hero = '/assets/video-corporativo/conferencias.webp';
    $description = 'Sumérgete en experiencias virtuales sin igual con nuestros tours 360 
                    y tours de realidad virtual (VR). Desde explorar destinos turísticos 
                    hasta recorridos inmersivos en propiedades inmobiliarias, ofrecemos 
                    una forma innovadora de experimentar lugares desde cualquier parte del 
                    mundo, brindando una perspectiva única y envolvente para nuestros usuarios.';
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
            <h3 class="has-mask-fill">¡Viaja a través del tiempo y el espacio sin moverte!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Tour 360º</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Sumérgete en una experiencia virtual única con 
                nuestro servicio de Tour 360º. Utilizando tecnología de vanguardia, capturamos imágenes 
                panorámicas de alta resolución con equipos profesionales como Matterport, Insta360º y 
                Drone 360º. Con estos equipos, podemos capturar espacios y dimensiones en medidas reales, 
                brindándote una representación precisa y detallada.<br><br>Además, contamos con programas 
                y hosting de alta tecnología que nos permiten entregar un producto digital de Tour 360º 
                con un óptimo funcionamiento. Explora lugares de forma virtual, disfrutando de una vista 
                panorámica de 360 grados y una experiencia inmersiva. Sumérgete en una nueva forma de 
                explorar y disfruta de una experiencia visual envolvente con nuestra tecnología de última 
                generación.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Tours VR</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation">¡EXPLORA EL MUNDO VIRTUAL!</p>
            <p class="has-animation" data-delay="100">Sumérgete en una experiencia virtual única con 
                nuestro servicio de Tour 360º. Utilizando tecnología de vanguardia, capturamos imágenes 
                panorámicas de alta resolución con equipos profesionales como Matterport, Insta360º y 
                Drone 360º. Con estos equipos, podemos capturar espacios y dimensiones en medidas reales, 
                brindándote una representación precisa y detallada.<br><br>Además, contamos con programas 
                y hosting de alta tecnología que nos permiten entregar un producto digital de Tour 360º 
                con un óptimo funcionamiento. Explora lugares de forma virtual, disfrutando de una vista 
                panorámica de 360 grados y una experiencia inmersiva. Sumérgete en una nueva forma de 
                explorar y disfruta de una experiencia visual envolvente con nuestra tecnología de última 
                generación.</p>
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
