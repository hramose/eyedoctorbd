<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Model\Blog\Post','post__categories');
    }
}
