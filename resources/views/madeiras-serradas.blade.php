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
                <a class="card-segmentos">
                    <div class="front-segmentos">
                        <p class="txt-front-oque">Conheça as Madeiras Serradas Ecoplac</p>
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <div class="back-segmentos">
                        <div>
                            <p class="sub-title_produtos">As madeiras serradas são produtos que possuem as mais variadas
                                possibilidades
                                de
                                aplicação, estas são madeiras duráveis e resistentes, que podem ser utilizadas desde a
                                construção de
                                casas,
                                até a decoração.
                            </p>
                            <p class="sub-title_produtos">Todas as madeiras serradas são oriundas de reflorestamento,
                                portanto, são de
                                origem limpa e sustentável.</p>
                        </div>
                    </div>
                </a>
                <a class="card-segmentos">
                    <div class="front-segmentos">
                        <p class="txt-front-oque">Onde as Madeiras Serradas podem ser usadas?</p>
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <div class="back-segmentos">
                        <div>
                            <p class="sub-title_produtos">As madeiras serradas são ótimas opções para escoramento de
                                lajes e também
                                auxiliam
                                no empilhamento de produtos para transporte.
                            </p>
                            <p class="sub-title_produtos">Além disso, as madeiras serradas têm tido muita procura
                                por entusiastas e
                                profissionais de decoração para a confecção de pallets, que se popularizaram na
                                fabricação de móveis
                                rústicos.
                            </p>
                        </div>

                    </div>
                </a>
            </div>
        </div>
    </div>

</section>

<section class="content">
    <div class="conteudo">
        <div class="title">Conheça nossa linha de Madeiras Serradas</div>
        <div class="container accordion">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#pontalete"
                                aria-expanded="true" aria-controls="pontalete">
                                Pontalete
                            </a>
                        </h4>
                    </div>

                    <div id="pontalete" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/pontalete.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('ms.pontalete') }}">Saiba Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        O pontalete, conhecido também como “escora”, é muito utilizado na construção
                                        civil,
                                        para escoramento de lajes, pés de andaimes, entre outros. Pode ser bruto ou
                                        aplainado, e também produzido em madeira de eucalipto ou pinus.
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas e Espessuras:</label>
                                        <p> 70x70mm – 1400 / 1700 </p>
                                        <p> 75x75mm – 1700 / 2000 / 2300 / 2500 </p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Ideal para:</label>
                                        <p>– Construção Civil.</p>
                                        <p> – Fabricação de mesas e cadeiras.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#ripa" aria-expanded="false" aria-controls="ripa">
                                Ripa
                            </a>
                        </h4>
                    </div>
                    <div id="ripa" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/ripa.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('ms.ripa') }}">Saiba
                                            Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        Confeccionada em madeira de Pinus, é normalmente empregada em transportes
                                        rodoviários e exportação de produtos leves e pesados. Também ideais para
                                        empilhamento e transportes de sacaria, bem como produtos muito pesados. Pode ser
                                        bruta ou aplainada.
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Comprimento:</label>
                                        <p> 1700 / 2000 / 2300 / 2500</p>
                                        <label for=""> Espessuras: </label>
                                        <p>10mm, 15mm, 20mm, 25mm, 30mm.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Ideal para:</label>
                                        <p>– Construção Civil.</p>
                                        <p>– Empilhamento de produtos para transporte.</p>
                                    </div>
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
