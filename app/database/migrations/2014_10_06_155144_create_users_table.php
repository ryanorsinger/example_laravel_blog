<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('username', 100)->unique();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->rememberToken();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->enum('role', array('admin', 'contributor', 'guest'));
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
		Schema::drop('users');
	}

}
