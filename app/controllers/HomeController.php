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
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		if(Auth::attempt($userdata)) {
			dd("It worked");
		} else {
			dd("It didn't work!");
		}
	}
	public function newgame()
	{
		return View::make('newgame');
	}

	public function savetrainer()
	{
		$trainer = new Trainer();
		$trainer->email = Input::get('email');
		$trainer->name = Input::get('name');
		$trainer->password = Hash::make(Input::get('password'));
		$trainer->gender = Input::get('gender');
		if(Input::get('password') == Input::get('confirmpassword')) {
			$trainer->save();
			return Redirect::action('HomeController@home');
		} else {

		}

	}

	public function start()
	{

	}

}
