<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'passage_id', 'user_id'];


    public function passage()
    {
        return $this->belongsTo('App\Models\Passage');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
