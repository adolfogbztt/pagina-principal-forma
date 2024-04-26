@php
    $services = [
        [
            // 'img' => '/assets/video-corporativo/portada.webp',
            'video' => '/assets/pro-audiovisual/video-c.webm',
            'title' => 'Video Corporativo',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/video-corporativo',
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

        <p class="has-animation" data-delay="0">Llevamos la producción audiovisual al siguiente nivel con tecnología de
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
<div class="content-row dark-section full change-header-color" data-bgcolor="#000">
    <div class="panels news-panel">
        <div class="panels-container">

            @foreach ($services as $item)
                <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                    <div class="panel-content-wrapper">
                        <div class="panel-image">
                            <a class="ajax-link" href="{{ $item['link'] }}" data-type="page-transition">
                                @if (isset($item['video']))
                                    <video autoplay muted loop class="video-section" src="{{ $item['video'] }}">
                                    </video>
                            </a>
                        @else
                            <img class="grayscale60" src="{{ $item['img'] }}"> </img></a>
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
<!-- Row -->
