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
        <section class="banner-sou-artista ui-h-min-500">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="banner-home-frase ui-pt-50">
                            PARA CADASTRAR O SEU EVENTO<br/>FAÇA O LOGIN <span class="f-zul-sign">abaixo</span>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </section>




        <section class="bg-branco-quadriculado pb-5 pt-sm-0" >
            <div class="text-center position-relative seta-baixo-middle mb-5">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>

            <div class="u-mx-auto u-w-max-750 bg-white b-cinza u-p-50 text-center mt-4">
                <div class="cor-azul-show u-fs-25 u-mb-30">Cadastro concluído com sucesso!</div>
                

                <a class="white-outline-link-primary-2  mb-0 ui-px-60" href="#">BOORA</a>
                
            </div>

        </section>

        <div class="tarja-colorida"></div>

        <!-- Rodape -->
        @include('sistema.includes.footer')


      

    </body>
</html>

