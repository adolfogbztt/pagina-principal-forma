@php
    $services = [
        [
            'img' => '/assets/video-corporativo/conferencias.webp',
            'title' => 'Video Corporativo',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/video-corporativo',
        ],
        [
            'img' => '/assets/video-corporativo/spot-publicitario.webp',
            'title' => 'Fotografía Corporativa',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/foto-corporativa',
        ],
        [
            'img' => '/assets/video-corporativo/institucional.webp',
            'title' => 'Streaming',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/institucional',
        ],
        [
            'img' => '/assets/video-corporativo/induccion.webp',
            'title' => 'Tours 360°',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/induccion',
        ],
        [
            'img' => '/assets/video-corporativo/eventos.webp',
            'title' => 'Tours VR',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/eventos',
        ],
        [
            'img' => '/assets/video-corporativo/documentales.webp',
            'title' => 'Realidad Virtual',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/documentales',
        ],
        [
            'img' => '/assets/video-corporativo/conferencias.webp',
            'title' => 'Drone',
            'description' => 'Descripcion',
            'link' => '/pro-audiovisual/conferencias',
        ],
    ];
@endphp
<!-- Row -->
<div class="content-row dark-section change-header-color" data-bgcolor="#000">

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

    <div class="one_half last">
        <img style="border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;"
            src='/assets/img-corporativo/vc1.webp' className="item-image grayscale60"></img>
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
                            <a class="ajax-link" href="{{ $item['link'] }}" data-type="page-transition"><img
                                    class="grayscale60" src="{{ $item['img'] }}"> </img></a>
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
