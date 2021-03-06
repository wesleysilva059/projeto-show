<div class="u-px-10 u-pb-50 col-4 padding-5">
  <div class="bg-white sombra-leve">
      <div class="u-h-min-220 bg-cover-center" style="background-image: url('{{$evento->imagem}}')"></div>
      <div class="u-p-15">
          <div class="cor-azul-show u-fs-14 text-uppercase u-mb-5">{{$evento->cidade->title}} / {{$evento->cidade->estado->letter}}</div>
          <div class="u-fs-20 u-c-gs-95 u-mb-5">{{$evento->nome}}</div>
          <div class="u-fs-16 u-c-gs-125 u-mb-15">{!!break_text($evento->resumo,60)!!}</div>
          <div class="cor-azul-show font-weight-bold u-fs-16 text-left">
            <i class="fas fa-users"></i> {{$evento->fans->count()}} pessoas pediram o show
          </div>
          <div class="bg-f2 u-b-radius-5 u-p-2">
              <div class="cor-bg-azul-show u-b-radius-5 u-h-7" style="width: {{$evento->participantes()}}%;"></div>
          </div>
          <div class="cor-azul-show u-fs-16 u-mb-25 text-left font-weight-bold">{{$evento->participantes()}}% atingido</div>
          @if( $evento->participantes() > 99 )
            <div class="text-center">
              <a class="btn-detalhes font-weight-bold ui-fs-17 ui-px-30" href="{{route('sistema.artistas.transformar-evento', $evento->slug)}}"> CADASTRAR EVENTO</a>        
            </div>
          @endif
      </div>
  </div>
</div>