<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
	
	protected $fillable = [
	        'name',
	        'description',
	        'image',
	        'price',
	        'avg_rate',
	        'status',
	        'id_cate',
	        'update_user',
	        'delete_user'
	        ];
	public function rate (){
		return $this->hasMany('App\Model\Rate');
	}
    public function price_history (){
		return $this->hasMany('App\Model\Price_history');
	}
    public function order_detail (){
		return $this->hasMany('App\Model\Order_detail');
	}
    public function cate (){
		return $this->belongTo('App\Model\Cate');
	}
    
    
}
