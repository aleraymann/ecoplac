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
            <p class="sub-title3">Nossas madeiras são procuradas por gestores de diversos segmentos. Devido a sua ampla
                utilização e versatilidade, nossos produtos podem ser usados desde a fabricação de chão e assentos, até
                a
                construção de stands em feiras.
            </p>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="{{route('s.ccvil')}}">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/ccivil2.png" alt="" />
                                    </div>
                                    <div class="text-container-segmentos">
                                        <h6>Construção Civil</h6>
                                        <p>Este é o setor que tem a maior procura por madeiras, em seus diferentes
                                            formatos,
                                            principalmente o Madeirite, que apresenta a sua versão comum e a versão mais
                                            sofisticada, oferecendo uma maior qualidade aparente e estrutural.
                                        </p>

                                    </div>
                                    <label>Clique e conheça melhor</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/feiras2.png" alt="" />
                                    </div>
                                    <div class="text-container-segmentos">
                                        <h6>Feiras, Eventos e Stands</h6>
                                        <p>Para a montagem de Stands de Feiras e outros eventos, temos várias opções de
                                            madeirite e de compensado, que atendem aos mais altos padrões de qualidade,
                                            oferecendo durabilidade e uma ótima estética.</p>

                                    </div>
                                    <label>Clique e conheça melhor</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/embalagens.png" alt="" />
                                    </div>

                                    <div class="text-container-segmentos">
                                        <h6>Embalagens</h6>
                                        <p>Nossa linha de compensados pré-cortados em pinus trazem mais robustez às
                                            embalagens, oferecendo mais segurança aos produtos embalados por este
                                            material.,
                                            devido a sua grande resistência.
                                        </p>

                                    </div>
                                    <label>Clique e conheça melhor</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <a href="">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/moveleiro2.png" alt="" />
                                    </div>
                                    <div class="text-container-segmentos">
                                        <h6>Moveleiro</h6>
                                        <p>Na fabricação de móveis, o compensado é a escolha ideal para garantir uma
                                            maior
                                            durabilidade e resistência na fabricação da mobília, por um custo baixo.
                                            Conheças as opções mais indicadas para a indústria moveleira.</p>
                                    </div>
                                    <label>Clique e conheça melhor</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6col-md-4 col-lg-4">
                        <a href="">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="/img/pallets.png" alt="" />
                                    </div>
                                    <div class="text-container-segmentos">
                                        <h6>Pallets</h6>
                                        <p>Embora os Pallets sejam muito utilizados para facilitar o empilhamento de
                                            produtos no transporte rodoviário e na exportação de produtos leves e
                                            pesados,
                                            este material tem sido empregado na fabricação de móveis rústicos e na
                                            decoração
                                            de casas.</p>
                                    </div>
                                    <label>Clique e conheça melhor</p>
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
