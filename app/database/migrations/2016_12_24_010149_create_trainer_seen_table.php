<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainerSeenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainer_seen', function($table) {
			$table->increments('id');
			$table->integer('trainer_id')->unsigned();
			$table->foreign('trainer_id')->references('id')->on('users');
			$table->integer('pokemon_id')->unsigned();
			$table->foreign('pokemon_id')->references('id')->on('pokemon');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trainer_seen');
	}

}
