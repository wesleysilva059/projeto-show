<!-- Menu mobile que aparece ao clicar no menu hamburguer. Inicialmente escondido. -->
<section class="menu-mobile-popup d-print-none" >
    <div class="menu-topo">
        <a href="#">SOU FÃ</a>
        <a href="#">SOU ARTISTA</a>
        <a href="#">SOU PRODUTOR</a>
        <a href="#">AJUDA</a>
        <a href="#">ENTRAR</a>
    </div>
    <?php if(!isset($logado)){?>
            <div class="cadastrar-topo">
                <a href="#">CADASTRAR</a>
            </div>
            <?php } ?>

            <?php if(isset($logado)){?>
            <!-- usuario está logado -->
            <div class="menu-usuario-logado position-relative">
                <a href="javascript:;" class="menu-usuario-logado-nome">GUILHERME MESSIAS <i class="fas fa-angle-down"></i></a>

                <div class="submenu-usuario-logado">
                    <a href="#">ENTRAR PERFIL</a>
                    <a href="">EDITAR PERFIL</a>
                    <a class="logout" href="">LOGOUT <i class="fas fa-power-off float-right"></i></a>
                </div>
            </div>
            <?php } ?>
</section>

<!-- Header Mobile fixed. Contem logo e menu hamburguer -->
<header class="d-block d-md-none header-mobile d-print-none">
    <a href="{{route('sistema.index')}}"><img src="{{assets('images/sistema/logo.png')}}" alt="Logo Escolha seu show"></a>
    <button class="hamburger hamburger--collapse" type="button" onclick="$(this).toggleClass('is-active');$('.menu-mobile-popup').toggleClass('menu-mobile-popup-show');">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
</header>
