<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'unit_id',
		'student_id',
		'cat_1',
		'cat_2',
		'cat_3',
		'assignment_1',
		'assignment_2',
		'assignment_3',
		'exams',
		'attendance'
	];
	
	public function unit(){
		return $this->belongsTo('App\Models\Unit');
	}
	
	public function student(){
		return $this->belongsTo('App\Models\Student');
	}
}
