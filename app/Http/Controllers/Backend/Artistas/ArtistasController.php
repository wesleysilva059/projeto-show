<?php

namespace App\Http\Controllers\Backend\Artistas;

use App\Rules\SemImagem;
use Illuminate\Http\Request;
use App\Models\Artistas\Artista;
use App\Repositories\HelperRepository;
use App\Repositories\EstilosRepository;
use App\Http\Controllers\Backend\BackController;
use App\Repositories\Backend\ArtistasRepository;
use App\Http\Requests\Backend\Artistas\ArtistaRequest;

class ArtistasController extends BackController
{
  public function Index(){
    $cidades  = HelperRepository::getCidades();
    $estilos  = EstilosRepository::getEstios();
    $bancos   = HelperRepository::getBancos();
    return view('backend.artistas.index')
      ->with('cidades', $cidades)
      ->with('estilos', $estilos)
      ->with('bancos', $bancos);
  }

  public function Indicados(){
    return view('backend.artistas.indicados');
  }

  public function Get(){
    $data['data'] = Artista::where('status', '1')->get(['id', 'nome', 'email', 'responsavel', 'celular']);
    foreach( $data['data'] as $d ){
      $d->acoes = '<button class="btn btn-primary btn-editar btn-sm" data-url="'.route('backend.artistas.artista', $d->id).'" data-toggle="tooltip" title="Ver / Editar Artista"><i class="fa fa-pencil"></i></button>';
      $d->acoes .= ' <button class="btn btn-danger btn-apagar btn-sm" data-url="'.route('backend.artistas.apagar', $d->id).'" data-toggle="tooltip" title="Excluir Artista"><i class="fa fa-trash"></i></button>';
    }
    return response()->json($data);
  }

  public function GetIndicados(){
    $data['data'] = Artista::where('status', '0')->get();
    foreach( $data['data'] as $d ){
      $d->acoes = '<button class="btn btn-success btn-aprovar btn-sm" data-url="'.route('backend.artistas.indicados.aprovar', $d->id).'" data-toggle="tooltip" title="Aprovar Artista"><i class="fa fa-check"></i></button>';
      $d->acoes .= ' <button class="btn btn-danger btn-apagar btn-sm" data-url="" data-toggle="tooltip" title="Excluir Artista"><i class="fa fa-trash"></i></button>';
    }
    return response()->json($data);
  }

  public function Apagados(){
    $data['data'] = Artista::onlyTrashed()->get();
    foreach( $data['data'] as $d ){
      $d->deleted_at = $d->deleted_at_br;
      $d->acoes = '<button class="btn btn-success btn-restaurar btn-sm" data-url="'.route('backend.artistas.apagados.restaurar', $d->id).'" data-toggle="tooltip" title="Restaurar Artista"><i class="fa fa-undo"></i></button>';
    }
    return response()->json($data);
  }

  public function AprovarIndicado(Artista $artista){
    ArtistasRepository::Aprova($artista);
    echo 'OK';
  }

  public function Adicionar(ArtistaRequest $request){
    $request['status'] = '1';
    $artista = Artista::create($request->except(['estilos']));
    $artista->estilos()->attach($request->estilos);
    echo 'OK';
  }

  public function Salvar(ArtistaRequest $request){
    $artista = ArtistasRepository::findArtista($request->id);
    $request = ArtistasRepository::makePessoa($request, $artista);
    $artista->update($request->except(['estilos', 'cpf', 'cnpj']));
    $artista->estilos()->sync($request->estilos);
    echo 'OK';
  }

  public function Apagar(Artista $artista){
    $artista->delete();
    echo 'OK';
  }

  public function Artista(Artista $artista){
    return response()->json($artista);
  }

}
