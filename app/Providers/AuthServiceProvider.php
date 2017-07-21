<?php

namespace App\Providers;

use App\Game;
use App\Policies\GamePolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Game::class => GamePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('add-favorite', function ($user, $game){



            $favorite = Favorite::where([
                ['user_id','=',$user->id],
                ['game_id','=',$game->id]
            ])->first();

            return $favorite === null;
        });
    }
}
