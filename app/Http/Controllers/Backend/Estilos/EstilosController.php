<?php

namespace App\Http\Controllers\Backend\Estilos;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BackController;
use App\Models\Estilos\Estilo;
use Validator;

class EstilosController extends BackController
{ 
  public function Index(){
    return view('backend.estilos.index');
  }

  public function GetEstilos(){
    $data['data'] = Estilo::all();
    foreach( $data['data'] as $d ){
      $d->imagem = '<img src="'.$d->imagem.'">';
      $d->acoes = '<button class="btn btn-primary btn-editar btn-sm" data-url="'.route("backend.estilos.estilo", $d->id).'" data-toggle="tooltip" title="Editar / Visualizar '.$d->nome.'"><i class="fa fa-pencil-square-o"></i></button>
      <button class="btn btn-danger btn-apagar btn-sm" data-url="'.route("backend.estilo.apagar", $d->id).'" data-toggle="tooltip" title="Apagar '.$d->nome.'"><i class="fa fa-trash"></i></button>';
    }
    return response()->json($data);
  }

  public function Adicionar(Request $request){
    $validator = Validator::make($request->all(), $this->regras());
    if ($validator->fails()) {
      return $this->geraErros($validator);
    } else {
      Estilo::create($request->all());
      echo 'OK';
    }
  }

  public function Salvar(Request $request){
    if( $request->id > 0 ){
      $validator = Validator::make($request->all(), $this->regras());
      if ($validator->fails()) {
        return $this->geraErros($validator);
      } else {
        $item = Estilo::find($request->id);
        $item->update($request->all());
        echo 'OK';
      }
    }
  }

  public function Apagar(Estilo $estilo){
    $estilo->delete();
    echo 'OK';
  }

  public function Editar(Estilo $estilo){
    return response()->json($estilo);
  }

  protected function regras(){
    return $rules = array(
      'nome' => 'required|string|min:3',
    );
  }
}
