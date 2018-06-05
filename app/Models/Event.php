<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

	protected $table = 'tb_event';
	public $timestamps = true;

	protected $dates = ['created_at'];
	protected $fillable = array('title', 'content');
}
