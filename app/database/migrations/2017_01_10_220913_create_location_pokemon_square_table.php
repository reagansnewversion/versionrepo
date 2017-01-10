<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationPokemonSquareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations_pokemon_squares', function($table) {
			$table->increments('id');
			$table->integer('square_id')->unsigned();
			$table->foreign('square_id')->references('id')->on('squares');
			$table->integer('location_pokemon_id')->unsigned();
			$table->foreign('location_pokemon_id')->references('id')->on('locations_pokemon');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations_pokemon_squares');
	}

}
