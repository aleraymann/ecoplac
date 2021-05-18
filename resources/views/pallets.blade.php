@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="item">
        <img src="/img/ecoplac_banner_eco.jpg" alt="" style="width:100%;">
    </div>
</section>
<section class="content">
    <div class="parallax_claro">
        <div class="conteudo">
            <p class="sub-title4">
                Os pallets são estruturas de madeira, feitas originalmente para facilitar o transporte e manejamento de
                cargas por intermédio de empilhadeiras, e também para melhor acomodar os produtos, tanto leves quanto
                pesados, auxiliando no seu empilhamento.

            </p>
            <p class="sub-title4">
                O uso dos pallets na logística de transporte e armazenamento de produtos em estoque traz uma série de
                vantagens, como espaço de estoque, organização, racionalização de espaço, diminuição de danos aos
                produtos e mais eficiência no transporte de cargas.

            </p>
            <p class="sub-title4">
                Embora estes já sejam motivos suficientes para aderir ao pallet, nos últimos anos a busca e a
                valorização do material reciclado têm aumentado, e com isso, os pallets têm sido empregados na
                construção de móveis rústicos, e também na decoração, por ser um material de fácil manuseio, baixo
                custo, e que permite inúmeras possibilidades de utilização.

            </p>
            <p class="sub-title4">
                Ou seja, ainda que a principal função do pallet seja auxiliar e tornar mais seguro o transporte e
                manuseio de produtos, este recurso pode ser reutilizado para a criação de móveis, ou ainda revendidos,
                como forma de retornar parte do investimento.
            </p>
        </div>
    </div>
</section>
<section class="content">
    <div class="conteudo">
        <div class="title">
            <b> Madeiras mais utilizadas em Pallets</b>
        </div>
        <div class="segmentos">
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/pontalete.png)">
                    <p class="txt-front">Pontalete</p>
                    <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>A madeira serrada pontalete, também conhecida por escora, oferece resistência e ótimo acabamento para a montagem e utilização do pallet.</p>
                        <div class="button"><a href="{{ route('ms.pontalete') }}"> Mais
                                Detalhes</a></div>
                    </div>
                </div>
            </div>
            <div class="card-segmentos">
                <div class="front-segmentos" style="background-image: url(/img/ripa.png)">
                    <p class="txt-front">Ripa</p>
                    <i class="fas fa-sync-alt segmentos"></i>
                </div>
                <div class="back-segmentos">
                    <div>
                        <p>A ripa é a madeira de pinus serrada, ideal para auxiliar no transporte rodoviário de cargas, oferecendo mais segurança no empilhamento.
                        </p>
                        <div class="button"><a href="{{ route('ms.ripa') }}"> Mais
                                Detalhes</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
