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
                        <div class="font-weight-light u-fs-30 u-c-gs-95 u-mb-5">PARA PEDIR UM EVENTOS - <span class="font-weight-bold">PREENCHA O FORMULÁRIO ABAIXO</span></div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>

                        <div class="row">
                            <div class="col-sm-6 pr-0 pr-sm-3">
                                <select name="" id="" class="input-text">
                                    <option value="">Escolha sua cidade</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <select name="" id="" class="input-text">
                                    <option value="">Escolha seu artista favorito</option>
                                </select>
                            </div>
                        </div>

                        <div class="cor-azul-show u-fs-22">Entenda <span class="font-weight-bold">como funciona</span></div>
                        <div class="u-c-gs-70 u-fs-18 spacer-linha-fina pb-4 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non luctus orci, in faucibus justo. Aliquam ut nisi ornare, pretium urna gravida, cursus mauris. Aenean commodo turpis at orci feugiat, molestie semper lectus suscipit. Pellentesque et eros consectetur, ornare ligula et, semper justo.
                        </div>

                       <div class="bg-white sombra-leve p-5 u-mb-100 text-center">
                           <div class="cor-azul-show u-fs-25 text-center mb-5">Confirme o evento abaixo</div>
                           <div class="row">
                               <div class="col-sm-5 mb-5">
                                   <div class="cor-azul-show u-fs-25 text-center">Cidade</div>
                                   <div class="u-c-gs-130 u-fs-35">Rio de Janeiro</div>
                               </div>
                               <div class="col-sm-2 d-none d-sm-block">
                                   <div class="u-w-1 u-h-70 bg-f2 u-mx-auto"></div>
                               </div>
                               <div class="col-sm-5 mb-5">
                                   <div class="cor-azul-show u-fs-25 text-center">Artista</div>
                                   <div class="u-c-gs-130 u-fs-35">Mano Brow</div>
                               </div>
                           </div>
                           <a class="section-fase-destaque-btn sombra-leve mb-0" href="#" >CONFIRMAR</a>
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


