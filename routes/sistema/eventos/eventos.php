<?php

  Route::group([ 
    'prefix' => '/eventos',
  ], function()
  {

    Route::get('/evento/{eventoSlug}', [
      'as' => 'sistema.eventos.evento',
      'uses' => 'Sistema\Eventos\EventoController@Evento'
    ]);
  
    Route::get('/pre-eventos', [
      'as' => 'sistema.eventos.pre-eventos',
      'uses' => 'Sistema\Eventos\EventoController@PreEventos'
    ]);
  
  });

  Route::group([ 
    'prefix' => '/eventos',
    'middleware' => 'auth:usuarios'
  ], function()
  {

    Route::post('/verifica-evento', [
      'as' => 'sistema.eventos.verifica-evento',
      'uses' => 'Sistema\Eventos\EventoController@Verificar'
    ]);

    Route::post('/cria-evento', [
      'as' => 'sistema.eventos.criar',
      'uses' => 'Sistema\Eventos\EventoController@Criar'
    ]);

    Route::post('/image-upload', [
      'as' => 'sistema.eventos.upload',
      'uses' => 'Sistema\Eventos\EventoController@Upload'
    ]);

    Route::get('/{eventoSlug}/confirma-participacao', [
      'as' => 'sistema.eventos.confirma-participacao',
      'uses' => 'Sistema\Eventos\EventoController@ConfirmaParticipacao'
    ]);

    Route::post('/{evento}/confirma', [
      'as' => 'sistema.eventos.confirma',
      'uses' => 'Sistema\Eventos\EventoController@Confirma'
    ]);
  
  });
