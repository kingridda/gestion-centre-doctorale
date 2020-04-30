<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $guarded=[];


   public function encadrant(){
        return $this->belongsTo('App\Encadrant');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
