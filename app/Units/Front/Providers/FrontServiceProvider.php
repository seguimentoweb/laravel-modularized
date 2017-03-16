<?php

namespace App\Units\Front\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'front');
        $this->routes($this->app['router']);
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

    protected function routes(Router $route)
    {
        $route->group(['namespace' => 'App\Units\Front\Http\Controllers','prefix'=>'front'], function () {
            return require app_path('Units\Front/Http/routes.php');
        });
    }
}
