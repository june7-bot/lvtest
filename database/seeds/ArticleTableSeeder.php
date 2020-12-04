<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Article::create([
            'user_id' => 1,
            'title' => 'test4',
            'context' => 'test4',
        ]);
    }
}
