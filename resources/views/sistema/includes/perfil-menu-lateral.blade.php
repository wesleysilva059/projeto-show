<div class="u-fs-22 cor-azul-show u-px-25 u-py-15 u-mb-40 bg-white sombra-leve"><span>Navegação rápida</span> <img src="{{assets('/images/sistema/expandir.png')}}" class="float-right u-pt-15" alt=""></div>
<div class="perfil-menu-lateral">
  @if( $user->tipo == 0 )
    <a href="{{route('sistema.fan.pedir')}}">Pedir um evento</a>
    <a href="{{route('sistema.fan.meus-eventos')}}">Meus Eventos</a>
    <a href="{{route('sistema.fan.indique.artista')}}">Indicar um artista</a>
    <a href="{{route('sistema.fan.indicar.casa')}}">indicar uma casa de evento</a>
    <a href="{{route('sistema.fan.artistas-indicados')}}">Artistas já indicados</a>
  @endif
  @if( $user->tipo == 1 )
    <a href="{{route('sistema.artista.criar')}}">Criar um Evento</a>
    <a href="{{route('sistema.artista.meus-pre-eventos')}}">Meus Pré Eventos</a>
    <a href="{{route('sistema.artista.meus-eventos')}}">Meus Eventos Confirmados</a>
    <a href="{{route('sistema.fan.indique.artista')}}">Indicar um artista</a>
    <a href="{{route('sistema.fan.indicar.casa')}}">indicar uma casa de evento</a>
  @endif
  <a href="#">Eventos já realizados</a>
  <a href="#">FAQ (Perguntas frequentes)</a>
  <a href="#">Como funciona</a>
  <a href="#">Já participaram</a>
  <a href="#">Nossos parceiros</a>
</div>
