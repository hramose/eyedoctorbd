<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    public function doctors()
    {
        return $this->hasMany('App\User');
    }
}
