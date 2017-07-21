<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new \App\Comment();
        $comment->user_id = 1;
        $comment->game_id = 1;
        $comment->content = 'Excelente videojuego muy recomendado fue mi primer videojuego';
        $comment->save();
    }
}
