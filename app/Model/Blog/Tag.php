<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Model\Blog\Post','post__tags');
    }
}
