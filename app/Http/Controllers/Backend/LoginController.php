<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\Models\Backend\User;

class LoginController extends Controller
{
  public function Form(){
    if (Auth::check()) {
      return response()->redirectTo(route('backend.home'));
    }else{
      return view('backend.login');
    }
  }
  
  public function Index(Request $request){
    $validator = Validator::make($request->all(), $this->regras());
    if ($validator->fails()) {
      return $this->geraErros($validator);
    }else{
      $this->fazLogin($request);
    }
  }
  
  public function Sair(){
    auth()->logout();
    return response()->redirectTo(route('backend.index'));
  }
  
  protected function fazLogin(Request $request){
    $credentials = array(
      'usuario' => $request->usuario,
      'password' => $request->senha
    );
    if(auth()->attempt($credentials)){
      echo 'OK';
    }else{        
      $this->sendFailedLoginResponse($request);
    }
  }

  protected function sendFailedLoginResponse(Request $request){
    if ( !User::where('usuario', $request->usuario)->first() ) {
      echo 'Usuário não encontrado!';
      exit;
    }
    
    if ( !User::where('usuario', $request->usuario)->where('senha', bcrypt($request->senha))->first() ) {
      echo 'Senha incorreta!';
      exit;
    }
  }

  protected function regras(){
    return $rules = array(
      'usuario' => 'required|alphaNum|min:3', 
      'senha'   => 'required|min:4' 
    );
  }

  protected function geraErros($validator){
    foreach( $validator->errors()->all() as $e ){
      $erros[] = $e;
    }
    return response()->json($erros);
  }

}