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
                        <p class="txt-front-oque">O que é o Compensado de Madeira?</p>
                    </div>
                    <div class="back-segmentos">
                        <div>
                            <p class="sub-title_produtos">O compensado é um painel composto por fibras ou laminados de
                                madeira
                                sobrepostas
                                em número ímpar de camadas, colados sob forte pressão. Este material é resistente, e por
                                sua
                                homogeneidade,
                                oferece excelente acabamento da construção de móveis e embalagens.
                            </p>
                            <p class="sub-title_produtos">O compensado é indicado tanto para uso interior, com adesivo
                                uréia-formaldeído
                                e,
                                como de uso exterior ou à
                                prova d’água, com colagem à base de fenol-formaldeído.</p>
                        </div>
                    </div>
                </a>
                <a class="card-segmentos">
                    <div class="front-segmentos">
                        <p class="txt-front-oque">Onde o Compensado pode ser usado?</p>
                    </div>
                    <div class="back-segmentos">
                        <div>
                            <p class="sub-title_produtos">O uso do madeirite é aplicado principalmente na construção
                                civil,
                                na
                                construção de
                                O compensado é um material multifuncional, e pode ser usado em diversos setores, como:
                                construção civil,
                                indústria naval, indústria moveleira, embalagens, etc.
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
        <div class="title">Conheça nossos tipos de Compensados</div>
        <div class="container">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#industrial"
                                aria-expanded="true" aria-controls="industrial">
                                Compensado Pinus Industrial
                            </a>
                        </h4>
                    </div>

                    <div id="industrial" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/compen-industrial.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('c.industrial') }}">Saiba Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        O compensado industrial é um painel multilaminado de fácil manuseio. Suas faces
                                        são
                                        reparadas e lixadas para um melhor acabamento. Indicado para fabricação de
                                        móveis em
                                        geral, como gavetas, estofados, armários, divisórias, pisos para feiras entre
                                        outros.
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2200×1600, 2440×1220 e 2500×1600mm ou pré-cortado na medida necessária. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>03mm, 04mm, 05mm, 06mm, 08mm, 10mm, 12mm, 15mm, 18mm, 20mm, 25mm e 30mm</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Colagem:</label>
                                        <p>Cola Branca com Resina MR-Reutilizável e com resina fenólica WBP 100%
                                            resistente
                                            à água (WBP – weather and boil proof)</p>
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
                                href="#pinus" aria-expanded="false" aria-controls="pinus">
                                Compensado Pinus Embalagem
                            </a>
                        </h4>
                    </div>
                    <div id="pinus" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/compen-pinus.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('c.embalagem') }}">Saiba Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        O compensado embalagem é um painel cujas faces não recebem acabamento.
                                        Recomendado
                                        para uso interno ou externo na fabricação de embalagens em geral.

                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2200×1600, 2440×1220 e 2500×1600mm ou pré-cortado na medida necessária. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>03mm, 04mm, 05mm, 06mm, 08mm, 10mm, 12mm, 15mm, 18mm, 20mm, 25mm e 30mm.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Colagem:</label>
                                        <p>Cola Branca com Resina MR-Reutilizável e com resina fenólica WBP 100%
                                            resistente
                                            à água (WBP – weather and boil proof)</p>
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
                                href="#parica" aria-expanded="false" aria-controls="parica">
                                Compensado Moveleiro Virola (Paricá)
                            </a>
                        </h4>
                    </div>
                    <div id="parica" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/compen-parica.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('c.moveleiro-parica') }}">Saiba
                                            Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        A virola é uma madeira branca de superfície lisa com resistência à umidade,
                                        indicada
                                        para a estrutura interna de móveis. De baixa densidade, é muito valorizada pela
                                        indústria de compensados.
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2440×1220, 2200×1600 e 2500×1600mm. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>04mm, 06mm, 08mm, 10mm, 12mm, 15mm, 18mm, 20mm, 25mm e 30mm.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Colagem:</label>
                                        <p>Cola Branca com Resina MR-Reutilizável e com resina fenólica WBP 100%
                                            resistente
                                            à água (WBP – weather and boil proof)</p>
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
                                href="#eucalipto" aria-expanded="false" aria-controls="eucalipto">
                                Compensado Eucalipto
                            </a>
                        </h4>
                    </div>
                    <div id="eucalipto" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <img src="/img/compen-eucalipto.png" alt="" />
                                    <label><a class="saiba_produtos"
                                            href="{{ route('c.eucalipto') }}">Saiba Mais</a></label>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                                    <label class="descricao_produto">
                                        O Compensado Eucalipto é ideal para fechamento de obras e formas de concreto não
                                        aparente (à prova d’água).
                                    </label>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Medidas:</label>
                                        <p> 2440×1220, 2200×1600 e 2500×1600mm. </p>
                                        <label for=""> Espessuras: </label>
                                        <p>04mm, 06mm, 08mm, 10mm, 12mm, 15mm, 18mm, 20mm, 25mm e 30mm.</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <label class="especificacoes_produto"> Colagem:</label>
                                        <p>Cola Branca com Resina MR-Reutilizável e com resina fenólica WBP 100%
                                            resistente
                                            à água (WBP – wheather and boil proof).</p>
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
