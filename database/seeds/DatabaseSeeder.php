<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(GameTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(GameTagTableSeeder::class);
        $this->call(FavoriteSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
