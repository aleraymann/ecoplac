@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="item">
        <img src="/img/ecoplac_banner_eco.jpg" alt="" style="width:100%;">
    </div>
</section>

<section class="content">
    @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
            <div class="sub-title3">
                {{ Session::get('message') }}
            </div>
        </div>
    @endif
    <div class="parallax_claro">
        <div class="conteudo">
            <div class="title">
                <b> Não encontrou o que precisava? Fale conosco! Veja como você pode nos contactar:</b>
            </div>
            <p class="sub-title3">
                <i class="fab fa-whatsapp-square"></i>
                (42)99841-0088. Estamos sempre online e te respondemos rapidamente.
            </p>
            <p class="sub-title3">
                <i class="fas fa-phone-alt"></i>
                (42)3436-4167 ou (42)3436-2945. Precisa falar prontamente? Ligue para nós!
            </p>
            <p class="sub-title3">
                <i class="fas fa-envelope-open-text"></i>
                Você também pode falar conosco por e-mail. Envie a sua mensagem para:
            </p>
            <p class="sub-title3">
                <a class="email" href="mailto:comercial@compensadosecoplac.com.br">
                    comercial@compensadosecoplac.com.br</a>
            </p>
            <p class="sub-title3">
                <i class="fas fa-map-marked-alt"></i>
                Venha até nós, será um prazer receber a sua visita. Estamos na R. Alberto Diedrichs, 911, Imbituva-PR.
            </p>
            <p class="sub-title3">
                <a type="button" class="btn btn-ecoplac btn-sm"
                    href="https://www.google.com/maps/@-25.2360736,-50.6161148,3a,75y,108.52h,76.55t/data=!3m6!1e1!3m4!1sSuf9wgCzu4NEu_8P_l21vw!2e0!7i13312!8i6656"
                    target="blank">Ver no Mapa</a>
            </p>
            <div class="title">
                <b> Nosso atendimento é de segunda a sexta, das 08:00 às 18:00. </b>
            </div>
            <p class="sub-title3">
                Você também pode deixar a sua mensagem no nosso formulário de contato. Para deixar sua sugestão, dúvida,
                reclamação ou sanar qualquer assunto que tenha ficado pendente, preencha o formulário abaixo e aguarde
                nosso retorno.
            </p>
            <p class="sub-title3">
                <button type="button" class="btn btn-ecoplac btn-md" data-toggle="modal" data-target="#contato">
                    Enviar Mensagem
                </button>
            </p>
            <p class="sub-title3">
                Nos acompanhe também nas nossas redes sociais!
            </p>
            <p class="sub-title3">
                <a href="" target="blank"><img src="/img/insta.png" alt=""></a>
                <a href="" target="blank"><img src="/img/face.png" alt=""></a>
            </p>
            <p class="sub-title3">
                Esperamos falar com você em breve!
            </p>

        </div>
    </div>
</section>

@include('components.modal_contato')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/app.js"></script>
<script>
    $(document).ready(function () {
        $('#telefone').mask('(99)99999-9999');
    });

</script>
@endsection
