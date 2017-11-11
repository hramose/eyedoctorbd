<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sub_area extends Model
{
    public function doctors()
    {
        return $this->hasMany('App\User');
    }
}
