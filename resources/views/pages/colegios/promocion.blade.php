@php

    $title = 'Promoción';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Promoción · Promoción ·';
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


        <!-- Main Content -->
        <div id="main-content">
            <!-- Main Page Content -->
            <div id="main-page-content" class="content-max-width">


                <!-- Row -->
                <div class="content-row row_padding_bottom light-section" data-bgcolor="#fff">

                    <h5>Galeria de <I>Imágenes</I></h5>
                    <p></p>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/1.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="video-link"><img src="/assets/colegios/promocion/2.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <div class="one_half ">
                        <figure class=" has-cover">
                            <a href="#" class="image-link"><img src="/assets/colegios/promocion/3.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/4.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/5.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="video-link"><img src="/assets/colegios/promocion/6.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <div class="one_half ">
                        <figure class=" has-cover">
                            <a href="#" class="image-link"><img src="/assets/colegios/promocion/7.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/8.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/9.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="video-link"><img src="/assets/colegios/promocion/10.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <div class="one_half ">
                        <figure class=" has-cover">
                            <a href="#" class="image-link"><img src="/assets/colegios/promocion/11.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/12.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/13.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="video-link"><img src="/assets/colegios/promocion/14.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="image-link"><img src="/assets/colegios/promocion/15.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/16.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <figure class=" has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/17.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="video-link"><img src="/assets/colegios/promocion/18.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="image-link"><img src="/assets/colegios/promocion/19.webp"
                                    alt="Image Title"></a>
                        </figure>
                    </div>

                    <hr>

                    <figure class="has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/20.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="video-link"><img src="/assets/colegios/promocion/21.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="image-link"><img src="/assets/colegios/promocion/22.webp"
                                    alt="Image Title"></a>
                        </figure>
                    </div>

                    <hr>

                    <figure class="has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/23.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="video-link"><img src="/assets/colegios/promocion/24.webp"
                                    alt="Image Title"></a>

                        </figure>
                    </div>

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="image-link"><img src="/assets/colegios/promocion/25.webp"
                                    alt="Image Title"></a>
                        </figure>
                    </div>

                    <hr>

                    <figure class="has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/26.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr> 

                    <div class="one_half">
                        <figure class=" has-cover">
                            <a href="#" class="image-link"><img src="/assets/colegios/promocion/27.webp"
                                    alt="Image Title"></a>
                        </figure>
                    </div>

                    <hr>

                    <figure class="has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/28.webp"
                                alt="Image Title"></a>
                    </figure>

                    <hr>

                    <figure class="has-cover">
                        <a href="#" class="image-link"><img src="/assets/colegios/promocion/29.webp"
                                alt="Image Title"></a>
                    </figure>
                </div>
                <!--/Row -->
            @endsection

            @section('adds')
            @endsection
