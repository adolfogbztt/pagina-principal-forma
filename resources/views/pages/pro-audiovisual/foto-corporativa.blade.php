@php

    $title = 'Fotografía Corporativa';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Fotografía Corporativa · Fotografía Corporativa ·';
    $img_hero = '/assets/video-corporativo/spot-publicitario.webp';
    $description =
        'Nuestro servicio de Fotografía Digital y Artística se especializa en capturar imágenes profesionales 
        y creativas. Utilizando equipos de última generación y técnicas de iluminación avanzadas, 
        garantizamos la más alta calidad en cada foto. Nuestro enfoque artístico captura momentos 
        únicos y transmite emociones. Trabajamos contigo para ofrecerte soluciones personalizadas 
        que se alineen con tu estilo y visión. Destaca con nuestras fotografías de impacto.';
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
            <h3 class="has-mask-fill">¡Destaca en la multitud: Crea un impacto duradero con nuestros spots publicitarios!
            </h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Creatividad que Marca la Diferencia:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En un mundo donde la atención del espectador es un
                bien preciado, la creatividad es clave para destacar en el panorama publicitario.
                Nuestro equipo de producción está compuesto por expertos creativos que están
                constantemente ideando nuevas y emocionantes formas de transmitir tu mensaje de manera
                memorable y persuasiva. Ya sea a través de humor, emoción o narrativa, nos aseguramos de
                que cada spot publicitario sea único y cautivador, dejando una impresión duradera en la
                audiencia.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Enfoque en la Efectividad y Resultados:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Entendemos que la efectividad de un spot
                publicitario se mide en su capacidad para generar resultados tangibles para tu
                negocio. Es por eso que nos comprometemos a trabajar en estrecha colaboración
                contigo para entender tus objetivos comerciales y crear un spot que no solo sea
                creativo y atractivo, sino también efectivo en la generación de interés, engagement y
                conversiones. Desde la planificación inicial hasta la distribución final, nuestro objetivo
                es ayudarte a alcanzar tus metas de marketing y hacer que tu inversión en publicidad valga
                la pena.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Tecnología de Vanguardia para un Impacto Óptimo:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Utilizamos equipos de última generación y técnicas
                de producción innovadoras para garantizar que cada spot publicitario cumpla con los más
                altos estándares de calidad y tenga el mayor impacto posible en tu audiencia. Desde
                cámaras de alta definición hasta efectos visuales impresionantes, nos aseguramos de que
                cada aspecto de la producción esté cuidadosamente considerado para garantizar que tu spot
                se destaque en un mar de publicidad.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Conclusión:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, entendemos la
                importancia de los spots publicitarios como una herramienta para destacar en el mercado
                y generar resultados tangibles para tu negocio. Permítenos ser tu socio en el viaje hacia
                la creación de un spot publicitario que capture la esencia de tu marca y conecte
                emocionalmente con tu audiencia. Juntos, crearemos un spot que destaque entre la multitud
                y deje una impresión duradera en la mente y el corazón de quienes lo vean.</p>
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
