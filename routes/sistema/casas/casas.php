<?php

  Route::group([ 
    'prefix' => '/casas',
  ], function()
  {

    Route::post('/cadastrar', [
      'as' => 'sistema.casas.adicionar',
      'uses' => 'Sistema\Casas\CasaController@Adicionar'
    ]);
    
  });
