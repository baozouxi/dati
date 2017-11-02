<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function passages()
    {
        return $this->hasMany('App\Models\Passage');
    }


    public function Labels()
    {
        return $this->hasMany('App\Models\Label');
    }

    public function favors()
    {
        return $this->hasMany('App\Models\Favor');
    }

}
