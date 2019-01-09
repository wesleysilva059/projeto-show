<?php

  Route::group([ 
    'prefix' => '/',
  ], function()
  {
    Route::get('/sou-fa', [
      'as' => 'sistema.fan.sou-fan',
      'uses' => 'Sistema\Fans\FanController@SouFa'
    ]);

  });

  Route::group([ 
    'prefix' => '/fan',
    'middleware' => ['auth:usuarios', 'App\Http\Middleware\FanMiddleware']
  ], function()
  {
    Route::get('/', [
      'as' => 'sistema.fan.index',
      'uses' => 'Sistema\Fans\FanController@Index'
    ]);

    Route::get('/perfil', [
      'as' => 'sistema.fan.perfil',
      'uses' => 'Sistema\Fans\FanController@Perfil'
    ]);
    
    Route::get('/pedir-evento', [
      'as' => 'sistema.fan.pedir',
      'uses' => 'Sistema\Fans\FanController@PedirEvento'
    ]);

    Route::post('/pedir-evento-detalhes', [
      'as' => 'sistema.fan.pedir.detalhes',
      'uses' => 'Sistema\Fans\FanController@PedirEventoDetalhes'
    ]);

    Route::get('/pre-evento-criado', [
      'as' => 'sistema.eventos.pre.criado',
      'uses' => 'Sistema\Fans\FanController@PreCriado'
    ]);

    Route::get('/indique-um-artista', [
      'as' => 'sistema.fan.indique.artista',
      'uses' => 'Sistema\Fans\FanController@IndicarArtista'
    ]);

    Route::get('/meus-eventos', [
      'as' => 'sistema.fan.meus-eventos',
      'uses' => 'Sistema\Fans\FanController@MeusEventos'
    ]);

    Route::get('/indicar-casa', [
      'as' => 'sistema.fan.indicar.casa',
      'uses' => 'Sistema\Fans\FanController@IndicarCasa'
    ]);

    Route::get('/artistas-indicados', [
      'as' => 'sistema.fan.artistas-indicados',
      'uses' => 'Sistema\Artistas\ArtistasController@Indicados'
    ]);

    Route::get('/sair', [
      'as' => 'sistema.fan.sair',
      'uses' => 'Sistema\Fans\FanController@Sair'
    ]);

    
  });
