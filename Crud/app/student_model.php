<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_model extends Model
{
    protected $fillable = [
		'name',
		'course_id',
		'code',
		'branch',
		'phone'
	];
}
