<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'school_id',
		'name',
		'description'
	];
	
	public function school(){
		return $this->belongsTo('App\Models\School');
	}
	
	public function courses(){
		return $this->hasMany('App\Models\Course');
	}
}
