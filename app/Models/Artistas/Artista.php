<?php

namespace App\Models\Artistas;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artista extends Model
{

  use SoftDeletes, Sluggable;

  protected $guarded = [
    'id'
  ];

  protected $dates = ['
    deleted_at'
  ];

  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'nome'
          ]
      ];
  }

  function estilos(){
    return $this->belongsToMany('App\Models\Estilos\Estilo');
  }

  public function usuario(){
    return $this->hasOne('App\Models\Usuarios\Usuario', 'pessoa_id', 'id');
  }

  function getDeletedAtBrAttribute(){
    return Carbon::createFromFormat('Y-m-d H:i:s',$this->attributes['deleted_at'])->format('d/m/Y \à\s H:i:s');
  }

}
