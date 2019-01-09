@extends('sistema.layouts.default')
@section('content')
<main class="main-perfil2">
    <div class="text-center position-relative seta-baixo-middle">
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
                <div class="font-weight-light u-fs-30 u-c-gs-95 text-uppercase">INDIQUE UM <span class="font-weight-bold">ARTISTA</span></div>
                <div class="u-fs-17 u-c-gs-145 u-mb-15">Preencha o formulário abaixo para indicar um artista</div>
                <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-25 u-b-radius-2"></div>

                <form class="form-indique" data-action="{{route('sistema.artista.indique')}}">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="nome" class="input-text mb-4" placeholder="Nome / Banda" required />
                            <input type="url" name="facebook" class="input-text mb-4" placeholder="Link Facebook" required />
                        </div>
                        <div class="col-md-6 pl-0 pl-md-4">
                            <input type="email" name="email" class="input-text mb-4" placeholder="E-mail" required />
                            <input type="url" name="site" class="input-text mb-4" placeholder="Site" required />
                        </div>
                    </div>
                    <div class="text-center u-mb-100">
                        <button type="submit" class="btn-saiba-mais sombra-leve d-inline-block mt-2" href="javascript:;" onclick="$('#form-indique').submit();">INDICAR
                            UM ARTISTA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<div class="tarja-colorida"></div>
<script src="{{assets('js/sistema/artista.js')}}"></script>
@endsection
