<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passage extends Model
{
    protected $fillable = ['content', 'user_id', 'from', 'author'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function labels()
    {
        return $this->belongsToMany('App\Models\Label');
    }



    public function check(int $id)
    {

        $model = $this->find($id);
        $model->checked = 1;
        return $model->save();
    }


    public function favors()
    {
        return $this->hasMany('App\Models\Favor');
    }


    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

}



