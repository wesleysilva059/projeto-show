<?php

namespace App\Models\Estilos;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
  protected $guarded = ['id'];

  public function fans(){
    return $this->belongsToMany('App\Models\Fans\Fan');
  }

  public function artistas(){
    return $this->belongsToMany('App\Models\Artistas\Artista');
  }
}
