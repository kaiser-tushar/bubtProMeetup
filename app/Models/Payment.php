<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

	protected $table = 'payments';
	public $timestamps = true;
	protected $fillable = array('payment_type', 'amount', 'receiver_id', 'approval_id');

}