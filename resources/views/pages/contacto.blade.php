@php

    $title = 'Politicas de Cookies';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Contacto · Contacto ·';
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
    <!-- Row -->
    <div class="content-row row_padding_top light-section" data-bgcolor="#fff">

        <h6 class="has-icon">Conversemos</h6>

        <hr><br>

        <h1 class="has-mask-fill no-margins">Ponte</h1>
        <h1 class="has-mask-fill">En Contacto</h1>

        <hr><br>

    </div>
    <!--/Row -->
    <!-- Row -->
    <div class="content-row light-section" data-bgcolor="#fff">

        <div class="one_third has-animation" data-delay="100">

            <div class="box-icon-wrapper block-boxes">
                <div class="box-icon">
                    <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                </div>
                <div class="box-icon-content">
                    <h5 class="no-margins"><a href="mailto:office@framework.com"
                            class="link"><span>imagen@formaproducciones.com</span></a></h5>
                    <p>Email Corporativo</p>
                </div>
            </div>

        </div>

        <div class="one_third has-animation" data-delay="200">

            <div class="box-icon-wrapper block-boxes">
                <div class="box-icon">
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                </div>
                <div class="box-icon-content">
                    <h5 class="link">Calle Cerro Prieto, 429 - Santiago de Surco</h5>
                    <p>Ubicación</p>
                </div>
            </div>

        </div>

        <div class=" one_third last has-animation" data-delay="300">

            <div class="box-icon-wrapper block-boxes">
                <div class="box-icon">
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                </div>
                <div class="box-icon-content">
                    <h5 class="no-margins">(+51) 998032690 - 012561244 - 012751312</h5>
                    <p>Teléfono</p>
                </div>
            </div>

        </div>

    </div>
    <!--/Row -->
    <!-- Row -->
    <div class="content-row row_padding_bottom light-section" data-bgcolor="#fff">

        <hr><br>

        <h4 class="has-mask-fill no-margins">Escribenos</h4>
        <h5 class="has-mask-fill">Complete el siguientes formulario</h5>

        <hr><br>

        <!-- Contact Formular -->
        <div id="contact-formular">

            {{-- <div id="message"></div> --}}

            <form method="post" action="contact.php" name="contactform" id="contactform">
                <div class="name-box has-animation" data-delay="100">
                    <input name="name" type="text" id="name" size="30" value=""
                        placeholder="Nombre Completo"><label class="input_label"></label>
                </div>
                <div class="email-box has-animation" data-delay="150">
                    <input name="email" type="text" id="email" size="30" value=""
                        placeholder="Email"><label class="input_label"></label>
                </div>
                <div class="message-box has-animation" data-delay="100">
                    <textarea name="comments" cols="40" rows="4" id="comments" placeholder="Escribe tus dudas"></textarea><label class="input_label slow"></label>
                </div>

                {{-- <div class="verify-box has-animation" data-delay="100">                                        
                <ul class="verify-sum">
                    <li>1</li>
                    <li>+</li>
                    <li>3</li>
                    <li>=</li>
                </ul>
                <input name="verify" type="text" id="verify" size="4" value=""/>
                <p class="required"><span>*</span> Captcha Validation</p>
            </div> --}}

                <div class="button-box has-animation" data-delay="100">
                    <div class="clapat-button-wrap parallax-wrap">
                        <div class="clapat-button parallax-element">
                            <div class="button-border outline parallax-element-second"><input type="submit"
                                    class="send_message" id="submit" value="Enviar" /></div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!--/Contact Formular -->
    </div>
    <!--/Row -->
@endsection

@section('adds')
@endsection
