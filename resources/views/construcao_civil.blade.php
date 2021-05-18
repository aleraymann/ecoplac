@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="item">
        <img src="/img/ecoplac_banner_eco.jpg" alt="" style="width:100%;">
    </div>
</section>
<section class="content">
    <div class="parallax_claro">
        <div class="conteudo">
            <p class="sub-title4">
                Neste segmento, utiliza-se uma vasta diversidade de madeiras. No entanto, a preferência na construção
                civil se dá pelo madeirite, já que este material pode ser usado tanto na confecção de tapumes, como em
                fôrmas de concreto e bandejas de contenção de resíduos.
            </p>
            <p class="sub-title4">
                O uso do Madeirite Plastificado é aplicado também em fábricas de confecção de blocos para concreto,
                podendo ser usado até mesmo na armazenagem destes blocos.
            </p>
            <p class="sub-title4">
                O Madeirite também é utilizado em linhas externas de construções, como em portas lisas que possibilitam
                pintura e envernização. Este tipo de material é amplamente utilizado na construção de casas populares, e
                no projeto Minha Casa Minha Vida, do Governo Federal.
            </p>
        </div>
    </div>
</section>
<section class="content">
    <div class="conteudo">
        <div class="title">
            <b> Madeiras mais utilizadas na Construção Civil</b>
        </div>
        <div class="segmentos">
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/madeirite-plastificado1.png">
                    <p class="txt-front">Madeirite Plastificado</p>
                    <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>O Madeirite Plastificado é recomendado para fôrmas de concreto aparente, divisórias,
                            alojamentos temporários, entre outros</p>
                        <div class="button"><a href="{{ route('m.plastificado') }}""> Mais Detalhes</a></div>
                    </div>
                </div>
            </div>
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/madeirite-antiderrapante.png)">
                    <p class="txt-front">Madeirite Plastificado Antiderrapante</p>
                    <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos segmentos">
                    <div>
                        <p>Utilizado para pisos em geral, como carrocerias, trailers, pisos de eventos e arquibancadas,
                            bem como na Construção Civil</p>
                            <div class="button"><a  href="{{ route('mp.antiderrapante') }}"> Mais Detalhes</a></div>
                    </div>

                </div>
</div>
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/madeirite-plastificado1.png)">
                    <p class="txt-front">Madeirite Plastificado Extra</p>
                    <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>Este material é calibrado para obter um melhor acabamento na aplicação do papel fenólico,
                            entre outros tratamentos que resultam em uma madeira de maior qualidade</p>
                        <div class="button"><a href="{{ route('mp.extra') }}"> Mais Detalhes</a></div>
                    </div>
                </div>
            </div>

            <div class="card-segmentos" href="{{ route('m.resinado-wbp') }}">
                <div class="front-segmentos" style="background-image: url(/img/madeirite-resinado-wbp.png)">
                    <p class="txt-front">Madeirite Resinado (WBP)</p>
                    <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>Recomendado para fôrmas de concreto não aparentes, construção de alojamentos temporários,
                            bandejas de proteção, lajes, tapumes, embalagens, etc.</p>
                        <div class="button"><a href="{{ route('m.resinado-wbp') }}"> Mais Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-segmentos" href="{{ route('m.resinado-mr') }}">
                <div class="front-segmentos" style="background-image: url(/img/madeirite-resinado-mr.png)">
                    <p class="txt-front">Madeirite Resinado MDR</p>
                    <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>Recomendado para uso interno ou utilizações rápidas em fôrmas de concreto, tapumes,
                            barracões, bandejas, divisórias, alojamentos temporários, entre outros</p>
                        <div class="button"><a href="{{ route('m.resinado-mr') }}"> Mais Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/compen-pinus.png)">
                    <p class="txt-front">Compensado Pinus Embalagem</p>
                      <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>Este tipo de chapa de madeira não recebe acabamento, o que resulta em um produto de baixo
                            custo. São recomendados na fabricação de embalagem, tanto no uso interno quanto no uso
                            externo</p>
                        <div class="button"><a href="{{ route('c.embalagem') }}"> Mais Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
