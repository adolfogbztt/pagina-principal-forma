@php

    $title = 'Photobook';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Photobook · Photobook ·';
    $img_hero = '/assets/video-corporativo/conferencias.jpeg';
    $description = 'En el vertiginoso mundo digital de hoy en día, donde las fotos se comparten y olvidan 
    con un simple desplazamiento, ¿qué pasa con esos momentos que realmente importan? Los photobooks 
    ofrecen una solución tangible y duradera para preservar y compartir nuestras experiencias más 
    preciadas. Desde los momentos cotidianos hasta los hitos importantes de la vida, cada página de 
    un photobook cuenta una historia única y emotiva.';
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
            <h2 class="has-mask-fill">¡Explorando el Arte de Preservar Recuerdos: Descubre el Mundo de los Photobooks!</h2>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Introducción:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="200">En el vertiginoso mundo digital de hoy en día, donde las fotos se comparten y olvidan con un simple desplazamiento, ¿qué pasa con esos momentos que realmente importan? Los photobooks ofrecen una solución tangible y duradera para preservar y compartir nuestras experiencias más preciadas. Desde los momentos cotidianos hasta los hitos importantes de la vida, cada página de un photobook cuenta una historia única y emotiva.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">El Encanto de los Photobooks:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="200">Imagina abrir las páginas de un libro y encontrarte cara a cara con tus recuerdos más preciados: la sonrisa radiante de un ser querido, la belleza de un paisaje capturada en su mejor momento, la emoción de un día especial con amigos y familiares. Los photobooks nos permiten revivir estos momentos una y otra vez, sumergiéndonos en la magia de cada imagen y trayendo a la vida los recuerdos que atesoramos.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Personalización sin Límites:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="200">Una de las mayores ventajas de los photobooks es la libertad creativa que ofrecen. Desde el diseño de la portada hasta la disposición de las fotos en cada página, cada aspecto del libro puede ser personalizado para reflejar tu estilo y contar tu historia de la manera más auténtica posible. ¿Quieres añadir texto para acompañar tus fotos? ¿O tal vez jugar con diferentes estilos de diseño para darle un toque único a cada página? ¡El único límite es tu imaginación!</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Calidad que se Siente:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="200">A diferencia de las fotos digitales que pueden perderse en el ciberespacio, los photobooks son tangibles y duraderos. En Forma Producciones Audiovisuales, nos enorgullecemos de ofrecer photobooks de la más alta calidad, impresos con materiales premium y utilizando tecnología de impresión de vanguardia para garantizar una reproducción fiel de tus fotos. Cada página es una obra de arte en sí misma, diseñada para resistir el paso del tiempo y mantener vivos tus recuerdos durante años venideros.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Un Legado para las Generaciones Futuras:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="200">Los photobooks no solo son una forma de preservar tus propios recuerdos, sino también de compartir tu historia con las generaciones futuras. Imagina pasar una tarde tranquila con tus nietos, hojear las páginas de un photobook y contarles las historias detrás de cada foto. Con cada vuelta de página, estás creando un legado familiar que perdurará mucho más allá de tu propia vida.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Conclusión:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="200">En un mundo donde todo parece efímero y fugaz, los photobooks ofrecen una oportunidad única de detener el tiempo y capturar los momentos que realmente importan. En Forma Producciones Audiovisuales, estamos comprometidos a ayudarte a preservar y compartir tus recuerdos de la manera más hermosa y significativa posible. Permítenos ser parte de tu viaje para transformar tus fotos en obras maestras que perdurarán para siempre.</p>
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
