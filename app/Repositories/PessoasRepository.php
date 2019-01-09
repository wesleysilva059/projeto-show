<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Artistas\Artista;
use App\Models\Usuarios\Usuario;
use Illuminate\Support\Facades\Hash;

class PessoasRepository
{
  
  static function criausuario(Object $obj, Request $request){
    $usuario = new Usuario();
    $usuario->tipo = $request->tipo;
    $usuario->pessoa_id = $obj->id;
    $usuario->email = $request->email;
    $usuario->senha = Hash::make($request->senha);
    $usuario->remember_token = str_random(60);
    $usuario->confirmation_token = str_random(100);
    $usuario->save();
    return $usuario;
  }

  static function checkProfile(Usuario $usuario, int $tipo){
    if( $usuario->tipo != $tipo ){
      return false;
    }
    return true;
  }

}
