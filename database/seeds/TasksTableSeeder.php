<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();

        $users->each(function ($user){
            $user->tasks()->save(
                factory(App\Task::class)->make()
            );
        });
    }
}
