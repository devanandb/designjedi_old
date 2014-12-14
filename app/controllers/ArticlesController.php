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

		$pgtitle = Category::whereCategory($category)->first();

		return View::make('articles.index', compact('articles', 'pgtitle'));
	}

	public function showCategorywiseEach($category, $articleId) {

		$article = Category::whereCategory($category)->first()->articles()->with('tags')->findOrFail($articleId);

		return View::make('articles.show', compact('article'));

	}

	public function showTagwise($tag) {
		
		$articles = Tag::whereTag($tag)->first()->articles;

		$tagtitle = Tag::whereTag($tag)->first();

		return View::make('articles.index', compact('articles','tagtitle'));
	}

	public function showTags() {
		$tags = Tag::all();

		return View::make('pages.tags', compact('tags'));
	}



}