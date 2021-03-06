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

                        <div class="row mb-5">
                            <div class="col-md-5">
                                <div class="font-weight-light u-fs-24 u-c-gs-95 u-mb-0">EVENTOS <span class="font-weight-bold">CONFIRMADOS</span></div>
                                <div class="u-c-gs-145 u-fs-17 u-mb-15">Veja abaixo a lista de eventos confirmados</div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>
                            </div>
                            <div class="col-md-7 text-right">
                                <a href="#" class="u-b-radius-3 font-weight-bold u-fs-16 text-white d-inline-block cor-bg-azul-show u-px-30 u-py-10 u-mr-10 transition">MEUS EVENTOS</a>
                                <a href="#" class="u-b-radius-3 font-weight-bold u-fs-16 u-c-gs-75 d-inline-block u-b-gs-230 u-px-30 u-py-10 transition hover-btn-blue">EVENTOS EM GERAL</a>
                            </div>
                        </div>


                        <?php for($i = 0; $i < 3; $i++){?>
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
                                <div class="u-fs-20 u-c-gs-100 mb-3">Evento em Morro da Urca</div>
                                <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">MORRO DA URCA / RIO DE JANEIRO</div>


                            </div>
                            <div class="col-md-4 text-center">
                                <div class="mx-0 mx-md-4 ">
                                    <div class="bg-f2 u-b-radius-5 u-p-2 u-mb-10">
                                        <div class="cor-bg-azul-show u-b-radius-5 u-h-7" style="width: 80%;"></div>
                                    </div>
                                    <div class="cor-azul-show u-fs-16 u-mb-10 text-left font-weight-bold">80% atingido</div>
                                </div>
                                <a class="btn-detalhes font-weight-bold ui-fs-18 ui-py-5 ui-mb-15" href="#">VER DETALHES</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-1">
                                <div class="u-b-radius-5 u-bc-gs-240 row">
                                    <div class="col-md-6 ">
                                        <div class="ui-p-10 text-center">
                                            <i class="fas fa-dollar-sign cor-azul-show u-fs-18 mr-2"></i><span class="u-fs-16 u-c-gs-100">Meta</span><br/>
                                            <span class="cor-azul-show u-fs-20 font-weight-bold">R$ 20.000,00</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 b-left-df">
                                        <div class="ui-p-10 text-center">
                                            <i class="fas fa-dollar-sign cor-azul-show u-fs-18 mr-2"></i><span class="u-fs-16 u-c-gs-100">Atingido</span><br/>
                                            <span class="cor-azul-show u-fs-20 font-weight-bold">R$ 1.000,00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pl-0 pl-md-3 mb-1">
                                <div class="u-b-radius-5 u-bc-gs-240 row">
                                    <div class="col-md-6 ">
                                        <div class="ui-p-10 text-center">
                                            <i class="fas fa-users cor-azul-show u-fs-18 mr-2"></i><span class="u-fs-16 u-c-gs-100">Meta</span><br/>
                                            <span class="cor-azul-show u-fs-20 font-weight-bold">10.000</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 b-left-df">
                                        <div class="ui-p-10 text-center">
                                            <i class="fas fa-users cor-azul-show u-fs-18 mr-2"></i><span class="u-fs-16 u-c-gs-100">Capacidade</span><br/>
                                            <span class="cor-azul-show u-fs-20 font-weight-bold">20.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pl-0 pl-md-3">
                                <div class="u-b-radius-5 u-bc-gs-240">
                                    <div class="ui-p-10 text-center">
                                        <i class="fas fa-map-marker-alt cor-azul-show u-fs-18 mr-2"></i><span class="u-fs-16 u-c-gs-100">Local do evento</span><br/>
                                        <span class="cor-azul-show u-fs-20 font-weight-bold">Casa da urca / RJ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-linha-fina my-5"></div>
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


