<?php

namespace App\Http\Controllers\Sistema\Eventos;

use App\Models\Fans\Fan;
use Illuminate\Http\Request;
use App\Models\Eventos\Evento;
use App\Http\Controllers\Controller;
use App\Repositories\EventosRepository;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ArtistasRepository;
use App\Http\Requests\Sistema\Eventos\EventoRequest;

class EventoController extends Controller {
  
  function PreEventos(){
    $eventos =  EventosRepository::listaPreEventos(9);
    return view('sistema.eventos.pre-eventos')
      ->with('eventos', $eventos);
  }

  function Upload(Request $request) {
    return EventosRepository::upload($request);
  }

  function Verificar(Request $request){
    if( !$request->a && !$request->c ){
      return false;
    }
    if( EventosRepository::verificaEvento($request->a, $request->c) ) {
      echo '0';
    }else{
      echo '1';
    }
  }

  function Criar(EventoRequest $request){
    $fan = $this->user->pessoa;
    $evento = EventosRepository::criaEvento($request, $fan);
    session(['ultimoEventoCadastrado' => $evento->slug]);
    return response()->json(['resposta' => 'OK', 'url' => route('sistema.eventos.pre.criado')]);
  }

  function Evento(Evento $evento){
    if( $this->user ){
      $participa = EventosRepository::checkFanEvento($evento, $this->user->pessoa);
    }else{
      $participa = false;
    }
    $percentual = EventosRepository::makePercentualParticipacao($evento);
    return view('sistema.eventos.evento')
      ->with('evento', $evento)
      ->with('confirma', false)
      ->with('percentual', $percentual)
      ->with('participa', $participa);
  }

  function ConfirmaParticipacao(Evento $evento){
    $participa = EventosRepository::checkFanEvento($evento, $this->user->pessoa);
    $percentual = EventosRepository::makePercentualParticipacao($evento);
    return view('sistema.eventos.evento')
      ->with('evento', $evento)
      ->with('confirma', true)
      ->with('percentual', $percentual)
      ->with('participa', $participa);
  }

  function Confirma(Evento $evento){
    EventosRepository::confirmaFanEvento($evento, $this->user->pessoa);
    $percentual = EventosRepository::makePercentualParticipacao($evento);
    if( $percentual == 100 ){
      EventosRepository::avisaArtistaQuantidade($evento);
    }
  }

}