@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="item">
        <img src="/img/ecoplac_banner_eco.jpg" alt="" style="width:100%;">
    </div>
</section>

<section class="content">
    <!-- Topic Cards -->

    <div id="cards_landscape_wrap-2">
        <div class="conteudo">
            <p class="sub-title3">A Ecoplac oferece uma ampla variedade de produtos, que atendem diversos setores de
                produção, e aos clientes que exigem altos padrões de qualidade. Seja para o uso aparente, na construção
                civil, indústria moveleira, ou diferentes tipos de estrutura, nossos produtos atendem as mais variadas
                necessidades do mercado.
            </p>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="{{ route('madeirite') }}">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/madeirite.png" alt="" />
                                    </div>
                                    <div class="text-container">
                                        <h6>Madeirite</h6>
                                        <p>Usado principalmente na construção civil, o madeirite é a melhor opção para a
                                            construção de formas de concreto aparente, oferecendo excelente acabamento.
                                            Por
                                            sua alta resistência e durabilidade, este tipo de compensado também é usado
                                            na
                                            fabricação de lanchas, aeronaves e ônibus, além da construção civil.</p>

                                    </div>
                                    <label>Clique e conheça melhor</label>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="{{ route('compensados') }}">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/compensados.png" alt="" />
                                    </div>
                                    <div class="text-container">
                                        <h6>Compensados</h6>
                                        <p>O compensado, que pode ser fabricado por meio de diferentes tipos de madeira,
                                            é
                                            um painel extremamente versátil, que é utilizado para inúmeras finalidades.
                                            Além
                                            da construção civil, o compensado também é amplamente usado no setor naval,
                                            indústria moveleira, de embalagens, etc.</p>

                                    </div>
                                    <label>Clique e conheça melhor</label>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="{{ route('madeiras-serradas') }}">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/madeira-serrada-2.png" alt="" />
                                    </div>

                                    <div class="text-container">
                                        <h6>Madeira Serrada</h6>
                                        <p>As madeiras serradas se dividem em Pontaletes e Ripas. Pelo seu baixo custo e
                                            pela sua durabilidade, são excelentes escolhas para serem utilizadas
                                            principalmente na construção civil e na fabricação de pallets, mas também
                                            podem
                                            ser usadas para auxiliar no transporte rodoviário de cargas</p>

                                    </div>
                                    <label>Clique e conheça melhor</label>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <a href="{{ route('ecowall') }}">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/painel-wall.png" alt="" />
                                    </div>
                                    <div class="text-container">
                                        <h6>Painel Wall</h6>
                                        <p>Produzido com a tecnologia do CRFS (Cimento Reforçado com Fio Sintético) e
                                            livre
                                            de amianto, o Painel Wall oferece comportamento elástico e condicionamento
                                            térmico natural, que resultam em mais conforto, tanto térmico quanto
                                            acústico. O
                                            Painel Wall é uma alternativa com um melhor custo benefício ao Dry Wall.</p>

                                    </div>
                                    <label>Clique e conheça melhor</label>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
