<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
	protected $table = 'stores';
	
	protected $fillable = [
		        'name',
		        'address',
		        'owner_phone',
		        'owner_name',
		        'about_store',
		        'id_user',
		        'update_user',
		        'delete_user'
		        ];
	public function feedback (){
		return $this->hasMany('App\Model\Feedback');
	}
	public function order (){
		return $this->hasMany('App\Model\Order');
	}
	public function cate_store (){
		return $this->hasMany('App\Model\Cate_Store');
	}
	public function configuration (){
		return $this->hasOne('App\Model\Configuration');
	}
	public function user (){
		return $this->belongTo('App\Model\User');
	}
}
