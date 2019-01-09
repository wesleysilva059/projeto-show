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
                            NUNCA FOI TÃO FÁCIL IR AO<br/>
                            <span class="f-zul-sign ui-fs-80">Show</span> DA SUA <span class="font-weight-bold">BANDA PREFERIDA</span>
                            <div class="f-painter u-fs-30 text-white text-center"><span class="cor-azul-show">Fan</span>, faça seu cadastro abaixo</div>
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
                <div class="u-c-gs-95 font-weight-light u-fs-30">
                    <strong class="font-weight-bold">01.</strong> INFORMAÇÕES PESSOAIS
                </div>
                <div class="bg-c-gs-97 u-w-60 u-h-3 u-mt-5 u-mb-45"></div>

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
                    <div class="col-sm-2 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="facebook" placeholder="facebook">
                    </div>
                    <div class="col-sm-2 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="instagram" placeholder="instagram">
                    </div>
                    <div class="col-sm-2 pr-0 pr-sm-3">
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

                <div class="text-center u-py-45">
                    <a class="section-fase-destaque-btn mr-3" href="#">PRÓXIMO</a>
                </div>

                <div class="u-c-gs-95 font-weight-light u-fs-30">
                    <strong class="font-weight-bold">02.</strong> FORMAS DE PAGAMENTO
                </div>
                <div class="bg-c-gs-97 u-w-60 u-h-3 u-mt-5 u-mb-45"></div>

                <div class="row">
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <select name="" id="" class="input-text">
                            <option value="">Boleto</option>
                        </select>
                    </div>
                    <div class="col-sm-2 pr-0 pr-sm-2">
                        <input type="text" class="input-text data-input-mask" name="data" placeholder="Data">
                    </div>
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="nome" placeholder="Nome do titular">
                    </div>
                    <div class="col-sm-1 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="cvv" placeholder="CVV">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="input-text cpf-input-mask" name="cpf" placeholder="CPF">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="facebook" placeholder="facebook">
                    </div>
                    <div class="col-sm-2 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="instagram" placeholder="instagram">
                    </div>
                    <div class="col-sm-2 pr-0 pr-sm-3">
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
                
                <div class="text-center u-pt-25">
                    <label class="container-check d-inline-block position-relative u-top-minus-7">
                        <input type="checkbox">
                        <span class="check-label"></span>
                        <span class="checkmark"></span>
                    </label>
                    <a target="_blank" class="cor-azul-show u-fs-16" href="#">Aceito e concordo com os termos de política</a>
                </div>



            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')
    </body>
</html>

