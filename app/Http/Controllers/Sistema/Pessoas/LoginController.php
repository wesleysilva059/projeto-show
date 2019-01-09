<?php

namespace App\Http\Controllers\Sistema\Pessoas;

use App\Models\Fans\Fan;
use Illuminate\Http\Request;
use App\Models\Pessoas\Pessoa;
use App\Models\Usuarios\Usuario;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\AuthenticationException;

class LoginController extends Controller
{

  public function Login(LoginRequest $request){
    $usuario = Usuario::where('email', $request->email)->where('tipo', $request->tipol)->first();
    if( !$usuario ){
      return response()->json('Nenhum ' . $this->checkTipo($request) .' encontrado com este e-mail!');
    }else{
      $credentials = array(
        'email' => $request->email,
        'password' => $request->senha,
        'tipo' => $request->tipol,
        'confirmation_token' => null
      );
      if(auth()->guard('usuarios')->attempt($credentials)){
        $data['resposta'] = 'OK';
        // $data['url'] = route('sistema.'.$this->checkTipoUrl($request).'.perfil');
        $data['url'] =  Redirect::intended('/')->getTargetUrl();
        return response()->json($data);
      }else{        
        $this->sendFailedLoginResponse($request);
      }
    }
  }

  protected function sendFailedLoginResponse(Request $request){
    $usuario = Usuario::where('email', $request->email)->where('tipo', $request->tipol)->first();
    if( !Hash::check($request->senha, $usuario->senha) ) {
      echo 'Senha incorreta!';
      exit;
    }
    
    if ( $usuario->confirmation_token != null ) {
      echo 'Esta conta ainda não foi confirmada! Por favor, verifique seu e-mail.';
      exit;
    }
  }

  protected function checkTipo(LoginRequest $request):String{
    switch ($request->tipol) {
      case '0':
        return 'Fã';
        break;
      case '1':
        return 'Artista';
        break;
      default:
        return 'Produtor';
        break;
    }
  }

  protected function checkTipoUrl(LoginRequest $request):String{
    switch ($request->tipol) {
      case '0':
        return 'fan';
        break;
      case '1':
        return 'artista';
        break;
      default:
        return 'produtor';
        break;
    }
  }

}
