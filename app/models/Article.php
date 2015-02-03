<?php 

/**
* 
*/
class Article extends Eloquent
{
	protected $fillable = [
		'title','body','category_id','shown'
	];
	public function category() {
		return $this->belongsTo('Category');
	}

	public function tags() {
		return $this->belongsToMany('Tag');
	}
	
}
