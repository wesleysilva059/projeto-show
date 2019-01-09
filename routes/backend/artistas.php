<?php
  Route::group([
    'middleware' => ['auth'],
    'prefix' => '/backend/artistas'
  ], function() {
  
    Route::get('/', [
      'as' => 'backend.artistas',
      'uses' => 'Backend\Artistas\ArtistasController@Index'
    ]);

    Route::get('/get', [
      'as' => 'backend.artistas.get',
      'uses' => 'Backend\Artistas\ArtistasController@Get'
    ]);

    Route::get('/artista/{artista}', [
      'as' => 'backend.artistas.artista',
      'uses' => 'Backend\Artistas\ArtistasController@Artista'
    ]);

    Route::post('/', [
      'as' => 'backend.artistas.adicionar',
      'uses' => 'Backend\Artistas\ArtistasController@Adicionar'
    ]);

    Route::put('/', [
      'as' => 'backend.artistas.salvar',
      'uses' => 'Backend\Artistas\ArtistasController@Salvar'
    ]);

    Route::delete('/artista/{artista}', [
      'as' => 'backend.artistas.apagar',
      'uses' => 'Backend\Artistas\ArtistasController@Apagar'
    ]);

    /** INDICADOS */

    Route::get('/indicados', [
      'as' => 'backend.artistas.indicados',
      'uses' => 'Backend\Artistas\ArtistasController@Indicados'
    ]);

    Route::get('/getindicados', [
      'as' => 'backend.artistas.indicados.get',
      'uses' => 'Backend\Artistas\ArtistasController@GetIndicados'
    ]);

    Route::post('/indicados/{artista}/aprovar', [
      'as' => 'backend.artistas.indicados.aprovar',
      'uses' => 'Backend\Artistas\ArtistasController@AprovarIndicado'
    ]);

    /** APAGADOS */

    Route::get('/apagados', [
      'as' => 'backend.artistas.apagados',
      'uses' => 'Backend\Artistas\ArtistasController@Apagados'
    ]);

    Route::post('/apagados/restaurar/{artista}', [
      'as' => 'backend.artistas.apagados.restaurar',
      'uses' => 'Backend\Artistas\ArtistasController@Restaurar'
    ]);

});