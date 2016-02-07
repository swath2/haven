<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'first_name',
        'last_name',
        'location_country',
        'location_region',
        'email',
        'company',
        'description',
        'profile_picture',
    ];

    protected $hidden = [
        'password','remember_token',
    ];

    public function team(){
        return $this -> belongsToMany('App/Team');
    }

    public function project(){
        return $this->hasMany('App/Project');
    }

    public function comment(){
        return $this->hasMany('App/Comment');
    }
}
