<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model 
{

	protected $table = 'tb_news';
	public $timestamps = true;

	protected $dates = ['created_at'];
	protected $fillable = array('title', 'content');
}