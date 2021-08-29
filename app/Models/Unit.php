<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'instructor_id',
		'name',
		'description',
		'instructor_id'
	];
	
	public function semesters(){
		return $this->hasMany('App\Models\Semester');
	}
	
	public function instructor(){
		return $this->belongsTo('App\Models\Instructor');
	}
	
	public function results(){
		return $this->hasMany('App\Models\Results');
	}
}
