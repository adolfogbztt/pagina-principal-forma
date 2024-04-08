@php

    $title = 'Inducción';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Inducción · Inducción ·';
    $img_hero = '/assets/video-corporativo/induccion.jpeg';
    $description = 'Llevamos la termografía a nuevas alturas con el uso de drones termografícos. Nuestra tecnología utiliza cámaras termográficas
                    montadas en drones para capturar imagenes térmicas desde elevadas alturas';
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
            <h2 class="has-mask-fill">¡Descubre lo invisible con la perspectiva aérea!</h2>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Destacamos</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Perspectiva Aérea en Agricultura: Nuestros drones termográficos
                son esenciales para la agricultura. Detectamos problemas de salud de las plantas, la distribución de 
                riego y otros factores clave para la gestión de cultivos.<br><br>Inspecciones Industriales y de 
                Infraestructuras: Realizamos inspecciones termográficas en entornos industriales y de infraestructuras, 
                anticipando problemas antes de que se conviertan en costosas averías.<br><br>Mantenimiento Predictivo: 
                Ayudamos a mantener equipos y sistemas en óptimas condiciones mediante el monitoreo termográfico 
                regular.<br><br>Perspectiva Única: Las imágenes térmicas aéreas revelan detalles que podrían pasar 
                desapercibidos desde el nivel del suelo, mejorando la toma de decisiones informadas.</p>
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
