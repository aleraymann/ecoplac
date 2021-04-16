@extends('layouts.app')
@section('conteudo')
    <section class="content">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/img/banner-principal-home.gif" alt="" style="width:100%;">
                </div>

                <div class="item">
                    <img src="/img/ecoplac_banner_eco.jpg" alt="Chicago" style="width:100%;">
                </div>

                <div class="item">
                    <img src="/img/ecoplac_banner_madeiras_1.jpg" alt="New york" style="width:100%;">
                </div>
                <div class="item">
                    <img src="/img/ecoplac_banner_madeiras_2.jpg" alt="New york" style="width:100%;">
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="parallax">
            <div class="title">
                Conheça nossos principais produtos, e saiba porquê nossos clientes confiam em nós
            </div>
            <div class="container py-3">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 grid-produtos">

                        <div class="produto-img">
                            <img src="/img/madeirite.png" alt="Madeirites" class="image">
                            <label for="" class="nome-produto">Madeirites</label>
                            <div class="overlay">
                                <label>Placa composta por lâminas de madeira, ideal para arquitetura e fachadas
                                    visíveis.</label>
                                <label><a class="saiba" href="">Saiba Mais</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 border">
                        <div class="produto-img">
                            <img src="/img/compensados.png" alt="Compensados" class="image">
                            <label for="" class="nome-produto">Compensados</label>
                            <div class="overlay">
                                <label> Usado para os mais diversos fins, desde a fabricação de móveis até a construção
                                    civil.</label>
                                <label><a class="saiba" href="">Saiba Mais</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 border">
                        <div class="produto-img">
                            <img src="/img/madeira-serrada-2.png" alt="Madeira-serrada" class="image">
                            <label for="" class="nome-produto">Madeira Serrada</label>
                            <div class="overlay">
                                <label>Usada em pallets e também na construção civil, a madeira serrada é versátil e
                                    resistente.</label>
                                <label><a class="saiba" href="">Saiba Mais</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 border">

                        <div class="produto-img">
                            <img src="/img/painel-wall.png" alt="painel-ecowall" class="image">
                            <label for="" class="nome-produto">Painel Ecowall</label>
                            <div class="overlay">
                                <label>Livre de amianto, a placa cimentícia oferece mais conforto térmico e
                                    acústico.</label>
                                <label><a class="saiba" href="">Saiba Mais</a></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="parallax3"></div>
    </section>
    <section class="content">
        <div class="parallax2">
            <div class="title2">Sustentabilidade</div>
            <img src="/img/eco-sustentabilidade.png" class="logo-sust" alt="">
            <p class="sub-title">A Ecoplac utiliza 100% madeira de reflorestamento, cumprindo o seu papel com a
                sociedade e com o meio ambiente.</p>
            <p class="sub-title">Embora a madeira seja um recurso renovável, a Ecoplac entende que a utilização dos
                recursos naturais deve ser
                feita de forma responsável, para minimizar possíveis impactos ambientais.
            </p>
            <p class="sub-title">Nosso compromisso é fabricar implementos de origem limpa e sustentável, garantindo
                a continuidade dos recursos naturais do nosso país, e a qualidade de vida das futuras gerações.
            </p>
        </div>
    </section>
    <section class="content">
        <div class="title3">Links Úteis</div>
        <p class="sub-title2">Tenha acesso às melhores opções de financiamento para adquirir nossos produtos.</p>
        <img src="/img/links-uteis.png" alt="" class="img-links">

    </section>
   
@endsection