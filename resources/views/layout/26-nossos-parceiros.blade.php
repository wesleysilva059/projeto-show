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
                            CONHEÇA NOSSOS<br/><span class="font-weight-bold">PARCEIROS</span>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
            <div class="text-center position-absolute w-100 u-z2" style="bottom: -25px;">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
        </section>




        <section>
            <div class="u-bc-gs-245">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-6 ">
                            <div class="float-lg-right pr-0 pr-lg-5">
                                <div class="section-frase-destaque1 ui-mt-50">
                                    <span>CASAS DE SHOWS</span>
                                </div>
                                <div class="section-fase-destaque-spacer mt-0 mb-3"></div>
                                <div class="section-fase-destaque-descricao">Veja a nossa lista de casas de shows<br/>ou cadastre a sua casa de show</div>
                                <a class="section-fase-destaque-btn mr-3" href="#">VER CASAS DE SHOWS</a>
                                <a class="btn-detalhes btn-detalhes--large font-weight-bold" href="#">CADASTRE SUA CASA</a>
                            </div>

                        </div>
                        <div class="col-lg-6 pl-0 pl-lg-5 mb-3 mb-sm-0" >
                            <div class="h-100 bg-cover-center w-max-900 u-h-min-450 " style="background-image: url('{{assets('images/sistema/nossos-parceiros-casas-de-show.jpg')}}');"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <div class="container-fluid">

                    <div class="row ">
                        <div class="col-lg-6 pr-0 pr-lg-5" >
                            <div class="h-100 bg-cover-center w-max-900 w-100 u-h-min-450 float-lg-right" style="background-image: url('{{assets('images/sistema/nossos-parceiros-lojas.jpg')}}');">

                            </div>
                        </div>
                        <div class="col-lg-6 pl-0 pl-lg-5">
                            <div class="section-frase-destaque1 ui-mt-50">
                                <span>LOJAS DE<br/>INSTRUMENTOS</span>
                            </div>
                            <div class="section-fase-destaque-spacer mt-0 mb-3"></div>
                            <div class="section-fase-destaque-descricao">Veja a lista completa de lojas de instrumentos<BR/>ou cadastre a sua loja</div>
                            <a class="section-fase-destaque-btn mr-3" href="#">VER LOJAS</a>
                            <a class="btn-detalhes btn-detalhes--large font-weight-bold" href="#">CADASTRE SUA LOJA</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-bc-gs-245">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-6 ">
                            <div class="float-lg-right pr-0 pr-lg-5">
                                <div class="section-frase-destaque1 ui-mt-50">
                                    <span>EMPRESAS DE<br/>TRANSPORTE</span>
                                </div>
                                <div class="section-fase-destaque-spacer mt-0 mb-3"></div>
                                <div class="section-fase-destaque-descricao">Veja a nossa lista de empresas de transporte<br/>ou cadastre a sua empresa</div>
                                <a class="section-fase-destaque-btn mr-3" href="#">VER EMPRESAS</a>
                                <a class="btn-detalhes btn-detalhes--large font-weight-bold" href="#">CADASTRE SUA EMPRESA</a>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-0 pl-lg-5 mb-3 mb-sm-0" >
                            <div class="h-100 bg-cover-center w-max-900 u-h-min-450 " style="background-image: url('{{assets('images/sistema/nossos-parceiros-transporte.jpg')}}');"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-lg-6 pr-0 pr-lg-5" >
                            <div class="h-100 bg-cover-center w-max-900 w-100 u-h-min-450 float-lg-right" style="background-image: url('{{assets('images/sistema/nossos-parceiros-hoteis.jpg')}}');">

                            </div>
                        </div>
                        <div class="col-lg-6 pl-0 pl-lg-5">
                            <div class="section-frase-destaque1 ui-mt-50">
                                <span>HOTEIS</span>
                            </div>
                            <div class="section-fase-destaque-spacer mt-0 mb-3"></div>
                            <div class="section-fase-destaque-descricao">Veja a lista completa de hoteis<br/>ou cadastre o seu hotel</div>
                            <a class="section-fase-destaque-btn mr-3" href="#">VER HOTEIS</a>
                            <a class="btn-detalhes btn-detalhes--large font-weight-bold" href="#">CADASTRE SEU HOTEL</a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="u-bc-gs-245">
                <div class="container-fluid">


                    <div class="row ">
                        <div class="col-lg-6 ">
                            <div class="float-lg-right pr-0 pr-lg-5">
                                <div class="section-frase-destaque1 ui-mt-50">
                                    <span>EQUIPE (OUTRAS<br/>EMPRESAS)</span>
                                </div>
                                <div class="section-fase-destaque-spacer mt-0 mb-3"></div>
                                <div class="section-fase-destaque-descricao">Veja a nossa lista de outras equipes<br/>que podem ajudar o seu evento</div>
                                <a class="section-fase-destaque-btn mr-3" href="#">VER EQUIPES</a>
                                <a class="btn-detalhes btn-detalhes--large font-weight-bold" href="#">CADASTRE SUA EQUIPE</a>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-0 pl-lg-5" >
                            <div class="h-100 bg-cover-center w-max-900 u-h-min-450" style="background-image: url('{{assets('images/sistema/nossos-parceiros-transporte.jpg')}}');"></div>
                        </div>
                    </div>
                </div>

            </div>




        </section>

        <section class="py-5 bg-cover-center" style="background-image: url('{{assets('images/sistema/nossos-parceirosbg-seja-parceiro.jpg')}}');">
            <div class="container-fluid limit px-0 px-md-5">
                <div class="font-weight-light u-fs-36 text-white text-center text-uppercase">Seja um <span class="font-weight-bold">parceiro do Boora</span></div>
                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-15 u-b-radius-2 u-mx-auto"></div>
                <div class="u-fs-20 text-white text-center w-max-700 u-mx-auto u-mb-50">Se o seu estabelecimento não se enquadra em nenhuma das listas acima, preencha o formulário abaixo e aguarde a análise da nossa equipe</div>


                <form id="form-envio" action="#" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="nome_estabelecimento" class="input-text" placeholder="Nome do estabelecimento"/>
                        </div>
                        <div class="col-md-6 pl-0 pl-md-3">
                            <input type="text" name="nome_responsavel" class="input-text" placeholder="Nome do responsável"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <div class="row">
                               <div class="col-md-7">
                                   <input type="text" name="email" class="input-text" placeholder="E-mail"/>
                               </div>
                               <div class="col-md-5 pl-0 pl-md-3">
                                   <input type="text" name="telefone" class="input-text telefone-input-mask" placeholder="Telefone"/>
                               </div>
                           </div>

                        </div>
                        <div class="col-md-6 pl-0 pl-md-3">
                            <input type="text" name="nome_responsavel" class="input-text" placeholder="Nome do responsável"/>
                        </div>
                    </div>
                    <textarea name="mensagem" class="input-text ui-h-120 pt-2" placeholder="Mensagem"></textarea>

                    <div class="text-center">
                        <a onclick="$('#form-envio').submit();" class="section-fase-destaque-btn mr-3" href="#">ENVIAR</a>
                    </div>
                </form>

            </div>

        </section>


        <div class="tarja-colorida"></div>


        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>

