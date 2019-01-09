<?php

namespace App\Http\Controllers\Sistema\Fans;

use Illuminate\Http\Request;
use App\Models\Eventos\Evento;
use App\Http\Controllers\Controller;
use App\Repositories\HelperRepository;
use App\Repositories\EventosRepository;
use App\Repositories\PessoasRepository;
use App\Repositories\ArtistasRepository;

class FanController extends Controller
{

  public function Perfil(){
    if( !PessoasRepository::checkProfile($this->user, 0) ) {
      return redirect()->route('sistema.pessoas.entrar');
    }
    $eventos = Evento::whereNotIn('fan_id', [$this->user->pessoa->id])->orderBy('created_at', 'DESC')->take(5)->get();
    return view('sistema.fans.index')
      ->with('eventos', $eventos);
  }

  public function SouFa(){
    return view('sistema.fans.sou-fan');
  }

  public function PedirEvento(){
    $cidades = HelperRepository::getCidades();
    $artistas = ArtistasRepository::getArtistas()->pluck('nome', 'id')->toArray();
    return view('sistema.fans.pedir-evento')
      ->with('cidades', $cidades)
      ->with('artistas', $artistas);
  }

  public function PedirEventoDetalhes(Request $request){
    $cidade = HelperRepository::getCidadeByIso($request->cidade_id);
    return view('sistema.fans.pedir-evento-detalhes')
      ->with('cidade', $cidade )
      ->with('uf', HelperRepository::getUfCidade($cidade->id_state) )
      ->with('artista', ArtistasRepository::findArtista($request->artista_id));
  }

  public function preCriado(){
    return view('sistema.fans.pre-criado');
  }

  public function IndicarArtista(){
    return view('sistema.fans.indique-um-artista');
  }

  public function MeusEventos(){
    $eventos = EventosRepository::eventosByFan($this->user->pessoa);
    return view('sistema.fans.meus-eventos')
      ->with('eventos', $eventos);
  }

  public function IndicarCasa(){
    return view('sistema.fans.indicar-casa');
  }

}
