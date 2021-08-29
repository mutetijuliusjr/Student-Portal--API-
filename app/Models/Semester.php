<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'course_id',
		'name',
		'code',
		'unit_1',
		'unit_2',
		'unit_3',
		'unit_4',
		'unit_5',
		'unit_6',
		'unit_7',
		'unit_8',
		'unit_9',
		'unit_10'
	];
	
	public function course(){
		return $this->belongsTo(Course::class);
	}
	
	public function units(){
		return $this->belongsToMany('App\Models\Unit');
	}
}
