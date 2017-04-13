<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rates';
	
	protected $fillable = [
        'id_user',
        'id_product',
        'rate',
        'comment'
        ];
    
    public function product (){
		return $this->belongTo('App\Model\Product');
	}
}
