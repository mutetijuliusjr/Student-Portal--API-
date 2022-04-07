<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'name',
		'description'
	];
	
	public function semesters(){
		return $this->belongsToMany(Semester::Class);
	}
	
	public function instructors(){
		return $this->belongsToMany(Instructor::Class)->using(Instructor_Unit::Class);
	}
	
	public function results(){
		return $this->hasMany(Results::Class);
	}
}
