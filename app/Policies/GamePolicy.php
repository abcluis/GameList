<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Favorite;
use App\Game;

class GamePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function addedfavorite(User $user, Game $game)
    {

        $favorite = Favorite::where([
            ['user_id','=',$user->id],
            ['game_id','=',$game->id]
        ])->first();


        return $favorite === null;
    }
}
