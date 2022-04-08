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
        return $this->belongsTo(Department::Class);
    }
	
	 public function students()
    {
        return $this->belongsToMany(Student::Class);
    }
	
	 public function semesters()
    {
        return $this->hasMany(Semester::Class);
    }
}
