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
                        <div class="font-weight-light u-fs-30 u-c-gs-95 text-uppercase">JÁ <span class="font-weight-bold">PARTICIPARAM</span></div>
                        <div class="u-fs-17 u-c-gs-145 u-mb-15">Veja abaixo outros fãs que já participaram da plataforma</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                        <form id="form-indique" action="#" method="post">

                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="nome" class="input-text" placeholder="Nome"/>
                                </div>
                                <div class="col-md-6 pl-0 pl-md-3">
                                    <input type="text" name="nome" class="input-text" placeholder="Nome"/>
                                </div>
                            </div>
                            <textarea name="mensagem" class="input-text ui-h-120 pt-2" placeholder="Mensagem"></textarea>

                            <div class="text-center u-mb-100">
                                <a class="hover-verde td-none transition cor-azul-show font-weight-bold u-fs-20" href="javascript:;" onclick="$('#form-indique').submit();">Enviar depoimento</a>
                            </div>
                        </form>

                        <?php for($i =0; $i <2;$i++){?>
                        <div class="bg-white sombra-leve u-py-35 u-px-30 u-mb-25">
                            <div class="row">
                                <div class="col-md-1 mb-3 mb-md-0"></div>
                                <div class="col-md-1 mb-3 mb-md-0">
                                    <img src="{{assets('images/sistema/participantes.png')}}" class="u-b-radius-5 img-circle w-100" alt="">
                                </div>
                                <div class="col-md-10 pl-0 pl-md-3 mb-3 mb-md-0">
                                    <div class="u-fs-20 u-c-gs-95 u-mb-10">Guilherme Oliveira</div>
                                    <div class="cor-azul-show u-fs-16 u-mb-15">Fã cadastrado na plataforma</div>

                                    <div class="u-fs-15 u-c-gs-125">
                                        <div class="position-relative">
                                            <div class="u-w-30 float-left">
                                                <img src="{{assets('images/sistema/citacao.png')}}" class="position-relative u-left-minus-10 u-top-minus-5" alt="">
                                            </div>
                                            <div class="w-85 float-left">
                                                A plataforma Escolha Seu Show é incrível. Fácil de usar, com vários shows disponíveis e consigo acessar pelo celular com acessibilidade.
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <?php } ?>

                        @include('sistema.includes.paginacao')


                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        <!-- Rodape -->
        @include('sistema.includes.footer')



    </body>
</html>


