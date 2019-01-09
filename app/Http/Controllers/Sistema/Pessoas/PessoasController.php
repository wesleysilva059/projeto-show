<?php

namespace App\Http\Controllers\Sistema\Pessoas;

use App\Models\Fans\Fan;
use Illuminate\Http\Request;
use App\Models\Estilos\Estilo;
use App\Models\Usuarios\Usuario;
use App\Http\Controllers\Controller;
use App\Http\Requests\PessoaRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Repositories\HelperRepository;
use App\Repositories\PessoasRepository;
use Illuminate\Support\Facades\Session;
use App\Repositories\ArtistasRepository;
use App\Http\Requests\Sistema\Pessoas\ArtistaRequest;
use App\Http\Requests\Sistema\Pessoas\CadastroRequest;

class PessoasController extends Controller
{

  public function Index(){
    return view('sistema.pessoas.acesso');
  }
  
  public function SessionCadastro(CadastroRequest $request){
    session(['cadastro' => $request->all()]);
    echo 'OK';
  }

  public function Cadastro(){
    $dados = session('cadastro');
    $view = $this->tipoCadastro($dados['tipo']);
    $estilos = Estilo::all();
    $bancos = HelperRepository::getBancos();
    return view($view)
      ->with('dados', (object)$dados)
      ->with('estilos', $estilos)
      ->with('bancos', $bancos);
  }

  public function FinalizaCadastroFan(PessoaRequest $request){
    $fan    = $this->criaFan($request);
    PessoasRepository::criausuario($fan, $request);
    $fan->estilos()->attach($request->estilos);
    $this->enviaConfirmacao($fan);
    Session::flush();
  }

  public function FinalizaCadastroArtista(ArtistaRequest $request){
    $artista = ArtistasRepository::cadastra($request);
    ArtistasRepository::moveImage($artista);
    PessoasRepository::criausuario($artista, $request);
    $this->enviaConfirmacao($artista);
    Session::flush();
  }

  public function ConfirmarCadastro(Usuario $usuario, String $token){
    if( $usuario->confirmation_token === null ){
      echo 'Cadastro já confirmado!';
    }
    if( $usuario->confirmation_token === $token ){
      $usuario->confirmation_token = null;
      $usuario->update();
    }else{
      echo 'não';
    }
  }

  protected function tipoCadastro($tipo){
    switch ($tipo) {
      case '0':
        $view = 'sistema.pessoas.cadastro-fan';
        break;
      case '1':
        $view = 'sistema.pessoas.cadastro-artista';
        break;
      case '2':
        $view = 'sistema.pessoas.cadastro-produtor';
        break;
    }
    return $view;
  }

  protected function criaFan(PessoaRequest $request) : Fan{
    $fan = new Fan();
    $fan->nome = $request->nome;
    $fan->email = $request->email;
    $fan->logradouro = $request->logradouro;
    $fan->numero = $request->numero;
    $fan->complemento = $request->complemento;
    $fan->bairro = $request->bairro;
    $fan->cep = $request->cep;
    $fan->uf = $request->uf;
    $fan->cidade = $request->cidade;
    $fan->telefone = $request->telefone;
    $fan->cc = $request->cc;
    $fan->titular_cc = $request->titular_cc;
    $fan->mes_cc = $request->mes_cc;
    $fan->ano_cc = $request->ano_cc;
    $fan->cvc_cc = $request->cvc_cc;
    $fan->save();
    $fan = $fan->fresh();
    return $fan;
  }


  protected function enviaConfirmacao(Object $obj){
    Mail::send('sistema.emails.confirmar-cadastro', [
      'obj' => $obj,
    ], function($mail) use ($obj)
    {
      $mail->from(config('app.email'), config('app.name'));
      $mail->to($obj->usuario->email);
      $mail->subject('Escolha Seu Show - Confirmação de cadastro!');
    });
  }

}
