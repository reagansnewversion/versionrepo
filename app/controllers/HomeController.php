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

	public function home()
	{
		return View::make('home');
	}
	public function resume()
	{
		
	}
	public function newgame()
	{
		return View::make('newgame');
	}

	public function savetrainer()
	{
		$trainer = new Trainer();

	}

	public function start()
	{

	}

}
