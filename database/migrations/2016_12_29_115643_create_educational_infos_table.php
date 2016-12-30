<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationalInfosTable extends Migration {

	public function up()
	{
		Schema::create('educational_infos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unique();
			$table->enum('program', array('Day', 'Evening'));
			$table->string('department', 200);
			$table->integer('intake');
			$table->string('student_id', 11)->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('educational_infos');
	}
}