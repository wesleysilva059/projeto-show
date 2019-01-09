<!-- Header Desktop Horizontal -->
<header class="d-none d-md-block">
    <div class="row">
        <div class="col-sm-2">
        </div>
        <div class="col-sm-8 ">
            <div class="menu-topo">
                <a href="{{route('sistema.fan.sou-fan')}}">SOU FÃ</a>
                <a href="#">SOU ARTISTA</a>
                <a href="#">SOU PRODUTOR</a>
                <a href="#">AJUDA</a>
                <a href="{{route('sistema.pessoas.entrar')}}">ENTRAR</a>
            </div>
        </div>
        <div class="col-sm-2">

          @guest('usuarios')
            <div class="cadastrar-topo">
                <a href="{{route('sistema.pessoas.entrar')}}">CADASTRAR</a>
            </div>
          @endguest

            @auth('usuarios')
            <!-- usuario está logado -->
            <div class="menu-usuario-logado position-relative">
                <a href="javascript:;" class="menu-usuario-logado-nome">GUILHERME MESSIAS <i class="fas fa-angle-down"></i></a>

                <div class="submenu-usuario-logado">
                    <a href="#">ENTRAR PERFIL</a>
                    <a href="">EDITAR PERFIL</a>
                    <a class="logout" href="">LOGOUT <i class="fas fa-power-off float-right"></i></a>
                </div>
            </div>
            @endauth
        </div>
    </div>
</header>
