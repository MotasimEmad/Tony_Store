<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
 
    public function products(){
        return $this->hasMany('App\product');
    }
}
