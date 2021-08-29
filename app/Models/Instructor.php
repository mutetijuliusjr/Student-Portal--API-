<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
	
	protected $fillable = ['user_id'];
	
	public function user(){
		return $this->belongsTo('App\Models\User');
	}
	
	public function units(){
		return $this->hasMany('App\Models\Unit');
	}
}
