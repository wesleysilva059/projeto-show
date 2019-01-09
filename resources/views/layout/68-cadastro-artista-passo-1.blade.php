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
        <section class="banner-sou-artista ui-h-min-500">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="banner-home-frase ui-pt-50">
                            PARA CADASTRAR O SEU EVENTO<br/>FAÇA O LOGIN <span class="f-zul-sign">abaixo</span>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </section>




        <section class="main-perfil pb-5 pt-sm-0 bg-branco-quadriculado" >
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
                        <input type="text" class="input-text" name="nome" placeholder="Nome do artista/banda">
                    </div>
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="responsavel" placeholder="Responsável">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="input-text" name="endereco" placeholder="Endereço">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text telefone-input-mask" name="telefone_fixo" placeholder="Telefone fixo">
                    </div>
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text telefone-input-mask" name="celular" placeholder="Celular">
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

                <div class="row">

                    <div class="col-md-12">
                        <input type="text" class="input-text" name="email" placeholder="E-mail">
                    </div>
                    
                </div>

                <div class="u-h-1 cinza-traco u-my-25"></div>


                <div class="cor-azul-show font-weight-light u-fs-30">
                    <strong class="font-weight-bold">02.</strong> SEU ESTILO MUSICAL <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
                </div>
                <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
                <div class="row">
                    <?php for($i = 1;$i <= 12;$i++){?>
                    <div class="col-lg-1 pr-0 pr-sm-2">
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
                    <div class="col-lg-1 pr-0 pr-sm-2">
                        <label class="container-check">
                            <input type="checkbox">
                            <span class="check-label">Pagode</span>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <?php } ?>
                </div>

                <div class="u-h-1 cinza-traco u-my-25"></div>
                
                
                <div class="cor-azul-show font-weight-light u-fs-30">
                    <strong class="font-weight-bold">03.</strong> MÍDIAS DA BANDA <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
                </div>
                <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
                <textarea name="release" class="input-text ui-h-120 pt-2" placeholder="Release / Sobre"></textarea>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="input-text" name="site" placeholder="Site">
                    </div>
                    <div class="col-md-3 pl-0 pl-md-3">
                        <input type="text" class="input-text" name="facebook" placeholder="Facebook">
                    </div>
                    <div class="col-md-3 pl-0 pl-md-3">
                        <input type="text" class="input-text" name="instagram" placeholder="Instagram">
                    </div>
                    <div class="col-md-3 pl-0 pl-md-3">
                        <input type="text" class="input-text" name="youtube" placeholder="Canal no YouTube">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="input-text" name="spotify" placeholder="Spotify">
                    </div>
                    <div class="col-md-3 pl-0 pl-md-3">
                        <input type="text" class="input-text" name="soundcloud" placeholder="Soundcloud">
                    </div>
                    <div class="col-md-6 pl-0 pl-md-3">
                        <input type="text" class="input-text mb-1" name="quantidade_minima" placeholder="Quantidade mínima de fãs para o seu evento">
                        <div class="u-c-gs-145 u-fs-15 u-mb-25">
                            Após a quantidade mínima ser atingida, você será notificado em seu perfil sobre a solicitação do evento e poderá confirmá-lo e cadastrá-lo.
                        </div>
                    </div>
                </div>
                <div class="u-h-1 cinza-traco u-my-25"></div>
                

                
                <div class="cor-azul-show font-weight-light u-fs-30">
                    <strong class="font-weight-bold">04.</strong> DADOS BANCÁRIOS DO RESPONSÁVEL <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
                </div>
                <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
                <div class="u-c-gs-145 u-fs-17 u-mb-25">
                    Essa será a conta em que o dinheiro arrecadado será depositado para a realização do evento.
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="input-text" name="nome_responsavel_conta" placeholder="Nome do responsável pela conta">
                    </div>
                    <div class="col-md-3 pl-0 pl-md-3">
                        <select name="banco" class="input-text">
                            <option value="">Banco</option>
                            <option value="itaú">Itaú</option>
                            <option value="Bradesco">Bradesco</option>
                        </select>
                    </div>
                    <div class="col-md-3 pl-0 pl-md-3">
                        <select name="tipo_pessoa" class="input-text" onchange="if($(this).val() == 'pj'){$('#pj').show();$('#pf').hide();}else{$('#pj').hide();$('#pf').show();} ">
                            <option value="">Tipo Pessoa</option>
                            <option value="pf">Pessoa Física</option>
                            <option value="pj">Pessoa Jurídica</option>
                        </select>
                    </div>
                </div>
                <div class="row u-mb-25">                    
                    <div class="col-md-3">
                        <input type="text" class="input-text" name="agencia" placeholder="Agência">
                    </div>
                    <div class="col-md-3 pl-0 pl-md-3">
                        <input type="text" class="input-text" name="conta_corrente" placeholder="Conta Corrente">
                    </div>
                    <div class="col-md-6 pl-0 pl-md-3">
                        <div id="pf">
                            <input type="text" class="input-text cpf-input-mask" name="cpf" placeholder="CPF">
                        </div>
                        <div id="pj" style="display:none;">
                            <input type="text" class="input-text cnpj-input-mask" name="cnpj" placeholder="CNPJ">
                        </div>
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
                    <a href="#" class="section-fase-destaque-btn sombra-leve mb-3">PROSSEGUIR CADASTRO</a>
                </div>

            </div>

        </section>

        <div class="tarja-colorida"></div>

        <!-- Rodape -->
        @include('sistema.includes.footer')




    </body>
</html>

