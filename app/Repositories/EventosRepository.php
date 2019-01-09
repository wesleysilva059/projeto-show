<?php

namespace App\Repositories;

use App\Models\Fans\Fan;
use Illuminate\Http\Request;
use App\Models\Eventos\Evento;
use Illuminate\Support\Facades\Mail;
use App\Repositories\HelperRepository;
use App\Http\Requests\Sistema\Eventos\EventoRequest;
use App\Http\Requests\Sistema\Eventos\ConfirmadoRequest;


class EventosRepository
{

  static function verificaEvento($artista_id, $cidade_iso){
    $cidade_id = HelperRepository::getCidadeByIso($cidade_iso)->id;
    return Evento::where('artista_id', $artista_id)->where('cidade_id', $cidade_id)->first();
  }

  static function upload(Request $request){
    $nameFile = null;
    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $name = uniqid(date('HisYmd'));
      $extension = $request->file->extension();
      $nameFile = "{$name}.{$extension}";
      $upload = $request->file->storeAs('eventos', $nameFile);
      if ( !$upload ){
        return redirect()
        ->back()
        ->with('error', 'Falha ao fazer upload')
        ->withInput();
      }else{
        $data = ['link' => url('/public/storage/eventos/').'/'.$nameFile];
        return response()->json($data);
      }
    }
  }   

  static function criaEvento(EventoRequest $request, Fan $fan):Evento{
    $request['fan_id'] = $fan->id;
    $evento = Evento::create($request->all());
    $evento->refresh();
    self::confirmaFanEvento($evento, $fan);
    return $evento;
  }

  static function listaPreEventos(){
    return Evento::orderBy('created_at', 'DESC')->get();
  }

  static function eventosByFan(Fan $fan){
    return Evento::where('fan_id', $fan->id)->orderBy('created_at', 'DESC')->get();
  }

  static function confirmaFanEvento(Evento $evento, Fan $fan){
    $fan->eventos()->attach([$evento->id]);
    $evento->participantes = (int)$evento->participantes + 1;
    $evento->save();
  }

  static function checkFanEvento(Evento $evento, Fan $fan){
    $fans = $evento->fans()->select('fan_id')->get()->pluck('fan_id')->toArray();
    if( in_array($fan->id, $fans) ){
      return true;
    }
    return false;
  }

  static function makePercentualParticipacao(Evento $evento){
    $participantes = $evento->participantes;
    $qtdMinima = ArtistasRepository::getQtdMinima($evento->artista);
    $percentual = ( $participantes / $qtdMinima ) * 100;
    return $percentual;
  }

  static function confirmaEvento(Evento $evento, ConfirmadoRequest $request){
    $evento->data_evento = dateAppToBd($request->data_evento);
    $evento->data_arrecadacao = dateAppToBd($request->data_arrecadacao);
    $evento->capacidade = $request->capacidade;
    $evento->local = $request->local;
    $evento->valor = currencyToBd($request->valor);
    $evento->save();
    IngressosRepository::criaIngressos($evento, $request);
  }

  static function avisaArtistaQuantidade(Evento $evento){
    Mail::send('sistema.emails.artistas.avisa-quantidade-atingida', [
      'obj' => $evento,
    ], function($mail) use ($evento)
    {
      $mail->from(config('app.email'), config('app.name'));
      $mail->to($evento->artista->email);
      $mail->subject('Escolha Seu Show - Aviso de quantidade mínima de fãs atingida!');
    });
  }

}
