<?php

  Route::group([ 
    'prefix' => '/'
  ], function()
  {
    Route::get('/', [
      'as' => 'sistema.index',
      'uses' => 'Sistema\AppController@index'
    ]);
    
  });

  Route::group([ 
    'prefix' => '/',
    'middleware' => 'auth:usuarios'
  ], function()
  {
    
    Route::post('/indique-um-artista', [
      'as' => 'sistema.artista.indique',
      'uses' => 'Sistema\Artistas\ArtistasController@Indique'
    ]);

    Route::get('/sair', [
      'as' => 'sistema.sair',
      'uses' => 'Sistema\AppController@Sair'
    ]);

  });

