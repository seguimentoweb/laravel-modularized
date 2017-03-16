<?php

namespace App\Units\Panel\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class PanelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'panel');
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
        $route->group(['namespace' => 'App\Units\Panel\Http\Controllers','prefix'=>'panel'], function () {
            return require app_path('Units\Panel/Http/routes.php');
        });
    }
}
