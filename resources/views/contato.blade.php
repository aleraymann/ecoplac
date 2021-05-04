@extends('layouts.app')
@section('conteudo')
<section class="content">
    <div class="item">
        <img src="/img/ecoplac_banner_eco.jpg" alt="" style="width:100%;">
    </div>
</section>
<section class="content">
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
                        <form action="enviar.php" method="post" name="form">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputPassword1">Nome </label>
                                        <input type="text" class="form-control" id="nome" placeholder="Nome Completo">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">E-mail</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" aria-describedby=""
                                            placeholder="(XX)XXXXX-XXXX">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="exampleInputEmail1">Assunto</label>
                                        <select class="form-control">
                                            <option>Selecione o assunto</option>
                                            <option>Sugestão</option>
                                            <option>Dúvida</option>
                                            <option>Reclamação </option>
                                            <option>Outro </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="mensagem">Mensagem</label>
                                        <textarea class="form-control" id="mensagem" rows="3"></textarea>
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




    <!--<form action="enviar.php" method="post" name="form">

<fieldset><legend>SOLICITANTE</legend>

    <p><label for="s_nome">Nome:</label> <span><input id="s_nome" type="text" name="s_nome" /></span></p>

    <p><label for="s_telefone">Telefone:</label> <span><input id="s_telefone" class="telefone" maxlength="13" type="text" name="s_telefone" /></span></p>

    <p><label for="s_email">E-mail:</label> <span><input id="s_email" type="text" name="s_email" /><br><strong class="atencao">(e-mail válido para contato)</strong></span></p>

</fieldset>



<fieldset><legend>REMETENTE</legend>

    <p><label for="r_empresa">Nome/Empresa:</label> <span><input id="r_empresa" type="text" name="r_empresa" /></span></p>

    <p><span class="cpf_r" style="padding-left:44px;"><input id="cpf_r" style="width:20px;" type="radio" name="cpf_cnpj1" checked="checked" /></span><label for="cpf_r" style="width:28px;">CPF</label> <span class="cnpj_r"><input id="cnpj_r" style="width:20px;" type="radio" name="cpf_cnpj1" value="cnpj" /></span><label for="cnpj_r" style="width:39px; text-align:left;">CNPJ</label><span><input type="text" name="r_cpf" /></span></p>

    <p><label for="r_telefone">Telefone:</label> <span><input id="r_telefone" class="telefone" maxlength="9" type="text" name="r_telefone" /></span> <label for="r_cidade" class="cidade_bairro">Cidade:</label><span><input id="r_cidade" class="cidade" type="text" name="r_ciadade" /></span></p>

    <p><label for="r_estado">Estado:</label> <span><input id="r_estado" class="estado" type="text" name="r_estado" /></span> <label for="r_bairro" class="cidade_bairro">&nbsp;&nbsp;Bairro:</label> <span><input id="r_bairro" class="bairro" type="text" name="r_bairro" /></span></p>

</fieldset>



<fieldset><legend>DESTINATÁRIO</legend>

    <p><label for="d_empresa">Nome/Empresa:</label> <span><input id="d_empresa" type="text" name="d_empresa" /></span></p>

    <p><span class="cpf_d" style="padding-left:44px;"><input id="cpf_2" style="width:20px;" type="radio" name="cpf_cnpj2" checked="checked" /></span><label for="cpf_2" style="width:28px;">CPF</label> <span class="cnpj_d"><input id="cnpj_2" style="width:20px;" type="radio" name="cpf_cnpj2" value="cnpj" /></span><label for="cnpj_2" style="width:39px; text-align:left;">CNPJ</label><span><input type="text" name="d_cpf" /></span></p>

    <p><label for="d_telefone">Telefone:</label><span><input id="d_telefone" class="telefone" maxlength="9" type="text" name="d_telefone" /></span> <label for="d_cidade" class="cidade_bairro">Cidade:</label><span><input id="d_cidade" class="cidade" type="text" name="d_cidade" /></span></p>

    <p><label for="d_estado">Estado:</label><span><input id="d_estado" class="estado" type="text" name="d_estado" /></span> <label for="d_bairro" class="cidade_bairro">&nbsp;&nbsp;Bairro:</label> <span><input id="d_bairro" class="bairro" type="text" name="d_bairro" /></span></p>

</fieldset>



<fieldset><legend>MERCADORIA</legend>

    <p><label for="m_mercadoria">Tipo de mercadoria:</label> <span><input id="m_mercadoria" type="text" name="m_mercadoria" /></span></p>

    <p><label for="m_peso">Peso (Kg/Ton):</label> <span><input id="m_peso" type="text" name="m_peso" /></span></p>

    <p><label for="m_caminhao">Tipo de Caminhão:</label><span>

            <select id="m_caminhao" name="m_caminhao">

                <option value="">-</option>

                <option value="1">Baú</option>

                <option value="2">Aberto</option>

                <option value="3">Outros</option>

            </select></span></p>

    <p><label for="m_hmax">Horário máx:</label> <span><input id="m_hmax" class="horario" type="text" name="m_hmax" /><strong class="atencao"> (coleta deve ser efetuada até às hh:mm)</strong></span></p>

    <p><label for="m_almoco">Intervalo de almoço:</label> <span><input id="m_almoco" class="horario" maxlength="5" type="text" name="m_almoco" /></span> <label style="width:375px;">Coleta pode ser efetuada em horário de almoço?</label><span><input id="almoco_s" style="width:20px;" type="radio" name="almoco" value="sim" /></span><label for="almoco_s" style="width:28px;">Sim</label> <span><input id="almoco_n" style="width:20px;" checked="checked" type="radio" name="almoco" value="nao" /></span><label for="almoco_n" style="width:28px;">Não</label></p>

    <p><label for="m_obs">Observções Extras:</label> <span><textarea id="m_obs" name="m_obs" rows="4" cols="250"></textarea></span></p>

</fieldset>

<span class="obs_confirme">Confirme os dados acima e clique em enviar.</span>

<td colspan="2">
      <input type="reset" class="campo_submit" value="Limpar" />
      <input type="submit" class="campo_submit" value="Enviar" />
    </td>

</form>-->
</section>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="/js/app.js"></script>
