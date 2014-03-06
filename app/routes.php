<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data*/


Route::get('/', ['as'=> 'home', 'uses'=>'PageController@home']);

Route::get('articles', 'ArticlesController@index');

Route::get('articles/{id}', 'ArticlesController@show');

Route::get('{category}/articles', 'ArticlesController@showCategorywise');

/*Route::get('{tag}/articles', 'ArticlesController@showTagwise');*/

Route::get('{category}/articles/{title}', ['as'=>'category.articles.show', 'uses'=>'ArticlesController@showCategorywiseEach']);

Route::get('tags/{tag}', function($tag){

	$articles = Tag::whereTag($tag)->first()->articles;
	return View::make('articles.index', compact('articles'));
});
/*return Article::with('tags')->has('tags')->get();   Awesome route*/
