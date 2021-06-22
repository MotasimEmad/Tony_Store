<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class product extends Model
{
  
    
    
    public function category(){
       
        return $this->belongsTo('App\category');
    }
    public function orders(){
        return $this->hasMany('App\order');
    }
}
