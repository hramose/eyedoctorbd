<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function tags()
    {
       return $this->belongsToMany('App\Model\Blog\Tag', 'post__tags')->withTimestamps();
    }
    public function categories()
    {
       return $this->belongsToMany('App\Model\Blog\Category', 'post__categories')->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
