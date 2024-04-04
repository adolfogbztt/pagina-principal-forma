@extends('layouts.default')

@section('hero')
    @include('components.corporativo.hero-corporativo')
@endsection


@section('content')
    <div class="content-row full light-section" data-bgcolor="#fff">

        @include('components.corporativo.section-drone')
    </div>

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.corporativo.section-fotografia')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-videocorporativo')
    </div>

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.corporativo.section-produccion')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-streaming-tour360')
    </div>

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.corporativo.section-impresion')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-catering')
    </div>

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.corporativo.section-faq')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-clientes')
    </div>
@endsection
