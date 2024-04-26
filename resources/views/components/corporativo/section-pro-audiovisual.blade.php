@php
    $services = [
        [
            // 'img' => '/assets/video-corporativo/portada.webp',
            'video' => '/assets/pro-audiovisual/video-c.webm',
            'title' => 'Video Corporativo',
            'description' => 'Descripcion',
            'link' => 'https://drive.google.com/file/d/1muxHTj2f_f3BEGUp2g6kanNq3zxGO_Pw/view?usp=sharing',
            'blank' => true,
        ],
        [
            // 'img' => '/assets/pro-audiovisual/foto-corporativo.webp',
            'video' => '/assets/pro-audiovisual/foto-corporativo.webm',
            'title' => 'Fotografía Corporativa',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/foto-corporativa',
        ],
        [
            // 'img' => '/assets/pro-audiovisual/drone.webp',
            'video' => '/assets/pro-audiovisual/DRONE.webm',
            'title' => 'Drone',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/drone',
        ],
        [
            // 'img' => '/assets/pro-audiovisual/streaming.webm',
            'video' => '/assets/pro-audiovisual/streaming.webm',
            'title' => 'Streaming',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/streaming',
        ],
        [
            // 'img' => '/assets/video-corporativo/induccion.webp',
            'video' => '/assets/pro-audiovisual/tour360.webm',
            'title' => 'Tours 360°',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/tour360',
        ],
        [
            'img' => '/assets/video-corporativo/eventos.webp',
            'video' => '/assets/pro-audiovisual/tour-vr.webm',
            'title' => 'Tours VR',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/tour-vr',
        ]
        // [
        //     'img' => '/assets/video-corporativo/documentales.webp',
        //     'title' => 'Realidad Virtual',
        //     'description' => 'Descripcion',
        //     'link' => '/pro-audiovisual/realidad-virtual',
        // ],
    ];
@endphp
<!-- Row -->
<div id="audiovisual" class="content-row dark-section change-header-color" data-bgcolor="#000">

    <hr class="destroy">

    <div class="one_half">
        <h2 class="has-mask-fill no-margins">Producción</h2>
        <h2 class="has-mask-fill">Audiovisual</h2>

        <hr>

        <p class="has-animation" data-delay="0" style="text-align: justify;">Llevamos la producción audiovisual al
            siguiente nivel con tecnología de
            vanguardia. Desde video y fotografía corporativa hasta tour 360, streaming y tomas aéreas con nuestros
            drones; nos especializamos en capturar momentos memorables y contar historias cautivadoras. Nuestro
            compromiso es superar las expectativas de nuestros clientes en cada proyecto, fusionando calidad, innovación
            y creatividad. Con equipos de última generación, garantizamos resultados excepcionales en cada producción.
        </p>

    </div>

    <div class="one_half last video-container">
        <video autoplay muted loop class="item-video" className="item-image">
            <source src="/assets/pro-audiovisual/pro-audiovisual.mp4">
            </source>
        </video>
    </div>

</div>
<!--/Row -->


<!-- Row -->
<div class="content-row row_padding_bottom dark-section text-align-center" data-bgcolor="#000">

    <div class="swiper-container content-looped-carousel has-animation autocenter dark-cursor" data-delay="0">

        <div class="swiper-wrapper">

            @foreach ($services as $item)
                @if (isset($item['video']))
                    @if (isset($item['blank']))
                        <a target="_blank" href="{{ $item['link'] }}">
                            <div class="swiper-slide">
                                <div class="slide-img">
                                    <h3 style="z-index:10000; position:absolute; top: 500px !important;">{{$item['title']}}</h3>
                                   <video autoplay muted loop class="video-section" src="{{ $item['video'] }}"></video>
                                </div>
                            </div>
                        </a>
                    @else
                        <div class="swiper-slide">
                            <a href="{{ $item['link'] }}">
                                <div class="slide-img">
                                    <h3 style="z-index:10000; position:absolute; top: 500px !important;">{{$item['title']}}</h3>
                                    {{-- <img src="https://www.clapat.com/templates/humpton/images/shortcodes/image01.jpg" alt="Image Title"> --}}
                                    <video autoplay muted loop class="video-section" src="{{ $item['video'] }}"></video>

                                </div>
                            </a>

                        </div>
                    @endif
                @else
                    <img src="{{ $item['img'] }}"> </img>
                @endif
            @endforeach



        </div>

        <div class="slider-button-next"></div>
        <div class="slider-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

</div>


{{-- 
<!-- Row -->
<div class="content-row dark-section full change-header-color" data-bgcolor="#000">
    <div class="panels news-panel">
        <div class="panels-container">

            @foreach ($services as $item)
                <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                    <div class="panel-content-wrapper">
                        <div class="panel-image">
                            @if (isset($item['video']))
                                @if (isset($item['blank']))
                                    <a target="_blank" href="{{ $item['link'] }}">
                                        <video autoplay muted loop class="video-section" src="{{ $item['video'] }}">
                                        </video>
                                    </a>
                                @else
                                    <a href="{{ $item['link'] }}">
                                        <video autoplay muted loop class="video-section" src="{{ $item['video'] }}">
                                        </video>
                                    </a>
                                @endif
                            @else
                                <img class="grayscale60" src="{{ $item['img'] }}"> </img>
                            @endif

                        </div>
                        <div class="panel-content">
                            <div class="entry-meta entry-categories">
                                <ul class="post-categories">
                                    <li class="link"><a href="#"><span data-hover="Forma">Forma</span></a>
                                    </li>
                                    <li class="link"><a href="#"><span data-hover="Video">Video</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="news-panel-title"><span>{{ $item['title'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Row --> --}}
