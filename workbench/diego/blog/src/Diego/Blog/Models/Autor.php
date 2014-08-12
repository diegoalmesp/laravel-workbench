<?php

namespace Diego\Blog\Model;

class Autor extends \Eloquent
{
	public function post()
	{
		return $this->hasMany('Diego\Blog\Model\Post');
	}
}

?>