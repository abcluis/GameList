<?php

namespace App\Http\Middleware;

use App\Game;
use Closure;
use Illuminate\Support\Facades\Auth;

class CreatorGame
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
        $user = Auth::user();


        $game = Game::find($request->id);
        if($game->user->id === Auth::id()){
            return $next($request);
        }else {
            return redirect()->back()->with('info','El juego no pertenece al usuario actual');
        }



    }
}
