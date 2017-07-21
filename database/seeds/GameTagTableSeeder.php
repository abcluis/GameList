<?php

use Illuminate\Database\Seeder;

class GameTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_tag')->insert([
            'game_id' => '1',
            'tag_id' => '1',
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('game_tag')->insert([
            'game_id' => '1',
            'tag_id' => '2',
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('game_tag')->insert([
            'game_id' => '2',
            'tag_id' => '1',
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('game_tag')->insert([
            'game_id' => '3',
            'tag_id' => '3',
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

    }
}
