<?php

namespace Diego\Blog\Models;

class Autor extends \Eloquent
{
	protected $table = 'autores';

	protected $fillable = ['email'];

	public function post()
	{
		return $this->hasMany('Diego\Blog\Model\Post');
	}
}
