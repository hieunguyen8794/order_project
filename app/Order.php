<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
	
	protected $fillable = ['status','note','table_number','id_user','id_store','update_user','delete_user'];
    
    public function order_detail (){
		return $this->hasMany('App\Model\Order_detail');
	}
    public function user (){
		return $this->belongTo('App\Model\User');
	}
    public function store (){
		return $this->belongTo('App\Model\Store');
	}
}
