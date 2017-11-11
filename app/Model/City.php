<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function doctors()
    {
        return $this->hasMany('App\User');
    }
}
