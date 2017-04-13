<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate_Store extends Model
{
	protected $table = 'cate_store';
	
	protected $fillable = ['id_cate','id_store'];
	
	public function cate (){
		return $this->belongTo('App\Model\Cate');
	}
	public function store (){
		return $this->belongTo('App\Model\Store');
	}
	
}
