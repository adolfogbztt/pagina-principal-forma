@php

    $title = 'Titulos & Diplomas';

    /*HERO SECTION*/
    $color = 'dark'; // 'dark' || 'light'
    $text_move = ' Titulos & Diplomas · Titulos & Diplomas ·';
    $img_hero = '/assets/video-corporativo/conferencias.jpeg';
    $description = 'Los títulos y diplomas son mucho más que simples piezas de papel; representan 
                    el fruto de nuestro arduo trabajo, dedicación y sacrificio. Ya sea un diploma 
                    universitario que marca el final de años de estudio o un título profesional que 
                    abre puertas en el mundo laboral, estas certificaciones son testigos tangibles de 
                    nuestros logros y nos acompañan en cada paso de nuestra trayectoria.';
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
            <h3 class="has-mask-fill">¡Honrando Logros: La Importancia de los Títulos y Diplomas!</h3>
        </div>

        <div class="one_fourth last"></div>

        <hr>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">El Valor de la Educación:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los títulos educativos son una manifestación tangible de nuestro compromiso con el aprendizaje y el crecimiento personal. Desde los primeros años de escolaridad hasta la educación superior, cada título obtenido es un hito en nuestro viaje hacia el conocimiento y la excelencia académica. Además de proporcionar conocimientos y habilidades específicas, los títulos educativos también son una puerta de entrada a oportunidades laborales y profesionales que de otro modo podrían estar fuera de nuestro alcance.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">El Reconocimiento Profesional:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los títulos profesionales son un símbolo de competencia y experiencia en un campo específico. Ya sea un certificado que demuestra habilidades técnicas o un título que otorga credibilidad en una profesión, estas certificaciones son valiosas herramientas para avanzar en nuestra carrera y destacarnos en un mercado laboral cada vez más competitivo. Los empleadores valoran los títulos y diplomas como indicadores de capacidad y compromiso, lo que puede traducirse en mayores oportunidades de empleo y progreso profesional.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Celebrando el Éxito:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">La obtención de un título o diploma es motivo de celebración y orgullo. Es el resultado de horas de estudio, sacrificio y dedicación, y merece ser reconocido y celebrado adecuadamente. En Forma Producciones Audiovisuales, entendemos la importancia de este momento y ofrecemos servicios de impresión personalizados para títulos y diplomas que reflejen la importancia y el prestigio de este logro. Desde el diseño hasta la calidad del papel, cada detalle se cuida con esmero para crear un documento que honre adecuadamente tus esfuerzos y logros.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Preservando el Legado:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Los títulos y diplomas no solo son documentos importantes en el presente, sino también reliquias del pasado que merecen ser preservadas para las generaciones futuras. Con nuestra ayuda, puedes crear copias enmarcadas o álbumes conmemorativos que no solo protejan tus certificaciones de manera segura, sino que también sirvan como testimonio de tu legado para las generaciones venideras. Ya sea exhibido en tu hogar u oficina, tu título o diploma será un recordatorio constante de tus logros y del camino que has recorrido para alcanzarlos.</p>
        </div>

        <div class="one_fourth">
            <h6 class="has-animation has-icon">Conclusión:</h6>
        </div>

        <div class="two_fourth">
            <p class="has-animation" data-delay="100">Ya sea un título educativo que marca el final de una etapa académica o un diploma profesional que abre nuevas oportunidades en el mundo laboral, los títulos y diplomas son testigos tangibles de nuestros logros y esfuerzos. En Forma Producciones Audiovisuales, estamos comprometidos a ayudarte a celebrar y preservar estos momentos especiales de una manera significativa y memorable. Permítenos ser parte de tu historia y ayudarte a dar el reconocimiento que tus logros merecen.</p>
        </div>


        <div class="one_fourth last"></div>

    </div>
    <!--/Row -->
@endsection

@section('adds') @endsection
