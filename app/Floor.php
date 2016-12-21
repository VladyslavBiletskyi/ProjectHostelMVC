<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    protected $morphClass = 'Floor';

    public function rooms()
    {
        //relation 1:M
        return $this->hasMany('App\Room', 'id', 'floor_id');
    }
    public function floorAds()
    {
        //relation 1:M
        return $this->hasMany('App\FloorAd');
    }


}
