@php

    $title = 'Tour 360°';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Tour 360° · Tour 360° ·';
    $img_hero = '/assets/video-corporativo/induccion.webp';
    $description =
        'Sumérgete en una experiencia virtual única con nuestro servicio de Tour 360º. Utilizando tecnología 
        de vanguardia, capturamos imágenes panorámicas de alta resolución con equipos profesionales como 
        Matterport, Insta360º y Drone 360º. Con estos equipos, podemos capturar espacios y dimensiones en 
        medidas reales, brindándote una representación precisa y detallada. Además, contamos con programas 
        y hosting de alta tecnología que nos permiten entregar un producto digital de Tour 360º con un óptimo 
        funcionamiento. Explora lugares de forma virtual, disfrutando de una vista panorámica de 360 grados 
        y una experiencia inmersiva. Sumérgete en una nueva forma de explorar y disfruta de una experiencia 
        visual envolvente con nuestra tecnología de última generación.';
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
            <h6 class="has-animation has-icon">Introducción:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los eventos de inducción marcan el comienzo de un nuevo capítulo, ya
                sea en una empresa, una institución educativa o cualquier otro ámbito. Estos eventos son cruciales para
                brindar a los nuevos miembros una comprensión clara de lo que pueden esperar y cómo pueden contribuir al
                éxito de la organización.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Orientación para un Comienzo Exitoso:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los videos de inducción son una herramienta invaluable para
                proporcionar orientación a los nuevos miembros de una organización. Desde la presentación de la misión y
                visión de la empresa hasta la descripción de las políticas y procedimientos internos, nuestros videos están
                diseñados para brindar a los participantes la información y el contexto que necesitan para comenzar con
                confianza y claridad.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Motivación para el Éxito:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Además de proporcionar información práctica, los videos de inducción
                también tienen el poder de motivar y inspirar a los nuevos miembros. Utilizando testimonios de empleados
                destacados, imágenes inspiradoras y mensajes de liderazgo, nuestros videos están diseñados para transmitir
                la cultura y los valores de la organización de una manera convincente y emocional, motivando a los
                participantes a comprometerse con su trabajo y contribuir al éxito de la empresa.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Conexión con la Cultura Organizacional:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los videos de inducción son una oportunidad única para introducir a
                los nuevos miembros en la cultura y la comunidad de la organización. Desde la presentación de los líderes
                clave hasta la destacada de los logros y valores de la empresa, nuestros videos están diseñados para crear
                una conexión emocional y personal con la organización desde el primer día, fomentando un sentido de
                pertenencia y compromiso entre los participantes.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Un Comienzo Inolvidable:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, entendemos la importancia de los
                eventos de inducción y nos comprometemos a crear videos que hagan que el primer día de los nuevos miembros
                sea memorable y significativo. Permítenos ser tu socio en el viaje hacia la creación de un video de
                inducción que informe, inspire y conecte a tus participantes desde el primer día. Juntos, crearemos un
                comienzo inolvidable que establezca el tono para el éxito futuro de la organización y de sus miembros.</p>
        </div>

        <div class="one_fourth last"></div>

    </div>
    <!--/Row -->
@endsection

@section('adds')
<div class="content-row full dark-section" data-bgcolor="#000">
    <figure class="has-parallax has-parallax-content" data-delay="100">
        <img src="/assets/pro-audiovisual/tour360/img-bajo.jpg" alt="Image Title">
        <div class="parallax-image-content content-max-width text-align-center">
            <div class="outer">
                <div class="inner">
                    <p>▼</p>
                    <a target="_blank" href="https://www.formaproducciones.com/virtual/formap/" class="boton-360">Ver Tour</a>
                </div>
            </div>
        </div>
    </figure>
</div>

@endsection
