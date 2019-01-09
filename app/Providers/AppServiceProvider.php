<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      require_once app_path('Macros/Functions.php');
      require_once app_path('Macros/Html.php');
      $this->app->singleton(\Faker\Generator::class, function () {
          return \Faker\Factory::create('pt_BR');
      });
      $url = $this->app['url'];
      $url->forceRootUrl(config('app.url'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
