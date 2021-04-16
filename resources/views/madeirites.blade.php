@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="parallax_madeirite">
        <div class="title_produtos">O que é o Madeirite</div>
        <p class="sub-title_produtos">A Ecoplac oferece uma ampla variedade de produtos, que atendem diversos setores de
            produção, e aos clientes que exigem altos padrões de qualidade. Seja para o uso aparente, na construção
            civil, indústria moveleira, ou diferentes tipos de estrutura, nossos produtos atendem as mais variadas
            necessidades do mercado.
        </p>
        <div class="title_produtos">Onde o Madeirite pode ser usado</div>
        <p class="sub-title_produtos">O uso do madeirite é aplicado principalmente na construção civil, na construção de
            formas de concreto aparente, como em lajes, vigas e pilares, que exigem um acabamento uniforme, e até mesmo
            na vedação provisória de obras.
            O madeirite também é muito utilizado na fabricação de chão e bancos de lanchas, barcos, ônibus e até
            aeronaves.

        </p>
    </div>

</section>

<section class="content">
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

                <div id="plastificado" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <img src="/img/madeirite-plastificado1.png" alt="" />
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 ">
                               <label class="descricao_produto">
                               O Madeirite Plastificado é recomendado para formas de concreto aparente, divisórias,
                                alojamentos temporários, entre outros.
                               </label>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <label class="especificacoes_produto"> Medidas:</label>
                                    <p> 2200x1100 e 24400 x 12200mm. </p>
                                    <label for="">  Espessuras: </label>
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
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                        craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table,
                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                        sustainable VHS.
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                        craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                        vice lomo. Leggings occaecat craft beer farm-to-table,
                        raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                        sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="/js/app.js"></script>
