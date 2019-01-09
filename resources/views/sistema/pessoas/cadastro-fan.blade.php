@extends('sistema.layouts.default')
@section('content')
<!-- Menu mobile -->
@include('sistema.includes.menu-mobile')


<!-- Banner principal da home -->
<section class="banner-sou-fan">
  <div class="container-fluid limit">
    
    <!-- Menu desktop -->
    @include('sistema.includes.menu-desktop')
    
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div class="banner-home-frase">
          NUNCA FOI TÃO FÁCIL IR AO <span class="f-zul-sign">Evento</span> DA SUA <span class="font-weight-bold">BANDA
            PREFERIDA</span>
          </div>
          
          <div class="f-painter u-fs-30 text-white text-center"><span class="cor-azul-show">Fan</span>, faça seu
            cadastro abaixo</div>
            
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
    </section>
    <section class="main-perfil pb-5 pt-sm-0">
      <div class="text-center position-relative seta-baixo-middle mb-5">
        <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
      </div>
      
      <div class="container-fluid limit">
        <form class="form-finaliza-cadastro" data-action="{{route('sistema.pessoas.finaliza_cadastro')}}">
          <input type="hidden" name="tipo" value="0" class="">
          <div class="cor-azul-show font-weight-light u-fs-30">
            <strong class="font-weight-bold">01.</strong> INFORMAÇÕES PESSOAIS <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
          </div>
          <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
          <div class="row">
            <div class="col-sm-8 pr-0 pr-sm-3">
              <input type="text" class="input-text disabled" value="{{$dados->nome}}" readonly name="nome"
              placeholder="Nome">
            </div>
            <div class="col-sm-4 pr-0 pr-sm-3">
              <input type="text" class="input-text disabled" value="{{$dados->email}}" readonly name="email"
              placeholder="E-mail">
            </div>
          </div>
          <div class="row endereco">
            <div class="col-sm-2 pr-sm-3">
              <input type="text" class="input-text cep-input-mask cep" name="cep" placeholder="CEP" required>
            </div>
            <div class="col-sm-6 pr-sm-3">
              <input type="text" class="input-text disabled logradouro" name="logradouro" placeholder="Logradouro"
              required>
            </div>
            <div class="col-sm-4 pr-sm-3">
              <input type="text" class="input-text disabled numero" name="numero" placeholder="Número" required>
            </div>
            <div class="col-sm-3 pr-sm-3">
              <input type="text" class="input-text disabled complemento" name="complemento" placeholder="Complemento">
            </div>
            <div class="col-sm-5 pr-sm-3">
              <input type="text" class="input-text disabled bairro" name="bairro" placeholder="Bairro" required>
            </div>
            <div class="col-sm-4 pr-sm-3">
              <input type="text" class="input-text disabled localidade" name="cidade" placeholder="Cidade" required>
            </div>
            <div class="col-sm-1 pr-sm-3">
              <input type="text" class="input-text disabled uf" name="uf" placeholder="U.F" required>
            </div>
            <div class="col-sm-4 pr-0 pr-sm-3">
              <input type="text" class="input-text telefone telefone-input-mask disabled" name="telefone"
              placeholder="Telefone">
            </div>
          </div>
          <div class="u-h-1 cinza-traco u-my-25"></div>
          <div class="cor-azul-show font-weight-light u-fs-30">
            <strong class="font-weight-bold">02.</strong> SEU ESTILO MUSICAL <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
          </div>
          <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
          <div class="row">
            @foreach( $estilos as $estilo )
              <div class="col-2 pr-0">
                <label class="container-check">
                  <input type="checkbox" name="estilos[]" value="{{$estilo->id}}">
                  <span class="check-label">{{$estilo->nome}}</span>
                  <span class="checkmark"></span>
                </label>
              </div>
            @endforeach
          </div>
          <div class="u-h-1 cinza-traco u-my-25"></div>
          <div class="u-c-gs-95 font-weight-light u-fs-30">
            <strong class="font-weight-bold">03.</strong> FORMAS DE PAGAMENTO
            <div class="u-c-gs-145 u-fs-17 pl-0 pl-sm-5 u-mb-25">Fique tranquilo, seus dados pessoais ficarão
              registrados em nosso sistema e só haverá débito quando a meta do show que você escolheu for alcança</div>
            </div>
            <div class="bg-c-gs-97 u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
            <div class="row">
              <div class="col-sm-5 pr-0 pr-sm-4 u-mb-25">
                <label class="item-box-a-selecionar item-box-selecionado u-mb-15">Cartão de Crédito
                  <input type="radio" name="forma_pagamento" value="cartao_credito">
                </label>
              </div>
              <div class="col-sm-7">
                <div class="row">
                  <div class="col-sm-6 u-mb-25">
                    <img class="mw-100" src="{{assets('images/sistema/cartao-credito.png')}}" alt="">
                  </div>
                  <div class="col-sm-6 ">
                    <div class="u-fs-13 u-c-gs-130 text-uppercase">NÚMERO DO CARTÃO DE CRÉDITO</div>
                    <input type="text" name="cc" class="input-text error-validation credit-input-mask" required>
                    
                    
                    <div class="u-fs-13 u-c-gs-130 text-uppercase">NOME DO TITULAR</div>
                    <input type="text" name="titular_cc" class="input-text" data-toggle="popover"
                    data-placement="bottom" data-content="Nome da pessoa do jeito que está no cartão" required>
                    
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="u-fs-13 u-c-gs-130 text-uppercase">MÊS DE VENCIMENTO</div>
                        <select name="mes_cc" class="input-text" required>
                          <option value="">MÊS</option>
                          <option value="01">JANEIRO</option>
                          <option value="02">FEVEREIRO</option>
                          <option value="03">MARÇO</option>
                          <option value="04">ABRIL</option>
                          <option value="05">MAIO</option>
                          <option value="06">JUNHO</option>
                          <option value="07">JULHO</option>
                          <option value="08">AGOSTO</option>
                          <option value="09">SETEMBRO</option>
                          <option value="10">OUTUBRO</option>
                          <option value="11">NOVEMBRO</option>
                          <option value="12">DEZEMBRO</option>
                        </select>
                      </div>
                      <div class="col-sm-6 pl-0 pl-sm-3">
                        <div class="u-fs-13 u-c-gs-130 text-uppercase">ANO DE VENCIMENTO</div>
                        <select name="ano_cc" class="input-text" required>
                          <option value="">ANO</option>
                          @php
                            $ano = date('Y');
                          @endphp
                          @for($x = $ano; $x < $ano + 21; $x++) 
                            <option value="{{$x}}">{{$x}}</option>
                          @endfor
                        </select>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="u-fs-13 u-c-gs-130 text-uppercase">CÓD. DE SEGURANÇA</div>
                        <input type="number" name="cvc_cc" class="input-text cvc" maxlength="4"
                        placeholder="CVC" required>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-h-1 cinza-traco u-my-25"></div>
            <div class="u-c-gs-97 font-weight-light u-fs-30">
              <strong class="font-weight-bold">04.</strong> CADASTRE SUA SENHA
            </div>
            <div class="bg-c-gs-97 u-w-60 u-h-3 u-mt-5 u-mb-15"></div>
            <div class="u-c-gs-145 u-fs-17 u-mb-25">Abaixo você poderá alterar a senha de acesso da plataforma</div>
            <div class="row">
              <div class="col-sm-6">
                <input type="password" name="senha" class="input-text" placeholder="Senha" required>
              </div>
              <div class="col-sm-6 pl-0 pl-sm-4">
                <input type="password" name="confirmacao_de_senha" class="input-text" placeholder="Repetir senha" required>
              </div>
            </div>
            <div class="text-center u-mb-25">
              <label class="container-check d-inline-block position-relative u-top-minus-7">
                <input type="checkbox" required>
                <span class="check-label"></span>
                <span class="checkmark"></span>
              </label>
              <a target="_blank" class="cor-azul-show u-fs-16" href="#">Aceito e concordo com os termos de política</a>
            </div>
            <div class="text-center">
              <button type="submit" class="section-fase-destaque-btn sombra-leve mb-3">FINALIZAR</button>
            </div>
          </form>
        </div>
        
      </section>
      <div class="tarja-colorida"></div>
      <script src="{{assets('js/masks.js')}}"></script>
      <script src="{{assets('js/endereco.js')}}"></script>
      <script>
        $(document).ready(function () {
          $('.cep').focus();
        });
      </script>
      @endsection
      