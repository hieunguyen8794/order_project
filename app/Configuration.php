<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table = 'configuration';
	
	protected $fillable = ['time_limit','id_store'];


}
