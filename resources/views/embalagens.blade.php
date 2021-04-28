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
                As embalagens de madeira tem como principal função transportar produtos frágeis, ou que precisam chegar
                ao destino final sem qualquer avaria. Este modelo de embalagem é utilizado principalmente no transporte
                de frutas, verduras e vidros, por exemplo.

            </p>
            <p class="sub-title4">
                As empresas que optam pela madeira para transportar seus produtos, acabam contando com vários outros
                benefícios, como: utilizar material renovável que não agride o meio ambiente, ganhar durabilidade e
                resistência, que resultam em uma maior segurança, fácil manuseio e utilização, e também mais economia,
                pois o material oferece possibilidades de reutilização.

            </p>
            <p class="sub-title4">
                A embalagem de madeira é a escolha ideal para o transporte de produtos que não oferecem um padrão
                regular de tamanho, e assim, as embalagens podem ser feitas sob medida, ou montadas da forma necessária
                para acomodar os itens em segurança.

            </p>
        </div>
    </div>
</section>
<section class="content">
    <div class="conteudo">
        <div class="title">
            <b> Madeiras mais utilizadas na confecção de embalagens</b>
        </div>
        <div class="segmentos">
            <a class="card-segmentos" href="{{ route('c.industrial') }}">
                <div class="front-segmentos" style="background-image: url(/img/compen-industrial.png)">
                    <p class="txt-front">Compensado Industrial</p>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>O compensado industrial é um painel de extrema versatilidade, e que oferece ótimo acabamento
                            em qualquer utilização. Na confecção de embalagens o compensado industrial garante uma boa
                            estética, aliado à resistência.</p>
                        <button class="button">Mais Detalhes</button>
                    </div>
                </div>
            </a>
            <a class="card-segmentos" href="{{ route('c.embalagem') }}">
                <div class="front-segmentos" style="background-image: url(/img/compen-pinus.png)">
                    <p class="txt-front">Compensado Pinus Embalagem</p>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>O compensado pinus embalagem é um painel cujas faces não recebem acabamento, o que torna o
                            material mais econômico. Este tipo de madeira é resistente a impactos, preservando com
                            segurança o conteúdo que se encontra dentro da embalagem
                        </p>
                        <button class="button">Mais Detalhes</button>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="/js/app.js"></script>
