<?php

namespace Diego\Blog\Model;

class Post extends \Eloquent
{
	public function autor()
	{
		return $this->belongsTo('Diego\Blog\Model\Autor');
	}
}

?>