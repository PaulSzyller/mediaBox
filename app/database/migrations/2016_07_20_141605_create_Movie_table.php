<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Movie', function(Blueprint $table) {
			$table->increments('id');
			$table->string('genre', 255);
			$table->string('homepage', 255)->nullable();
            $table->string('tmdb_id', 255);
			$table->string('imdb_id', 255);
			$table->string('title', 255);
			$table->text('overview')->nullable();
			$table->integer('user_rating')->unsigned();
			$table->string('poster_path', 255)->nullable();
			$table->date('release_date');
			$table->string('status', 255)->default('unknown');
			$table->text('tag_line')->nullable();
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
		Schema::drop('Movie');
	}

}
