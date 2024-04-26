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
        ],
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
            <p class="has-animation" style="text-align: justify;">En Forma Producciones, ofrecemos un servicio de
                producción gráfica que se
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
<div class="content-row row_padding_bottom light-section text-align-center" data-bgcolor="#fff">

    <div class="swiper-container content-looped-carousel has-animation autocenter light-cursor" data-delay="0">

        <div class="swiper-wrapper">

            @foreach ($services as $item)
                @if (isset($item['video']))
                    @if (isset($item['blank']))
                        <a target="_blank" href="{{ $item['link'] }}">
                            <div class="swiper-slide">
                                <div class="slide-img">
                                    <h3 style="z-index:10000; position:absolute; top: 500px !important;">
                                        {{ $item['title'] }}</h3>
                                    <video autoplay muted loop class="video-section" src="{{ $item['video'] }}"></video>
                                </div>
                            </div>
                        </a>
                    @else
                        <div class="swiper-slide">
                            <a href="{{ $item['link'] }}">
                                <div class="slide-img ">
                                    <h3 style="z-index:10000; position:absolute; top: 500px !important;">
                                        {{ $item['title'] }}</h3>
                                    {{-- <img src="https://www.clapat.com/templates/humpton/images/shortcodes/image01.jpg" alt="Image Title"> --}}
                                    <video autoplay muted loop class="video-section" src="{{ $item['video'] }}"></video>

                                </div>
                            </a>

                        </div>
                    @endif
                @else
                    @if (isset($item['blank']))
                        <div class="swiper-slide">
                            <a target="_blank" href="{{ $item['link'] }}">
                                <div class="slide-img">
                                    <h3
                                        style="z-index:10000; position:absolute; top: 50vh !important;color:#fff; left:20px !important;">
                                        {{ $item['title'] }}</h3>
                                    <img src="{{ $item['img'] }}"> </img>
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="swiper-slide">
                            <a href="{{ $item['link'] }}">
                                <div class="slide-img">
                                    <h3
                                        style="z-index:10000; position:absolute; top: 50vh !important;color:#fff; left:20px !important;">
                                        {{ $item['title'] }}</h3>
                                    <img src="{{ $item['img'] }}"> </img>
                                </div>
                            </a>
                        </div>
                    @endif
                @endif
            @endforeach



        </div>

        <div class="slider-button-next"></div>
        <div class="slider-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

</div>




<!-- Row -->
{{-- <div class="content-row light-section full change-header-color" data-bgcolor="#fff">
    <div class="panels news-panel">
        <div class="panels-container">
            @foreach ($services as $item)
                <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                    <div class="panel-content-wrapper">
                        <div class="panel-image">
                            @if (isset($item['video']))
                            @else
                                @if (isset($item['blank']))
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
</div> --}}

<!-- Row -->
