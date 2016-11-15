<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

//FACADES
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         View::share('app_titulo'       , Config::get('app_textos.app_titulo'));
         View::share('app_nombre'       , Config::get('app_textos.app_nombre'));
         View::share('app_descripcion'  , Config::get('app_textos.app_descripcion'));
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
