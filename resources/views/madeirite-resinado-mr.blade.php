@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="parallax_madeirite">
        <div class="title_produtos">O que é o Madeirite Resinado MR (Cola Branca)</div>
        <p class="sub-title_produtos">O Madeirite Resinado MR são chapas compostas por lâminas de madeira sobrepostas em
            camadas, coladas com resina MR reutilizável PARMACOL UF 1408, que é uma cola à base de uréia e formol,
            também conhecida por cola branca.
        </p>
        <p class="sub-title_produtos">Esta cola não oferece resistência à água, por isso, o uso deste tipo de madeira é
            recomendado em áreas internas, com pouca ou nenhuma exposição à umidade.
        </p>
        <p class="sub-title_produtos">O nosso compensado Resinado MR (cola branca) é produzido com lâminas rigorosamente
            selecionadas, todas originadas de reflorestamento, e apesar de não ser à prova d’água, ele alcança a
            resistência e durabilidade exigida no mercado.
        </p>


        <div class="title_produtos_2">Onde o Madeirite Resinado MR é utilizado </div>
        <p class="sub-title_produtos">O Madeirite Resinado MR é indicado no uso interno da construção civil, em
            edificações no sistema a seco ou em qualquer área que não exija o uso de água ou outros materiais úmidos.

        </p>
        <p class="sub-title_produtos">Ele também é utilizado na fabricação de móveis, prateleiras, pisos, forrações,
            repartições, revestimentos, embalagens, caixas, tapumes, fôrmas de concreto não aparentes, entre outros.
        </p>
    </div>

</section>
<section class="content">
    <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/img/resinado/t-2.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/img/resinado/T-4.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/img/resinado/T-6.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/img/resinado/t-7.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="parallax_claro">
        <div class="title">
            <b> Vantagens do Madeirite Resinado MR</b>
        </div>
        <<p class="sub-title4">
            <b>Custo-benefício:</b> o Madeirite Resinado MR oferece um custo mais baixo em relação aos demais, no
            entanto, a sua qualidade é garantida
            </p>
            <p class="sub-title4">
                <b>Resistência: </b> embora não seja resistente à água, o Madeirite Resinado MR oferece alta resistência
                a choques e possui grande durabilidade

            </p>
            <p class="sub-title4">
                <b>Facilidade:</b> O Madeirite Resinado MR tem como uma de suas principais vantagens a facilidade de
                manuseio e também a logística para transportá-lo.

            </p>

</section>

<section class="content">
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="text-container-especificacoes">
                                <h6>Medidas Nominais</h6>
                                <p> 2200 x 1100 / 2440 x 1220mm</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="text-container-especificacoes">
                                <h6>Espessuras</h6>
                                <p> 04mm, 05mm, 06mm, 09mm, 10mm, 11mm, 12mm, 13mm, 14mm, 15mm, 17mm, 18mm, 20mm e 25mm.
                                </p>
                                <p> Outras bitolas possíveis sob
                                    consulta.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="text-container-especificacoes">
                                <h6>Colagem</h6>
                                <p> Lâminas coladas com resina fenólica WBP 100% resistente à água (WBP – weather
                                    and boil proof).</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="text-container-especificacoes">
                                <h6>Indicação</h6>
                                <p>Construção Civil</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="parallax_sugestoes">
        <div class="title_produtos">Você também pode se interessar por</div>
        <ul class="sugestoes">
            <li><a href="{{ route('m.plastificado') }}">Madeirite Plastificado</a></li>
            <li><a href="{{ route('mp.antiderrapante') }}">Madeirite Plastificado Antiderrapante</a>
            </li>
            <li><a href="{{ route('mp.extra') }}">Madeirite Plastificado Extra</a></li>
            <li><a href="{{route('m.resinado-wbp')}">Madeirite Resinado (WBP)</a></li>
        </ul>
    </div>
    <p class="sub-title2"> Fale com nossos especialistas e esclareça todas as suas dúvidas sobre o Madeirite Resinado
        MR, e solicite um orçamento.
    </p>
</section>

@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="/js/app.js"></script>
