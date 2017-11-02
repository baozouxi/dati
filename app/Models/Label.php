<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{

    protected $fillable = ['content','user_id'];


    public function passages()
    {
        return $this->hasMany('App\Models\Passage');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    //过审
    public function check(int $id)
    {
        $model = $this->find($id);
        $model->checked = 1;
        return $model->save();
    }

}
