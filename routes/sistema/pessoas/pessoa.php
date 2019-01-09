<?php

  Route::group([ 
    'prefix' => '/autenticacao',
  ], function()
  {
    Route::get('/', [
      'as' => 'sistema.pessoas.entrar',
      'uses' => 'Sistema\Pessoas\PessoasController@Index'
    ]);

    Route::post('/cadastro', [
      'as' => 'sistema.pessoas.sessioncadastro',
      'uses' => 'Sistema\Pessoas\PessoasController@SessionCadastro'
    ]);
    
    Route::get('/cadastro', [
      'as' => 'sistema.pessoas.cadastro',
      'uses' => 'Sistema\Pessoas\PessoasController@Cadastro'
    ]);

    Route::post('/finaliza-cadastro', [
      'as' => 'sistema.pessoas.finaliza_cadastro',
      'uses' => 'Sistema\Pessoas\PessoasController@FinalizaCadastro'
    ]);
    
    Route::post('/finaliza-cadastro-artista', [
      'as' => 'sistema.pessoas.finaliza-cadastro-artista',
      'uses' => 'Sistema\Pessoas\PessoasController@FinalizaCadastroArtista'
    ]);
    
    Route::post('/login', [
      'as' => 'sistema.pessoas.login',
      'uses' => 'Sistema\Pessoas\LoginController@Login'
    ]);
    
    Route::get('/acesso/confirmacao/{usuario}/{token}', [
      'as' => 'sistema.pessoas.confirmar-cadastro',
      'uses' => 'Sistema\Pessoas\PessoasController@ConfirmarCadastro'
    ]);
    
  });
