@php
    $services = [
        [
            'img' => '/assets/colegios/productos/photobook_portada.webp',
            'title' => 'Photobook 20cm x 20cm',
            'description' => 'Descripcion',
            'link' => '/colegios/p20',
        ],
        [
            'img' => '/assets/colegios/productos/book_tapacuero.webp',
            'title' => 'Photobook 25cm x 25cm',
            'description' => 'Descripcion',
            'link' => '/colegios/p25',
        ],
        [
            'img' => '/assets/colegios/productos/book_tapaacolchada.webp',
            'title' => 'Photobook 30cm x 30cm',
            'description' => 'Descripcion',
            'link' => '/colegios/p30',
        ],
        [
            'img' => '/assets/colegios/productos/bipack.webp',
            'title' => 'Photobook A4',
            'description' => 'Descripcion',
            'link' => '/colegios/pa4',
        ],
    ];
@endphp




<!-- Row -->
<div class="content-row light-section change-header-color" data-bgcolor="#fff">

    <hr>

    <div class="one_half">
        <h1 class="has-mask-fill no-margins">Nuestros</h1>
        <h1 class="has-mask-fill">Productos</h1>

        <hr>

        <p class="has-animation" data-delay="0">Es un libro que contiene fotografías 
            de momentos u objetos especiales para recordar y compartir. Hoy en día 
            existe una gran variedad de elementos con los que puedes complementarlos 
            y lograr que tu álbum digital tenga un estilo propio y original.</p>

    </div>

    <div class="one_half last">
        <h5 class="has-mask-fill">Medidas disponibles</h5>
        <a href="/assets/colegios/productos/medida.webp" class="image-link imagen-container">
        <img src="/assets/colegios/productos/medida.webp" class="item-image grayscale20" alt="forma producciones comunion">
        </a>
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
                            <a class="ajax-link" href="{{ $item['link'] }}" data-type="page-transition"><img
                                    class="grayscale60" src="{{ $item['img'] }}"> </img></a>
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
