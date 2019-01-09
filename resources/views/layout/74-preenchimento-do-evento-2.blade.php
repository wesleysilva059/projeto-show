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
        @include('sistema.includes.topo-perfil-artista')

        <main class="main-perfil2">
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

                        <div class="font-weight-light u-fs-24 u-c-gs-95 text-uppercase">PREENCHIMENTO <span class="font-weight-bold">DO EVENTO</span></div>                        
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>


                       <div class="text-center u-py-50 u-fs-22 u-c-gs-70 mx-0 mx-sm-5">
                           Evento solicitado pelos fãs foi cadastrado com sucesso. Nessa etapa ele está em eventos confirmados e está aguardando a meta ser atingida!
                       </div>
                       
                        <div class="cor-bg-azul-show u-b-radius-5 u-py-25 text-center text-white">
                            <i class="fas fa-check-circle u-fs-36"></i>
                            <div class="u-fs-36 u-py-15">Evento cadastrado com sucesso</div>
                            <a href="#" class="section-fase-destaque-btn sombra-leve mb-3 sem-sombra">VER EVENTOS CONFIRMADOS</a>
                        </div>
                        
                        <div class="font-weight-bold text-center u-py-50 u-fs-22 u-c-gs-70 mx-0 mx-sm-5">
                           Atenção: 50% do valor arrecadado da meta você receberá antes da data do evento. Os outros 50% serão depositados após a realização do evento.
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


