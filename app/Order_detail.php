<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'order_details';
	
	protected $fillable = ['id_order','id_product','quantity','order_type'];


	public function product (){
		return $this->belongTo('App\Model\Product');
	}
    public function order (){
		return $this->belongTo('App\Model\Order');
	}
}
