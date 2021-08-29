<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'department_id',
		'name',
		'description'
	];
	 
	 public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
	
	 public function students()
    {
        return $this->hasMany('App\Models\Student');
    }
	
	 public function semesters()
    {
        return $this->hasMany('App\Models\Semester');
    }
}
