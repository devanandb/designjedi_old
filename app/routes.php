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

Route::get('{category}/articles/{id}', ['as'=>'category.articles.show', 'uses'=>'ArticlesController@showCategorywiseEach']);