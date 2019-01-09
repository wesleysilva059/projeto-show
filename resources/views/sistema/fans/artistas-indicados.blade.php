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

              <div class="font-weight-light u-fs-30 u-c-gs-95 u-mb-15">ARTISTAS <span class="font-weight-bold">JÁ INDICADOS</span></div>
              <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-35 u-b-radius-2"></div>
              <form id="busca-artista-form" action="#" method="post" class="d-block td-none bg-white sombra-leve u-py-25 u-px-30 u-mb-30">
                  <div class="pl-0 pl-md-5">
                      <div class="u-fs-24 u-c-gs-95 u-mb-10">Encontre seu artista ou banda</div>
                      <div class="u-fs-18 u-c-gs-180">O que você procura?</div>
                      <div class="row">
                          <div class="col-md-8 mb-3 mb-md-0">
                              <input type="text" name="busca" class="input-text my-0">
                          </div>
                          <div class="col-md-4 pl-0 pl-md-3 mb-3 mb-md-0">
                              <a class="btn-saiba-mais btn-saiba-mais--busca sombra-leve d-inline-block" href="javascript:;" onclick="$('#busca-artista-form').submit();">BUSCAR</a>
                          </div>

                      </div>
                  </div>

              </form>

              <div>
                  @foreach( $artistas as $artista )
                    @include('sistema.parts.artista')
                  @endforeach
              </div>

              {{$artistas->links()}}

          </div>
      </div>
  </div>
</main>
<div class="tarja-colorida"></div>
<script src="{{assets('js/masks.js')}}"></script>
@endsection
