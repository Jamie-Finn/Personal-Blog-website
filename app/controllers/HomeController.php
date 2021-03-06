<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function search()
	{
		$input = Input::get('search');
		$results = Post::where('body', 'LIKE', '%'.$input.'%')->orderBy('created_at', 'desc')->get();
		
		return View::make('site.search')->with('results', $results);
	}

	public function about() 
	{
		return View::make('site.about');
	}

	public function portfolio() 
	{
		return View::make('site.portfolio');
	}

}