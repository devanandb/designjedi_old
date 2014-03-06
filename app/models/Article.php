<?php 

/**
* 
*/
class Article extends Eloquent
{
	public function category() {
		return $this->belongsTo('Category');
	}

	public function tags() {
		return $this->belongsToMany('Tag');
	}
	
}
