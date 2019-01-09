<?php

namespace App\Providers;

use App\Models\Eventos\Evento;
use App\Models\Artistas\Artista;
use App\Models\Usuarios\Usuario;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $url = $this->app['url'];
        $url->forceRootUrl(config('app.url'));

        Route::bind(
          'usuario',
          function ($handle) {
            return Usuario::Find($handle);
          }
        );

        Route::bind(
          'artista',
          function ($handle) {
            return Artista::Find($handle);
          }
        );

        Route::bind(
          'evento',
          function ($handle) {
            return Evento::Find($handle);
          }
        );

        Route::bind(
          'eventoSlug',
          function ($handle) {
            return Evento::where('slug', $handle)->first();
          }
        );

        Route::bind(
          'artistaSlug',
          function ($handle) {
            return Artista::where('slug', $handle)->first();
          }
        );
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
      Route::group([
        'middleware' => 'web',
        'namespace' => $this->namespace,
      ], function() 
      {
        require base_path('routes/web.php');
        require base_path('routes/sistema/fans/fans.php');
        require base_path('routes/sistema/pessoas/pessoa.php');
        require base_path('routes/sistema/eventos/eventos.php');
        require base_path('routes/sistema/casas/casas.php');
        require base_path('routes/sistema/artistas/artistas.php');
        require base_path('routes/backend/app.php');
        require base_path('routes/backend/estilos.php');
        require base_path('routes/backend/fans.php');
        require base_path('routes/backend/artistas.php');
      });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
