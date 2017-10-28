<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passage extends Model
{
    protected $fillable = ['content', 'checked', 'user_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }



}



