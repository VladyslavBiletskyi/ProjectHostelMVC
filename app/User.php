<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public function comments()
    {
        //relation 1:M
        return $this->hasMany('App\Comment');
    }

    public function room()
    {
        //describe a relation
        return $this->belongsTo('App\Room');
    }

    public function ads()
    {
        //relation 1:M
        return $this->hasMany('App\FloorAd');
    }
    public function globalAds()
    {
        //relation 1:M
        return $this->hasMany('App\GlobalAd');
    }

}
