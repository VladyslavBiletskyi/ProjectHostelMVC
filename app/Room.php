<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function users()
    {
        //relation 1:M
        return $this->hasMany('App\User');
    }

    public function floor()
    {
        //describe a relation
        return $this->belongsTo('App\Floor');
    }

    public function comments()
    {
        //relation 1:M
        return $this->hasMany('App\Comment');
    }

}
