<?php

  Route::group([ 
    'prefix' => '/artistas',
  ], function()
  {

    Route::post('/image-upload', [
      'as' => 'sistema.artistas.upload',
      'uses' => 'Sistema\Artistas\ArtistasController@Upload'
    ]);
    
    Route::get('/{artistaSlug}', [
      'as' => 'sistema.artistas.artista',
      'uses' => 'Sistema\Artistas\ArtistasController@Artista'
    ]);
    
  });

  Route::group([ 
    'prefix' => '/artista',
    'middleware' => ['auth:usuarios', 'App\Http\Middleware\ArtistaMiddleware'],
  ], function()
  {
    Route::get('/', [
      'as' => 'sistema.artista.index',
      'uses' => 'Sistema\Artistas\ArtistasController@Index'
    ]);

    Route::get('/perfil', [
      'as' => 'sistema.artista.perfil',
      'uses' => 'Sistema\Artistas\ArtistasController@Perfil'
    ]);

    Route::get('/sair', [
      'as' => 'sistema.artista.sair',
      'uses' => 'Sistema\Artistas\ArtistasController@Sair'
    ]);

    Route::get('/criar-evento', [
      'as' => 'sistema.artista.criar',
      'uses' => 'Sistema\Artistas\ArtistasController@Criar'
    ]);

    Route::get('/meus-pre-eventos', [
      'as' => 'sistema.artista.meus-pre-eventos',
      'uses' => 'Sistema\Artistas\ArtistasController@Pres'
    ]);

    Route::get('/meus-eventos', [
      'as' => 'sistema.artista.meus-eventos',
      'uses' => 'Sistema\Artistas\ArtistasController@Eventos'
    ]);

    Route::get('/evento/{eventoSlug}/cadastrar', [
      'as' => 'sistema.artistas.transformar-evento',
      'uses' => 'Sistema\Artistas\ArtistasController@Transformar'
    ]);

    Route::post('/evento/{eventoSlug}/cadastrar', [
      'as' => 'sistema.artistas.confirmar-evento',
      'uses' => 'Sistema\Artistas\ArtistasController@Confirmar'
    ]);

    
  });

