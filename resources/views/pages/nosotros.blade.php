@php

    $title = 'Acerca de Nosotros';

    /*HERO SECTION*/
    $color = 'light'; // 'dark' || 'light'
    $text_move = ' Nosotros · Nosotros ·';
    $img_hero = '';
    $description = '';
    /*END HERO SECTION*/

    /*CONTENT SECTION*/
    $content_color = 'light'; // 'dark' || 'light'
    $content_data_bgcolor = $content_color == 'light' ? '#fff' : '#000'; // 'dark' || 'light'
    /*CONTENT SECTION*/
@endphp

@extends('layouts.blank', ['title' => $title, 'img_hero' => $img_hero, 'text_move' => $text_move, 'description' => $description, 'color' => $color])

@section('content')
    <!-- Hero Section -->
    <div id="hero">
        <div id="hero-styles">
            <div id="hero-caption" class="content-max-width parallax-onscroll">
                <div class="inner">
                    <div class="hero-arrow"><i class="arrow-icon"></i></div>
                    <h5 class="hero-subtitle"><span>Forma</span></h5>
                    <div class="hero-title-wrapper">
                        <h1 class="hero-title">
                            <h2>Nosotros</h2>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Hero Section -->



    <!-- Row -->
    <div class="content-row light-section" data-bgcolor="#fff">
        <br>

        <blockquote>
            <h3>Forma Producciones Audiovisuales</h3>
        </blockquote>
        <p class="has-indent">Somos una Productora Audiovisual con más de 30 años de experiencia en cubrir la producción y
            postproducción de eventos en el mercado peruano, asegurándonos de entregar la mejor calidad en foto, video e
            impresiones, gracias a que contamos con nuestros propios equipos de última tecnología.</p>

        <p>liderando la industria audiovisual en el mercado peruano. Somos una productora especializada
            en la producción y postproducción de eventos, utilizando tecnología de vanguardia y equipos audiovisuales de
            última generación, incluyendo drones para tomas aéreas, streaming en vivo para llegar a audiencias globales y
            experiencias inmersivas con tour 360. Nuestro enfoque se centra en ofrecer servicios de máxima calidad en
            fotografía, video e impresiones.</p>
        <br>
        <!-- Row -->
        <!-- Row -->
        <div class="content-row light-section" data-bgcolor="#fff">
            <h5>Nuestros Inicios</h5>
            <p>Todo inicia un "fecha" en la ciudad de lima, con nuestro <span class="has-hover-image hide-ball"
                    data-img="/assets/historiaforma.webp">primer local</span> teniendo como fundador de la empre a <span
                    class="has-hover-image vertical hide-ball" data-img="/assets/historiaforma.webp">many times</span> you
                want in each paragraph.</p>
        </div>
        <!--/Row -->

        <!-- Row -->
        <div class="content-row row_padding_left row_padding_right full light-section change-header-color"
            data-bgcolor="#fff">

            <div class="one_fourth"></div>

            >

            <div class="one_fourth last"></div>

            <hr>

            <div class="one_fourth">
                <h3 class="has-animation has-icon">Misión</h3>
            </div>

            <div class="two_fourth" style="border-radius: 30px">
                <p class="has-animation" data-delay="50"><mark>➤ Ser el socio estratégico de nuestros clientes con
                        personal profesional, planificando, asesorando y ayudando a sus clientes, enfatizando la
                        gestión audiovisual y brindando soluciones adaptada al éxito de nuestros clientes.</mark></p>
            </div>

            <div class="one_fourth last"></div>

            <div class="one_fourth">
                <h3 class="has-animation has-icon">Visión</h3>
            </div>

            <div class="two_fourth">
                <p class="has-animation" data-delay="50"><mark>➤ Ser la mejor consultora audiovisual a
                        nivel departamental y nacional con el mejor staff audiovisual brindando confianza y
                        seguridad a nuestros clientes.</mark></p>
            </div>

            <div class="one_fourth last"></div>

            <hr>

        </div>
        <!--/Row -->

        <div class="content-row row_padding_bottom light-section" data-bgcolor="#fff">

            <h5 class="has-mask no-margins">Somos especialistas en:</h5>

            <hr>

            <dl class="accordion has-animation">
                <dt>
                    <span class="link">
                        <div>✘ Sesiones fotográficas</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Nuestro servicio de sesiones fotográficas es tu puerta de entrada a la
                    creación de recuerdos invaluables. Desde retratos íntimos hasta eventos grandiosos, estamos aquí para
                    capturar la esencia de cada momento. Con una atención meticulosa al detalle y una pasión por la
                    excelencia, te guiaremos a través de cada fase, asegurando que tus imágenes sean verdaderamente
                    memorables. Confía en nosotros para transformar tus momentos en recuerdos que perdurarán toda la vida.
                    ¡Contáctanos hoy mismo y comencemos a crear magia juntos!</dd>

                <dt>
                    <span class="link">
                        <div>✘ Photobooks y Anuarios</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Nuestro servicio de Photobooks y Anuarios es la manera perfecta de dar vida a
                    tus recuerdos más preciados. Con una combinación de diseño creativo y calidad excepcional, transformamos
                    tus imágenes en obras maestras que perdurarán para siempre. Ya sea que estés buscando conservar los
                    momentos especiales de un evento, el crecimiento de tu familia o simplemente quieras revivir tus
                    aventuras más memorables, estamos aquí para hacerlo realidad. Confía en nosotros para crear un libro que
                    cuente tu historia de una manera única y emocionante. ¡Contáctanos hoy mismo y comienza a crear tu
                    legado visual!</dd>

                <dt>
                    <span class="link">
                        <div>✘ Servicios de video</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Desde eventos emocionantes hasta historias personales, nuestro equipo experto
                    transforma cada momento en una obra maestra visual. Con una combinación de habilidades creativas y
                    tecnología de vanguardia, creamos videos que no solo cuentan tu historia, sino que también la hacen
                    vibrar con emoción y autenticidad. Confía en nosotros para capturar cada detalle y crear un video que te
                    transporte de vuelta a esos momentos inolvidables una y otra vez. ¡Contáctanos hoy mismo y déjanos dar
                    vida a tus recuerdos en movimiento!</dd>

                <dt>
                    <span class="link">
                        <div>✘ Servicios de dron</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Ofrecemos una perspectiva única y espectacular de tus momentos más
                    importantes.
                    Desde impresionantes paisajes hasta eventos emocionantes, nuestro equipo de pilotos expertos utiliza la
                    última tecnología en drones para capturar imágenes aéreas de alta calidad que dejarán una impresión
                    duradera. Ya sea que estés planeando una boda, un evento corporativo o simplemente quieras destacar tu
                    propiedad desde nuevas alturas, estamos aquí para hacerlo realidad. Con un enfoque en la seguridad y la
                    precisión, garantizamos resultados impresionantes que superarán tus expectativas. ¡Contáctanos hoy mismo
                    y déjanos elevar tus proyectos a nuevos niveles!</dd>
            </dl>

        </div>
        <!--/Row -->

        <!-- Row -->
        <div class="content-row row_padding_left row_padding_right full light-section change-header-color"
            data-bgcolor="#fff">

            <div class="one_fourth"></div>

            <div class="two_fourth">
                <h3 class="big-title has-mask-fill">Nuestro Equipo</h3>
            </div>

            <div class="one_fourth last"></div>

            <hr>


            <div class="one_fourth">

            </div>

            <div class="two_fourth">
                <p class="has-animation" data-delay="50">En Forma Producciones Audiovisuales contamos con un
                    equipo altamente calificado.</p>
            </div>

            <div class="one_fourth last"></div>

            <hr>

        </div>
        <!--/Row -->
    </div>
    <!--/Row -->

    <!-- Row -->
    <div class="content-row row_padding_bottom row_padding_left row_padding_right full light-section change-header-color"
        data-bgcolor="#fff">

        <div class="one_fourth"></div>

        <div class="three_fourth last">

            <ul class="team-members-list" data-fx="1">
                <li class="link has-hover-image" data-img="/assets/perfil.webp">
                    <div class="team-member has-animation">
                        <div>Maldonado Carlos</div><span>Gerente General</span>
                    </div>
                </li>
                <li class="link has-hover-image" data-img="/assets/perfil.webp">
                    <div class="team-member has-animation">
                        <div>Collado Diana</div><span>Gerenta Administrativa</span>
                    </div>
                </li>
                <li class="link has-hover-image" data-img="/assets/perfil.webp">
                    <div class="team-member has-animation">
                        <div>Parejas Luis</div><span>Producción Tecníco Operador</span>
                    </div>
                </li>
                <li class="link has-hover-image" data-img="/assets/perfil.webp">
                    <div class="team-member has-animation">
                        <div>Agreda Angel</div><span>Contador</span>
                    </div>
                </li>
            </ul>

        </div>

    </div>
    <!--/Row -->
    <!-- Row -->
    <div class="content-row row_padding_bottom light-section text-align-center" data-bgcolor="#fff">

        <h3>Nuestros Premios</h3>
        <p>En Forma Producciones Audiovisuales Nos preocupamos por realizar un trabajo excepcional para su empresa.</p>

        <hr>

        <div class="swiper-container content-looped-carousel has-animation autocenter light-cursor" data-delay="0">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-img"><img src="/assets/nosotros/premios/premio1.webp" alt="Image Title"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-img"><img src="/assets/nosotros/premios/premio2.webp" alt="Image Title"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-img"><img src="/assets/nosotros/premios/premio3.webp" alt="Image Title"></div>
                </div>
            </div>
            <div class="slider-button-next"></div>
            <div class="slider-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <!--/Row -->
@endsection

@section('adds')
@endsection
