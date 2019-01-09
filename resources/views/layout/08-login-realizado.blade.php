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
                            FÃ, SEJA BEM-VINDO<br/>À <span class="f-zul-sign">plataforma</span>
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

            <div class="u-mx-auto u-w-max-750 bg-white b-cinza u-p-50 text-center">
                <div class="u-c-gs-145 u-fs-25 u-mb-0">Cadastro concluído com sucesso!</div>
                <div class="cor-azul-show u-fs-30">Escolha uma das opções abaixo</div>

                <a class="btn-saiba-mais3 d-inline-block mr-4" href="#">MEU PERFIL</a>
                <a class="btn-saiba-mais d-inline-block" href="#">PEDIR UM SHOW</a>
            </div>

        </section>


        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>
