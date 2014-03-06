<?php 

/**
* 
*/
class ArticleTagTableSeeder extends Seeder
{
	
	public function run () {

		DB::table('article_tag')->delete();

		Article_Tag::create([
			'article_id'=>'1',
			'tag_id'=>'1'
		]);

		Article_Tag::create([
			'article_id'=>'1',
			'tag_id'=>'1'
		]);
	}
}