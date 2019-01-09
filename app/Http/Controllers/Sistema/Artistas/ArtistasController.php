<?php

namespace App\Http\Controllers\Sistema\Artistas;

use Illuminate\Http\Request;
use App\Models\Eventos\Evento;
use App\Models\Artistas\Artista;
use App\Http\Controllers\Controller;
use App\Repositories\PessoasRepository;
use App\Repositories\ArtistasRepository;
use App\Http\Requests\Sistema\Artistas\ArtistaRequest;
use App\Http\Requests\Sistema\Eventos\ConfirmadoRequest;
use App\Repositories\EventosRepository;

class ArtistasController extends Controller
{
  
  public function Indique(ArtistaRequest $request){
    Artista::create($request->all());
  }

  public function Artista(){

  }

  function Upload(Request $request) {
    return ArtistasRepository::upload($request);
  }

  function Indicados(Request $request){
    $artistas =  ArtistasRepository::getIndicados(1, $request);
    return view('sistema.fans.artistas-indicados')
      ->with('artistas', $artistas);
  }

  /** AUTH */

  public function Perfil(){
    $eventos = Evento::where('artista_id', [$this->user->pessoa->id])->where('data_evento', null)->orderBy('created_at', 'DESC')->take(5)->get();
    return view('sistema.artistas.index')
      ->with('eventos', $eventos);
  }

  function Transformar(Evento $evento){
    return view('sistema.artistas.cadastrar-evento')
      ->with('evento', $evento);
  }

  function Confirmar(Evento $evento, ConfirmadoRequest $request){
    EventosRepository::confirmaEvento($evento, $request);
  }

  function Eventos(){
    $eventos = Evento::where('artista_id', [$this->user->pessoa->id])->where('data_evento', '!=', null)->orderBy('created_at', 'DESC')->take(5)->get();
    return view('sistema.artistas.eventos')
      ->with('eventos', $eventos);
  }

}
