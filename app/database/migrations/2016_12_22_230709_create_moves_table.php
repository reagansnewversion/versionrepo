<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moves', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->string('description', 100);
			$table->integer('type_id')->unsigned();
			$table->foreign('type_id')->references('id')->on('types');
			$table->string('physical')->nullable();
			$table->string('special')->nullable();
			$table->string('self')->nullable();
			$table->string('drains')->nullable();
			$table->string('afflicts')->nullable();
			$table->integer('afflicts_chance')->unsigned()->nullable();
			$table->string('stats')->nullable();
			$table->string('stats_amount')->nullable();
			$table->integer('power')->unsigned()->nullable();
			$table->integer('accuracy')->unsigned()->nullable();
			$table->integer('pp')->unsigned();
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
		Schema::drop('moves');
	}

}
