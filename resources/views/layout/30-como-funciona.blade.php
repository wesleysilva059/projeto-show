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
                            SAIBA COMO<br/>FUNCIONA
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class=" text-center position-absolute w-100 u-z2" style="bottom: -25px;">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
        </section>




        <main class="main-perfil2 u-py-100">
            <div class="container-fluid limit">
                <div class="u-mb-50">
                    <a class="btn-seta-baixo btn-seta-baixo--active mr-0 mr-md-4 mb-3 mb-md-0" href="#">SOU FÃ <i class="fas fa-chevron-down"></i></a>
                    <a class="btn-seta-baixo mr-0 mr-md-4 mb-3 mb-md-0" href="#">SOU ARTISTA <i class="fas fa-chevron-down"></i></a>
                    <a class="btn-seta-baixo mb-3 mb-md-0" href="#">SOU PRODUTOR <i class="fas fa-chevron-down"></i></a>
                </div>

                <div class="como-funciona-video como-funciona-video--cover-center u-mb-100 u-b-radius-5 vertical-middle-container" >
                    <div class="text-center w-100">
                        <a href="#"><img class="brilho-hover" src="{{assets('images/sistema/ver-video-btn2.png')}}" alt=""></a>
                    </div>
                </div>

                <div class="row u-mb-100">
                    <div class="col-md-1">
                        <div class="u-fs-24 u-c-gs-205 ui-b-gs-205 u-py-10 u-px-15 d-inline-block mb-3">01</div>
                    </div>
                    <div class="col-md-11">
                        <div class="u-fs-20 u-c-gs-75 u-mb-5">Como faço para pedir meu primeiro show?</div>
                        <div class="u-fs-17 u-c-gs-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue, in hendrerit turpis enim maximus turpis. Integer pulvinar arcu sed imperdiet iaculis. Proin maximus cursus faucibus. Cras lacinia luctus risus vestibulum convallis. Nulla posuere dapibus lacus eget porttitor. Phasellus vel lectus diam. Nulla a gravida leo. Donec feugiat congue</div>
                    </div>
                </div>

                <div class="row u-mb-100">
                    <div class="col-md-1">
                        <div class="u-fs-24 u-c-gs-205 ui-b-gs-205 u-py-10 u-px-15 d-inline-block mb-3">02</div>
                    </div>
                    <div class="col-md-11">
                        <div class="u-fs-20 u-c-gs-75 u-mb-5">Como altero meu endereço de e-mail?</div>
                        <div class="u-fs-17 u-c-gs-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue, in hendrerit turpis enim maximus turpis. Integer pulvinar arcu sed imperdiet iaculis. Proin maximus cursus faucibus. Cras lacinia luctus risus vestibulum convallis. Nulla posuere dapibus lacus eget porttitor. Phasellus vel lectus diam. Nulla a gravida leo. Donec feugiat congue</div>
                    </div>
                </div>



            </div>

        </main>



        <div class="tarja-colorida"></div>


        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>

