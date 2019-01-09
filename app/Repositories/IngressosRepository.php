<?php

namespace App\Repositories;

use App\Models\Fans\Fan;
use Illuminate\Http\Request;
use App\Models\Eventos\Evento;
use App\Models\Eventos\Ingresso;
use Illuminate\Support\Facades\Mail;
use App\Repositories\HelperRepository;
use App\Http\Requests\Sistema\Eventos\EventoRequest;
use App\Http\Requests\Sistema\Eventos\ConfirmadoRequest;


class IngressosRepository
{

  static function criaIngressos(Evento $evento, ConfirmadoRequest $request){
    $x = 0;
    foreach( $request->nome_ingresso as $i ){
      $ingresso = new Ingresso();
      $ingresso->evento_id = $evento->id;
      $ingresso->nome = $i;
      $ingresso->quantidade = $request->qtd_ingresso[$x];
      $ingresso->valor = currencyToBd($request->valor_ingresso[$x]);
      $ingresso->save();
      $x++;
    }
  }


}
