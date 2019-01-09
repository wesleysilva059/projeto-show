<?php

namespace App\Models\Usuarios;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
  use Notifiable;
  
	/**
  * The attributes that are mass assignable.
  *
  * @var array
  */
	protected $fillable = [
		'nome', 'usuario', 'senha', 'email',
	];
  
	/**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
	protected $hidden = [
		'senha', 'remember_token',
	];
  
  public function getAuthPassword() {
    return $this->senha;
  }

  public function pessoa(){
    $usuario = auth('usuarios')->user();
    if( $usuario->tipo == '0' ){
      return $this->hasOne('App\Models\Fans\Fan' , 'id', 'pessoa_id');
    }
    if( $usuario->tipo == '1' ){
      return $this->hasOne('App\Models\Artistas\Artista' , 'id', 'pessoa_id');
    }
  }
}
