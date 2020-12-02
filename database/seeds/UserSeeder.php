<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'june1',
            'email' => 'june1@naver.com',
            'password' => bcrypt('password')
        ]);
    }
}
