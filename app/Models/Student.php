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
		return $this->belongsTo('App\Models\User');
	}
	
	public function course(){
		return $this->belongsTo('App\Models\Course');
	}
	
	public function results(){
		return $this->hasMany('App\Models\Results');
	}
}
