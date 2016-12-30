<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class EducationalInfo extends Model {

	protected $table = 'educational_infos';
	public $timestamps = true;
	protected $fillable = array('intake', 'student_id');

}