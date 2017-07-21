<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Favorite;
use App\Game;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function getIndex()
    {
        $games = Game::get();

        return view('home.index', ['games' => $games]);
    }

    public function getGame($id)
    {
        $game = Game::find($id);
        $game->increment('visit');
        $game->save();
        return view('game.single', ['game' => $game]);
    }

    public function getCreateGame()
    {
        $tags = Tag::get();
        return view('game.create', ['tags' => $tags]);
    }

    public function postCreateGame(Request $request)
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

    public function deleteGame($id)
    {
        $game = Game::find($id);
        $game->tags()->detach();
        $game->favorites()->delete();
        $game->delete();

        return redirect('/')->with('info', 'Se ha eliminado correctamene el registro');
    }

    public function getFavoriteGame($id)
    {
        $favorite = new Favorite();
        $favorite->user_id = Auth::id();
        $favorite->game_id = $id;
        $favorite->save();

        return redirect()->back()->with('info', 'Add to favorites this game');
    }

    public function getNoFavoriteGame($id)
    {
        $favorite = Favorite::where([
            ['user_id', '=', Auth::id()],
            ['game_id', '=', $id]
        ])->first();


        $favorite->delete();
        return redirect()->back()->with('info', 'This game is not favorite anymore');
    }

    public function getMyGames()
    {

        $user = Auth::user();
        $favorites = $user->favorites;

        return view('game.favorites',['favorites' => $favorites]);
    }

    public function postComment(Request $request){
        $this->validate($request,[
            'content' => 'required | min:10'
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->game_id = $request->input('id');
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back();
    }
}
