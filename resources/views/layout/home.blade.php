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
        <section class="banner-home bg-cover-center position-relative" style="background-image: url('{{assets('images/sistema/banner-home.jpg')}}');">
            <div class="container-fluid limit">

                <!-- Menu desktop -->
                @include('sistema.includes.menu-desktop')

                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="banner-home-frase">
                            NUNCA FOI TÃO FÁCIL IR AO <span class="f-zul-sign">Show</span> DA SUA <span class="font-weight-bold">BANDA PREFERIDA</span>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="text-center">
                    <a class="btn-saiba-mais d-inline-block" href="#">SAIBA MAIS</a>
                </div>
                <div class="d-none d-md-block text-center seta-baixo">
                    <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="banner-home-image"></div>
        </section>

        <!-- Section sou fã -->
        <section class="sou-fa-home-section">
            <div class="container-fluid limit">
                <div class="row pt-5">
                    <div class="col-sm-4 vertical-middle-container">
                        <span class="big-text">SOU FÃ</span>
                    </div>
                    <div class="col-sm-3 vertical-middle-container">
                        <span class="text-white fs-21">Peça seu Show escolhendo a cidade e sua banda favorita.</span>
                    </div>
                    <div class="col-sm-2 vertical-middle-container">
                        <div class="text-center w-100">
                            <a class="btn-saiba-mais d-inline-block my-md-0 my-5" href="#">SAIBA MAIS</a>
                        </div>
                    </div>
                    <div class="col-sm-3 vertical-bottom-container">
                        <div class="text-center w-100 text-center">
                            <img src="{{assets('images/sistema/fa-pessoa.png')}}" alt="Fã">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Section artista -->
        <section class="sou-artista-home-section">
            <div class="container-fluid limit">
                <div class="row">
                    <div class="col-sm-5 vertical-bottom-container">
                        <img class="w-100 mt-5 pt-5 mb-5 mb-sm-0 pr-3" src="{{assets('images/sistema/artista-pessoa.png')}}" alt="Artista">
                    </div>
                    <div class="col-sm-7 vertical-middle-container">
                        <div>
                            <div class="big-text">SOU ARTISTA</div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <span class="color-rgb-16-43-42 fs-21">Cadastre sua banda, e convide seus fãs para pedirem seu show</span>
                                </div>
                                <div class="col-sm-5">
                                    <div class="text-center w-100">
                                        <a class="btn-saiba-mais2 d-inline-block my-md-0 my-5" href="#">SAIBA MAIS</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Section produtor -->
        <section class="sou-produtor-home-section ">
            <div class="container-fluid limit position-relative">
                <div class="row">
                    <div class="col-sm-9 vertical-middle-container">
                        <div>
                            <div class="big-text mt-5 mt-sm-0">SOU PRODUTOR</div>
                            <div class="row">
                                <div class="col-sm-6 ">
                                    <span class="text-white fs-21">Cadastre-se e produza eventos já fechados pelos fãs</span>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="text-center w-100">
                                        <a class="btn-saiba-mais3 d-inline-block my-md-0 my-5" href="#">SAIBA MAIS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 vertical-bottom-container">
                        <img class="w-100 mt-5 pt-5 mb-sm-0" src="{{assets('images/sistema/produtor-pessoa.png')}}" alt="Artista">
                    </div>
                </div>
                <div class="detalhes-produtor-home position-absolute">
                    <img src="{{assets('images/sistema/detalhes-produtor-home.png')}}" alt="">
                </div>
            </div>

        </section>

        <!-- Section video já participaram -->
        <section class="ja-assistiram-section">
            <div class="ja-assistiram-titulo mb-5 pb-5">
                JÁ PARTICIPARAM<br/>DO <span class="font-weight-bold">ESCOLHA SEU</span> <span class="f-zul-sign">Show</span>
            </div>


            <div class="text-center pt-5">
                <a href="#"><img class="brilho-hover" src="{{assets('images/sistema/ver-video-btn.png')}}" alt=""></a>
            </div>
        </section>

        <!-- Como funciona section -->
        <section class="como-funciona-section">
            <div class="container-fluid limit">
                <div class="como-funciona-titulo mb-5">VEJA <span class="font-weight-bold">COMO FUNCIONA</span></div>
                <div class="como-funciona-video sombra-leve vertical-middle-container">
                    <div class="text-center w-100">
                        <a href="#"><img class="brilho-hover" src="{{assets('images/sistema/ver-video-btn2.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="tarja-colorida"></div>

        <!-- Rodape -->
        @include('sistema.includes.footer')


    </body>
</html>
