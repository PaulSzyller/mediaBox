<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('Song', function(Blueprint $table) {
			$table->increment('id');
			$table->text('title');
			$table->text('artist');
			$table->text('album');
			$table->text('genre');
			$table->text('length');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Song');
	}

}
