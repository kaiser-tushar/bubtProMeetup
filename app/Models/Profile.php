<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $table = 'profiles';
	public $timestamps = true;
	protected $fillable = array('user_id','name','email','mobile','present_address','dob','user_status','socials','user_type');

}