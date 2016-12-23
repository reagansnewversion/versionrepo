<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcsPokemonMovesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('npcs_pokemon_moves', function($table) {
			$table->increments('id');
			$table->integer('npc_pokemon_id')->unsigned();
			$table->foreign('npc_pokemon_id')->references('id')->on('npcs_pokemon');
			$table->integer('move1_id')->unsigned();
			$table->foreign('move1_id')->references('id')->on('moves');
			$table->integer('move2_id')->unsigned()->nullable();
			$table->foreign('move2_id')->references('id')->on('moves');
			$table->integer('move3_id')->unsigned()->nullable();
			$table->foreign('move3_id')->references('id')->on('moves');
			$table->integer('move4_id')->unsigned()->nullable();
			$table->foreign('move4_id')->references('id')->on('moves');
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
		Schema::drop('npcs_pokemon_moves');
	}

}
