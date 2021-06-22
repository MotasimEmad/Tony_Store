<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acount extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
