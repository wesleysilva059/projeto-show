<?php
Route::group([
  'middleware' => 'auth',
  'prefix' => '/backend/fans'
], function() {
  
  Route::get('/', [
    'as' => 'backend.fans',
    'uses' => 'Backend\Fans\FansController@Index'
  ]);
      
  Route::post('/fan', [
    'as' => 'backend.fans.adicionar',
    'uses' => 'Backend\Fans\FansController@Adicionar'
  ]);

  Route::get('/getfans', [
    'as' => 'backend.fans.getfans',
    'uses' => 'Backend\Fans\FansController@GetFans'
  ]);
        
  Route::get('/fan/{fan}', [
    'as' => 'backend.fans.fan',
    'uses' => 'Backend\Fans\FansController@Editar'
  ]);
          
  Route::put('/fan', [
    'as' => 'backend.fans.salvar',
    'uses' => 'Backend\Fans\FansController@Salvar'
  ]);
            
  Route::delete('/fan/{fan}', [
    'as' => 'backend.fan.apagar',
    'uses' => 'Backend\Fans\FansController@Apagar'
  ]);

});