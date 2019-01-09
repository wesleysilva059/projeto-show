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
              <div class="row">
                @foreach( $eventos as $evento )
                  @include('sistema.parts.pre-evento')
                @endforeach
              </div>
            </div>
        </div>
    </div>
</main>
<div class="tarja-colorida"></div>
@endsection

