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
                            TEM ALGUMA DÚVIDA?<br/>
                            ENTRE EM <span class="f-zul-sign ui-fs-80">Contato</span>
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
                <div class="u-fs-30 u-c-gs-75 u-mb-10">Dúvidas? Consultua nossas respostas às perguntas mais frequentes</div>
                <div class="u-fs-17 u-mb-30 u-pb-20 u-bb-gs-200">Criamos uma seção para deixar tudo mais fácil e prático, nossas FAQs respondem às perguntas mais frequentes. Com certeza você encontrará a informação que procura.</div>
                <div class="u-fs-20 u-c-gs-75 text-center u-mb-40">
                    Quer fazer mais alguma pergunta ou deixar suas observações?<br/>
                    <span class="font-weight-bold">Mande-nos uma mensagem que responderemos o quanto antes ou ligue-nos no</span>
                </div>
                <form id="form-envio" action="#" method="post">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="u-fs-18 u-c-gs-110"> Nome <span class="cor-azul-show">(obrigatório)</span> </div>
                                    <input type="text" name="nome" class="input-text"/>
                                </div>
                                <div class="col-md-6 pl-0 pl-md-3">
                                    <div class="u-fs-18 u-c-gs-110"> E-mail <span class="cor-azul-show">(obrigatório)</span> </div>
                                    <input type="text" name="email" class="input-text"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="u-fs-18 u-c-gs-110"> Telefone <span class="cor-azul-show">(obrigatório)</span> </div>
                                            <input type="text" name="telefone" class="input-text"/>
                                        </div>
                                        <div class="col-md-6 pl-0 pl-md-3">
                                            <div class="u-fs-18 u-c-gs-110"> Celular <span class="cor-verde">(opcional)</span> </div>
                                            <input type="text" name="celular" class="input-text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-0 pl-md-3">
                                    <div class="u-fs-18 u-c-gs-110"> Assunto <span class="cor-azul-show">(obrigatório)</span> </div>
                                    <input type="text" name="assunto" class="input-text"/>
                                </div>
                            </div>
                            <div class="u-fs-18 u-c-gs-110"> Mensagem <span class="cor-azul-show">(obrigatório)</span> </div>
                            <textarea name="mensagem" class="input-text ui-h-120 pt-2 d-block"></textarea>
                            <div class="text-center u-pt-30">
                                <a onclick="$('#form-envio').submit();" class="section-fase-destaque-btn mr-3" href="#">ENVIAR MENSAGEM</a>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </form>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')
    </body>
</html>

