@php
    $services = [
        [
            'img' => '/assets/video-corporativo/conferencias.jpeg',
            'title' => 'Conferencias',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-conferencias',
        ],
        [
            'img' => '/assets/video-corporativo/spot-publicitario.jpg',
            'title' => 'Sport Publicitario',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-spot-publicitario',
        ],
        [
            'img' => '/assets/video-corporativo/institucional.jpg',
            'title' => 'Institucional',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-institucional',
        ],
        [
            'img' => '/assets/video-corporativo/induccion.jpeg',
            'title' => 'Inducción',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-induccion',
        ],
        [
            'img' => '/assets/video-corporativo/eventos.jpg',
            'title' => 'Eventos',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-eventos',
        ],
        [
            'img' => '/assets/video-corporativo/documentales.jpeg',
            'title' => 'Documentales',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-documentales',
        ],
    ];
@endphp


<!-- Row -->
<div class="content-row dark-section change-header-color" data-bgcolor="#000">

    <hr>

    <div class="one_half">
        <h1 class="has-mask-fill no-margins">Video</h1>
        <h1 class="has-mask-fill">Corporativo</h1>

        <hr>

        <p class="has-animation" data-delay="0">There are many variations of passages of Lorem Ipsum available, but the
            majority have suffered alteration in some form by injected humour.</p>

    </div>

    <div class="one_half last"></div>

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
                                    src="{{ $item['img'] }}"> </img></a>
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
