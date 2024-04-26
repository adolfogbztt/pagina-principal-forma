@php
    $services = [
        [
            'img' => '/assets/pro-grafica/credencial.webp',
            'title' => 'Credenciales - Fotocheck',
            'description' => 'Descripcion',
            'link' => 'https://drive.google.com/file/d/1-zd8FPAINXf6qjr_dfEqdORKHtF3jTXf/view?usp=sharing',
            'blank' => true,
        ],
        [
            'img' => '/assets/pro-grafica/diplomas.webp',
            'title' => 'Impresión de Titutlos y Diplomas',
            'description' => 'Descripcion',
            'link' => '/pro-grafica/titulos-diplomas',
        ],
        [
            'img' => '/assets/pro-grafica/memorias.webp',
            'title' => 'Memorias Coporativas',
            'description' => 'Descripcion',
            'link' => '/pro-grafica/memorias-corp',
        ]
    ];
@endphp

<!-- Row -->
<div id="graficas" class="content-row row_padding_bottom light-section" data-bgcolor="#fff">

    <div class="pinned-section">

        <hr>
        <div class="scrolling-element left video-section video-container">
            <video autoplay muted loop class="item-video" className="item-image">
                <source src="/assets/pro-grafica/pro-grafica.webm">
                </source>
            </video>
        </div>


        <div class="pinned-element right">

            <hr>
            <h2 class="has-mask-fill no-margins">Producción</h2>
            <h2 class="has-mask-fill">Gráfica
            </h2>
            <p class="has-animation" style="text-align: justify;">En Forma Producciones, ofrecemos un servicio de producción gráfica que se
                adapta a tus necesidades específicas. Desde memorias corporativas hasta credenciales y diplomas, nuestro
                enfoque centrado en la calidad y la innovación garantiza resultados excepcionales en cada proyecto.
                Nos diferenciamos por nuestro compromiso con la excelencia y la innovación. Contamos con tecnología de
                punta, incluyendo máquinas de impresión digitales láser y offset de alta tecnología, lo que nos permite
                mantener un control total sobre el proceso de impresión. Esto se traduce en resultados precisos y de
                impacto desde el concepto inicial hasta la entrega final.
        </div>
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
                            @if (isset($item['video']))
                            
                            @else
                            @if(isset($item['blank']))
                                <a target="_blank" href="{{ $item['link'] }}">
                                    <img src="{{ $item['img'] }}"> </img>
                                </a>
                            @else
                            <a href="{{ $item['link'] }}">
                                <img src="{{ $item['img'] }}"> </img>
                            </a>
                            @endif
                              
                            @endif
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
