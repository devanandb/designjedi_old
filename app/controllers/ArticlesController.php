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

	// For API

	public function apiarticles() {
		$articles = Article::all();
		return $articles;
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

	public function apitags() {
		$tags = Tag::all();
		return $tags;
	}




	public function create()
	{
		// $articles = Article::all();

		return View::make('articles.create');
	}

	public function edit()
	{
		// $articles = Article::all();

		return View::make('admin.edit');
	}

	public function createArticle() {
		Article::create(array(
            'title' => Input::get('title'),
            'body' => Input::get('body'),
            'category_id' => Input::get('category_id'),
            'shown' => Input::get('shown')
        ));

       
    
        return Response::json(array('success' => true));
	}



}