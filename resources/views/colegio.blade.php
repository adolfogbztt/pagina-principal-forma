@extends('layouts.default')

@section('hero')
    @include('components.colegio.hero-colegio')
@endsection

@section('content')
    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.colegio.section-promociones')
    </div>

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.colegio.section-comunion')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.colegio.section-confirmacion')
    </div>

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.colegio.section-kinder')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.colegio.section-productos')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-clientes')
    </div>
@endsection
