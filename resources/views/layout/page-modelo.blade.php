<!doctype html>
<html lang="en">
    <head>
        <title>Escolha Seu Show</title>
        @include('sistema.includes.head')
    </head>
    <body>

        <!-- Menu mobile -->
        @include('sistema.includes.menu-mobile')


        <!-- Banner principal da home -->
        <section class="banner-sou-fan">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="banner-home-frase">
                            NUNCA FOI TÃO FÁCIL IR AO <span class="f-zul-sign">Show</span> DA SUA <span class="font-weight-bold">BANDA PREFERIDA</span>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="text-center">
                    <a class="btn-saiba-mais d-inline-block" href="#">SAIBA MAIS</a>
                </div>
                <div class="d-none d-md-block text-center seta-baixo">
                    <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
                </div>
            </div>
        </section>



        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>
