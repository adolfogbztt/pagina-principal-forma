@php

    $title = 'Credenciales - Fotocheck';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Fotografia Corporativa · Fotografia Corporativa ·';
    $img_hero = '/assets/fotografia/corporativo.webp';
    $description = 'Nuestra fotografía corporativa captura la esencia y 
                    profesionalismo de tu empresa, ideal para branding y comunicación visual efectiva.';
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
            <h3 class="has-mask-fill">¡Detiene el tiempo en imágenes perfectas!</h3>
        </div>

        
        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Comprensión del cliente:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma, antes de comenzar cualquier sesión, es esencial 
                tener una comprensión profunda de la empresa, su cultura corporativa, valores, identidad 
                de marca y los objetivos específicos que desean lograr con las fotografías corporativas. 
                Esto permite al nuestros fotógrafos alinear su visión con la del cliente y capturar imágenes que 
                reflejen fielmente la esencia de la empresa.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Planificación y logística:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Nuestra planificación es cuidadosa ya que es la clave para el éxito de 
                cualquier sesión fotográfica corporativa. Esto implica coordinar detalles como la ubicación 
                de la sesión, el equipo necesario, la disponibilidad del personal clave y cualquier requisito 
                técnico especial. Ofreciendo una planificación sólida para maximizar el tiempo de la sesión y garantizar 
                que se capturen todas las imágenes necesarias.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Profesionalismo y creatividad:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Durante la sesión fotográfica, mantenemos un 
                alto nivel de profesionalismo en todo momento. Esto implica no solo tener habilidades 
                técnicas sólidas en fotografía, iluminación y composición, sino también la capacidad de 
                guiar y dirigir a los sujetos de manera efectiva para obtener los mejores resultados. 
                Además, la creatividad juega un papel importante en la creación de imágenes únicas y 
                visualmente atractivas que destaquen la marca de su empresa.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Comunicación efectiva: </h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">La comunicación que brinda Forma es clara y constante con el cliente es 
                fundamental en todas las etapas del proceso, desde la planificación inicial hasta la 
                entrega final de las imágenes. Esto incluye discutir las expectativas del cliente, 
                obtener retroalimentación durante la sesión y compartir muestras de imágenes para 
                asegurarse de que se esté cumpliendo con sus requisitos y preferencias.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Postproducción cuidadosa:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Después de la sesión, el trabajo de edición 
                y retoque es crucial para garantizar que las imágenes cumplan con los estándares 
                de calidad esperados. Realizamos los ajustes de color, contraste y nitidez 
                según sea necesario, así como eliminar imperfecciones menores y asegurarse de que las 
                imágenes tengan una apariencia profesional y coherente con la identidad visual de la 
                marca.</p>
        </div>


        <div class="one_fourth last"></div>

    </div>
    <!--/Row -->
@endsection

@section('adds') @endsection
