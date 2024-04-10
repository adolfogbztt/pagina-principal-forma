@php

    $title = 'Corporativo';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Corporativo · Corporativo ·';
    $img_hero = '/assets/drone/corporativo.jpeg';
    $description = 'Captura momentos inolvidables con tomas aéreas en calidad 4K y Full HD. Nuestros 
                    pilotos expertos están preparados para elevar tus eventos, cubriendo una amplia gama de ocasiones 
                    empresariales.';
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
            <h3 class="has-mask-fill">¡Elevando tus momentos especiales!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Destacamos</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones, transformamos tus momentos 
                especiales, como bodas, cumpleaños, aniversarios, fiestas familiares y bautizos, en 
                recuerdos únicos. Nuestros drones capturan la belleza de cada ocasión desde las alturas, 
                con tomas aéreas en calidad 4K y Full HD. Permítenos elevar tus eventos personales y crear 
                recuerdos que perdurarán por siempre.</p>
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
