@extends('sistema.layouts.default')
@section('content')

        <main class="main-perfil2">
            <div class="text-center position-relative seta-baixo-middle">
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

                        <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase">CADASTRE O <span class="font-weight-bold">SEU EVENTO</span></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Crie o seu evento preencheno as informações abaixo</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                        <form class="form-cadastra-evento" data-action="{{route('sistema.artistas.confirmar-evento', $evento->slug)}}" data-url="{{route('sistema.artista.perfil')}}">

                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="nome" class="input-text disabled" placeholder="Nome do evento" value="{{$evento->nome}}" readonly/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" name="data_evento" class="input-text date" placeholder="Data do evento" />
                                </div>
                                <div class="col-md-4 pl-0 pl-md-3">
                                    <input type="text" name="data_arrecadacao" class="input-text date" placeholder="Data limite de arrecadação" />
                                </div>
                                <div class="col-md-4 pl-0 pl-md-3">
                                    <input type="number" name="capacidade" class="input-text" placeholder="Capacidade do evento" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="local" class="input-text" placeholder="Local do evento" />
                                </div>
                                <div class="col-md-3 pl-0 pl-md-3">
                                    <input type="text" name="cidade" class="input-text disabled" placeholder="Cidade" value="{{$evento->cidade->title}}" readonly/>
                                </div>
                                <div class="col-md-1 pl-0 pl-md-3">
                                    <select name="uf" class="input-text uf disabled" readonly>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AP">AP</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="SC">SC</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>                                        
                                    </select>
                                </div>

                            </div>

                            <div class="cor-bg-azul-show u-b-radius-5 py-3 mt-4 mb-5">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <div class="u-fs-36 text-white text-center">Valor do evento</div>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="valor" class="input-text mb-0 dinheiro-input-mask valor-evento" placeholder="R$"  />
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </div>
                            <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase">TIPOS DE INGRESSO</div>
                            <div class="u-fs-17 u-c-gs-145 u-mb-15">Lorem ipsum dolor sit amet donus ronald mcdonald vs burguer king</div>
                            <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                            <div class="row ingressos">
                              <div class="col-12 ingresso">
                                <div class="row">
                                  <div class="col-md-5">
                                      <input type="text" name="nome_ingresso[]" class="input-text ingresso-input" placeholder="Nome do ingresso" />
                                  </div>
                                  <div class="col-md-3 pl-0 pl-md-3">
                                      <input type="number" name="qtd_ingresso[]" class="input-text ingresso-input quantidade-ingresso" placeholder="Qt. do ingresso" />
                                  </div>
                                  <div class="col-md-4 pl-0 pl-md-3">
                                      <input type="text" name="valor_ingresso[]" class="input-text dinheiro-input-mask ingresso-input valor-ingresso"  placeholder="Valor do ingresso ( R$ )" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <a href="#" onclick="" class="btn-saiba-mais sombra-leve d-inline-block mt-2 btn-mais-ingresso"><i class="fa fa-plus"></i> Ingresso</a>
                            </div>
                            <div class="my-5 u-w-170 u-mx-auto u-b-radius-5 cor-bg-azul-show text-center text-white py-2">
                                <div class="u-fs-15">Total geral</div>
                                <div class="u-fs-24 valor-total">R$ 0,00</div>
                            </div>

                            <div class="text-center u-mb-100 mt-4">
                                <button type="submit" class="btn-saiba-mais sombra-leve d-inline-block mt-2">CADASTRAR EVENTO</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')
        <link rel="stylesheet" href="{{assets('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
        <script src="{{assets('js/masks.js')}}"></script>
        <script src="{{assets('js/sistema/eventos.js')}}"></script>
        <script src="{{assets('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{assets('bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js')}}"></script>
        <script>
          $(document).ready(function(){
            var date = new Date();
            date.setDate(date.getDate());
            $('.date').datepicker({
              autoclose: true,
              format: 'dd/mm/yyyy',
              language: 'pt-BR',
              startDate: date,
            });
            $('.uf').val('{{$evento->cidade->estado->letter}}');
            $('.uf').trigger('change');
          })
        </script>
        @endsection