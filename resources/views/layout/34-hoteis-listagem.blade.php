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
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="banner-home-frase ui-pt-70">
                            <span class="font-weight-bold">LISTA DE</span><br/>
                            HOTEIS
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class=" text-center position-absolute w-100 u-z2" style="bottom: -25px;">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
        </section>




        <main class="main-perfil2 u-pt-100">
            <div class="container-fluid limit">
               <?php for($i = 0; $i < 4; $i++){?>
                <div class="row">
                    <div class="col-md-6">

                        <div class="row">
                            <div class="col-md-6 u-mb-50">
                                <div class="u-h-160 bg-cover-center u-b-radius-5" style="background-image: url('{{assets('images/sistema/hoteis-thumb.png')}}');"></div>
                            </div>
                            <div class="col-md-6 u-mb-50 pl-0 pl-md-4">
                                <div class="u-fs-30 u-c-gs-95 font-weight-light">PLAYTECH</div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-10 u-b-radius-2"></div>
                                <a href="#" class="transition hover-verde cor-azul-show u-fs-20 d-block underline u-mb-5">www.playtech.com.br</a>
                                <a href="#" class="transition hover-verde cor-azul-show u-fs-20 d-block underline u-mb-5">Facebook</a>
                                <a href="#" class="transition hover-verde cor-azul-show u-fs-20 d-block underline u-mb-5">instagram</a>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">

                        <div class="row">
                            <div class="col-md-6 u-mb-50">
                                <div class="u-h-160 bg-cover-center u-b-radius-5" style="background-image: url('{{assets('images/sistema/hoteis-thumb.png')}}');"></div>
                            </div>
                            <div class="col-md-6 u-mb-50 pl-0 pl-md-4">
                                <div class="u-fs-30 u-c-gs-95 font-weight-light">PLAYTECH</div>
                                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-10 u-b-radius-2"></div>
                                <a href="#" class="transition hover-verde cor-azul-show u-fs-20 d-block underline u-mb-5">www.playtech.com.br</a>
                                <a href="#" class="transition hover-verde cor-azul-show u-fs-20 d-block underline u-mb-5">Facebook</a>
                                <a href="#" class="transition hover-verde cor-azul-show u-fs-20 d-block underline u-mb-5">instagram</a>
                            </div>
                        </div>

                    </div>
                </div>

                <?php } ?>

                @include('sistema.includes.paginacao')


            </div>

            <div class="u-pt-40 u-pb-30 bg-cover-center" style="background-image: url('{{assets('images/sistema/casas-de-show-listagem-bg-cadastre.jpg')}}');">
                <div class="container-fluid text-center u-fs-36 text-white">
                    CADASTRE UM <span class="font-weight-bold">HOTEL</span> <a class="btn-saiba-mais d-inline-block ml-3 mt-0 position-relative u-top-minus-5" href="#">CADASTRAR</a>
                </div>
            </div>
        </main>



        <div class="tarja-colorida"></div>


        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>

