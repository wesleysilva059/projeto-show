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

                        <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase">PEDIR O <span class="font-weight-bold">SEU EVENTO</span></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Complete as informações do seu evento preenchendo as informações abaixo</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                        <div class="bg-white sombra-leve p-5 u-mb-100 text-center margin-bottom-20">
                            <div class="cor-azul-show u-fs-25 text-center mb-5">Dados do Evento</div>
                            <div class="row">
                                <div class="col-sm-5 mb-5">
                                    <div class="cor-azul-show u-fs-25 text-center">Cidade</div>
                                    <div class="u-c-gs-130 u-fs-35 nome-cidade">{{$cidade->title}} / {{$uf->letter}}</div>
                                </div>
                                <div class="col-sm-2 d-none d-sm-block">
                                    <div class="u-w-1 u-h-70 bg-f2 u-mx-auto"></div>
                                </div>
                                <div class="col-sm-5 mb-5">
                                    <div class="cor-azul-show u-fs-25 text-center">Artista</div>
                                    <div class="u-c-gs-130 u-fs-35 nome-artista">{{$artista->nome}}</div>
                                </div>
                            </div>
                          </div>

                        <form class="form-salva-evento" data-action="{{route('sistema.eventos.criar')}}">
                          <input type="hidden" name="cidade_id" value="{{$cidade->id}}">
                          <input type="hidden" name="artista_id" value="{{$artista->id}}">
                            <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase">NOME DO <b>EVENTO</b></div>
                            <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="nome" class="input-text" placeholder="" required/>
                                </div>
                            </div>

                            <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase margin-top-50">RESUMO DO <b>EVENTO</b></div>
                            <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>
                            <div class="row">
                              <textarea name="resumo" style="width: 100%;" id="" cols="30" rows="10" class="resumo text-20-pt" required></textarea>
                            </div>

                            <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase margin-top-50">IMAGEM DO <b>EVENTO</b></div>
                            <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>
                            <div class="row">
                              <img id="imagem-img" class="img-responsive img-editor" data-url="{{route('sistema.eventos.upload')}}" class="fr-fil fr-dib" src="{{assets('images/backend/sem-imagem.png')}}" alt="Imagem do evento"/>
                              <input type="hidden" name="imagem" value="" class="url-imagem" id="imagem">
                            </div>

                            <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase margin-top-50">DESCRIÇÃO DO <b>EVENTO</b></div>
                            <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>
                            <div class="row">
                              <textarea name="descricao" style="width: 100%;" id="" cols="30" rows="10" class="editor"></textarea>
                            </div>

                            <div class="text-center u-mb-100 mt-4">
                                <button type="submit" class="btn-saiba-mais sombra-leve d-inline-block mt-2">SALVAR EVENTO</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.0/js/froala_editor.pkgd.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.8.4/js/languages/pt_br.js?{{rand(0, 99999999999999999)}}"></script>
        <script src="{{assets('js/sistema/fans.js')}}"></script>
        <script>
          var routes = {
            sistema: {
              ajax: {
                eventos: {
                  upload: '{{route('sistema.eventos.upload')}}'
                }
              }
            }
          }
        </script>
      @endsection