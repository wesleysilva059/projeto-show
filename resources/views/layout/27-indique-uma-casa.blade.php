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

        <main class="main-perfil2">
            <div class=" text-center position-relative seta-baixo-middle">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
            <div class="container-fluid limit pt-5">
                <div class="row">
                    <div class="col-sm-3 u-pb-30">
                        <!-- Navegação Rápida -->
                        @include('sistema.includes.perfil-menu-lateral')
                        <div class="spacer-heavy u-mt-100 u-mb-30"></div>
                        <!-- Sites Parceiros -->
                        @include('sistema.includes.perfil-sites-parceiros-lateral')


                    </div>
                    <div class="col-sm-9 pl-0 pl-sm-4">
                        <div class="font-weight-light u-fs-30 u-c-gs-95 text-uppercase">INDIQUE UMA <span class="font-weight-bold">CASA</span></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Preencha o formulário abaixo para indicar uma casa</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                        <form id="form-indique" action="#" method="post">

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nome_estabelecimento" class="input-text" placeholder="Nome do estabelecimento"/>
                                </div>
                                <div class="col-md-6 pl-0 pl-md-3">
                                    <input type="text" name="endereco" class="input-text" placeholder="Endereço"/>
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
                                        <div class="col-md-4">
                                            <input type="text" name="estado" class="input-text" placeholder="Estado"/>
                                        </div>
                                        <div class="col-md-4 pl-0 pl-md-3">
                                            <input type="text" name="cidade" class="input-text" placeholder="Cidade"/>
                                        </div>
                                        <div class="col-md-4 pl-0 pl-md-3">
                                            <input type="text" name="cep" class="input-text cep-input-mask" placeholder="CEP"/>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="text-center u-mb-100">
                                <a class="btn-saiba-mais sombra-leve d-inline-block mt-2" href="javascript:;" onclick="$('#form-indique').submit();">INDICAR UMA CASA</a>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')



    </body>
</html>


