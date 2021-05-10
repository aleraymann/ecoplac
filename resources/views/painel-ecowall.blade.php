@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="item">
        <img src="/img/ecoplac_banner_eco.jpg" alt="" style="width:100%;">
    </div>
</section>
<section class="content">
    <div class="parallax_madeirite">
        <div class="conteudo">
            <div class="segmentos">
                <a class="card-ecowall">
                    <div class="front-segmentos">
                        <p class="txt-front-oque">O que é o Painel Ecowall?</p>
                    </div>
                    <div class="back-segmentos">
                        <div class="">
                            <p class="sub-title_produtos grande">O Painel Ecowall é uma Placa Cimentícia de alta resistência,
                                composto por
                                miolo
                                maciço de madeira de pinus sarrafeada, revestida com 2 placas de fibrocimento coladas e
                                prensadas,
                                totalmente livre de amianto.Produzida com a moderna tecnologia CRFS (Cimento Reforçado
                                com Fio Sintético),
                                os
                                painéis são confeccionados com materiais ecologicamente corretos. Este material permite
                                infinitas formas
                                de
                                acabamento, de rápida aplicação e sem desperdícios.
                            </p>
                            <p class="sub-title_produtos grande">Ele suporta cargas distribuídas e impactos, é resistente a
                                umidade, possui bom
                                comportamento elástico e ao fogo e excelente condicionamento térmico natural, que
                                oportuniza melhores
                                condições de conforto térmico e acústico.
                            </p>
                            <p class="sub-title_produtos grande">Por sua fácil instalação, limpeza e manutenção com
                                possibilidade de pintura o
                                Painel Ecowall da Ecoplac é indicado para diversos ambientes, pois oferece os mais
                                variados tipos de
                                acabamento, além de oferecer maior rapidez em sua montagem, mais qualidade e melhor
                                custo/benefício na
                                sua
                                obra.
                            </p>
                        </div>
                    </div>
                </a>
                <a class="card-ecowall">
                    <div class="front-segmentos">
                        <p class="txt-front-oque">Vantagens do Painel Ecowall</p>
                    </div>
                    <div class="back-segmentos">
                        <div>
                            <p class="sub-title_produtos">- Maior resistência a impactos</p>
                            <p class="sub-title_produtos">- Boa aderência a vários tipos de acabamento</p>
                            <p class="sub-title_produtos">- Oferece mais rapidez na montagem</p>
                            <p class="sub-title_produtos">- Resistente a umidade e interferências climáticas</p>
                            <p class="sub-title_produtos">- Imune a insetos e roedores</p>
                            <p class="sub-title_produtos">- Não apodrece</p>
                            <p class="sub-title_produtos">- Maior facilidade no corte e manuseio</p>
                            <p class="sub-title_produtos">- Suporte à mais peso</p>
                        </div>

                    </div>
                </a>
            </div>
        </div>
    </div>

</section>

<section class="content">
    <div class="conteudo">
        <div class="title">Conheça mais detalhes sobre o nosso Painel Ecowall</div>
        <div class="container accordion">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#ecowall"
                                aria-expanded="true" aria-controls="ecowall">
                                Ecowall
                            </a>
                        </h4>
                    </div>

                    <div id="ecowall" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/painel-wall1.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('ecowall-drywall') }}">Saiba
                                            Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        Os cortes devem ser feitos com equipamentos tipo Makita, com Disco de widea ou
                                        diamantados. Já nas perfurações para colocação de tomadas, passagens de
                                        tubulação,
                                        entre outras, deve ser usada furadeira elétrica com serra copo diamantada.
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2400x1200 / 2500 x 1200mm </p>
                                        <label class="especificacoes_produto"> Espessuras:</label>
                                        <p>40mm</p>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Aplicaçoes:</label>
                                        <p>– Paredes Internas (áreas secas).</p>
                                        <p> – Paredes normais steel frame e Dry wall .</p>
                                        <p> – Paredes normais steel frame e Dry wall .</p>
                                        <p> – Paredes Curvas .</p>
                                        <p> – Paredes internas (áreas molhadas) .</p>
                                    </div>
                                    <label class="especificacoes_produto"> Colagem:</label>
                                    <p>Lâminas coladas com resina fenólica WBP 100% resistente à água (WBP – weather and
                                        boil proof).</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
