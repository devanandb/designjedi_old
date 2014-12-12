<?php 

/**
* 
*/
class CategoriesTableSeeder extends Seeder
{
	
	public function run () {

		Category::truncate();

		Category::create([
			'category'=>'leadership',
			'desc'=>'Great UX leaders need to inspire world-class design, to inspire the best talent to do the best work of their careers. It can transform experiences and industries'
		]);

		Category::create([
			'category'=>'disruptive-design',
			'desc'=>'If your product doesn’t delight, inspire, and engage users, it’s a missed opportunity. Great designs connect emotionally and solve real problems.'
		]);
	}
}