@extends('sistema.layouts.default')
@section('content')
<!-- Banner principal da home -->
<section class="banner-home bg-cover-center position-relative" style="background-image: url('{{assets('images/banner-home.jpg')}}');">
    <div class="container-fluid limit">

        <!-- Menu desktop -->
        @include('sistema.includes.menu-desktop')

        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="banner-home-frase">
                    PEÇA O <span class="f-zul-sign">Evento</span> DA SUA <span class="font-weight-bold">BANDA PREFERIDA</span>
                    NA SUA CIDADE
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="text-center">
            <a class="btn-saiba-mais d-inline-block" href="{{route('sistema.fan.pedir')}}">QUERO PEDIR UM EVENTO</a>
            <a class="btn-outline-white d-inline-block ml-2" href="#">COMO FUNCIONA</a>
        </div>
        <div class="text-center seta-baixo">
            <a href="#"><img src="{{assets('images/seta-baixo.png')}}" alt=""></a>
        </div>
    </div>
    <div class="banner-home-image"></div>
</section>

<section class="sou-fa-varios-eventos-section bg-branco-quadriculado">
    <div class="container-fluid limit">
        <div class="row">
            <div class="col-sm-6">
                <div class="section-frase-destaque1">
                    <span>VÁRIOS EVENTOS</span> JÁ<br />FORAM REALIZADOS
                </div>
                <div class="section-fase-destaque-spacer"></div>
                <div class="section-fase-destaque-descricao">Veja a lista de eventos que já aconteceram na<br />plataforma
                    Escolha Seu Show</div>
                <a class="section-fase-destaque-btn" href="#">VER LISTA DE EVENTOS</a>
            </div>
            <div class="col-sm-6 text-right">
                <img class="fan-pessoa-2" src="{{assets('images/fa-pessoa-2.png')}}" alt="fan-pessoa">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row mb-5">
        <div class="col-lg-6">
            <img src="{{assets('images/indique-artistas.jpg')}}" class="sou-fa-images-middle-section pr-0 pr-lg-5 float-lg-right"
                alt="indique artistas">
        </div>
        <div class="col-lg-6 px-3 px-lg-0">
            <div class="section-frase-destaque1">
                INDIQUE <span>ARTISTAS</span><br />PARA PARTICIPAREM
            </div>
            <div class="section-fase-destaque-spacer"></div>
            <div class="section-fase-destaque-descricao">Conhece algum artista excelente? Indique ele pra gente<br />e
                iremos entrar em contato e apresentar a plataforma</div>
            <a class="section-fase-destaque-btn-outline" href="#">QUERO INDICAR</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 px-3 px-lg-0">
            <div class="d-inline-block float-lg-right pr-0 pr-lg-5">
                <div class="section-frase-destaque1 section-frase-destaque1--margin-top-minus">
                    INDIQUE <span>CASAS</span><br />PARA A PLATAFORMA
                </div>
                <div class="section-fase-destaque-spacer"></div>
                <div class="section-fase-destaque-descricao">Indique a casa de Evento que tenha o seu perfil<br />para
                    a realização do evento</div>
                <a class="section-fase-destaque-btn-outline" href="#">QUERO INDICAR</a>
            </div>

        </div>
        <div class="col-lg-6">
            <img src="{{assets('images/indique-casa.jpg')}}" class="sou-fa-images-middle-section" alt="indique artistas">
        </div>
    </div>
</section>

<section class="sou-fa-ja-participaram bg-branco-quadriculado">
    <div class="ja-assistiram-titulo-cinza mb-5 pb-5">
        ELES <span class="font-weight-bold">JÁ PARTICIPARAM</span> DO <span class="f-zul-sign">Escolha Seu Show</span>
    </div>

    <div class="container">
        <div id="slider-sou-fa">
            <?php for($i = 0; $i < 5; $i++){?>
            <div class="slider-sou-fa-card">
                <img class="slider-sou-fa-card-img" src="{{assets('images/testemunho-perfil.png')}}" alt="" />

                <div class="slider-sou-fa-card-body">
                    <div class="slider-sou-fa-card-nome">Guilherme Oliveira</div>
                    <div class="slider-sou-fa-card-perfil">Fã cadastrado na plataforma</div>
                    <div class="slider-sou-fa-card-descricao"><img src="{{assets('images/citacao.png')}}" class="slider-sou-fa-card-citacao"
                            alt="">A plataforma Escolha Seu Show é incrível. Fácil de usar, com vários shows
                        disponíveis e consigo acessar pelo celular com acessibilidade.</div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>


    <div class="text-center pt-2">
        <a id="left-arrow" href="javascript:;" class="transition hover-link-azul u-bc-gs-150 img-circle d-inline-block u-px-10 u-pb-3 u-pt-4"><i
                class="u-fs-18 text-white fas fa-angle-left"></i></a>

        <a id="right-arrow" href="javascript:;" class="transition hover-link-azul u-bc-gs-150 img-circle d-inline-block u-pl-11 u-pr-9 u-pb-3 u-pt-4 ml-3"><i
                class="u-fs-18 text-white fas fa-angle-right"></i></a>

    </div>
</section>

<div class="container-fluid limit pb-5">
    <div class="como-funciona-titulo mb-5">SAIBA <span class="font-weight-bold">COMO PEDIR UM EVENTO</span> PELA
        PLATAFORMA</div>
    <div class="como-pedir-video sombra-leve" style="padding-top: 20%;">
        <div class="text-center w-100">
            <a href="#"><img class="brilho-hover" src="{{assets('images/ver-video-btn2.png" alt=""></a>
        </div>
    </div>
</div>
<div class="tarja-colorida"></div>

<!-- Rodape -->
@include('sistema.includes.footer-home')
@endsection
