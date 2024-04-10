@php

    $title = 'Conferencias';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Conferencias · Conferencias ·';
    $img_hero = '/assets/video-corporativo/conferencias.jpeg';
    $description = 'Las conferencias son mucho más que simples eventos; son oportunidades para compartir conocimientos, experiencias y perspectivas que pueden inspirar y transformar vidas. En Forma Producciones Audiovisuales, entendemos la importancia de capturar cada momento de estos encuentros significativos, 
                    desde las presentaciones magistrales hasta las interacciones entre los asistentes. ';
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
            <h3 class="has-mask-fill">¡Capturando momentos memorables!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">El Poder del video en las conferencias:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los videos son una herramienta poderosa para capturar la esencia y la emoción de las conferencias. Desde las palabras motivadoras de los oradores hasta la energía contagiosa de la audiencia, un video bien producido puede transportar a los espectadores al corazón del evento y hacer que sientan que están allí, participando en cada momento importante. Además, los videos pueden ser utilizados para llegar a una audiencia más amplia, permitiendo que las ideas compartidas en la conferencia alcancen a personas de todo el mundo.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Nuestro Enfoque en la Producción de Videos para Conferencias:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, nos comprometemos a capturar la esencia única de cada conferencia que filmamos. Desde la planificación inicial hasta la postproducción final, nuestro equipo trabaja en estrecha colaboración contigo para comprender tus objetivos y necesidades específicas, asegurándonos de que cada detalle sea cuidadosamente considerado y que el resultado final refleje la calidad y el profesionalismo del evento.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Tecnología de Vanguardia para una Calidad Impecable:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Utilizamos equipos de última generación y técnicas de producción avanzadas para garantizar que nuestros videos cumplan con los más altos estándares de calidad. Desde cámaras de alta definición hasta equipos de audio de primera calidad, cada aspecto de la producción se realiza con meticulosa atención al detalle para garantizar que el resultado final sea impecable.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Preservando Momentos Memorables para la Posteridad:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Nuestro objetivo no es solo capturar los momentos importantes de la conferencia, sino también preservarlos para las generaciones futuras. Ya sea que estés organizando una conferencia académica, un evento corporativo o una charla inspiradora, nuestros videos servirán como un testimonio duradero de las ideas y emociones compartidas en el evento, permitiendo que su impacto perdure mucho después de que las luces se apaguen y los asistentes se dispersen.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Conclusión:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, estamos comprometidos a ayudarte a preservar y compartir los momentos memorables de tus conferencias de una manera que inspire, eduque y emocione a tu audiencia. Permítenos ser tu socio en el viaje hacia la creación de videos que capturen la esencia única de tu evento y transmitan su impacto de manera auténtica y poderosa. Juntos, crearemos recuerdos que perdurarán para siempre en la mente y el corazón de quienes los experimenten.</p>
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
