<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuestInfosTable extends Migration {

	public function up()
	{
		Schema::create('guest_infos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unique();
			$table->string('name', 250);
			$table->string('email', 250);
			$table->string('mobile', 20);
			$table->string('relation', 200);
			$table->tinyInteger('approval_status')->default('1');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('guest_infos');
	}
}