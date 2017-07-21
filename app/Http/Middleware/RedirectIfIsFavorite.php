<?php

namespace App\Http\Middleware;

use App\Favorite;
use App\Game;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfIsFavorite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $game = Game::find($request->id);

        $favorite = Favorite::where([
            ['user_id','=',Auth::id()],
            ['game_id','=',$game->id]
        ])->first();

        if($favorite === null){
            return $next($request);
        }else{
            return redirect()->back()->with('info','The game is already added');
        }




    }
}
