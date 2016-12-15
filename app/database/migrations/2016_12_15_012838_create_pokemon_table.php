<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pokemon', function($table) {
			$table->increments('id');
			$table->integer('number')->unsigned();
			$table->string('name');
			$table->string('description', 100);
			$table->integer('type1_id')->unsigned();
			$table->foreign('type1_id')->references('id')->on('types');
			$table->integer('type2_id')->unsigned()->nullable();
			$table->foreign('type2_id')->references('id')->on('types');
			$table->string('entry', 1000000);
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
		Schema::drop('pokemon');
	}

}