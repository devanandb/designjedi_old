<?php 

/**
* 
*/
class TagsTableSeeder extends Seeder
{
	
	public function run () {

		DB::table('tags')->delete();

		Tag::create([
			'tag'=>'design'
		]);

		Tag::create([
			'tag'=>'experience'
		]);

		Tag::create([
			'tag'=>'leader'
		]);

		Tag::create([
			'tag'=>'teams'
		]);

		Tag::create([
			'tag'=>'ux'
		]);

		Tag::create([
			'tag'=>'prototype'
		]);

		Tag::create([
			'tag'=>'innovation'
		]);

		Tag::create([
			'tag'=>'standards'
		]);
		Tag::create([
			'tag'=>'interaction'
		]);
		Tag::create([
			'tag'=>'gui'
		]);
		Tag::create([
			'tag'=>'personas'
		]);
		Tag::create([
			'tag'=>'mobile'
		]);
		Tag::create([
			'tag'=>'thinking'
		]);
		Tag::create([
			'tag'=>'product'
		]);
		Tag::create([
			'tag'=>'teams'
		]);


	}
}