<a href="{{route('sistema.artistas.artista', $artista->slug)}}" class="d-block td-none bg-white sombra-leve u-pt-50 u-pb-25 u-px-30 u-mb-30">
  <div class="row">
      <div class="col-md-2 mb-3 mb-md-0">
          <img src="{{$artista->imagem}}" class="u-b-radius-5 w-100" alt="">
      </div>
      <div class="col-md-10 pl-0 pl-md-3 mb-3 mb-md-0">
          <div class="u-fs-24 u-c-gs-95 u-mb-10">{{$artista->nome}}</div>
          <div class="u-fs-16 u-c-gs-125">{{break_text($artista->sobre, 100)}}</div>
      </div>
  </div>
</a>