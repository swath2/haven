<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function user(){
        return $this->hasMany('App/User');
    }
    public function project(){
        return $this->hasMany('App/Project');
    }

}
