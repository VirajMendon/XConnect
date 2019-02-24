<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_model extends Model
{
    protected $fillable = [
		'name',
		'code'
	];
}
