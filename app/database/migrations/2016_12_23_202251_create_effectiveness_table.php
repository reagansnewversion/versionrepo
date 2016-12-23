<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEffectivenessTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('effectiveness', function($table) {
			$table->increments('id');
			$table->integer('move_type_id')->unsigned();
			$table->foreign('move_type_id')->references('id')->on('types');
			$table->integer('target_type1_id')->unsigned();
			$table->foreign('target_type1_id')->references('id')->on('types');
			$table->integer('target_type2_id')->unsigned()->nullable();
			$table->foreign('target_type2_id')->references('id')->on('types');
			$table->string('no_effect')->nullable();
			$table->string('not_very_effective')->nullable();
			$table->string('effective')->nullable();
			$table->string('super_effective')->nullable();
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
		Schema::drop('effectiveness');
	}

}
