@php
    $services = [
        [
            'img' => '/assets/video-corporativo/conferencias.jpeg',
            'title' => 'Photobooks',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-conferencias',
        ],
        [
            'img' => '/assets/video-corporativo/spot-publicitario.jpg',
            'title' => 'Titulos y Diplomas',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-spot-publicitario',
        ],
        [
            'img' => '/assets/video-corporativo/spot-publicitario.jpg',
            'title' => 'Credenciales & fotochecks',
            'description' => 'Descripcion',
            'link' => '/servicios/video-corporativo-spot-publicitario',
        ],
    ];
@endphp


<!-- Row -->
<div class="content-row light-section change-header-color" data-bgcolor="#fff">

    <hr>

    <div class="one_half">
        <img src='/assets/1x/impresion.jpg' className="item-image grayscale60" autoPlay muted loop></img>

    </div>

    <div class="one_half last">

        <h1 class="has-mask-fill no-margins">Impresiones</h1>

        <hr>

        <p class="has-animation" data-delay="0">Brindamos soluciones de impresión personalizadas para 
            photobooks, anuarios, credenciales y más. Con tecnología de punta y un enfoque en la calidad, 
            ofrecemos productos impresos de alta definición y durabilidad para satisfacer las necesidades 
            específicas de nuestros clientes.</p>

    </div>

</div>
<!--/Row -->



<!-- Row -->
<div class="content-row light-section full change-header-color" data-bgcolor="#fff">
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
                                    <li class="link"><a href="#"><span data-hover="Video">Impresiones</span></a>
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
