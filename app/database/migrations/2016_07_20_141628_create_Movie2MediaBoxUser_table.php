<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovie2MediaBoxUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Movie2MediaBoxUser', function(Blueprint $table) {
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('MediaBoxUser');
			$table->integer('movie_id')->unsigned();
			$table->foreign('movie_id')->references('id')->on('Movie');
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
        Schema::drop('Movie2MediaBoxUser');
	}

}
