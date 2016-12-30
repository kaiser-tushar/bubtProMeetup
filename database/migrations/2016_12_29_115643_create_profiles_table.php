<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	public function up()
	{
		Schema::create('profiles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 250);
			$table->string('email', 200)->unique();
			$table->string('mobile', 20);
			$table->text('present_address')->nullable();
			$table->date('dob')->nullable();
			$table->text('photo_path')->nullable();
			$table->tinyInteger('user_status')->default('0');
			$table->timestamps();
			$table->text('socials')->nullable();
			$table->enum('user_type', array('1', '2', '3'));
		});
	}

	public function down()
	{
		Schema::drop('profiles');
	}
}