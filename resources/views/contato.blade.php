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
                <i class="fas fa-map-marked-alt"></i>
                Venha até nós: será um prazer receber a sua visita. Estamos na R. Alberto Diedrichs, 911, Imbituva-PR.
                <a type="button" class="btn btn-ecoplac btn-sm"
                    href="https://www.google.com/maps/@-25.2360736,-50.6161148,3a,75y,108.52h,76.55t/data=!3m6!1e1!3m4!1sSuf9wgCzu4NEu_8P_l21vw!2e0!7i13312!8i6656"
                    target="blank">Ver no Mapa</a>
            </p>
            <p class="sub-title3">
                <i class="fas fa-envelope-open-text"></i>
                Você também pode falar conosco por e-mail. Envie a sua mensagem para:
            </p>
            <div class="title">
                <b> Nosso atendimento é de segunda a sexta, das 08:00 às 18:00 </b>
            </div>
            <p class="sub-title3">
                Você também pode deixar a sua mensagem no nosso formulário de contato. Para deixar sua sugestão, dúvida,
                reclamação ou sanar qualquer assunto que tenha ficado pendente, preencha o formulário abaixo e aguarde
                nosso retorno.
            </p>
            <p class="sub-title3">
                <button type="button" class="btn btn-ecoplac btn-md" data-toggle="modal" data-target="#exampleModal">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Mensagem de Contato</h5>
            </div>
            <div class="modal-body">
                <span for="">* obrigatórios</span>
                <form action="/contato" method="post" name="form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Nome * </label>
                                <input type="text" class="form-control" id="nome" required placeholder="Nome Completo"
                                    name="nome">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">E-mail *</label>
                                <input type="email" class="form-control" id="email" required 
                                    placeholder="Email" name="email">
                            </div>
                            <div class="col-md-6">
                                <label for="">Telefone</label>
                                <input type="text" class="form-control" id="telefone" 
                                    placeholder="(XX)XXXXX-XXXX" name="telefone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Assunto *</label>
                                <select class="form-control" name="assunto" id="assunto" required>
                                    <option value="">Selecione o assunto</option>
                                    <option value="Sugestão">Sugestão</option>
                                    <option value="Dúvida">Dúvida</option>
                                    <option value="Reclamação">Reclamação </option>
                                    <option value="Outro">Outro </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="mensagem">Mensagem *</label>
                                <textarea class="form-control" id="mensagem" rows="3" name="mensagem" required></textarea>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        $('#telefone').mask('(99)99999-9999');
    })
</script>
@endsection

