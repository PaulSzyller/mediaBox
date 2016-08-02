<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaBoxUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('MediaBoxUser', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username', 255)->unique();
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('first_name', 255);
			$table->string('last_name', 255);
            $table->string('profile_pic',255)->nullable();
            $table->string('location', 255)->nullable();
            $table->string('dob');
            $table->text('question');
            $table->text('answer');
            $table->string('gender');
            $table->rememberToken();
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
		Schema::drop('MediaBoxUser');
	}

}
