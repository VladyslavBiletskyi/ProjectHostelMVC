<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user()
    {
        //describe a relation
        return $this->belongsTo('App\User');
    }

}
