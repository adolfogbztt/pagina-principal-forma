@php
    $services = [
        [
            'img' => '/assets/video-corporativo/conferencias.jpeg',
            'title' => 'Catering',
            'description' => 'Descripcion',
            'link' => '/catering-corporativo/catering',
        ],
        [
            'img' => '/assets/video-corporativo/spot-publicitario.jpg',
            'title' => 'Cafetera Automática',
            'description' => 'Descripcion',
            'link' => '/catering-corporativo/cafetera',
        ],
    ];
@endphp


<!-- Row -->
<div class="content-row dark-section change-header-color" data-bgcolor="#000">

    <hr>

    <div class="one_half">
        <h1 class="has-mask-fill no-margins">Catering</h1>
        <h1 class="has-mask-fill">Corporativo</h1>

        <hr>

        <p class="has-animation" data-delay="0">Deléitate con nuestro servicio de catering y disfruta 
            de la comodidad de una cafetera automática en tus eventos con Forma Producciones.</p>

    </div>

    <div class="one_half last">
        <video src='/assets/drone/vid-drone2.mov' className="item-image grayscale60" autoPlay muted loop></video>
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
                                <img class="grayscale60" src="{{ $item['img'] }}" />
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
