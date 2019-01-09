<!doctype html>
<html lang="en">
    <head>
        <title>Escolha Seu Show</title>
        @include('sistema.includes.head')
    </head>
    <body>

        <!-- Menu mobile -->
        @include('sistema.includes.menu-mobile')

        <!-- Topo Perfil -->
        @include('sistema.includes.topo-perfil-produtor')

        <main class="main-perfil">
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
                        <div class="font-weight-light u-fs-30 u-c-gs-95 text-uppercase">INDIQUE UM <span class="font-weight-bold">ARTISTA</span></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Preencha o formulário abaixo para indicar um artista</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                        <form id="form-indique" action="#" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nome" class="input-text mb-4" placeholder="Nome / Banda"/>
                                    <input type="text" name="facebook" class="input-text mb-4" placeholder="Link Facebook"/>
                                </div>
                                <div class="col-md-6 pl-0 pl-md-4">
                                    <input type="text" name="email" class="input-text mb-4" placeholder="E-mail"/>
                                    <input type="text" name="site" class="input-text mb-4" placeholder="Site"/>
                                </div>
                            </div>
                            <div class="text-center u-mb-100">
                                <a class="btn-saiba-mais sombra-leve d-inline-block mt-2" href="javascript:;" onclick="$('#form-indique').submit();">INDICAR UM ARTISTA</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>

       <br/><br/><br/>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>


