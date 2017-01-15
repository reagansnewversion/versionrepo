<?php
class LocationPokemonSquareSeeder extends Seeder
{
	public function run()
	{
		$item = new LocationPokemonSquare();
		$item->square_id = 1;
		$item->location_pokemon_id = 1;
		$item->save();
	}
}
?>