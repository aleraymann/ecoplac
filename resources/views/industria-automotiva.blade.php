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
                Na indústria automobilística também há a necessidade de incluir peças de madeira. O compensado, neste
                ramo, é utilizado para o revestimento de carrocerias, e também é aplicado no piso/assoalho e laterais em
                veículos, principalmente utilitários.

            </p>
            <p class="sub-title4">
                Ao utilizar o compensado na forração ou revestimento, há um maior e melhor isolamento entre o interior e
                exterior do veículo ou da carroceria.

            </p>
            <p class="sub-title4">
                O compensado usado neste segmento não sofre com dilatações ou contrações, o que proporciona ao
                equipamento uma maior segurança, pois não causa danos na estrutura com o passar do tempo.

            </p>
            <p class="sub-title4">
                Na Ecoplac nós temos a linha ideal de madeira para usar na indústria automotiva, e as peças podem ser
                solicitadas no tamanho que precisar.
            </p>
        </div>
    </div>
</section>
<section class="content">
    <div class="conteudo">
        <div class="title">
            <b> Madeiras mais utilizadas na Indústria Automotiva</b>
        </div>
        <div class="segmentos">
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/compen-pinus.png)">
                    <p class="txt-front">Compensado Pinus Embalagem</p>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>O compensado pinus embalagem é um painel cujas faces não recebem acabamento, o que torna o
                            material mais econômico. Este tipo de madeira é resistente a impactos, oferecendo mais
                            segurança em seu uso.
                        </p>
                        <div class="button"><a href="{{ route('c.embalagem') }}"> Mais
                                Detalhes</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
