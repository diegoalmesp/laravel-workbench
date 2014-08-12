<?php

use Diego\Blog\Models\Post;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->delete();

        Post::create(array(
        	'title' => 'foo@bar.com',
        	'body' => 'texto',
        	'autor_id' => 1
        ));
    }

}