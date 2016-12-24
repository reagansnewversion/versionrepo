<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmhmTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tm_hm', function($table) {
			$table->increments('id');
			$table->string('tm')->nullable();
			$table->string('hm')->nullable();
			$table->integer('move_id')->unsigned();
			$table->foreign('move_id')->references('id')->on('moves');
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
		Schema::drop('tm_hm');
	}

}
