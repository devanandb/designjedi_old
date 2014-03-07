<?php 

/**
* 
*/
class ArticleTagTableSeeder extends Seeder
{
	
	public function run () {

		DB::table('article_tag')->delete();

		DB::table('article_tag')->insert(
			array(
				'article_id'=>'1',
				'tag_id'=>'1'
			)

		);

		DB::table('article_tag')->insert(
			array(
				'article_id'=>'1',
				'tag_id'=>'2'
			)

		);

		DB::table('article_tag')->insert(
			array(
				'article_id'=>'2',
				'tag_id'=>'2'
			)

		);

		DB::table('article_tag')->insert(
			array(
				'article_id'=>'1',
				'tag_id'=>'3'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'1',
				'tag_id'=>'4'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'2',
				'tag_id'=>'5'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'1',
				'tag_id'=>'5'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'2',
				'tag_id'=>'3'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'4',
				'tag_id'=>'1'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'4',
				'tag_id'=>'2'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'4',
				'tag_id'=>'1'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'6',
				'tag_id'=>'6'
			)

		);
		DB::table('article_tag')->insert(
			array(
				'article_id'=>'7',
				'tag_id'=>'2'
			)

		);
/*
		PivotArticleTag::create([
			'article_id'=>'1',
			'tag_id'=>'1'
		]);

		PivotArticleTag::create([
			'article_id'=>'1',
			'tag_id'=>'1'
		]);*/
	}
}