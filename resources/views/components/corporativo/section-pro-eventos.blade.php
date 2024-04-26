@php
    $services = [
        [
            'img' => '/assets/pro-eventos/catering.webp',
            'title' => 'Catering Corporativo',
            'description' => 'Descripcion',
            'link' => '/pro-eventos/catering-corp',
        ],
        [
            'img' => '/assets/pro-eventos/cafetera.webp',
            'title' => 'Cafetera Automática',
            'description' => 'Descripcion',
            'link' => '/pro-eventos/cafetera-automatica',
        ],
        [
            'img' => '/assets/pro-eventos/photobooth.webp',
            'title' => 'Photobooth 360°',
            'description' => 'Descripcion',
            'link' => '/pro-eventos/photobooth-360',
        ],
        [
            'img' => '/assets/pro-eventos/iglu.webp',
            'title' => 'Cabina Fotográfica Iglú',
            'description' => 'Descripcion',
            'link' => '/pro-eventos/foto-iglu',
        ],
        [
            'img' => '/assets/pro-eventos/panel-led.webp',
            'title' => 'Panel LED',
            'description' => 'Descripcion',
            'link' => '/pro-eventos/panel-led',
        ],
        [
            'img' => '/assets/pro-eventos/karaoke.webp',
            'title' => 'karaoke',
            'description' => 'Descripcion',
            'link' => '/pro-eventos/karaoke',
        ]
    ];
@endphp


<!-- Row -->
<div class="content-row dark-section change-header-color" data-bgcolor="#000">

    <hr>

    <div class="one_half">
        <h2 class="has-mask-fill no-margins">Producción</h2>
        <h2 class="has-mask-fill">de Eventos</h2>

        <hr>

        <p class="has-animation" data-delay="0" style="text-align: justify;">¡Descubre nuestro nuevo servicio: catering corporativo de primera
            categoría! Desde reuniones íntimas hasta grandes celebraciones, elevamos cada detalle de tu evento. Además,
            ofrecemos una moderna cafetera automática con café recién hecho y una variedad de bebidas calientes para tus
            invitados.

            Y no te pierdas nuestro nuevo local en Pachacamac: un espacio moderno y elegante diseñado especialmente para
            tus eventos corporativos. Confía en nosotros para brindarte un servicio excepcional que impresionará a tus
            invitados.
        </p>

    </div>

    <div class="one_half last video-container">
        <video autoplay muted loop class="item-video" className="item-image">
            <source src="/assets/pro-eventos/eventos.webm">
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
                                <img src="{{ $item['img'] }}" />
                            </a>
                        </div>
                        <div class="panel-content">
                            <div class="entry-meta entry-categories">
                                <ul class="post-categories">
                                    <li class="link"><a href="#"><span data-hover="Forma">Forma</span></a>
                                    </li>
                                    <li class="link"><a href="#"><span data-hover="Video">Sabores</span></a>
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
