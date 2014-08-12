<?php

namespace Diego\Blog\Models;

class Post extends \Eloquent
{
	protected $table = 'posts';

	protected $fillable = ['title', 'body', 'autor_id'];

	public function autor()
	{
		return $this->belongsTo('Diego\Blog\Model\Autor');
	}
}
