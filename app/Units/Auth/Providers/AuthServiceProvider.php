<?php

namespace App\Units\Auth\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

   public function boot(){
       $this->registerRoutes($this->app['router']);
       $this->loadViewsFrom(__DIR__.'/../resources/views', 'auth');
   }

    public function register()
    {

    }

    public function registerRoutes(Router $router)
    {
        $router->group(['namespace' => 'App\Units\Auth\Http\Controllers',
        'prefix'=>'auth'], function ($router) {
            require app_path('Units/Auth/Http/routes.php');
        });
    }
}