<?php 

/**
* 
*/
class Tag extends Eloquent
{
	
	public function articles() {
		return $this->belongsToMany('Article');
	}
	
}
