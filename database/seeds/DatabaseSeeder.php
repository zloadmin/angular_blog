<?php

use Illuminate\Database\Seeder;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::truncate();
        factory(Post::class, 50)->create();


        // $this->call(UsersTableSeeder::class);


    }
}
