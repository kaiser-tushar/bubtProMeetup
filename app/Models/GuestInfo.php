<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class GuestInfo extends Model {

	protected $table = 'guest_infos';
	public $timestamps = true;
	protected $fillable = array('name', 'email', 'mobile', 'relation', 'approval_status');

}