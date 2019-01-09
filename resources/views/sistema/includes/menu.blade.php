@auth('usuarios')
  <section class="banner-top-perfil main-menu">
@endauth
@guest('usuarios')
  <section class="main-menu">
@endguest
    <div class="perfil-top-line1 pb-3 pb-sm-0 pt-4 pt-sm-0">
        <div class="container-fluid limit">
            <div class="row">
                <div class="col-sm-8">
                    <div class="u-pt-20 mb-4 mb-sm-0">
                      @guest('usuarios')
                        <a href="{{route('sistema.fan.sou-fan')}}" class="font-weight-bold u-fs-15 text-uppercase text-white d-block d-sm-inline-block mb-3 mb-sm-0">SOU FÃ</a>
                        <a href="#" class="font-weight-bold u-fs-15 text-uppercase text-white d-block d-sm-inline-block ml-0 ml-sm-4 mb-3 mb-sm-0">SOU ARTISTA</a>
                        <a href="#" class="font-weight-bold u-fs-15 text-uppercase text-white d-block d-sm-inline-block ml-0 ml-sm-4 mb-3 mb-sm-0">SOU PRODUTOR</a>
                        <a href="{{route('sistema.pessoas.entrar')}}" class="font-weight-bold u-fs-15 text-uppercase text-white d-block d-sm-inline-block ml-0 ml-sm-4 mb-3 mb-sm-0">ENTRAR</a>
                        {{--  <a href="{{route('sistema.pessoas.entrar')}}" class="font-weight-bold u-fs-15 text-uppercase text-white d-block d-sm-inline-block ml-0 ml-sm-4 mb-3 mb-sm-0">CADASTRAR</a>  --}}
                      @endguest
                    </div>
                </div>
                <div class="col-sm-4">
                    <form action="#" method="post" class="perfil-top-form-busca">
                        <input type="text" placeholder="O que você procura?" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <a href="javascript:;" onclick="$('.perfil-top-form-busca').submit();"><img src="{{assets('images/sistema/lupa.png')}}" alt=""></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="u-pt-40">
        <div class="container-fluid limit">
            <div class="row">
                <div class="col-md-2 d-none d-md-block logo">
                    <a href="{{route('sistema.index')}}"><img src="{{assets('images/sistema/logo.png')}}" alt=""></a>
                </div>
                <div class="col-md-1 text-center pt-3 d-none d-md-block">
                    <img src="{{assets('images/sistema/vertical-spacer.png')}}" alt="">
                </div>
                @guest('usuarios')
                <div class="cadastrar-topo">
                    <a href="{{route('sistema.eventos.pre-eventos')}}">PRÉ-EVENTOS</a>
                </div>
                <div class="cadastrar-topo padding-left-20">
                    <a href="{{route('sistema.pessoas.entrar')}}">EVENTOS CONFIRMADOS</a>
                </div>
                <div class="cadastrar-topo padding-left-20">
                    <a href="{{route('sistema.pessoas.entrar')}}">CADASTRAR</a>
                </div>
              @endguest
                @auth('usuarios')
                  <div class="col-md-9">
                      <div class="position-relative u-top-minus-20 vertical-middle-container d-block d-md-flex">
                        <div class="d-inline-block">
                          <div class="menu-usuario-logado position-relative d-inline-block u-mr-40">
                              <div class="u-fs-15 text-white">Seja bem-vindo</div>
                              <a href="javascript:;" class="menu-usuario-logado-nome">{{$user->pessoa->nome}} <i class="fas fa-angle-down"></i></a>

                              <div class="submenu-usuario-logado submenu-usuario-logado--perfil sombra-leve2">
                                  @if( $user->tipo == 0 )
                                    <a href="{{route('sistema.fan.perfil')}}">MEU PERFIL</a>
                                  @endif
                                  @if( $user->tipo == 1 )
                                    <a href="{{route('sistema.artista.perfil')}}">MEU PERFIL</a>
                                  @endif
                                  <a class="d-block d-md-none" href="{{route('sistema.eventos.pre-eventos')}}">PRÉ-EVENTOS</a>
                                  <a class="d-block d-md-none" href="#">EVENTOS CONFIRMADOS</a>
                                  <a class="d-block d-md-none" href="{{route('sistema.fan.pedir')}}">PEÇA UM EVENTO</a>
                                  <!--/ mobile links -->
                                  <a class="logout" href="{{route('sistema.sair')}}">LOGOUT <i class="fas fa-power-off float-right"></i></a>
                              </div>
                          </div>
                          @if( $user->tipo == 1 )
                            <a href="#" class="d-block w-75 position-relative u-top-minus-30 text-center text-white u-fs-15 u-b-radius-5  u-py-5 cor-bg-azul-show hover-verde-bg transition">
                                <span class="underline font-weight-bold">15</span> notificações
                            </a>
                          @endif
                        </div>

                          <a class="d-none d-md-inline-block white-outline-link u-mr-40 mb-4" href="{{route('sistema.eventos.pre-eventos')}}">PRÉ-EVENTOS</a>
                          <a class="d-none d-md-inline-block white-outline-link u-mr-40 mb-4" href="#">EVENTOS CONFIRMADOS</a>
                          @if( $user->tipo == 1 )
                            <a class="d-none d-md-inline-block white-outline-link-primary  mb-4" href="{{route('sistema.fan.pedir')}}">CRIE UM EVENTO</a>
                          @endif
                          @if( $user->tipo == 0 )
                            <a class="d-none d-md-inline-block white-outline-link-primary  mb-4" href="{{route('sistema.fan.pedir')}}">PEÇA UM EVENTO</a>
                          @endif
                      </div>
                  </div>
                @endauth
            </div>
        </div>
    </div>
</section>
