<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainers_items', function($table) {
			$table->increments('id');
			$table->integer('trainer_id')->unsigned();
			$table->foreign('trainer_id')->references('id')->on('users');
			$table->integer('item_id')->unsigned();
			$table->foreign('item_id')->references('id')->on('items');
			$table->integer('quantity')->unsigned();
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
		Schema::drop('trainers_items');
	}

}
