@php

    $title = 'Photobook 30cm x 30cm';

    /*HERO SECTION*/
    $color = 'light'; // 'dark' || 'light'
    $text_move = ' Photobook 30cm x 30cm · Photobook 30cm x 30cm ·';
    $img_hero = '/assets/video-corporativo/conferencias.webp';
    $description = 'Explora el mundo de las credenciales y descubre cómo estas 
                    pequeñas tarjetas pueden abrir grandes puertas para tu identidad y seguridad.';
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
            <h3 class="has-mask-fill">¡Tu identidad, nuestra impresión: credenciales que hablan por ti!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">El Poder de las Credenciales: Más que un Pedazo de Plástico</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Las credenciales son más que simples tarjetas; son 
                la puerta de acceso a tu identidad en diferentes entornos. Desde eventos corporativos 
                hasta instituciones académicas, estas pequeñas piezas de plástico son la llave que 
                garantiza tu presencia legítima y seguridad.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Personalización para Dejar Huella</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, entendemos 
                que cada credencial es única, al igual que cada persona que la lleva. Nuestro 
                servicio de impresión de credenciales se enfoca en la personalización, desde el 
                diseño hasta los detalles más finos. ¡Tu identidad merece destacarse!</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Seguridad en Cada Impresión</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">La seguridad es primordial cuando se trata de 
                credenciales. Con tecnología de vanguardia y estándares de calidad rigurosos, nos 
                aseguramos de que cada impresión sea segura y confiable. Protege tu identidad con 
                nuestras credenciales de calidad superior.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Credenciales para Todos los Propósitos</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Ya sea para eventos corporativos, conferencias 
                académicas o acceso a instalaciones, tenemos la solución perfecta para tus necesidades 
                de credenciales. ¡Déjanos ser tu socio en el camino hacia una identidad segura y 
                profesional!</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Conclusión: Tu Identidad, Nuestra Prioridad</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, entendemos 
                la importancia de una identidad segura y profesional. Con nuestro servicio de impresión 
                de credenciales, puedes estar seguro de que tu identidad estará en buenas manos. ¡Confía 
                en nosotros para dejar una impresión duradera en cada tarjeta!</p>
        </div>

        <div class="one_fourth last"></div>

    </div>
    <!--/Row -->
@endsection

@section('adds') @endsection
