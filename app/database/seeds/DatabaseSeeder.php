<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CategoriesTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('ArticlesTableSeeder');
		$this->call('ArticleTagTableSeeder');



		/*$this->call('ArticlesTableSeeder');*/
	}

}