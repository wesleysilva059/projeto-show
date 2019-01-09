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
        @include('sistema.includes.topo-perfil')

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

                        <div class="font-weight-light u-fs-30 u-c-gs-95 u-mb-15">EVENTOS <span class="font-weight-bold">JÁ REALIZADOS</span></div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-35 u-b-radius-2"></div>

                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Veja abaixo os eventos que já aconteceram</div>

                        <div>
                            <?php for($i =0; $i <6;$i++){?>
                            <div class="u-py-25 u-mb-25 u-bb-gs-230">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="cor-azul-show text-uppercase u-fs-21 font-weight-bold mb-4 mb-md-0">
                                            <div class="">DEZ</div>
                                            <div class="u-fs-30 u-lh-20">16</div>
                                        </div>
                                    </div>

                                    <div class="col-md-1 mb-3 mb-md-0">
                                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-100" alt="">
                                    </div>
                                    <div class="col-md-6 pl-0 pl-md-3 mb-3 mb-md-0">
                                        <div class="u-fs-20 u-c-gs-95 u-mb-15">information Society Duality School Ipsum Donus</div>
                                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">MORRO DA URCA / RIO DE JANEIRO</div>


                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a class="btn-detalhes-peq font-weight-bold" href="#">VER DETALHES</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        @include('sistema.includes.paginacao')





                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>


