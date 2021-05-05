@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="item">
        <img src="/img/ecoplac_banner_eco.jpg" alt="" style="width:100%;">
    </div>
</section>
<section class="content">
    @if(Session::has('message'))
    {{ Session::get('message') }}
    @endif

    <div class="conteudo">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Enviar Mensagem
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Mensagem de Contato</h5>
                    </div>
                    <div class="modal-body">
                        <form action="/contato" method="post" name="form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputPassword1">Nome </label>
                                        <input type="text" class="form-control" id="nome" placeholder="Nome Completo"
                                            name="nome">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                            placeholder="Email" name="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" aria-describedby=""
                                            placeholder="(XX)XXXXX-XXXX" name="telefone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Assunto</label>
                                        <select class="form-control" name="assunto">
                                            <option>Selecione o assunto</option>
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
                                        <label for="mensagem">Mensagem</label>
                                        <textarea class="form-control" id="mensagem" rows="3"
                                            name="mensagem"></textarea>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="/js/app.js"></script>
