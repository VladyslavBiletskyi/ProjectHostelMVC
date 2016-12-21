<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public function rooms()
    {
        //relation 1:M
        return $this->hasMany('App\Room');
    }
}
