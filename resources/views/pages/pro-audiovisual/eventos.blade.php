@php

    $title = 'Eventos';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Eventos · Eventos ·';
    $img_hero = '/assets/video-corporativo/eventos.webp';
    $description = 'En Forma Producciones Audiovisuales, nos especializamos en la captura de estos 
                    momentos memorables a través de nuestros servicios de producción y posproducción 
                    de videos para eventos. Desde la cobertura completa del evento hasta la edición final 
                    del video, nuestro equipo está comprometido a crear un recuerdo duradero que refleje 
                    la esencia y la emoción del día.';
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
            <h3 class="has-mask-fill">¡Servicios de video para eventos que dejan una impresión duradera!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Introducción:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los eventos son momentos especiales que merecen ser recordados y compartidos. Ya sea una boda emotiva, una conferencia inspiradora o un lanzamiento de producto emocionante, cada evento tiene su propia historia que contar. En Forma Producciones Audiovisuales, nos especializamos en la captura de estos momentos memorables a través de nuestros servicios de producción y posproducción de videos para eventos. Desde la cobertura completa del evento hasta la edición final del video, nuestro equipo está comprometido a crear un recuerdo duradero que refleje la esencia y la emoción del día.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Capturando la Esencia del Evento:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Nuestro objetivo es capturar la esencia única de cada evento que filmamos. Desde la emoción de los discursos hasta la alegría de la celebración, nos esforzamos por capturar cada momento significativo con cuidado y atención al detalle. Utilizando equipos de alta calidad y técnicas cinematográficas innovadoras, nuestro equipo trabaja discretamente para documentar el evento de manera auténtica y sin interrupciones.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Creando Videos que Resonan con la Audiencia:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Nuestro enfoque en la producción de videos para eventos es crear contenido que resuene con la audiencia y capture su atención desde el primer momento. Utilizando una combinación de imágenes impresionantes, música evocadora y narrativa emocional, creamos videos que no solo informan, sino también emocionan e inspiran a quienes los ven. Ya sea que estés planeando un evento corporativo, una celebración familiar o una ceremonia especial, nuestro equipo está aquí para ayudarte a crear un video que destaque y celebre los momentos más importantes del día.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Recuerdos que Perduran para Siempre:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los videos de eventos son mucho más que simples grabaciones; son recuerdos tangibles que perduran para siempre. Ya sea que estés reviviendo el día de tu boda años después o compartiendo los momentos especiales de un evento corporativo con colegas y clientes, un video bien producido puede transportarte de vuelta al momento y hacer que sientas la emoción y la alegría una y otra vez.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Conclusión:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, entendemos la importancia de los eventos y la necesidad de capturar y preservar los momentos más significativos de estos momentos especiales. Permítenos ser tu socio en el viaje hacia la creación de un video que celebre y honre la esencia única de tu evento. Juntos, crearemos un recuerdo duradero que te permitirá revivir y compartir los momentos más preciosos una y otra vez.</p>
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
