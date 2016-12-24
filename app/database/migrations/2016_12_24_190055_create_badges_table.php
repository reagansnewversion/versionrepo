<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('badges', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('leader_id')->unsigned();
			$table->foreign('leader_id')->references('id')->on('npcs');
			$table->integer('obey_level')->unsigned();
			$table->integer('hm_unlocked')->unsigned()->nullable();
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
		Schema::drop('badges');
	}

}
