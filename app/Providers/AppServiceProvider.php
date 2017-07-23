<?php

namespace App\Providers;

use App\Game;
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
        view()->composer('*', function($view){
            $view_name = $view->getName();
            view()->share('view_name', $view_name);
        });

        view()->composer('sidebar.last-games', function($view){
            $view->with('lastgames', Game::latest()->get());
        });
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
