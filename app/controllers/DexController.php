<?php

class DexController extends BaseController {

	public function index()
	{
		$pokemon = Pokemon::all();
		return View::make('dexindex');
	}

	public function show($number)
	{
		$pokemon = DB::table('pokemon')->where('number', $number)->get();
		return View::make('dexshow')->with('pokemon', $pokemon);
	}
}
?>