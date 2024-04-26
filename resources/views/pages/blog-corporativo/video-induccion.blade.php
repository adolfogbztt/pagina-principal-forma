@php

    $title = 'Video de Inducción';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Video de Inducción · Video de Inducción ·';
    $img_hero = '/assets/video-corporativo/conferencias.webp';
    $description = 'Ofrecemos servicios de catering excepcionales, diseñados para 
                    deleitar a tus invitados con una experiencia gastronómica inolvidable. 
                    Desde eventos corporativos hasta celebraciones privadas, nuestro equipo 
                    experto en cocina y atención al detalle garantiza la satisfacción de tus 
                    necesidades culinarias con platos exquisitos y presentaciones impecables.';
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
            <h3 class="has-mask-fill">¡CATERING CORPORATIVO DE EXCELENCIA!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Delicias gourmet en cada bocado</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Nuestro compromiso con la calidad es 
                absoluto. Cada plato que servimos refleja la pasión y la experiencia de nuestros 
                chefs y pasteleros profesionales. Utilizamos ingredientes frescos y de primera calidad 
                para crear experiencias culinarias excepcionales que deleitarán a tus invitados.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Utensilios de prestigio: Royal Prestige</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">En Forma Producciones, nos enorgullece utilizar 
                utensilios de la prestigiosa marca Royal Prestige. Estos utensilios de calidad superior 
                son la elección perfecta para nuestros talentosos chefs, asegurando que cada plato que 
                servimos sea una obra maestra culinaria.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Variedad adaptada a tu evento</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Desde desayunos ejecutivos y pausas energéticas 
                hasta elegantes brindis corporativos, almuerzos de negocios y cenas de gala, nuestro 
                Catering Corporativo se adapta a una amplia gama de eventos. Especializamos cada menú 
                y experiencia para satisfacer las necesidades únicas de tu ocasión.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Profesionalismo en cada detalle</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Nuestro equipo de mozos uniformados está dedicado 
                a proporcionar un servicio impecable. Desde la presentación de los platos hasta el trato 
                amable y profesional a tus invitados, estamos comprometidos a crear un ambiente de 
                elegancia y satisfacción en tu evento.</p>
        </div>

        <div class="one_fourth last"></div>

    </div>
    <!--/Row -->
@endsection

@section('adds') @endsection
