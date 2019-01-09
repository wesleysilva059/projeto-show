@extends('sistema.layouts.default')
@section('content')
<!-- Topo Perfil -->

        <main class="main-perfil">
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
                        <div class="font-weight-light u-fs-24 u-c-gs-95 u-mb-15">PRÉ <span class="font-weight-bold">EVENTOS</span></div>
                        <div class="u-fs-17 u-c-gs-145">Veja abaixo a lista de pré-eventos</div>
                        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-25 u-mb-35 u-b-radius-2"></div>
                        <div class="row">
                          @foreach( $eventos as $evento )
                            @include('sistema.parts.pre-evento-artista')
                          @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <div class="tarja-colorida"></div>
        @endsection