<?php

namespace App\Models\Fans;

use Illuminate\Database\Eloquent\Model;

class Fan extends Model
{
  protected $guarded = ['id'];

  public function estilos(){
    return $this->belongsToMany('App\Models\Estilos\Estilo');
  }

  public function usuario(){
    return $this->hasOne('App\Models\Usuarios\Usuario', 'pessoa_id', 'id');
  }

  public function eventos(){
    return $this->belongsToMany('App\Models\Eventos\Evento');
  }

}
