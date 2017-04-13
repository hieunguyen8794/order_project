<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
	
	protected $fillable = ['subject','content','id_store'];
    
	public function store (){
		return $this->belongTo('App\Model\Store');
	}
}
