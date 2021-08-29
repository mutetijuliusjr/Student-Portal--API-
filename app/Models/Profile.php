<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

	protected $fillable = [
        'user_id',
        'pic',
        'surname',
        'first_name',
        'last_name',
        'phone',
        'national_id'
    ];

	public function user()
    {
        return $this->belongsToOne('App\Models\User');
    }
}
