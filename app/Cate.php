<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
	protected $table = 'cates';
	
	protected $fillable = ['name','image'];
	
	public function product (){
		return $this->hasMany('App\Model\Product');
	}
    public function cate_store (){
        return $this->hasMany('App\Model\Cate_Store');
    }
}
