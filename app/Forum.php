<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    protected $guarded = [];

     public function rep_forums(){
        return $this->hasMany('App\Rep_forum');
    }
}
