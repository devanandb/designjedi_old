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
Route::get('/checkenv', function() {
	return getenv('DB_PASSWORD');
});

Route::get('/', ['as'=> 'home', 'uses'=>'PageController@home']);
Route::get('/home-2', ['as'=> 'home2', 'uses'=>'PageController@home2']);
Route::get('/home-3', ['as'=> 'home3', 'uses'=>'PageController@home3']);


Route::get('articles', 'ArticlesController@index');

Route::get('articles/{id}', 'ArticlesController@show');

Route::get('{category}/articles', 'ArticlesController@showCategorywise');

Route::get('tags/{tag}', 'ArticlesController@showTagwise');

Route::get('{category}/articles/{title}', ['as'=>'category.articles.show', 'uses'=>'ArticlesController@showCategorywiseEach']);

// Route::get('tags/{tag}', function($tag){

// 	$articles = Article::with('tags')->has('tags')->get();
// 	return $articles;
// });
/*return Article::with('tags')->has('tags')->get();   Awesome route*/
