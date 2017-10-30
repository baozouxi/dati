<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{

    public function passages()
    {
        return $this->hasMany('App\Models\Passage');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
