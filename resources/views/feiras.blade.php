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
                A perfeita execução de stands e estruturas em feiras e eventos podem exercer grande influência na imagem
                da empresa, e consequentemente, na execução dos negócios. E para apresentar a melhor imagem, é
                necessário investir em produtos de qualidade.

            </p>
            <p class="sub-title4">
                Além disso, as empresas que trabalham especificamente com locação de estruturas precisam pensar na
                estratégia mais vantajosa para se ter mais lucros, por isso, a melhor saída é optar por materiais
                reutilizáveis, que mantenham sua qualidade e estética mesmo após o decorrer do uso.

            </p>
            <p class="sub-title4">
                Por isso, para que seja possível desenvolver a estrutura com qualidade estética, durabilidade e
                resistência, é preciso conhecer os diferentes tipos de madeiras e os seus fins. Conheça as nossas opções
                para feiras, eventos e stands.

            </p>
        </div>
    </div>
</section>
<section class="content">
    <div class="conteudo">
        <div class="title">
            <b> Madeiras mais utilizadas em Feiras, Eventos e Stands</b>
        </div>
        <div class="segmentos">
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/madeirite-plastificado1.png">
                    <p class="txt-front">Madeirite Plastificado</p>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>O Madeirite Plastificado é recomendado para fôrmas de concreto aparente, divisórias,
                            alojamentos temporários, entre outros</p>
                        <div class="button"><a href="{{ route('m.plastificado') }}"> Mais Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/madeirite-antiderrapante.png)">
                    <p class="txt-front">Madeirite Plastificado Antiderrapante</p>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>Utilizado para pisos em geral, como carrocerias, trailers, pisos de eventos e arquibancadas,
                            bem como na Construção Civil</p>
                        <div class="button"><a href="{{ route('mp.antiderrapante') }}"> Mais
                                Detalhes</a></div>
                    </div>

                </div>
            </div>
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/madeirite-plastificado1.png)">
                    <p class="txt-front">Madeirite Plastificado Extra</p>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>Este material é calibrado para obter um melhor acabamento na aplicação do papel fenólico,
                            entre outros tratamentos que resultam em uma madeira de maior qualidade</p>
                        <div class="button"><a href="{{ route('mp.extra') }}"> Mais Detalhes</a></div>
                    </div>
                </div>
            </div>
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/compen-parica.png)">
                    <p class="txt-front">Compensado Moveleiro Virola (Paricá)</p>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>A virola é uma madeira branca de superfície lisa, pois sua principal característica é o fato
                            de ela não possuir nós. Por este motivo, ela é mais utilizada na capa e contracapa do
                            compensado.
                        </p>
                        <div class="button"><a href="{{ route('c.moveleiro-parica') }}"> Mais
                                Detalhes</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="/js/app.js"></script>
