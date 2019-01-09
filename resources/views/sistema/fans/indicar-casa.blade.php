@extends('sistema.layouts.default')
@section('content')
<main class="main-perfil2">
  <div class=" text-center position-relative seta-baixo-middle">
      <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
  </div>
  <div class="container-fluid limit pt-5">
      <div class="row">
          <div class="col-sm-3 u-pb-30">
              <!-- Navegação Rápida -->
              @include('sistema.includes.perfil-menu-lateral')
              <div class="spacer-heavy u-mt-100 u-mb-30"></div>
              <!-- Sites Parceiros -->
              @include('sistema.includes.perfil-sites-parceiros-lateral')
          </div>
          <div class="col-sm-9 pl-0 pl-sm-4">
              <div class="font-weight-light u-fs-30 u-c-gs-95 text-uppercase">INDIQUE UMA <span class="font-weight-bold">CASA</span></div>
              <div class="u-fs-17 u-c-gs-145 u-mb-15">Preencha o formulário abaixo para indicar uma casa</div>
              <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

              <form class="form-indicar-casa form-normal" data-action="{{route('sistema.casas.adicionar')}}">

                  <div class="row">
                      <div class="col-md-6">
                          <input type="text" name="nome" class="input-text" placeholder="Nome do estabelecimento" required/>
                      </div>
                      <div class="col-md-6 pl-0 pl-md-3">
                          <input type="text" name="endereco" class="input-text" placeholder="Endereço" required/>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                          <div class="row">
                              <div class="col-md-6">
                                  <input type="email" name="email" class="input-text" placeholder="E-mail" required/>
                              </div>
                              <div class="col-md-6 pl-0 pl-md-3">
                                  <input type="text" name="telefone" class="input-text telefone-input-mask" placeholder="Telefone" required/>
                              </div>
                          </div>

                      </div>
                      <div class="col-md-6 pl-0 pl-md-3">
                          <div class="row">
                              <div class="col-md-4">
                                <select name="uf" id="" class="form-control select2 uf">
                                  <option value="">Estado</option>
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
                              <div class="col-md-4 pl-0 pl-md-3">
                                  <input type="text" name="cidade" class="input-text" placeholder="Cidade" required/>
                              </div>
                              <div class="col-md-4 pl-0 pl-md-3">
                                  <input type="text" name="cep" class="input-text cep-input-mask cep" placeholder="CEP"/>
                              </div>

                          </div>
                      </div>
                  </div>

                  <div class="text-center u-mb-100">
                      <button type="submit" class="btn-saiba-mais sombra-leve d-inline-block mt-2">INDICAR UMA CASA</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</main>
<div class="tarja-colorida"></div>
<script src="{{assets('js/masks.js')}}"></script>
@endsection
