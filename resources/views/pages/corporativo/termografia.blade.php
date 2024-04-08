@php

    $title = 'Termografía';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Termografía · Termografía ·';
    $img_hero = '/assets/drone/1termonometria.jpeg';
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
            <p class="has-animation" data-delay="100">Nuestro servicio de termografía con drones utiliza 
                tecnología avanzada para capturar imágenes térmicas de alta resolución desde el aire. 
                Detectamos y analizamos variaciones de temperatura en estructuras, equipos y terrenos, 
                proporcionando datos críticos para la identificación temprana de problemas, como fugas de 
                energía, puntos calientes o fallas en equipos, permitiendo así una gestión proactiva y 
                eficiente de activos y recursos.<br><br>Detección temprana de anomalías: La termografía 
                permite identificar variaciones de temperatura que podrían indicar problemas como fugas de 
                energía, humedad o fallos en equipos, lo que permite abordar los problemas antes de que se 
                conviertan en costosas averías.<br><br>Mejora de la eficiencia energética: Al identificar 
                áreas de pérdida de calor o refrigeración, la termografía ayuda a optimizar el rendimiento 
                energético de edificios, instalaciones industriales y sistemas de climatización, lo que puede 
                resultar en ahorros significativos de costos energéticos.</p>
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
