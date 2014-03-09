<?php 

/**
* 
*/
class ArticlesController extends BaseController
{
	
	public function index()
	{
		$articles = Article::all();

		return View::make('articles.index', compact('articles'));
	}

	public function show($id) {
		$article = Article::findOrFail($id);

		return View::make('articles.show', compact('article'));
	}

	public function showCategorywise($category) {

		$articles = Category::whereCategory($category)->first()->articles;

		return View::make('articles.index', compact('articles'));
	}

	public function showCategorywiseEach($category, $articleId) {

		$article = Category::whereCategory($category)->first()->articles()->findOrFail($articleId);

		return View::make('articles.show', compact('article'))->withPagetitle('asdas');

	}

	public function showTagwise($tag) {
		
		$articles = Tag::whereTag($tag)->first()->articles;

		return View::make('articles.index', compact('articles'));
	}



	 
	public static function words($value, $words = 100, $end = '...') {

		preg_match('/^\s*+(?:\S++\s*+){1,'.$words.'}/u', $value, $matches);
		if ( ! isset($matches[0])) return $value;
		if (strlen($value) == strlen($matches[0])) return $value;
		return rtrim($matches[0]).$end;
	}
}