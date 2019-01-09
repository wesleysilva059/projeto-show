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
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="banner-home-frase ui-pt-70">
                           <span class="font-weight-bold">CADASTRE UM HOTEL</span><br/>
                            PARA A PLATAFORMA
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            <div class=" text-center position-absolute w-100 u-z2" style="bottom: -25px;">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
        </section>




        <main class="main-perfil2 u-py-100">
            <div class="container-fluid limit">

                <div class="font-weight-light u-fs-30 u-c-gs-95 text-uppercase">PREENCHA O <span class="font-weight-bold">FORMULÁRIO ABAIXO</span></div>
                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-10 u-mb-30 u-b-radius-2"></div>

                <form id="form-cadastro" action="#" method="post">

                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="nome_hotel" class="input-text" placeholder="Nome do hotel"/>
                        </div>
                        <div class="col-md-6 pl-0 pl-md-3">
                            <input type="text" name="nome_responsavel" class="input-text" placeholder="Nome do responsável"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="email" class="input-text" placeholder="E-mail"/>
                                </div>
                                <div class="col-md-6 pl-0 pl-md-3">
                                    <input type="text" name="telefone" class="input-text telefone-input-mask" placeholder="Telefone"/>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 pl-0 pl-md-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="site" class="input-text" placeholder="Site"/>
                                </div>
                                <div class="col-md-6 pl-0 pl-md-3">
                                    <input type="text" name="facebook" class="input-text" placeholder="Facebook"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <textarea name="mensagem" class="input-text ui-h-120 pt-2" placeholder="Mensagem"></textarea>

                    <div class="text-center u-mb-100">
                        <a class="btn-saiba-mais sombra-leve d-inline-block mt-2" href="javascript:;" onclick="$('#form-cadastro').submit();">CADASTRAR HOTEL</a>
                    </div>
                </form>

            </div>

        </main>



        <div class="tarja-colorida"></div>


        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>

