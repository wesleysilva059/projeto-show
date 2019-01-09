<!doctype html>
<html lang="en">
    <head>
        <title>Escolha Seu Show - Sou fan</title>
        @include('sistema.includes.head')
    </head>
    <body>

        <!-- Menu mobile -->
        @include('sistema.includes.menu-mobile')


        <!-- Banner principal da home -->
        <section class="banner-sou-fan bg-cover-center position-relative ui-h-min-500">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">

                    <div class="col-sm-12">
                        <div class="banner-home-frase ui-pt-70">
                            VANTAGENS EM UTILIZAR O<br/>
                            ESCOLHA SEU <span class="f-zul-sign ui-fs-80">Show</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class=" text-center position-absolute w-100 u-z2" style="bottom: -25px;">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
        </section>




        <main class="main-perfil2 u-py-100">
            <div class="container-fluid limit">

                <div class="u-mb-50 u-pb-50 u-bb-gs-220">
                    <a class="btn-seta-baixo btn-seta-baixo--active mr-0 mr-md-4 mb-3 mb-md-0" href="#">SOU FÃ <i class="fas fa-chevron-down"></i></a>
                    <a class="btn-seta-baixo mr-0 mr-md-4 mb-3 mb-md-0" href="#">SOU ARTISTA <i class="fas fa-chevron-down"></i></a>
                    <a class="btn-seta-baixo mb-3 mb-md-0" href="#">SOU PRODUTOR <i class="fas fa-chevron-down"></i></a>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">

                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-check-circle cor-azul-show u-fs-60 u-mt-15"></i>
                            </div>
                            <div class="col-md-10">
                                <div class="u-fs-60 u-c-gs-95">
                                    NOME DA <span class="font-weight-bold">VANTAGEM 1</span>
                                </div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-10 u-mb-30 u-b-radius-2"></div>
                                <div class="u-fs-20 u-c-gs-95">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel nulla magna. Proin cursus volutpat est nec finibus. Morbi semper vitae leo ac gravida.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 mb-5 mb-md-0">

                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-check-circle cor-azul-show u-fs-60 u-mt-15"></i>
                            </div>
                            <div class="col-md-10">
                                <div class="u-fs-60 u-c-gs-95">
                                    NOME DA <span class="font-weight-bold">VANTAGEM 2</span>
                                </div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-10 u-mb-30 u-b-radius-2"></div>
                                <div class="u-fs-20 u-c-gs-95">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel nulla magna. Proin cursus volutpat est nec finibus. Morbi semper vitae leo ac gravida.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="u-h-1 u-bc-gs-220 u-my-70"></div>

                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">

                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-check-circle cor-azul-show u-fs-60 u-mt-15"></i>
                            </div>
                            <div class="col-md-10">
                                <div class="u-fs-60 u-c-gs-95">
                                    NOME DA <span class="font-weight-bold">VANTAGEM 1</span>
                                </div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-10 u-mb-30 u-b-radius-2"></div>
                                <div class="u-fs-20 u-c-gs-95">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel nulla magna. Proin cursus volutpat est nec finibus. Morbi semper vitae leo ac gravida.
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 mb-5 mb-md-0">

                        <div class="row">
                            <div class="col-md-2">
                                <i class="fas fa-check-circle cor-azul-show u-fs-60 u-mt-15"></i>
                            </div>
                            <div class="col-md-10">
                                <div class="u-fs-60 u-c-gs-95">
                                    NOME DA <span class="font-weight-bold">VANTAGEM 2</span>
                                </div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-10 u-mb-30 u-b-radius-2"></div>
                                <div class="u-fs-20 u-c-gs-95">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel nulla magna. Proin cursus volutpat est nec finibus. Morbi semper vitae leo ac gravida.
                                </div>
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

