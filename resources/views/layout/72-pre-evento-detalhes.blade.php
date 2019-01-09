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
        @include('sistema.includes.topo-perfil-artista')

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

                        <div class="u-fs-15 cor-azul-show">PRÉ-EVENTO</div>
                        <div class="font-weight-light u-fs-30 u-c-gs-95"><span class="font-weight-bold">EVENTO DO FREJAT E TITÃS</span></div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-35 u-b-radius-2"></div>


                        <div class="bg-white sombra-leve u-py-20 u-px-30 u-mb-50 u-c-gs-100 u-fs-18">
                            <div class="row">
                                <div class="col-sm-5 pt-0 pt-sm-3 mb-3 mb-sm-0">
                                    <i class="fas fa-map-marker-alt cor-azul-show u-mr-5"></i> CIDADE: <span class="cor-azul-show">GUARULHOS/SÃO PAULO</span>
                                </div>
                                <div class="col-sm-4 pt-0 pt-sm-3">
                                    <div class="cor-azul-show font-weight-bold u-fs-16 mb-4 text-left">
                                        <i class="fas fa-users"></i> 300 pessoas pediram o show
                                    </div>
                                </div>
                                <div class="col-sm-3 pt-4">
                                    <div class="bg-f2 u-b-radius-5 u-p-2 u-mb-10">
                                        <div class="cor-bg-azul-show u-b-radius-5 u-h-7" style="width: 80%;"></div>
                                    </div>
                                    <div class="cor-azul-show u-fs-16 u-mb-10 text-left font-weight-bold">80% atingido</div>
                                </div>
                            </div>
                        </div>

                        <div class="font-weight-light u-fs-24 u-c-gs-95"><span class="font-weight-bold">COMPARTILHE ESTE EVENTO</span> COM SEUS AMIGOS</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>


                        <div class="row u-mb-25">
                            <div class="col-lg-3 mb-3 mb-sm-0 pt-0 pt-sm-2">
                                <div class="u-fs-18 u-c-gs-95">Compartilhe o link do evento</div>
                            </div>
                            <div class="col-lg-6 mb-3 mb-sm-0">
                                <a href="#" class="d-block td-none transition cor-azul-show-hover u-p-10 u-b-gs-230 u-c-gs-145 u-b-radius-5 u-fs-20">http://escolhaseushow.com.br/evento21</a>
                            </div>
                            <div class="col-lg-3 mb-3 mb-sm-0 pt-0 pt-sm-2 text-right">
                                <a href="#"><i class="transition hover-verde fab fa-facebook-f cor-azul-show u-fs-28 u-mx-20"></i></a>
                                <a href="#"><i class="transition hover-verde fab fa-twitter cor-azul-show u-fs-28 u-mx-20"></i></a>
                                <a href="#"><i class="transition hover-verde fab fa-whatsapp cor-azul-show u-fs-28 u-mx-20"></i></a>
                            </div>
                        </div>

                        <div class="u-h-min-435 vertical-middle-container bg-cover-center" style="background-image: url('{{assets('images/sistema/jorge-mateus.jpg')}}');">
                            <a class="w-100 d-block text-center" href="#"><img class="brilho-hover" src="{{assets('images/sistema/ver-video-btn2.png')}}" alt=""></a>
                        </div>



                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>


