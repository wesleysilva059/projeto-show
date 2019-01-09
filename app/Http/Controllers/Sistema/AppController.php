<?php

namespace App\Http\Controllers\Sistema;

use Illuminate\Http\Request;
use App\Http\Controllers\Sistema\Controller;

class AppController extends Controller
{
  
  public function Index(){
    return view('sistema.index');
  }

  public function Sair(){
    \Auth::guard('usuarios')->logout();
    return response()->redirectTo(route('sistema.index'));
  }

}
