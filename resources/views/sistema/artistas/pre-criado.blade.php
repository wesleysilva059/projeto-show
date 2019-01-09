@extends('sistema.layouts.default')
@section('content')
<main class="main-perfil">
    <div class="text-center position-relative seta-baixo-middle">
        <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
    </div>
    <div class="container-fluid limit pt-5">
        <div class="row">
            <div class="col-sm-3 u-pb-30">
                <!-- Navegação Rápida -->
                @include('sistema.includes.perfil-menu-lateral')
            </div>
            <div class="col-sm-9 pl-0 pl-sm-4">
                <div class="cor-bg-azul-show u-b-radius-5 u-py-25 text-center text-white">
                    <i class="fas fa-check-circle u-fs-36"></i>
                    <div class="u-fs-36 u-py-15">Pré evento cadastrado com sucesso!</div>
                    <a target="_blank" href="{{route('sistema.eventos.evento', session('ultimoEventoCadastrado') ) }}" class="section-fase-destaque-btn sombra-leve mb-3 sem-sombra">VER EVENTO</a>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="tarja-colorida"></div>
@endsection

