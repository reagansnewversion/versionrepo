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

		$this->call('TypesTableSeeder');
		$this->call('PokemonTableSeeder');
	}

}
