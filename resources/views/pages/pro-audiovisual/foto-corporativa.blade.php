@php

    $title = 'Fotografía Corporativa';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Fotografía Corporativa · Fotografía Corporativa ·';
    $img_hero = '/assets/pro-audiovisual/foto-corporativo/portada.webp';
    $description = 'Nuestro servicio de Fotografía Digital y Artística se especializa en capturar imágenes profesionales 
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

@extends('layouts.blank', ['title' => $title, 'img_hero' => $img_hero, 'text_move' => $text_move, 'description' => $description, 'color' => $color])

@section('content')
    <!-- Row -->
    <div class="content-row row_padding_top row_padding_bottom {{ $content_color }}-section change-header-color"
        data-bgcolor="{{ $content_data_bgcolor }}">

        <div class="one_fourth"></div>

        <div class="two_fourth">
            <h3 class="has-mask-fill">¡Impulsa tu éxito con fotos que impactan!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

         <!-- Row -->
         <div class="content-row light-section" data-bgcolor="#fff">
                                
            
            <hr>
            
            <!-- Collage -->
            <div class="justified-grid">
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">                          
                    <a class="image-link">
                    <img src="/assets/pro-audiovisual/foto-corporativo/1.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link">
                       <img src="/assets/pro-audiovisual/foto-corporativo/2.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link">
                        <img src="/assets/pro-audiovisual/foto-corporativo/3.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link">
                       <img src="/assets/pro-audiovisual/foto-corporativo/4.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link">
                        <img src="/assets/pro-audiovisual/foto-corporativo/5.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>

                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link">
                        <img src="/assets/pro-audiovisual/foto-corporativo/6.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>

                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link">
                        <img src="/assets/pro-audiovisual/foto-corporativo/7.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>

                <!-- Collage item with pop-up -->
                <div class="collage-thumb">               
                    <a class="image-link">
                        <img src="/assets/pro-audiovisual/foto-corporativo/8.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>
                
                <!-- Collage item with pop-up -->

                <div class="collage-thumb">               
                    <a class="image-link">
                        <img src="/assets/pro-audiovisual/foto-corporativo/9.webp" alt="img" />
                        <div class="thumb-info"></div>
                    </a>
                </div>
            </div>
            <!--/Collage -->
            
        </div> 
        <!--/Row -->


    </div>
    <!--/Row -->
    @endsection
