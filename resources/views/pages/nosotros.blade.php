@php

    $title = 'Acerca de Nosotros';

    /*HERO SECTION*/
    $color = 'light'; // 'dark' || 'light'
    $text_move = ' Nosotros · Nosotros ·';
    $img_hero = '';
    $description = '';
    /*END HERO SECTION*/

    /*CONTENT SECTION*/
    $content_color = 'light'; // 'dark' || 'light'
    $content_data_bgcolor = $content_color == 'light' ? '#fff' : '#000'; // 'dark' || 'light'
    /*CONTENT SECTION*/
@endphp

@extends('layouts.blank', ['title' => $title, 'img_hero' => $img_hero, 'text_move' => $text_move, 'description' => $description, 'color' => $color])

@section('content')
    <!-- Hero Section -->
    <div id="hero">
        <div id="hero-styles">
            <div id="hero-caption" class="content-max-width parallax-onscroll">
                <div class="inner">
                    <div class="hero-arrow"><i class="arrow-icon"></i></div>
                    <h5 class="hero-subtitle"><span>Descubre</span></h5>
                    <div class="hero-title-wrapper">
                        <h1 class="hero-title">
                            <h2>Nuestra Historia</h2>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Hero Section -->



    <!-- Row -->
    <div class="content-row light-section" data-bgcolor="#fff">
        <br>

        <h5>Forma Producciones Audiovisuales</h5>
        <p>Somos una productora audiovisual con más de 29 años realizando trabajos artísticos, cubriendo
            cada evento especial para usted o su compañía. Nos sentimos orgullos de brindarles un servicio
            integral desde el día del evento hasta la producción de los recuerdos y merchandising. Cuidando
            cada detalle de nuestro servicio y la calidad de los materiales utilizados. Con el fin de que sus
            recuerdos perduren en el tiempo.</p>
        <br>

        <h6>Nos destacamos en los siguientes aspectos:</h6>

        <h6 class="has-mask-fill">✘ Sesiones fotográficas</h6>
        <h6 class="has-mask-fill">✘ Photobooks y Anuarios</h6>
        <h6 class="has-mask-fill">✘ Servicios de video</h6>
        <h6 class="has-mask-fill">✘ Servicios de dron</h6>

        <hr>
        <hr>

        <!-- Row -->
        <div class="content-row row_padding_left row_padding_right full light-section change-header-color"
            data-bgcolor="#fff">

            <div class="one_fourth"></div>

            <div class="two_fourth">
                <h2 class="big-title has-mask-fill">EL Mejor Equipo</h2>
            </div>

            <div class="one_fourth last"></div>

            <hr>


            <div class="one_fourth">
                <h6 class="has-animation has-icon">Objetivo</h6>
            </div>

            <div class="two_fourth">
                <p class="has-animation" data-delay="50">En Forma Producciones Audiovisuales contamos con un
                    equipo altamente calificado.</p>
            </div>

            <div class="one_fourth last"></div>

            <hr>

        </div>
        <!--/Row -->
    </div>
    <!--/Row -->

    <!-- Row -->
    <div class="content-row row_padding_bottom row_padding_left row_padding_right full light-section change-header-color"
        data-bgcolor="#fff">

        <div class="one_fourth"></div>

        <div class="three_fourth last">

            <ul class="team-members-list" data-fx="1">
                <li class="link has-hover-image" data-img="/assets/perfil.webp">
                    <div class="team-member has-animation">
                        <div>Maldonado Carlos</div><span>Gerente General</span>
                    </div>
                </li>
                <li class="link has-hover-image" data-img="/assets/perfil.webp">
                    <div class="team-member has-animation">
                        <div>Collado Diana</div><span>Gerenta Administrativa</span>
                    </div>
                </li>
                <li class="link has-hover-image" data-img="/assets/perfil.webp">
                    <div class="team-member has-animation">
                        <div>Parejas Luis</div><span>Producción Tecníco Operador</span>
                    </div>
                </li>
                <li class="link has-hover-image" data-img="/assets/perfil.webp">
                    <div class="team-member has-animation">
                        <div>Agreda Angel</div><span>Contador</span>
                    </div>
                </li>
            </ul>

        </div>

    </div>
    <!--/Row -->
    <!-- Row -->
    <div class="content-row row_padding_bottom light-section text-align-center" data-bgcolor="#fff">
                                
        <h3>Nuestros Premios</h3> 
        <p>En Forma Producciones Audiovisuales Nos preocupamos por realizar un trabajo excepcional para su empresa.</p>
        
        <hr>
        
        <div class="swiper-container content-looped-carousel has-animation autocenter light-cursor" data-delay="0">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><div class="slide-img"><img src="/assets/nosotros/premios/premio1.webp" alt="Image Title"></div></div>
                <div class="swiper-slide"><div class="slide-img"><img src="/assets/nosotros/premios/premio2.webp" alt="Image Title"></div></div>
                <div class="swiper-slide"><div class="slide-img"><img src="/assets/nosotros/premios/premio3.webp" alt="Image Title"></div></div>
            </div>
            <div class="slider-button-next"></div>
            <div class="slider-button-prev"></div>
            <div class="swiper-pagination"></div>    
        </div>
        
    </div> 
    <!--/Row -->

@endsection

@section('adds')
@endsection
