@extends('layouts.default', [
    'title' => 'Forma Producciones',
    'description' => 'Forma Producciones Audiovisuales: Su socio confiable en el ámbito empresarial.
    Con más de 30 años de experiencia, ofrecemos soluciones audiovisuales excepcionales
    para empresas y eventos corporativos. Desde sesiones fotográficas hasta servicios de dron,
    garantizamos calidad superior y asesoramiento personalizado para llevar su visión empresarial al siguiente nivel.',
    'faq' => $faq,
])

@section('hero')
    @include('components.corporativo.hero-corporativo')
@endsection


@section('content')
    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-pro-audiovisual')
    </div>
    {{-- <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.corporativo.section-drone')
    </div> --}}

    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.corporativo.section-pro-grafica')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-pro-eventos')
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-pachacamac')
    </div>
    
    <div class="content-row full light-section" data-bgcolor="#fff">
        @include('components.corporativo.section-faq', ['faq' => $faq])
    </div>

    <div class="content-row full dark-section" data-bgcolor="#000">
        @include('components.corporativo.section-clientes')
    </div>
@endsection
