<?php 

/**
* 
*/
class TagsTableSeeder extends Seeder
{
	
	public function run () {

		DB::table('tags')->delete();

		Tag::create([
			'tag'=>'leadership'
		]);

		Tag::create([
			'tag'=>'innovation'
		]);

		Tag::create([
			'tag'=>'mobileux'
		]);

		Tag::create([
			'tag'=>'design'
		]);

		Tag::create([
			'tag'=>'frontend'
		]);

		Tag::create([
			'tag'=>'uxstudio'
		]);

		Tag::create([
			'tag'=>'responsive'
		]);

		Tag::create([
			'tag'=>'evangelism'
		]);


	}
}