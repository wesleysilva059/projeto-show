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




        <section class="sou-fa-varios-eventos-section bg-branco-quadriculado pb-5">
            <div class="text-center position-relative seta-baixo-middle">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
            <div class="container-fluid limit">
                <div class="row pt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 pr-md-3 pb-3">
                        <form id="form-login" action="#" method="post" class="acesso-container">

                            <div class="acesso-title">Informe seus dados para acesso</div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="usuario">Usuário</label>
                                    <input id="usuario" type="text" name="usuario">
                                </div>
                                <div class="col-md-6 pl-0 pl-md-3">
                                    <label for="senha">Senha</label>
                                    <input id="senha" type="password" name="senha">
                                </div>
                            </div>

                            <div class="text-center pt-3">
                                <a class="section-fase-destaque-btn sombra-leve mb-4" href="javascript:;" onclick="$('#form-login').submit();">ACESSAR</a>
                                <a class="link-esqueci-senha d-block" href="#" data-toggle="modal" data-target="#exampleModal">[Esqueci minha senha]</a>
                                <a class="link-esqueci-senha d-block cor-azul-show" href="#" data-toggle="modal" data-target="#exampleModal">QUERO ME CADASTRAR</a>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-3"></div>

                </div>
            </div>
        </section>

        <div class="tarja-colorida"></div>

        <!-- Rodape -->
        @include('sistema.includes.footer')


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <a href="#" class="fechar-popup" data-dismiss="modal">X</a>

                    <!-- div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div -->
                    <div class="modal-body">
                        <form id="form-esqueci-senha" action="#" method="post" class="acesso-container b-none pt-0">
                            <div class="acesso-title">Esqueceu sua senha?</div>
                            <label for="email">Digite seu e-mail para reenvio de senha</label>
                            <input id="email" type="email" name="email">

                            <div class="text-center pt-3">
                                <a class="section-fase-destaque-btn sombra-leve mb-0" href="javascript:;" onclick="$('#form-esqueci-senha').submit();" >ENVIAR NOVA SENHA</a>
                            </div>
                        </form>
                    </div>
                    <!--div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div-->
                </div>
            </div>
        </div>

    </body>
</html>

