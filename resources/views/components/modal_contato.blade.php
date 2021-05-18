<!-- Modal -->
<div class="modal fade" id="contato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Mensagem de Contato</h5>
            </div>
            <div class="modal-body">
                <form action="/contato" method="post" name="form" data-toggle="validator" role="form" id="form">
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
                                <input type="email" class="form-control" id="email" required placeholder="Email"
                                    name="email">
                            </div>
                            <div class="col-md-6">
                                <label for="">Telefone</label>
                                <input type="text" class="form-control" id="telefone" placeholder="(XX)XXXXX-XXXX"
                                    name="telefone" maxlength="14">
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
                                <textarea class="form-control" id="mensagem" rows="3" name="mensagem"
                                    required></textarea>
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
