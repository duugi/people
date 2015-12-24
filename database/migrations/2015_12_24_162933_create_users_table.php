<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->bigIncrements('id');
			$table->timestamps();
			$table->string('fullname', 100);
			$table->string('email', 100)->unique();
			$table->string('password', 100);
			$table->string('salt', 30);
			$table->string('register_ip', 15);
			$table->string('forget_token', 100)->nullable();
			$table->string('active_token', 100)->nullable();
			$table->boolean('active');
			$table->string('activation_key', 100);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}