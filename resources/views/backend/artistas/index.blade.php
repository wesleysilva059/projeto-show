@extends('backend.layouts.default')
@section('content')
<section class="content-header">
  <h1>
    Administrativo
    <small>Listagem de Artistas Cadastrados</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('backend.home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Listagem de Artistas Cadastrados</li>
  </ol>
</section>
<section class="content">
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class=""><a href="#cadastrados" aria-controls="cadastrados" role="tab" data-toggle="tab"><i class="fa fa-star"></i> &nbsp;Artistas Cadastrados</a></li>
      <li role="presentation"><a href="#apagados" aria-controls="apagados" role="tab" data-toggle="tab"><i class="fa fa-trash"></i>&nbsp;Artistas Apagados</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade" id="cadastrados">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="col-md-6">
                  <h3 class="box-title">Confira abaixo todos os <b>Artistas Cadastrados</b> !</h3>
                </div>
                <div class="col-md-6 text-right">
                  <button class="btn btn-success btn-novo"><i class="fa fa-plus"></i>&nbsp; Novo Artista</button>
                </div>
              </div>
              <div class="box-body table-responsive">
                <table class="cadastrados-table table table-responsive table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Responsável</th>
                      <th>Celular</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Responsável</th>
                      <th>Celular</th>
                      <th>Ações</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="apagados">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <div class="col-md-6">
                  <h3 class="box-title">Confira abaixo todos os <b>Artistas Apagados</b> !</h3>
                </div>
              </div>
              <div class="box-body table-responsive">
                <table class="apagados-table table table-responsive table-bordered table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Apagado Em</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>E-mail</th>
                      <th>Apagado Em</th>
                      <th>Ações</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<div class="modal fade modal-novo" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="box box-info">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Cadastro de Novo Artista</b></h4>
        </div>
        <form action="#" role="form" class="form-cadastro" data-url="{{route('backend.artistas.adicionar')}}">
          <div class="modal-body">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nome">Nome do Artista / Banda</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="nome" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nome">E-mail</label>
                  <div class="input-group">
                    <input type="email" class="form-control" name="email" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nome">Responsável</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="responsavel" required>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Celular </label>
                  <div class="input-group">
                    <input type="text" class="form-control telefone-input-mask" name="celular"
                    required>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Fixo </label>
                  <div class="input-group">
                    <input type="text" class="form-control telefone-input-mask" name="fixo">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-12">
                <h3>Endereço</h3>
              </div>
              <div class="endereco">
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="nome">CEP</label>
                    <div class="input-group">
                      <input type="text" class="form-control cep cep-input-mask" name="cep">
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="nome"> Logradouro </label>
                    <div class="input-group">
                      <input type="text" class="form-control logradouro" name="logradouro">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="nome"> Número </label>
                    <div class="input-group">
                      <input type="text" class="form-control numero" name="numero">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="nome"> Complemento </label>
                    <div class="input-group">
                      <input type="text" class="form-control complememto" name="complemento">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nome"> Bairro </label>
                    <div class="input-group">
                      <input type="text" class="form-control bairro" name="bairro">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="nome"> Cidade </label>
                    <div class="input-group">
                      {!! Form::select('cidade', [null, 'SELECIONE'] + $cidades, null, ['class'
                      => 'form-control select2 ibge']) !!}
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="nome"> UF </label>
                    <div class="input-group">
                      <select name="uf" id="" class="form-control select2 uf">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-12">
                <h3>Estilos</h3>
              </div>
              <div class="col-xs-12">
                @foreach( $estilos as $e )
                <div class="col-md-3 col-xs-6 margin-bottom-10">
                  <input type="checkbox" value='{{$e->id}}' name='estilos[]' id="estilo_{{$e->id}}"
                  class="">
                  <label for="estilo_{{$e->id}}">{{$e->nome}}</label>
                </div>
                @endforeach
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-12">
                <h3>Mídias do Artista / Banda</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nome"> Sobre </label>
                  <div class="input-group">
                    <textarea name="sobre" id="" cols="30" rows="5" class="form-control editor-opicional"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Site </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="site">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Facebook </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="facebook">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Instagram </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="instagram">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Canal no Youtube </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="youtube">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Spotify </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="spotify">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Soundcloud </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="soundcloud">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nome"> Quantidade mínima de fãs para eventos </label>
                  <div class="input-group">
                    <input type="number" class="form-control site" name="quantidade_minima_fans"
                    min="1">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-12">
                <h3 class="">Dados bancários do responsável</h3>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nome"> Nome </label>
                  <div class="input-group">
                    <input type="text" class="form-control site" name="responsavel_conta">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nome"> Banco </label>
                  <div class="input-group">
                    {!! Form::select('banco', [null => ''] + $bancos, null, ['class' =>
                    'form-control select2 bancos']) !!}
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="nome"> Agência </label>
                  <div class="input-group">
                    <input type="text" class="form-control agencia" name="agencia">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="nome"> Conta Corrente </label>
                  <div class="input-group">
                    <input type="text" class="form-control conta-corrente" name="conta">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-12">
                  <div class="row">
                    <label for="nome"> Pessoa </label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <input type="radio" id="pf" name="pessoa" checked value="0" />
                    <label for="pf" class="label label-success">FÍSICA</label>
                    <input type="radio" id="pj" name="pessoa" value="1" />
                    <label for="pj" class="label label-primary">JURÍDICA</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 dados-pf">
                <div class="form-group">
                  <label for="nome"> CPF </label>
                  <div class="input-group">
                    <input type="text" class="form-control cpf" name="cpf">
                  </div>
                </div>
              </div>
              <div class="col-md-4 dados-pj not-show">
                <div class="form-group">
                  <label for="nome"> CNPJ </label>
                  <div class="input-group">
                    <input type="text" class="form-control cnpj" name="cnpj">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
              Fechar</button>
              <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div>
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- /.modal -->
  
  
<div class="modal fade modal-editar" role="dialog" data-backdrop="static">
  <div class="modal-dialog modal-xl" role="document">
    <div class="box box-info">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Edição de Artista</b></h4>
        </div>
        <form action="#" role="form" class="form-editar" data-url="{{route('backend.artistas.salvar')}}">
          <input type="hidden" id="id" name="id">
          <div class="modal-body">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nome">Nome do Artista / Banda</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="nome" id="nome" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nome">E-mail</label>
                  <div class="input-group">
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nome">Responsável</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="responsavel" required>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Celular </label>
                  <div class="input-group">
                    <input type="text" class="form-control telefone-input-mask" name="celular"
                    required>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Fixo </label>
                  <div class="input-group">
                    <input type="text" class="form-control telefone-input-mask" name="fixo">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-12">
                <h3>Endereço</h3>
              </div>
              <div class="endereco">
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="nome">CEP</label>
                    <div class="input-group">
                      <input type="text" class="form-control cep cep-input-mask" name="cep">
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="nome"> Logradouro </label>
                    <div class="input-group">
                      <input type="text" class="form-control logradouro" name="logradouro">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="nome"> Número </label>
                    <div class="input-group">
                      <input type="text" class="form-control numero" name="numero">
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="nome"> Complemento </label>
                    <div class="input-group">
                      <input type="text" class="form-control complememto" name="complemento">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nome"> Bairro </label>
                    <div class="input-group">
                      <input type="text" class="form-control bairro" name="bairro">
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="nome"> Cidade </label>
                    <div class="input-group">
                      {!! Form::select('cidade', [null, 'SELECIONE'] + $cidades, null, ['class'
                      => 'form-control select2 ibge']) !!}
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="nome"> UF </label>
                    <div class="input-group">
                      <select name="uf" id="" class="form-control select2 uf">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-12">
                <h3>Estilos</h3>
              </div>
              <div class="col-xs-12">
                @foreach( $estilos as $e )
                <div class="col-md-3 col-xs-6 margin-bottom-10">
                  <input type="checkbox" value='{{$e->id}}' name='estilos[]' id="estilo_{{$e->id}}"
                  class="">
                  <label for="estilo_{{$e->id}}">{{$e->nome}}</label>
                </div>
                @endforeach
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-12">
                <h3>Mídias do Artista / Banda</h3>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nome"> Sobre </label>
                  <div class="input-group">
                    <textarea name="sobre" id="" cols="30" rows="5" class="form-control editor-opicional"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Site </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="site">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Facebook </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="facebook">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Instagram </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="instagram">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Canal no Youtube </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="youtube">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Spotify </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="spotify">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nome"> Soundcloud </label>
                  <div class="input-group">
                    <input type="url" class="form-control site" name="soundcloud">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nome"> Quantidade mínima de fãs para eventos </label>
                  <div class="input-group">
                    <input type="number" class="form-control site" name="quantidade_minima_fans"
                    min="1">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
              <div class="col-md-12">
                <h3 class="">Dados bancários do responsável</h3>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nome"> Nome </label>
                  <div class="input-group">
                    <input type="text" class="form-control site" name="responsavel_conta">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="nome"> Banco </label>
                  <div class="input-group">
                    {!! Form::select('banco', [null => ''] + $bancos, null, ['class' =>
                    'form-control select2 bancos']) !!}
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="nome"> Agência </label>
                  <div class="input-group">
                    <input type="text" class="form-control agencia" name="agencia">
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="nome"> Conta Corrente </label>
                  <div class="input-group">
                    <input type="text" class="form-control conta-corrente" name="conta">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-12">
                  <div class="row">
                    <label for="nome"> Pessoa </label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <input type="radio" id="pf" name="pessoa" checked value="0" />
                    <label for="pf" class="label label-success">FÍSICA</label>
                    <input type="radio" id="pj" name="pessoa" value="1" />
                    <label for="pj" class="label label-primary">JURÍDICA</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 dados-pf">
                <div class="form-group">
                  <label for="nome"> CPF </label>
                  <div class="input-group">
                    <input type="text" class="form-control cpf" name="cpf">
                  </div>
                </div>
              </div>
              <div class="col-md-4 dados-pj not-show">
                <div class="form-group">
                  <label for="nome"> CNPJ </label>
                  <div class="input-group">
                    <input type="text" class="form-control cnpj" name="cnpj">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
              Fechar</button>
              <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div>
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div><!-- /.modal -->

  <script src="{{assets('js/masks.js')}}"></script>
  <script src="{{assets('js/endereco.js')}}"></script>
  <script src="{{assets('js/backend/artistas.js')}}"></script>
  <script>
      var routes = {
        backend:{
          artistas:{
            cadastrados: '{{route('backend.artistas.get')}}',
            apagados: '{{route('backend.artistas.apagados')}}',
          }
        }
      };
    $(document).ready(function () {
      $('a[href="#cadastrados"]').tab('show');
      $(document).ajaxComplete(function () {
        $('[data-toggle="tooltip"]').tooltip();
      })
  
    })
  </script>
    @endsection
