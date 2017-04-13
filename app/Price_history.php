<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price_history extends Model
{
	protected $table = 'price_historys';
	
	protected $fillable = ['id_product','price','reason'];

    public function product (){
		return $this->belongTo('App\Model\Product');
	}
}
