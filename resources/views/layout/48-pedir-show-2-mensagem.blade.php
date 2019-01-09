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

        <main class="main-perfil">
            <div class="text-center position-relative seta-baixo-middle">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
            <div class="container-fluid limit pt-5">
                <div class="row">
                    <div class="col-sm-3 u-pb-30">
                        <!-- Navegação Rápida -->
                        @include('sistema.includes.perfil-menu-lateral')
                    </div>
                    <div class="col-sm-9 pl-0 pl-sm-4">
                        <div class="bg-white sombra-leve mb-5">
                            <div class="spacer-linha-fina u-py-20 u-px-25 text-uppercase u-fs-21 font-weight-bold cor-azul-show">Voce está contribuindo pelo evento abaixo:</div>
                            <div class="u-p-25">
                                <div class="row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-75 " alt="">
                                    </div>
                                    <div class="col-sm-10 mb-3 mb-sm-0">
                                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">Guarulhos / São Paulo</div>
                                        <div class="u-fs-20 u-c-gs-95 u-mb-5">Evento do Frejat</div>
                                        <div class="u-fs-16 u-c-gs-125">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam nulla, porta fermentum.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="font-weight-light u-fs-30 u-c-gs-95 ">PARA CONCLUIR <span class="font-weight-bold">PREENCHA ABAIXO</span></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Confirme os seus dados de pagamento para contribuir</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>

                        <div class="cor-bg-azul-show u-mb-45 u-b-radius-5 u-py-25 text-center text-white">
                            <i class="fas fa-check-circle u-fs-36"></i>
                            <div class="u-fs-36 u-py-15">Contribuição foi realizada com sucesso!</div>
                            <a href="#" class="section-fase-destaque-btn sombra-leve mb-3 sem-sombra">FINALIZAR</a>
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


