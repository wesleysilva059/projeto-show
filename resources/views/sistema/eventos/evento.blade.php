@extends('sistema.layouts.default')
@section('content')
<!-- Topo Perfil -->

        <main class="main-perfil2">
            <div class="text-center position-relative seta-baixo-middle">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
            <div class="container-fluid limit pt-5">
                <div class="row">
                    <div class="col-sm-3 u-pb-30">
                        <!-- Navegação Rápida -->
                        @auth('usuarios')
                          @include('sistema.includes.perfil-menu-lateral')
                          <div class="spacer-heavy u-mt-100 u-mb-30"></div>
                        @endauth
                        <!-- Sites Parceiros -->
                        @include('sistema.includes.perfil-sites-parceiros-lateral')


                    </div>
                    <div class="col-sm-9 pl-0 pl-sm-4">
                        <div class="u-fs-15 cor-azul-show">PRÉ-EVENTO</div>
                        <div class="font-weight-light u-fs-30 u-c-gs-95"><span class="font-weight-bold toupper">{{$evento->nome}}</span></div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-35 u-b-radius-2"></div>


                        <div class="bg-white sombra-leve u-py-20 u-px-30 u-mb-50 u-c-gs-100 u-fs-18">
                            <div class="row">
                                <div class="col-sm-5 pt-0 pt-sm-3 mb-3 mb-sm-0">
                                    <i class="fas fa-map-marker-alt cor-azul-show u-mr-5"></i> CIDADE: <span class="cor-azul-show toupper">{{$evento->cidade->title}} / {{$evento->cidade->estado->letter}}</span>
                                </div>
                                <div class="col-sm-5 pt-0 pt-sm-3">
                                  @if( !$participa )
                                    <div class="row">
                                      <div class="cor-azul-show u-fs-16 font-weight-bold"><i class="far fa-clock u-mr-5"></i> Participe deste evento! </div>
                                    </div>
                                    <div class="bg-f2 u-b-radius-5 u-p-2">
                                        <div class="cor-bg-azul-show u-b-radius-5 u-h-7" style="width: {{$percentual}}%;"></div>
                                    </div>
                                    <div class="cor-azul-show u-fs-16 u-mb-25 text-left font-weight-bold">{{$percentual}}% atingido</div>
                                  @else
                                    <div class="row">
                                      @if( (int)$percentual < 99 )
                                        <div class="cor-azul-show u-fs-16 font-weight-bold"><i class="far fa-clock u-mr-5"></i> Convide mais pessoas! </div>
                                      @else
                                        <div class="cor-azul-show u-fs-16 font-weight-bold"><i class="far fa-clock u-mr-5"></i> Quantidade de interessados atingida! </div>
                                      @endif
                                    </div>
                                    <div class="bg-f2 u-b-radius-5 u-p-2">
                                      <div class="cor-bg-azul-show u-b-radius-5 u-h-7" style="width: {{$percentual}}%;"></div>
                                    </div>
                                    <div class="cor-azul-show u-fs-16 u-mb-25 text-left font-weight-bold">{{$percentual}}% atingido</div>
                                  @endif
                                </div>
                                @if( !$user || ($user->pessoa->id != $evento->fan_id && $user->tipo == 0 ) && !$participa ) 
                                  <div class="col-sm-12 text-center">
                                      @if( $confirma )
                                        <a class="btn-detalhes mb-0" href="#" data-toggle="modal" data-target="#exampleModal">QUERO PARTICIPAR</a>
                                      @else
                                        <a class="btn-detalhes mb-0" href="{{route('sistema.eventos.confirma-participacao', $evento->slug)}}">QUERO PARTICIPAR</a>
                                      @endif
                                  </div>
                                @endif
                            </div>
                        </div>

                        <div class="font-weight-light u-fs-24 u-c-gs-95"><span class="font-weight-bold">COMPARTILHE ESTE EVENTO</span> COM SEUS AMIGOS</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>


                        <div class="row u-mb-25">
                            <div class="col-lg-3 mb-3 mb-sm-0 pt-0 pt-sm-2">
                                <div class="u-fs-18 u-c-gs-95">Compartilhe o link do evento</div>
                            </div>
                            <div class="col-lg-3 mb-3 mb-sm-0 pt-0 pt-sm-2 text-right">
                              <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}&amp;src=sdkpreparse" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=580')"><i class="transition hover-verde fab fa-facebook-f cor-azul-show u-fs-28 u-mx-20"></i></a>
                              <a href="https://twitter.com/intent/tweet?url={{Request::url()}}&text=Participe deste evento:&via=escolhaseushow" onclick="return !window.open(this.href, 'Twitter', 'width=640,height=580')"><i class="transition hover-verde fab fa-twitter cor-azul-show u-fs-28 u-mx-20"></i></a>
                              <a href="#"><i class="transition hover-verde fab fa-whatsapp cor-azul-show u-fs-28 u-mx-20"></i></a>
                          </div>
                            <div class="col-lg-12 mb-3 mb-sm-0 margin-top-10">
                                <a href="#" class="d-block td-none transition cor-azul-show-hover u-p-10 u-b-gs-230 u-c-gs-145 u-b-radius-5 u-fs-20 url-evento" data-toggle="popover" title="Copiado!" data-content="O link deste evento foi copiado com sucesso!">{{Request::url()}}</a>
                            </div>
                        </div>

                        <div class="u-h-min-435 vertical-middle-container bg-cover-center" style="background-image: url('{{$evento->imagem}}');">
                        </div>
                        <div class="spacer-middle u-my-20"></div>
                        <div>
                            <div class="u-fs-20 u-c-gs-95">Descrição do Evento</div>
                            <div class="u-fs-16 u-c-gs-130 margin-top-30">
                                {!! $evento->descricao !!}
                            </div>
                        </div>

                        <div class="spacer-middle u-my-50"></div>

                        <div class="font-weight-light u-fs-24 u-c-gs-95">VEJA <span class="font-weight-bold">TAMBÉM</span></div>
                        <div class="u-fs-17 u-c-gs-145">Veja abaixo os shows que estão em processo de captação de recuros e contribua!</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-50 u-b-radius-2"></div>

                        <div class="u-mb-100">
                            <?php for($i =0; $i <3;$i++){?>
                            <div class="bg-white sombra-leve u-pt-50 u-pb-25 u-px-30 u-mb-25">
                                <div class="row">
                                    <div class="col-md-2 mb-3 mb-md-0">
                                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-100" alt="">
                                    </div>
                                    <div class="col-md-6 pl-0 pl-md-3 mb-3 mb-md-0">
                                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">Guarulhos / São Paulo</div>
                                        <div class="u-fs-20 u-c-gs-95 u-mb-5">Evento do Frejat</div>
                                        <div class="u-fs-16 u-c-gs-125">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam nulla, porta fermentum.</div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="cor-azul-show u-fs-16 u-mb-25 font-weight-bold"><i class="far fa-clock u-mr-5"></i> Aguardando liberação ...</div>
                                        <a class="btn-detalhes" href="#">VER DETALHES</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <a href="#" class="fechar-popup" data-dismiss="modal">X</a>

                    <div class="modal-body">
                        <div class="position-relative u-top-minus-25">
                            <div class="u-fs-22 cor-azul-show">Entenda <span class="font-weight-bold">como funciona</span></div>
                            <div class="u-fs-18 u-c-gs-70 u-mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non luctus orci, in faucibus justo. Aliquam ut nisi ornare, pretium urna gravida, cursus mauris. Aenean commodo turpis at orci feugiat, molestie semper lectus suscipit. Pellentesque et eros consectetur, ornare ligula et, semper justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non luctus orci, in faucibus justo. Aliquam ut nisi ornare, pretium urna gravida, cursus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non luctus orci, in faucibus justo. Aliquam ut nisi ornare, pretium urna gravida, cursus mauris. Aenean commodo turpis at orci feugiat, molestie semper lectus suscipit. Pellentesque et eros consectetur, ornare ligula et, semper justo. Aenean commodo turpis at orci feugiat.</div>
                            <div class="text-center">
                                <button class="white-outline-link-primary px-5 btn-confirma-participacao-evento" data-action="{{route('sistema.eventos.confirma', $evento->id)}}" style="cursor: pointer" >CONFIRMAR PARTICIPAÇÃO</button>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="tarja-colorida"></div>
        <div id="fb-root"></div>
        <script src="{{assets('js/sistema/eventos.js')}}"></script>
        <script>
          (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=166717867037882&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
        @endsection