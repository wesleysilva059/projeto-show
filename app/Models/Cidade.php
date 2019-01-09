<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  protected $table = 'city';

  function estado(){
    return $this->belongsTo('App\Models\Estado', 'id_state', 'id');
  }
  
}
