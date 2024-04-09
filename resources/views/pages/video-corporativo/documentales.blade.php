@php

    $title = 'Documentales';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Documentales · Documentales ·';
    $img_hero = '/assets/video-corporativo/documentales.jpeg';
    $description = 'Los documentales tienen el poder único de transportar a los espectadores a nuevos 
                    mundos, contar historias fascinantes y explorar temas importantes de una manera 
                    profunda y significativa. En Forma Producciones Audiovisuales, estamos apasionados 
                    por la creación de videos documentales que no solo entretengan, sino también inspiren 
                    y eduquen a la audiencia.';
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
            <h2 class="has-mask-fill">¡Producción de Videos Documentales que Conmueven y Educan!</h2>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">El Poder del Documental para Transmitir Emociones y Mensajes Profundos:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los documentales tienen la capacidad única de involucrar a los espectadores a un nivel emocional y intelectual. Al combinar imágenes impactantes, narración persuasiva y testimonios convincentes, un documental bien producido puede transmitir mensajes complejos y provocar reflexiones profundas sobre una variedad de temas, desde problemas sociales hasta aspectos culturales y ambientales.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Nuestro Enfoque en la Producción de Videos Documentales:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, nos esforzamos por capturar la esencia auténtica de cada historia que contamos. Desde la fase inicial de investigación y planificación hasta la filmación en el terreno y la postproducción final, nuestro equipo trabaja en estrecha colaboración contigo para garantizar que tu visión se traduzca fielmente en la pantalla. Nos comprometemos a utilizar técnicas cinematográficas creativas y narrativas convincentes para dar vida a tu historia de una manera que resuene con la audiencia y deje una impresión duradera.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">La Importancia de la Investigación y la Autenticidad:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">La investigación sólida es fundamental para la producción de un documental exitoso. Nos tomamos el tiempo necesario para investigar a fondo cada tema que abordamos, consultando con expertos, recopilando testimonios y explorando diversas perspectivas para garantizar la precisión y la integridad de la historia que contamos. Además, nos esforzamos por mantener la autenticidad en cada aspecto de la producción, desde la selección de locaciones hasta la elección de entrevistados, para garantizar que la audiencia se sienta conectada con la historia en un nivel personal.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Preservando Culturas, Historias y Tradiciones:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los documentales tienen el poder de preservar y compartir culturas, historias y tradiciones que de otro modo podrían perderse en el tiempo. Ya sea que estemos documentando la vida de una comunidad indígena, explorando la historia de una ciudad antigua o investigando un fenómeno social contemporáneo, nuestros videos documentales sirven como un registro valioso de la riqueza y diversidad del mundo que nos rodea.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Conclusión:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones Audiovisuales, estamos comprometidos a crear videos documentales que trasciendan el entretenimiento y eduquen, inspiren y conmuevan a la audiencia. Permítenos ser tu socio en el viaje hacia la creación de videos que exploren el mundo desde nuevas perspectivas y transmitan la belleza y complejidad de la experiencia humana. Juntos, crearemos historias que resuenen con la audiencia y dejen una impresión duradera en sus corazones y mentes.</p>
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
