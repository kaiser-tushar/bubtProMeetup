<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unique();
			$table->integer('guest_id')->nullable();
			$table->enum('payment_type', array('Hand', 'BKash'));
			$table->string('txn_id', 200)->nullable();
			$table->integer('amount');
			$table->string('sender_number', 20)->nullable();
			$table->string('receiver_number', 20)->nullable();
			$table->integer('receiver_id');
			$table->integer('approval_id');
			$table->date('payment_date')->nullable();
			$table->datetime('confirmation_date')->nullable();
			$table->tinyInteger('confirmation_status')->default('0');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}