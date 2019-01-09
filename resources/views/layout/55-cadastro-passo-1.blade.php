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
        <section class="banner-sou-produtor">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="banner-home-frase">
                            PARA CADASTRAR O SEU ARTISTA<br/>FAÇA O LOGIN NA <span class="f-zul-sign">plataforma</span>
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
                        <input type="text" class="input-text" name="nome" placeholder="Nome Completo">
                    </div>
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="produtora" placeholder="Nome da produtora">
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

                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="email" placeholder="E-mail">
                    </div>
                    <div class="col-sm-3 pr-0 pr-sm-3">
                        <input type="text" class="input-text" name="tempo_de_mercado" placeholder="Tempo de mercado">
                    </div>
                    <div class="col-sm-6">
                        <div style="overflow: hidden;height:0">
                            <input type="file" name="foto" id="file_input_id" class="file_input">   
                        </div>

                        <div class="input-text position-relative">
                            <input type="text" name="foto_name" id="file_fake_id" class="file_fake u-fs-18" placeholder="Foto do perfil" readonly="readonly">
                            <input type="button" class="file_btn" onclick="file_upload('file_input_id', 'file_fake_id');" value="Procurar ...">
                        </div>

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
                    <strong class="font-weight-bold">03.</strong> COMO FUNCIONA <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
                </div>

                <div class="como-pedir-video sombra-leve my-5" style="padding-top: 20%;background-image:url('{{assets('images/sistema/como-ser-produtor-video-capa.jpg')}}');">
                    <div class="text-center w-100">
                        <a href="#"><img class="brilho-hover" src="{{assets('images/sistema/ver-video-btn2.png')}}" alt=""></a>
                    </div>
                </div>

                <div class="u-h-1 cinza-traco u-my-25"></div>
                <div class="cor-azul-show font-weight-light u-fs-30">
                    <strong class="font-weight-bold">04.</strong> CADASTRAR SENHA <i class="fas fa-check-circle u-fs-18 position-relative u-top-minus-3 u-ml-5"></i>
                </div>
                <div class="cor-bg-azul-show u-w-60 u-h-3 u-mt-5 u-mb-30"></div>
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
                    <a href="#" class="section-fase-destaque-btn sombra-leve mb-3">PROSSEGUIR CADASTRO</a>
                </div>

            </div>

        </section>



        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>
