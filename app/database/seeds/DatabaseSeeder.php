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

		$this->call('TypesTableSeeder');
		$this->call('PokemonTableSeeder');
		$this->call('EffectivenessSeeder');
	}

}
