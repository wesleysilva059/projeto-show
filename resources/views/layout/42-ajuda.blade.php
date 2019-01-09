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
                            ACESSE NOSSA FAQ<br/>
                            E TIRE SUAS <span class="f-zul-sign ui-fs-80">Dúvidas</span>
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
                <div class="row u-mb-100">
                    <div class="col-md-10">
                        <form id="form-busca" action="#" method="post" class="sombra-leve bg-white px-1 px-md-5 u-py-15 ">
                            <div class="u-fs-24 u-c-gs-75">Pesquise em nosso FAQ</div>
                            <div class="u-fs-18 u-c-gs-180">O que você procura?</div>
                            <div class="row">
                                <div class="col-md-9 pr-0 pr-md-3">
                                    <input type="text" name="busca" class="input-text">
                                </div>
                                <div class="col-md-3">
                                    <a class="btn-saiba-mais sombra-leve d-inline-block mt-0 position-relative u-top-minus-5" href="javascript:;" onclick="$('#form-busca').submit();">BUSCAR</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="cor-azul-show u-fs-24 u-pb-15">Criar meu show</div>
                        <div class="u-bc-gs-220 u-h-3"></div>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                        <a href="#" class="cor-azul-show-hover u-fs-20 u-c-gs-75 u-bb-gs-220 u-py-10 d-block">Título da dúvida como categoria</a>
                    </div>
                    <div class="col-md-9 pl-0 pl-md-4">
                        <div class="cor-azul-show u-fs-24 u-pb-15 u-mb-30">Criar meu show</div>
                        <div class="row u-mb-50">
                            <div class="col-md-1">
                                <div class="u-fs-24 u-c-gs-205 ui-b-gs-205 u-py-10 u-px-15 d-inline-block mb-3">01</div>
                            </div>
                            <div class="col-md-11">
                                <div class="u-fs-20 u-c-gs-75 u-mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing?</div>
                                <div class="u-fs-17 u-c-gs-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue, in hendrerit turpis enim maximus turpis. Integer pulvinar arcu sed imperdiet iaculis. Proin maximus cursus faucibus. Cras lacinia luctus risus vestibulum convallis. Nulla posuere dapibus lacus eget porttitor. Phasellus vel lectus diam. Nulla a gravida leo. Donec feugiat congue</div>
                            </div>
                        </div>

                        <div class="row u-mb-50">
                            <div class="col-md-1">
                                <div class="u-fs-24 u-c-gs-205 ui-b-gs-205 u-py-10 u-px-15 d-inline-block mb-3">01</div>
                            </div>
                            <div class="col-md-11">
                                <div class="u-fs-20 u-c-gs-75 u-mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing?</div>
                                <div class="u-fs-17 u-c-gs-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue, in hendrerit turpis enim maximus turpis. Integer pulvinar arcu sed imperdiet iaculis. Proin maximus cursus faucibus. Cras lacinia luctus risus vestibulum convallis. Nulla posuere dapibus lacus eget porttitor. Phasellus vel lectus diam. Nulla a gravida leo. Donec feugiat congue</div>
                            </div>
                        </div>

                        <div class="row u-mb-50">
                            <div class="col-md-1">
                                <div class="u-fs-24 u-c-gs-205 ui-b-gs-205 u-py-10 u-px-15 d-inline-block mb-3">01</div>
                            </div>
                            <div class="col-md-11">
                                <div class="u-fs-20 u-c-gs-75 u-mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing?</div>
                                <div class="u-fs-17 u-c-gs-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum semper lectus quis elementum. Praesent semper, nisi suscipit sodales porta, mi eros pharetra augue, in hendrerit turpis enim maximus turpis. Integer pulvinar arcu sed imperdiet iaculis. Proin maximus cursus faucibus. Cras lacinia luctus risus vestibulum convallis. Nulla posuere dapibus lacus eget porttitor. Phasellus vel lectus diam. Nulla a gravida leo. Donec feugiat congue</div>
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

