<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Game extends Model
{
    protected $fillable = ['name', 'year','image'];

    public function tags()
    {
        return $this
            ->belongsToMany('App\Tag','game_tag','game_id','tag_id')
            ->withTimestamps();
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite','game_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment','game_id');
    }

    public function addComment($content)
    {
        $this->comments()->create(['content' => $content,'user_id' => Auth::id()]);
    }

}
