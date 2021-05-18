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
            A indústria moveleira no Brasil é responsável por 3,7% da produção mundial de móveis, e a exportação do mobiliário produzido no Brasil cresce a cada ano. Isso se dá, certamente, pela qualidade dos produtos, aliado à oscilação do dólar.

            </p>
            <p class="sub-title4">
            Um dos fatores que tornam o preço dos móveis do Brasil ainda mais acessíveis, é o baixo custo da madeira reflorestada, quesito extremamente importante não somente para se obter mais lucro, como também contribuir com a redução de impactos ambientais.

            </p>
            <p class="sub-title4">
            Na Ecoplac, nós prezamos pela qualidade da madeira, mesmo a que é usada em estrutura interna, como na fabricação de estofados e camas. Confira nossas opções de madeiras para a Indústria Moveleira.

            </p>
        </div>
    </div>
</section>
<section class="content">
    <div class="conteudo">
        <div class="title">
            <b> Madeiras mais utilizadas na Indústria Moveleira</b>
            
        </div>
        <div class="segmentos">
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/compen-industrial.png)">
                    <p class="txt-front">Compensado Industrial</p>
                    <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>O compensado industrial é um painel de extrema versatilidade, e que oferece ótimo acabamento
                            em qualquer utilização. Na confecção de embalagens o compensado industrial garante uma boa
                            estética, aliado à resistência.</p>
                        <div class="button"><a href="{{ route('c.industrial') }}"> Mais
                                Detalhes</a></div>
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
                        <p>O compensado pinus embalagem é um painel cujas faces não recebem acabamento, o que torna o
                            material mais econômico. Este tipo de madeira é resistente a impactos, preservando com
                            segurança o conteúdo que se encontra dentro da embalagem
                        </p>
                        <div class="button"><a href="{{ route('c.embalagem') }}"> Mais
                                Detalhes</a></div>
                    </div>
                </div>
            </div>
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/compen-parica.png)">
                    <p class="txt-front">Compensado Moveleiro Virola (Paricá)</p>
                    <i class="fas fa-sync-alt segmentos"></i>
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
