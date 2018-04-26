<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model {

	protected $table = 'tb_agent';
	public $timestamps = true;

	use SoftDeletes, CanResetPassword;

	protected $dates = ['deleted_at'];
	protected $fillable = array('id', 'email', 'first_name', 'last_name', 'gender', 'phone_num', 'birth_place', 'birth_date', 'avatar', 'address', 'id_village', 'id_district', 'id_city', 'id_province', 'count_rating', 'agent_type', 'password');

	

	public function comment_discussion()
	{
		return $this->belongsToMany('App\Models\Discussion', 'tb_discussion_comment', 'id_agent', 'id_disc')->withPivot('comment');
	}
}