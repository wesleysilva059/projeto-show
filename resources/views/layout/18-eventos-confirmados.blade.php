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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="font-weight-light u-fs-24 u-c-gs-95 u-mb-15">EVENTOS <span class="font-weight-bold">CONFIRMADOS</span></div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-35 u-b-radius-2"></div>
                            </div>
                            <div class="col-md-8 text-right">
                                <a href="#" class="u-b-radius-3 font-weight-bold u-fs-16 text-white d-inline-block cor-bg-azul-show u-px-30 u-py-10 u-mr-10 transition">MEUS EVENTOS CONFIRMADOS</a>
                                <a href="#" class="u-b-radius-3 font-weight-bold u-fs-16 u-c-gs-75 d-inline-block u-b-gs-230 u-px-30 u-py-10 transition hover-btn-blue">EVENTOS CONFIRMADOS GERAIS</a>
                            </div>
                        </div>



                        <?php for($i =0; $i <6;$i++){?>
                        <div class="bg-white sombra-leve u-pt-50 u-pb-25 u-px-30 u-mb-25">
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
                                    <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">Guarulhos / São Paulo</div>
                                    <div class="u-fs-20 u-c-gs-95 u-mb-5">Evento do Frejat e Titãs</div>
                                    <div class="u-fs-16 u-c-gs-125">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam nulla, porta fermentum.</div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <div class="mx-0 mx-md-4 ">
                                        <div class="bg-f2 u-b-radius-5 u-p-2 u-mb-10">
                                            <div class="cor-bg-azul-show u-b-radius-5 u-h-7" style="width: 80%;"></div>
                                        </div>
                                        <div class="cor-azul-show u-fs-16 u-mb-10 text-left font-weight-bold">80% atingido</div>
                                    </div>
                                    <a class="btn-detalhes font-weight-bold" href="#">COMPRE AGORA</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

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


