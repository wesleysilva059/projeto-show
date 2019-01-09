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
                            NUNCA FOI TÃO FÁCIL IR AO <span class="f-zul-sign">Evento</span> DA SUA <span class="font-weight-bold">BANDA PREFERIDA</span>
                        </div>

                        <div class="f-painter u-fs-30 text-white text-center"><span class="cor-azul-show">Fan</span>, faça seu cadastro abaixo</div>

                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </section>

        <section class="main-perfil pb-5 pt-sm-0" >
            <div class="text-center position-relative seta-baixo-middle mb-5">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>

            <div class="container-fluid limit">
                <div class="cor-azul-show font-weight-light u-fs-30">
                    <strong class="font-weight-bold">01.</strong> INFORMAÇÕES PESSOAIS <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
                </div>
                <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
                <div class="row">
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="nome" placeholder="Nome">
                    </div>
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="email" placeholder="E-mail">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="input-text" name="endereco" placeholder="Endereço">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 pr-0 pr-sm-3">
                        <input type="text" class="input-text telefone-input-mask" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="col-sm-2 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="estado" placeholder="Estado">
                    </div>
                    <div class="col-sm-2 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="cidade" placeholder="Cidade">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="input-text cep-input-mask" name="cep" placeholder="CEP">
                    </div>
                </div>

                <div class="u-h-1 cinza-traco u-my-25"></div>


                <div class="cor-azul-show font-weight-light u-fs-30">
                    <strong class="font-weight-bold">02.</strong> SEU ESTILO MUSICAL <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
                </div>
                <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
                <div class="row">
                    <?php for($i = 1;$i <= 12;$i++){?>
                    <div class="col-sm-1 pr-0 pr-sm-2">
                        <label class="container-check">
                            <input type="checkbox">
                            <span class="check-label">Rock</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <?php for($i = 1;$i <= 12;$i++){?>
                    <div class="col-sm-1 pr-0 pr-sm-2">
                        <label class="container-check">
                            <input type="checkbox">
                            <span class="check-label">Pagode</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <?php } ?>
                </div>

                <div class="u-h-1 cinza-traco u-my-25"></div>


                <div class="u-c-gs-95 font-weight-light u-fs-30">
                    <strong class="font-weight-bold">03.</strong> FORMAS DE PAGAMENTO
                    <div class="u-c-gs-145 u-fs-17 pl-0 pl-sm-5 u-mb-25">Fique tranquilo, seus dados pessoais ficarão registrados em nosso sistema e só haverá débito quando a meta do show que você escolheu for alcança</div>
                </div>
                <div class="bg-c-gs-97 u-w-60 u-h-3 u-mt-5 u-mb-30"></div>


                <div class="row">
                    <div class="col-sm-6 pr-0 pr-sm-4 u-mb-25">
                        <label class="item-box-a-selecionar" onclick="marca_radio(this, 'forma_pagamento');">Boleto
                            <input type="radio" name="forma_pagamento" value="boleto">
                        </label>
                    </div>
                    <div class="col-sm-6 u-mb-25">
                        <label class="item-box-a-selecionar" onclick="marca_radio(this, 'forma_pagamento');">Cartão de Crédito
                            <input type="radio" name="forma_pagamento" value="cartao_credito">
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 u-mb-25 pr-0 pr-sm-4">
                        <img class="mw-100 float-right" src="{{assets('images/sistema/cartao-credito.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 ">

                        <div class="u-fs-13 u-c-gs-130 text-uppercase">PAGUE UMA ÚNICA VEZ DE</div>
                        <select name="mes-expedicao" class="input-text">
                            <option value="Escolha o parcelamento">Escolha o parcelamento</option>
                            <option value="1x">1x</option>
                            <option value="2x">2x</option>
                            <option value="3x">3x</option>
                            <option value="4x">4x</option>
                            <option value="5x">5x</option>
                        </select>

                        <div class="u-fs-13 u-c-gs-130 text-uppercase">NÚMERO DO CARTÃO DE CRÉDITO</div>
                        <input type="number" name="cartao-num" class="input-text error-validation">


                        <div class="u-fs-13 u-c-gs-130 text-uppercase">NOME DO TITULAR</div>
                        <input type="text" name="nome-titular" class="input-text" data-toggle="popover" data-placement="bottom" data-content="Nome da pessoa do jeito que está no cartão">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="u-fs-13 u-c-gs-130 text-uppercase">MÊS DE EXPEDIÇÃO</div>
                                <select name="mes-expedicao" class="input-text">
                                    <option value="MÊS">MÊS</option>
                                    <option value="JANEIRO">JANEIRO</option>
                                    <option value="FEVEREIRO">FEVEREIRO</option>
                                    <option value="MARÇO">MARÇO</option>
                                    <option value="ABRIL">ABRIL</option>
                                    <option value="MAIO">MAIO</option>
                                    <option value="JUNHO">JUNHO</option>
                                    <option value="JULHO">JULHO</option>
                                    <option value="AGOSTO">AGOSTO</option>
                                    <option value="SETEMBRO">SETEMBRO</option>
                                    <option value="OUTUBRO">OUTUBRO</option>
                                    <option value="NOVEMBRO">NOVEMBRO</option>
                                    <option value="DEZEMBRO">DEZEMBRO</option>
                                </select>
                            </div>
                            <div class="col-sm-6 pl-0 pl-sm-3">
                                <div class="u-fs-13 u-c-gs-130 text-uppercase">ANO DE EXPEDIÇÃO</div>
                                <select name="ano-expedicao" class="input-text">
                                    <option value="ANO">ANO</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="u-fs-13 u-c-gs-130 text-uppercase">CÓD. DE SEGURANÇA</div>
                                <input type="number" name="cartao-cvc" class="input-text cvc" placeholder="CVC">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-h-1 cinza-traco u-my-25"></div>
                <div class="u-c-gs-97 font-weight-light u-fs-30">
                    <strong class="font-weight-bold">04.</strong> CADASTRE SUA SENHA
                </div>
                <div class="bg-c-gs-97 u-w-60 u-h-3 u-mt-5 u-mb-15"></div>
                <div class="u-c-gs-145 u-fs-17 u-mb-25">Abaixo você poderá alterar a senha de acesso da plataforma</div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="password" name="senha" class="input-text" placeholder="Nova Senha">
                        <a class="cor-azul-show u-fs-16 position-relative u-top-minus-10" href="#">Esqueci minha senha [?]</a>
                    </div>
                    <div class="col-sm-6 pl-0 pl-sm-4">
                        <input type="password" name="senha-repeat" class="input-text" placeholder="Repetir nova senha">
                    </div>
                </div>
                <div class="text-center u-mb-25">
                    <label class="container-check d-inline-block position-relative u-top-minus-7">
                        <input type="checkbox">
                        <span class="check-label"></span>
                        <span class="checkmark"></span>
                    </label>
                    <a target="_blank" class="cor-azul-show u-fs-16" href="#">Aceito e concordo com os termos de política</a>
                </div>

                <div class="text-center">
                    <a href="#" class="section-fase-destaque-btn sombra-leve mb-3">FINALIZAR</a>
                </div>

            </div>

        </section>

        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>
