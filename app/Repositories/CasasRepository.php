<?php

namespace App\Repositories;

use App\Models\Casas\Casa;
use App\Http\Requests\Sistema\Casas\CasaRequest;


/**
 * Class SistemaRepository.
 */
class CasasRepository
{

  static function criaCasa(CasaRequest $request){
    Casa::create($request->all());
  }

}
