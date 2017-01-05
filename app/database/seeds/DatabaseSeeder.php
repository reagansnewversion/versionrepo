<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('types')->delete();
		DB::table('pokemon')->delete();
		DB::table('effectiveness')->delete();
		DB::table('locations')->delete();
		DB::table('locations_pokemon')->delete();
		DB::table('squares')->delete();

		$this->call('TypesTableSeeder');
		$this->call('PokemonTableSeeder');
		$this->call('EffectivenessSeeder');
		$this->call('LocationSeeder');
		$this->call('LocationPokemonSeeder');
		$this->call('SquareSeeder');
	}

}
