<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'game_id', 'content'];

    public function game()
    {
        return $this->belongsTo('App\Game','game_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
