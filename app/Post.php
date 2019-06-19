<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function dislikes()
    {
        return $this->belongsToMany('App\User', 'dislikes')->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany('App\category');
    }
}
