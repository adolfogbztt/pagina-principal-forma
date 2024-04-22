@extends('layouts.eventos', [
    'description' => '
    ¡Forma Producciones Audiovisuales, expertos en capturar la esencia de cada eventos corporativos!
    Con más de 30 años de experiencia, ofrecemos servicios integrales de fotografía, video y dron.
    Nos enorgullece ser el socio estratégico para su evento, garantizando recuerdos
    inolvidables y éxito asegurado.',
    'title' => 'Forma Producciones',
])

@section('hero')
    @include('components.evento.hero-evento')
@endsection

@section('content')
    {{-- <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.evento.section-promociones')
    </div>

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.evento.section-comunion')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.evento.section-confirmacion')
    </div>

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.evento.section-kinder')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.evento.section-productos')
    </div> --}}

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-clientes')
    </div>
@endsection
