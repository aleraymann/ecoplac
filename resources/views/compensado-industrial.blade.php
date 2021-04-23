@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="parallax_madeirite">
    <div class="conteudo">
        <div class="title_produtos">O que é o Compensado Industrial</div>
        <p class="sub-title_produtos">O Compensado Pinus Industrial é um painel multilaminado, sobreposto em número
            ímpar de camadas. Este material possui grande versatilidade no que se refere à sua composição, podendo ser
            utilizados em exteriores, se aplicado cola com característica WBP (weather and boil proof), ou em interiores
            e locais de baixa exposição à umidade, desde que utilizado cola branca.
        </p>
        <p class="sub-title_produtos">A madeira proveniente de pinus é amplamente utilizada em reflorestamento no
            Brasil, devido ao seu rápido crescimento. Com isso, o reflorestamento é feito de forma rápida, e não há
            impactos ambientais. Nossa produção é responsável e não gera danos ao meio ambiente.
        </p>

        <div class="title_produtos_2">Onde o Compensado Industrial é utilizado</div>
        <p class="sub-title_produtos">A aplicação do Compensado Pinus Industrial se dá em assoalhos e revestimento para
            e veículos de transporte rodoviário e aquático.

        </p>
        <p class="sub-title_produtos">Ele Ele também pode ser utilizado na fabricação de móveis em geral, como estantes,
            prateleiras, balcões, gavetas, estofados, armários, divisórias, pisos para feiras e mezaninos.

        </p>
    </div>
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
                                <img src="/img/compensado/t-6.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/img/compensado/t-3.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/img/compensado/t-4.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="/img/compensado/t-7.png" alt="" />
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
    <div class="conteudo">
        <div class="title">
            <b> Vantagens do Compensado Industrial</b>
        </div>
        <p class="sub-title4">
            <b>À prova d'água:</b> quando utilizada a cola tipo WBP, o Compensado Industrial apresenta alta resistência à
            água e ambientes úmidos.
        </p>
        <p class="sub-title4">
            <b>Produto ecológico: </b> oriundo de madeiras 100% reflorestadas, o compensado pinus industrial é ecológico
            e não agride ao meio ambiente
        </p>
        <p class="sub-title4">
            <b>Resistência:</b> usado em áreas e locais de atrito e onde há a presença de materiais pesados, o compensado
            industrial é resiste a choques e impactos
        </p>
        <p class="sub-title4">
            <b>Praticidade:</b> Compensado Industrial tem como uma de suas principais vantagens a facilidade de manuseio
            e também a logística para transportá-lo

        </p>
</div>
</div>
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
                                <p> 2200×1600, 2440×1220 e 2500×1600mm</p>
                                <p> Pré-cortado na medida necessária</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="text-container-especificacoes">
                                <h6>Espessuras</h6>
                                <p> 03mm, 04mm, 05mm, 06mm, 08mm, 10mm, 12mm, 15mm, 18mm, 20mm, 25mm e 30mm
                                </p>
                               
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="text-container-especificacoes">
                                <h6>Colagem</h6>
                                <p> Cola Branca com Resina MR-Reutilizável e com resina fenólica WBP 100% resistente à água (WBP – wheather and boil proof).</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                    <div class="card-flyer">
                        <div class="text-box">
                            <div class="text-container-especificacoes">
                                <h6>Indicação</h6>
                                <p>Moveleiro</p>
                                <p>Embalagens</p>
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
            <li><a href="{{ route('c.embalagem') }}">Compensado Pinus Embalagem</a></li>
            <li><a href="{{ route('c.moveleiro-parica') }}">Compensado Moveleiro Virola (Paricá)</a></li>
            <li><a href="{{ route('c.eucalipto') }}">Compensado Eucalipto</a></li>
            
        </ul>
    </div>
    <p class="sub-title2">Fale com nossos especialistas e esclareça todas as suas dúvidas sobre o  Compensado Industrial, e solicite um orçamento.
    </p>
</section>

@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="/js/app.js"></script>
