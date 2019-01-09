@extends('sistema.layouts.default')
@section('content')
  <!-- Topo Perfil -->

  <main class="main-perfil2">
    <div class="text-center position-relative seta-baixo-middle">
        <a href="#"><img src="{{assets('images/sistema/seta-baixo.png')}}" alt=""></a>
    </div>
    <div class="container-fluid limit pt-5">
        <div class="font-weight-light u-fs-30 u-c-gs-95 u-mb-15">PRÉ <span class="font-weight-bold">EVENTOS</span></div>
        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-55 u-b-radius-2"></div>

        <div id="slider-eventos-confirmados-gerais">
          @foreach( $eventos as $evento )
            @include('sistema.parts.pre-evento-geral')
          @endforeach  
        </div>

        <div class="text-center u-mb-55">
            <a id="left-arrow" href="javascript:;" class="position-relative transition hover-link-azul u-bc-gs-150 img-circle d-inline-block u-px-20 u-py-15 mr-2 slick-arrow" style=""><i class="u-fs-20 text-white fas fa-angle-left"></i></a>
            <a id="right-arrow" href="javascript:;" class="position-relative transition hover-link-azul u-bc-gs-150 img-circle d-inline-block u-px-20 u-py-15 ml-2 slick-arrow" style=""><i class="u-fs-20 text-white fas fa-angle-right"></i></a>
        </div>



        <div class="font-weight-light u-fs-30 u-c-gs-95 u-mb-15">EVENTOS <span class="font-weight-bold">CONFIRMADOS</span></div>
        <div class="bg-c-gs-97 u-w-60 u-h-4 u-mt-15 u-mb-45 u-b-radius-2"></div>

        <div class="text-uppercase u-fs-20 u-c-gs-95 u-mb-25 font-weight-bold">2017 / DEZEMBRO</div>

        <div class="spacer-linha-fina u-mb-45"></div>


        <div class="row u-mb-25">
          @foreach( $eventos as $evento )
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <div class="cor-azul-show text-uppercase u-fs-21 font-weight-bold mb-4 mb-md-0">
                            <div class="">DEZ</div>
                            <div class="u-fs-30 u-lh-20">16</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-100" alt="">
                    </div>
                    <div class="col-md-8 pl-0 pl-md-3 mb-3 mb-md-0">
                        <a href="#" class="u-fs-20 u-c-gs-95 u-mb-15">information Society</a>
                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">MORRO DA URCA / RIO DE JANEIRO</div>
                    </div>                            
                </div>
            </div>
          @endforeach
        </div>
        <div class="row u-mb-25">
          <?php for($i = 0; $i < 3;$i++) {?>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <div class="cor-azul-show text-uppercase u-fs-21 font-weight-bold mb-4 mb-md-0">
                            <div class="">DEZ</div>
                            <div class="u-fs-30 u-lh-20">16</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-100" alt="">
                    </div>
                    <div class="col-md-8 pl-0 pl-md-3 mb-3 mb-md-0">
                        <a href="#" class="u-fs-20 u-c-gs-95 u-mb-15">information Society</a>
                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">MORRO DA URCA / RIO DE JANEIRO</div>
                    </div>                            
                </div>
            </div>
            <?php } ?>
        </div>
        
        
        <div class="text-uppercase u-fs-20 u-c-gs-95 u-mb-25 u-pt-25 font-weight-bold">2017 / NOVEMBRO</div>

        <div class="spacer-linha-fina u-mb-45"></div>


        <div class="row u-mb-25">
          <?php for($i = 0; $i < 3;$i++) {?>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <div class="cor-azul-show text-uppercase u-fs-21 font-weight-bold mb-4 mb-md-0">
                            <div class="">NOV</div>
                            <div class="u-fs-30 u-lh-20">16</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-100" alt="">
                    </div>
                    <div class="col-md-8 pl-0 pl-md-3 mb-3 mb-md-0">
                        <a href="#" class="u-fs-20 u-c-gs-95 u-mb-15">information Society</a>
                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">MORRO DA URCA / RIO DE JANEIRO</div>
                    </div>                            
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row u-mb-25">
          <?php for($i = 0; $i < 3;$i++) {?>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-2">
                        <div class="cor-azul-show text-uppercase u-fs-21 font-weight-bold mb-4 mb-md-0">
                            <div class="">NOV</div>
                            <div class="u-fs-30 u-lh-20">16</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <img src="{{assets('images/sistema/img-evento-small.jpg')}}" class="u-b-radius-5 w-100" alt="">
                    </div>
                    <div class="col-md-8 pl-0 pl-md-3 mb-3 mb-md-0">
                        <a href="#" class="u-fs-20 u-c-gs-95 u-mb-15">information Society</a>
                        <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">MORRO DA URCA / RIO DE JANEIRO</div>
                    </div>                            
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <br/><br/><br/>
    
  </main>
  <div class="tarja-colorida"></div>

@endsection