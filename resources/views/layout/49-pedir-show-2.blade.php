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
                        <div class="bg-white sombra-leve mb-5">
                            <div class="spacer-linha-fina u-py-20 u-px-25 text-uppercase u-fs-21 font-weight-bold cor-azul-show">Voce está contribuindo pelo evento abaixo:</div>
                            <div class="u-p-25">
                                <div class="row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-75 " alt="">
                                    </div>
                                    <div class="col-sm-10 mb-3 mb-sm-0">
                                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">Guarulhos / São Paulo</div>
                                        <div class="u-fs-20 u-c-gs-95 u-mb-5">Evento do Frejat</div>
                                        <div class="u-fs-16 u-c-gs-125">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris diam nulla, porta fermentum.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="font-weight-light u-fs-30 u-c-gs-95 ">PARA CONCLUIR <span class="font-weight-bold">PREENCHA ABAIXO</span></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Confirme os seus dados de pagamento para contribuir</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-5 u-mb-35 u-b-radius-2"></div>


                        <div class="row u-mb-15">
                            <div class="col-sm-4 pr-0 pr-sm-3 u-mb-15">
                                <label class="item-box-a-selecionar item-box-selecionado" onclick="marca_radio(this, 'local');">Pista - R$35,00
                                    <input type="radio" name="local" value="pista">
                                </label>
                            </div>
                            <div class="col-sm-4 pr-0 pr-sm-3 u-mb-15">
                                <label class="item-box-a-selecionar" onclick="marca_radio(this, 'local');">Camarote - R$45,00
                                    <input type="radio" name="local" value="camarote">
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="item-box-a-selecionar" onclick="marca_radio(this, 'local');">Mesa - R$85,00
                                    <input type="radio" name="local" value="mesa">
                                </label>

                            </div>
                        </div>

                        <div class="cor-bg-azul-show u-mb-35 u-b-radius-5 text-center text-white">                            
                            <div class="u-fs-36 u-py-15">Sua contribuição será de  - R$35,00</div>                            
                        </div>

                        <div class="row">
                            <div class="col-sm-6 pr-0 pr-sm-3">
                                <label class="item-box-a-selecionar item-box-selecionado u-mb-15" onclick="marca_radio(this, 'forma_pagamento');$('.contribuicao_pagamento').hide();$('.contribuicao_pagamento_boleto').show();">Boleto
                                    <input type="radio" name="forma_pagamento" value="boleto">
                                </label>


                            </div>
                            <div class="col-sm-6">
                                <label class="item-box-a-selecionar u-mb-15" onclick="marca_radio(this, 'forma_pagamento');$('.contribuicao_pagamento').hide();$('.contribuicao_pagamento_cartao_credito').show();">Cartão de Crédito
                                    <input type="radio" name="forma_pagamento" value="cartao_credito">
                                </label>
                            </div>
                        </div>

                        <div class="u-mb-25 contribuicao_pagamento contribuicao_pagamento_boleto">

                        </div>

                        <div class="u-mb-25 u-pt-15 contribuicao_pagamento contribuicao_pagamento_cartao_credito u-mx-auto" style="display:none;">
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
                        </div>

                        <div class="text-center u-pt-15 u-fs-22 u-c-gs-70 mx-0 mx-sm-5">Fique tranquilo, seus dados pessoais ficarão registrados em nosso sistema e só haverá débito quando a meta do show que você escolheu for alcançada</div>

                        <div class="text-center u-mb-15">
                            <label class="container-check d-inline-block position-relative u-top-minus-7">
                                <input type="checkbox">
                                <span class="check-label"></span>
                                <span class="checkmark"></span>
                            </label>
                            <a target="_blank" class="cor-azul-show u-fs-16" href="#">Aceito e concordo com os termos de política</a>
                        </div>

                        <div class="u-fs-16 nao-pode-retroceder u-mb-25 text-center">Não é possível voltar atrás após sua contribuição</div>

                        <div class="text-center u-pb-100">
                            <a href="#" class="section-fase-destaque-btn sombra-leve mb-3">FINALIZAR</a>
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


