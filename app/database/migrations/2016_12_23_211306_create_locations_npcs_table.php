<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsNpcsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations_npcs', function($table) {
			$table->increments('id');
			$table->integer('location_id')->unsigned();
			$table->foreign('location_id')->references('id')->on('locations');
			$table->integer('npc_id')->unsigned();
			$table->foreign('npc_id')->references('id')->on('npcs');
			$table->integer('place')->unsigned()->nullable();
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
		Schema::drop('locations_npcs');
	}

}
