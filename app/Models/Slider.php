<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model {

	protected $table = 'tb_slider';
	public $timestamps = true;

	protected $dates = ['created_at'];
	protected $fillable = array('title', 'content');
}