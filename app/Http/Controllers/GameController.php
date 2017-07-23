<?php

namespace App\Http\Controllers;

use App\Game;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::get();

        return view('home.index', compact('games'));
    }

    public function show(Game $game)
    {

        $game->increment('visit');
        $game->save();
        return view('game.show', compact('game'));
    }

    public function create()
    {
        $tags = Tag::get();
        return view('game.create', compact('tags'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required | min:5',
            'year' => 'required | max:4',
            'description' => 'required | min:20'
        ]);

        $user = Auth::user();
        $game = new Game();
        $game->name = $request->input('name');
        $game->year = $request->input('year');
        $game->description = $request->input('description');
        $game->image = 'http://lorempixel.com/400/300/';
        $user->games()->save($game);
        $game->tags()->attach($request->input('tags') === null ? [] : $request->input('tags'));


        return redirect()
            ->route('home.index')
            ->with('info', 'Game have been created');
    }

    public function destroy(Game $game)
    {
        $game->tags()->detach();
        $game->favorites()->delete();
        $game->delete();

        return redirect('/')->with('info', 'Se ha eliminado correctamene el registro');
    }

}
