<?php

use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $favorite = new \App\Favorite();
        $favorite->user_id = 1;
        $favorite->game_id = 1;
        $favorite->save();
    }
}
