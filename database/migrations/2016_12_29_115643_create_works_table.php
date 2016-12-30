<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorksTable extends Migration {

	public function up()
	{
		Schema::create('works', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unique();
			$table->string('organization_name', 250)->nullable();
			$table->string('designation', 200)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('works');
	}
}