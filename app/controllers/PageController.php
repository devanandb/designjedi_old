<?php 

/**
* 
*/
class PageController extends BaseController
{
	
	public function home()
	{
		return View::make('pages.home');
	}

	public function home2()
	{
		return View::make('pages.home2');
	}

	public function home3()
	{
		return View::make('pages.home3');
	}
}