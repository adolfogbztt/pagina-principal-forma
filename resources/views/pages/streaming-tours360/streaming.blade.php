@php

    $title = 'Streaming';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Streaming · Streaming ·';
    $img_hero = '/assets/video-corporativo/conferencias.jpeg';
    $description = 'Nuestro servicio de Streaming se distingue por contar con cámaras 
                    robóticas de transmisión, las cuales brindan una experiencia visual 
                    dinámica y envolvente.';
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
            <h3 class="has-mask-fill">¡Conectando personas, transformando experiencias!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Destacamos</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Presentaciones y Lanzamientos: Impacta
                a tu audiencia global con lanzamientos de productos, servicios o iniciativas.
                <br><br>Conferencias y Seminarios: Comparte conocimientos y experiencias con 
                un público amplio, consolidando tu posición como líder en la 
                industria.<br><br>Eventos de Recursos Humanos: Manténa tu equipo conectado y 
                comprometido, sin importar la ubicación, mediante transmisiones en vivo de 
                reuniones y capacitaciones.<br><br>Eventos Virtuales: Crea eventos virtuales
                o híbridos que lleguen a una audiencia diversa y numerosa.<br><br>Eventos de 
                Marketing: Potencia estrategias de marketing con campañas en vivo, aumentando 
                el impacto y la visibilidad.<br><br>Comunicación Interna: Conecta a nivel 
                interno, manteniendo a los empleados informados y comprometidos con la empresa.</p>
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
