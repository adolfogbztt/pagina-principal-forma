@php

    $title = 'Titulos y Diplomas';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Titulos y Diplomas · Titulos y Diplomas ·';
    $img_hero = '/assets/fotografia/productos.webp';
    $description = 'Ofrecemos servicios de fotografía de productos, destacando sus características 
    y cualidades de manera profesional y atractiva para impulsar su comercialización y ventas.';
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
            <h3 class="has-mask-fill">¡Destaca tus productos con imágenes que cautivan!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Planificación y preparación meticulosas:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Antes de comenzar la sesión, es crucial planificar 
                cada detalle. Define el propósito de la sesión y los objetivos específicos que deseas 
                lograr con las fotografías de los productos. Identifica los productos que serán 
                fotografiados y establece un cronograma para la sesión. Además, prepara el equipo 
                necesario, como cámaras, trípodes, luces y fondos, para asegurarte de tener todo 
                listo cuando llegue el momento de fotografiar.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Configuración del escenario y los productos:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Una vez que tengas todo preparado, es hora de 
                configurar el escenario para la sesión. Elige un espacio bien iluminado con fondos 
                limpios y simples que complementen los productos sin distraer la atención. Organiza los 
                productos de manera atractiva y asegúrate de que estén limpios y en perfectas condiciones 
                antes de comenzar a fotografiar. Además, considera la posibilidad de utilizar accesorios o 
                props que ayuden a resaltar las características únicas de los productos.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Iluminación y composición experta:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">La iluminación adecuada es esencial para obtener 
                imágenes de alta calidad. Experimenta con diferentes fuentes de luz, como la luz natural 
                y las luces artificiales, para encontrar la mejor opción para cada producto. Además, 
                presta atención a la composición de cada fotografía, asegurándote de que los productos 
                estén bien posicionados y que el encuadre sea limpio y atractivo. Considera el uso de 
                ángulos interesantes y perspectivas únicas para añadir profundidad y dimensión a tus 
                imágenes.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Captura de imágenes y revisión cuidadosa:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Una vez que todo esté configurado, comienza a 
                tomar fotografías de los productos siguiendo tus planes y objetivos establecidos. 
                Toma una variedad de imágenes desde diferentes ángulos y perspectivas para tener 
                opciones para elegir más tarde. Después de la sesión, revisa todas las imágenes 
                cuidadosamente y selecciona las mejores para su edición y postproducción. Asegúrate de 
                que las imágenes finales cumplan con los estándares de calidad y estén listas para su 
                entrega o uso según lo planeado.</p>
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
