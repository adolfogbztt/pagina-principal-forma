<div class="content-row row_padding_bottom light-section" data-bgcolor="#fff">
    <br><br>
    <h3 class="has-mask no-margins">Preguntas y Respuestas Frecuentes</h3>

    <dl class="accordion bigger-acc has-animation">
        @foreach($faq as $fq)
        <dt>
            <span class="link">
                <h4>{{$fq['pregunta']}}</h4>
            </span>
            <div class="acc-icon-wrap parallax-wrap">
                <div class="acc-button-icon parallax-element">
                    <i class="fa fa-turn-down"></i>
                </div>
            </div>
        </dt>

        <dd class="accordion-content">
            {{$fq['respuesta']}}
        </dd>
        @endforeach

    </dl>

</div>
