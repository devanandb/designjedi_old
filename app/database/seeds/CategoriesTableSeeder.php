<?php 

/**
* 
*/
class CategoriesTableSeeder extends Seeder
{
	
	public function run () {

		Category::truncate();

		Category::create([
			'category'=>'leadership'
		]);

		Category::create([
			'category'=>'disruptive-design'
		]);
	}
}