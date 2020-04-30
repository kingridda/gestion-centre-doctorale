<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rep_forum extends Model
{
    //
    protected $guarded = [];
    
    public function forum(){
        return $this->belongsTo('App\Forum');
    }
}
