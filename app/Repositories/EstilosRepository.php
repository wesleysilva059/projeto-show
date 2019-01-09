<?php

namespace App\Repositories;

use App\Models\Estilos\Estilo;


class EstilosRepository
{
  static function getEstios(){
    return Estilo::all();
  }   
}
