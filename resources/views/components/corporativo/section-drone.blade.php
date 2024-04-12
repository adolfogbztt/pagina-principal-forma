@php

    $services = [
        [
            'img' => 'assets/drone/cartografia.jpeg',
            'title' => 'Cartografía',
            'description' => 'Descripción',
            'link' => '/servicios/cartografia',
        ],
        [
            'img' => 'assets/drone/termonometria.jpeg',
            'title' => 'Termografía',
            'description' => 'Descripción',
            'link' => '/servicios/termografia',
        ],
        [
            'img' => 'assets/drone/fotogrametria.jpeg',
            'title' => 'Fotogrametría',
            'description' => 'Descripción',
            'link' => '/servicios/fotogrametria',
        ],
        [
            'img' => 'assets/drone/corporativo.jpeg',
            'title' => 'Corporativo',
            'description' => 'Descripción',
            'link' => '/servicios/corporativo',
        ],
    ];

@endphp

<!-- Row -->
<div class="content-row fadeout-element row_padding_top light-section change-header-color" data-bgcolor="#fff">

    <div class="one_half">
        <h1 class="has-mask-fill">Drone</h1>
        <p class="has-animation" data-delay="50">The driving force of all
            speeches, we believe that creation should be the point around which any
            communication strategy revolves.</p>
    </div>

    <div class="one_half last">
        <video src='/assets/drone/vid-drone2.mov' className="item-image grayscale60" autoPlay muted loop></video>
    </div>

    <hr class="destroy">

</div>
<!--/Row -->


<!-- Row -->
<div class="content-row fadeout-element light-section change-header-color" data-bgcolor="#fff">

    <div class="marquee-text-wrapper">
        <h1 class="marquee-text big-title bw">servicios especializados</h1>
    </div>

</div>
<!--/Row -->


<!-- Row -->
<div class="content-row row_padding_top row_padding_bottom light-section change-header-color full" data-bgcolor="#fff">

    <div class="content-row row_padding_bottom light-section" data-bgcolor="#fff">
        <div class="pinned-section">
            <div class="scrolling-element left">

                @foreach ($services as $k => $v)
                    <figure class="has-animation">
                        <a href="{{ $v['img'] }}" class="image-link imagen-container">
                            <img src="{{ $v['img'] }}" alt="{{ $v['title'] }}" class="grayscale60" />
                            <div class="overlay">
                                <h2>{{ $v['title'] }}</h2>
                            </div>
                        </a>
                    </figure>
                    <br />
                @endforeach

            </div>

            <div class="pinned-element right">
                <h5 class="has-mask-fill">Pinned Section</h5>
                <p class="has-animation">This will stay in frame until the next content row <br class="destroy">
                    will reach the bottom</p>
            </div>
        </div>
    </div>
</div>
<!--/Row -->
