<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'description',
        'is_public',
        'published',
        'views',
        'likes',
    ];

    public function team(){
        return $this->belongsTo('App/Team');
    }

    public function user(){
        return $this->belongsTo('App/User');
    }

    public function tag(){
        return $this->hasMany('App/Tag');
    }

    public function comment(){
        return $this->hasMany('App/Comment');
    }

    public function color(){
        return $this->hasMany('App/Color');
    }

    public function font(){
        return $this->hasMany('App/Font');
    }

    public function image(){
        return $this->hasMany('App/Image');
    }

    public function texture(){
        return $this->hasMany('App/Texture');
    }
}
