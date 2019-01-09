<?php
Route::group([
  'middleware' => 'auth',
  'prefix' => '/backend/estilos'
], function() {
  
  Route::get('/', [
    'as' => 'backend.estilos',
    'uses' => 'Backend\Estilos\EstilosController@Index'
  ]);
      
  Route::post('/estilo', [
    'as' => 'backend.estilos.adicionar',
    'uses' => 'Backend\Estilos\EstilosController@Adicionar'
  ]);

  Route::get('/getestilos', [
    'as' => 'backend.estilos.getestilos',
    'uses' => 'Backend\Estilos\EstilosController@GetEstilos'
  ]);
        
  Route::get('/estilo/{estilo}', [
    'as' => 'backend.estilos.estilo',
    'uses' => 'Backend\Estilos\EstilosController@Editar'
  ]);
          
  Route::put('/estilo', [
    'as' => 'backend.estilos.salvar',
    'uses' => 'Backend\Estilos\EstilosController@Salvar'
  ]);
            
  Route::delete('/estilo/{estilo}', [
    'as' => 'backend.estilo.apagar',
    'uses' => 'Backend\Estilos\EstilosController@Apagar'
  ]);

});