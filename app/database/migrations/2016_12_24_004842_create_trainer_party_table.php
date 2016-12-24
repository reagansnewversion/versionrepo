<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainerPartyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainer_party', function($table) {
			$table->increments('id');
			$table->integer('trainer_pokemon_id')->unsigned();
			$table->foreign('trainer_pokemon_id')->references('id')->on('trainers_pokemon');
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
		Schema::drop('trainer_party');
	}

}
