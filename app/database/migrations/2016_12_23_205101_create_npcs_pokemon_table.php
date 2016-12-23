<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNpcsPokemonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('npcs_pokemon', function($table) {
			$table->increments('id');
			$table->integer('npc_id')->unsigned();
			$table->foreign('npc_id')->references('id')->on('npcs');
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
		Schema::drop('npcs_pokemon');
	}

}
