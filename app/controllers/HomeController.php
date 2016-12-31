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
	public function sample()
	{
		if(Auth::check()) {
			return View::make('sample');
		}
	}
	public function resume()
	{
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		if(Auth::attempt($userdata)) {
			Session::flash('successMessage', 'Welcome back, ' . Auth::user()->name . "!");
			return Redirect::action('HomeController@sample');
		} else {
			Session::flash('errorMessage', 'There was an error logging you in. Please try again!');
			return Redirect::back();
		}
	}
	public function newgame()
	{
		return View::make('newgame');
	}

	public function savetrainer()
	{
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		$trainer = new Trainer();
		$trainer->email = Input::get('email');
		$trainer->name = Input::get('name');
		$trainer->password = Hash::make(Input::get('password'));
		$trainer->gender = Input::get('gender');
		if(Input::get('password') == Input::get('confirmpassword')) {
			$trainer->save();
			Auth::attempt($userdata);
			Session::flash('successMessage', 'Your information has been saved!');
			return Redirect::action('HomeController@sample');
		} else {
			Session::flash('errorMessage', 'There was an error saving your information. Please try again!');
			return Redirect::back()->withInput();
		}

	}

	public function start()
	{

	}

}
