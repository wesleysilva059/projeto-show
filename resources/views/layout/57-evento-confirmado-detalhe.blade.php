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

                        <div class="u-fs-15 cor-azul-show text-uppercase ">Eventos confirmados</div>
                        <div class="text-uppercase font-weight-bold u-fs-30 u-c-gs-95 u-mb-0">CASA DA URCA / RJ</div>                        
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>

                        <div class="sombra-leve bg-white u-p-30 u-mb-30">
                            <div class="row">
                                <div class="col-md-8 u-fs-18 u-c-gs-100 u-pt-10 mb-5 mb-md-0">
                                    <i class="fas fa-map-marker-alt cor-azul-show u-fs-18 mr-2"></i><span>CIDADE: </span><span class="cor-azul-show">CASA DA URCA / RIO DE JANEIRO</span>
                                </div>
                                <div class="col-md-4">
                                    <div class="bg-f2 u-b-radius-5 u-p-2 u-mb-10">
                                        <div class="cor-bg-azul-show u-b-radius-5 u-h-7" style="width: 80%;"></div>
                                    </div>
                                    <div class="cor-azul-show u-fs-16 text-left font-weight-bold">80% atingido</div>
                                </div>   
                            </div>
                        </div>

                        <div class="row u-mb-60">
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


                        <div class="text-uppercase u-fs-24 u-c-gs-95 u-mb-0"><span class="font-weight-bold">COMPARTILHE ESTE EVENTO</span> COM SEUS AMIGOS</div>
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


                        <div class="spacer-linha-fina my-5"></div>

                        <div class="row">
                            <div class="col-md-4 mb-5 pr-0 pr-md-3">
                                <div class="text-uppercase u-fs-20 u-c-gs-95 u-mb-0 font-weight-light"><span class="font-weight-bold">TIPOS DE</span> INGRESSO</div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-20 u-b-radius-2"></div>
                                
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">INGRESSO PISTA</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">INGRESSO CAMAROTE</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">INGRESSO MESA</div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="text-uppercase u-fs-20 u-c-gs-95 u-mb-0 font-weight-light"><span class="font-weight-bold">VALORES</span> DISPONIBILIZADOS</div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-20 u-b-radius-2"></div>
                                
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">PISTA - R$ 30.000</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">CAMAROTE - R$ 30.000</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">MESA - R$ 300.00</div>
                            </div>
                            <div class="col-md-4 mb-5 pl-0 pl-md-3">
                                <div class="text-uppercase u-fs-20 u-c-gs-95 u-mb-0 font-weight-light"><span class="font-weight-bold">VALORES</span> VENDIDOS</div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-20 u-b-radius-2"></div>
                                
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">PISTA - R$ 30.000</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">CAMAROTE - R$ 30.000</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">MESA - R$ 300.00</div>
                            </div>
                        </div>
                        
                        <div class="row u-mb-60">
                            <div class="col-md-4 mb-5 pr-0 pr-md-3">
                                <div class="text-uppercase u-fs-20 u-c-gs-95 u-mb-0 font-weight-light"><span class="font-weight-bold">QUANTIDADE</span> DISPONIBILIZADA</div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-20 u-b-radius-2"></div>
                                
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">PISTA - 300 LUGARES</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">CAMAROTE - 300 LUGARES</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">MESA - 300 LUGARES</div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="text-uppercase u-fs-20 u-c-gs-95 u-mb-0 font-weight-light"><span class="font-weight-bold">QUANTIDADE</span> VENDIDA</div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-20 u-b-radius-2"></div>
                                
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">PISTA - 100 INGRESSOS</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">CAMAROTE - 80 INGRESSOS</div>
                                <div class="u-fs-18 u-c-gs-100 font-weight-bold"><img src="{{assets('images/sistema/check-negative2.png')}}" class="mr-2 position-relative u-top-minus-1" alt="">MESA - 60 INGRESSOS</div>
                            </div>
                            
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


