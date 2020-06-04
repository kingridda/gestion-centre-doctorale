<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    //
    protected $guarded = [];

    public function theses(){
    	return $this->hasMany('App\These');
    }
    public function users(){
        return $this->hasMany('App\User');
    }
}
