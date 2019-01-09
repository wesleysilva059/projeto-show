<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Models\Artistas\Artista;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Backend\Artistas\ArtistaRequest;
use App\Http\Requests\Sistema\Pessoas\ArtistaRequest as PessoaRequest;

class ArtistasRepository
{
  static function Aprova(Artista $artista){
    $artista->status = '1';
    $artista->update();
  }   

  static function getArtistas(){
    return Artista::all();
  }

  static function findArtista(int $id){
    return Artista::find($id);
  }

  static function getIndicados(Int $size, Request $request = null){
    return Artista::where('status', '1')->paginate($size);
  }

  static function cadastra(PessoaRequest $request){
    $artista = Artista::create($request->except(['estilos', 'tipo', 'senha', 'confirmacao_de_senha']));
    $artista = self::estilosArtista($artista, $request);
    return $artista;
  }

  static function estilosArtista(Artista $artista, PessoaRequest $request){
    $artista->estilos()->attach($request->estilos);
    $artista->fresh();
    return $artista;
  }

  static function makePessoa(ArtistaRequest $request, Artista $artista){
    if( $request->cpf ){
      $request['pessoa'] = 'F';
      $request['identificador'] = $request->cpf;
    }
    if( $request->cnpj ){
      $request['pessoa'] = 'J';
      $request['identificador'] = $request->cnpj;
    }
    return $request;
  }

  static function upload(Request $request){
    $nameFile = null;
    if ($request->hasFile('file') && $request->file('file')->isValid()) {
      $name = uniqid(date('HisYmd'));
      $extension = $request->file->extension();
      $nameFile = "{$name}.{$extension}";
      $upload = $request->file->storeAs('artistas/temp', $nameFile);
      if ( !$upload ){
        return redirect()
        ->back()
        ->with('error', 'Falha ao fazer upload')
        ->withInput();
      }else{
        $data = ['link' => url('/storage/artistas/temp/').'/'.$nameFile];
        return response()->json($data);
      }
    }
  }   

  static function moveImage(Artista $artista){
    $explode = explode('temp/', $artista->imagem);
    $fileName = end($explode);
    $path = storage_path('app/public/artistas/'.$artista->id);
    \File::isDirectory($path) or \File::makeDirectory($path, 0777, true, true);
    $file = storage_path('app/public/artistas/temp/'.$fileName);
    $destination = $path.'/'.$fileName;
    \File::move($file,$destination);
    $artista->imagem = url('/storage/artistas/'.$artista->id).'/'.$fileName;
    $artista->update();
  }

  static function getQtdMinima(Artista $artista){
    return $artista->quantidade_minima_fans;
  }
}
