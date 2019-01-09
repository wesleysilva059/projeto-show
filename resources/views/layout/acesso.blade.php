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
        <section class="banner-sou-fan">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="banner-home-frase">
                            PARA PEDIR O SEU SHOW<br/>FAÇA O LOGIN <span class="f-zul-sign">abaixo</span>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </section>




        <section class="sou-fa-varios-eventos-section bg-branco-quadriculado pb-5">
            <div class="d-none d-md-block text-center position-relative seta-baixo-middle">
                <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
            </div>
            <div class="container-fluid limit">
                <div class="row pt-5">
                    <div class="col-sm-6 pr-sm-3 pb-3">
                        <form id="form-login" action="#" method="post" class="acesso-container">

                            <div class="acesso-title">Login</div>
                            <label for="usuario">Usuário</label>
                            <input id="usuario" type="text" name="usuario">

                            <label for="senha">Senha</label>
                            <input id="senha" type="password" name="senha">

                            <div class="text-center pt-3">
                                <a class="section-fase-destaque-btn sombra-leve mb-3" href="javascript:;" onclick="$('#form-login').submit();">ACESSAR</a>
                                <a class="link-esqueci-senha d-block" href="#" data-toggle="modal" data-target="#exampleModal">[Esqueci minha senha]</a>
                            </div>
                        </form>

                    </div>
                    <div class="col-sm-6 pl-sm-3 pb-3">
                        <form id="form-novo-cadastro" action="#" method="post" class="acesso-container">
                            <div class="acesso-title">Faça seu cadastro</div>

                            <label for="nome">Nome</label>
                            <input id="nome" type="text" name="nome">

                            <div class="row">
                                <div class="col-sm-6 pr-sm-3">
                                    <label for="email">E-mail</label>
                                    <input id="email" type="email" name="email">

                                    <label for="senha">Senha</label>
                                    <input id="senha" type="password" name="senha">
                                </div>

                                <div class="col-sm-6 pl-sm-3">
                                    <label for="telefone">Telefone</label>
                                    <input id="telefone" type="text" name="telefone">

                                    <label for="senha-rep">Repetir Senha</label>
                                    <input id="senha-rep" type="password" name="senha-rep">
                                </div>
                            </div>
                            <div class="text-center pt-3">
                                <a class="section-fase-destaque-btn sombra-leve" href="javascript:;" onclick="$('#form-novo-cadastro').submit();">PROSSEGUIR CADASTRO</a>
                            </div>
                        </form>
                    </div>
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

