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
                        <div class="text-uppercase u-fs-24 u-c-gs-95 font-weight-light u-mb-0">LISTA DE <span class="font-weight-bold">PRODUTORES</span></div>
                        <div class="u-c-gs-145 u-fs-17 u-mb-15">Veja abaixo os produtores que estão cadastrados no Escolha Seu Show</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>

                        <form id="busca-artista-form" action="#" method="post" class="d-block td-none bg-white sombra-leve u-py-25 u-px-30 u-mb-30">
                            <div class="pl-0 pl-md-5">
                                <div class="u-fs-24 u-c-gs-95 u-mb-10">Encontre seu produtor</div>
                                <div class="u-fs-18 u-c-gs-180">O que você procura?</div>
                                <div class="row">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                        <input type="text" name="busca" class="input-text my-0">
                                    </div>
                                    <div class="col-md-4 pl-0 pl-md-3 mb-3 mb-md-0">
                                        <a class="btn-saiba-mais btn-saiba-mais--busca sombra-leve d-inline-block" href="javascript:;" onclick="$('#busca-artista-form').submit();">BUSCAR</a>
                                    </div>

                                </div>
                            </div>

                        </form>

                        <div>
                            <?php for($i =0; $i <5;$i++){?>
                            <a href="#" class="d-block td-none bg-white sombra-leve u-pt-50 u-pb-25 u-px-30 u-mb-30">
                                <div class="row">
                                    <div class="col-md-2 mb-3 mb-md-0">
                                        <img src="{{assets('images/sistema/artista-thumb.png')}}" class="u-b-radius-5 w-100" alt="">
                                    </div>
                                    <div class="col-md-10 pl-0 pl-md-3 mb-3 mb-md-0">
                                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">BANDA DA CIDADE</div>
                                        <div class="u-fs-24 u-c-gs-95 u-mb-10">Frejat Junior Pires</div>
                                        <div class="u-fs-16 u-c-gs-125">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam nulla, porta fermentum.</div>
                                    </div>

                                </div>
                            </a>
                            <?php } ?>
                        </div>

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


