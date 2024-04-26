@php

    $title = 'Streaming';

    /*HERO SECTION*/
    $color = 'light'; // 'dark' || 'light'
    $text_move = ' Streaming · Streaming ·';
    $img_hero = '/assets/pro-audiovisual/streaming/portada.webp';
    $description =
        'Nuestro servicio de Streaming se distingue por contar con cámaras robóticas de transmisión, 
        las cuales brindan una experiencia visual dinámica y envolvente. Estas cámaras, controladas de 
        forma remota, capturan ángulos precisos y movimientos fluidos, ofreciendo una perspectiva única 
        y profesional a tus transmisiones en vivo. Además, nuestra tecnología avanzada de seguimiento 
        automático garantiza que las cámaras sigan de cerca a los protagonistas y capturen todos los 
        detalles de tus eventos. Con nuestra infraestructura de banda ancha de alta velocidad y el 
        sistema de transmisión en múltiples enlaces (bondy), aseguramos una conexión estable y una 
        calidad de transmisión impecable. Experimenta el poder del streaming con nuestras cámaras 
        robóticas y disfruta de una experiencia visual inigualable en tiempo real.';
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
            <h3 class="has-mask-fill">¡Videos que transmiten la esencia y valores de tu organización!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Capturando la Esencia de la Organización:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Nuestro enfoque en la producción de videos institucionales es capturar
                la esencia única de cada organización que representamos. Nos tomamos el tiempo necesario para comprender a
                fondo la cultura, los valores y los objetivos de tu organización, para poder transmitirlos de manera
                auténtica y convincente en el video final. Utilizando técnicas cinematográficas innovadoras y una narrativa
                cuidadosamente elaborada, creamos videos que resuenan con la audiencia y dejan una impresión duradera.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Transmitiendo Mensajes Clave de Manera Efectiva:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los videos institucionales son una oportunidad para destacar los
                mensajes clave de tu organización de una manera clara y efectiva. Ya sea que estés presentando una nueva
                iniciativa, resaltando los logros de la organización o compartiendo la historia detrás de su éxito, nuestros
                videos están diseñados para transmitir tus mensajes de manera memorable y persuasiva, garantizando que
                lleguen a tu audiencia de manera efectiva.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Generando Confianza y Credibilidad:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los videos institucionales son una herramienta poderosa para generar
                confianza y credibilidad entre tu audiencia. Al mostrar la experiencia y el compromiso de tu organización
                con sus clientes, empleados y la comunidad en general, estos videos ayudan a establecer una conexión
                emocional y personal con la audiencia, fortaleciendo así la relación con la marca y fomentando la lealtad a
                largo plazo.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Un Reflejo de tu Identidad Organizacional:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, entendemos la importancia de los
                videos institucionales como un reflejo auténtico de la identidad de tu organización. Nos comprometemos a
                trabajar en estrecha colaboración contigo para crear un video que capture la esencia y los valores de tu
                organización de manera precisa y efectiva. Permítenos ser tu socio en el viaje hacia la creación de un video
                institucional que inspire, informe y conecte con tu audiencia de una manera significativa y duradera.
                Juntos, crearemos un video que destaque lo mejor de tu organización y deje una impresión positiva en todos
                aquellos que lo vean.</p>
        </div>

        <div class="one_fourth last"></div>

    </div>
    <!--/Row -->
@endsection

@section('adds')
    <div class="content-row full dark-section" data-bgcolor="#000">
        <figure class="has-parallax has-parallax-content" data-delay="100">
            <img src="/assets/pro-audiovisual/streaming/img-bajo.webp" alt="Image Title">
            <div class="parallax-image-content content-max-width text-align-center">
                <div class="outer">
                    <div class="inner">
                    </div>
                </div>
            </div>
        </figure>
    </div>
@endsection
