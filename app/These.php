<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class These extends Model
{
    //
	protected $guarded = [];

	public function user(){
        return $this->hasOne('App\User');
    }
}
