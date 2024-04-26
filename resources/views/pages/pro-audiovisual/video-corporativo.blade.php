@php

    $title = 'Video Corporativo';

    /*HERO SECTION*/
    $color = 'light'; // 'dark' || 'light'
    $text_move = ' Video Corporativo · Video Corporativo ·';
    $img_hero = '/assets/pro-audiovisual/video-corporativo/portada.webp';
    $description =
        'Nuestro Servicio de Video Corporativo te ayuda a transmitir la esencia de tu empresa de manera 
        efectiva. Creamos videos profesionales y cautivadores que destacan tus productos, servicios y 
        fortalezas. Con equipos de última generación y técnicas cinematográficas, logramos resultados 
        impactantes. Desde la conceptualización hasta la edición, nos encargamos de todo el proceso para 
        garantizar videos de alta calidad que conecten con tu audiencia y te hagan destacar en el mercado. 
        Confía en nosotros para llevar la imagen de tu empresa al siguiente nivel.';
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
            <h3 class="has-mask-fill">¡Impulsa tu éxito con videos de impacto!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

         <!-- Row -->
         <div class="content-row light-section" data-bgcolor="#fff">
                                
            <h5>Justified Grid</h5> 
            <p>You have the option to add captions if needed or popup lightbox</p>
            
            <hr>
            
            <!-- Collage -->
            <div class="justified-grid">
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">                          
                    <a class="image-link" href="/assets/pro-audiovisual/video-corporativo/spot.webp">
                        <img src="/assets/pro-audiovisual/video-corporativo/spot.webp" alt="img" />
                        <div class="thumb-info">Spots publicitarios</div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link" href="/assets/pro-audiovisual/video-corporativo/portada.webp">
                        <img src="/assets/pro-audiovisual/video-corporativo/portada.webp" alt="img" />
                        <div class="thumb-info">Video institucional</div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link" href="/assets/pro-audiovisual/video-corporativo/induccion.webp">
                        <img src="/assets/pro-audiovisual/video-corporativo/induccion.webp" alt="img" />
                        <div class="thumb-info">Video de inducción </div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link" href="/assets/pro-audiovisual/video-corporativo/eventos.webp">
                        <img src="/assets/pro-audiovisual/video-corporativo/eventos.webp" alt="img" />
                        <div class="thumb-info">Grabación de eventos</div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link" href="/assets/pro-audiovisual/video-corporativo/documental.webp">
                        <img src="/assets/pro-audiovisual/video-corporativo/documental.webp" alt="img" />
                        <div class="thumb-info">Documentales</div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->

                <div class="collage-thumb">               
                    <a class="image-link" href="/assets/pro-audiovisual/video-corporativo/conferencia.webp">
                        <img src="/assets/pro-audiovisual/video-corporativo/conferencia.webp" alt="img" />
                        <div class="thumb-info">Video conferencia</div>
                    </a>
                </div>
            </div>
            <!--/Collage -->
            
        </div> 
        <!--/Row -->


    </div>
    <!--/Row -->
@endsection

@section('adds')
    <div class="content-row full dark-section" data-bgcolor="#000">
        <figure class="has-parallax has-parallax-content" data-delay="100">
            <img src="/assets/pro-audiovisual/video-corporativo/img-bajo.webp" alt="Image Title">
            <div class="parallax-image-content content-max-width text-align-center">
                <div class="outer">
                    <div class="inner">
                    </div>
                </div>
            </div>
        </figure>
    </div>
@endsection
