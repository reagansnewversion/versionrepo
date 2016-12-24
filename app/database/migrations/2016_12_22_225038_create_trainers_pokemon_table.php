<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersPokemonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainers_pokemon', function($table) {
			$table->increments('id');
			$table->integer('trainer_id')->unsigned();
			$table->foreign('trainer_id')->references('id')->on('users');
			$table->integer('pokemon_id')->unsigned();
			$table->foreign('pokemon_id')->references('id')->on('pokemon');
			$table->integer('level')->unsigned();
			$table->integer('hp')->unsigned();
			$table->integer('attack')->unsigned();
			$table->integer('sp_attack')->unsigned();
			$table->integer('defense')->unsigned();
			$table->integer('sp_defense')->unsigned();
			$table->integer('speed')->unsigned();
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
		Schema::drop('trainers_pokemon');
	}

}
