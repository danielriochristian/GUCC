<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model 
{
	protected $table = 'tb_profile';
	public $timestamps = true;

	protected $dates = ['created_at'];
	protected $fillable = array('title', 'content');
}