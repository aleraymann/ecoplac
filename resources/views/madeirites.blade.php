@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="parallax_madeirite">
        <div class="conteudo">
            <div class="title_produtos">O que é o Madeirite</div>
            <p class="sub-title_produtos">A Ecoplac oferece uma ampla variedade de produtos, que atendem diversos
                setores de
                produção, e aos clientes que exigem altos padrões de qualidade. Seja para o uso aparente, na construção
                civil, indústria moveleira, ou diferentes tipos de estrutura, nossos produtos atendem as mais variadas
                necessidades do mercado.
            </p>
            <div class="title_produtos_2">Onde o Madeirite pode ser usado</div>
            <p class="sub-title_produtos">O uso do madeirite é aplicado principalmente na construção civil, na
                construção de
                formas de concreto aparente, como em lajes, vigas e pilares, que exigem um acabamento uniforme, e até
                mesmo
                na vedação provisória de obras.
                O madeirite também é muito utilizado na fabricação de chão e bancos de lanchas, barcos, ônibus e até
                aeronaves.
            </p>
        </div>
    </div>

</section>

<section class="content">
    <div class="conteudo">
        <div class="title">Conheça nossos tipos de Madeirites</div>
        <div class="container">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#plastificado"
                                aria-expanded="true" aria-controls="plastificado">
                                Madeirite Plastificado
                            </a>
                        </h4>
                    </div>

                    <div id="plastificado" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/madeirite-plastificado1.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('m.plastificado') }}">Saiba
                                            Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        O Madeirite Plastificado é recomendado para formas de concreto aparente,
                                        divisórias,
                                        alojamentos temporários, entre outros.
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2200x1100 e 24400 x 12200mm. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>6mm, 10 mm, 12 mm, 14 mm, 15 mm, 16mm, 17mm, 18mm e 20mm.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Ideal para:</label>
                                        <p>– Construção Civil.</p>
                                        <p> – Fabricação de Barcos e Lanchas.</p>
                                        <p>– Fabricação de Aeronaves e Ônibus (chão e banco).</p>
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
                                href="#plastificado_anti" aria-expanded="false" aria-controls="plastificado_anti">
                                Madeirite Plastificado Antiderrapante
                            </a>
                        </h4>
                    </div>
                    <div id="plastificado_anti" class="panel-collapse collapse" role="tabpanel"
                        aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/madeirite-antiderrapante.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('mp.antiderrapante') }}">Saiba
                                            Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        O Madeirite Antiderrapante é utilizado para pisos em geral, como carrocerias,
                                        trailers, pisos de eventos e arquibancadas, bem como na Construção Civil.

                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2200x1100mm e 24400 x 12200mm. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>6mm, 10 mm, 12 mm, 14 mm, 15 mm, 16mm, 17mm, 18mm e 20mm.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Ideal para:</label>
                                        <p>– Construção Civil.</p>
                                        <p>– Pisos </p>
                                        <p>– Carrocerias</p>
                                        <p>– Containers</p>
                                        <p>– Trailers</p>
                                        <p>– Arquibancadas</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#plastificado_extra" aria-expanded="false" aria-controls="plastificado_extra">
                                Madeirite Plastificado Extra
                            </a>
                        </h4>
                    </div>
                    <div id="plastificado_extra" class="panel-collapse collapse" role="tabpanel"
                        aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/madeirite-plastificado1.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('mp.extra') }}">Saiba
                                            Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        Recomendado para fôrmas de concreto aparente, divisórias, alojamentos
                                        temporários,
                                        entre outros. Conta com uma camada extra de tego filme, que oportuniza um maior
                                        número de reutilizações.

                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2200x1100mm e 24400 x 12200mm. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>12mm, 15mm, 18mm e 20mm. Outras bitolas possíveis sob consulta.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Ideal para:</label>
                                        <p>– Formas de Concreto não aparentes.</p>
                                        <p>– Construção de alojamento temporário </p>
                                        <p>– Bandejas de Proteção</p>
                                        <p>– Canteiros de obras e outras diversas situações onde podem haver o contato
                                            com
                                            umidade</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#resinado_wbp" aria-expanded="false" aria-controls="resinado_wbp">
                                Madeirite Resinado (WBP)
                            </a>
                        </h4>
                    </div>
                    <div id="resinado_wbp" class="panel-collapse collapse" role="tabpanel"
                        aria-labelledby="headingFour">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/madeirite-resinado-wbp.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('m.resinado-wbp') }}">Saiba
                                            Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        Recomendado para fôrmas de concreto não aparentes, construção de alojamentos
                                        temporários, bandejas de proteção, lajes, tapumes, embalagens, etc.

                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2200x1100mm e 24400 x 12200mm. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>04mm, 05mm, 06mm, 09mm, 10mm, 11mm, 12mm, 13mm, 14mm, 15mm, 17mm, 18mm, 20mm
                                            e
                                            25mm. Outras bitolas possíveis sob consulta.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Ideal para:</label>
                                        <p>– Formas de Concreto não aparentes.</p>
                                        <p>– Construção de alojamento temporário </p>
                                        <p>– Bandejas de Proteção</p>
                                        <p>– Canteiros de obras e outras diversas situações onde podem haver o contato
                                            com
                                            umidade</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                href="#resinado_mr" aria-expanded="false" aria-controls="resinado_mr">
                                Madeirite Resinado MR
                            </a>
                        </h4>
                    </div>
                    <div id="resinado_mr" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/madeirite-resinado-mr.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('m.resinado-mr') }}">Saiba Mais</a></label>

                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        Recomendado para uso interno ou utilizações rápidas em fôrmas de concreto,
                                        tapumes,
                                        barracões, bandejas, divisórias, alojamentos temporários, entre outros.

                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2200x1100mm e 24400 x 12200mm. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>04mm, 05mm, 06mm, 09mm, 10mm, 11mm, 12mm, 13mm, 14mm, 15mm, 17mm, 18mm, 20mm
                                            e
                                            25mm. Outras bitolas possíveis sob consulta.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Ideal para:</label>
                                        <p>– Formas de Concreto não aparentes.</p>
                                        <p>– Construção de alojamento temporário </p>
                                        <p>– Bandejas de Proteção</p>
                                        <p>– Canteiros de obras e outras diversas situações onde podem haver o contato
                                            com
                                            umidade</p>
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="/js/app.js"></script>
