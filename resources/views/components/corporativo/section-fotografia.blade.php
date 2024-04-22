@php
    $services = [
        [
            'img' => '/assets/fotografia/corporativo.webp',
            'title' => 'Corporativo',
            'description' => 'Descripcion',
            'link' => '/fotografia/corporativo',
        ],
        [
            'img' => '/assets/fotografia/productos.webp',
            'title' => 'Productos',
            'description' => 'Descripcion',
            'link' => '/fotografia/productos',
        ],
        [
            'img' => '/assets/fotografia/publicidad.webp',
            'title' => 'Publicidad',
            'description' => 'Descripcion',
            'link' => '/fotografia/publicidad',
        ],
        [
            'img' => '/assets/fotografia/eventos.jpg',
            'title' => 'Fotografía',
            'description' => 'Descripcion',
            'link' => '/fotografia/fotografia',
        ],
        [
            'img' => '/assets/fotografia/corporativo.webp',
            'title' => 'Corporativo',
            'description' => 'Descripcion',
            'link' => '/fotografia/corporativo',
        ]
    ];
@endphp




<!-- Row -->
<div class="content-row light-section change-header-color" data-bgcolor="#fff">

    <hr>

    <div class="one_half">
        <h1 class="has-mask-fill no-margins">Fotografía</h1>
        <h1 class="has-mask-fill">Digital</h1>

        <hr>

        <p class="has-animation" data-delay="0">Capturamos la esencia de su empresa con 
            fotografía digital de calidad profesional. Desde retratos corporativos hasta imágenes 
            impactantes de productos y publicidad, en Forma Producciones, transformamos momentos en 
            memorias perdurables.</p>

    </div>

    <div class="one_half last"></div>

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
                            <a class="ajax-link" href="{{ $item['link'] }}" data-type="page-transition"><img class="grayscale60" src="{{ $item['img'] }}"> </img></a>
                        </div>
                        <div class="panel-content">
                            <div class="entry-meta entry-categories">
                                <ul class="post-categories">
                                    <li class="link"><a href="#"><span data-hover="Forma">Forma</span></a>
                                    </li>
                                    <li class="link"><a href="#"><span
                                                data-hover="Fotografia">Fotografia</span></a>
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
