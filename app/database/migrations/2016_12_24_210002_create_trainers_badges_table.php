<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersBadgesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainers_badges', function($table) {
			$table->increments('id');
			$table->integer('trainer_id')->unsigned();
			$table->foreign('trainer_id')->references('id')->on('users');
			$table->integer('badge_id')->unsigned();
			$table->foreign('badge_id')->references('id')->on('badges');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trainers_badges');
	}

}
