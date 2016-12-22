<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FloorAd extends Model
{
    public function user()
    {
        //describe a relation
        return $this->belongsTo('App\User');
    }

    public function floor()
    {
        //describe a relation
        return $this->belongsTo('App\Floor');
    }

}
