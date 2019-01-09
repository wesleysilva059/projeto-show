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
        <section class="banner-sou-produtor">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="banner-home-frase ui-pt-145">
                            FAÇA <span class="f-zul-sign">Eventos</span> POR TODO O<br/>BRASIL À <span class="font-weight-bold">PEDIDO DOS FÃS</span>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="text-center">
                    <a class="btn-saiba-mais d-inline-block mb-3 mb-md-0" href="#">QUERO ME CADASTRAR</a>
                    <a class="btn-outline-white d-inline-block ml-2" href="#">COMO FUNCIONA</a>
                </div>
                <div class="text-center seta-baixo">
                    <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
                </div>
            </div>
        </section>


        <section class="sou-fa-varios-eventos-section bg-branco-quadriculado">
            <div class="container-fluid limit">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="section-frase-destaque1">
                            <span>VÁRIOS EVENTOS</span> JÁ<br/>FORAM REALIZADOS
                        </div>
                        <div class="section-fase-destaque-spacer"></div>
                        <div class="section-fase-destaque-descricao">Veja a lista de eventos que já aconteceram na<br/>plataforma Escolha Seu Show</div>
                        <a class="section-fase-destaque-btn" href="#">VER LISTA DE EVENTOS</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <img class="fan-pessoa-2" src="{{assets('images/sistema/fa-pessoa-2.png')}}" alt="fan-pessoa">
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="row mb-5">
                <div class="col-lg-6">
                    <img src="{{assets('images/sistema/indique-artistas.jpg')}}" class="sou-fa-images-middle-section pr-0 pr-lg-5 float-lg-right" alt="indique artistas">
                </div>
                <div class="col-lg-6 px-3 px-lg-0">
                    <div class="section-frase-destaque1">
                        INDIQUE <span>ARTISTAS</span><br/>PARA PARTICIPAREM
                    </div>
                    <div class="section-fase-destaque-spacer"></div>
                    <div class="section-fase-destaque-descricao">Conhece algum artista excelente? Indique ele pra gente<br/>e iremos entrar em contato e apresentar a plataforma</div>
                    <a class="section-fase-destaque-btn-outline" href="#">QUERO INDICAR</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 px-3 px-lg-0">
                    <div class="d-inline-block float-lg-right pr-0 pr-lg-5">
                        <div class="section-frase-destaque1">
                            INDIQUE <span>CASAS</span><br/>PARA A PLATAFORMA
                        </div>
                        <div class="section-fase-destaque-spacer"></div>
                        <div class="section-fase-destaque-descricao">Indique a casa de Evento que tenha o seu perfil<br/>para a realização do evento</div>
                        <a class="section-fase-destaque-btn-outline" href="#">QUERO INDICAR</a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <img src="{{assets('images/sistema/indique-casa.jpg')}}" class="sou-fa-images-middle-section" alt="indique artistas">
                </div>
            </div>
        </section>

        <section class="sou-fa-ja-participaram bg-branco-quadriculado">
            <div class="ja-assistiram-titulo-cinza ui-w-max-700 mb-5 pb-5">
                PRODUTORES QUE <span class="font-weight-bold">JÁ PARTICIPARAM</span> DO <span class="f-zul-sign">Escolha Seu Show</span>
            </div>

            <div id="slider-sou-fa">
                <?php for($i = 0; $i < 5; $i++){?>
                <div class="slider-sou-fa-card">
                    <img class="slider-sou-fa-card-img" src="{{assets('images/sistema/testemunho-perfil.png')}}" alt=""/>

                    <div class="slider-sou-fa-card-body">
                        <div class="slider-sou-fa-card-nome">Guilherme Oliveira</div>
                        <div class="slider-sou-fa-card-perfil">Produtor cadastrado na plataforma</div>
                        <div class="slider-sou-fa-card-descricao"><img src="{{assets('images/sistema/citacao.png')}}" class="slider-sou-fa-card-citacao"  alt="">A plataforma Escolha Seu Show é incrível. Fácil de usar, com vários shows disponíveis e consigo acessar pelo celular com acessibilidade. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="text-center pt-2">
                <a id="left-arrow" href="javascript:;" class="transition hover-link-azul u-bc-gs-150 img-circle d-inline-block u-px-10 u-pb-3 u-pt-4"><i class="u-fs-18 text-white fas fa-angle-left"></i></a>

                <a id="right-arrow" href="javascript:;" class="transition hover-link-azul u-bc-gs-150 img-circle d-inline-block u-pl-11 u-pr-9 u-pb-3 u-pt-4 ml-3"><i class="u-fs-18 text-white fas fa-angle-right"></i></a>

            </div>
        </section>

        <div class="container-fluid limit pb-5">
            <div class="como-funciona-titulo mb-5">SAIBA <span class="font-weight-bold">COMO SER PRODUTOR</span> DA PLATAFORMA</div>
            <div class="como-pedir-video sombra-leve" style="padding-top: 20%;background-image:url('{{assets('images/sistema/como-ser-produtor-video-capa.jpg')}}');">
                <div class="text-center w-100">
                    <a href="#"><img class="brilho-hover" src="{{assets('images/sistema/ver-video-btn2.png')}}" alt=""></a>
                </div>
            </div>
        </div>
        
        
        <div class="text-center">
            <a class="white-outline-link-primary-2  mb-5 ui-px-20" href="#">QUERO ME CADASTRAR</a>
        </div>
        
        
        <div class="tarja-colorida"></div>


        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>

