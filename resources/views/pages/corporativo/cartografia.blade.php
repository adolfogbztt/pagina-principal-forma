@php

    $title = '';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Cartografia · Cartografia ·';
    $img_hero = '/assets/drone/1cartografia.jpeg';
    $description = 'Intrigued by beauty, fascinated by technology and
                    fuelled with an everlasting devotion to digital craftsmanship and
                    meaningful aesthetics.';
    /*END HERO SECTION*/

    /*CONTENT SECTION*/
    $content_color = 'light'; // 'dark' || 'light'
    $content_data_bgcolor = $content_color == 'light' ? '#fff' : '#000'; // 'dark' || 'light'
    /*CONTENT SECTION*/
@endphp

@extends('layouts.articulo', ['title' => $title, 'img_hero' => $img_hero, 'text_move' => $text_move, 'description' => $description, 'color' => $color])

@section('content')
    <!-- Row -->
    <div class="content-row row_padding_top row_padding_bottom {{ $content_color }}-section change-header-color"
        data-bgcolor="{{ $content_data_bgcolor }}">

        <div class="one_fourth"></div>

        <div class="two_fourth">
            <h1 class="has-mask-fill">Project Challenge</h1>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Objective</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">There are many variations of passages of Lorem Ipsum available, but the
                majority have suffered alteration in some form, by injected humour, or randomised words which don't look
                even slightly believable. If you are going to use a passage of Lorem Ipsum.<br><br>You need to be sure there
                isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses
                a dictionary with Latin words.<br><br>Combined with a handful of model sentence structures, to generate
                Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
                injected humour, or non-characteristic words.</p>
        </div>

        <div class="one_fourth last"></div>

    </div>
    <!--/Row -->
@endsection

@section('adds')
    <div class="content-row full dark-section" data-bgcolor="#000">
        <figure class="has-parallax has-parallax-content" data-delay="100">
            <img src="https://www.clapat.com/templates/humpton/images/projects/ladies01.jpg" alt="Image Title">
            <div class="parallax-image-content content-max-width text-align-center">
                <div class="outer">
                    <div class="inner">
                    </div>
                </div>
            </div>
        </figure>
    </div> 
@endsection
