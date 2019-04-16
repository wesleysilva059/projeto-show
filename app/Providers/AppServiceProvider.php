<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

      Schema::defaultStringLength(191);
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
