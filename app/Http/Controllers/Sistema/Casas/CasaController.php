<?php

namespace App\Http\Controllers\Sistema\Casas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Sistema\Casas\CasaRequest;
use App\Repositories\CasasRepository;

class CasaController extends Controller {
  
  function Adicionar(CasaRequest $request){
    CasasRepository::criaCasa($request);
    return response()->json(['resposta' => 'OK', 'mensagem' => 'Casa cadastrada com sucesso!' , 'url' => route('sistema.fan.perfil')]);
  }

}