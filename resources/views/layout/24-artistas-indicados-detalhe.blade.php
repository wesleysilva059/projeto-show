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
                        <div class="u-fs-15 cor-azul-show text-uppercase">BANDA DA CIDADE</div>
                        <div class="font-weight-light u-fs-30 u-c-gs-95 text-uppercase">FREJAT <span class="font-weight-bold">JUNIOR PIRES</span></div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-25">Veja abaixo mais detalhes do artista</div>

                        <div class="row">
                            <div class="col-md-3 pr-0 pr-md-4">
                                <img src="{{assets('images/sistema/artista-thumb.png')}}" class="w-100" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="u-fs-18 u-c-gs-95 u-mb-10">Release da banda</div>
                                <div class="u-fs-16 u-c-gs-130 u-mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris lectus nibh, ultrices quis dapibus in, cursus id tortor. Maecenas ac gravida tellus. Suspendisse et tortor lectus. Aenean sodales vehicula odio. Integer sagittis convallis pellentesque. Curabitur at sem facilisis neque gravida tincidunt. </div>
                                <div class="u-fs-18 u-c-gs-95 u-mb-15">Estilo Musical</div>
                                <div class="d-inline-block u-mb-15 u-b-gs-230 u-c-gs-145 u-py-10 u-pl-25 u-pr-45  u-fs-20">
                                    <img src="{{assets('images/sistema/check-negative2.png')}}" class="u-mr-10" alt=""> Rock
                                </div>
                            </div>
                        </div>

                        <div class="u-h-2 u-bc-gs-230 u-my-30"></div>
                        <div class="row  u-fs-18 u-c-gs-95">
                            <div class="col-md-7 u-mb-35">
                                <div class="u-mb-25">
                                    <img src="{{assets('images/sistema/youtube.png')}}" class="mr-2 position-relative u-top-minus-3" alt=""> Canal no Youtube
                                </div>


                                <div class="u-h-min-300 vertical-middle-container bg-cover-center" style="background-image: url('{{assets('images/sistema/jorge-mateus.jpg')}}');">
                                    <a class="w-100 d-block text-center" href="#"><img class="brilho-hover" src="{{assets('images/sistema/ver-video-btn2.png')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-5 pl-0 pl-md-4 u-mb-35">
                                <div class="u-mb-15""">
                                    <img src="{{assets('images/sistema/facebook.png')}}" class="mr-2 position-relative u-top-minus-3" alt=""> Facebook
                                </div>
                                <a href="#" class="td-none transition cor-azul-show-hover d-block u-p-10 u-b-gs-230 u-c-gs-145 u-b-radius-5 u-fs-20 u-mb-35">facebook.com/frejat</a>

                                <div class="u-mb-15""">
                                    <img src="{{assets('images/sistema/instagram.png')}}" class="mr-2 position-relative u-top-minus-3" alt=""> Instagram
                                </div>
                                <a href="#" class="td-none transition cor-azul-show-hover d-block u-p-10 u-b-gs-230 u-c-gs-145 u-b-radius-5 u-fs-20 u-mb-35">instagram.com/frejat</a>

                                <div class="u-mb-15""">
                                    <img src="{{assets('images/sistema/website.png')}}" class="mr-2 position-relative u-top-minus-3" alt=""> Website
                                </div>
                                <a href="#" class="td-none transition cor-azul-show-hover d-block u-p-10 u-b-gs-230 u-c-gs-145 u-b-radius-5 u-fs-20 u-mb-35">www.frejat.com.br</a>
                            </div>
                        </div>


                        <div class="font-weight-light u-fs-24 u-c-gs-95"><span class="font-weight-bold">EVENTOS </span>CONFIRMADOS PELO ARTISTA</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>

                        <div class="u-mb-35">
                            <a href="javascript:;" onclick="tab_eventos('tab-eventos-confirmados');" class="tab-evento-link tab-eventos-confirmados-link tab-evento-link-active u-b-radius-3 font-weight-bold u-fs-16 u-c-gs-75 d-inline-block u-b-gs-230 u-px-30 u-py-10 transition hover-btn-blue">EVENTOS CONFIRMADOS</a>
                            <a href="javascript:;" onclick="tab_eventos('tab-eventos-realizados');" class="tab-evento-link tab-eventos-realizados-link u-b-radius-3 font-weight-bold u-fs-16 u-c-gs-75 d-inline-block u-b-gs-230 u-px-30 u-py-10 transition hover-btn-blue">EVENTOS REALIZADOS</a>
                            <a href="javascript:;" onclick="tab_eventos('tab-eventos-pre-eventos');" class="tab-evento-link tab-eventos-pre-eventos-link u-b-radius-3 font-weight-bold u-fs-16 u-c-gs-75 d-inline-block u-b-gs-230 u-px-30 u-py-10 transition hover-btn-blue">PRÉ-EVENTOS</a>
                        </div>



                        <div class="tab-eventos tab-eventos-confirmados">
                            <div class="u-mb-50">
                                <?php for($i =0; $i <2;$i++){?>
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
                            </div>

                            @include('sistema.includes.paginacao')

                        </div>
                        <div class="tab-eventos tab-eventos-realizados" style="display: none;"></div>
                        <div class="tab-eventos tab-eventos-pre-eventos" style="display: none;"></div>




                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')



    </body>
</html>


