<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function chambers()
    {
        return $this->hasMany('App\Chamber');
    }

    public static function byEmail($email)
    {
        return static::whereEmail($email)->first();
    }
    public function posts()
    {
        return $this->hasMany('App\Model\Blog\Post');
    }
}   
