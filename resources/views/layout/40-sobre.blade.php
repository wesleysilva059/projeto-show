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
                            CONHEÇA A PLATAFORMA<br/>
                            <span class="f-zul-sign ui-fs-80">Escolha seu Show</span>
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
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="bg-white u-b-radius-5 u-p-10">
                            <div class="bg-cover-center u-h-400" style="background-image: url('{{assets('images/sistema/sobre.png')}}');"></div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-0 pl-md-4">
                        <div class="u-fs-20 u-c-gs-75 u-mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue?</div>
                        <div class="u-fs-18 u-c-gs-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue, in hendrerit turpis enim maximus turpis. Integer pulvinar arcu sed imperdiet iaculis. Proin maximus cursus faucibus. Cras lacinia luctus risus vestibulum convallis. Nulla posuere dapibus lacus eget porttitor. Phasellus vel lectus diam. Nulla a gravida leo. Donec feugiat congue</div>
                    </div>
                </div>

            </div>
        </main>



        <div class="tarja-colorida"></div>


        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>

