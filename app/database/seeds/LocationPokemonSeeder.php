<?php
class LocationPokemonSeeder extends Seeder {
	public function run() {
		$pokemon = new LocationPokemon();
		$pokemon->location_id = 1;
		$pokemon->pokemon_id = 20;
		$pokemon->chance = 10;
		$pokemon->level_min = 9;
		$pokemon->level_max = 12;
		$pokemon->save();

		$pokemon = new LocationPokemon();
		$pokemon->location_id = 1;
		$pokemon->pokemon_id = 30;
		$pokemon->chance = 10;
		$pokemon->level_min = 10;
		$pokemon->level_max = 13;
		$pokemon->save();
	}
}
?>