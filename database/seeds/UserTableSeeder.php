<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User Luis
        $user = new \App\User();
        $user->name = 'Luis Fernando';
        $user->email = 'abc_luis30@hotmail.com';
        $user->password = bcrypt('123456');
        $user->save();

    }
}
