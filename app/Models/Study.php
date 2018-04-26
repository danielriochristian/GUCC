<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Study extends Model {

	protected $table = 'tb_study_program';
	public $timestamps = true;

	protected $fillable = array('name', 'information');
}