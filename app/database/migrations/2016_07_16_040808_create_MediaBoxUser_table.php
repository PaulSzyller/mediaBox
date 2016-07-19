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
            $table->text('username');
            $table->text('email');
            $table->text('password');
            $table->text('name');
            $table->text('profile_pic');
            $table->text('location');
            $table->date('dob');
            $table->text('question');
            $table->text('answer');
            $table->enum('gender', ['male', 'female']);
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
