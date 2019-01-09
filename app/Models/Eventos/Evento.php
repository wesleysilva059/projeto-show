<?php

namespace App\Models\Eventos;

use App\Repositories\EventosRepository;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Evento extends Model
{

  use Sluggable;

  protected $guarded = [
    'id',
  ];

  public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'nome'
            ]
        ];
    }

    function cidade(){
      return $this->belongsTo('App\Models\Cidade', 'cidade_id', 'id');
    }

    public function fans(){
      return $this->belongsToMany('App\Models\Fans\Fan');
    }

    function artista(){
      return $this->belongsTo('App\Models\Artistas\Artista');
    }

    function participantes(){
      return EventosRepository::makePercentualParticipacao($this);
    }

}
