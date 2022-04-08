<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'user_id',
		'registration_id',
		'intake'
	];
	
	public function user(){
		return $this->belongsTo(User::Class);
	}
	
	public function course(){
		return $this->belongsToMany(Course::Class);
	}
	
	public function results(){
		return $this->hasMany(Results::Class);
	}
}
