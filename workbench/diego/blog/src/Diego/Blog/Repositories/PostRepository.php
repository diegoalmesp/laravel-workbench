<?php

namespace Diego\Blog\Repositories;

use Diego\Blog\Models\Post;

class PostRepository
{
	public function todos()
	{
		return Post::all();
	}
}
