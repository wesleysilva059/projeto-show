<?php

namespace App\Http\Controllers\Backend\Fans;

use Validator;
use App\Models\Fans\Fan;
use Illuminate\Http\Request;
use App\Models\Pessoas\Pessoa;
use App\Http\Controllers\Backend\BackController;

class FansController extends BackController
{ 
  public function Index(){
    return view('backend.fans.index');
  }

  public function GetFans(){
    $data['data'] = Fan::all();
    foreach( $data['data'] as $d ){
      $d->status = $this->checkStatus($d);
      $d->data = $d->created_at->format('d/m/Y h:i:s');
      $d->acoes = '<button class="btn btn-primary btn-editar btn-sm" data-url="'.route("backend.fans.fan", $d->id).'" data-toggle="tooltip" title="Editar / Visualizar '.$d->nome.'"><i class="fa fa-pencil-square-o"></i></button>';
    }
    return response()->json($data);
  }

  public function Adicionar(Request $request){
    $validator = Validator::make($request->all(), $this->regras());
    if ($validator->fails()) {
      return $this->geraErros($validator);
    } else {
      Fan::create($request->all());
      echo 'OK';
    }
  }

  public function Salvar(Request $request){
    if( $request->id > 0 ){
      $validator = Validator::make($request->all(), $this->regras());
      if ($validator->fails()) {
        return $this->geraErros($validator);
      } else {
        $item = Fan::find($request->id);
        $item->update($request->all());
        echo 'OK';
      }
    }
  }

  public function Apagar(Fan $fan){
    $fan->delete();
    echo 'OK';
  }

  public function Editar(Fan $fan){
    return response()->json($fan);
  }

  protected function regras(){
    return $rules = array(
      'nome' => 'required|string|min:3',
    );
  }

  protected function checkStatus(Fan $fan) : String{
    if( $fan->usuario->confirmation_token == '' ) {
      return '<i class="fa fa-check text-green"  data-toggle="tooltip" title="Confirmado"></i>';
    }else{
      return '<i class="fa fa-times fa-2x text-red" data-toggle="tooltip" title="Não confirmado"></i>';
    }
  }
}
