<?php

namespace App\Models\Casas;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Casa extends Model
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
}
