<?php

class DexController extends BaseController {

	public function index()
	{
		$pokemon = Pokemon::all();
		return View::make('dexindex')->with('pokemon', $pokemon);
	}

	public function show($id)
	{
		$pokemon = DB::table('pokemon')->where('id', $id)->first();
		return View::make('dexshow')->with('pokemon', $pokemon);
	}
}
?>