@extends('sistema.layouts.default')
@section('content')
<!-- Banner principal da home -->
<section class="banner-sou-fan ui-h-min-500">
    <div class="container-fluid limit">

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="banner-home-frase ui-pt-50">
                    PARA PEDIR O SEU SHOW<br />FAÇA O LOGIN <span class="f-zul-sign">abaixo</span>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</section>


<section class="sou-fa-varios-eventos-section bg-branco-quadriculado pb-5">
    <div class="text-center position-relative seta-baixo-middle">
        <a href="#"><img src="{{assets('/images/sistema/seta-baixo.png')}}" alt=""></a>
    </div>
    <div class="container-fluid limit">
        <div class="row pt-5">
            <div class="col-sm-6 pr-sm-3 pb-3">
                <form id="form-login" action="#" method="post" class="acesso-container form-login" data-action="{{route('sistema.pessoas.login')}}">

                    <div class="acesso-title">Login</div>
                    <div class="row">
                      <div class="col-sm-4 pr-0 pr-sm-3 u-mb-15">
                          <label class="item-box-a-selecionar item-box-selecionado" onclick="marca_radio(this, 'tipol');">Fã
                              <input type="radio" name="tipol" value="0" checked>
                          </label>
                      </div>
                      <div class="col-sm-4 pr-0 pr-sm-3 u-mb-15">
                          <label class="item-box-a-selecionar" onclick="marca_radio(this, 'tipol');">Artista
                              <input type="radio" name="tipol" value="1">
                          </label>
                      </div>
                      <div class="col-sm-4 pr-0 pr-sm-3 u-mb-15">
                          <label class="item-box-a-selecionar" onclick="marca_radio(this, 'tipol');">Produtor
                              <input type="radio" name="tipol" value="2">
                          </label>
                      </div>
                  </div>
                  <div class="row">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" required>
                  </div>
                  <div class="row">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" required>
                  </div>
                    <div class="text-center pt-3">
                        <button type="submit" class="section-fase-destaque-btn sombra-leve mb-3">ACESSAR</button>
                        <a class="link-esqueci-senha d-block" href="#" data-toggle="modal" data-target="#exampleModal">[Esqueci
                            minha senha]</a>
                    </div>
                </form>

            </div>
            <div class="col-sm-6 pl-sm-3 pb-3">
                <form id="form-novo-cadastro" data-action="{{route('sistema.pessoas.sessioncadastro')}}" class="acesso-container form-cadastro">
                    <div class="acesso-title">Faça seu cadastro</div>
                    <div class="row">
                        <div class="col-sm-4 pr-0 pr-sm-3 u-mb-15">
                            <label class="item-box-a-selecionar item-box-selecionado" onclick="marca_radio(this, 'tipo');">Fã
                                <input type="radio" name="tipo" value="0" checked>
                            </label>
                        </div>
                        <div class="col-sm-4 pr-0 pr-sm-3 u-mb-15">
                            <label class="item-box-a-selecionar" onclick="marca_radio(this, 'tipo');">Artista
                                <input type="radio" name="tipo" value="1">
                            </label>
                        </div>
                        <div class="col-sm-4 pr-0 pr-sm-3 u-mb-15">
                            <label class="item-box-a-selecionar" onclick="marca_radio(this, 'tipo');">Produtor
                                <input type="radio" name="tipo" value="2">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <label for="nome">Nome</label>
                        <input id="nome" type="text" name="nome" required>
                    </div>
                    <div class="row">
                        <label for="email">E-mail</label>
                        <input id="email_" type="email" name="email" required>
                    </div>
                    <div class="row text-center justify-content-center pt-3">
                        <button class="section-fase-destaque-btn sombra-leve" type="submit">PROSSEGUIR CADASTRO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Rodape -->
@include('sistema.includes.footer-home')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <a href="#" class="fechar-popup" data-dismiss="modal">X</a>

            <!-- div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div -->
            <div class="modal-body">
                <form id="form-esqueci-senha" action="#" method="post" class="acesso-container b-none pt-0">
                    <div class="acesso-title">Esqueceu sua senha?</div>
                    <label for="email">Digite seu e-mail para reenvio de senha</label>
                    <input id="email" type="email" name="email">

                    <div class="text-center pt-3">
                        <a class="section-fase-destaque-btn sombra-leve mb-0" href="javascript:;" onclick="$('#form-esqueci-senha').submit();">ENVIAR
                            NOVA SENHA</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
