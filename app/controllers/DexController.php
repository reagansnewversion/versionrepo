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
		$type1 = DB::table('types')->where('id', $pokemon->type1_id)->first();
		if($pokemon->type2_id != null) {
			$type2 = DB::table('types')->where('id', $pokemon->type2_id)->first();
		} else {
			$type2 = null;
		}
		return View::make('dexshow')->with('pokemon', $pokemon)->with('type1', $type1)->with('type2', $type2);
	}
}
?>