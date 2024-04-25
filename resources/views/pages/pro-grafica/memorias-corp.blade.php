@php

    $title = 'Memorias Corporativas';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Memorias Corporativas · Memorias Corporativas ·';
    $img_hero = '/assets/fotografia/publicidad.webp';
    $description = 'Ofrecemos fotografía publicitaria que captura la esencia y el atractivo de productos y 
                    servicios con creatividad y precisión, destinada a destacar su valor y generar 
                    interés en el público objetivo.';
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
            <h3 class="has-mask-fill">¡Transformamos ideas en imágenes cautivadoras que impulsan tu marca hacia el éxito!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Destacamos</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Forma brinda fotografía publicitaria con ella busca 
                persuadir e invitar al cliente a que compre, desee y haga lo imposible por tener el 
                producto o servicio que ven en una imagen. La fotografía publicitaria es una de las 
                actividades más importantes dentro del ramo fotográfico, pues a partir de esta se 
                genera el deseo de compra en el consumidor final.<br><br>Este tipo de fotografía es de 
                lo más interesante de explorar, pues te permite jugar con la realidad y la ficción en una 
                sola imagen, busca crear una escena en la que el producto o servicio sea la prioridad y 
                todo su entorno gire en torno a eso.<br><br>Es importante no confundir la fotografía de 
                producto con la fotografía publicitaria pues la primera es para catálogos, páginas web, 
                e-commerce y demás, mientras que la segunda es utilizada en vallas publicitarias, revistas 
                o campañas televisivas.</p>
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
